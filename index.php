<!DOCTYPE html>
<html>
	<head>
		<title>Canadian Youth Debate Council MUN</title>
<!-- HEADER.PHP END -->
<?php
	include 'header.php';
?>

		<div id="landing" class="container">
			<script>
				$(document).ready(function() {
					$("#logo-white-top").css("opacity", "0");
					$("#logo-white-nav").css("opacity", "0");
				});

				$(window).scroll(function(){
					if($(window).scrollTop() >= 600) {
						$("#logo-white-top").css("opacity", "1");
						$("#logo-white-nav").css("opacity", "1");
					} else {
						$("#logo-white-top").css("opacity", "0");
						$("#logo-white-nav").css("opacity", "0");
					}
				});
			</script>
			<div id="jumbo" class="landing-jumbo">
				<img class="jumbofam" src="./img/bgp.jpg" />
				
				<img class="jumbofamicon" src="logo-white.png"/>
				
				<h1>CYDCMUN</h1>
			</div>

			<div id="index-arrow">
				<a href="#index-arrow"></a>
			</div>
			
			<section id="letter">
				<div class="section-inner">
					<div class="section-inner-inner">
						<h1>Welcome to</h1>
						<h3>Canadian Youth Debate Council Model United Nations 2018</h3>
						<p class="letter">
							<span class="text-indentation" style="padding-left:40px;"></span>As the Secretary General of the conference, it is such an honor to serve the passionate and energetic delegates and staff for 2018 CYDC Model United Nation. CYDCMUN is the first Model United Conference that operates under the Canadian Youth Debate Council (CYDC). CYDC is the first Canadian youth organization that educates and proposes the ideas of debate, MUN, mock trial, and business case, which is a debate organization entailing towards students wishing to enhance their public speaking and debate skills. Ever since it's inception in August 2017, CYDC has been providing student resources for schools and students alike. Our staff team believes it is our initiative to help students find a voice in MUN, to enjoy and learn about our global society and the international system.  As a SG of the first iteration, it is our priority to expand MUN into different communities and to open up more opportunities to returning members of staff and secretariat teams.
							<br><br>
							<span class="text-indentation" style="padding-left:40px;"></span>Model United Nation, also known as MUN, is a mock United Nations, where students represent delegates of the country and debate through various types of international conflicts to resolve the problem in many different committees. Such conference requires and will provide many different types of skill and experience to delegates, including confidence speech skill, higher quality of research skill, and problem-solving at the same time. Our conference looks forward to seeing more fresh and fruitful students to be involved in MUN communities and further explore ideas in such event. 
							<br><br>
							Our staff team and I look forward to welcoming you to Coquitlam in March. 
							<br><br>
							<strong>Brian Son</strong>
							<br>
							Secretary-General / CYDCMUN 2018
						</p>
					</div>
				</div>
			</section>
			<section class="middle bg-lightred">
				<div class="between-two-sections">
					<div class="section-inner-inner">
						<div class="countdown">
							<script>
							var countDownDate = new Date("March 31, 2018 08:15:00").getTime();
							var x = setInterval(function() {
							  var now = new Date().getTime();
							  var distance = countDownDate - now;
							  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
							  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
							  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
							  document.getElementById("timer").innerHTML = days + "<div class='countdown-label'>D</div>" + hours + "<div class='countdown-label'>H</div>"
							  + minutes + "<div class='countdown-label'>M</div>" + seconds + "<div class='countdown-label'>S</div>";
							  if (distance < 0) {
							    clearInterval(x);
							    document.getElementById("timer").innerHTML = "h";
							  }
							}, 1000);
							</script>
							<div class="index_conference_venue">
								<h3>Venue</h3>
								<h4><font style="font-weight:bold; letter-spacing:2px; text-transform:uppercase; font-family:'Montserrat', sans-serif; font-size:3.5rem;">Douglas College</font><br>Coquitlam Campus
									<br>
									&mdash;
								</h4>
								<h5>1250 Pinetree Way,<br>Coquitlam, BC V3B 7X3</h5>
							</div>
							<div class="index_conference_date">
								<h3>Date</h3>
								<h4><font style="font-weight:bold; letter-spacing:2px; text-transform:uppercase; font-family:'Montserrat', sans-serif; font-size:3.5rem;">March 31<sup>st</sup></font>
									<br>
									9 AM
									<br>
									&mdash;
								</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="about">
				<div class="section-inner-es">
					<div class="section-inner-inner">
						<h1>About</h1>
						<h3>Canadian Youth Debate Council</h3>
						<p class="letter">
							<span class="text-indentation" style="padding-left:40px;"></span>The Canadian Youth Debate Council Model United Nations is a youth organization entailed towards students wishing to enhance their public speaking and debate skills. Ever since it's inception in August 2017, CYDC has been providing student resources for schools and students alike. It is our initiative to help students find a voice whether through debate, MUN, business, or other means. As a Model United Nations Conference, it is our upmost priority to expand MUN influence into differing communities and to open up  opportunities for returning members of staff and secretariat teams.
						</p>
						<div class="three-circles">
							<div class="column">
								<a href="/about">
									<div class="column-inner">
										<h4>Secretariat</h4>
										<p>
											Meet the hard working secretiariat team behind the conference
										</p>
									</div>
								</a>
							</div>
							<div class="column">
								<a href="/committees">
									<div class="column-inner">
										<h4>Committees</h4>
										<p>
											SOCHUM<br>UNSC<br>HJCC
										</p>
									</div>
								</a>
							</div>
							<div class="column">
								<a href="/conference">
									<div class="column-inner">
										<h4>Conference</h4>
										<p>
											Day conference @ Douglas College Coquitlam campus on March 31st
										</p>
									</div>
								</a>
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
		</div>

<!-- FOOTER.PHP END -->
<?php
	include 'footer.php';
?>