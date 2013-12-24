<?php

class base_controller {

    public $user;
    public $userObj;
    public $template;
    public $email_template;

    public function __construct() {

        $this->userObj = new User();

        $this->user = $this->userObj->authenticate();

        $this->template       = View::instance('_v_template');
        $this->email_template = View::instance('_v_email');

        $this->template->set_global('user', $this->user);
    }

}

?>