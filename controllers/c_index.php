<?php

class index_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->template->content = View::instance('v_index_index');
        $this->template->title   = "CSCI E-15 :: Project 4 :: Jaehyon Rhee (Jay)";

        echo $this->template;
    }

}

?>
