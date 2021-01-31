<?php
use Restserver\libraries\REST_Controller;

/**
 *
 */
class Members extends REST_Controller
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

  public function Memberlist1_get()
  {
    $data = $this->member_model->memberlist1();
    $this->response( [ 'members' => $data ], 200 );
  }

  public function newmember_post()
  {
    $data = [
      'member_ID' => $this->post('id'),
      'nama' => $this->post('nama'),
      'alamat' => $this->post('alamat'),
      'kota' => $this->post('kota'),
      'negara' => $this->post('negara')
    ];
    $this->member_model->insertMember( $data );
  }
}
  ?>
