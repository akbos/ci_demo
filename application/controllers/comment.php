<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

        public function add($insert=0){
             
		if ($insert==0)
		{
                  $this->load->view('add_comment');
                }  
                else
                {
   
                  //echo 'testing';
		  $this->load->database();
                  $this->load->model('userdb');  
                  //$comments = $this->user_model->get_last_ten_entries();
                  //print_r($comments, 1);
                  
                  //print_r($_POST);
                  $this->userdb->insert($_POST['id'],$_POST['subject'],$_POST['body']);
                  header('Location: http://user.com');
                }
        }

        public function show()
        { 
               $this->load->database();
	       $this->load->model('userdb');
	       $users['data']= $this->userdb->get_last_ten_entries();
               
               //print_r($users);
               $this->load->view('show_user', $users);      

        }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
