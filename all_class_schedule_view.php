<?php 
    require('config.php');
    
    $result=select_sql("class_schedule");
?>

<!--begin::Header-->
  <?php require 'header.php'; ?>
<!--end::Header-->

<!--begin::Menu-->
  <?php 
    require 'header_menu.php';
    require 'side_menu.php'; 
  ?>
<!--end::Menu-->
<!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Row-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="mb-0">Class Schedule Tables</h3>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Class Schedule Tables</li>
                                    </ol>
                                </div>
                            </div>
                        <!--end::Row-->
                    </div>
                <!--end::Container-->
            </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h3 class="card-title">Class Schedule Table</h3>
                                        </div>
                                        <!-- /.card-header -->
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr align="center">
                                                            <th style="width: 10px">Id</th>
                                                            <th style="width: 20px">Teacher Id</th>
                                                            <th style="width: 20px">Class Id</th>
                                                            <th style="width: 20px">Section Id</th>
                                                            <th style="width: 20px">Subject Id</th>
                                                            <th style="width: 20px">Class Time</th>
                                                            <th style="width: 20px">Class Date</th>
                                                            <th style="width: 20px">Inserted By</th>
                                                            <th style="width: 20px">Insert Date</th>
                                                            <th style="width: 20px">Updated By</th>
                                                            <th style="width: 20px">Update Date</th>
                                                            <th style="width: 20px">Is Deleted</th>
                                                            <th style="width: 100px" colspan="2">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            foreach($result as $row){
                                                        ?>
                                                        <tr>
                                                            <td width="50px"><?php echo $row["id"]; ?></td>
                                                            <td width="20px"><?php echo $row["teacher_id"]; ?></td>
                                                            <td width="20px"><?php echo $row["class_id"]; ?></td>
                                                            <td width="20px"><?php echo $row["section_id"]; ?></td>
                                                            <td width="20px"><?php echo $row["subject_id"]; ?></td>
                                                            <td width="20px"><?php echo $row["class_time"]; ?></td>
                                                            <td width="20px"><?php echo $row["class_date"]; ?></td>
                                                            <td width="20px"><?php echo $row["inserted_by"]; ?></td>
                                                            <td width="20px"><?php echo $row["insert_date"]; ?></td>
                                                            <td width="20px"><?php echo $row["updated_by"]; ?></td>
                                                            <td width="20px"><?php echo $row["update_date"]; ?></td>
                                                            <td width="20px"><?php echo $row["is_deleted"]; ?></td>
                                                            <td width="50px" align="center">                
                                                                <a href="class_update_form.php?up_id=<?php echo $row['id']; ?>">Update</a>
                                                            </td>
                                                            <td width="50px" align="center">
                                                                <a href="class_delete_controller.php?del_id=<?php echo $row['id']; ?>">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php 
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <!-- /.card-body -->
                                            <div class="card-footer clearfix">
                                                <ul class="pagination pagination-sm m-0 float-end">
                                                <li class="page-item">
                                                    <a class="page-link" href="#">&laquo;</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">&raquo;</a>
                                                </li>
                                                </ul>
                                            </div>
                                    </div>                                
                                </div>                           
                            </div>
                        <!--end::Row-->
                    </div>
                <!--end::Container-->
            </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
<!--begin::Footer-->
  <?php require 'footer.php'; ?>
<!--end::Footer-->
