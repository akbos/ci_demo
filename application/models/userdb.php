<?php

class Userdb extends CI_Model {

     var $first = '';
     var $last  = '';
     var $address = '';
     var $city = '';

     function __construct()
     {
        parent::__construct();
     }

     function get_last_ten_entries(){
       $query = $this->db->get('base');
       return$query->result_array();
     }



     function insert($first, $last, $address, $city){
         $data = array('first'=>$first, 'last'=>$last, 'address'=>$address, 'city'=>$city);
         $this->db->insert('base', $data);
     }

}
