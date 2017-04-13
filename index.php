<html>
<head>
<link rel="stylesheet" type="text/CSS" href="CSS/style.css" />
<title>
Upload Books
</title>
</head>
<body>
<div id="logodiv">
<center>
<br>
<img src="images/BHSngLOGO1.png">
</center>
</div>

<div id="navdiv">
</div>
<div id="titlediv">

<center><font color="white"><b>Upload Books</b></font></center>


</div>


<div id="formdiv">
<form name="uploadBooks" action="saveUploads.php" method="POST" enctype="multipart/form-data">
<br>
<br>

<span class="label">Book Name</span>
<br />
<input type="text" name="bookName" placeholder="Enter book title here" />

<br />
<br />
<span class="label">Book Category</span>
<br />

<select id="select" name="bookcat" required>
<option value="nullVal">---Select Book Category---</option>
<option value="001"> Accounting</option>
<option value="002">Career and Study Advice </option>
<option value="003"> Economics and Finance</option>
<option value="004">Engineering</option>
<option value="005"> IT and Programming</option>
<option value="006"> Law</option>
<option value="007"> Management and Strategy</option>
<option value="008"> Marketing</option>
<option value="009"> Mathematics and Statistics</option>
<option value="010"> Natural Sciences</option>
<option value="011"> Social Sciences</option>
<option value="012"> Love</option>
</select>
<br>
<br>

<span class="label">Date of Publication:</span>
<br>

<input type="text" name="dateofPub" placeholder="Date Published eg.: 25/03/1654">
<br>
<br>
<span class="label">Author:</span>
<br>
<input type="text" name="author" placeholder="Author's name" required>
<br>
<br>
<span class="label">Description:</span>
<br>
<input type="text"  name="des" placeholder="A brief description of the book" required>
<br>
<br>
<span class="label">Select book:</span>
<br />
<input type="file" name="book" required title="Click to select book." >
<br />
<br />
<span class="label">Select book cover:</span>
<br />
<input type="file" name="bookCover" required title="Click to select book cover." />
<br />
<br />
<button class=".hvr-bounce-to-right" style="width:200px; height:70px; background-color:white; margin:0 auto;
border-radius:10px; color:#132c47; font-family:arial; font-size:20px; cursor:pointer;" name="submit"><strong>Submit</strong></button>


</form>
</div>












</body>
</html>