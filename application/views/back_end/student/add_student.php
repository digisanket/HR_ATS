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
            <i class="fa fa-plus-circle"></i>&nbsp; Add Student
        </h1>
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
                                        <a class="nav-link show active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Student Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Fingerprints</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">

                                    <div class="tab-pane fade active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                        <br>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fname">Student Name:&nbsp;<span class="error">*</span></label>
                                                        <input type="text" class="form-control required" id="fname" placeholder="Enter Full Name" name="name">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Id:</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter Id" name="id">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                        <br>
                                        <div class="container">
                                            <div id="content">
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img id="imag1" src="<?php echo base_url("/assets/biometrics.png"); ?>" class="images" />
                                                    </div>
                                                    <br>
                                                    <button type="button" class="btn btn-primary" onclick="return uploadimage(1);"><i class="fa fa-plus"></i> Upload Here</button>
                                                </div>
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img id="imag2" src="<?php echo base_url("/assets/biometrics.png"); ?>" class="images" />
                                                    </div>
                                                    <br>
                                                    <button type="button" class="btn btn-primary" onclick="uploadimage(2);"><i class="fa fa-plus"></i> Upload Here</button>
                                                </div>
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img id="imag3" src="<?php echo base_url("/assets/biometrics.png"); ?>" class="images" />
                                                    </div>
                                                    <br>
                                                    <button type="button" class="btn btn-primary" onclick="uploadimage(3);"><i class="fa fa-plus"></i> Upload Here</button>
                                                </div>
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img id="imag4" src="<?php echo base_url("/assets/biometrics.png"); ?>" class="images" />
                                                    </div>
                                                    <br>
                                                    <button type="button" class="btn btn-primary" onclick="uploadimage(4);"><i class="fa fa-plus"></i> Upload Here</button>
                                                </div>
                                                <div class="text-center" style="display: inline-block;">
                                                    <div class="card border">
                                                        <img id="imag5" src="<?php echo base_url("/assets/biometrics.png"); ?>" class="images" />
                                                    </div>
                                                    <br>
                                                    <button type="button" class="btn btn-primary" onclick="uploadimage(5);"><i class="fa fa-plus"></i> Upload Here</button>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="footer">
                                            <div class="text-center" style="display: inline-block;">
                                                <div class="card">
                                                    <button class="btn btn-success" onclick="save();">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
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

<script src="<?php echo base_url(); ?>assets/mantra/jquery-1.8.2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/mantra/mfs100-9.0.2.6.js" type="text/javascript"></script>
<script>
    function uploadimage(id){
        Capture();
    }

    function Capture() {
        var quality = 60; //(1 to 100) (recommanded minimum 55)
        var timeout = 10; // seconds (minimum=10(recommanded), maximum=60, unlimited=0 )
        try {
            var res = CaptureFinger(quality, timeout);
            if (res.httpStaus) {
                document.getElementById('txtStatus').value = "ErrorCode: " + res.data.ErrorCode + " ErrorDescription: " + res.data.ErrorDescription;

                if (res.data.ErrorCode == "0") {
                    document.getElementById('imag1').src = "data:image/bmp;base64," + res.data.BitmapData;
                    console.log("Quality: " + res.data.Quality + " Nfiq: " + res.data.Nfiq + " W(in): " + res.data.InWidth + " H(in): " + res.data.InHeight + " area(in): " + res.data.InArea + " Resolution: " + res.data.Resolution + " GrayScale: " + res.data.GrayScale + " Bpp: " + res.data.Bpp + " WSQCompressRatio: " + res.data.WSQCompressRatio + " WSQInfo: " + res.data.WSQInfo);
                }
            }
            else {
                alert(res.err);
            }
        }
        catch (e) {
            alert(e);
        }
        return false;
    }
</script>