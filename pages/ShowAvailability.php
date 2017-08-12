<?php 
session_start();
include '../cn.php';?>

 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Day</th>
        <th>From</th>
        <th>To</th>
        <th>Action</th>
    </tr>
    </thead>
        <tbody>
    <?php 
    
    $query = $db->query("SELECT * FROM availability WHERE email = '".$_SESSION['session_email']."'");
    $check = $query->num_rows;
    if($check == 0) {
        echo '<tr><td colspan=4 style="text-align:center">No record found</td></tr>';
    } else {
    foreach($query as $row) :?>
    <?php 
    $myDate = new DateTime($row['day']);
    $formattedDate = $myDate->format('D, M d, Y');
   ?>
        <tr>
            <td><?php echo $formattedDate?></td>
            <td><?php echo $row['time_from']?></td>
            <td><?php echo $row['time_to']?></td>
            <td><button class="btn btn-primary" onclick="DeleteAvailability('<?php echo$row['id']?>')">Delete</button></td>
        </tr>
    <?php endforeach; }  ?>
        </tbody>
</table>