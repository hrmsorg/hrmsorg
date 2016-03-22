<div class="row">

                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                              <div class="x_title">
                                  <h2>View New Employee <small>All New Employee</small></h2>

                                  <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                  <table id="example" class="table table-striped responsive-utilities jambo_table" style="">
                                      <thead>
                                          
                                   <tr class="headings">

                                              <th>ID</th>
                                              <th>Name </th>
                                              <th>Gender </th>
                                              <th>Identity Number </th>
                                              <th>Email </th>
                                              <th>Status Lamaran </th>
                                              <th class=" no-link last" colspan="2"><span class="nobr">Action</span></th>
                                              
                                          </tr>
                                      </thead>

                                      <tbody>
                                          <?php
                                            foreach ($calon_karyawan as $key) {
                                          ?>
                                          <tr class="even pointer">
                                                <td><?php echo $key['id'];?></td>
                                                <td ><?php echo $key['nama'];?></td>
                                                <td><?php echo $key['jenis_kelamin'];?></td>
                                                <td><?php echo $key['no_ktp'];?></td>
                                                <td><?php echo $key['email'];?></td>
                                                <td><?php echo $key['status_lamaran'];?></td>
                                                <!-- <td><?php echo $key['foto'];?></td> -->

                                          <td><a href="<?php echo base_url("NewEmployee/new_employee_delete/".$key['id']);?>" onClick="return doconfirm();">Delete</a>
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
                                                  <td class=" last"><a href="<?php echo base_url("NewEmployee/new_employee_edit/".$key['id']);?>">Edit</a>
                                             
                                          </tr>
                                            <?php
                                                }
                                            ?>
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
