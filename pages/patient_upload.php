
<?php 
session_start();
$email = $_SESSION['session_email'];
include '../cn.php';
?>
 <table style="width:100%" id="datatable-buttons" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Name</th>
        <th>Date</th>
        <th>Purpose</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    
    $query = $db->query("SELECT * FROM appointment WHERE email = '$email' AND status != 0");
    if($query->num_rows == 0) {
        echo '<tr><td colspan=4 style="text-align:center">No record found.</td></tr>';
    } 
    foreach($query as $row) :
    $id = $row['id'];
    $myDate = new DateTime($row['date']);
    $date = $myDate->format('D, M d, Y');
    $patient_name = $row['patient_name'];
    $patient_email = $row['patient_email'];
    $purpose = $row['purpose'];
    $appointment = $date. ' '.date('g:i A', strtotime($row['chosentime']));
    $status = $row['status'] == 1 ? '<label class="label label-primary">Approved</label>' : '<label class="label label-danger">Declined</label>';

    
    
?>

        <tr>
            <td><?php echo $patient_name?></td>
            <td><?php echo $date?></td>
            <td><?php echo $purpose?></td>
            <td><?php echo $status?></td>
            <td><a href="uploadfindings.php?id=<?php echo $id?>" class="btn btn-primary">Upload Findings</a></td>
        </tr>
    


    <?php  endforeach;  ?>
    </tbody>
</table>

<script>


$(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();


        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });

      
      </script>