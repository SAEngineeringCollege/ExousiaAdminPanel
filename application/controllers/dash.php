<?php class dash extends CI_Controller{
   
   
    function __construct() {
        parent::__construct();
      $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
              
    }
    
    
    
    public function index(){
        
      if($this->session->userdata('login')==TRUE)
      {
       $this->load->model('model_user');
       $data['event']='';
       $data['count']=$this->model_user->getCount('all');
       $data['registrations']=$this->model_user->getAll();
       $this->load->view('dash',$data);
      }
        else {
          
           redirect('login');
      }
        
    }
    

public function wipeDelegate($uid)
{
    if($this->session->userdata('login')==TRUE)
      {
       $this->load->model('model_user');
if($this->model_user->wipeDelegate($uid))
{
redirect('dash');
}


}
}
    
    
    
}
