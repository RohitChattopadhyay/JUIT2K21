<?php

   include('session.php');

?><!DOCTYPE html>

<html lang="en">

<head>

  <link rel="shortcut icon" type="image/png" href="../user/SignUp/assets/img/it.png"/>

  <title>Drive | JU IT 2021</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/02E91CBD-F5AE-3741-A7DF-0069FEA1B375/main.js" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>





body {

    padding: 30px 0px 60px;

}

.panel > .list-group .list-group-item:first-child {

    /*border-top: 1px solid rgb(204, 204, 204);*/

}

@media (max-width: 767px) {

    .visible-xs {

        display: inline-block !important;

    }

    .block {

        display: block !important;

        width: 100%;

        height: 1px !important;

    }

}





.c-search > .form-control {

   border-radius: 0px;

   border-width: 0px;

   border-bottom-width: 1px;

   font-size: 1.3em;

   padding: 12px 12px;

   height: 44px;

   outline: none !important;

}

.c-search > .form-control:focus {

    outline:0px !important;

    -webkit-appearance:none;

    box-shadow: none;

}

.c-search > .input-group-btn .btn {

   border-radius: 0px;

   border-width: 0px;

   border-left-width: 1px;

   border-bottom-width: 1px;

   height: 44px;

}





.c-list {

    padding: 0px;

    min-height: 44px;

}

.title {

    display: inline-block;

    font-size: 1.7em;

    font-weight: bold;

    padding: 5px 15px;

}

ul.c-controls {

    list-style: none;

    margin: 0px;

    min-height: 44px;

}



ul.c-controls li {

    margin-top: 8px;

    float: left;

}



ul.c-controls li a {

    font-size: 1.7em;

    padding: 11px 10px 6px;   

}

ul.c-controls li a i {

    min-width: 24px;

    text-align: center;

}



ul.c-controls li a:hover {

    background-color: rgba(51, 51, 51, 0.2);

}



.c-toggle {

    font-size: 1.7em;

}



.name {

    font-size: 1.7em;

    font-weight: 700;

}



.c-info {

    padding: 5px 10px;

    font-size: 1.25em;

}

.nowrap {

  white-space: nowrap ;

}

</style>

</head>

<body style="background:#2A2850">

<div class="container" style="padding-right: 15px; padding-left: 15px; margin-right: auto;margin-left: auto;">



<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>                        

      </button>

      <a class="navbar-brand" href="../">JU IT 2K21</a>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
        <li><a href="./contacts.php">Contact List</a></li>
        <li><a href="./events.php">Events</a></li>
		<li class="active"><a>Drive</a></li>
		<!--<li><a href="./password.php">Hackerrank Password</a></li>-->
      </ul>


      <ul class="nav navbar-nav navbar-right">

        <li><a><span class="glyphicon glyphicon-user"></span> <?php echo $login_session; ?></a></li>

        <li><a href = "logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>

      </ul>

    </div>

  </div>

</nav>

 



<div class="container">



    <div class="row">

        <div class="col-xs-12 col-sm-offset-2 col-sm-8">

            <div class="panel panel-default">

                <div class="panel-heading c-list">

                    <span class="title">Google Drive</span>

                    <ul class="pull-right c-controls">

                    <!--    <li><a href="#cant-do-all-the-work-for-you" data-toggle="tooltip" data-placement="top" title="Add Contact"><i class="glyphicon glyphicon-plus"></i></a></li> -->

                    <!-- <li><a href="#" class="hide-search" data-command="toggle-search" data-toggle="tooltip" data-placement="top" title="Toggle Search"><i class="fa fa-search"></i></a></li> -->

                    </ul>

                </div>

                

                <div class="row" style="display: none;">

                    <div class="col-xs-12">

                        <div class="input c-search">

                            <input type="text" class="form-control" id="contact-list-search">

                        </div>

                    </div>

                </div>

                

                <ul class="list-group" id="contact-list">

<iframe src="https://drive.google.com/embeddedfolderview?id=0B038kndWSYANOEp6UV9QaGk0SEE#list" style="
    width: 100%;
    border: 0;
	min-height: 400px;
">
                        <div class='clearfix'></div>

                </li>



					

					

					

                </ul>

            </div>

        </div>

	</div>


    <!-- JavaScrip Search Plugin -->

    <script src="https://rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

    

</div>

</div>

<script>

$(function () {

    /* BOOTSNIPP FULLSCREEN FIX */



    $('a[href="#cant-do-all-the-work-for-you"]').on('click', function(event) {

        event.preventDefault();

        $('#cant-do-all-the-work-for-you').modal('show');

    })

    

    $('[data-command="toggle-search"]').on('click', function(event) {

        event.preventDefault();

        $(this).toggleClass('hide-search');

        

        if ($(this).hasClass('hide-search')) {        

            $('.c-search').closest('.row').slideUp(100);

        }else{   

            $('.c-search').closest('.row').slideDown(100);

        }

    })

    

    $('#contact-list').searchable({

        searchField: '#contact-list-search',

        selector: 'li',

        childSelector: '.col-xs-12',

        show: function( elem ) {

            elem.slideDown(100);

        },

        hide: function( elem ) {

            elem.slideUp( 100 );

        }

    })

});



</script>

</body>

</html>