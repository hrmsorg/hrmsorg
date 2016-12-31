<section class="content">
  <div class="right_col" role="main">
    <div class="">
    <div class="page-title">
      <div class="title_left">
      <?php echo form_open("NewEmployee/new_employee_all");?>
      <button class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Back"><i class="fa fa-arrow-left"></i></button>
      New Employee </h3><?php echo form_close();?>
      </div>
    </div>
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel" style="">
        <div class="x_title">
            <h2>Form New Employee<small> Edit Data</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li>
                <a class="collapse-link">
                    <i class="fa fa-chevron-down"></i>
                </a>
            </li>
          </ul>
        <div class="clearfix">
        </div>
        </div>
        <div class="x_content">
            <?php echo form_open('NewEmployee/new_employee_update');?><br>
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $calon_karyawan['id'];?>">
        </div>

        <div class="x_content"></div>
        <div class="item form-group">
            <label class="control-label col-md-3">Name</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="nama" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" value="<?php echo $calon_karyawan['nama'];?>" required="required">
                </div>
        </div>
        
               <div class="x_content"></div>
                <div class="item form-group">
                    <label class="control-label col-md-3">Birth Place</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" type="text" name="tempat_lahir" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" value="<?php echo $calon_karyawan['tempat_lahir'];?>" required="required">
                    </div>
                </div>
        </div>

        <div class="x_content"></div>
          <div class="item form-group">
            <label for="password" class="control-label col-md-3">Birth Date</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="input-prepend input-group ">
                  <span class="add-on input-group-addon">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  </span>
                    <input type="text" class="form-control has-feedback-left col-md-7 col-xs-12" id="single_cal3" name="tgl" placeholder="Select Date" value="<?php echo $calon_karyawan['tgl_lahir'];?>">
                                                              <!-- <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                              <span id="inputSuccess2Status3" class="sr-only">(success)</span>-->
                          <!-- <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                          <span id="inputSuccess2Status3" class="sr-only">(success)</span>-->
                </div>
              </div>
          </div>                              
        <div class="x_content"></div>
            <div class="item form-group">
                <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="select2_single form-control" name="tipe" tabindex="-1" value="<?php echo $detail_gaji['tipe'];?>">
                                <option <?php echo ($this->input->post('tipe')=="Plus")?"selected":"";?> value="Plus">Plus</option>
                                <option <?php echo ($this->input->post('tipe')=="Minus")?"selected":"";?> value="Minus">Minus</option>
                        </select>
                    </div>
            </div>
        <div class="x_content"></div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Salary</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="select2_single form-control" name="jenis" tabindex="-1" value="<?php echo $detail_gaji['jenis'];?>">
                                    <option <?php echo ($this->input->post('jenis')=="BPJS")?"selected":"";?> value="BPJS">BPJS</option>
                                    <option <?php echo ($this->input->post('jenis')=="Salary")?"selected":"";?> value="Salary">Salary</option>
                                    <option <?php echo ($this->input->post('jenis')=="Overtime")?"selected":"";?> value="Overtime">Overtime</option>
                                    <option <?php echo ($this->input->post('jenis')=="Piece")?"selected":"";?> value="Piece">Piece</option>    
                        </select>
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
    </div>
</div>        
  
    
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


    </body>

</html>
