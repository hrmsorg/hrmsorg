<!-- page content -->
<section class="content">
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                          <h3>
                Manage Master Cuti
                </h3>
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

                    <div class="row">
                        <div class="col-md-12">

                            <!-- form date pickers -->
                            <div class="x_panel" style="">
                                <div class="x_title">
                                    <h2>Form Master Cuti</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"><small> Add new</small></i></a>
                                        </li>

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                	<!-- //tabel :divisi-> id, id_perusahaan, nama, ket,tugas_utama -->
                                <div class="x_content">
                                    <?php echo form_open('MasterCuti/save_master_cuti_update');?>
                                  <br>
                                  <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $master_cuti['id'];?>">
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Type</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" type="text" name="jenis" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" autocomplete="off" value="<?php echo $divisi['nama'];?>">
                                    </div>
                                </div>


                              <div class="clearfix"></div>
                                <br>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="textarea" required="required" name="ket" class="form-control col-md-7 col-xs-12"  value="<?php echo $divisi['tugas_utama'];?>"></textarea>
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

