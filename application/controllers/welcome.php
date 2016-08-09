<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

 public function p1()
        {
oboe_log(NULL, 'profile_entry', array('ProfileName' => 'Profile1', 'Language' => 'PHP')); 

                $this->load->view('welcome_message');
oboe_log(NULL, 'profile_exit', array('ProfileName' => 'Profile1', 'Language' => 'PHP'));
        }


public function p2()
        {
oboe_log(NULL, 'profile_entry', array('ProfileName' => 'Profile2', 'Language' => 'PHP'));       

                $this->load->view('welcome_message');
oboe_log(NULL, 'profile_exit', array('ProfileName' => 'Profile2', 'Language' => 'PHP'));
        }

public function p3()
        {
oboe_log(NULL, 'profile_entry', array('ProfileName' => 'Profile3', 'Language' => 'PHP'));       

		for($i=0;$i<100000;$i++){
		 echo "Hi";
		}
                $this->load->view('welcome_message');
oboe_log(NULL, 'profile_exit', array('ProfileName' => 'Profile3', 'Language' => 'PHP'));
        }




/* End of file welcome.php */

}

/* Location: ./application/controllers/welcome.php */
