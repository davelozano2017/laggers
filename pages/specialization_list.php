
<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/css/themes/default/jquery.mobile-1.4.3.min.css">
<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/_assets/css/jqm-demos.css">
<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.js"></script>
<script src="../js/jquery.mobile-1.4.3/demos/_assets/js/index.js"></script>
<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.mobile-1.4.3.min.js"></script>

<?php
include "../cn.php";

$sth = $pdo->prepare("Select * From specialization");
$sth->execute()
?>


<div data-role="" data-quicklinks="false">

<div role="main" class="ui-content jqm-content">
<div>
<ul data-role="listview" data-inset="true" data-divider-theme="a" data-filter="true">
<?php

$rows = $sth->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row){




?>

<li>
<span style="float:left;width:100%;font-family:corbel"><b></b><a onlick="edit"><?php echo $row['specialization']?></a></span>
</li>
<?php
}
?>
</ul>


</div>
</div>