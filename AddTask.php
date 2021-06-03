<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

  <!-- begin:: Content -->
  <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet min_height_auto">

      <div class="kt-portlet__head align-items-center justify-content-center">
        <div class="kt-portlet__head-label">
          <h3 class="kt-portlet__head-title kt-font-boldest"> اضافة مهمة </h3>
        </div>
      </div>

      <!--START: ADD TASK FORM -->
      <div class="container">
        <form class="kt-form pb-0 p-3">
          <div class="row align-items-center">
            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> المشروع </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option> اختار المشروع  </option>
                    <option value="emp_1"> مشروع 1 </option>
                    <option value="emp_2">  مشروع 2 </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> مجموعة مهام </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" placeholder=" مجموعة مهام ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> مجموعة النقاط الاساسية </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-star-o" style="font-size: 18px"></i> </span>
                  <input type="number" min="0"  class="form-control" placeholder=" مجموعة النقاط الاساسية ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> مجموعة النقاط فى حالة التأخير </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-star-o" style="font-size: 18px"></i> </span>
                  <input type="number" min="0" class="form-control" placeholder=" مجموعة النقاط فى حالة التأخير  ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> مجموعة النقاط فى حالة التسليم مبكرا </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-star-o" style="font-size: 18px"></i> </span>
                  <input type="number" min="0" class="form-control" placeholder=" مجموعة النقاط فى حالة التسليم مبكرا  ">
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

            <div class="form-group col-12 col-md-4 mb-2">
              <div class="row">
                <label class="col-form-label col-12"> تاريخ الانتهاء </label>
                <div class="input-group-prepend col-12">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="la la-calendar-check-o" style="font-size: 18px"></i>
                    </span>
                  </div>  
                  <input type="text" class="form-control is-invalid" readonly placeholder="اختار تاريخ الانتهاء" id="kt_datepicker_2" />              
                </div>
                <div class="invalid-feedback d-block pl-2">
                  يجب تحديد تاريخ انتهاء  
                </div>
              </div>
            </div>

            <div id="kt_repeater_1" class="form-group col-12">

              <div class="form-group form-group-last row mb-3">
                <div>
                  <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-md btn-label-brand">
                    <i class="la la-plus"></i> اضافة مهمة لمجموعة المهام
                  </a>
                </div>
              </div>

              <div class="form-group form-group-last row" id="kt_repeater_1">
                <div data-repeater-list="" class="col-12">
                  <div data-repeater-item class="form-group row align-items-center">

                    <div class="col-12 my-2">
                      <div class="kt-form__group--inline">
                        <div class="kt-form__label">
                          <label>اسم المهمه</label>
                        </div>
                        <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                          <input type="text" class="form-control" placeholder=" اسم المهمه ">
                        </div>
                      </div>
                      <div class="d-md-none kt-margin-b-10"></div>
                    </div>

                    <div class="form-group col-12">
                      <div class="row">
                        <label class="col-form-label col-12"> الشرح التوضيحي </label>
                        <div class="input-group-prepend col-12">
                          <textarea class="form-control" rows ="5"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="col-4 my-2">
                      <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                        <i class="la la-trash-o"></i>
                        حذف
                      </a>
                    </div>
                  </div>
                </div>
              </div>

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
      <!--END: ADD TASK FORM -->

    </div> 
  </div>
  <!-- end:: Content -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->