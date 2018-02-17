<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function index()
    {
            	if($this->session->userdata("username")=="admin" )
				{
       						$data['sections'] = $this->section_model->get_sections();
            $this->load->view('homeAdmin',$data);
				}
			else
			{
					 $this->load->view('signin/signin_form');
			}


		
	}

	public function login(){

        $email= $this->input->post("user");
        $password = $this->input->post("pass");
        
        if($this->section_model->authenticate($email, $password)||$this->session->userdata('username')=="admin")
		{

		$data['sections'] = $this->section_model->get_sections();
            $this->load->view('homeAdmin',$data);

        }
        else
        {
            redirect( $this->config->base_url()."index.php/admin", 'refresh');

        }
		 
	}
    public function sections()
    {
    
		$sections = $this->section_model->get_sections();
	
		$i=1;
						
		foreach($sections as $section)
		{

		echo '<tr>
			<td class="text-center">'. $i++ .'</td>
			<td>'.$section->name.'</td>
			
	
			<td class="td-actions text-right">
			<button type="button" rel="tooltip" title="Edit Profile" id="editsection" data-toggle="modal" data-target="#editmyModal" data-name= '."'$section->name'".'  data-id='.$section->id.'   class="btn btn-success btn-simple btn-xs">
				<i class="fa fa-edit"></i>
				</button>
				<button type="button" rel="tooltip" title="Remove"  onclick="deletesection('. $section->id .')"; class="btn btn-danger btn-simple btn-xs">
					<i class="fa fa-times"></i>
				</button>
			</td>
		</tr>';
					}
	
    }
        public function add_section()
    {
        $data= $this->input->post();
          

        $this->section_model->add($data);
         redirect( $this->config->base_url()."index.php/admin", 'refresh');


    }
    public function add_food()
    {
        $data= $this->input->post();
          

        $this->food_model->add($data);
         redirect( $this->config->base_url()."index.php/admin", 'refresh');


    }
     public function food()
    {
      
       $id= $this->input->post("id");
		 $foods = $this->food_model->get_food_with_sections();
         
	
		$i=1;
						
		foreach($foods as $food)
		{
            if($id != 0 && $food->section_id != $id )
            {   continue;

            }

		echo '<tr>
			<td class="text-center">'. $i++ .'</td>
			<td>'.$food->name.'</td>
			
		<td>'.$food->section.'</td>		
	
			<td class="text-right">'.$food->price.'</td>
		
			<td class="td-actions text-right">
			<button type="button" rel="tooltip" title="Edit Profile" id="editfood" data-toggle="modal" data-target="#editmyModalfood" data-id='.$food->id.'  data-name='."'$food->name'".' data-price='.$food->price.' data-section='.$food->section_id.'   class="btn btn-success btn-simple btn-xs">
				<i class="fa fa-edit"></i>
				</button>
				<button type="button" rel="tooltip" title="Remove"  onclick="deletefood('. $food->id .')"; class="btn btn-danger btn-simple btn-xs">
					<i class="fa fa-times"></i>
				</button>
			</td>
		</tr>';
					}
	
    }
    public function removeSection()
    {
	$data = $this->input->post();
		$this->section_model->remove($data);
   redirect( $this->config->base_url()."index.php/admin", 'refresh');

    }
    public function removeFood()
    {
        	$data = $this->input->post();
		$this->food_model->remove($data);
  redirect( $this->config->base_url()."index.php/admin", 'refresh');

    }


		public function editfood()
	{
		$data = $this->input->post();
		$this->food_model->editData($data);
  redirect( $this->config->base_url()."index.php/admin", 'refresh');


	
    }
    		public function editsection()
	{
		$data = $this->input->post();
		$this->section_model->editData($data);
		  redirect( $this->config->base_url()."index.php/admin", 'refresh');


	}
    public function signout()
    { 
        $this->session->sess_destroy();

      
          redirect( $this->config->base_url()."index.php", 'refresh');

    

    }
	
	
}
