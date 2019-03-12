<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
     function __construct() {
	    parent:: __construct();
	    $this->load->helper('url');
	    $this->load->database();
	    $this->load->model('contact_model');
  	}
  public function contact_data(){
		    $data['main_view'] = 'contact_view';
		    $data['latest_articles'] = $this->contact_model->get_latest_article();
		    $this->load->view('master',$data);
  	}
  	

}  	
?>