<?php 
	include "config.php";
	// REGISTER USER
	

	  
	    $_textEditingController = mysqli_real_escape_string($conn, $_POST['_textEditingController']);
	    $_textTranslated = mysqli_real_escape_string($conn, $_POST['_textTranslated']);
	    
	  
	 
	        $query = "INSERT INTO translator (_textEditingController,_textTranslated)
	  			  VALUES('$_textEditingController', '$_textTranslated')";
	    $results = mysqli_query($conn, $query);
	    if($results>0)
	    {
	        echo "user added successfully";
	    }
	    
	    
	

	

	    
	    
	    ?>
