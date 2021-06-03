<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
      <div class="col-12">
        <div class="kt-portlet">

          <div class="kt-portlet__head align-items-center justify-content-between">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title kt-font-boldest"> قائمة المستخدمين </h3>
            </div>

            <div class="btn_box">
              <a href="AddUser.php" type="button" class="btn btn-outline-info mx-1"> <i class="la la-plus"></i> إضافة مستخدم </a>
            </div>
          </div>

          <div class="kt-portlet__head filter">
            <form class="w_100">
              <div class="row justify-content-center mt-4">

                <div class="form-group col-4 mt-0">
                  <div class="row">
                    <div class="col-12">
                      <div class='input-group' id='kt_daterangepicker_2'>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder=" اسم المستخدم ">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-2 mb-0">
                  <div class="input-group">
                    <button type="submit" class="btn btn-success no_border">بحث</button> 
                  </div>
                </div>
              </div>
            </form>
          </div>

          <!--START: USERS TABLE-->
          <div class="container-fluid">
            <table class="table mt-5">
              <thead class="thead-dark">
                <tr>
                  <th style="width: 30px;">#</th>
                  <th class="text-center"> الاسم </th>
                  <th class="text-center"> البريد الإلكترونى </th>
                  <th class="text-center"> القسم </th>
                  <th class="text-center"> المسمى الوظيفي </th>
                  <th class="text-center"> الدور </th>
                  <th class="action text-center">إجراء</th>
                </tr>
              </thead>

              <tbody>
                <tr class="text-center">
                  <td>1</td>
                  <td> محمد سلطان </td>
                  <td> mohamedsultan@info.com </td>
                  <td> General Manager </td>
                  <td> كل حاجه </td>
                  <td> Manager </td>

                  <td>
                    <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_user_data" data-skin="dark" data-placement="top" title="تعديل البيانات">
                      <i class="la la-edit"></i>
                    </button>

                    <button class="btn btn-outline-danger btn-icon btn-circle delete" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل البيانات">
                      <i class="la la-trash-o"></i>
                    </button>
                  </td>
                </tr>

                <tr class="text-center">
                  <td>2</td>
                  <td> محمود سليمان </td>
                  <td> mahmoudsiliman@info.com </td>
                  <td> Web Development </td>
                  <td> Front-End Developer </td>
                  <td> Team Member </td>
                  <td>
                    <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_user_data" data-skin="dark" data-placement="top" title="تعديل البيانات">
                      <i class="la la-edit"></i>
                    </button>

                    <button class="btn btn-outline-danger btn-icon btn-circle delete" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل البيانات">
                      <i class="la la-trash-o"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>  
          </div>
          <!--END: USERS TABLE-->

          <!--begin::Modal-->
          <div class="modal fade" id="edit_user_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="exampleModalLabel"> تعديل بيانات المستخدم </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <form class="kt-form pb-0 p-3">
                    <div class="row align-items-center">

                      <div class="col-12 kt-widget__head d-flex flex-column justify-content-center align-items-center mt-0 mb-3">
                        <div class="kt-widget__media rounded-circle">
                          <img class="mb-3 image-preview rounded-circle" src="./assets/pics/default.jpg" alt="profile image" width="150">
                        </div>
                        <input type="file" class="image" style="margin-right: 7rem">
                      </div>

                      <div class="form-group col-12 col-md-6 mb-2 mt-4">
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

                      <div class="form-group col-12 col-md-6 mb-2">
                        <div class="row">
                          <label class="col-form-label col-12"> البريد الالكترونى <span class="kt-font-danger fs_15"> * </span> </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-at" style="font-size: 18px"></i> </span>
                            <input type="email" class="form-control" placeholder=" البريد الالكترونى ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6 mb-2">
                        <div class="row">
                          <label class="col-form-label col-12"> كلمة المرور <span class="kt-font-danger fs_15"> * </span> </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-key" style="font-size: 18px"></i> </span>
                            <input type="password" class="form-control" placeholder=" كلمة المرور ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> المسمي الوظيفي </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                            <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                              <option> اختار المسمي الوظيفي  </option>
                              <option value="1"> اختيار 1 </option>
                              <option value="2"> اختيار 2 </option>
                              <option value="3"> اختيار 3 </option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
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

                      <div class="form-group col-12 col-md-6">
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
              </div>
            </div>
          </div>
          <!--end::Modal-->

        </div> 
      </div>
    </div>
	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->