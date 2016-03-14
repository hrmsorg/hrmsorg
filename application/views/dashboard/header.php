<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Human Resource Management System </title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/bootstrap-clockpicker.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/github.min.css');?>">


    <link href="<?php echo base_url('assets/fonts/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/maps/jquery-jvectormap-2.0.1.css');?>" />
    <link href="<?php echo base_url('assets/css/icheck/flat/green.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/floatexamples.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/datatables/tools/css/dataTables.tableTools.css');?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/chartjs/chart.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/progressbar/bootstrap-progressbar.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/nicescroll/jquery.nicescroll.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/icheck/icheck.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/custom.js');?>"></script>

      <script src="<?php echo base_url('assets/js/datatables/js/jquery.dataTables.js');?>"></script>
      <script src="<?php echo base_url('assets/js/datatables/tools/js/dataTables.tableTools.js');?>"></script>
      <script>
      $(document).ready(function () {
         $('input.tableflat').iCheck({
             checkboxClass: 'icheckbox_flat-green',
             radioClass: 'iradio_flat-green'
         });
      });

      var asInitVals = new Array();
      $(document).ready(function () {
         var oTable = $('#example').dataTable({
             "oLanguage": {
                 "sSearch": "Search all columns:"
             },
             "aoColumnDefs": [
                 {
                     'bSortable': false,
                     'aTargets': [0]
                 } //disables sorting for column one
      ],
             'iDisplayLength': 12,
             "sPaginationType": "full_numbers",
             "dom": 'T<"clear">lfrtip',
             "tableTools": {
                 "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
             }
         });
         $("tfoot input").keyup(function () {
             /* Filter on the column based on the index of this element's parent <th> */
             oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
         });
         $("tfoot input").each(function (i) {
             asInitVals[i] = this.value;
         });
         $("tfoot input").focus(function () {
             if (this.className == "search_init") {
                 this.className = "";
                 this.value = "";
             }
         });
         $("tfoot input").blur(function (i) {
             if (this.value == "") {
                 this.className = "search_init";
                 this.value = asInitVals[$("tfoot input").index(this)];
             }
         });
      });
      </script>

    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/nprogress.js');?>"></script>
    <link href="<?php echo base_url('assets/css/calendar/fullcalendar.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/calendar/fullcalendar.print.css');?>" rel="stylesheet" media="print">

    <script src="<?php echo base_url('assets/js/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/calendar/fullcalendar.min.js');?>"></script>

    <script>
        NProgress.start();
    </script>


</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

<!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo base_url('assets/images/img.jpg');?>" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="<?php echo base_url('assets/images/img.jpg');?>" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="<?php echo base_url('assets/images/img.jpg');?>" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="<?php echo base_url('assets/images/img.jpg');?>" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="<?php echo base_url('assets/images/img.jpg');?>" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong><a href="inbox.html">See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->
          </body>

          </html>
