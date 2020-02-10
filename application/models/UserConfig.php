<?php

class UserConfig extends CI_Model { 

    public function userLogin(){
       return 'test';
    }

    public function addInformation($data, $email){

        // $sample = $this->db->where('user_email', $email);
        // $this->db->get('cntctusers')->array();
        var_dump($this->db->get('cntctusers')->where('user_email', $email)->result_array());
        // $this->db->insert('cntctusers', $data);
        // var_dump($data);
    }


}    

?>