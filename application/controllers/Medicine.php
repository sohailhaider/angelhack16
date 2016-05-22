<?php
/**
 * Created by PhpStorm.
 * User: Sohail Haider
 * Date: 22-May-16
 * Time: 8:34 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Medicine extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Store_model");
    }

    public function show($id) {
        $location = $this->session->userdata('locations');

        $data = $this->Store_model->getProductById($id);

    }
}
