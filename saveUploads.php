<?php

mysql_connect('localhost','obiaalrc_dbadmin', 'db@dm!n1234');
$dbname="obiaalrc_bhs";
mysql_select_db("$dbname");

//require('../includes/dbcon.php');

//require('sessionControl.php');


/*************
Check if Submit button was actually clicked. If yes, assign the 
form fields values to variables.
**********************/
if(isset($_POST['submit'])){
    $target_dir = "_books/";
	$cover_dir = "_covers/";
	$bookName=mysql_real_escape_string($_POST['bookName']);
	$bookCat=$_POST['bookcat'];
	$dateofPub=$_POST['dateofPub'];
	$author=$_POST['author'];
	$desc=mysql_escape_string($_POST['des']);
	$oge=date("Y-m-d H:i:s");
	//$size=$_FILES['book'];
	}
/*********************
If the button was not clicked, deny access by closing script.
**********************/
else{
?>
<script> window.alert('You didnt come through the door. Please go through the right place.'); window.close() </script>
<?php
die();
}




#Playground






	$target_dir = $target_dir.str_replace(" ", "_", $_FILES['book']['name']);


 $uploadFile_type=$_FILES["book"]["type"];
 $uploadOk=1;

// Check if file already exists
if (file_exists($target_dir )) {

  // die('book not uploaded');
   ?>  <script>alert('File already exists. Rename the book and try again.');window.history.back();</script><?php
   
   die();
    $uploadOk = 0;
}

// Check file size
if ($_FILES["book"]["size"] > 1000000000) {
    //echo "Sorry, your file is too large.";
	?>  <script>alert('The file you uploaded is too large. The maximum upload size is 500KB');window.history.back();</script><?php
    $uploadOk = 0;
	die();
}

 /*** if ($uploadFile_type !="application/pdf" || $uploadFile_type !="application/x-pdf" || $uploadFile_type !="application/acrobat" || $uploadFile_type !="text/pdf"
   && $uploadFile_type !="applications/vnd.pdf" && $uploadFile_type !="text/x-pdf")
   ****/
   if ($uploadFile_type !="application/pdf"){
	 $uploadOk =0;
	?>  <script>alert('The book must be in PDF!');window.history.back();</script><?php
	die();
	  }
	  else{
	   $uploadOk = 1;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
	?>  <script>alert('Oops! Something went wrong. Please try again.');window.history.back();</script><?php
// if everything is ok, try to upload file
} 







#Playground




/**************else {
    if (move_uploaded_file($_FILES["book"]["tmp_name"], $target_dir)) {
//        echo "The file ". basename( $_FILES["book"]["name"]). " has been uploaded.";
        $success2="book uploaded successfully";
        
    } else {
	?>  <script>alert('Oops! Something went wrong. Please try again.');window.history.back();</script><?php
      // echo "Sorry, there was an error uploading your file.". $_FILES['book']['error'];
    }
}
    ******************/
	
	/**************Save everything in the database.
	
	$save="INSERT INTO symp( event, linkone, linkonetxt, linktwo, linktwotxt, linkthree, linkthreetxt, linkfour, linkfourtxt, linkfive, linkfivetxt, description, book)
	VALUES('$event', '$link1', '$link1txt', '$link2', '$link2txt', '$link3', '$link3txt', '$link4', 'link4txt', '$link5', 'link5txt', '$desc', '$target_dir')";
	$insert=mysql_query($save);
	if($insert){
	echo "Saved";
				
		}
		else{
		echo "Not saved!".mysql_error();;
		}
		******************/
	
	
	
	$cover_dir = $cover_dir.str_replace(" ", "_", $_FILES['bookCover']['name']);


 $uploadFile_type=$_FILES["bookCover"]["type"];
 $uploadOk2=1;

// Check if file already exists
if (file_exists($cover_dir )) {

  // die('book not uploaded');
   ?>  <script>alert('Book cover already exists. Rename the book and try again.');window.history.back();</script><?php
   
   die();
    $uploadOk2 = 0;
}

// Check file size
if ($_FILES["bookCover"]["size"] > 1000000) {
    //echo "Sorry, your file is too large.";
	?>  <script>alert('The cover you\'re trying to upload is too large. The maximum upload size is 100KB');window.history.back();</script><?php
    $uploadOk2 = 0;
	die();
}

  if ($uploadFile_type !="image/png" && $uploadFile_type !="image/jpg"  && $uploadFile_type !="image/jpeg"){
	 $uploadOk2 =0;
	?>  <script>alert('The book cover MUST be in either JPEG or PNG formats!');window.history.back();</script><?php
	die();
	  }
	  else{
	   $uploadOk2 = 1;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk2 == 0) {
    //echo "Sorry, your file was not uploaded.";
	?>  <script>alert('Oops! Something went wrong. Please try again.');window.history.back();</script><?php
// if everything is ok, try to upload file
} 
//End of book cover processing
//Awaiting final uploading









    if (move_uploaded_file($_FILES["bookCover"]["tmp_name"], $cover_dir)) {
        #echo "The file ". basename( $_FILES["bookCover"]["name"]). " has been uploaded.";
        echo "<h3>" . "The book cover has been successfully uploaded!<br>";
        
    } else {
	?>  <script>alert('Oops! Something went wrong. Please try again.');window.history.back();</script><?php
      // echo "Sorry, there was an error uploading the book.". $_FILES['book']['error'];
    }

#############
# For the book upload
#############
 if (move_uploaded_file($_FILES["book"]["tmp_name"], $target_dir)) {
//        echo "The file ". basename( $_FILES["book"]["name"]). " has been uploaded.";
        echo "Book uploaded successfully";
		}
		$target_dir = "http://obiakwukwo.com/" . $target_dir;
		$cover_dir = "http://obiakwukwo.com/" . $cover_dir;
		$save = "INSERT INTO books(bookName, bookCover, bookCat, bookFile, dateofPub, author, des, oge)
		Values('$bookName', '$cover_dir', '$bookCat', '$target_dir', '$dateofPub', '$author', '$desc', '$oge')";
		$savetoDB = mysql_query($save);
		if ($savetoDB){
		echo "<b>All saved!";
		}
		else{
		echo "Error: ". mysql_error();
		}
		
		
    
 ?>
 <h1>Click <a href = "http://obiakwukwo.com">HERE </a> to continue.</h>