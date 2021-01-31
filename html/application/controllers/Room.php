<?php
/**
 *
 */
class Room extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('room_model');
  }

  public function roomlist( $lantai = '' )
  {
    if ($lantai == '') {
      $where = '';
    }
    else {
      $where = "rm.room LIKE '".$lantai."__%'" ;
    }
    $viewdata['judul'] = "PWEB Hotel - Room List";
    $viewdata['rooms'] = $this->room_model->roomList( $where );
    $this->load->view('layout/header');
    $this->load->view('roomlist', $viewdata);
    $this->load->view('layout/footer');
	}
}










 ?>
