<?php
use Restserver\libraries\REST_Controller;

/**
 *
 */
class Rooms extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('room_model');
  }

  public function roomrate_get()
  {
    $data = $this->room_model->roomrate();
    $this->response( [ 'tarif' => $data ], 200 );
  }

  public function roomcountbytype_get()
  {
    $data = $this->room_model->roomcount();
    $this->response( [ 'rooms' => $data ], 200 );
  }

  public function roomlist1_get()
  {
    $where = '';
    if (null !== $this->get('lt')) {
      $lantai = $this->get('lt');
      $where = "r.room LIKE '" . $lantai . "__%'" ;
    }
    $data = $this->room_model->roomlist1( $where );
    $this->response( [ 'rooms' => $data ], 200 );
  }

  public function test_get()
  {
    $msg = $this->get('msg');
    $this->response( [ 'response'  => [
                                        'status' => 'ok',
                                        'msg' => $msg
                                      ]
                      ]);
  }

}



 ?>
