<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Retrieve the CodeIgniter class & method used for this request and log it to TraceView.
class TraceViewHooks {
    public function post_controller() {
        if (is_callable('oboe_log')) {
            $CI =& get_instance();
            oboe_log(null, "info", array("Controller" => $CI->router->class, 
					   "Action" => $CI->router->method));
        }
    }
}
?>
