<div class="content-wrapper">
    <style>
        .images {
            display: inline;
            margin: 0px;
            padding: 0px;
            vertical-align:middle;
            width:200px;
        }
        #content {
            display: block;
            margin: 0px;
            padding: 0px;
            position: relative;
            height: auto;
            max-width: auto;
            overflow-y: hidden;
            overflow-x:auto;
            word-wrap:normal;
            white-space:nowrap;
        }
        .border {
            border: solid 2px black;
            margin-right: 10px;
        }
    </style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="display: inline-block;">
            <i class="fa fa-graduation-cap"></i> Student Details #<?php echo $studentinfo->idstudent_details_id; ?>
        </h1>
        <a style="display: inline-block;float: right;" class="btn btn-sm btn-primary" href="<?php echo base_url() . 'student/student_list' ?>" title="Back to Student List"><i class="fa fa-backward"></i></a>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="card card-primary card-outline card-tabs">
                            <div class="card-header p-0 pt-1 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Student Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Fingerprints</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                        <br>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fname">Student Name:&nbsp;<span class="error">*</span></label>
                                                        <input type="text" class="form-control required" id="fname" placeholder="Enter Full Name" name="fname" value="<?php echo $studentinfo->student_name; ?>">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Id:</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo $studentinfo->student_code; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="container hide">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fname">Mobile:&nbsp;<span class="error">*</span></label>
                                                        <input type="text" class="form-control required" id="fname" placeholder="Enter Full Name" name="fname" value="<?php echo $studentinfo->student_mobile; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fname">Address:&nbsp;<span class="error">*</span></label>
                                                        <input type="text" class="form-control required" id="fname" placeholder="Enter Full Name" name="fname" value="<?php echo $studentinfo->student_address; ?>">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                        <br>
                                        <div class="container">
                                            <div id="content">
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img src="https://thumbs.dreamstime.com/z/real-fingerprint-25787622.jpg" class="images" />
                                                    </div>
                                                </div>
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img src="https://thumbs.dreamstime.com/z/real-fingerprint-25787622.jpg" class="images" />
                                                    </div>
                                                </div>
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img src="https://thumbs.dreamstime.com/z/real-fingerprint-25787622.jpg" class="images" />
                                                    </div>
                                                </div>
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img src="https://thumbs.dreamstime.com/z/real-fingerprint-25787622.jpg" class="images" />
                                                    </div>
                                                </div>
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img src="https://thumbs.dreamstime.com/z/real-fingerprint-25787622.jpg" class="images" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>