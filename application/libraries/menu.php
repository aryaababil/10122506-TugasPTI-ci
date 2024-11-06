<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu
{
    var $CI = NULL;

    function __construct()
    {
        // Get CI's object
        $this->CI =& get_instance();
    }

    // Display the sidebar menu
    function tampil_sidebar()
    {
        // Load 'usermodel' model
        $this->CI->load->model('usermodel');
        
        // Get user level from session
        $level = $this->CI->session->userdata('level');
        
        // Get the menu for the user based on their level
        $data['menu'] = $this->CI->usermodel->get_menu_for_level($level);
        $data['level'] = $this->CI->session->userdata('level');

        // Display the sidebar using the data
        $this->CI->load->view('sidebar-nav', $data);
    }
}
