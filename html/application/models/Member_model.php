<?php

class Member_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function memberList( $where = '' )
  {
    // semua daftar member
    $this->db->select('mm.member_ID, mm.nama , cc.Country, mm.kota, mm.alamat');
    $this->db->join('country cc' , 'mm.negara = cc.CC');
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get( 'members mm' );
    return $query->result_array();
  }

  public function memberlist1 ()
  {
    $this->db->select('mm.member_ID, mm.nama, cc.Country, mm.telepon');
    $this->db->from('members mm');
    $this->db->join('country cc' , 'ON(mm.negara=cc.CC)');
    $query = $this->db->get();
    return $query->result();
  }

  public function insertMember($data)
  {
    $this->db->insert( 'members', $data );
  }

}
