<!DOCTYPE html>

<html lang="de">

<head>

	<meta charset="">

	<title></title>

	<base href="">

	<meta name="robots" content="">

	<meta name="description" content="">

	<meta name="keywords" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- <link rel="stylesheet" href="include/css/trigger.css"> -->
     <!-- <link rel="stylesheet" href="include/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="include/css/style.css">

	<!-- <link rel="stylesheet" href="include/css/trigger.css"> -->
	<link rel="stylesheet" href="include/css/custom.css">

     <!-- <link rel="stylesheet" href="include/bootstrap.min.css"> -->
	<!-- <script src="include/js/modernizr.js"></script> -->
	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="wrap">

		<div class="row push"> <!-- start row push -->

			<header>

				<div class="header_top clearfix">

					<div class="whiteback">

						<div class="center"><a href="./" title="zur Startseite"><img src="include/images/logo.png" width="129" height="53" alt="Logo FORMATIONSTRADER"></a></div>
						<nav class="navbar navbar-default">
						<div class="container-fluid">
						
							<ul class="nav navbar-nav position-right">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Page 1</a></li>
							<li><a href="#">Page 2</a></li>
							<li><a href="#">Page 3</a></li>
							</ul>
						</div>
						</nav>
						<!-- <button class="btn_navbar" type="button"></button> -->

					</div>

					<div class="center">

						<div class="center_inner">


							<!-- <nav class="topnav">
								

                                    <a href="" class="" title="Mein Account öffnen">Asset-Analysen</a>

									<a href="" class="" title="E-Mail an Formationstrader">Premium-trading</a>

									<a href="" class="" title="Kontaktformular">Mentorprogram</a>
									<a href="" class="" title="Kontaktformular">Triggerlistee</a>
									<a href="" class="" title="Kontaktformular">Forum</a>

								

							</nav> -->

						</div>

					</div>

				</div>

				<div class="header_bottom clearfix">
					<div class="center">

						<div class="center_inner">

							

						</div>

					</div>

				</div>

			</header>

	

			<div class="main" role="main">	

				<!-- <div class="center"> -->

					<!-- <div class="center_inner">
					</div> -->
					<div class="main-div">
						<div class="row">
						   <div class="col-xl-1"></div>
							<div class="col-xl-8">
								<div class="table-responsive">
									<table class="table table-striped">
											<thead>
											<tr>
												<th>Datum Orderplatzierung</th>
												<th>ISIN</th>
												<th>Asset</th>
												<th>Handelsplatz</th>
												<th>Stücke</th>
												<th>Long / Short</th>
												<th>Kaufkurs</th>
												<th>Investitionssumme</th>
												<th>Umrechnung in Euro</th>
												<th>Datum Orderausführung </th>
												<th>Kommentar</th>
												<th>Assetklasse</th>
												<th>Sektor</th>
												<th>Land</th>
												<th>Währung</th>
												<th>Aktueller Kurs </th>
												<th>Aktueller Buchgewinn</th>

											</tr>
											</thead>
											<tbody>
											<tr>
												<td>John</td>
												<td>Doe</td>
												<td>john@example.com</td>
											</tr>
											<tr>
												<td>Mary</td>
												<td>Moe</td>
												<td>mary@example.com</td>
											</tr>
											<tr>
												<td>July</td>
												<td>Dooley</td>
												<td>july@example.com</td>
											</tr>
											</tbody>
									</table>
								</div>	
							</div>
						    <div class="col-xl-3"></div>
					    </div>
					 </div>	

						
				<!-- </div> -->

			

				<div class="center">

					<div class="center_inner">					
				

					</div>

				</div>

			</div>

		</div><!-- end row push -->

		<footer class="row">

			<div class="center">

				<div class="center_inner">

					<div class="footer_top clearfix">

						<a href="./" title="zur Startseite" class="logo_footer"><img src="include/images/logo.png" width="129" height="53" alt="FORMATIONSTRADER Logo"></a>

						<nav class="social_nav clearfix">

							<ul>

								<li><a href="mailto:kontakt@formationstrader.de" class="mail no_transit" title="E-Mail an Formationstrader"></a></li>

								<li><a href="http://www.facebook.com/share.php?u={{env::host}}/{{env::request}}&amp;t=Check out this site" class="facebook no_transit" title="Share this on facebook" target="_blank"></a></li>

								<li><a href="http://twitter.com/home?status=Check out this site:{{env::host}}/{{env::request}}" class="twitter no_transit" title="Tweet this" target="_blank"></a></li>

								<li><a href="https://plus.google.com/share?url={{env::host}}/{{env::request}}" onclick="javascript:window.open(this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="google no_transit" title="Share on Google+"></a></li>

							</ul>

						</nav>

					</div>

					<div class="footer_bottom clearfix">

						<div class="footer_nav_1">

					

						</div>

						<div class="footer_nav_2">

							

						</div>						

						<div class="footer_nav_4">

							<p>Copyright &copy; {{date::Y}} Formationstrader<br>All rights reserved.<span class="break"><br>&nbsp;</span><br><a href="impressum.html" class="orange">Impressum</a></p>

						</div>

						<div class="footer_nav_3">

							<p>Kontakt<br>Dr. Hamed Esnaashari<br><a href="mailto:kontakt@formationstrader.de" class="orange">kontakt@formationstrader.de</a></p>

						</div>

					</div>

				</div>

			</div>

		</footer>

	</div>

	

	<div class="login_overlay">

		<div class="login_box">

			<div class="login_window">

				<a href="#" class="show_login no_transit"></a>

				<div class="login_inner clearfix">

					<img src="include/images/logo_white.png" width="122" height="50" alt=""><br>

					<div class="login_left">

					

						<a href="passwort.html" class="lost_password">Passwort vergessen</a>

					</div>

					<div class="login_right">

						<h4>Ich bin neu, und jetzt?</h4>

						<p class="login_text">Das Formationstrader Programm bietet unterschiedliche User-Pakete.  Bitte klicken Sie unten auf „Formationstrader werden“, und finden Sie auf unserem Online-Shop das passende Angebot.</p>

						<a href="mentorprogramm.html" class="shoplink buttonlink">FORMATIONSTRADER WERDEN</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	

