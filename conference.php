<!DOCTYPE html>
<html>
	<head>
		<title>CYDCMUN &bull; Conference</title>
<!-- HEADER.PHP END -->
<?php
	include 'header.php';
?>
		<section class="page conference-page">
			<div id="jumbo">
				<img class="jumbofam" src="./img/douglas2.jpg" />
				<h1>Conference</h1>
				<h5>Day Conference</h5>
			</div>

			<script>
				$(window).scroll(function(){
					$("#jumbo h5").css("opacity", 1 - $(window).scrollTop() / 350);
				});
			</script>

			<div class="section-inner">
				<div class="section-inner-inner">
					<div class="schedule">
						<h2 style="text-align:center;">Info</h2>
						<h3 style="text-align:center;">Delegate Handbook</h3>
						<h4 style="text-align:center;">All Necessary Info</h4>
						<div style="text-align:center;" class="delHandbookButton"><a class="contact-email" href="/Delegate-Handbook.pdf" target="_new">Delegate-Handbook.pdf</a></div>
					</div>
				</div>
				<div class="section-inner-inner">
					<div class="schedule">
						<h2>Schedule</h2>
						<h3>Day Itinerary</h3>
						<h4>Saturday, March 31, 2018</h4>
						<table>
							<tr>
								<th>8:15 - 9:00AM</th>
								<th>Registration</th>
							</tr>
							<tr>
								<th>9:00 - 9:30</th>
								<th>Opening Ceremony</th> 
							</tr>
							<tr>
								<th>9:45 - 12:00pm</th>
								<th>Committee Session #1</th>
							</tr>
							<tr>
								<th>12:00 - 1:00</th>
								<th>Lunch</th>
							</tr>
							<tr>
								<th>1:10 - 3:30</th>
								<th>Committee Session #2</th>
							</tr>
							<tr>
								<th>3:30 - 3:45</th>
								<th>Break</th>
							</tr>
							<tr>
								<th>3:45 - 5:30</th>
								<th>Committee Session #3</th>
							</tr>
							<tr>
								<th>5:30 - 6:00</th>
								<th>Closing Ceremony</th>
							</tr>
						</table>
					</div>
				</div>
				<div class="section-inner-inner">
					<div class="venue">
						<h2>Venue</h2>
						<h3>Douglas College  &bull; Coquitlam Campus</h3>
						<h4>1250 Pinetree Way, Coquitlam, BC V3B 7X3</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506.5259523351536!2d-122.7910650336008!3d49.28857560870827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867f2f88e4f1d3%3A0xb88622a068a04442!2s1250+Pinetree+Way%2C+Coquitlam%2C+BC+V3B+7X3!5e0!3m2!1sen!2sca!4v1511418553159" class="map-embed" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="section-inner-inner">
					<div class="faq">
						<h2>FAQ</h2>
						<h3>Questions</h3>
						<div class="qanda">
							<div class="question">
								What do I bring?
							</div>
							<div class="answer">
								Complimentary pen and paper will be provided. Bring a laptop and yourself.
							</div>
						</div>
						<div class="qanda">
							<div class="question">
								What's the dress code?
							</div>
							<div class="answer">
								Formal attire (suit or dress)
							</div>
						</div>
						<div class="qanda">
							<div class="question">
								When are the position papers due?
							</div>
							<div class="answer">
								Wednesday of March 28
							</div>
						</div>
						<div class="qanda">
							<div class="question">
								How do you write a position paper?
							</div>
							<div class="answer">
								Please see our Position Paper Policy in our <a href="/committees">committees page</a>
							</div>
						</div>
						<div class="qanda">
							<div class="question">
								What awards are there?
							</div>
							<div class="answer">
								Best delegate, Outstanding delegate & Best position paper
							</div>
						</div>
						<div class="qanda">
							<div class="question">
								Is lunch provided?
							</div>
							<div class="answer">
								Yes, free pizza!
							</div>
						</div>
						<div class="qanda">
							<div class="question">
								Where can I go to ask questions?
							</div>
							<div class="answer">
								Please visit our <a href="/contact">contact page</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bottom">
			<footer>
				<h2>cydc</h2>
				<p>
					<a href="about">secretariats</a> &bull; <a href="committees">committees</a> &bull; <a href="conference">conference</a> &bull; <a href="contact">contact</a> &bull; <a href="registration">register</a> &bull; <a href="https://www.facebook.com/CYDCMUN/">facebook</a>
				</p>
			</footer>
		</section>

<!-- FOOTER.PHP END -->
<?php
	include 'footer.php';
?>