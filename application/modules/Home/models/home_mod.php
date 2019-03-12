<?php

class Home_Mod extends CI_Model{
	


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
	
	
		
	


			
}
?>		