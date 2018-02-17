<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

		$tables = $this->table_model->get_tables();
		$data['tables'] = $tables;
		$this->load->view('home',$data);
	}

	public function get_table($table){
		$data['sections'] = $this->section_model->get_sections();
		$data['food'] = $this->food_model->get_food();
		$data['table_food'] = $this->table_model->get_table_food($table);
		$data['table']=$table;
		//var_dump($data['table_food']);
		$this->load->view('menu',$data);
	}
	public function add_items(){
		$item_id = $this->input->post('item');
		$quantity = $this->input->post('quantity');
		$table = $this->input->post('table');
		$data = array();
		$price = 0;
		foreach($item_id as $key=>$val)
		{
			$p = $this->food_model->get_food_price($val)[0]->price;
			$total = ((float)$p) * ((float)$quantity[$key]);
			$data[] = array('food'=>(int)$val,'quantity'=>(int)$quantity[$key],'table'=>(int)$table, 'total'=>$total);
			$price = $total + $price;
		}
		 //var_dump($data);
		$this->table_model->insert_items($table, $data);
		$this->table_model->update_table($table, $price);
		$tables = $this->table_model->get_tables();
		$d['tables'] = $tables;
		$this->load->view('home',$d);
	}
	public function check_out($table){
		$data['sections'] = $this->section_model->get_sections();
		$data['food'] = $this->food_model->get_food();
		$data['table_food'] = $this->table_model->get_table_food($table);
		$data['table']=$this->table_model->get_table($table);
		$this->table_model->delete_table_food($table);
		$this->load->view('checkout',$data);
	}
}
