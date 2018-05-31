<!DOCTYPE html>
<html>
	<head>
		<title>UNSC</title>

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

	<div id="page" class="comm-unsc">

		<div id="com--header">
			<div id="com--header-left">
				<a href="/committees">
					COMMITTEES
				</a>
			</div>
			<div id="com--header-right">
				<a href="#page">
					UNSC
				</a>
			</div>
		</div>

		<div id="com--section-1">
			<div id="com--section-1-bg">
				<div id="com--titleContent-unsc">
					<div id="com--h1">
						UNSC
					</div>
					<div id="com--h2">
						United Nations Security Council
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
						Reform of Peacekeeping in Conflict Regions
					</div>
					<div id="com--container">
						<div id="com--p">
							The United Nations Security Council holds the responsibility to maintain world peace and security. The member states must comply to the decisions made by the UNSC
						</div>
						<div id="com--links">
							<div id="com--left-link">
								<div id="com--h3">
									Topic
								</div>
								<a href="backgrounders/CYDCMUN UNSC Backgrounder.pdf" target="_new">
									Backgrounder
								</a>
							</div>
							<div id="com--right-link">
								<div id="com--h3">
									Country
								</div>
								<a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRHQWujhGyUHBFaGVgjjJP8MfpJhIkRfNE60ZEn1aYJg_DvTAMtRbMpSkQKJQSHCxzvG-ktPdQOVGIk/pubhtml?gid=701160270&single=true" target="_new">
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
						UNSC
					</div>
					<div id="com--h1">
						DAIS
					</div>
					<div id="com--col-container">
						<div id="com--column" class="chair">
							<img id="com--column-image" src="img/staff/jiro.jpg" />
							<div id="com--bio-group">
							<div id="com--h5">
								Chair
							</div>
							<div id="com--h4">
								Jiro Luat
							</div>
								<div id="com--column-p">
									A senior arts student in Steveston-London Secondary School, Jiro is thrilled to be your chair for the United Nations Security Council. Albeit his experiences in Model UN consists of an overabundance of pettiness and awkward interactions, it is evident how his passion for international affairs is invaluable. The Model UN community has opened a lot of doors for him, from stepping over a milestone of self-confidence and sympathy, to eventually discovering the field of his interest in humanities and education. Other than writing poorly crafted resolution papers, Jiro spends his time in student council, dancing, and trying to raise his 1.0 GPA. He also enjoys dogspotting, although he occasionally volunteers for a cat sanctuary. As staff, he wishes to spread awareness of our ever changing society, and how we must do our best to work with one another, rather than the opposite. Jiro is excited to meet you all, and looks forward for a fruitful debate!
								</div>
							</div>
						</div>
						<div id="com--column" class="director">
							<img id="com--column-image" src="img/staff/tamerlan.png" />
							<div id="com--bio-group">
							<div id="com--h5">
								Director
							</div>
							<div id="com--h4">
								Tamerlan Nuhiyev
							</div>
								<div id="com--column-p">
									A junior attending Port Moody Secondary School, Tamerlan Nuhiyev is honoured and excited to serve as the Director of the United Nations Security Council (UNSC) at CYDCMUN 2018. Due to his unrelenting love of history, international law and global affairs, Tamerlan fit right into Model United Nations in his grade 9 year. Through Model United Nations, Tamerlan has grown in both leadership ability and knowledge of the world around him. Tamerlan hopes to share this love of global affairs with the delegates who will be delegating in the UNSC committee. With a great interest in finding solutions to the challenges that face us today, Tamerlan can also be found serving in various non-profit organizations, attending university global affairs seminars and attending municipal government debates. Tamerlan also has a passion for cooking, making sure to cook a new challenging dish every week. Tamerlan has high hopes for CYDCMUN 2018 and firmly believes that it will be an amazing experience for both himself and delegates of all backgrounds.
								</div>
							</div>
						</div>
						<div id="com--column" class="ad">
							<img id="com--column-image" src="img/staff/hooshang.jpg" />
							<div id="com--bio-group">
							<div id="com--h5">
								Assistant Director
							</div>
							<div id="com--h4">
								Hooshang Moghaddam
							</div>
								<div id="com--column-p">
									Hooshang is a grade 11 student at Port Moody Secondary, and is honored to be serving as the Assistant Director in UNSC at CYDC MUN. His enthusiasm for MUN began in grade 10 when he joined, he instantly fell in love and has not stopped since, he has learned about character, confidence and more all throughout his MUN career. When he's not busy with MUN he's working at the company he's building or the multiple extra curriclures he has endulged in such as Kindler's Society, Student Council, Tri-Sports and many more. As your Assistant Director he is not only here to fight for you in the committee but in all aspect of the conference. He believes that MUN can better anyone's life and is willing to help anyone who asks to get involved in the captivating world of MUN, he also looks forward to seeing all your smiling faces as you join the best conference in the Lower Mainland known as CYDCMUN
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
					<a href="/sochum">
						SOCHUM
					</a>
					<a class="com--a-active" href="/unsc">
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