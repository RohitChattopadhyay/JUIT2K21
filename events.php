<?php

   include('session.php');

?><!DOCTYPE html>

<html lang="en">

<head>

  <link rel="shortcut icon" type="image/png" href="../user/SignUp/assets/img/it.png"/>

  <title>Events | JU IT 2021</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/02E91CBD-F5AE-3741-A7DF-0069FEA1B375/main.js" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

<style>

    @import url("https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");

    



    

    .event-list {

		list-style: none;

		font-family: 'Lato', sans-serif;

		margin: 0px;

		padding: 0px;

	}

	.event-list > li {

		background-color: rgb(255, 255, 255);

		box-shadow: 0px 0px 5px rgb(51, 51, 51);

		box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);

		padding: 0px;

		margin: 0px 0px 20px;

	}

	.event-list > li > time {

		display: inline-block;

		width: 100%;

		color: rgb(255, 255, 255);

		background-color: rgb(197, 44, 102);

		padding: 5px;

		text-align: center;

		text-transform: uppercase;

	}

	.event-list > li:nth-child(even) > time {

		background-color: rgb(165, 82, 167);

	}

	.event-list > li > time > span {

		/*display: none;*/

	}

	.event-list > li > time > .day {

		display: block;

		font-size: 56pt;

		font-weight: 100;

		line-height: 1;

	}

	.event-list > li time > .month {

		display: block;

		font-size: 24pt;

		font-weight: 900;

		line-height: 1;

	}

	.event-list > li > img {

		width: 100%;

	}

	.event-list > li > .info {

		padding-top: 5px;
		background-color:#F5F5F5;
		text-align: center;

	}

	.event-list > li > .info > .title {

		font-size: 17pt;

		font-weight: 700;

		margin: 0px;

	}

	.event-list > li > .info > .desc {

		font-size: 13pt;

		font-weight: 300;

		margin: 0px;

	}

	.event-list > li > .info > ul,

	.event-list > li > .social > ul {

		display: table;

		list-style: none;

		margin: 10px 0px 0px;

		padding: 0px;

		width: 100%;

		text-align: center;

	}

	.event-list > li > .social > ul {

		margin: 0px;

	}

	.event-list > li > .info > ul > li,

	.event-list > li > .social > ul > li {

		display: table-cell;

		cursor: pointer;

		color: rgb(30, 30, 30);

		font-size: 11pt;

		font-weight: 300;

        padding: 3px 0px;

	}

    .event-list > li > .info > ul > li > a {

		display: block;

		width: 100%;

		color: rgb(30, 30, 30);

		text-decoration: none;

	} 

    .event-list > li > .social > ul > li {    

        padding: 0px;

    }

    .event-list > li > .social > ul > li > a {

        padding: 3px 0px;

	} 

	.event-list > li > .info > ul > li:hover,

	.event-list > li > .social > ul > li:hover {

		color: rgb(30, 30, 30);

		background-color: rgb(200, 200, 200);

	}

	.facebook a,

	.twitter a,

	.google-plus a {

		display: block;

		width: 100%;

		color: rgb(75, 110, 168) !important;

	}

	.twitter a {

		color: rgb(79, 213, 248) !important;

	}

	.google-plus a {

		color: rgb(221, 75, 57) !important;

	}

	.facebook:hover a {

		color: rgb(255, 255, 255) !important;

		background-color: rgb(75, 110, 168) !important;

	}

	.twitter:hover a {

		color: rgb(255, 255, 255) !important;

		background-color: rgb(79, 213, 248) !important;

	}

	.google-plus:hover a {

		color: rgb(255, 255, 255) !important;

		background-color: rgb(221, 75, 57) !important;

	}



	@media (min-width: 768px) {

		.event-list > li {

			position: relative;

			display: block;

			width: 100%;

			height: 125px;

			padding: 0px;

		}

		.event-list > li > time,

		.event-list > li > img  {

			display: inline-block;

		}

		.event-list > li > time,

		.event-list > li > img {

			width: 125px;

			float: left;

		}

		.event-list > li > .info {

			background-color: rgb(245, 245, 245);

			overflow: hidden;

		}

		.event-list > li > time,

		.event-list > li > img {

			width: 125px;

			height: 125px;

			padding: 0px;

			margin: 0px;

		}

		.event-list > li > .info {

			position: relative;

			height: 125px;

			text-align: left;

			padding-right: 40px;

		}	

		.event-list > li > .info > .title, 

		.event-list > li > .info > .desc {

			padding: 0px 10px;

		}

		.event-list > li > .info > ul {

			position: absolute;

			left: 0px;

			bottom: 0px;

		}

		.event-list > li > .social {

			position: absolute;

			top: 0px;

			right: 0px;

			display: block;

			width: 40px;

		}

        .event-list > li > .social > ul {

            border-left: 1px solid rgb(230, 230, 230);

        }

		.event-list > li > .social > ul > li {			

			display: block;

            padding: 0px;

		}

		.event-list > li > .social > ul > li > a {

			display: block;

			width: 40px;

			padding: 10px 0px 9px;

		}

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
        <li class="active"><a href="#">Events</a></li>
		<li><a href="./drive.php">Drive</a></li>
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

                    <span class="title">Events</span>

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



				<li class='list-group-item'>



								<ul class="event-list">
					<li>

						<time datetime="2017-09-17">

							<span class="day">17</span>

							<span class="month">Sept</span>

							<span class="year">2017</span>

							<span class="time">11:00</span>

						</time>

						<img alt="CodeChef" src="https://s3.amazonaws.com/codechef_shared/misc/fb-image-icon.png" style="Background:#F5F5F5" />

						<div class="info">

							<h2 class="title">cogITo 03</h2>

							<p class="desc">The weekly code contest of JU IT 2K21</p>

														<p class="desc visible-xs visible-lg">Sept 17 2017, 11:00 am IST to Sept 17 2017, 04:00 pm IST</p>

							<ul>

								<li style="width:50%;"><a href="#link-not-ready" target="_blnk"><span class="fa fa-globe"></span> Website</a></li>

								<li style="width:50%;"><span class="fa fa-money"></span> &#8377;0</li>

							</ul>

						</div>


						<div class="social">

							<ul>

<!--							<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>

	 							<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>

								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li> 

-->

							</ul>

						</div>

					</li>
								<li>

						<time datetime="2017-08-20">

							<span class="day">20</span>

							<span class="month">Aug</span>

							<span class="year">2017</span>

							<span class="time">11:00</span>

						</time>

						<img alt="Hackerrank" src="https://i.imgur.com/rjUDepu.png" />

						<div class="info">

							<h2 class="title">cogITo 02</h2>

							<p class="desc">The weekly code contest of JU IT 2K21</p>

														<p class="desc visible-xs visible-lg">Aug 20 2017, 11:00 am IST to Aug 20 2017, 07:00 pm IST</p>

							<ul>

								<li style="width:50%;"><a href="https://www.hackerrank.com/cogito-2" target="_blank"><span class="fa fa-globe"></span> Website</a></li>

								<li style="width:50%;"><span class="fa fa-money"></span> &#8377;0</li>

							</ul>

						</div>


						<div class="social">

							<ul>

<!--							<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>

	 							<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>

								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li> 

-->

							</ul>

						</div>

					</li>

								<li>

						<time datetime="2017-08-13">

							<span class="day">13</span>

							<span class="month">Aug</span>

							<span class="year">2017</span>

							<span class="time">11:00</span>

						</time>

						<img alt="Hackerrank" src="https://i.imgur.com/rjUDepu.png" />

						<div class="info">

							<h2 class="title">cogITo 01</h2>

							<p class="desc">The weekly code contest of JU IT 2K21</p>

														<p class="desc visible-xs visible-lg">Aug 13 2017, 11:00 am IST to Aug 13 2017, 07:00 pm IST</p>

							<ul>

								<li style="width:50%;"><a href="https://www.hackerrank.com/juitfreshersweeklycontest" target="_blank"><span class="fa fa-globe"></span> Website</a></li>

								<li style="width:50%;"><span class="fa fa-money"></span> &#8377;0</li>

							</ul>

						</div>



						<div class="social">

							<ul>

<!--							<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>

	 							<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>

								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li> 

-->

							</ul>

						</div>

					</li>



<!-- 					<li>

						<time datetime="2014-07-20 0000">

							<span class="day">8</span>

							<span class="month">Jul</span>

							<span class="year">2014</span>

							<span class="time">12:00 AM</span>

						</time>

						<div class="info">

							<h2 class="title">One Piece Unlimited World Red</h2>

							<p class="desc">PS Vita</p>

							<ul>

								<li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>

								<li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>

							</ul>

						</div>

						<div class="social">

							<ul>

								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>

								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>

								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>

							</ul>

						</div>

					</li> -->



<!-- 					<li>

						<time datetime="2014-07-20 2000">

							<span class="day">20</span>

							<span class="month">Jan</span>

							<span class="year">2014</span>

							<span class="time">8:00 PM</span>

						</time>

						<img alt="My 24th Birthday!" src="https://farm5.staticflickr.com/4150/5045502202_1d867c8a41_q.jpg" />

						<div class="info">

							<h2 class="title">Mouse0270's 24th Birthday!</h2>

							<p class="desc">Bar Hopping in Erie, Pa.</p>

							<ul>

								<li style="width:33%;">1 <span class="glyphicon glyphicon-ok"></span></li>

								<li style="width:34%;">3 <span class="fa fa-question"></span></li>

								<li style="width:33%;">103 <span class="fa fa-envelope"></span></li>

							</ul>

						</div>

						<div class="social">

							<ul>

								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>

								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>

								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>

							</ul>

						</div>

					</li> -->



<!-- 					<li>

						<time datetime="2014-07-31 1600">

							<span class="day">31</span>

							<span class="month">Jan</span>

							<span class="year">2014</span>

							<span class="time">4:00 PM</span>

						</time>

						<img alt="Disney Junior Live On Tour!" src="https://www.thechaifetzarena.com/images/main/DL13_PiratePrincess_thumb.jpg" />

						<div class="info">

							<h2 class="title">Disney Junior Live On Tour!</h2>

							<p class="desc"> Pirate and Princess Adventure</p>

							<ul>

								<li style="width:33%;">$49.99 <span class="fa fa-male"></span></li>

								<li style="width:34%;">$29.99 <span class="fa fa-child"></span></li>

							</ul>

						</div>

						<div class="social">

							<ul>

								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>

								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>

								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>

							</ul>

						</div>

					</li> -->

				</ul>



				

				

                        <div class='clearfix'></div>

                </li>



					

					

					

                </ul>

            </div>

        </div>

	</div>

    

    <div id="cant-do-all-the-work-for-you" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">



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