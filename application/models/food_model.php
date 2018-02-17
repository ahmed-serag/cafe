<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_model extends CI_Model {

    public function get_food(){
           return $this->db->get("food")->result();
    }
    public function add($data)
    {
             $this->db->insert('food', $data);
    }
    
    public function get_food_with_sections(){
                    $this->db->select('food.item_name as name, food.id as id, food.price as price, section.id as section_id , section.name as section');    
                    $this->db->from('food');
                    $this->db->join('section', 'section.id = food.section');
                   
             return $this->db->get()->result();
    }
    public function get_food_price($id){
            $this->db->select('price');
            $this->db->from('food');
            $this->db->where('id', $id);
           return $this->db->get()->result();
    }
    function editData($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('food', $data);
    }
           public function remove($data)
    {





        $this->db->where('id', $data['id']);
        $this->db->delete('food');
    
    }


}
