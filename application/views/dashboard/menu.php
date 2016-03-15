<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Pro Gruments</span></a>
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
        <br/>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
              <ul class="nav side-menu">
              <li>
                <a href="<?php echo base_url('/');?>">
                    <i class="fa fa-dashboard"></i> Dashboard 
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('Company/company_add');?>">
                    <i class="fa fa-university"></i> Company 
                </a>
              </li>
              <li>
                <a>
                    <i class="fa fa-sitemap"></i> Management <span class="fa fa-chevron-down"></span>
                </a>
                  <ul class="nav child_menu" style="display: none">
                    <li>
                        <a href="<?php echo base_url('management/employee');?>">Employee</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('management/new_employee/add');?>">New Employee</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('management/level');?>">Level</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('management/division');?>">Division</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('management/salary');?>">Salary</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('management/master_gaji');?>">Master Salary</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('SalaryDetail/salary_detail');?>">Salary Detail</a>
                    </li>
                  </ul>
              </li>
              <li>
                <a>
                    <i class="fa fa-calendar"></i> Absent <span class="fa fa-chevron-down"></span>
                </a>
                  <ul class="nav child_menu" style="display: none">
                    <li>
                      <a href="<?php echo base_url('Absent/absent_add');?>">All</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('Free/free_all');?>">Free</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('absent/cuti_all');?>">Cuti</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('absent/master_cuti');?>">Master Cuti</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('absent/overtime_all');?>">Overtime</a>
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
<<<<<<< HEAD
</div>
=======
=======
</div>
=======
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Pro Gruments</span></a>
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
                                        <li><a href="<?php echo base_url('employee/employee');?>">Employee</a>
                                        </li>
                                        <li><a href="<?php echo base_url('newemployee/new_employee/add');?>">New Employee</a>
                                        </li>
                                        <li><a href="<?php echo base_url('level/level');?>">Level</a>
                                          <!-- ('level/level') : penempatan Controller / View -->
                                        </li>
                                        <li><a href="<?php echo base_url('division/division');?>">Division</a>
                                        </li>
<<<<<<< HEAD
                                        <li><a href="<?php echo base_url('salary/salary_all');?>">Salary</a>
=======
                                        <li><a href="<?php echo base_url('salary/salary');?>">Salary</a>
>>>>>>> 0f4cf6c59514299082a6eec8ed10f361c142c871
                                         </li>

                                       <li><a href="<?php echo base_url('MasterSalary/master_salary');?>">Master Salary</a>

            
                                        </li>
                                        <li><a href="<?php echo base_url('salarydetail/salary_detail');?>">Salary Detail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-calendar"></i> Absent <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo base_url('Absent/absent_add');?>">All</a>
                                        </li>
                                        <li><a href="<?php echo base_url('absent/free_all');?>">Free</a>
                                        </li>
                                        <li><a href="<?php echo base_url('cuti/cuti_all');?>">Cuti</a>
                                        </li>
                                        <li><a href="<?php echo base_url('MasterCuti/master_cuti');?>">Master Cuti</a>
                                        </li>
                                        <li><a href="<?php echo base_url('overtime/overtime_all');?>">Overtime</a>
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
>>>>>>> 95ab8fe24f63b785a1b8f2a6871c9e65907e75e1
>>>>>>> ef9c54d51d22ea627899840c4e172ad3859595f9
>>>>>>> 34a34a52ce8b483c8effe869a9160f3278fcdea6
