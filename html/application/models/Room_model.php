<?php

class Room_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function roomList( $where = '' )
  {
    // semua daftar kamar
    $this->db->select('rm.room, rt.rtype , rt.rate, rv.dview, rate+(rate*addv) frate, gs.date_in, gs.date_out');
    $this->db->join('roomtype rt' , 'rm.rtype = rt.kode');
    $this->db->join('views rv' , 'rm.dview=rv.vcode');
    $this->db->join('guests gs', 'rm.room=gs.room');
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get( 'rooms rm' );
    return $query->result_array();
  }

  public function roomrate()
  {
    /* SQL:
    SELECT * FROM roomtype
    */
    $query = $this->db->get('roomtype');
    return $query->result();
  }

  public function roomlist1()
  {
    /* SQL:
    SELECT r.room, t.rtype, t.rate
    FROM rooms r
    LEFT JOIN roomtype t ON (r.rtype=t.kode)
    */
    $this->db->select('r.room, t.rtype, t.rate, v.dview, rate+(rate*addv) vrate');
    $this->db->from('rooms r');
    $this->db->join('roomtype t', 'ON(r.rtype=t.kode)');
    $this->db->join('views v' , 'ON(r.dview=v.vcode)');
    $query = $this->db->get();
    return $query->result();
  }

  public function roomcount()
  {
    /* SQL:
    SELECT t.rtype, t.rate, COUNT(*) jumlah_kamar
    FROM rooms r
    LEFT JOIN roomtype t ON (r.rtype=t.kode)
    GROUP BY r.rtype
    */
    $this->db->select('t.rtype, t.rate, COUNT(*) jumlah_kamar');
    $this->db->from('rooms r');
    $this->db->join('roomtype t', 'ON(r.rtype=t.kode)');
    $this->db->group_by('r.rtype');
    $query = $this->db->get();
    return $query->result();
  }
}









 ?>
