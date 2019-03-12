<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
     function __construct() {
	    parent:: __construct();
	    $this->load->helper('url');
	    $this->load->database();
	    $this->load->model('about_model');
  	}
	
   	public function about_data(){
		    $data['main_view'] = 'about_view';
		    $data['pop_articles'] = $this->about_model->get_popular_article();
		    $data['latest_articles'] = $this->about_model->get_latest_article();
		    $this->load->view('master',$data);
  	}
	
}
?>    
