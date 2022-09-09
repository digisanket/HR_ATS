<?php if($this->role == 'Admin'){ ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <i class="fa fa-home" aria-hidden="true"></i> Dashboard
            </h1>
        </section>
        <?php
        $usercount = 0;
        $studentcount = 0;

        //      $usercount = count_user();
        //      $studentcount = count_student();

        ?>

        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo $studentcount; ?></h3>
                            <p>Total candidate</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $usercount; ?></h3>
                            <p>Total Hr</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $usercount; ?></h3>
                            <p>Total Hr</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $usercount; ?></h3>
                            <p>Total Hr</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php }else if($this->role == 'Hr'){ ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <i class="fa fa-home" aria-hidden="true"></i> Dashboard
            </h1>
        </section>
        <?php
        $usercount = 0;
        $studentcount = 0;

        //      $usercount = count_user();
        //      $studentcount = count_student();

        ?>

        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo $studentcount; ?></h3>
                            <p>Total candidate</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $usercount; ?></h3>
                            <p>Total Hr</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $usercount; ?></h3>
                            <p>Total Hr</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $usercount; ?></h3>
                            <p>Total Hr</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php }else if($this->role == 'Hr_Head'){ ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <i class="fa fa-home" aria-hidden="true"></i> Dashboard
            </h1>
        </section>
        <?php
        $usercount = 0;
        $studentcount = 0;

        //      $usercount = count_user();
        //      $studentcount = count_student();

        ?>

        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo $studentcount; ?></h3>
                            <p>Total candidate</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $usercount; ?></h3>
                            <p>Total Hr</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $usercount; ?></h3>
                            <p>Total Hr</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $usercount; ?></h3>
                            <p>Total Hr</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } ?>
