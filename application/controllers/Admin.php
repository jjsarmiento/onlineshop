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
        $this->exclusiveRouteFor('ADMIN', @$_SESSION['type']);
    }

    public function home(){
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
}