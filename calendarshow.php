<div id='calendar' class="calendar"></div>
<div id='datepicker'></div>

<div class="modal fade" tabindex="-1" role="dialog" data-toggle="modal" data-target="#form-content">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Schedule</h4>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <input type="hidden" name="hiddenid" id="hiddenid">
                    <input type="hidden" name="doctor_email" id="doctor_email">
                    <input type="hidden" name="day" id="day">
                    <div class="form-group">
                        <label for="">Name</label>
                        <p class="form-control" id="title"></p>
                    </div>

                    <div class="form-group">
                        <label for="">Available From - To</label>
                        <p class="form-control" id="from"></p>
                    </div>

                    <div class="form-group">
                        <label for="">Specialization</label>
                        <p class="form-control" id="specialization"></p>
                    </div>

                    <div class="form-group">
                        <label for="">Choose Time</label>
                        <input type="text" class="form-control timepicker" id="chosentime">
                    </div>

                    <div class="form-group">
                        <label for="">Purpose</label>
                        <input type="text" class="form-control" id="purpose">
                    </div>

                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit">Submit</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
// end ajax
$('#submit').on('click',function(){
    $('#submit').attr('disabled',false);
    var doctor_email = $('#doctor_email').val();
    var hiddenid = $('#hiddenid').val();
    var day = $('#day').val();
    var chosentime = $('#chosentime').val();
    var purpose = $('#purpose').val();
    if(chosentime == ''){
        alert('Please choose your time');
    } else if(purpose == '') {
        alert('What\'s your purpose?');
    } else {
        $.ajax({
            type: 'POST',
            url : 'function_appointment.php',
            cache:false,
            dataType: 'json',
            data: { 
                action : 'submit', hiddenid : hiddenid, 
                day : day, doctor_email : doctor_email,
                chosentime : chosentime, purpose : purpose 
            },
            success:function(response){
                if(response.success == true) {
                    alert(response.message)
                } else {
                    alert(response.message)
                }
            }
        });
        $('.modal').modal('hide');
    }
});
$('#close').click(function(){
    $('.modal').modal('hide');
    $('.timepicker').timepicker('remove');
});
    </script>