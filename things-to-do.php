<?php $pageTitle="<title>Things To Do For Forsquare Summit East '13</title>"?>
<?php include("header.php"); ?>
<?php include("main.php"); ?>
<div id="content">
	<div id="ib-span-wrap">
	<h3>Click on any of these links to take you to google maps for directions!</h3><br>
	<span class="purple-li ib-span">200 East Pratt = Gallery Shopping Center Food Court (4th floor)</span><br>
	<span class="yellow-li ib-span">201 East Pratt Street = Harbourplace Restaurants</span><br>
	<span class="red-li ib-span">300-400 West Pratt = restaurants across the street from the Hilton</span><br>
	<span class="green-li ib-span">621 East Pratt Street = Power Plant Restaurants</span><br>
	</div>
	<div class="div-list">
	<button class="button" onclick="showstuff('restaurants'); hidestuff('activities'); hidestuff('shopping');">Restaurants</button>														
	<ul id="restaurants">
		<li class="purple-li"><a href="http://goo.gl/maps/aFCc5">McDonald's</a></li>
		<li class="purple-li"><a href="http://goo.gl/maps/aFCc5">Baltimore Salad Works</a></li>	
		<li class="purple-li"><a href="http://goo.gl/maps/aFCc5">Starbucks</a></li>
		<li class="yellow-li"><a href="http://goo.gl/maps/42yA1">Five Guys Burgers and Fries</a></li>		
		<li class="yellow-li"><a href="http://goo.gl/maps/42yA1">The Cheesecake Factory</a></li>		
		<li class="yellow-li"><a href="http://goo.gl/maps/42yA1">Lenny's Deli Harbor Place</a></li>		
		<li class="red-li"><a href="http://goo.gl/maps/ZsxQi">Jimmy Johns</a></li>		
		<li class="red-li"><a href="http://goo.gl/maps/M8Rsn">Subway</a></li>			
		<li class="red-li"><a href="http://goo.gl/maps/DhFM0">Edie's Deli &amp Grill</a></li>	
		<li class="red-li"><a href="http://goo.gl/maps/QbVtR">California Tortilla</a></li>
		<li class="green-li"><a href="http://goo.gl/maps/ADJuH">Houlihan's</a></li>
		<li class="green-li"><a href="http://goo.gl/maps/TRSJb">P.F. Chang's</a></li>
		<li class="green-li"><a href="http://goo.gl/maps/ADJuH">Chipotle</a></li>
		<li class="green-li"><a href="http://goo.gl/maps/XSzxd">Panera Bread</a></li>
		<li class="green-li"><a href="http://goo.gl/maps/ADJuH">Pottbelly's</a></li>
		<li class="green-li"><a href="http://goo.gl/maps/iBEPW">Uno Chicago Grill</a></li>
		<li class="green-li"><a href="http://goo.gl/maps/f4bMm">Hard Rock Cafe</a></li>
		<li class="green-li"><a href="http://goo.gl/maps/yFhFD">Brio Tuscan Grille</a></li>
	</ul>
	</div>
	<div class="div-list">
	<button class="button" onclick="showstuff('activities'); hidestuff('restaurants'); hidestuff('shopping');">Activities</button>
	<ul id="activities">
   <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
   <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
   <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
   <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
</ul>
            
	</div> 			
	<div class="div-list">
		<button class="button" onclick="showstuff('shopping'); hidestuff('restaurants'); hidestuff('activities');">Shopping</button>
		<ul id="shopping">
			<li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
			<li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
			<li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
		 	<li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
		</ul>
            
	</div>
	<div class="clearing"></div>
</div>
</div>
</div>
<?php include("footer.php"); ?>