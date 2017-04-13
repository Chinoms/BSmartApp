<?php
/* require the user as the parameter */
$token = hash('sha256', '!bhub23!');
//echo $token;
$checkToken = $token;
//if(isset($_GET['user']) && intval($_GET['user'] )) {
$token=$_GET['token'];
if ($checkToken == $token){
//echo "Cool!";

	/* soak in the passed variable or set our own */
	//$number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 is the default
	$cat = $_GET['bookCat'];
	$format =  'json' ? 'json' : 'json'; //xml is the default
	//$user_id = intval($_GET['user']); //no default

	/* connect to the db */
	/**********
	$findPub=$_POST['findPub'];
	$query="SELECT * FROM books WHERE bookName LIKE '%$findPub%' ";
	$result=mysql_query($query);
	while($record=mysql_fetch_array($result))
	
	*************/
	
	$findPub=$GET['findPub'];
	$link = mysql_connect('localhost','obiaalrc_dbadmin','db@dm!n1234') or die('Cannot connect to the DB');
	mysql_select_db('obiaalrc_bhs',$link) or die('Cannot select the DB');
	$x=$_GET['start'];
	$y=$_GET['end'];
	/* grab the posts from the db */
	$query = "SELECT * FROM books WHERE bookName LIKE '%$findPub%' ORDER BY bookName LIMIT $x, $y ";
	$result = mysql_query($query,$link) or die('Errant query:  '.$query. mysql_error());

	/* create one master array of the records */
	$posts = array();
	if(mysql_num_rows($result)) {
		while($post = mysql_fetch_assoc($result)) {
			$posts[] = array('post'=>$post);
		}
	}

	/* output in necessary format */
	if($format == 'json') {
		header('Content-type: application/json');
		echo json_encode(array('posts'=>$posts));
	}
	else {
		header('Content-type: text/xml');
		echo '<posts>';
		foreach($posts as $index => $post) {
			if(is_array($post)) {
				foreach($post as $key => $value) {
					echo '<',$key,'>';
					if(is_array($value)) {
						foreach($value as $tag => $val) {
							echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
						}
					}
					echo '</',$key,'>';
				}
			}
		}
		echo '</posts>';
	}

	/* disconnect from the db */
	//@mysql_close($link);
}
else{
exit('Invalid token!');
}
/**}**/


?>