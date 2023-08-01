<?php

// Category products in menu //


include "../../conn.php";

if(isset($_POST["issend"])){
	$category = $_POST["category"];
	$query = "SELECT   id ,nameImage ,name ,descr , price , quantity FROM products WHERE category = '$category'";;

	$statement = $conn->prepare($query);

	if($statement->execute())
	{
		$result = $statement->get_result();
		$data = $result->fetch_all(MYSQLI_ASSOC);
		$output = '';
		foreach($result as $row)
		{
			echo '
			<div class="products-cart">
				<figure class="products-image">
					<img src="assets/images/'.$row["nameImage"].'.png" class="img-responsive" />
				</figure>
				
				<h4 class="text-dark">'.$row["name"].'</h4>
				
				<p class="p1">'.$row["descr"].'</p>
				
				<h4 class="text-secondary">'.$row["price"].'$</h4>
				
				<input type="text" name="quantity" id="quantity'.$row["id"].'" class="form-control" value="1" />

				<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
				
				<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
				
				<input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-dark form-control add_to_cart" value="Add to Cart" />
			</div>';
		}
	} else {
		echo "0 results";
	}
	$conn->close();

}

?>