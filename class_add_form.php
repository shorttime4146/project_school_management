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
                  <h3 class="mb-0">Class Schedule Form</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Class Schedule Form</li>
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
              <div class="row g-4">              
                <!--begin::Col-->
                  <div class="col-md-12">                
                    <!--begin::Form Validation-->
                      <div class="card card-info card-outline mb-4">
                        <!--begin::Header-->
                          <div class="card-header">
                            <div class="card-title">Schedule Add Form</div>
                          </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                          <form class="needs-validation" novalidate action="class_controller.php" method="post">
                            <!--begin::Body-->
                              <div class="card-body">
                                <!--begin::Row-->
                                  <div class="row g-3">
                                    <!--begin::Col-->
                                      
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                      <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Class:</label>
                                          <?php 
                                            $class_arr=array(1=>"One", 2=>"Two", 3=>"Three", 4=>"Four", 5=>"Five");
                                          ?>
                                          <select name="class_id">
                                            <option value="">Select Class</option>
                                            <?php 
                                              foreach($class_arr as $class_id=>$val){                                                                
                                            ?>                                                            
                                            <option value="<?php echo $class_id; ?>"><?php echo $val; ?></option>
                                            <?php 
                                              } 
                                            ?>
                                          </select>
                                          <div class="valid-feedback">Looks good!</div>
                                        </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                      <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Section:</label>
                                          <?php 
                                            $sec_arr=array(1=>"A", 2=>"B", 3=>"C", 4=>"D", 5=>"E");
                                           
                                           

                                          ?>
                                          <select name="sec_id">
                                            <option value="">Select Class</option>
                                            <?php 
                                              foreach($sec_arr as $sec_id=>$val){                                                                
                                            ?>                                                            
                                            <option value="<?php echo $sec_id; ?>"><?php echo $val; ?></option>
                                            <?php 
                                              } 
                                            ?>
                                          </select>
                                          <div class="valid-feedback">Looks good!</div>
                                        </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                      
                                    <!--end::Col-->
                                    
                                    
                                    
                                  </div>
                                <!--end::Row-->
                              </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                              <div class="card-footer">
                                <button class="btn btn-info" type="submit">Save</button>
                                <button class="btn btn-info" type="submit">Reset</button>
                              </div>
                            <!--end::Footer-->
                          </form>
                        <!--end::Form-->
                        <!--begin::JavaScript-->
                          <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (() => {
                              'use strict';

                              // Fetch all the forms we want to apply custom Bootstrap validation styles to
                              const forms = document.querySelectorAll('.needs-validation');

                              // Loop over them and prevent submission
                              Array.from(forms).forEach((form) => {
                                form.addEventListener(
                                  'submit',
                                  (event) => {
                                    if (!form.checkValidity()) {
                                      event.preventDefault();
                                      event.stopPropagation();
                                    }

                                    form.classList.add('was-validated');
                                  },
                                  false,
                                );
                              });
                            })();
                          </script>
                        <!--end::JavaScript-->
                      </div>
                    <!--end::Form Validation-->
                  </div>
                <!--end::Col-->
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
      
