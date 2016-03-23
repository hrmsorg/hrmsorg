        <!-- page content -->
        <section class="content">
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                          <h3>
                Manage Company
                </h3>
                        </div>
                                          <div class="title_right">
    <div class="col-md col-sm col-xs form-group pull-right top_search">
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Add New"> <a href="<?php echo 'get_company_add';?>" ><i class="fa fa-plus" ></i></a></button>
    </div>
</div>
</div>
       
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data Absensi</h2>
                                    <div class="clearfix"></div>
                                </div>                         <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>Company ID </th>
                                                <th>Employee ID </th>
                                                <th>Date </th>
                                                <th>Time Start </th>
                                                <th>Time End </th>
                                                <th>Desc </th>
                                                <th class=" no-link last"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php 
                                          foreach ($get_company_all as $key) 
                                          {
                                            ?>
                                            <tr class="even pointer">
                                              <td class=" "><?php echo $key['id_perusahaan'];?></td>
                                              <td class=" "><?php echo $key['id_karyawan'];?></td>
                                              <td class=" "><?php echo $key['tgl'];?></td>
                                              <td class=" "><?php echo $key['jam_datang'];?></td>
                                              <td class=" "><?php echo $key['jam_pulang'];?></td>
                                              <td class=" "><?php echo $key['ket'];?></td>
                                                <td class=" last"><a href="#">View</a>
                                                </td>
                                                 
                                            </tr>
                                            <?php
                                            }
                                             ?>
                                            
                                        </tbody>

                                    </table>
                                </div>
                        
                        </div>

                        <br />
                        <br />
                        <br />
                    </div>
                <!-- /page content -->
    

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
</body>

</html>

          </div>


<div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>



    </body>

</html>
