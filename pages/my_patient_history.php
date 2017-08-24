<?php 
session_start();
ob_start();
$email = $_SESSION['session_email'];
include '../cn.php';
?>
 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Doctor</th>
        <th>Reference Code</th>
        <th>Findings</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    
    
    $query = $db->query("SELECT * FROM appointment WHERE patient_email = '$email' AND status != 5");
    if($query->num_rows == 0) {
        echo '<tr><td colspan=4 style="text-align:center">No record found.</td></tr>';
    } 
    foreach($query as $row) :
    $id = $row['id'];
    $myDate = new DateTime($row['date']);
    $date = $myDate->format('D, M d, Y');
    $reference_code = $row['reference_code'];
    $email = $row['email'];
    $appointment = $date. ' '.date('g:i A', strtotime($row['chosentime']));
    if($row['status'] == 0) {
        $status = '<label class="label label-warning">Pending</label><a onclick="cancel_appointment('.$id.')" class="btn">Cancel</a>';
    } elseif($row['status'] == 1) {
        $status = '<label class="label label-primary">Approved</label>';
    } elseif($row['status'] == 2) {
        $status = '<label class="label label-primary">Declined</label>';
    }
    
    $q = $db->query("SELECT * FROM doctor WHERE EMAIL = '$email'");
    $r = $q->fetch_object();
    $doctor_name = "Dr. ".$r->FN.' '.$r->MN. ' '.$r->LN. ' '.$r->SN;
    
    $fin = $db->query("SELECT * FROM doctor_upload WHERE reference_code = '$reference_code'");
    $qfin = $fin->fetch_object();
    $findings = @$qfin->findings;
    

?>

        <tr>
            <td><?php echo $doctor_name?></td>
            <td><?php echo $reference_code?></td>
            <td><?php echo $findings?></td>
            <td><?php echo $date?></td>
            <td><?php echo $status?></td>
        </tr>
    


    <?php  endforeach;  ?>
    </tbody>
</table>


<div id="cancel" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cancel Appointment</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="hidden_id">
        <p> Are you sure you want to cancel this appointment?
      </div>
      <div class="modal-footer">
        <a class="btn" data-dismiss="modal">No</a>
        <button type="button" id="confirm_cancellation" class="btn btn-primary">Yes</button>
      </div>
    </div>

  </div>
</div>


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

      function cancel_appointment(id) {
        $('#cancel').modal('show');
        $('#cancel').find('#hidden_id').val(id);
      }

      function confirm_cancellation() {
        $('#confirm_cancellation').click(function(e){
            e.preventDefault();
            var id = $('#hidden_id').val();
            $.ajax({
                type: 'POST',
                url : 'pages/cancellation.php',
                data: { action : 'cancellation', id : id },
                dataType: 'json',
                success:function(response) {
                  if(response.success == true){
                    alert('Cancellation message here');
                    location.href="http://localhost/laggers/my_history.php";
                  }
                }
            })
        })
      }
      confirm_cancellation()
</script>