<script src="include/js/jquery.js"></script>

<script src="include/js/jquery.nicescroll.js"></script>

<script src="include/js/page.js?<?= random_int(0, 128000000) ?>"></script>

<script>

	$(document).ready(function(){

		// login schnichschnack

		var login = 0;

		// versuchter login

		if (logintry==1) {

			$('.login_overlay').css('z-index', '2000');

			if ($(window).width() > 650 ) var neueBreite='600';

			else var neueBreite='100%';

			$('.login_overlay').animate({opacity:1}, function() { $('.login_box').animate({width:neueBreite}); });			

			login=1;

		}

		// show login

		$(".show_login").click(function() {

			if (login==0) {

				$('.login_overlay').css('z-index', '2000');

				if ($(window).width() > 650 ) var neueBreite='600';

				else var neueBreite='100%';

				$('.login_overlay').animate({opacity:1}, function() { $('.login_box').animate({width:neueBreite}); });			

				login=1;		

				return false;

			} else {			

				$('.login_box').animate({width:0});

				$('.login_overlay').animate({opacity:0}, function(){$('.login_overlay').css("z-index", "-10");});

				login=0;		

				return false;

			}		

		});

	});

</script>

<!-- google opt out -->

<script>

	var gaProperty = 'UA-35047123-2';

	var disableStr = 'ga-disable-' + gaProperty;

	if (document.cookie.indexOf(disableStr + '=true') > -1) {

	  window[disableStr] = true;

	}

	function gaOptout() {

	  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';

	  window[disableStr] = true;

	}

</script>

<!-- Google Analytics -->

<script>

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-35047123-2', 'auto');

	ga('set', 'anonymizeIp', true);

	ga('send', 'pageview');

</script>

<!-- End Google Analytics -->

</body>

</html>