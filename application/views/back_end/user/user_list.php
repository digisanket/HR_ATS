<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-list"></i> List Of
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <?php if (count_user() != 4) { ?>
                        <a class="btn btn-primary" onclick="service_report_upload_images();"><i class="fa fa-plus"></i>
                            Add User</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div>&nbsp;
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Mobile Number</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (!empty($user_list)) {
                                    $i = 1;
                                    foreach ($user_list as $record) {
                                        ?>

                                        <tr>
                                            <td><?php echo $i; ?>.</td>
                                            <td><?php echo $record->name; ?></td>
                                            <td><?php echo $record->mobile; ?></td>
                                            <td><?php echo $record->email; ?></td>
                                            <td><?php echo $record->password; ?></td>
                                            <td class="text-center">
                                                <button onclick="delete_data('<?php echo $record->idlogins; ?>','<?php echo $record->name; ?>');"
                                                        class="btn btn-danger ml-1"><i class='fa fa-trash'
                                                                                       aria-hidden='true'></i></button>
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
        </div>
    </section>
</div>
<div class="modal fade" id="UploadImages">
    <div class="modal-dialog modal-dialog-centered  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form class="cmxform" id="add_user" method="get" action="">
                    <fieldset>
                        <div class="form-group row">
                            <label for="warranty_card_lable" class="col-sm-2 col-form-label">Name :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control modal_comment" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="warranty_card_lable" class="col-sm-2 col-form-label">Username :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control modal_comment" name="username" id="username"
                                       placeholder="Enter Without Space" maxlength="20" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="warranty_card_lable" class="col-sm-2 col-form-label">Mobile :</label>
                            <div class="col-sm-6">
                                <input type="text" maxlength="10" pattern="d{10}" class="form-control modal_comment"
                                       name="mobile" id="mobile">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="warranty_card_lable" class="col-sm-2 col-form-label">Password :</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control modal_comment" maxlength="12" name="password" id="password"
                                       required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="warranty_card_lable" class="col-sm-2 col-form-label">Re-Type Password :</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control modal_comment" maxlength="12" name="re_password"
                                       id="re_password" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button class="btn btn-success" onclick="save_user()">Add</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function save_user() {
        $("#add_user").validate();
        if($('#password').val() != '' && $('#re_password').val() != '' && $('#password').val() == $('#re_password').val() && $('#name').val() != '' && $('#username').val() != '') {
            var exotel_call = new FormData();
            exotel_call.append("name", $('#name').val());
            exotel_call.append("username", $('#username').val());
            exotel_call.append("mobile", $('#mobile').val());
            exotel_call.append("password", $('#password').val());

            $.ajax({
                type: "POST",
                url: "<?php echo base_url("user/insert_data"); ?>",
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                data: exotel_call,
                crossDomain: true,
                success: function (res) {
                    if (res.status) {
                        swal({
                            title: "Success",
                            text: "User Created Successfully.!",
                            icon: "success",
                        },function(){
                            location.reload();
                        });
                    } else {
                        swal({
                            title: "Failed",
                            text: "User Created Un-Successfully.!",
                            icon: "error",
                        });
                    }
                },
                error: function (error, textStatus, errorThrown) {
                    alert("Connection Error or server can't process request.!");
                }
            });
        } else {
            if ($('#name').val() != '' && $('#username').val() != '' && $('#password').val() != ''){
                swal({
                    title: "Warning",
                    text: "Password and Retype-Password Not matched!",
                    icon: "warning",
                });
            }
        }
    }

    function delete_data(id, name) {
        swal({
            title: "Delete Warning",
            text: "Deleting " + name,
            icon: "warning",
            buttons: [
                'Cancel',
                'Confirm'
            ],
        }).then(function (isConfirm) {
            if (isConfirm) {
                delete_ajax(id);
            }
        });
    }

    function service_report_upload_images() {
        $('#UploadImages').modal('show');
    }

    function delete_ajax(id) {
        var exotel_call = new FormData();
        exotel_call.append("id", id);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url("user/deleteuser"); ?>",
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            data: exotel_call,
            crossDomain: true,
            success: function (res) {
                if (res.status) {
                    location.reload();
                } else {
                    location.reload();
                }
            },
            error: function (error, textStatus, errorThrown) {
                alert("Connection Error or server can't process request.!");
            }
        });
    }
</script>