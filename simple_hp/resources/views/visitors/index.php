<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <title>伊藤の部屋</title>
    <script type="text/javascript" src="./jquery/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="./jquery/jquery.cookie.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/arrangement.css">
    <script type="text/javascript" src="./js/flash.js"></script>
    <!-- <script type="text/javascript" src="./js/counter.js"></script> -->
</head>

<body onLoad="disp();">

    <h1><div id="ito">テスト</div></h1>
    <div id="counter">
        あなたは
        <?php
        $visitors_num = \App\Http\Controllers\VisitorsController::fetchCounter();
        echo $visitors_num;
        ?>
        番目の訪問者です。
    </div>

</body>
</html>