<?php

class UserConfig extends CI_Model { 

    public function userLogin(){
       return 'test';
    }

    public function addInformation($data, $email){

        // Refer
        // $query="insert into user_account values('','$email','$password')";
        //Insert Data into Database
        $query = $this->db->where('email',$email)->get('user_info');

        if($query->num_rows() > 0){
           return true;
        }else{
            $this->db->insert('user_info',$data);
        }

        // $sample = $this->db->where('user_email', $email)->get();
        // $this->db->insert('cntctusers', $data);
        // var_dump($data);
    }


}    

?>