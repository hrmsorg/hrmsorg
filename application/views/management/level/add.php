<section class="content">
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                          <ul class="nav navbar-right panel_toolbox">

                              </li>

                          </ul>
                          <h3>
            Manage Level
                </h3>
                        </div>

                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">

                            <!-- form date pickers -->
                            <div class="x_panel" style="">
                                <div class="x_title">
                                    <h2>Form Level<small>Add New</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                      <div class="col-md col-sm col-xs form-group pull-right top_search">
                                         <a href="<?php echo 'index';?>" >  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Back"><i class="fa fa-arrow-left" ></i></button></a>
                                      </div>

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                  <!-- //id, id_jabatan, id_perusahaan, id_divisi, title, logo,ket, created, tugas_utama -->
                                <div class="x_content">
                                    <?php echo form_open_multipart('level/proses_tambah') ?>
                                  <br>
																	<!-- <div class="item form-group">
	                                    <label for="password" class="control-label col-md-3">ID Level</label>
	                                    <div class="col-md-6 col-sm-6 col-xs-12">
	                                        <input id="password" type="text"  name="judul" value="<?php echo set_value('judul'); ?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
	                                    </div>
	                                </div>
																	<div class="clearfix"></div>
																		<br>
																	<div class="item form-group">
	                                    <label for="password" class="control-label col-md-3">ID Company</label>
	                                    <div class="col-md-6 col-sm-6 col-xs-12">
	                                        <input id="password" type="text"  name="judul" value="<?php echo set_value('judul'); ?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
	                                    </div>
	                                </div>
																	<div class="clearfix"></div>
																		<br>
																	<div class="item form-group">
	                                    <label for="password" class="control-label col-md-3">ID Division</label>
	                                    <div class="col-md-6 col-sm-6 col-xs-12">
	                                        <input id="password" type="text"  name="judul" value="<?php echo set_value('judul'); ?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
	                                    </div>
	                                </div> -->
																	<div class="clearfix"></div>
																		<br>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" type="text"  name="judul" value="<?php echo set_value('judul'); ?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>
																<div class="clearfix"></div>
																	<br>
															<div class="item form-group">
																	<label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Logo</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																			<input id="password2" type="file" name="userfile" value="<?php echo set_value('userfile'); ?>" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">

																	</div>
															</div>


                              <div class="clearfix"></div>
                                <br>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="textarea" required="required" name="ket_jabatan" value="<?php echo set_value('ket_jabatan'); ?>" class="form-control col-md-7 col-xs-12"></textarea>
                                </div>
                            </div>
														<div class="clearfix"></div>
															<br>
													<div class="item form-group">
															<label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Main Task</label>
															<div class="col-md-6 col-sm-6 col-xs-12">
																	<input id="password2" type="text" name="utama_jabatan" value="<?php echo set_value('utama_jabatan'); ?>" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
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
