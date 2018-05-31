		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="logo.png">
		<link rel="stylesheet" type="text/css" href="style.css">'
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:400,700|Open+Sans:300,400|PT+Sans+Narrow" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
		<script src="./parallax/parallax.min.js"></script>
		<script>
			window.sr = ScrollReveal();

			// PAGE SCROLLING ANIMATION

			/*
			var lastScrollTop = 0;
			$(window).scroll(function(event){
			 	var st = $(this).scrollTop();
			 	var navCheck = document.getElementById("nav-trigger");
			 	if ($(window).width() > 835) {
			 		if(navCheck.checked == false) {
						if (st > lastScrollTop){
							// scrolled down
							$(".top-border-skew").css({
								"height":"7vh"
							});
							$(".top-border-text").css({
								"line-height":"4vh",
								"font-size":"4rem"
							});
							$("#nav-trigger-label").css({
								"top":"3vh"
							});
							$("#index-arrow").css({
								"opacity":"0"
							});
						} else {
							// scrolled up
							$(".top-border-skew").css({
								"height":"7vh" // 13
							});
							$(".top-border-text").css({
								"line-height":"4vh", // 10
								"font-size":"4rem" // 5
							});
							$("#nav-trigger-label").css({
								"top":"3vh" // 5.5
							});
							$("#index-arrow").css({
								"opacity":"1"
							});
						}
					}
				}
				lastScrollTop = st;
			});
			*/

			$(window).scroll(function(){
				$("#jumbo h1").css("opacity", 1 - $(window).scrollTop() / 350);
				$("#jumbo h2").css("opacity", 1 - $(window).scrollTop() / 350);
				$("#jumbo .jumbofamicon").css("opacity", 1 - $(window).scrollTop() / 350);
			});

			// RESIZE MINIMIZED HEADER ON NAV CLICK
			/*
			function checkboxChecked() {
				$(".top-border-skew").css({
					"height":"7vh" // 13
				});
				$(".top-border-text").css({
					"line-height":"4vh", // 10
					"font-size":"4rem" // 5
				});
				$("#nav-trigger-label").css({
					"top":"3" // 5.5
				});
			}
			*/

			// PAGE LOADING FUNCTION
			/*
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
			*/



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

	<div id="page">
		<input type="checkbox" id="nav-trigger" class="nav-trigger" onclick="checkboxChecked();" />
		<label for="nav-trigger" id="nav-trigger-label"></label>
		<nav>
			<div class="nav-inner">
				<div class="nav-inner-inner"> <!-- for vertical alignment of nav list -->
					<ul>
						<li><a href="committees">Committees</a></li>
						<li><a href="conference">Conference</a></li>
						<li><a href="registration">Registration</a></li>
					</ul>
				</div>
				<a class="logo-white-nav" href="/">
					<img id="logo-white-nav" src="logo-white.png" />
				</a>
				<div class="nav-inner-inner">
					<ul class="eastside">
						<li><a class="notserpents" href="about">Secretariat</a></li>
						<li><a class="notserpents" href="contact">Contact</a></li>
						<li><a class="notserpents" href="https://www.facebook.com/CYDCMUN/" target="_blank">Facebook</a></li>
					</ul>
				</div>
				<div class="mobie">
					<ul>
						<li><a href="/">CYDCMUN '18</a></li>
						<li><a href="committees">Committees</a></li>
						<li><a href="conference">Conference</a></li>
						<li><a href="registration">Registration</a></li>
						<li><a href="about">Secretariat</a></li>
						<li><a href="contact">Contact</a></li>
						<li><a href="https://www.facebook.com/CYDCMUN/">Facebook</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="top-border-skew">
			<a href="/">
				<img id="logo-white-top" src="logo-white.png" />
			</a>
		</div>