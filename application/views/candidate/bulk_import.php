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
            <i class="fa fa-plus-circle"></i>&nbsp;Upload Candidate List
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <?php //if(){ ?>
                        <div class="container">
                            <form id="basic-form" method="post" action="<?php echo base_url().'/candidate/bulk_import'; ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="form-label">Upload Invoice Copy</label>
                                        <input type="file" id="uplaodimage" name="uplaodimage" class="form-control" aria-label="file example" accept="application/xlsl" >
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" class="btn btn-success" value="Submit" style="margin-top: 22px;">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php //}else{ ?>
                        <?php //} ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
