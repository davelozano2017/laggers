
<?php 
session_start();
$email = $_SESSION['session_email'];
include 'cn.php';
?>
 <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Doctor Name</th>
        <th>Amount</th>
        <th>Reference Code</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    
    $query = $db->query("SELECT * FROM payment WHERE patient_email = '$email'");
    if($query->num_rows == 0) {
        echo '<tr><td colspan=4 style="text-align:center">No record found.</td></tr>';
    } 
    foreach($query as $row) :
    $doctor_name = $row['doctor_name'];
    $amount = $row['amount'];
    $reference_code = $row['reference_code'];
    $date = $row['date'];
    
?>

        <tr>
        <td><?php echo "Dr. ".$doctor_name?></td>
        <td><?php echo "&#8369;".number_format($amount,2,'.',',')?></td>
        <td><?php echo $reference_code?></td>
        <td><?php echo $date?></td>
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