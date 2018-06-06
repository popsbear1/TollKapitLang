<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['procacts'] = $this->admin_model->getProcurementProjects();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/home', $data);
		$this->load->view('admin/fragments/footer');

	}

	public function planView(){
		$data['plans'] = $this->admin_model->getProjectPlan();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/plan', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addPlanView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/addPlan');
		$this->load->view('admin/fragments/footer');	
	}

	public function addPlan(){
		$project_no = mysql_real_escape_string(htmlspecialchars($this->input->post('project_no')));
        $project_title = mysql_real_escape_string(htmlspecialchars($this->input->post('project_title')));
        $municipality=mysql_real_escape_string(htmlspecialchars($this->input->post('municipality')));
        $barangay=mysql_real_escape_string(htmlspecialchars($this->input->post('barangay')));
        $type=mysql_real_escape_string(htmlspecialchars($this->input->post('type')));
        $mode=mysql_real_escape_string(htmlspecialchars($this->input->post('mode')));
        $ABC=mysql_real_escape_string(htmlspecialchars($this->input->post('ABC')));
        $source=mysql_real_escape_string(htmlspecialchars($this->input->post('source')));
        $account=mysql_real_escape_string(htmlspecialchars($this->input->post('account')));
	}

}