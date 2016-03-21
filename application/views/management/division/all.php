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
                                    <?php echo form_open('division/save_division_add');?>
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

                                              <th>ID</center> </th>
                                              <th>ID Company</center> </th>
                                              <th>Name </th>
                                              <th>Description </th>
                                              <th>Main Task </th>
                                              <th class=" no-link last"><span class="nobr"> Action</span>
                                              </th>

                                          </tr>
                                      </thead>

                                      <tbody>
                                        <?php
                                        foreach ($divisi as $key )

                                         {
                                          ?>
                                          <tr class="even pointer">

                                                <td><?php echo $key['id']; ?></td>
                                                <td ><?php echo $key['id_perusahaan'];?></td>
                                                <td><?php echo $key['nama'];?></td>
                                                <td><?php echo $key['ket'];?></td>
                                                <td><?php echo $key['tugas_utama'];?></td>
                                                <canter><td><a href="<?php echo base_url("division/division_delete/".$key['id']);?>" onClick="return doconfirm();"><i class="fa fa-trash" > </i> </a>
                                                      <script>
                                                            function doconfirm()
                                                            {
                                                              job=confirm("Are you sure to delete this data?");
                                                            if(job!=true)
                                                            {
                                                            return false;
                                                            }
                                                        }
                                                      </script></center>
                                              <a href="<?php echo base_url("division/division_edit/".$key['id']);?>"> | <i class="fa fa-edit"></i</a></td>
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

                                  <div id="custom_notifications" class="custom-notifications dsp_none">
                                      <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
                                      </ul>
                                      <div class="clearfix"></div>
                                      <div id="notif-group" class="tabbed_notifications"></div>
                                  </div>


                                  <!-- chart js -->
                                  <script src="<?php echo base_url('assets/js/chartjs/chart.min.js');?>"></script>
                                  <!-- bootstrap progress js -->
                                  <script src="<?php echo base_url('assets/js/progressbar/bootstrap-progressbar.min.js');?>"></script>
                                  <script src="<?php echo base_url('assets/js/nicescroll/jquery.nicescroll.min.js');?>"></script>
                                  <!-- icheck -->
                                  <script src="<?php echo base_url('assets/js/icheck/icheck.min.js');?>"></script>




                                  <!-- Datatables -->
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
                          <?php form_close();?>
