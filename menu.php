<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<?php

include "conn.php";

?>


<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" type="text/css" media="all" />
	<title>Costra</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logoup1.png" />
	<link rel="stylesheet" href="assets/css/menu.css" />
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
				<a href="index.php" class="logo">
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
							<a href="#">MENU</a>
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
						<a id='cart-popover' class='btn'><i class='fa-solid fa-cart-shopping'></i></a>
									<span class='badge'></span>
									<span class='total_price'>$ 0.00</span>

									<div id='popover_content_wrapper' style='display: none'>
				<span id='cart_details'></span>
				<div align='right'>
					<a href='order_process.php' class='btn btn-primary' id='check_out_cart'>
						<span class='glyphicon glyphicon-shopping-cart'></span> Check out
					</a>
					<a href='#' class='btn btn-default' id='clear_cart'>
						<span class='glyphicon glyphicon-trash'></span> Clear
					</a>
				</div>
			</div>";
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
				MENU
			</h1><!-- /.hero__h1 -->
		</div><!-- /.hero__content -->

		<figure class="hero__img">
			<img src="assets/images/menulogo.png" alt="Background">
		</figure><!-- /.hero__img -->
	</section><!-- /.hero -->

	<!-- About us  -->

	
	<section class="menu">
		<div class="menu__content">
			<h1>OUR DELICIOUS OFFER</h1>

			<figure class="menu-img">
				<img src="assets/images/smallLogo.png" alt="">
			</figure><!-- /.menu-img -->
		</div><!-- /.menu__content -->
		<div class="card-size">
			<div class="card-group">
				<div class="card" data-category="sp">
					<div class="card-body" >
						<figure class="card-bg">
							<img src="assets/images/bg22.png" alt="">
						</figure>

						<p>Special offers</p>
					</div>
				</div>

				<div class="card" data-category="ds">
					<div class="card-body">
						<figure class="card-bg">
							<img src="assets/images/desserts.png" alt="">
						</figure>

						<p>Desserts and coffee</p>
					</div>
				</div>

				<div class="card" data-category="sn">
					<div class="card-body">
						<figure class="card-bg">
							<img src="assets/images/snacks.png" alt="">                
						</figure>

						<p>Snacks</p>
					</div>
				</div>

				<div class="card" data-category="cm">
					<div class="card-body">
						<figure class="card-bg">
							<img src="assets/images/coffeemachine1.png" alt="">           
						</figure>

						<p>Coffee machine</p>
					</div>
				</div>
			</div>
		</div><!-- /.card-size -->
	</section><!-- /.menu -->

    <div class="line_menu"></div>

<section class="products">
	<h1 class="text1">All Products</h1>
	<div class="shell_menu">
		<div class="products_body">
			<?php
				
				$sql = "SELECT   nameImage ,name ,descr , price , category , quantity FROM products";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) {
				    echo "
				    <div class='products-cart'>
					
					<figure class='products-image'>
						
						<img src='assets/images/".$row["nameImage"].".png' alt='product1'>

						<a href='#' name='add_to_cart' class='btn'>Buy now!</a>
					</figure>

				<h1>".$row["name"]."</h1>

				<p class='p1'>".$row["descr"]."</p>

				<input type='number' name='quantity' id='quantity".$row["quantity"]."' class='form-control' value='1'/>

				<p class='p2'>".$row["price"]."$</p>

			    </div>";
				  }
				} else {
				  echo "0 results";
				}
				$conn->close();

			?>
			</div><!-- /.products_body -->
		</div><!-- /.shell_menu -->
</section><!-- /.products -->

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

<script>  
$(document).ready(function(){

	load_product();

	load_cart_data();

	function load_product()
	{
		$.ajax({
			url:"menu.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		})
	}

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		})
	}

	$('#cart-popover').popover({
		html : true,
		container : 'body',
		content:function(){
			return $('#popover_content_wrapper').html();
		}
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr('id');
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = 'add';
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("Item has been Added into Cart");
				}
			})
		}
		else
		{
			alert("Please Enter Number of Quantity");
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr('id');
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function(data)
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item has been removed from Cart");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		})
	});
    
});

</script>
    
    <script type="text/javascript">

   		$(".card").click(function(){
   			let category = $(this).data("category");
   			console.log(category);

    		$.ajax({
					type: "POST",
					url: "assets/php/getCategoryProducts.php",
					data: {
						category: category,
						issend: 1
					},
					cache: false,
					success: function(response) {
						if(category == "sp"){
							$(".text1").text("Special offers!");
						}else if(category == "ds"){
							$(".text1").text("Desserts and coffee");
						}else if(category == "sn"){
							$(".text1").text("Snacks");
						}else if(category == "cm"){
							$(".text1").text("Coffee machine");
						}
						$(".products_body").empty();
						$(".products_body").append(response);
					}
				});
         });

    </script>

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

	<script type="text/javascript" src="assets/js/about.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>