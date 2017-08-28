<?php 
session_start();
$email = $_SESSION['session_email'];
include '../cn.php';
?>
 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Patient Name</th>
        <th>Patient Email</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    
    $query = $db->query("SELECT * FROM appointment WHERE email = '$email' AND status = 0");
    if($query->num_rows == 0) {
        echo '<tr><td colspan=4 style="text-align:center">No record found.</td></tr>';
    } 
    foreach($query as $row) :
    $id = $row['id'];
    $myDate = new DateTime($row['date']);
    $date = $myDate->format('D, M d, Y');
    $purpose = $row['purpose'];
    $patient_name = $row['patient_name'];
    $patient_email = $row['patient_email'];
    $reference_code = $row['reference_code'];
    $appointment = $date. ' '.date('g:i A', strtotime($row['chosentime']));

    $show = $row['status'] == 5 ? 'cancelmodal' : 'showmodal';
    $modify = $row['status'] == 5 ? 'Confirm Cancellation' : 'Modify';
    $class = $row['status'] == 5 ? 'danger' : 'primary';
    
    
?>

        <input type="hidden" id="hiddenid" value="<?php echo $id?>">
        <tr>
            <td><?php echo $patient_name?></td>
            <td><?php echo $patient_email?></td>
            <td><?php echo $appointment?></td>
            <td><button class="btn btn-<?php echo $class?>" onclick="<?php echo $show?>('<?php echo $id?>','<?php echo $patient_name?>','<?php echo $patient_email?>','<?php echo $appointment?>','<?php echo $purpose?>','<?php echo $reference_code?>')"><?php echo $modify?></button></td>
        </tr>
    


    <?php  endforeach;  ?>
    </tbody>
</table>

