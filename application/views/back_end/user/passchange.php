<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-key"></i> Change Password
        </h1>
    </section>

    <section class="content">
        <div class="container">
            <form class="cmxform" id="commentForm" method="get" action=""><fieldset>
                <div class="row">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Old Password</label>
                                    <input type="password" maxlength="12" class="form-control" id="oldpassword" name="oldpassword" placeholder="Enter Old Password.!" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Enter New Password</label>
                                    <input type="password" class="form-control" maxlength="12" id="password" name="password" placeholder="Enter New Password.!" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Retype Password</label>
                                    <input type="password" class="form-control" maxlength="12" id="retype_password" name="retype_password" placeholder="Enter Retype Password.!" required>
                                </div>
                            </div>
                            <br>
                            <div class="row" >
                                <div class="form-group">
                                    <button class="btn btn-success" onclick="change_user_pass()" >Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></fieldset>
            </form>
        </div>
    </section>
</div>

<script type="text/javascript">
    function change_user_pass() {
        $("#commentForm").validate();
        if ($('#oldpassword').val() != '' && $('#password').val() != '' && $('#password').val() == $('#retype_password').val()) {
            var exotel_call = new FormData();
            exotel_call.append("old_password", $('#oldpassword').val());
            exotel_call.append("new_password", $('#password').val());
            exotel_call.append("user_id", <?php echo $this->session->userdata('idlogins'); ?>);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url("user/change_user_password"); ?>",
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                data: exotel_call,
                crossDomain: true,
                success: function(res) {
                    if (res.status) {
                        swal({
                            title: "Success",
                            text: "Password Change Successfully.!",
                            icon: "success",
                        },function(){
                            location.reload();
                        });
                    } else {
                        swal({
                            title: "Failed",
                            text: "Password change failed.!",
                            icon: "error",
                        })
                    }
                },
                error: function(error, textStatus, errorThrown) {
                    alert("Connection Error or server can't process request.!");
                }
            });
        } else {
            if($('#oldpassword').val() != '' && $('#password').val() != ''){
                swal({
                    title: "Warning",
                    text: "Password and Retype-Password Not matched!",
                    icon: "warning",
                });
            }
        }
    }
</script>