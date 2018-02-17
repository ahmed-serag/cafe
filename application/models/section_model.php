<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section_model extends CI_Model {

    public function get_sections_food(){
        $this->db->select('*');
        $this->db->from('section');
        $this->db->join('food', 'section.id = food.section','left');
        $this->db->order_by('name', 'DESC');
        $query = $this->db->get();
        return $query->result();   
    }

        public function add($data)
    {
             $this->db->insert('section', $data);
    }
    public function get_sections(){
        return $this->db->get("section")->result();
    }
 public function get_section_whereID($id){
        return $this->db->get_where('section', array('id' => $id))->result()[0];
    }


       public function remove($data)
    {





        $this->db->where('id', $data['id']);
        $this->db->delete('section');
    
    }
        function editData($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('section', $data);
    }

     function authenticate($username, $password) {

        $result = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        if ($result->num_rows() == 1) {
             $user_info = $result->row();
     
             $this->session->set_userdata('user_id', $user_info->id);
             $this->session->set_userdata('username', $user_info->username);
           
            
             
            return true;
        }
        else 
        {
              
              
            return false;
        }
    }

}
