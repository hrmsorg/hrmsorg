<div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php echo base_url('assets/images/img.jpg');?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Anthony Fernando</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?php echo base_url('/');?>"><i class="fa fa-dashboard"></i> Dashboard </a>
                                </li>
                                <li><a href="<?php echo base_url('Company/company_add');?>"><i class="fa fa-university"></i> Company </a>
                                </li>
                                <li><a><i class="fa fa-sitemap"></i> Management <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="e_commerce.html">Employee</a>
                                        </li>
                                        <li><a href="projects.html">New Employee</a>
                                        </li>
                                        <li><a href="management/level">Level</a>
                                        </li>
                                        <li><a href="<?php echo base_url('management/division');?>">Division</a>
                                        </li>
                                       <li><a href="<?php echo base_url('management/master_gaji');?>">Master Salary</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-calendar"></i> Absent <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo base_url('Absent/absent_add');?>">All</a>
                                        </li>
                                        <li><a href="projects.html">Free</a>
                                        </li>
                                        <li><a href="<?php echo base_url('absent/cuti/add');?>">Cuti</a>
                                        </li>
                                        <li><a href="<?php echo base_url('absent/mastercuti/all');?>">Master Cuti</a>
                                        </li>
                                        <li><a href="projects.html">Overtime</a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
