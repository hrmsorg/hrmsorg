<!-- page content -->
<section class="content">
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                          <h3>
                Manage Salary
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
                                    <h2>Form Salary</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"><small> Add new</small></i></a>
                                        </li>

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <?php echo form_open('Cuti/save_cuti_add');?>


                                <div class="col-md-6">
                                            <fieldset>
                                              <div class="control-group">
                                                  <div class="controls">
                                                      <div class="input-prepend input-group">
                                                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>

                                                          <input type="text" class="form-control has-feedback-left" id="single_cal3" name="tgl_awal" placeholder="Date Start" >
                                                          <!-- <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                          <span id="inputSuccess2Status3" class="sr-only">(success)</span> -->
                                                      </div>
                                                  </div>
                                              </div>
                                            </fieldset>
                                </div>
                                <div class="col-md-6">
                                            <fieldset>
                                              <div class="control-group">
                                                      <div class="controls">
                                                      <div class="input-prepend input-group">
                                                                 <div class="input-group clockpicker-with-callbacks">
                                                             <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-clock-o"></i></span>

                                                                    <input type="text" class="form-control has-feedback-left" name="jam_awal"  placeholder="Time Start"  >
                                                            <!-- <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status3" class="sr-only">(success)</span> -->
                                                                 </div>
                                                      </div>
                                                      </div>
                                            </div>
                                          </fieldset>
                              </div>
                              <div class="col-md-6">
                                        <fieldset>
                                              <div class="control-group">
                                                  <div class="controls">
                                                      <div class="input-prepend input-group">
                                                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                          <input type="text" class="form-control has-feedback-left" id="single_cal2" name="tgl_akhir" placeholder="Date End" >
                                                          <!-- <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                          <span id="inputSuccess2Status4" class="sr-only">(success)</span> -->
                                                      </div>
                                                  </div>
                                              </div>
                                          </fieldset>
                            </div>
                            <div class="col-md-6">
                                        <fieldset>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="input-prepend input-group">
                                                         <div class="input-group clockpicker-with-callbacks">
                                                           <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-clock-o"></i></span>

                                                          <input type="text" class="form-control has-feedback-left" name="jam_akhir"  placeholder="Time End" >
                                                          <!-- <span class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
                                                          <span id="inputSuccess2Status3" class="sr-only">(success)</span> -->
                                                         </div>
                                                    </div>
                                              </div>
                                          </div>
                              </fieldset>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="textarea" required="required" name="ket" class="form-control col-md-7 col-xs-12"></textarea>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" class="flat" checked="checked" name="approved" value="setuju"> Approved
                                        </label>
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>


                          </div>

                        </div>
                      <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                              <div class="x_title">
                                  <h2>View Salary <small>All Salary</small></h2>

                                  <div class="clearfix"></div>
                              </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" class="tableflat">
                                                </th>
                                                <th>No </th>
                                                <th>Company ID </th>
                                                <th>Employee ID </th>
                                                <th>Date Start </th>
                                                <th>Date End </th>
                                                <th>Time Start </th>
                                                <th>Time End </th>
                                                <th>Desc </th>
                                                <th>Status </th>
                                                <th class=" no-link last"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php 
                                          foreach ($cuti_all as $key) {
                                            ?>
                                            <tr class="even pointer">
                                            
                                                <td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td>
                                              <td class=" "><?php echo $key['id'];?></td>
                                              <td class=" "><?php echo $key['id_perusahaan'];?></td>
                                              <td class=" "><?php echo $key['id_karyawan'];?></td>
                                              <td class=" "><?php echo $key['tgl_awal'];?></td>
                                              <td class=" "><?php echo $key['tgl_akhir'];?></td>
                                              <td class=" "><?php echo $key['jam_awal'];?></td>
                                              <td class=" "><?php echo $key['jam_akhir'];?></td>
                                              <td class=" "><?php echo $key['ket'];?></td>
                                              <td class=" "><?php echo $key['approved'];?></td>
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
                </div>
    <?php form_close();?>
        <!-- chart js -->
        <script src="<?php echo base_url('assets/js/chartjs/chart.min.js');?>"></script>
        <!-- bootstrap progress js -->
        <script src="<?php echo base_url('assets/js/progressbar/bootstrap-progressbar.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/nicescroll/jquery.nicescroll.min.js');?>"></script>
        <!-- icheck -->
        <script src="<?php echo base_url('assets/js/icheck/icheck.min.js');?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/dist/bootstrap-clockpicker.min.js');?>"></script>

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
        <script type="text/javascript">
  $('.clockpicker').clockpicker()
    .find('input').change(function(){
        console.log(this.value);
    });
  var input = $('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
  });

  $('.clockpicker-with-callbacks').clockpicker({
        donetext: 'Done',
        init: function() {
            console.log("colorpicker initiated");
        },
        beforeShow: function() {
            console.log("before show");
        },
        afterShow: function() {
            console.log("after show");
        },
        beforeHide: function() {
            console.log("before hide");
        },
        afterHide: function() {
            console.log("after hide");
        },
        beforeHourSelect: function() {
            console.log("before hour selected");
        },
        afterHourSelect: function() {
            console.log("after hour selected");
        },
        beforeDone: function() {
            console.log("before done");
        },
        afterDone: function() {
            console.log("after done");
        }
    })
    .find('input').change(function(){
        console.log(this.value);
    });

  // Manually toggle to the minutes view
  $('#check-minutes').click(function(e){
    // Have to stop propagation here
    e.stopPropagation();
    input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
  });
  if (/mobile/i.test(navigator.userAgent)) {
    $('input').prop('readOnly', true);
  }
  </script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/highlight.min.js');?>"></script>
  <script type="text/javascript">
  hljs.configure({tabReplace: '    '});
  hljs.initHighlightingOnLoad();
  </script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

  <!-- daterangepicker -->
      <script type="text/javascript" src="<?php echo base_url('assets/js/moment.min2.js');?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/datepicker/daterangepicker.js');?>"></script>
      <!-- datepicker -->
   <script type="text/javascript">
       $(document).ready(function () {

           var cb = function (start, end, label) {
               console.log(start.toISOString(), end.toISOString(), label);
               $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
               //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
           }

           var optionSet1 = {
               startDate: moment().subtract(29, 'days'),
               endDate: moment(),
               minDate: '2012-01-01',
               maxDate: '2015-12-31',
               dateLimit: {
                   days: 60
               },
               showDropdowns: true,
               showWeekNumbers: true,
               timePicker: false,
               timePickerIncrement: 1,
               timePicker12Hour: true,
               ranges: {
                   'Today': [moment(), moment()],
                   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                   'This Month': [moment().startOf('month'), moment().endOf('month')],
                   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
               },
               opens: 'right',
               buttonClasses: ['btn btn-default'],
               applyClass: 'btn-small btn-primary',
               cancelClass: 'btn-small',
               format: 'YYYY-MM-DD',
               separator: ' to ',
               locale: {
                   applyLabel: 'Submit',
                   cancelLabel: 'Clear',
                   fromLabel: 'From',
                   toLabel: 'To',
                   customRangeLabel: 'Custom',
                   daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                   monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                   firstDay: 1
               }
           };

           $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

           $('#reportrange_right').daterangepicker(optionSet1, cb);

           $('#reportrange_right').on('show.daterangepicker', function () {
               console.log("show event fired");
           });
           $('#reportrange_right').on('hide.daterangepicker', function () {
               console.log("hide event fired");
           });
           $('#reportrange_right').on('apply.daterangepicker', function (ev, picker) {
               console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
           });
           $('#reportrange_right').on('cancel.daterangepicker', function (ev, picker) {
               console.log("cancel event fired");
           });

           $('#options1').click(function () {
               $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
           });

           $('#options2').click(function () {
               $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
           });

           $('#destroy').click(function () {
               $('#reportrange_right').data('daterangepicker').remove();
           });

       });
   </script>
   <!-- datepicker -->
   <script type="text/javascript">
       $(document).ready(function () {

           var cb = function (start, end, label) {
               console.log(start.toISOString(), end.toISOString(), label);
               $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
               //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
           }

           var optionSet1 = {
               startDate: moment().subtract(29, 'days'),
               endDate: moment(),
               minDate: '2012-01-01',
               maxDate: '2015-12-31',
               dateLimit: {
                   days: 60
               },
               showDropdowns: true,
               showWeekNumbers: true,
               timePicker: false,
               timePickerIncrement: 1,
               timePicker12Hour: true,
               ranges: {
                   'Today': [moment(), moment()],
                   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                   'This Month': [moment().startOf('month'), moment().endOf('month')],
                   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
               },
               opens: 'left',
               buttonClasses: ['btn btn-default'],
               applyClass: 'btn-small btn-primary',
               cancelClass: 'btn-small',
               format: 'YYYY-MM-DD',
               separator: ' to ',
               locale: {
                   applyLabel: 'Submit',
                   cancelLabel: 'Clear',
                   fromLabel: 'From',
                   toLabel: 'To',
                   customRangeLabel: 'Custom',
                   daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                   monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                   firstDay: 1
               }
           };
           $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
           $('#reportrange').daterangepicker(optionSet1, cb);
           $('#reportrange').on('show.daterangepicker', function () {
               console.log("show event fired");
           });
           $('#reportrange').on('hide.daterangepicker', function () {
               console.log("hide event fired");
           });
           $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
               console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
           });
           $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
               console.log("cancel event fired");
           });
           $('#options1').click(function () {
               $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
           });
           $('#options2').click(function () {
               $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
           });
           $('#destroy').click(function () {
               $('#reportrange').data('daterangepicker').remove();
           });
       });
   </script>
   <!-- /datepicker -->
   <script type="text/javascript">
       $(document).ready(function () {
           $('#single_cal1').daterangepicker({
               singleDatePicker: true,
               calender_style: "picker_1"
           }, function (start, end, label) {
               console.log(start.toISOString(), end.toISOString(), label);
           });
           $('#single_cal2').daterangepicker({
               singleDatePicker: true,
               calender_style: "picker_2"
           }, function (start, end, label) {
               console.log(start.toISOString(), end.toISOString(), label);
           });
           $('#single_cal3').daterangepicker({
               singleDatePicker: true,
               calender_style: "picker_3"
           }, function (start, end, label) {
               console.log(start.toISOString(), end.toISOString(), label);
           });
           $('#single_cal4').daterangepicker({
               singleDatePicker: true,
               calender_style: "picker_4"
           }, function (start, end, label) {
               console.log(start.toISOString(), end.toISOString(), label);
           });
       });
   </script>
   <script type="text/javascript">
       $(document).ready(function () {
           $('#reservation').daterangepicker(null, function (start, end, label) {
               console.log(start.toISOString(), end.toISOString(), label);
           });
       });
   </script>
   <!-- /datepicker -->

