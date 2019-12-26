<?php
    class UserModel extends CI_Model
    {
        public function __construct() {
            parent::__construct();
        }
        public function select($login,$password)
        {
            # code...
            $user= $this->db->get_where('user',array('LOGIN'=>$login,'PASSWORD'=>$password))->result();
            if(count($user)==0){
                throw new Exception("Login or Password not found", 1);
            }
            return $user;
        }
    }
?>