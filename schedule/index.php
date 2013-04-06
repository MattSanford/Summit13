<?php $pageTitle="<title>Daily Schedule for Foursquare Summit East '13</title>"?>
<?php $jqueryLib="<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>"?>
<?php include("../header.php"); ?>
<?php include("../main.php"); ?>
		<div id="content">
			<div id="schedule">
				<table>
					<tbody>
					<tr class="day" id="friday" data-day="5">
						<td><h2>Friday</h2></td>
						<td class="hour" data-time="8am" data-event="some event" data-location="location">
						</td>
						<td class="hour" data-time="9am" data-event="some event" data-location="location">
						</td>
						<td class="hour" data-time="10am" data-event="some event"data-location="location">
						</td>
						<td class="hour" data-time="11am" data-event="some event"data-location="location">
						</td>
						<td class="hour" data-time="12pm" data-event="some event"data-location="location">
						</td>
						<td class="hour" data-time="1pm" data-event="some event" data-location="location">
						</td>
						<td class="hour" data-time="2pm" data-event="some event" data-location="location">
						</td>
						<td class="hour" data-time="3pm" data-event="some event" data-location="location">
						</td>
						<td class="hour" data-time="4pm" data-event="some event" data-location="location">
						</td>
						<td class="hour" data-time="5pm" data-event="some event" data-location="location">
						</td>
						<td class="hour" data-time="6pm" data-event="some event" data-location="location">
						</td>
						<td class="hour" data-time="7pm" data-event="some event" data-location="location">
						</td>
						<td class="hour" data-time="8pm" data-event="some event" data-location="location">
						</td>
					</tr>
				<tr class="day" id="saturday" data-day="6">
					<td><h2>Saturday</h2></td>
					<td class="hour" data-time="8am" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="9am" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="10am" data-event="some event"data-location="location">
					</td>
					<td class="hour" data-time="11am" data-event="some event"data-location="location">
					</td>
					<td class="hour" data-time="12pm" data-event="some event"data-location="location">
					</td>
					<td class="hour" data-time="1pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="2pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="3pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="4pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="5pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="6pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="7pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="8pm" data-event="some event" data-location="location">
					</td>
				</tr>
				<tr class="day" id="sunday" data-day="0">
					<td><h2 class="highlight">Sunday</h2></td>
					<td class="hour" data-time="8am" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="9am" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="10am" data-event="some event"data-location="location">
					</td>
					<td class="hour" data-time="11am" data-event="some event"data-location="location">
					</td>
					<td class="hour" data-time="12pm" data-event="some event"data-location="location">
					</td>
					<td class="hour" data-time="1pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="2pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="3pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="4pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="5pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="6pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="7pm" data-event="some event" data-location="location">
					</td>
					<td class="hour" data-time="8pm" data-event="some event" data-location="location">
					</td>
				</tr>
				</tbody>
				</table>


				<div class="clearing"></div>
			</div>
		</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	var day = $('.day').data('day');
	var d =new Date(); 
	var time = $('.hour').data('time');
	var eve = $('.hour').data('event');
	var location = $('.hour').data('location');
	var hour = $('<h5>$'+time+'</h5>');

	$('.day').each(function() {
	d.getDay();
	console.log('.day');
});

	$('.hour').each(function() {
		$(this).prepend('<h3 class="t-stamp">' + $(this).data('time') + '</h3>');
		$(this).append('<h4 class="event">' + $(this).data('event') + '</h4>');
		$(this).append('<h4 class="event location">' + $(this).data('location') + '</h4>');

	});
});
</script>
<?php include("../footer.php"); ?>