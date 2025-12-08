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
                  <h3 class="mb-0">User Form</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Form</li>
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
                            <div class="card-title">User Add Form</div>
                          </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                          <form class="needs-validation" novalidate action="user_controller.php" method="post">
                            <!--begin::Body-->
                              <div class="card-body">
                                <!--begin::Row-->
                                  <div class="row g-3">
                                    <!--begin::Col-->
                                      <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">First name</label>
                                          <input
                                            type="text"
                                            name="first_name"
                                            class="form-control"
                                            id="validationCustom01"
                                            value=""
                                            required
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                      <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label">Last name</label>
                                        <input
                                          type="text"
                                          name="last_name"
                                          class="form-control"
                                          id="validationCustom02"
                                          value=""
                                          required
                                        />
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                      <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label">Email</label>
                                        <input
                                          type="email"
                                          name="email"
                                          class="form-control"
                                          id="validationCustom02"
                                          value=""
                                          required
                                        />
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                      <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label">Phone</label>
                                        <input
                                          type="number"
                                          name="phone"
                                          class="form-control"
                                          id="validationCustom02"
                                          value=""
                                          required
                                        />
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                    <!--end::Col-->
                                    
                                    
                                    
                                  </div>
                                <!--end::Row-->
                              </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                              <div class="card-footer">
                                <button class="btn btn-info" type="submit">Submit form</button>
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
      
