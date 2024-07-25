<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
    
   public function template($template_name, $side_bar, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('templates/header', $vars, $return);
         $content .= $this->view($side_bar, $vars, $return);
        $content .= $this->view($template_name ,$vars, $return);
        $content .= $this->view('templates/adminfooter', $vars, $return);

        return $content;
    else:
        $this->view('templates/header', $vars);
         $this->view($side_bar, $vars);
        $this->view($template_name, $vars);
        $this->view('templates/adminfooter', $vars);
    endif;
    } 
    
       public function hometemplate($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('templates/mainheader', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        return $content;
    else:
        $this->view('templates/mainheader', $vars);
        $this->view($template_name, $vars);
        $this->view('templates/footer', $vars);
    endif;
    } 
    
         public function producttemplate($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('templates/productheader', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        return $content;
    else:
        $this->view('templates/productheader', $vars);
        $this->view($template_name, $vars);
        $this->view('templates/footer', $vars);
    endif;
    }
         public function carttemplate($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        return $content;
    else:
        
        $this->view($template_name, $vars);
        $this->view('templates/footer', $vars);
    endif;
    }
}