<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alert {

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function set($type, $message, $redirect)
    {
        $this->CI->session->set_flashdata($type, $message);
        redirect(base_url($redirect));
    }
}