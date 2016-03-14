<section class="content">
  <div class="right_col" role="main">


        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Master Cuti </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- <div class="x_content"> -->
<!--
            <form class="form-horizontal form-label-left" novalidate>

                <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                </p>
                <span class="section">Personal Info</span>


            </form> -->


<!-- coba template -->
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">

<div class="x_panel">
    <div class="x_title">
        <h2>Default Buttons </h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">

                   <?php echo form_open('Absent/save_master_cuti');?>

                    

           
                  <br>
                  <div class="clearfix"></div>
                    <br>
                <div class="item form-group">
                    <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Jenis</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password2" type="text" name="jenis" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                    </div>
                </div>
                <br>


                  <br>
                  <div class="clearfix"></div>
                    <br>
                  <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ket">
                          </textarea>
                      </div>
                      </div>
                    <br>
                   

                <div class="clearfix"></div>

                  <br>
                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                      </div>
                  </div>
              </div>






<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

  <!-- chart js -->
  <script src="<?php echo base_url('assets/chartjs/chart.min.js');?>"></script>
  <!-- bootstrap progress js -->
  <script src="<?php echo base_url('assets/js/progressbar/bootstrap-progressbar.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/nicescroll/jquery.nicescroll.min.js');?>"></script>
  <!-- icheck -->
  <script src="<?php echo base_url('assets/js/icheck/icheck.min.js');?>"></script>

  <script src="<?php echo base_url('assets/js/custom.js');?>"></script>
  <!-- dropzone -->
  <script src="<?php echo base_url('assets/js/dropzone/dropzone.js');?>"></script>

</section>
