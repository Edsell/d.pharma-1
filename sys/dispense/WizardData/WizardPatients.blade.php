  <!--begin::Step 1-->
  <div class="flex-column current" data-kt-stepper-element="content">
      <!--begin::Input group-->
      <div class="row mb-10 ">
          <div class="col-md-6">
              <!--begin::Label-->
              <label class="form-label">Patient's Name</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control" id="PatientName" placeholder=""
                  value="" />
              <!--end::Input-->
          </div>
          <div class="col-md-6">
              <!--begin::Label-->
              <label class="form-label">Patient's Phone</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control " id="PatientPhone" placeholder=""
                  value="" />
              <!--end::Input-->
          </div>
          <div class="col-md-4 d-none">
              <!--begin::Label-->
              <label class="form-label">Patient's Email</label>
              <!--end::Label-->

              <!--begin::Input-->
              <input type="text" class="form-control d-none" id="PatientEmail"
                  placeholder="" value="{{ md5(uniqid()) }}@email.com" />
              <!--end::Input-->
          </div>
      </div>
      <!--end::Input group-->


  </div>
  <!--begin::Step 1-->
