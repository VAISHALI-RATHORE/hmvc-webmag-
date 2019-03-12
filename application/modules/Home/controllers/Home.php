<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     function __construct() {
	    parent:: __construct();
	    $this->load->helper('url');
	    $this->load->database();
	    $this->load->model('home_mod');
  	}
	
	 public function index() {
	    $data['main_view'] = 'home_view';
	    $data['latest_articles'] = $this->home_mod->get_latest_article();
	    $data['promoted_articles'] = $this->home_mod->get_promoted_article();
        $data['pop_articles'] = $this->home_mod->get_popular_article();
        $this->load->view('master',$data);
	}
	
}
?>    
	

	
  