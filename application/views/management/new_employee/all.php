<section class="content">
  <div class="right_col" role="main">
    <div class="">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        <div class="x_title">
          <h2>View New Employee <small>New Employee</small></h2>
        <div class="title_right">
          <div class="col-md col-sm col-xs form-group pull-right top_search">
           <?php echo form_open('NewEmployee/new_employee_add');?>
           <button class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Add New"></a><i class="fa fa-plus"></i></button>
          </div>
        </div>
        <?php echo form_close();?>
          <div class="clearfix"></div>
        </div>
      <div class="x_content">
        <table id="example" class="table table-striped responsive-utilities jambo_table">
          <thead>
            <tr class="headings" >
              <th> ID </th>
              <th> Name </th>
              <th> Gender </th>
              <th> Email </th>
              <th> Tanggal Lamaran </th>
              <th> Status Lamaran </th>
              <th class=" no-link last">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            foreach ($calon_karyawan as $key) {
          ?>
            <tr class="even pointer">
              <td><?php echo $key['id'];?></td>
              <td class=" "><?php echo $key['nama'];?></td>
              <td class=" "><?php echo $key['jenis_kelamin'];?></td>
              <td class=" "><?php echo $key['email'];?></td>
              <td class=" "><?php echo $key['tgl_lamaran'];?></td>
              <td class=" "><?php echo $key['status_lamaran'];?></td>
              <td class=" last">
               <a href="<?php echo base_url('NewEmployee/new_employee_delete/'.$key['id']);?>" onClick="return doconfirm();"> 
              <button data-placement="bottom" data-toggle="tooltip" data-original-title="Delete" class="btn btn-sm tooltips btn-danger"><i class="fa fa-trash-o"></i></button>
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
              
              <a href="<?php echo base_url('NewEmployee/new_employee_edit/'.$key['id']);?>"> 
              <button data-placement="bottom" data-toggle="tooltip" data-original-title="Edit" class="btn btn-sm tooltips btn-dark"><i class="fa fa-eye"></i></button>

              <a href="<?php echo base_url('NewEmployee/new_employee_edit/'.$key['id']);?>"> 
              <button data-placement="bottom" data-toggle="tooltip" data-original-title="Edit" class="btn btn-sm tooltips btn-primary"><i class="fa fa-edit"></i></button>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<br/>
<br/>
<br/>
</div>