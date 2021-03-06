<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Model_User');
        $this->load->model('Model_Products');
    }

    public function index(){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $this->load->model('Model_Cartsession');

        $data['products'] = $this->Model_Products->getAllProducts('USER');
        $data['cart'] = $this->Model_Cartsession->getCartContent(@$_SESSION['id']);
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    public function register(){
        if($this->Model_User->checkUser($this->input->post('regEmail')) == 0){
            $data = array(
                'email'     =>  $this->input->post('regEmail'),
                'password'  =>  md5($this->input->post('regPass')),
                'firstname' =>  $this->input->post('regFname'),
                'lastname'  =>  $this->input->post('regLname'),
                'type'      =>  'USER',
            );

            if($this->Model_User->addUser($data) != true){
                echo 'ERROR500: There seems to be a problem in the server.<br/>Please try again later or contact the admin for immediate action';
            }else{
                $user_data = $this->Model_User->getUserData($this->input->post('regEmail'));

                $loggedUser = array(
                    'id'            =>  $user_data['id'],
                    'email'         =>  $user_data['email'],
                    'firstname'     =>  $user_data['firstname'],
                    'lastname'      =>  $user_data['lastname'],
                    'type'          =>  $user_data['type'],
                    'logged_in'     =>  true
                );

                $this->session->set_userdata($loggedUser);
                redirect('/');
            }
        }else{
            $_SESSION['registerErrorMsg'] = 'This email is already registered';
            redirect('/');
        }
    }

    public function login(){
        $data = array(
            'email'     =>  $this->input->post('loginEmail'),
            'password'  =>  $this->input->post('loginPassword')
        );
        if($this->Model_User->authUser($data) > 0){
            $user_data = $this->Model_User->getUserData($this->input->post('loginEmail'));
//            $user_data['logged_in'] = true;
//            var_dump($user_data['email']);

            $loggedUser = array(
//                'username'  =>  $user_data['email'],
                'id'            =>  $user_data['id'],
                'email'         =>  $user_data['email'],
                'firstname'     =>  $user_data['firstname'],
                'lastname'      =>  $user_data['lastname'],
                'type'          =>  $user_data['type'],
                'logged_in'     =>  true
            );

            $this->session->set_userdata($loggedUser);

            if($user_data['type'] == 'ADMIN'){
                redirect(base_url().'Admin/home');
            }else{
                redirect(base_url());
            }
        }else{
            $this->load->view('error_page', array('error' => 'Login Credentials Invalid'));
//            echo 'LOGIN FAILED';
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function addToCart($id){
        $this->load->model('Model_Cartsession');
        $data = array(
            'product_id'    =>  $this->input->post('prodId'),
            'user_id'       =>  $_SESSION['id'],
            'cart_qty'      =>  $this->input->post('cartQty'),
            'product_name'  =>  $this->input->post('prodName'),
            'price_ea'      =>  $this->input->post('prodPrice'),
            'price_total'   =>  $this->input->post('prodPrice')*$this->input->post('cartQty')
        );
        $this->Model_Cartsession->addToCart($data);
        redirect(base_url());
    }

    public function deleteCartProduct($id){
        $this->load->model('Model_Cartsession');
        $this->Model_Cartsession->removeCartProduct($id);
        redirect(base_url());
    }

    public function checkout(){
        $this->load->model('Model_Cartsession');
        $prodId = $this->input->post('cart_prodId');
        $prodQty = $this->input->post('cart_prodQty');
        $cartId = $this->input->post('cart_id');

        for($i = 0; $i < count($prodId); $i++){
            $this->Model_Products->decreaseQty($prodId[$i], $prodQty[$i]);
            $this->Model_Cartsession->deleteCartSession($cartId[$i]);
        }

        redirect(base_url());
    }
}
