<?php $pageTitle="<title>Daily Schedule for Foursquare Summit East '13</title>"?>
<?php $jqueryLib="<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>"?>
<?php include("../header.php"); ?>
<?php include("../main.php"); ?>
		<div id="content">
			<div id="schedule">
				
				<?php include("../schedule.php");
				?>

				<table>
					<tbody>
					<tr class="day" id="friday" data-day="5">
					<?php scheduleFriday(); ?>
					</tr>
				<tr class="day" id="saturday" data-day="6">
				<?php scheduleSaturday(); ?>

				</tr>
				<tr class="day" id="sunday" data-day="0">
					<?php scheduleSunday(); ?>
				</tr>
				</tbody>
				</table>


				<div class="clearing"></div>
			</div>
		</div>
</div>
</div>

<?php include("../footer.php"); ?>