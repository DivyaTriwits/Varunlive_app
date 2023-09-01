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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
/*default main page diaplaying */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}
/*for displaying the perticualr content in the page */
	public function contant_us() {
        redirect('main#contact_us');
    }
	public function solutions() {
        redirect('main#services');
    }
    public function why_us() {
        redirect('main#about');
    }
    public function careers() {
        redirect('main#careers');
    }
    public function condition_syndication() {
        redirect('solutions-page#content_syndication');
    }
    public function lead_nurturing() {
        redirect('solutions-page#lead_nurturing');
    }
    public function account_based() {
        redirect('solutions-page#account_based');
    }
    public function data_enrichment() {
        redirect('solutions-page#data_enrichment');
    }
    public function contact_discovery() {
        redirect('solutions-page#contact_discovery');
    }
    public function sales_targets_page() {
        redirect('solutions-page#sales_targets');
    }
    public function smart_lead() {
        redirect('solutions-page#smart_lead');
    }

 /*for displaying the perticular main pages*/
   
	public function lead_management()
	{
		$this->load->view('header');
		$this->load->view('lead_management');
		$this->load->view('footer');
	}
	public function solutions_page()
	{
		$this->load->view('header');
		$this->load->view('solutions');
		$this->load->view('footer');
	}
	public function data_solution()
	{
		$this->load->view('header');
		$this->load->view('data_solution');
		$this->load->view('footer');
	}
	public function sales_targets()
	{
		$this->load->view('header');
		$this->load->view('sales_targets');
		$this->load->view('footer');
	}
	public function case_studies()
	{
		$this->load->view('header');
		$this->load->view('case_studies');
		$this->load->view('footer');
	}
	public function about_us_page()
	{
		$this->load->view('header');
		$this->load->view('about_us_page');
		$this->load->view('footer');
	}
	public function why_us_page()
	{
		$this->load->view('header');
		$this->load->view('why_us');
		$this->load->view('footer');
	}

/*for the case stude displaying functions*/
	public function case1_studies()
	{
		$this->load->view('header');
		$this->load->view('case1_studies');
		$this->load->view('footer');
	}
	public function case2_studies()
	{
		$this->load->view('header');
		$this->load->view('case2_studies');
		$this->load->view('footer');
	}
	public function case3_studies()
	{
		$this->load->view('header');
		$this->load->view('case3_studies');
		$this->load->view('footer');
	}
	public function case4_studies()
	{
		$this->load->view('header');
		$this->load->view('case4_studies');
		$this->load->view('footer');
	}
	public function case5_studies()
	{
		$this->load->view('header');
		$this->load->view('case5_studies');
		$this->load->view('footer');
	}
	public function case6_studies()
	{
		$this->load->view('header');
		$this->load->view('case6_studies');
		$this->load->view('footer');
	}
	public function case7_studies()
	{
		$this->load->view('header');
		$this->load->view('case7_studies');
		$this->load->view('footer');
	}
	public function case8_studies()
	{
		$this->load->view('header');
		$this->load->view('case8_studies');
		$this->load->view('footer');
	}
	public function case9_studies()
	{
		$this->load->view('header');
		$this->load->view('case9_studies');
		$this->load->view('footer');
	}
	public function case10_studies()
	{
		$this->load->view('header');
		$this->load->view('case10_studies');
		$this->load->view('footer');
	}

}
