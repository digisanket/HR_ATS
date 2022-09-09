<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DashBoard | ATS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>

    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>

    <link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet"
          type="text/css"/>

    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"/>

    <!--Export table button CSS-->

    <style>
        .error {
            color: red;
            font-weight: normal;
        }

        .dropdown-toggle::after {
            display: none;
        }
    </style>

    <!--Datable Initialize start-->
    <link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css" rel="stylesheet"
          media="screen">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js
"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
    <!--Datable Initialize End-->

    <?php
    $this->role = $this->session->userdata('role');
    $this->idlogins = $this->session->userdata('idlogins');
    $this->name = $this->session->userdata('name');
    $this->email = $this->session->userdata('email');
    $this->status = $this->session->userdata('status');
    ?>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
            <span class="logo-mini"><b>AT</b>&nbsp;s</span>
            <span class="logo-lg"><b>ATS</b></span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="user user-menu">
                        <a onclick="validate_call_condition();" class="dropdown dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image"
                                 alt="User Image" style="width: 35px;height: 35px;"/>
                            <span class="hidden-xs"><?php echo $this->name; ?></span>
                            <span class="hidden-xs"
                                  style="display: block;font-size: 11px;"><?php echo $this->role; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>


<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <?php
            // $this->load->library('General');
            $menudatas = loaddashboardmenus($this->role);
            foreach ($menudatas as $menu) { ?>
                <li>
                    <a href="<?php echo base_url() . $menu->url; ?>">
                        <i class="<?php echo $menu->icon; ?>"></i> <span><?php echo $menu->name; ?></span></i>
                    </a>
                </li>
            <?php } ?>
    </section>
</aside>