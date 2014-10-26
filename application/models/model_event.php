<?php

class model_event extends CI_Model{
	
	
	public function participantsCount($event){
		
		$table= $event."_attendee";
		
		 $query = $this->db->count_all($table);
		
			return $query;
		
	}
	
	
	public function participantsList($event){
		
		
		$table= $event."_attendee";
		
		$query=$this->db->query("SELECT attendee.name,attendee.college, $table.uid, $table.tot_pts,$table.tot_ans,$table.time_in,$table.time_out FROM attendee INNER JOIN $table ON attendee.id=$table.uid;");
		
			return $query->result();
		
	}
		public function questionList($event){
		
		
		$table= $event."_event";
		
		$query=$this->db->query("SELECT * from $table;");
		
			return $query->result();
		
	}


		public function wipeQuestion($event,$qid){
		
		
		$table= $event."_event";
		
		$query=$this->db->query("DELETE from $table where id='$qid'; ");
		
			return 1;
		
	}


	public function questionCount($event){
		
		$table= $event."_event";
		
		 $query = $this->db->count_all($table);
		
			return $query;
		
	}
	
	public function questionUpdate($event,$id,$questionInfo)
	{
			$table= $event."_event";
			
			if($id=='new')
			{
				$query=$this->db->insert($table, $questionInfo);
				if($query)
				{
					return TRUE;
				} 
	}
	else if($id!='new')
	{
		$this->db->where('id', $id);
	$query=$this->db->update($table, $questionInfo);
				if($query)
				{
					return TRUE;
				} 
				
				
			}
		}
	
	
}
