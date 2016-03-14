<!-- page content -->
<section class="content">
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                          <h3>
                Manage Division
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
                                    <h2>Form Division</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"><small> Add new</small></i></a>
                                        </li>

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                	<!-- //tabel :divisi-> id, id_perusahaan, nama, ket,tugas_utama -->
                                <div class="x_content">
                                    <?php echo form_open('Management/save_division_add');?>
                                  <br>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" type="text" name="nama" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>


                              <div class="clearfix"></div>
                                <br>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="textarea" required="required" name="ket" class="form-control col-md-7 col-xs-12"></textarea>
                                </div>
                            </div>

                                <br>
                                  <div class="clearfix"></div>
                                    <br>
                                <div class="item form-group">
                                    <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Main Task</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password2" type="text" name="tugas_utama" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
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
                      </div>
                          </div>
                            </div>
                                    </div>
                                    <div class="clearfix"></div>

                  <div class="row">

                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                              <div class="x_title">
                                  <h2>View Division <small>All Division</small></h2>

                                  <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                  <table id="example" class="table table-striped responsive-utilities jambo_table">
                                      <thead>
                                        	<!-- //tabel :divisi-> id, id_perusahaan, nama, ket,tugas_utama -->
                                   <tr class="headings">

                                              <th>ID</th>
                                              <th>ID Company </th>
                                              <th>Name </th>
                                              <th>Description </th>
                                              <th>Main Task </th>

                                              <th class=" no-link last"><span class="nobr">Action</span>
                                              </th>
                                          </tr>
                                      </thead>

                                      <tbody>
                                          <tr class="even pointer">
                                            <?php
                                            foreach ($divisi as $key) {
                                              ?>
                                                <td><?php echo $key['id'];?></td>
                                                <td ><?php echo $key['id_perusahaan'];?></td>
                                                <td><?php echo $key['nama'];?></td>
                                                <td><?php echo $key['ket'];?></td>
                                                <td><?php echo $key['tugas_utama'];?></td>                                                       <td><a href="<?php echo base_url("management/division_delete/".$key['id']);?>" onClick="return doconfirm();">Delete</a>
                                                  <script>
                                                  function doconfirm()
                                                  {
                                                    job=confirm("Are you sure to delete this data?");
                                                  if(job!=true)
                                                  {
                                                  return false;
                                                  }
                                              }
                                              </script>
                                                  <td class=" last"><a href="<?php echo base_url("management/division_edit/".$key['id']);?>">Edit</a>
                                              <?php
                                              }
                                              ?>
                                          </tr>

                                      </tbody>

                                  </table>
                              </div>
                          </div>
                      </div>

                      <br />
                      <br />
                      <br />
                                </div>


                          <!-- ini table view: -->

                          <!-- tag table -->
                          <?php form_close();?>
