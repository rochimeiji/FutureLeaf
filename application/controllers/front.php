<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class front extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
	
	function index()
	{
		$data['page'] = 'home';
		$this->load->view('main',$data);
	}
	function home2()
	{
		$data['page'] = 'home2';
		$this->load->view('main',$data);
	}
	function projects()
	{
		$data['page'] = 'projects';
		$this->load->view('main',$data);
	}
	function aboutPage()
	{
		$data['page'] = 'aboutPage';
		$this->load->view('main',$data);
	}
	function servicesPage()
	{
		$data['page'] = 'servicesPage';
		$this->load->view('main',$data);
	}
	function serviceDetailedPage()
	{
		$data['page'] = 'serviceDetailedPage';
		$this->load->view('main',$data);
	}
	function projectDetailedPage()
	{
		$data['page'] = 'projectDetailedPage';
		$this->load->view('main',$data);
	}
	function blogPage()
	{
		$data['page'] = 'blogPage';
		$this->load->view('main',$data);
	}
	function contactPage()
	{
		$data['page'] = 'contactPage';
		$this->load->view('main',$data);
	}
	function galleryClassicPage()
	{
		$data['page'] = 'galleryClassicPage';
		$this->load->view('main',$data);
	}
	function galleryProjectsPage()
	{
		$data['page'] = 'galleryProjectsPage';
		$this->load->view('main',$data);
	}
	function blogDetailedPage()
	{
		$data['page'] = 'blogDetailedPage';
		$this->load->view('main',$data);
	}
	function underConstructionPage()
	{
		$this->load->view('underConstructionPage');
	}
	function errorPage()
	{
		$data['page'] = 'errorPage';
		$this->load->view('main',$data);
	}
	function fullPage()
	{
		$data['page'] = 'fullPage';
		$this->load->view('main',$data);
	}
	function columnsPage3()
	{
		$data['page'] = 'columnsPage3';
		$this->load->view('main',$data);
	}
	function leftSidebarPage()
	{
		$data['page'] = 'leftSidebarPage';
		$this->load->view('main',$data);
	}
	function rightSidebarPage()
	{
		$data['page'] = 'rightSidebarPage';
		$this->load->view('main',$data);
	}
	function sitemapPage()
	{
		$data['page'] = 'sitemapPage';
		$this->load->view('main',$data);
	}
	function stylesPage()
	{
		$data['page'] = 'stylesPage';
		$this->load->view('main',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */