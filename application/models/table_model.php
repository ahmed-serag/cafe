<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_model extends CI_Model {

    public function get_tables(){
        return $this->db->get('tables')->result();
    }
    public function get_table($id){
         $this->db->select('*');
          $this->db->where('id', $id);
        return $this->db->get('tables')->result();
    }
    public function get_table_food($table){
        $this->db->select('*');
        $this->db->from('tablefood');
        $this->db->join('food','food.id = tablefood.food','left');
        $this->db->where('table', $table);
        
        $query = $this->db->get();
        return $query->result();
    }
    public function delete_table_food($table){
         $this->db->delete('tablefood', array('table' => $table)); 
          $array = array(
            'status' => 0,
            'price' => "0"
        );
        $this->db->set($array);
        $this->db->where('id', $table);
        $this->db->update('tables');
    }
    public function insert_items($table,$data)
    {
        $this->db->delete('tablefood', array('table' => $table)); 
        foreach($data as $rec){
            $this->db->insert('tablefood', $rec);
        }
    }
    public function update_table($table, $price){
        $array = array(
            'status' => 1,
            'price' =>$price
        );
        $this->db->set($array);
        $this->db->where('id', $table);
        $this->db->update('tables');
    }

}
