<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Blog extends CI_Controller {
     function __construct() {
	    parent:: __construct();
	    $this->load->helper('url');
	    $this->load->database();
	    $this->load->model('Blog_model');
  	}

	 public function post_data($id){
		    $data['main_view'] = 'Blog_post';
		    $data['data_article']=$this->Blog_model->get_article_data($id);
		    $data['pop_articles'] = $this->Blog_model->get_popular_article();
		    $data['latest_articles'] = $this->Blog_model->get_latest_article();
		    $data['promoted_articles'] = $this->Blog_model->get_promoted_article();
		    $data['data_comment']=$this->Blog_model->fetch_comment($id);
            $this->load->view('master',$data);
  	}
  	public function insert(){

		if ($this->input->post()) {
		    $name = $this->input->post('name');
		    $email = $this->input->post('email');
		    $website = $this->input->post('website');
        $comment = $this->input->post('comment');
			  $blog_id = $this->input->post('blog_id');
         
            $data = array( 
            	'name' => $name,
            	'email' => $email,
            	'comment' => $comment,
            	'website'=> $website,
            	'blog_id' => $blog_id,
              'date_submit'=> date('Y-m-d H:i:s')
            );

            $row = $this->Blog_model->comment_insert($data);
           echo  json_encode($row);
            

             
        }
    }
}
?>  	