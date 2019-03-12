<?php

class Contact_Model extends CI_Model{
	


	function get_latest_article($limit=7, $offset=0){
		 $row = $this->db->select('*') 
		                 -> limit($limit)
		                 -> offset($offset)
		                 ->order_by("date", "asc")
						 ->get('blogs')->result();
						return $row;
		}

    function get_promoted_article($limit=2, $offset=0){
		$row = $this->db->select('*') 
		                 -> limit($limit)
		                 -> offset($offset)
		                 
						->get('blogs')->result();
						return $row;
		}
	function get_popular_article($limit=4, $offset=0){
		$row = $this->db->select('*') 
		                 -> limit($limit)
		                 -> offset($offset)
		                 
						->get('blogs')->result();
						return $row;
		}					
	function get_article_data($id)
		{
			$row = $this->db->select('*')
                        ->where('id',$id)
						   ->get('blogs')->row();
			return $row;
		
	}
	
	function get_category_data($category,$limit=3, $offset=0)
		{
			;
	        $row = $this->db->select('*') 
		                 -> limit($limit)
		                 ->where('category',$category)
		                   -> offset($offset)
		                     ->get('blogs')->result();
						return $row;	
		
	}
	   function fetch_comment($id)
	{
		            $row = $this->db->select('*')
		                ->where('blog_id',$id)
						->get('comment')->result();
						return $row;
	}
	function comment_insert($data){
		$this->db->insert('comment', $data) ;
	} 


			
}
?>		