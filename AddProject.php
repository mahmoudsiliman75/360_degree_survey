<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet min_height_auto">

      <div class="kt-portlet__head align-items-center justify-content-center">
        <div class="kt-portlet__head-label">
          <h3 class="kt-portlet__head-title kt-font-boldest"> اضافة مشروع </h3>
        </div>
      </div>

      <!--START: ADD PROJECTS FORM -->
      <div class="container">
        <form class="kt-form pb-0 p-3">
          <div class="row align-items-center">

            <div class="form-group col-12 col-md-4 mb-2">
              <div class="row">
                <label class="col-form-label col-12"> اسم المشروع </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control  is-invalid" placeholder=" اسم المشروع ">
                </div>
                <div class="invalid-feedback d-block pl-2">
                  اسم  لايمكن ان يكون فارغ
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> المسؤل عن التنفيذ <span class="kt-font-danger fs_15"> * </span> </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-select2" id="res_select2_3" name="param" multiple="multiple" placeholder="اختار الصلاحيات">
                    <option value="emp_1">موظف 1</option>
                    <option value="emp_1">موظف 2</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> المسؤل عن الاختبار </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-select2" id="test_res_select2_3" name="param" multiple="multiple" placeholder="اختار الصلاحيات">
                    <option value="emp_1">موظف 1</option>
                    <option value="emp_1">موظف 2</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> تاريخ البداية </label>
                <div class="input-group-prepend col-12">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="la la-calendar-check-o" style="font-size: 18px"></i>
                    </span>
                  </div>  
                  <input type="text" class="form-control" readonly placeholder="اختار تاريخ البداية" id="kt_datepicker_2" />              
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> تاريخ الانتهاء </label>
                <div class="input-group-prepend col-12">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="la la-calendar-check-o" style="font-size: 18px"></i>
                    </span>
                  </div>  
                  <input type="text" class="form-control" readonly placeholder="اختار تاريخ الانتهاء" id="kt_datepicker_2" />              
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> العميل </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option> اختار العميل  </option>
                    <option value="client_1"> عميل 1 </option>
                    <option value="client_2"> عميل 2 </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> حالة المشروع </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-line-chart" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option> اختار حالة المشروع  </option>
                    <option value="1"> فى انتظار بداية العمل </option>
                    <option value="2"> جارى العمل </option>
                    <option value="3"> مرحلة الاختبار </option>
                    <option value="4"> تم الانتهاء </option>
                    <option value="5"> مراجعة العميل </option>
                    <option value="6"> تم التسليم </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-8 mt-4">
              <input type="file" class="project_files" multiple>
            </div>

            <div class="form-group col-12">
              <div class="row">
                <label class="col-form-label col-12"> التفاصيل </label>
                <div class="input-group-prepend col-12">
                  <textarea class="text_editor"></textarea>
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