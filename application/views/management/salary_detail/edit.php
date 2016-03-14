<section class="content">
  <div class="right_col" role="main">
    <div class="">
    <div class="page-title">
      <div class="title_left">
            <h3> Salary Detail </h3>
      </div>
    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">

                            <!-- form date pickers -->
                            <div class="x_panel" style="">
                                <div class="x_title">
                                    <h2>Form Salary<small> Edit Data</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                    <!-- //tabel :divisi-> id, id_perusahaan, nama, ket,tugas_utama -->
                                <div class="x_content">
                                    <?php echo form_open('Management/save_salary_detail_update');?>
                                  <br>
                                <div class="item form-group">
                                    <label class="control-label col-md-3">Salary_id</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="<?php echo $detail_gaji['id_gaji'];?>" name="gaji" id="gaji" required class="form-control col-md-7 col-xs-12" autocomplete="off"/><input type="hidden" class="form-control" name="id">
                                    </div>
                                </div>
                                <div class="x_content"></div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3">Amount</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="jumlah" name="jumlah" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" value="<?php echo $detail_gaji['jumlah'];?>" required="required">
                                    </div>
                                </div>
                              <div class="x_content"></div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="textarea" value="<?php echo $detail_gaji['ket'];?>" required="required" name="ket" id="ket" class="form-control col-md-7 col-xs-12"></textarea>
                                </div>
                            </div>
                                <div class="x_content"></div>
                                <div class="item form-group">
                                <label for="password" class="control-label col-md-3">Salary Date</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                          <div class="input-prepend input-group ">
                                                            <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>

                                                              <input type="text" class="form-control has-feedback-left col-md-7 col-xs-12" id="single_cal2" name="tgl" placeholder="Select Date" value="<?php echo $detail_gaji['tgl'];?>">
                                                              <!-- <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                              <span id="inputSuccess2Status3" class="sr-only">(success)</span> -->
                                                          </div>
                                                   </div>
                                           </div>
                                           
                                <div class="x_content"></div>
                                <div class="item form-group">
                                    <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="select2_single form-control" name="tipe" tabindex="-1" value="<?php echo $detail_gaji['tipe'];?>">
                                                <option <?php echo ($this->input->post("tipe")=="Plus")?"selected":"";?> value="Plus">Plus</option>
                                                <option <?php echo ($this->input->post("tipe")=="Minus")?"selected":"";?> value="Minus">Minus</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="x_content"></div>
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Salary</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single form-control" name="jenis" tabindex="-1" value="<?php echo $detail_gaji['jenis'];?>">
                                                <option <?php echo ($this->input->post("jenis")=="BPJS")?"selected":"";?> value="BPJS">BPJS</option>
                                                <option <?php echo ($this->input->post("jenis")=="Salary")?"selected":"";?> value="Salary">Salary</option>
                                                <option <?php echo ($this->input->post("jenis")=="Overtime")?"selected":"";?> value="Overtime">Overtime</option>
                                                <option <?php echo ($this->input->post("jenis")=="Piece")?"selected":"";?> value="Piece">Piece</option>    
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                <div class="x_content"></div>
                                  <div class="form-group">
                                      <div class="col-md-6 col-md-offset-3">
                                          <button type="submit" class="btn btn-primary">Cancel</button>
                                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                                      </div>
                                  </div>
                              </div>
                            </div>
                                    </div>
                                    <div class="clearfix"></div>