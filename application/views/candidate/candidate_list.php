<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-list"></i> List of Candidate
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
<!--                    <a class="btn btn-primary" href="--><?php //echo base_url(); ?><!--student/add_student"><i class="fa fa-plus"></i> Add Students</a>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box" style="padding: 20px;">
                        <div class="card">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($studentrecords)) {
                                        $i = 1;
                                        foreach ($studentrecords as $record) {
                                    ?>

                                            <tr>
                                                <td><?php echo $i; ?>.</td>
                                                <td><?php echo $record->student_code; ?></td>
                                                <td><?php echo $record->student_name; ?></td>
                                                <td><?php echo $record->cd; ?></td>
                                                <td class="text-center">
<!--                                                    <a href="--><?php //echo base_url()."student/customerfingerdata/$record->idstudent_details_id"; ?><!--" class="btn btn-primary ml-1"><i class='fa fa-info-circle' aria-hidden='true'></i></a>-->
                                                    <!-- <a href="<?php //echo base_url()."student/view_student/$record->idstudent_details_id"; ?>" class="btn btn-primary ml-1"><i class='fa fa-info-circle' aria-hidden='true'></i></a> -->
<!--                                                    <button onclick="delete_data('--><?php //echo $record->idstudent_details_id; ?>//','<?php //echo $record->student_name; ?>//');" class="btn btn-danger ml-1"><i class='fa fa-trash' aria-hidden='true'></i></button>
                                                </td>
                                            </tr>
                                    <?php
                                            $i++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>&nbsp;
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
        $('#example1').DataTable( {
            responsive: true,
            order: [ 1, 'asc' ]
        } );

    function delete_data(id,name){
            swal({
                title: "Delete Warning",
                text: "Deleting " +name,
                icon: "warning",
                buttons: [
                    'Cancel',
                    'Confirm'
                ],
            }).then(function(isConfirm) {
                if (isConfirm) {
                    delete_ajax(id);
                }
            });
    }

    function delete_ajax(id){
            var exotel_call = new FormData();
            exotel_call.append("id", id);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url("student/deleteCustomer"); ?>",
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                data: exotel_call,
                crossDomain: true,
                success: function (res) {
                    if(res.status){
                        location.reload();
                    }else{
                        location.reload();
                    }
                },
                error: function (error, textStatus, errorThrown) {
                    alert("Connection Error or server can't process request.!");
                }
            });
    }
</script>