<?php

class model_user extends CI_Model{

  public function wipeDelegate($uid){

       $query=$this->db->query("Delete FROM attendee where id='$uid'");
    
  if($query){
           
           return 1;
        }
        else{
            return 0;
        }
}
      public function getAll(){
        
       $query=$this->db->query("Select *, case when gender=0 then 'Female' else 'Male' end as gender, case when department=0 then 'CSE' when department=1 then 'IT' when department=2 then 'ECE' when department=3 then 'EEE' when department=4 then 'MECH' when department=5 then 'CIVIL' else 'OTHERS' end as department from attendee");
       
        if($query->num_rows()>1){
            return $query->result();
           
        }
        else{
            return 0;
        }
            
    }
    public function getCount($type){
        if($type=='all'){
			
       $query = $this->db->count_all('attendee');
   }
   else if($type!='all')
   { 
	   $this->db->where($type,1);
	   $query = $this->db->count_all_results('attendee');
   }
     return $query;
    
    }
    
    
     public function getEventReg($type){
		 
       $query=$this->db->query("Select * from attendee where $type=1");
   
    
            return $query->result();
           
       
            
    }
}

