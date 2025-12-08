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
                                    <h3 class="mb-0">Simple Tables</h3>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
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
                                            <h3 class="card-title">Users Table</h3>
                                        </div>
                                        <!-- /.card-header -->
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">Id</th>
                                                            <th style="width: 200px">First Name</th>
                                                            <th style="width: 100px">Last Name</th>
                                                            <th style="width: 200px">Email</th>
                                                            <th style="width: 20px">Phone</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
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
