
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
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    
    $query = $db->query("SELECT * FROM appointment WHERE patient_email = '$email'");
    if($query->num_rows == 0) {
        echo '<tr><td colspan=4 style="text-align:center">No record found.</td></tr>';
    } 
    foreach($query as $row) :
    $id = $row['id'];
    $myDate = new DateTime($row['date']);
    $date = $myDate->format('D, M d, Y');
    $patient_name = $row['patient_name'];
    $patient_email = $row['patient_email'];
    $appointment = $date. ' '.date('g:i A', strtotime($row['chosentime']));
    if($row['status'] == 0) {
        $status = '<label class="label label-warning">Pending</label>';
    } elseif($row['status'] == 1) {
        $status = '<label class="label label-primary">Approved</label>';
    } elseif($row['status'] == 2) {
        $status = '<label class="label label-primary">Declined</label>';
    }

?>

        <input type="hidden" id="hiddenid" value="<?php echo $id?>">
        <tr>
            <td><?php echo $patient_name . count($query)?></td>
            <td><?php echo $patient_email?></td>
            <td><?php echo $status?></td>
        </tr>
    


    <?php  endforeach;  ?>
    </tbody>
</table>

<script>  
      
$(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
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