<section class="content">
  <div class="right_col" role="main">
     <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>
                Manage Detail of Salary
            </h3>
      </div>
        <div class="title_right"></div>
    </div>
    <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>View <small>Salary Detail List</small></h2>
            <div class="col-md col-sm col-xs form-group pull-right top_search">
              <?php echo form_open("SalaryDetail/salary_detail_add");?><button class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Add New"><i class="fa fa-plus" ></i></button>
            </div>
            <?php echo form_close();?>
        <div class="clearfix"></div>
    </div>
        <div class="x_content">
        <table id="example" class="table table-striped responsive-utilities jambo_table">
          <thead>
            <tr class="headings" >
              <th> ID </th>
              <th> Salary Id </th>
              <th> Amount </th>
              <th> Description </th>
              <th> Salary Date </th>
              <th> Type </th>
              <th> Type of Salary </th>
              <th class=" no-link last">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            foreach ($detail_gaji as $key) {
          ?>
            <tr class="even pointer">
              <td><?php echo $key['id'];?></td>
              <td class=" "><?php echo $key['id_gaji'];?></td>
              <td class=" "><?php echo $key['jumlah'];?></td>
              <td class=" "><?php echo $key['ket'];?></td>
              <td class=" "><?php echo $key['tgl'];?></td>
              <td class=" "><?php echo $key['tipe'];?></td>
              <td class=" "><?php echo $key['jenis'];?></td>
              <td class=" last" >
              <a href="<?php echo base_url('SalaryDetail/salary_detail_delete/'.$key['id']);?>" onClick="return doconfirm();"> 
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
              <a href="<?php echo base_url('SalaryDetail/salary_detail_edit/'.$key['id']);?>"> 
              <button data-placement="bottom" data-toggle="tooltip" data-original-title="Edit" class="btn btn-sm tooltips btn-primary"><i class="fa fa-edit"></i></button>
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
<br/>
<br/>
<br/>
</div>
<?php form_close();?>