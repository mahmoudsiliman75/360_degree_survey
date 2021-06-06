<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet min_height_auto">

      <div class="kt-portlet__head align-items-center justify-content-center">
        <div class="kt-portlet__head-label">
          <h3 class="kt-portlet__head-title kt-font-boldest"> اضافة مستخدم </h3>
        </div>
      </div>

      <!--START: ADD PROJECTS FORM -->
      <div class="container">
        <form class="kt-form pb-0 p-3">
          <div class="row align-items-center">

            <div class="col-12 kt-widget__head d-flex flex-column justify-content-center align-items-center mt-0 mb-3">
              <div class="kt-widget__media rounded-circle">
                <img class="mb-3 image-preview rounded-circle" src="./assets/pics/default.jpg" alt="profile image" width="150">
              </div>
              <input type="file" class="image" style="margin-right: 7rem">
            </div>

            <div class="form-group col-12 col-md-4 mb-2 mt-4">
              <div class="row">
                <label class="col-form-label col-12"> اسم المستخدم <span class="kt-font-danger fs_15"> * </span> </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control  is-invalid" placeholder=" اسم المستخدم ">
                </div>
                <div class="invalid-feedback d-block pl-2">
                  اسم المستخدم لايمكن ان يكون فارغ
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4 mb-2">
              <div class="row">
                <label class="col-form-label col-12"> البريد الالكترونى <span class="kt-font-danger fs_15"> * </span> </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-at" style="font-size: 18px"></i> </span>
                  <input type="email" class="form-control" placeholder=" البريد الالكترونى ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4 mb-2">
              <div class="row">
                <label class="col-form-label col-12"> كلمة المرور <span class="kt-font-danger fs_15"> * </span> </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-key" style="font-size: 18px"></i> </span>
                  <input type="password" class="form-control" placeholder=" كلمة المرور ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> المسمي الوظيفي </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option> اختار المسمي الوظيفي  </option>
                    <option value="1"> اختيار 1 </option>
                    <option value="2"> اختيار 2 </option>
                    <option value="3"> اختيار 3 </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12">  القسم </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-line-chart" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option> اختار القسم  </option>
                    <option value="1"> اختيار 1 </option>
                    <option value="2"> اختيار 2 </option>
                    <option value="3"> اختيار 3 </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> الدور </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-star" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option> اختار الدور  </option>
                    <option value="1"> اختيار 1 </option>
                    <option value="2"> اختيار 2 </option>
                    <option value="3"> اختيار 3 </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-3 px-4">
              <div class="input-group">
                <div class="row">
                  <button type="submit" class="btn btn-success" style="background-color:#17b978; border:none;">حفظ</button> 
                </div>
              </div>
            </div>

          </div>
        </form>
      </div>
      <!--END: ADD PROJECTS FORM -->

    </div> 
	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->