<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
     function __construct() {
	    parent:: __construct();
	    $this->load->helper('url');
	    $this->load->database();
	    $this->load->model('category_model');
  	}
	
	 public function category_data($category){
		    $new = str_replace('%20', ' ', $category);
            $data['main_view'] = 'category_view';
		    $data['data_categories']=$this->category_model->get_category_data($new);
            $data['latest_articles'] = $this->category_model->get_latest_article();
            $data['pop_articles'] = $this->category_model->get_popular_article();
 	        $this->load->view('master',$data);
 	}
	
}
?>