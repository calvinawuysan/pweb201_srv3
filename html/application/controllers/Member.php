<?php
/**
 *
 */
class Member extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('member_model');
  }

  public function memberlist( $negara = '' )
  {
    if ($negara == '') {
      $where = '';
    }
    else {
      $where = "CC LIKE '".$negara."' " ;
    }
    $viewdata['judul'] = "PWEB Hotel - Member List";
    $viewdata['members'] = $this->member_model->memberList( $where );
    $this->load->view('layout/header');
    $this->load->view('memberlist', $viewdata);
    $this->load->view('layout/footer');
  }
}
