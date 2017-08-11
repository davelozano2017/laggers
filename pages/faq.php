<!DOCTYPE html>
<html lang="en">

	<head>
   <style>
   	.panel{
	 
-webkit-box-shadow: 0px 5px 8px 0px rgba(50, 50, 50, 0.46);
	-moz-box-shadow:    0px 5px 8px 0px rgba(50, 50, 50, 0.46);
	box-shadow:         0px 5px 8px 0px rgba(50, 50, 50, 0.46);
  border-radius: 5px;
    border:solid lightblue 2px;

	
}
   </style>
   <link rel="stylesheet" type="text/css" href="includes/comment/styles.css" />

	</head>
	<?php if(isset($_SESSION['session_i'])){;?>	
	
	

<?php
error_reporting(E_ALL^E_NOTICE);

include "includes/comment/comment.class.php";
$comments = array();
$q = "SELECT * FROM comments where type <> '' and url = '' ORDER BY id DESC limit 0,80";
$result  = $pdo->query($q);
$results = $result->fetchAll();
foreach( $results as $row ) {
	$comments[] = new Comment($row);
}


?>
<body>

   <script type="text/javascript" src="includes/comment/script.js"></script>







<div class="panel panel-primary">
				 <div class="panel_title">Contact Us</div>
				<div  class="panel-body" >

			<div id="main">

			<div id="addCommentContainer">
				<h1>Speak Out!</h1>
				<form id="addCommentForm" method="post" action="includes/comment/submit.php">
					<div>
						<label for="name">Your Name</label>
						<input type="text" name="name" id="name"  value="<?php echo $_SESSION['session_iname'];?>" class="form-control" style="width:350px;" readonly />
						
						<label for="email">Your Email</label>
						<input type="text" name="email" id="email"  value="<?php echo $_SESSION['session_email'];?>" class="form-control" style="width:350px;" readonly />
						
						<label for="body">Your Comment/Question</label>
						<textarea name="body" id="body" cols="200" rows="50" style="width:100%;height:100px;" class="form-control"></textarea>
						
						<input type="submit" id="submit" value="Submit"  class="btn btn-sm btn-warning"/>
					</div>
				</form>
			</div>
			
			<?php
			foreach($comments as $c){
				echo $c->markup();
			}
			?>

		</div>	
	</div>
	</div>






 </body>
 
<?php }else{

echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
 } ?>
 </html>