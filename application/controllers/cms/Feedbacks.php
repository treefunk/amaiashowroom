<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedbacks extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('feedback_model');
  }

  public function index()
  {
    $res = $this->admin_model->all();
    $data['res'] = $res;
    $this->wrapper('cms/index', $data);
  }


}
