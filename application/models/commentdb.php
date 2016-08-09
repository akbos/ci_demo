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



     function insert($id, $subject, $body){
         $data = array('id'=>$id, 'subject'=>$subject, 'body'=>$body);
         $this->db->insert('base', $data);
     }

}
