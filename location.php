<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" type="text/css" media="all" />
	<title>Costra</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logoup1.png" />
	<link rel="stylesheet" href="assets/css/location.css" />
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

	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css' rel='stylesheet' />
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
									<a href="#">Location</a>
								</li>

								<li>
									<a href="#">News</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav><!-- /.nav -->
			</div><!-- /.header__inner -->
		</div><!-- /.shell -->
	</header><!-- /.header -->

	<!-- HERO -->

	<section class="hero">
		<div class="hero__content">
			<h1>
				LOCATION
			</h1><!-- /.hero__h1 -->

		</div><!-- /.hero__content -->

		<figure class="hero__img">
			<img src="assets/images/bg55.png" alt="Background">
		</figure><!-- /.hero__img -->
	</section><!-- /.hero -->

	<section class="map">
		<div class="shell">
			<div class="mapbox" id='map'></div>

		</div><!-- /.shell -->
	</section><!-- /.map -->

	<script>
    // The value for 'accessToken' begins with 'pk...'
		mapboxgl.accessToken = 'pk.eyJ1Ijoia3JpczE2NDk4OTgiLCJhIjoiY2xramtvMXRvMDJybzNkbnNqN21rZWx1NyJ9.eTMrVLAIxRfU522o-XWT2g'; 
		const map = new mapboxgl.Map({
			container: 'map',
			style: 'mapbox://styles/kris1649898/clkjm0btb00d001qpfw256ah4', 
			center: [25.784,42.367],
			zoom: 6.0
		});

    // Code from the next step will go here.
		map.on('click', (event) => {
  // If the user clicked on one of your markers, get its information.
			const features = map.queryRenderedFeatures(event.point, {
    layers: ['chicago-parks'] // replace with your layer name
		});
			if (!features.length) {
				return;
			}
			const feature = features[0];


		});
	</script>
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

	<script type="text/javascript" src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>