<?php

include "../../conn.php";

if(isset($_POST["issend"])){
	$category = $_POST["category"];
$sql = "SELECT   nameImage ,name ,descr , price , quantity FROM products WHERE category = '$category'";
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

<p class='p2'>".$row["price"]."</p>

</div>";
}
} else {
echo "0 results";
}
$conn->close();

}
	

?>