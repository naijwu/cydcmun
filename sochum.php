<!DOCTYPE html>
<html>
	<head>
		<title>SOCHUM</title>

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

	<div id="page" class="comm-sochum">

		<div id="com--header">
			<div id="com--header-left">
				<a href="/committees">
					COMMITTEES
				</a>
			</div>
			<div id="com--header-right">
				<a href="#page">
					SOCHUM
				</a>
			</div>
		</div>

		<div id="com--section-1">
			<div id="com--section-1-bg">
				<div id="com--titleContent-sochum">
					<div id="com--h1">
						SOCHUM
					</div>
					<div id="com--h2">
						Social, Humanitarian, and <br> Cultural Committee
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
						The Farmer Suicide Crisis in India
					</div>
					<div id="com--container">
						<div id="com--p">
							The Social, Humanitarian & Cultural committee is the Third Committee of the General Assembly. The topics discussed in SOCHUM relate to social, humanitarian and human rights issues around the world.
						</div>
						<div id="com--links">
							<div id="com--left-link">
								<div id="com--h3">
									Topic
								</div>
								<a href="backgrounders/CYDCMUN SOCHUM Backgrounder.pdf" target="_new">
									Backgrounder
								</a>
							</div>
							<div id="com--right-link">
								<div id="com--h3">
									Country
								</div>
								<a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRHQWujhGyUHBFaGVgjjJP8MfpJhIkRfNE60ZEn1aYJg_DvTAMtRbMpSkQKJQSHCxzvG-ktPdQOVGIk/pubhtml?gid=0&single=true" target="_new">
									Country Matrix
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
						SOCHUM
					</div>
					<div id="com--h1">
						DAIS
					</div>
					<div id="com--col-container">
						<div id="com--column" class="chair">
							<img id="com--column-image" src="img/staff/evelyn.jpg" />
							<div id="com--bio-group">
							<div id="com--h5">
								Chair
							</div>
							<div id="com--h4">
								Evelyn<br>Gondosiswanto
							</div>
								<div id="com--column-p">
									Evelyn Gondosiswanto is a rising junior at Fraser Heights Secondary and is beyond excited to serve as the chair of SOCHUM for CYDCMUN 2018. She started her journey in MUN and debate in grades 8 & 9 and has been absolutely addicted ever since. Whether it comes to debating under the influence of caffeine during midnight crises or procrastinating on position papers, she can definitely say that every experience has been unforgettable. Outside of MUN conferences, Evelyn can be seen inhaling desserts like the sweet tooth she is, fiddling away on the violin or periodically making cringy science puns because all the awesome ones Argon. Evelyn sincerely hopes delegates will have a memorable time at CYDCMUN and that she can provide an exciting experience that makes it happen!
								</div>
							</div>
						</div>
						<div id="com--column" class="director">
							<img id="com--column-image" src="img/staff/nick.jpg" />
							<div id="com--bio-group">
								<div id="com--h5">
									Director
								</div>
								<div id="com--h4">
									Nick Young
								</div>
								<div id="com--column-p">
									Suffering through eleventh grade at St. George’s school, Nick Young is ecstatic to be directing SOCHUM at CYDCMUN 2018. After doing Model UN for 2 years, he’s proud to say he has learned a great deal about international relations and public speaking since his first delegation as Lebanon in WHO. After enjoying the debate and deliberation of the simulation for multiple conferences, he cannot wait to share the same enriching experience with his delegates as a Director. When not slaving over schoolwork or studying, Nick is committed to several charities, the student council, and several Model UN conferences. His interests vary from playing badminton, practicing piano, and reading books to browsing Facebook, doing things ironically, and searching for the freshest memes. He wishes all delegates best of luck at CYDCMUN 2018!
								</div>
							</div>
						</div>
						<div id="com--column" class="ad">
							<img id="com--column-image" src="img/staff/young.jpg" />
							<div id="com--bio-group">
							<div id="com--h5">
								Assistant Director
							</div>
							<div id="com--h4">
								Young Do
							</div>
								<div id="com--column-p">
									As the  Assistant Director of SOCHUM, Young Do is honoured to provide every delegate a valuable eye-opening experience. Young is a  suffering senior currently surviving through the IB program in R.E Mountain Secondary school, as she began Model United Nations last year, discovering her love and passion for public speaking and debate. Despite starting MUN recently, Young was able to flourish and develop from every opportunity of MUN conferences.  Asides from being dedicated to Model United Nations, you can find her either volunteering as a student teacher at elementary schools or as a peer mentor in Kumon in order to pursue her passion in teaching, or find her volunteering within numerous charity organizations. Young is more than ecstatic to meet everyone at CYDCMUN 2018!
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
					<a id="com--footer-committees" href="/">
						Committees
					</a>
				</div>
				<div id="com--footer-right">
					<a class="com--a-active" href="/sochum">
						SOCHUM
					</a>
					<a href="/unsc">
						UNSC
					</a>
					<a href="/hjcc">
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