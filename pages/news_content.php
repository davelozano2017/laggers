
<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/css/themes/default/jquery.mobile-1.4.3.min.css">
		<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/_assets/css/jqm-demos.css">
		<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.js"></script>
		<script src="../js/jquery.mobile-1.4.3/demos/_assets/js/index.js"></script>
		<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.mobile-1.4.3.min.js"></script>

<?php
include "../cn.php";

$sth = $pdo->prepare("Select * From news where id <> '1' order by DT DESC ");
$sth->execute()
?>


	<div data-role="" data-quicklinks="false">

		<div role="main" class="ui-content jqm-content">
				<div>
					<ul data-role="listview" data-inset="true" data-divider-theme="a" data-filter="true">
						<?php
						
						$rows = $sth->fetchAll(PDO::FETCH_ASSOC);
						foreach ($rows as $row){
							
						$decoded=html_entity_decode($row['content'])
			
					
						?>
						
						<li data-role="list-divider">	<center><span style="color:black" > <?php echo $row['title'] ?></center></li>
						<li>
								<span style="float:left;width:0%;color:white;font-family:corbel"><?php echo $row['title'] ?></span>
								<span style="float:left;width:100%;font-family:corbel"><?php echo $decoded ?></span>
								<span style="width:0%;color:white;font-family:corbel"><?php echo "Date Posted/Updated: " . " " .$row['dt'] ?></span>
						
						</li>
						<li>
								
								<center><span style="width:50px;color:#888;font-family:corbel"><?php echo "Date Posted/Updated: " . " " .$row['dt'] ?></span></center>
								</hr>
						
						</li>
						
		
						
					
						<?php
						}
						?>
					</ul>
				</div>
		</div>
	</div>