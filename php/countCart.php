<?php 
	if(isset($_SESSION["cart"])){
		
		$cart = $_SESSION["cart"];

		$count = 0;
		foreach($_SESSION["cart"] as $product){
			$count+= count($product);
		}

		$count/=6;

	}else{
		$count = 0;
	}
