<!DOCTYPE html>
<html>
	<head>
		<title>HJCC</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="logo.png">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="eucatastrophy.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:400,700|Open+Sans:300,400|PT+Sans+Narrow" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
		<script>
			// PAGE LOADING FUNCTION
			function onReady(callback) {
				var intervalID = window.setInterval(checkReady, 1000);
				function checkReady() {
					if (document.getElementsByTagName('body')[0] !== undefined) {
						window.clearInterval(intervalID);
						callback.call(this);
					}
				}
			}

			function show(id, value) {
				document.getElementById(id).style.opacity = value ? '1' : '0';
			}

			onReady(function () {
				show('page', true);
				show('loading', false);

				setTimeout(fadeOutTimer, 750);
			});

			function fadeOutTimer() {
				$('#loading').css("display","none");
			}

			$(document).ready(function(){
			  // Add smooth scrolling to all links
			  $("a").on('click', function(event) {

			    // Make sure this.hash has a value before overriding default behavior
			    if (this.hash !== "") {
			      // Prevent default anchor click behavior
			      event.preventDefault();

			      // Store hash
			      var hash = this.hash;

			      // Using jQuery's animate() method to add smooth page scroll
			      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			      $('html, body').animate({
			        scrollTop: $(hash).offset().top
			      }, 800, function(){
			   
			        // Add hash (#) to URL when done scrolling (default click behavior)
			        window.location.hash = hash;
			      });
			    } // End if
			  });
			});
		</script>
	</head>
	<body>

	<div id="loading">
		<!-- <img src="logo.png" class="loader-img" /> -->
		<div class="loader"></div>
	</div>

	<div id="page" class="comm-hjcc">

		<div id="com--header">
			<div id="com--header-left">
				<a href="/committees">
					COMMITTEES
				</a>
			</div>
			<div id="com--header-right">
				<a href="#page">
					HJCC
				</a>
			</div>
		</div>

		<div id="com--section-1">
			<div id="com--section-1-bg">
				<div id="com--titleContent-hjcc">
					<div id="com--h1">
						HJCC
					</div>
					<div id="com--h2">
						Historical Joint Crisis Committee
					</div>
				</div>
			</div>
		</div>
			

		<div id="com--section-2">
			<div id="com--section-2-bg" />
				<div id="com--article">
					<div id="com--h2">
						TOPIC
					</div>
					<div id="com--h1-topic">
						The Third Reich
					</div>
					<div id="com--container">
						<div id="com--p">
							The Historical Crisis Committee takes you back to a time of crisis, and requires all delegates in a perpetual moderated caucus to respond. Delegates do not represent a country, but are representatives of important figures. Position papers are not necessary in crisis committees.
						</div>
						<div id="com--links">
							<div id="com--left-link">
								<div id="com--h3">
									Topic
								</div>
								<a href="backgrounders/CYDCMUN HJCC Backgrounder.pdf">
									Backgrounder
								</a>
							</div>
							<div id="com--right-link">
								<div id="com--h3">
									Representative
								</div>
								<a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRHQWujhGyUHBFaGVgjjJP8MfpJhIkRfNE60ZEn1aYJg_DvTAMtRbMpSkQKJQSHCxzvG-ktPdQOVGIk/pubhtml?gid=1197458207&single=true" target="_new">
									People Matrix
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="com--section-3">
			<div id="com--section-3-bg" />
				<div id="com--article">
					<div id="com--h2">
						HJCC
					</div>
					<div id="com--h1">
						DAIS
					</div>
					<div id="com--hjcc-container">
						<br><br>
						<div id="com--hjcc-content">
							<img id="com--column-image" src="img/staff/kevin.png" />
							<div id="com--bio-group">
								<div id="com--h5">
									Crisis Overlord
								</div>
							<div id="com--h4">
								Kevin Roe
							</div>
								<div id="com--column-p">
									Kevin Roe is a grade 9 student at Pacific Academy. Having started MUN in grade 6, Kevin developed an interest in debate, and mock trials. If you don't see Kevin at debate tournaments or MUN conferences, you can see him at math contests, contemplating on his losses in debate or playing his tenor or alto saxophone or his occasional French Horn dubbed "The Snail". Overall, Kevin is a competitive person who loves to win and have good food. Kevin hopes that delegates will have a great time at HJCC
								</div>
							</div>
						</div>

						<div class="com-header">
							Nazi Party
						</div>

						<div id="com--hjcc-content">
							<img id="com--column-image" src="img/staff/jason.jpg" />
							<div id="com--bio-group">
							<div id="com--h5">
								Bloc Director
							</div>
							<div id="com--h4">
								Jason Fan
							</div>
								<div id="com--column-p">
									Jason is currently a junior attending Gleneagle Secondary School. Starting Model UN at grade 9, Jason was instantly captivated by the world of political debate. Outside of Model UN, Jason can be found taking landscape photos, shredding the slopes of the Blackcomb Mountain, and avidly trying to make everything related to politics. Living by the motto “Follow the motion of the ocean.” Jason adapts to changes in society and lives life like there is no tomorrow. Jason is thrilled to meet the HJCC delegates, and can't wait for CYDCMUN 2018.
								</div>
							</div>
						</div>
						<div id="com--hjcc-content">
							<img id="com--column-image" src="img/staff/joanne.jpg" />
							<div id="com--bio-group">
							<div id="com--h5">
								Chair
							</div>
							<div id="com--h4">
								Joanne Chang
							</div>
								<div id="com--column-p">
									Joanne Chang is currently in her senior year at Fraser Heights Secondary and is pleased to be serving as chair for HJCC at CYDCMUN 2018. She was introduced to the world of Model United Nations in grade 8 and has been completely enamoured with it ever since. One of her favourite aspects of MUN is the opportunity to interact with people from all over the lower mainland, so she is greatly anticipating meeting all of her delegates! When she isn’t busy drowning in homework, you can find her scrolling through Facebook mindlessly, admiring the lustre of brass instruments, or attempting to converse in somewhat broken Spanish and French. She hopes that delegates of all levels of experience will find HJCC to be an engaging and fruitful committee, and wishes the best of luck to everyone at the conference.
								</div>
							</div>
						</div>

						<div class="com-header">
							Social Union of Germany
						</div>

						<div id="com--hjcc-content">
							<img id="com--column-image" src="img/staff/parker.jpg" />
							<div id="com--bio-group">
							<div id="com--h5">
								Bloc Director
							</div>
							<div id="com--h4">
								Parker Johnston
							</div>
								<div id="com--column-p">
									Parker is currently a senior at Steveston London Secondary, and is absolutely delighted to serve as the Chair of the Historical Crisis Committee. From nervously raising his placard at his first conference, to roasting friends over a semicolon, Model UN has had a huge impact on his life. When not at conferences, you can find Parker stressing over all the work he has to do, stressing over applications, stressing over clubs, and occasionally actually being productive. In his (limited) spare time, you’ll see him planning events for his Interact Club, or finding somewhere new to eat downtown. Parker looks forward to a day of fun and fruitful debate.
								</div>
							</div>
						</div>
						<div id="com--hjcc-content">
							<img id="com--column-image" src="img/staff/genevieve.jpg" />
							<div id="com--bio-group">
							<div id="com--h5">
								Chair
							</div>
							<div id="com--h4">
								Geneviève Dubuc
							</div>
								<div id="com--column-p">
									Geneviève Dubuc is currently a senior attending École Secondaire Jules-Verne and she is delighted to serve as Chair of the Historical Joint Crisis Committee at CYDC Model United Nations 2018. After Model UN piqued her curiosity and she attended her first conference, Geneviève has only delved deeper into the world of debate and has not turned back since. Outside of the Model UN scene, you can find her volunteering for various organizations, discovering new eateries around Vancouver and attempting to become a polyglot. Geneviève looks forward to a weekend of fervent debate and looks forward to meeting everyone at CYDCMUN 2018!
								</div>
							</div>
						</div>
					</div>
					<div id="com--hjcc-container-mobie">
												<!-- MOBILE -->
						<div id="com--col-container">
							<div id="com--column">
								<img id="com--column-image" src="img/staff/kevin.png" />
								<div id="com--bio-group">
								<div id="com--h5">
									Crisis Overlord
								</div>
								<div id="com--h4">
									Kevin Roe
								</div>
									<div id="com--column-p">
										Kevin Roe is a grade 9 student at Pacific Academy. Having started MUN in grade 6, Kevin developed an interest in debate, and mock trials. If you don't see Kevin at debate tournaments or MUN conferences, you can see him at math contests, contemplating on his losses in debate or playing his tenor or alto saxophone or his occasional French Horn dubbed "The Snail". Overall, Kevin is a competitive person who loves to win and have good food. Kevin hopes that delegates will have a great time at HJCC
									</div>
								</div>
							</div>

							<div class="com-header">
								Nazi Party
							</div>

							<div id="com--column">
								<img id="com--column-image" src="img/staff/jason.jpg" />
								<div id="com--bio-group">
									<div id="com--h5">
										Bloc Director
									</div>
									<div id="com--h4">
										Jason Fan
									</div>
									<div id="com--column-p">
										Jason is currently a junior attending Gleneagle Secondary School. Starting Model UN at grade 9, Jason was instantly captivated by the world of political debate. Outside of Model UN, Jason can be found taking landscape photos, shredding the slopes of the Blackcomb Mountain, and avidly trying to make everything related to politics. Living by the motto “Follow the motion of the ocean.” Jason adapts to changes in society and lives life like there is no tomorrow. Jason is thrilled to meet the HJCC delegates, and can't wait for CYDCMUN 2018.
									</div>
								</div>
							</div>

							<div id="com--column">
								<img id="com--column-image" src="img/staff/joanne.jpg" />
								<div id="com--bio-group">
									<div id="com--h5">
										Chair
									</div>
									<div id="com--h4">
										Joanne Chang
									</div>
									<div id="com--column-p">
										Joanne Chang is currently in her senior year at Fraser Heights Secondary and is pleased to be serving as chair for HJCC at CYDCMUN 2018. She was introduced to the world of Model United Nations in grade 8 and has been completely enamoured with it ever since. One of her favourite aspects of MUN is the opportunity to interact with people from all over the lower mainland, so she is greatly anticipating meeting all of her delegates! When she isn’t busy drowning in homework, you can find her scrolling through Facebook mindlessly, admiring the lustre of brass instruments, or attempting to converse in somewhat broken Spanish and French. She hopes that delegates of all levels of experience will find HJCC to be an engaging and fruitful committee, and wishes the best of luck to everyone at the conference.
									</div>
								</div>
							</div>

							<div class="com-header">
								Social Union of Germany
							</div>


							<div id="com--column">
								<img id="com--column-image" src="img/staff/parker.jpg" />
								<div id="com--bio-group">
								<div id="com--h5">
									Bloc Director
								</div>
								<div id="com--h4">
									Parker Johnston
								</div>
									<div id="com--column-p">
										Parker is currently a senior at Steveston London Secondary, and is absolutely delighted to serve as the Chair of the Historical Crisis Committee. From nervously raising his placard at his first conference, to roasting friends over a semicolon, Model UN has had a huge impact on his life. When not at conferences, you can find Parker stressing over all the work he has to do, stressing over applications, stressing over clubs, and occasionally actually being productive. In his (limited) spare time, you’ll see him planning events for his Interact Club, or finding somewhere new to eat downtown. Parker looks forward to a day of fun and fruitful debate.
									</div>
								</div>
							</div>
							<div id="com--column">
								<img id="com--column-image" src="img/staff/genevieve.jpg" />
								<div id="com--bio-group">
								<div id="com--h5">
									Chair
								</div>
								<div id="com--h4">
									Geneviève Dubuc
								</div>
									<div id="com--column-p">
										Geneviève Dubuc is currently a senior attending École Secondaire Jules-Verne and she is delighted to serve as Chair of the Historical Joint Crisis Committee at CYDC Model United Nations 2018. After Model UN piqued her curiosity and she attended her first conference, Geneviève has only delved deeper into the world of debate and has not turned back since. Outside of the Model UN scene, you can find her volunteering for various organizations, discovering new eateries around Vancouver and attempting to become a polyglot. Geneviève looks forward to a weekend of fervent debate and looks forward to meeting everyone at CYDCMUN 2018!
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="com--footer">
				<div id="com--footer-left">
					<a id="com--footer-cydc" href="/">
						CYDCMUN
					</a>
					<a id="com--footer-committees" href="/committees">
						Committees
					</a>
				</div>
				<div id="com--footer-right">
					<a href="/sochum">
						SOCHUM
					</a>
					<a href="/unsc">
						UNSC
					</a>
					<a class="com--a-active" href="/hjcc">
						HJCC
					</a>
				</div>
			</div>
		</div>
	</div>
	<script>
		sr.reveal('.section-inner-inner');
	</script>
	</body>
</html>