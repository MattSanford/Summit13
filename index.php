 <!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Foursquare Imagine Youth Summit East 2013</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet"  href="css/summit.css">
<link href='http://fonts.googleapis.com/css?family=Poiret+One|Raleway:400,300' rel='stylesheet' type='text/css'>
<!-- Standard iPhone --> 
<link rel="apple-touch-icon" sizes="57x57" href="IOS-Icons/57x57.png" />
<!-- Retina iPhone --> 
<link rel="apple-touch-icon" sizes="114x114" href="IOS-Icons/114x114.png" />
<!-- Standard iPad --> 
<link rel="apple-touch-icon" sizes="72x72" href="IOS-Icons/72x72.png" />
<!-- Retina iPad --> 
<link rel="apple-touch-icon" sizes="144x144" href="IOS-Icons/144x144.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<meta property="og:title" content="Foursquare Summit East 13">
<meta property="og:site_name" content="Foursquare Youth Summit">
<meta property="og:url" content="http://foursquaresummiteast.org/">
<meta property="og:image" content="http://foursquaresummiteast.org/images/Imagine Logo-Flyer.png">
<meta name="description" content="Foursquare Summit East 2013 - Youth Summit 2013 - Imagine - Baltimore MD - Foursquare Mid-Atlantic - Lesli Klingenmeir - Brightwork - Cornell jordan">
<!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
<!--[if lt IE 8]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
<!--[if lt IE 7]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src="/html5shiv.js"></script>
<script type="text/javascript" src="showstuff.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35548163-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
if (document.images) {
    img1 = new Image();
    img1.src = "/images/348.png";
    img2 = new Image();
    img2.src = "/images/summittalent.jpg";
    img3 = new Image();
    img3.src = "/images/Transportation.jpg";
    img4 = new Image();
    img4.src = "/images/prayer-on-my-knees4.jpg";
}
</script>
<!-- ===============================-->
<!-- =============PHP===============-->
<!-- ===============================-->
<?php
date_default_timezone_set('America/New_York');
$target = mktime(0, 0, 0, 4, 12, 2013) ;

$today = time () ;

$difference =($target-$today) ;

$days =(int) ($difference/86400) ;

$hours =(int) ($difference/3600) ;


?>
<!-- ===============================-->
<!-- =============END===============-->
<!-- ===============================-->
<div id="container">
	<header class="head">
		<nav id="top-nav">
			<a href="/">Home</a>
			<a href="/Schedule">Schedule</a>
			<a href="/Things-To-Do">Things To Do</a>
			<a href="/Leaders">For Leaders</a>			
		</nav>
		<?php
print "Our event will occur in $days days";
print "Our event will occur in $hours hours"
		?>
	</header>
	<div class="wrapper">
		<div id="sidebar-left">
			<div id="button-wrapper">
				<div id="facebook">
					<img class="icon" src="images/f_logo.png" />
					<h2>Facebook</h2>
<a href="http://www.facebook.com/FoursquareSummitEast"target="blank"><p>Check out our page!</p></a>
				</div>
				<div id="twitter">
					<img class="icon" src="images/twitter-bird-white-on-blue.png" />				
					<h2>Twitter</h2>
					<a href="http://twitter.com/SummitEast13" target="blank"><p>Follow Us on Twitter!</p></a>
				</div>
			</div>
				<div id="countdown" style="display: none;">
					<iframe class="countdown" src="http://free.timeanddate.com/countdown/i39wpchv/n419/cf12/cm0/cu4/ct0/cs0/ca0/co1/cr0/ss0/cacf90/cpc000/pct/tcfff/fs100/szw320/szh135/tatCountdown%20to%20Summit/tac000/tptTime%20since%20Event%20started%20in/tpc000/iso2013-04-13T00:00:00/pa5" frameborder="0" width="207" height="59"></iframe>
				</div>
			</ul>
			<div class="t">
				<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'profile',
				  rpp: 4,
				  interval: 30000,
				  width: 'auto',
				  height: 300,
				  theme: {
				    shell: {
				      background: '#003366',
				      color: '#ffffff'
				    },
				    tweets: {
				      background: '#000000',
				      color: '#ffffff',
				      links: '#cc6600'
				    }
				  },
				  features: {
				    scrollbar: false,
				    loop: false,
				    live: false,
				    behavior: 'all'
				  }
				}).render().setUser('SummitEast13').start();
				</script>
			</div>
		</div>
	<div id="main">
		<div id="social-bar">
	<!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone google-plus" data-size="medium"></div>
			<a href="https://twitter.com/intent/tweet?button_hashtag=FoursquareSummitEast" class="twitter-hashtag-button" data-related="summiteast13">Tweet #FoursquareSummitEast</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<div class="fb-like" data-href="http://www.facebook.com/FoursquareSummitEast" data-send="true" data-width="450" data-show-faces="false"></div>
		<p class="callout-text">Be sure to use the buttons to get the word out about summit!</p>
		</div>
		<div class="content">
			<div class="box-wrapper">
				<div class="box right" style="display: none;">
					<h3 class="box-heading">Prayer</h3>
					<img id="imageID" class="box-pic" src="/images/prayer-on-my-knees4.jpg">
					<button class="button" id="hide-button" onclick="showstuff('prayer'); hidestuff('mad'); hidestuff('trans'); hidestuff('v-c');">click</button>														
					<div class="box-content" id="prayer"><p>Imagine Summit Prayer points. Please pray for us! <a href="/Prayer/">Click Here</a></p></div>
				</div>
				<section class="content-section">
					<h1>section</h1>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
				</section>
				<section class="content-section">
					<h1>section</h1>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
				</section>
				<section class="content-section">
					<h1>section</h1>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
				</section>
				<section class="content-section">
					<h1>Contact Info:</h1>
					<h2>Lesli Klingenmeier:</h2>
					<h3>123-456-7890</h3>
					<h2>Melanie Fortner:</h2>
					<h3>123-456-7890</h3>
					<h2>Somebody Important</h2>
					<h3>123-456-7890</h3>
				</section>
				<div class="clearing"></div>
			</div>
			<div class="box-wrapper" id="wrapper" style="display: none;">
				<div class="sm" id="box"><a href="http://www3.hilton.com/en/hotels/maryland/hilton-baltimore-BWICCHH/index.html"><h3 class="box-heading">Hotel<br/> Website</h3></a></div>
				<div class="clearing"></div>
			</div>
		</div>
		<div class="bottombar weekly">
			<h2>Check out this new video!</h2>
			<iframe id="y-player" src="http://www.youtube.com/embed/videoseries?list=PLizAZC8EYESkVPixst9fyYZ4x5po6ys8D" frameborder="0" allowfullscreen></iframe>
		</div>
		
	</div>
	<div class="clearing"></div>
</div>
<div id="footer">
<span class="Scripture">"No eye has seen, No ear has heard, No mind can IMAGINE what God has planned for those who love Him." 1 Corinthians 2:9</span>
</div>
</div>
</body>
</html>
