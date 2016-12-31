<section class="content">
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                          <h3>
                           Manage Overtime
                          </h3>
                        </div>

                        <div class="title_right"></div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">

                            <!-- form date pickers -->
                            <div class="x_panel" style="">
                                <div class="x_title">
                                    <h2>Form Overtime</h2>
                                    <div class="col-md col-sm col-xs form-group pull-right top_search">
                                     <a href="<?php echo 'overtime_all';?>" >  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Back"><i class="fa  fa-arrow-left"></i></button></a>
                                  </div>
                                    <div class="clearfix"></div>
                                </div>
                                 
                                
                            <div class="x_content">
                                    <?php echo form_open('Overtime/save_overtime_update');?>
                                    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $overtime_all['id'];?>">
                                    <div class="col-md-9">
                                                <fieldset>
                                                  <div class="control-group">
                                                      <div class="controls">
                                                          <div class="input-prepend input-group">
                                                            <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>

                                                              <input type="text" class="form-control has-feedback-left" id="single_cal2" name="tgl" placeholder="Date Start" value="<?php echo $overtime_all['tgl'];?>">
                                                          </div>
                                                      </div>
                                                  </div>
                                                </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                                <fieldset>
                                                  <div class="control-group">
                                                          <div class="controls">
                                                          <div class="input-prepend input-group">
                                                                     <div class="input-group clockpicker-with-callbacks">
                                                                 <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-clock-o"></i></span>

                                                                        <input type="text" class="form-control has-feedback-left" name="jam_awal"  placeholder="Time Start" value="<?php echo $overtime_all['jam_awal'];?>">
                                                                     </div>
                                                          </div>
                                                          </div>
                                                </div>
                                              </fieldset>
                                  </div>

                                <div class="col-md-5">
                                            <fieldset>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="input-prepend input-group">
                                                             <div class="input-group clockpicker-with-callbacks">
                                                               <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-clock-o"></i></span>

                                                              <input type="text" class="form-control has-feedback-left" name="jam_akhir"  placeholder="Time End" value="<?php echo $overtime_all['jam_akhir'];?>" >
                                                             </div>
                                                        </div>
                                                  </div>
                                              </div>
                                  </fieldset>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                                <?php form_close();?>
                            </div>
                      </div>
                          </div>
                            </div>
                                    </div>
                                    <div class="clearfix"></div>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/dist/bootstrap-clockpicker.min.js');?>"></script>
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
               minDate: '01/01/2012',
               maxDate: '12/31/2015',
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
               format: 'MM/DD/YYYY',
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
               minDate: '01/01/2012',
               maxDate: '12/31/2015',
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
               format: 'MM/DD/YYYY',
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