<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 10/14/15
 * Time: 11:44 AM
 */
class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_User');
        $this->load->model('Model_Products');
        $this->load->helper('form');
        $this->exclusiveRouteFor('ADMIN', @$_SESSION['type']);
    }

    public function home(){
//        $this->load->view('admin/header');
//        $this->load->view('admin/index');
//        $this->load->view('admin/footer');
        redirect(base_url().'Admin/manageProduct');
    }

    public function addProduct(){
        $this->load->view('admin/header');
        $this->load->view('admin/addItem');
        $this->load->view('admin/footer');
    }

    public function manageProduct(){
        $data = array(
            'products'  =>  $this->Model_Products->getAllProducts()
        );
        $this->load->view('admin/header');
        $this->load->view('admin/manageProduct', $data);
        $this->load->view('admin/footer');
    }

    public function manageUsers(){
        $usersData['users'] = $this->Model_User->getAllUsers();
        $this->load->view('admin/header');
        $this->load->view('admin/manageUsers', $usersData);
        $this->load->view('admin/footer');
    }

    public function doAddProduct(){

        $path_parts = pathinfo($_FILES['prodImg']["name"]);
        $extension = $path_parts['extension'];
        $newfilename= uniqid().".".$extension;

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '4194304';
        $config['file_name'] = $newfilename;
//        $config['max_width'] = '1024';
//        $config['max_height'] = '768';
        $this->load->library('upload', $config);

        if($this->upload->do_upload('prodImg')){
            $data = array('upload_data' => $this->upload->data());
        }else{
            $_SESSION['errorMsg'] = $this->upload->display_errors();
            redirect(base_url().'Admin/addProduct');
        }

        $productData = array(
            'name'          =>  $this->input->post('prodName'),
            'description'   =>  $this->input->post('prodDesc'),
            'qty'           =>  $this->input->post('prodQty'),
            'price'         =>  $this->input->post('prodPrice'),
            'add_info'      =>  $this->input->post('prodAddInfo'),
            'img'           =>  base_url().'uploads/'.$newfilename
        );

        $productInsertId = $this->Model_Products->addProduct($productData);
        redirect(base_url().'Admin/viewProduct/'.$productInsertId);

//        if($img['size'] >= 4194304){
//            $_SESSION['errorMsg'] = 'File size is too large. Must be below 4mb';
//            redirect(base_url().'Admin/addProduct');
//        }
    }

    public function viewProduct($id){
        $prodData['prod'] = $this->Model_Products->getProductData($id);
        $this->load->view('admin/header');
        $this->load->view('admin/viewProduct', $prodData);
        $this->load->view('admin/footer');
    }

    public function deleteProduct($id){
        $this->Model_Products->deleteProduct($id);
        $_SESSION['successMsg'] = '<i class="fa fa-check"></i> Product has been deleted';
        redirect(base_url().'Admin/manageProduct');
    }

    public function editProduct($id){
        $data['product'] = $this->Model_Products->getProductData($id);
        $this->load->view('admin/header');
        $this->load->view('admin/editItem', $data);
        $this->load->view('admin/footer');
    }
}