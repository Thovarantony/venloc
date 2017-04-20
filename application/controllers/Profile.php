<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Profile extends CI_Controller {

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
	public function home()
	{
		$this->load->view('index_view');
	}
	
	public function best_deals()
	{
			$this->load->view('deals_view');
	}
	
		public function products()
	{
		$this->load->view('products_view');
	}
	
	public function email()
	{
			$this->load->view('mail_view');
	}
	
	public function events()
	{
		$this->load->view('events_view');
	}
	
	public function services()
	{
			$this->load->view('services_view');
	}
	
		public function about()
	{
		$this->load->view('about_view');
	}
	
	public function ground_provision()
	{
		$data['category_options'] = $this->Product_model->category_options();
		$this->load->view('ground_view', $data);
	}
	
	public function vegies()
	{
			$this->load->view('vegies_view');
	}
	
	public function herbs()
	{
		$this->load->view('herbs_view');
	}
	
	public function nuts()
	{
			$this->load->view('nuts_view');
	}
	
	public function beverages()
	{
		$this->load->view('beverages_view');
	}
	
	public function seafood()
	{
			$this->load->view('seafood_view');
	}
	
	public function poultry()
	{
			$this->load->view('poultry_view');
	}
}