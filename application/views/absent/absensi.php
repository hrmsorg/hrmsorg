<section class="content">
  <div class="right_col" role="main">


        <div class="">
            <div class="page-title">
                <div class="title_left">

                    <h3>Form Absent </h3>
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

                <?php echo form_open('Absent/save_absent_add');?>

                    <div class="clearfix"></div>
                </div>
                  <br>
                <div class="item form-group">
                    <label for="password" class="control-label col-md-3">Date</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password" type="text" name="tgl" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                    </div>

                    <div class="clearfix"></div>
                </div>
                  <br>
                <div class="item form-group">
                    <label for="password" class="control-label col-md-3">Start</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password" type="text" name="jam_datang" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                    </div>

                    <div class="clearfix"></div>
                </div>
                  <br>
                <div class="item form-group">
                    <label for="password" class="control-label col-md-3">Finish</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password" type="text" name="jam_pulang" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                    </div>

                <div class="clearfix"></div>
              </div>
                <br>
            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" required="required" name="ket" style="" class="form-control col-md-7 col-xs-12"></textarea>
                </div>
            </div>

                <div class="clearfix"></div>
                  <br>
                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                      </div>
                  </div>
              </div>

              <?php form_close();?>






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
