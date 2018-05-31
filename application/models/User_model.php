<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function save($username, $pwd, $realname, $tel){
        $this -> db -> insert('t_user', array(
            'username'=>$username,
            'password'=>$pwd,
            'realname'=>$realname,
            'tel'=>$tel));
        return $this -> db -> affected_rows();
    }

    public function find_by_name($username, $pwd){
        //select * from t_user where username=$username and password=$pwd
        $query = $this -> db -> get_where('t_user', array(
            'username' => $username,
            'password' => $pwd
        ));
        return $query -> row();
    }

    public function find_all()
    {
        //select * from t_user
        return $this->db->get('t_user')->result();
    }

    public function delete_user($user_id){
        //delete from t_user where user_id=$user_id
        $this->db->delete('t_user', array('user_id'=>$user_id));
        return $this->db->affected_rows();
    }
}