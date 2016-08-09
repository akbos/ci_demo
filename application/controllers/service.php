<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

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
	public function drupal()
	{
	
          // $this->load->library('curl');
       
          //$this->load->spark('example-spark/1.0.0');      # We always specify the full path from the spark folder
          //$this->example_spark->printHello();             # echo's "Hello from the example spark!"
          
         $ch = curl_init();

		// set URL and other appropriate options
		curl_setopt($ch, CURLOPT_URL, "http://drupal7.demo.tv.appneta.com/api/current_users.json");
		curl_setopt($ch, CURLOPT_HEADER, 0);

		// grab URL and pass it to the browser
		curl_exec($ch);

		// close cURL resource, and free up system resources
		curl_close($ch); 
 
         //$this->load->spark('curl');
         //echo $this->curl->simple_get('http://drupal7.demo.tv.appneta.com/api/current_users.json');
	}

        public function custom()
        {
         oboe_log_entry('loop'); 
         $total =0;
         $i=0;
         for ($x=0; $x<=200; $x++) {
         echo "The number is: $x <br>";
         }

         oboe_log_exit('loop');

        }

        public function get_profile(){
         $k = 0;

         oboe_log('PHP','profile_entry',array('ProfileName'=>'compute'));
         for($p=0;$p<=1000000;$p++)
         {
           $k = $k+$p;         

         }
           
         echo "hi there". $k;

         oboe_log('PHP','profile_exit',array('ProfileName'=>'compute'));
         }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
