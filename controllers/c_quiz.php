<?php

class quiz_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }


    public function index() {
        Router::redirect("/quiz/taking/");
    }


    public function making($error = NULL) {

        $this->template->title          = "Making a Quiz Problem!";
        $this->template->content        = View::instance('v_quiz_making');
        $this->template->content->error = $error;

        echo $this->template;
    }


    public function p_making() {

        // Note that !!$var is equivalent to !empty($var) .
        if (!!$_POST['question'] and !!$_POST['c_answer'] and !!$_POST['ic_answer_1'] and !!$_POST['ic_answer_2'] and !!$_POST['ic_answer_3']) {

            $qz_id = DB::instance(DB_NAME)->insert('quiz_bank', $_POST);

            Router::redirect("/quiz/taking/".$qz_id);

        } else {
            Router::redirect("/quiz/making/error");
        }
    }


    public function taking($qz_id=NULL) {

        $this->template->title   = "Taking a Quiz Problem!";
        $this->template->content = View::instance('v_quiz_taking');


        if (empty($qz_id)) {
            $q = 'SELECT quiz_id
                FROM quiz_bank
                ORDER BY RAND()
                LIMIT 1';

            $qz_id = DB::instance(DB_NAME)->select_field($q);
        }

        $q = 'SELECT *
            FROM quiz_bank
            WHERE quiz_id = '.$qz_id;

        $srow = DB::instance(DB_NAME)->select_row($q);

        $this->template->content->q_id = $srow['quiz_id'];
        unset($srow['quiz_id']);

        $this->template->content->qstn = $srow['question'];
        unset($srow['question']);

        shuffle($srow);
        $this->template->content->choice = $srow;

        echo $this->template;

    }


    public function result() {

        // Note that !!$var is equivalent to !empty($var) .
//        if (!!$_POST['first_name'] and !!$_POST['last_name'] and !!$_POST['email'] and !!$_POST['password']) {
 
        $this->template->title   = "Quiz Result";
        $this->template->content = View::instance('v_quiz_result');

        print_r($_POST['answer']);
        print_r(' ');
        print_r($_GET['q_id']);

        $q = 'SELECT c_answer
            FROM quiz_bank
            WHERE quiz_id = '.$_GET['q_id'];

        $ans = DB::instance(DB_NAME)->select_field($q);


        print_r($ans);

        if ($_POST['answer'] == $ans){
            $score = 1;
            echo "You got it right!";
        }else{
            $score = 0;
            echo "You got it wrong!";
        }


        $this->template->content->score = $score;
        $this->template->content->q_id = $_GET['q_id'];
        echo $this->template;


    }


}

?>