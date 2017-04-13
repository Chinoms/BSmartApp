<?php
/* require the user as the parameter */
if(isset($_GET['user']) && intval($_GET['user'])) {

	/* soak in the passed variable or set our own */
	//$number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 is the default
	$format =  'json' ? 'json' : 'json'; //xml is the default
	$user_id = intval($_GET['user']); //no default

	/* connect to the db */
	$link = mysql_connect('localhost','chinomsc_dbadmin','db@dm!n1234') or die('Cannot connect to the DB');
	mysql_select_db('chinomsc_bhs',$link) or die('Cannot select the DB');


	/* grab the posts from the db */
	$query = "SELECT *  FROM books WHERE bookCat = 'Love and Romance'";
	$result = mysql_query($query,$link) or die('Errant query:  '.$query);

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
	@mysql_close($link);
}

$token = "8FE6F7E05D673F6BCE088C6533E82B49E9C458407D0FCBDE340B6ECE568EEE57";
?>