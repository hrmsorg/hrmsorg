<section class="content">
<div class="right_col" role="main">
                    

                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>
                                    Calender
                                    <small>
                                        Click to add/edit events
                                    </small>
                                </h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Calender Events <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                          <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div id='calendar'></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /footer content -->

                </div>
                <!-- Start Calender modal -->
                <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <?php echo form_open('Free/save_free_add');?><br>
                        <input type="hidden" class="form-control" name="id">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">New Calender Entry</h4>
                            </div>
                            <div class="modal-body">
                                <div id="testmodal" style="padding: 5px 20px;">
                                    <form id="antoform" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="tgl" name="tgl"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="judul" name="judul">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" style="height:55px;" id="ket" name="ket"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="x_content"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
                                </div>
                                </div>
                <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel2">Edit Calender Entry</h4>
                            </div>
                            <div class="modal-body">

                                <div id="testmodal2" style="padding: 5px 20px;">
                                    <form id="antoform2" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="tgl" name="tgl" value="<?php echo $free['tgl'] ;?>">
<                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $free['judul'] ;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" style="height:55px;" id="ket" name="ket" value="<?php echo $free['ket'] ;?>"></textarea>
                                            </div>
                                        </div>

                                    </form>
                                </div></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary antosubmit2">Save changes</button>

                <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
                <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>

                <!-- End Calender modal -->
                <!-- /page content -->

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
            </div>
        <script>
            $(window).load(function () {

                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var started;
                var categoryClass;

                var calendar = $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        $('#fc_create').click();
                        //$('#title').val(calEvent.title);
                        //console.log(calEvent.end);
                        // end.setDate(end.getDate() - 1);
                        $('#tgl').val(start._d.toLocaleDateString()+' - '+end._d.toLocaleDateString());
                        // $('#date').val(start._d.getDateString()+' - '+end._d.getDateString());
                        //console.log(start);
                        //console.log(end);
                        categoryClass = $("#event_type").val();

                        started = start;
                        ended = end

                        $(".antosubmit").on("click", function () {
                            var title = $("#title").val();
                            if (end) {
                                ended = end
                            }
                            categoryClass = $("#event_type").val();

                            if (title) {
                                calendar.fullCalendar('renderEvent', {
                                        title: title,
                                        start: started,
                                        end: end,
                                        allDay: allDay
                                    },
                                    true // make the event "stick"
                                );
                            }
                            $('#title').val($(this).data('tgl'));
                            calendar.fullCalendar('unselect');

                            $('.antoclose').click();

                            return false;
                        });
                    },
                    eventClick: function (calEvent, jsEvent, view) {
                        //alert(calEvent.title, jsEvent, view);

                        $('#fc_edit').click();
                        $('#title2').val(calEvent.title);
                        //console.log(calEvent.end);
                        $('#date2').val(start._d.toLocaleDateString()+' - '+end._d.toLocaleDateString());
                        // console.log(calEvent.end);
                        categoryClass = $("#event_type").val();

                        $(".antosubmit2").on("click", function () {
                            calEvent.title = $("#title2").val();

                            calendar.fullCalendar('updateEvent', calEvent);
                            $('.antoclose2').click();
                        });
                        calendar.fullCalendar('unselect');
                    },
                    editable: true,
                //     events: [
                //         {
                //             title: 'All Day Event',
                //             start: new Date(y, m, 1)
                //     },
                //         {
                //             title: 'Long Event',
                //             start: new Date(y, m, d - 5),
                //             end: new Date(y, m, d - 2)
                //     },
                //         {
                //             title: 'Meeting',
                //             start: new Date(y, m, d, 10, 30),
                //             allDay: false
                //     },
                //         {
                //             title: 'Lunch',
                //             start: new Date(y, m, d + 14, 12, 0),
                //             end: new Date(y, m, d, 14, 0),
                //             allDay: false
                //     },
                //         {
                //             title: 'Birthday Party',
                //             start: new Date(y, m, d + 1, 19, 0),
                //             end: new Date(y, m, d + 1, 22, 30),
                //             allDay: false
                //     },
                //         {
                //             title: 'Click for Google',
                //             start: new Date(y, m, 28),
                //             end: new Date(y, m, 29),
                //             url: 'http://google.com/'
                //     }
                // ]
                });
            });
        </script>