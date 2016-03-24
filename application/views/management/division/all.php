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

</div>

                    </div>

                                    <div class="clearfix"></div>

                  <div class="row">

                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                              <div class="x_title">
                                  <h2>View Division <small>All Division</small></h2>
                                  <div class="col-md col-sm col-xs form-group pull-right top_search">
                                     <a href="<?php echo 'get_division_add';?>" >  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Add New"><i class="fa fa-plus" ></i></button></a>
                                  </div>
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
                                        foreach ($divisi as $key) {
                                            ?>
                                          <tr class="even pointer">

                                                <td><?php echo $key['id'];
                                            ?></td>
                                                <td ><?php echo $key['id_perusahaan'];
                                            ?></td>
                                                <td><?php echo $key['nama'];
                                            ?></td>
                                                <td><?php echo $key['ket'];
                                            ?></td>
                                                <td><?php echo $key['tugas_utama'];
                                            ?></td>
  <td><a href="<?php echo base_url('Division/division_delete/'.$key['id']);
                                            ?>" onClick="return doconfirm();">   <button title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm tooltips btn-danger"><i class="fa fa-trash-o"></i>
                                                            </button></a>
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
<a href="<?php echo base_url('division/division_edit/'.$key['id']);?>"><button title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Edit" class="btn btn-sm tooltips btn-primary"><i class="fa fa-edit"></i>
                                                            </button></a></td>

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
