<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

include "../cn.php";
include "comment.class.php";


/*
/	Select all the comments and populate the $comments array with objects
*/

$comments = array();
$result = mysql_query("SELECT * FROM comments ORDER BY id ASC");

while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}

?>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="../css/button.css" />

<div id="main">

	<div id="addCommentContainer">
		<p>Add a Comment</p>
		<form id="addCommentForm" method="post" action="">
			<div>
				<label for="name">Your Name</label>
				<input type="text" name="name" id="name" />
				
				<label for="email">Your Email</label>
				<input type="text" name="email" id="email" />
				
				<label for="url">Website (not required)</label>
				<input type="text" name="url" id="url" />
				
				<label for="body">Comment Body</label>
				<textarea name="body" id="body" cols="20" rows="5"></textarea>
				
				<input type="submit" id="submit" value="Submit" />
			</div>
		</form>
	</div>
	
	<?php
	foreach($comments as $c){
		echo $c->markup();
	}
	?>

</div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

