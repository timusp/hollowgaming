<!DOCTYPE>  
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		
		.col-md-3 {
		 	border: 2px solid black;
			padding:10px;
			background-color: black;
		}
		.col-md-3:hover {
			border: 2px solid #5DBCD2;
			padding:10px;
			background-color: #5DBCD2;
		}

	</style>
</head>

<body style="background: black">  
	<?php
	    $files = scandir('gallary/');
	    //$newfile='hello';
	    // get current directory path
		$files = array();
		$files = glob('gallary/*.jpg');
		// sort files by last modified date
		usort($files, function($x, $y) {
		    return filemtime($x) < filemtime($y);
		});
		$i=0;
		echo "<div class=\"row-centered\">";
	    foreach($files as $file) {
	    	//echo "$i";
	    	$i++;

	        if($file !== "." && $file !== "..") {
				$file=str_replace("gallary/", "", $file);
	    		if($file[0]=='#')
	    		{
	    			$newfile=str_replace("#", "%23", $file);
	    		}
	    		else{
	    			$newfile=$file;
	    		}
	    		if($i/4==0){
	    			echo "</div>";
	    			echo "<div class=\"row-centered\">";

	    		}

	    		echo "<div class=\"col-md-3\" style=\"padding:10px \">";
	        	echo "<a href=gallary/$newfile>";
	            echo "<img src=gallary/$newfile width=100% class=\"img-thumbnail\"/>";
	            echo "</a>";
	            echo "</div>";


	        }
	    }
	    echo "</div>";
	?>  
</body>  
</html> 