<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CODEIGNITER Template Library
 *
 * @author Jérôme Jaglale
 * @url http://maestric.com/doc/php/codeigniter_template
 */
class Template
{
    var $template_data = array();

    // Set template data
    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    // Load the template and view
    function load($template = '', $view = '', $view_data = array(), $return = FALSE)
    {
        $this->CI =& get_instance();
        
        // Set the contents of the view
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        
        // Load the template with the view data
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */
