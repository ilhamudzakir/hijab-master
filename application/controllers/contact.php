<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends PX_Controller {

	public function __construct() {
		parent::__construct();
		$this->controller_attr = array('controller' => 'contact','controller_name' => 'Contact Us','controller_id' => 0);
                $this->do_underconstruct();
	}


	function index(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('contact','Contact');
		$data['address']= $this->model_basic->select_where($this->tbl_static_content,'id','6')->row();
		$data['phone']= $this->model_basic->select_where($this->tbl_static_content,'id','7')->row();
		$data['fax']= $this->model_basic->select_where($this->tbl_static_content,'id','8')->row();
		$data['content'] = $this->load->view('frontend/contact/index',$data,true);
		$this->load->view('frontend/index',$data); 
	}
        
        function save_guest_book()
        {
            $data_input = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'subject' => $this->input->post('subject'),
                'content' => $this->input->post('content'),
                'date_created' => date('Y-m-d H:i:s', now()));
            if(!$this->model_basic->insert_all($this->tbl_guest_book, $data_input))
                redirect ('contact?submit=error');
            else
                redirect ('contact?submit=success');
        }
}
