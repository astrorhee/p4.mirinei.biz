<?php

class lecture_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$this->template->title   = "Lecture";
		$this->template->content = View::instance('v_lecture');

		echo $this->template;
	}

}

?>