<!DOCTYPE html>

<html>

<head>
    <title><?php if(isset($title)) echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/css/external.css" type="text/css">

</head>

<body>
    <div id="mainbody">

        <div class="window-inner">
            <br>          
          <h1>Journey to the Solar System!</h1>
          <br>
        </div>

        <br>
        <br>


        <div class='window-inner'>

            <div id="navbody">
                <ul id="navmenu">
                    <li><a href='/'>Home</a> <img src="/images/separator.png" alt="separator"></li>
                    <li><a href='/lecture'>Lecture</a>   <img src="/images/separator.png" alt="separator"></li>
                    <li><a href='/quiz/taking'>Taking Quiz</a> <img src="/images/separator.png" alt="separator"></li>
                    <li><a href='/quiz/making'>Making Quiz</a> </li>
                </ul>
            </div>

	        <?php if(isset($content)) echo $content; ?>
	        <?php if(isset($client_files_body)) echo $client_files_body; ?>

        </div>

        <br>
        <br>

        <div class="window-inner">
            <h3>CSCI E-15: Dynamic Web Applications (2013) - J. Rhee's Project 4</h3>
            <ul>
            <li>URL: <a href='http://p4.mirinei.biz'>http://p4.mirinei.biz</a>
            <li>Git URL: <a href='https://github.com/astrorhee/p4.mirinei.biz' target="_blank">https://github.com/astrorhee/p4.mirinei.biz </a>
            <li>README.md: <a href='https://p4.mirinei.biz/README.md'>http://p4.mirinei.biz/README.md</a>
            <li>DATABASE.sql: <a href='https://p4.mirinei.biz/DATABASE.sql'>http://p4.mirinei.biz/DATABASE.sql</a>
            <ul>

        </div>

    </div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="/js/external.js"></script>

</body>

</html>