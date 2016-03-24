<section class="content">
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                          <ul class="nav navbar-right panel_toolbox">

                              </li>

                          </ul>
                          <h3>
            <a href="<?php echo 'MasterSalary';?>" >  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Back"><i class="fa  fa-arrow-left"></i></button></a></i>  Manage Master Salary
                </h3>
                        </div>

                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">

                            <!-- form date pickers -->
                            <div class="x_panel" style="">
                                <div class="x_title">
                                    <h2>Form Master Salary</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"><small> Add new</small></i></a>
                                        </li>

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                  <!-- //tabel :divisi-> id, id_perusahaan, nama, ket,tugas_utama -->
                                <div class="x_content">
                                    <?php echo form_open('MasterSalary/save_master_salary');?>
                                  <br>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Gaji Awal</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" type="text" name="gaji_awal" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>


                                <br>
                                  <div class="clearfix"></div>
                                    <br>
                                <div class="item form-group">
                                    <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Gaji Akhir</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password2" type="text" name="gaji_akhir" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>
                                <br>


                              <div class="clearfix"></div>
                                <br>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="textarea" required="required" name="ket" class="form-control col-md-7 col-xs-12"></textarea>
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
                      </div>
                          </div>
                            </div>
                                    </div>
                                    <div class="clearfix"></div>
