<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simon Nouwens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="shortcut icon" href="images/logo.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/paper/bootstrap.min.css"
          media="screen">
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300;400;500|Source+Sans+Pro:300" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #ededed;
            font-size: 18px;
        }
    </style>
</head>
<div class="container">
<!-- Thanks for checking out the source, though you probably did not have to ;) -->
    <div class="row" style="margin-top: 50px;margin-bottom:35px;">
        <div class="col-md-1 col-md-offset-4 col-sm-2 col-xs-4">
                <img src="images/logo.png">
            </div>
        <div class="col-md-4 col-sm-10 col-xs-8">
            <h1 style="font-size: 30px;margin-top:0px;">SIMON NOUWENS</h1>
            <h1 style="font-size: 48px;margin-top:-15px;" class="hidden-xs">
                Software
            </h1>
        </div>
    </div>

    <a href="/travel" >
        <div class="row" style="background-color: #F74F4C; text-align:center;">
            <br>
            <div class="col-md-8 col-md-offset-2">
                <h4 style=" font-weight:500;color:white;">
                    Currently Travelling >
                </h4>
                <br>
            </div>
        </div>
    </a>

    <br>

    <div class="row" style="background-color: white; text-align:center;">
        <br>
        <div class="col-md-8 col-md-offset-2">
            <h4 style=" font-weight:800;">
                Full-Stack Dev | Startup CTO | Big Data Engineer
            </h4>
            <br>
        </div>
    </div>

    <div class="row" style="background-color: white; padding:15px;padding-top:0px;">
        <div class="col-md-6 col-md-offset-3">
            <ul style="font-weight:400">
                <li>
                    Experienced in <b>websites</b> & <b>apps</b>
                </li>
                <li>
                    In love with <b>big data</b> & <b>machine learning</b>
                </li>
                <li>
                    Educated in <b>human technology interaction</b> & <b>user behavior</b>

                </li>
            </ul>
            <br>
        </div>
    </div>

    <div class="row" style="background-color: #66b2ff; padding:25px; margin-top:40px;color:white; font-weight:300;font-family:'Source Sans Pro'">
        <div class="col-sm-3 col-sm-offset-3 hidden-xs">
            <div class="pull-right">
                <img src="images/portrait.jpg" class="img-circle" width="150">
            </div>
        </div>
        <div class="col-xs-12 visible-xs">
            <div style="text-align: center">
                <img src="images/portrait.jpg" class="img-circle" width="150">
            </div>
        </div>
        <div class="col-sm-5" style="text-align: left;">
        <?php
        if(is_file('data.txt')){
            $contact_details = file_get_contents('data.txt');
        }else{
            $contact_details = '';
        }
        $contact_details = str_replace('1', '1<b class="hidden">obs</b>' , $contact_details);
        $contact_details = str_replace('2', '2<div style="display: none">obfuscation muhahaha</div>' , $contact_details);
        $contact_details = str_replace('3', '3<span class="hidden">asfsaf</span>' , $contact_details);
        $contact_details = str_replace('4', '4<div style="display: none">ob</div>' , $contact_details);
        $contact_details = str_replace('5', '5<div style="display: none">ob</div>' , $contact_details);
        $contact_details = str_replace('6', '6<div style="display: none">ob</div>' , $contact_details);
        $contact_details = str_replace('0', '0<div style="display: none">ob</div>' , $contact_details);
        ?>
            Simon Nouwens <br>
            <?= nl2br($contact_details) ?>
        </div>

    </div>
</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-45998482-2', 'auto');
    ga('send', 'pageview');

</script>
</html>