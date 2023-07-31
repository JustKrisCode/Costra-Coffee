<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" type="text/css" media="all" />
	<title>Costra</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logoup1.png" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="preload" as="style">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/293c91b144.js" crossorigin="anonymous"></script>
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lumanosimo&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
</head>
<body>
	
	<!-- Header -->

	<header class="header">
		<div class="shell__header">
			<div class="header__inner">
				<a href="#" class="logo">
					<img src="assets/images/logo1.png" alt="logo">
				</a>

				<nav class="nav">
					<ul>
						<li>
							<a href="index.php">HOME</a>
						</li>

						<li>
							<a href="about.php">ABOUT</a>
						</li>

						<li>
							<a href="menu.php">MENU</a>
						</li>
						
						<li>
							<a href="#">MORE <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">

								<path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>

								<path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>

							</svg></a>

							<ul class="dropdown">
								<li>
									<a href="location.php">Location</a>
								</li>

								<li>
									<a href="#">News</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav><!-- /.nav -->

				<div class="header__actions">

					<?php
					if(isset($_SESSION['username'])){
						echo "
						<button id='logout'>LOG OUT</button>					 	
						<i class='fa-regular fa-user'></i>
						<a href='#'><i class='fa-solid fa-cart-shopping'></i><sup>0</sup></a>";
					}
					else{
						echo "
						<a href='login.php'><button>LOG IN</button></a>
						";
					}
					?>
				</div><!-- /.header__actions -->
			</div><!-- /.header__inner -->
		</div><!-- /.shell -->
	</header><!-- /.header -->

	<!-- HERO -->

	<section class="hero">
		<div class="hero__content">
			<h1>
				COSTRA
			</h1><!-- /.hero__h1 -->

			<p>
				The secret lies in a small cup of coffee!
			</p>
		</div><!-- /.hero__content -->

		<figure class="hero__img">
			<img src="assets/images/bg21.gif" alt="Background">
		</figure><!-- /.hero__img -->
	</section><!-- /.hero -->

	<!-- About us  -->

	<section class="forme">
		<figure class="forme-image1">
			<img src="assets/images/design1.png" alt="">
		</figure>

		<div class="shell">
			<div class="forme__inner">
				<h1>ABOUT US</h1>

				<figure class="menu-img">
					<img src="assets/images/smallLogo.png" alt="">
				</figure><!-- /.menu-img -->

				<div class="forme__content">

					<h1>Our history</h1>


					<div class="forme__content2">

						<div class="forme__group1">

							<p>Costra has over 45 years of experience in producing high quality coffee. Our story is unique, as is our coffee. At Costa Coffee, we have always believed that you need passion to create excellence. Brothers Sergio and Bruno Costa also believed in this.
								The story of Costra begins in 1971, when the brothers Sergio and Bruno arrived in London with the great desire to make coffee with a great taste a part of the daily life of Londoners. They opened a small bakery on Fenchurch Street with the desire to produce coffee of the highest quality.
							The Costra brothers blindly test 112 different coffee combinations before choosing the one good enough to become our signature blend. They call this blend Mocha Italia and it remains our signature blend to this day.</p>

							<div class="forme__button">

								<a href="about.php"><button>Learn more</button></a>

							</div><!-- /.forme__button -->

						</div><!-- /.forme__group1 -->

					</div><!-- /.forme__content2 -->

				</div><!-- /.forme__content -->
			</div><!-- /.forme__inner -->
		</div><!-- /.shell -->
	</section><!-- /.forme -->

	<section class="menu">
		<div class="menu__content">
			<h1>OUR DELICIOUS OFFER</h1>

			<figure class="menu-img">
				<img src="assets/images/smallLogo.png" alt="">
			</figure><!-- /.menu-img -->

		</div><!-- /.menu__content -->
		<div class="card-size">
			<div class="card-group">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Special offers</h5>

						<p class="card-text">Here you will see the most special offers, every week there are 3 new special offers.</p>

						<figure class="card-bg">

							<img src="assets/images/bg22.png" alt="">
						</figure>

						<a href="menu.php"><button class="button"><span>Special offers </span></button></a>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Desserts and coffee</h5>

						<p class="card-text">One of the most delicious desserts on the market. We have such a wide variety to suit every taste.</p>

						<figure class="card-bg">

							<img src="assets/images/desserts.png" alt="">

						</figure>

						<a href="menu.php"><button class="button"><span>Desserts </span></button></a>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Snacks</h5>

						<p class="card-text">Costra snacks are tasty and interesting, just like our customers.The best snacks ever!</p>

						<figure class="card-bg">

							<img src="assets/images/snacks.png" alt="">                    
						</figure>

						<a href="menu.php"><button class="button"><span>Snacks</span></button></a>
					</div>
				</div>
			</div>
		</div><!-- /.card-size -->
	</section><!-- /.menu -->


	<!-- Section Rate -->

	<section class="section-rate">
		<h1>Comments for us:</h1>

		<figure class="menu-img">
			<img src="assets/images/smallLogo.png" alt="">
		</figure><!-- /.menu-img -->
		
		<ul class="section__cards">
			<li>
				<div class="section__card">
					<div class="section__card-t">
						<figure class="section__image">
							<img src="assets/images/u1.png" alt="">
						</figure><!-- /.section__image -->

						<div class="section__rate">
							<h3>Tenessa Miloun</h3>

							<ul class="section__rating">
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
							</ul><!-- /.section__rating -->
						</div><!-- /.section__rate -->
					</div><!-- /.section__card-t -->

					<p>I’m on this kick of drinking 5 cups of warm water. I work for Instacart right now and every location of Costra I was given free hot water because I asked for it without being charged. I really appreciate Costra for giving me the opportunity to do such thing. That’s why I give them five stars. They fully have my support. They’re super nice and professional and the coffee is great. Go to Costra.</p>
				</div><!-- /.section__card -->
			</li>
			
			<li>
				<div class="section__card">
					<div class="section__card-t">
						<figure class="section__image">
							<img src="assets/images/u2.png" alt="">
						</figure><!-- /.section__image -->

						<div class="section__rate">
							<h3>Tamara Khurma</h3>

							<ul class="section__rating">
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
							</ul><!-- /.section__rating -->
						</div><!-- /.section__rate -->
					</div><!-- /.section__card-t -->

					<p>I always use your drivethru and everyone is always smiling! They're helpful , energetic, and friendly! So getting my coffee every morning is definately a pleasant experience at Costra :)</p>
				</div><!-- /.section__card -->
			</li>

			<li>
				<div class="section__card">
					<div class="section__card-t">
						<figure class="section__image">
							<img src="assets/images/u3.png" alt="">
						</figure><!-- /.section__image -->

						<div class="section__rate">
							<h3>David Whitfield</h3>

							<ul class="section__rating">
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
							</ul><!-- /.section__rating -->
						</div><!-- /.section__rate -->
					</div><!-- /.section__card-t -->

					<p>My daughter and I recently visited Costra in Sunderland City Centre. <br>
						My daughter has the app to get the points and asked the lady if she would receive a free drink as it was her birthday. <br>
						The young lady (unfortunately I didn't catch her name) advised this is only the case if my daughter was a Gold Member on the app, however, the staff member kindly gave my daughter a free drink anyway which   was such nice gesture.
					Amazing customer service and makes me continue to visit Costra because of this.</p>
				</div><!-- /.section__card -->
			</li>

			<li>
				<div class="section__card">
					<div class="section__card-t">
						<figure class="section__image">
							<img src="assets/images/user4.png" alt="">
						</figure><!-- /.section__image -->

						<div class="section__rate">
							<h3>Ted Parker</h3>

							<ul class="section__rating">
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
							</ul><!-- /.section__rating -->
						</div><!-- /.section__rate -->
					</div><!-- /.section__card-t -->

					<p>Imagine walking through the mall, you are incredibly thirsty and haven’t had a drink all day.<br>My order (medium caramel frappe) was quickly taken and I was told to go wait by the counter. I was only stood there for 20 seconds before my order was ready. The person making my drink looked like he actually liked his job which is quite rare for a coffee shop. I picked up my order and left the store that was when I realised that they had given me a large when I asked for a medium. I still don’t know if it was an accident or if the guy was just doing something nice. I have know idea why Costra has so many bad reviews, all my experiences with the brand have been positive.</p>
				</div><!-- /.section__card -->
			</li>

			<li>
				<div class="section__card">
					<div class="section__card-t">
						<figure class="section__image">
							<img src="assets/images/user5.png" alt="">
						</figure><!-- /.section__image -->

						<div class="section__rate">
							<h3>Renee Vischer</h3>

							<ul class="section__rating">
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
							</ul><!-- /.section__rating -->
						</div><!-- /.section__rate -->
					</div><!-- /.section__card-t -->

					<p>I am a regular customer at Costra coffee shops, but most frequently at my local, which is Costa Camden Road. In the past I have had cause to complain about this branch, but now, after enjoying my visits on a number of consecutive occasions, I want to say how happy I am with the staff, led by Manager, Shaibaz. The place has been transformed. Good baristas, friendly customer service and reliable cleanliness. Highly recommended.</p>
				</div><!-- /.section__card -->
			</li>
			
			<li>
				<div class="section__card">
					<div class="section__card-t">
						<figure class="section__image">
							<img src="assets/images/user6.png" alt="">
						</figure><!-- /.section__image -->

						<div class="section__rate">
							<h3>Jon Staffr</h3>

							<ul class="section__rating">
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
							</ul><!-- /.section__rating -->
						</div><!-- /.section__rate -->
					</div><!-- /.section__card-t -->

					<p>I’m on this kick of drinking 5 cups of warm water. I work for Instacart right now and every location of Costra I was given free hot water because I asked for it without being charged. I really appreciate Costra for giving me the opportunity to do such thing. That’s why I give them five stars. They fully have my support. They’re super nice and professional and the coffee is great. Go to Costra.</p>
				</div><!-- /.section__card -->
			</li>

			<li>
				<div class="section__card">
					<div class="section__card-t">
						<figure class="section__image">
							<img src="assets/images/user7.png" alt="">
						</figure><!-- /.section__image -->

						<div class="section__rate">
							<h3>Marcos Pene</h3>

							<ul class="section__rating">
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
							</ul><!-- /.section__rating -->
						</div><!-- /.section__rate -->
					</div><!-- /.section__card-t -->

					<p>My order (medium caramel frappe) was quickly taken and I was told to go wait by the counter. I was only stood there for 20 seconds before my order was ready. The person making my drink looked like he actually liked his job which is quite rare for a coffee shop. I picked up my order and left the store that was when I realised that they had given me a large when I asked for a medium. I still don’t know if it was an accident or if the guy was just doing something nice. I have know idea why Costra has so many bad reviews, all my experiences with the brand have been positive.<</p>
				</div><!-- /.section__card -->
			</li>

			<li>
				<div class="section__card">
					<div class="section__card-t">
						<figure class="section__image">
							<img src="assets/images/user8.png" alt="">
						</figure><!-- /.section__image -->

						<div class="section__rate">
							<h3>Bane Filone</h3>

							<ul class="section__rating">
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
								
								<li class="fa fa-star"></li>
							</ul><!-- /.section__rating -->
						</div><!-- /.section__rate -->
					</div><!-- /.section__card-t -->

					<p>Costra snacks are tasty and interesting, just like our customers.</p>
				</div><!-- /.section__card -->
			</li>
		</ul><!-- /.section__cards -->
	</section><!-- /.section-rate -->

	<!-- Footer -->

<footer class="footer" id="contacts">
  <div class="footer__top">
    <div class="shell">
      <div class="footer__cols">
        <div class="footer__col">
          <figure class="footer__img">
            <img src="assets/images/logo1.png" alt="">
          </figure>
        </div><!-- /.footer__col footer__col-/-1of3 -->
        
        <div class="footer__col">
          <ul class="footer__socials">
            <li>
              <i class="fa-brands fa-instagram"></i>
            </li>

            <li>
              <i class="fa-brands fa-facebook"></i>
            </li>

            <li>
              <i class="fa-brands fa-twitter"></i>
            </li>

            <li>
              <i class="fa-brands fa-tiktok"></i>
            </li>

            <li>
              <i class="fa-brands fa-youtube"></i>
            </li>
          </ul><!-- /.footer__socials -->
        </div><!-- /.footer__col footer__col-/-1of3 -->
      </div><!-- /.footer__cols -->
    </div><!-- /.shell -->
  </div><!-- /.footer__top -->

  <div class="footer__bottom">
    <p>
      © <a href="https://cean.ml" target="_blank">Costra</a> <b>&#183</b> 2023
    </p>

    <p>costraCoffee@gmail.com</p>
  </div><!-- /.footer__bottom -->
</footer><!-- /.footer -->

	<script src="user.js"></script>
	<script type="text/javascript">
		$('#logout').click(function(){
			$.ajax({
				type: "POST",
				url: "assets/php/logout.php",
				data: {
					issend: 1
				},
				cache: false,
				success: function(response) {
					$('.header__actions').empty();
					$('.header__actions').append("<a href='login.php'><button>LOG IN</button></a>");
				}
			});
		});
	</script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>