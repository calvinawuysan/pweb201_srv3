<?php
use Restserver\libraries\REST_Controller;

/**
 *
 */
class Guests extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('guest_model');
  }

  public function guestlist1_get()
  {
    $data = $this->guest_model->guestlist1();
    $this->response( [ 'guests' => $data ], 200 );
  }
}
  ?>
