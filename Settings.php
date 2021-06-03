<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">

      <div class="col-12">
        <div class="kt-portlet min_height_auto">

          <div class="kt-portlet__head align-items-center justify-content-between">
            <div class="kt-portlet__head-label d-flex justify-content-between align-items-center w_100">
              <h3 class="kt-portlet__head-title kt-font-boldest"> التحكم فى عرض التقييم </h3>

              <span class="kt-switch kt-switch--icon d-flex justify-content-between align-items-center">
                <label class="mb-0 ">
                  <input type="checkbox" checked="checked" name="">
                  <span></span>
                </label>
              </span>
            </div>
          </div>

        </div> 
      </div>

      <div class="col-12 col-md-6">
        <div class="kt-portlet">

          <div class="kt-portlet__head align-items-center justify-content-between">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title kt-font-boldest"> اضافة قسم </h3>
            </div>
          </div>

          <div class="kt-portlet__head filter">
            <form class="w_100">
              <div class="row justify-content-center mt-4">

                <div class="form-group col-10 mt-0">
                  <div class="row">
                    <div class="col-12">
                      <div class='input-group' id='kt_daterangepicker_2'>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-line-chart"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder=" القسم ">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-2 mb-0">
                  <div class="input-group">
                    <button type="submit" class="btn btn-success no_border">إضافة</button> 
                  </div>
                </div>
              </div>
            </form>
          </div>

          <!--START: DEPARTMENT TABLE-->
          <div class="container-fluid">
            <table class="table mt-5">
              <thead class="thead-dark">
                <tr>
                  <th style="width: 30px;">#</th>
                  <th class="text-center"> القسم </th>
                  <th class="action text-center">إجراء</th>
                </tr>
              </thead>

              <tbody>
                <tr class="text-center">
                  <td>1</td>
                  <td> Front-End </td>

                  <td>
                    <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_department" data-skin="dark" data-placement="top" title="تعديل البيانات">
                      <i class="la la-edit"></i>
                    </button>

                    <button class="btn btn-outline-danger btn-icon btn-circle delete" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل البيانات">
                      <i class="la la-trash-o"></i>
                    </button>
                  </td>
                </tr>

                <tr class="text-center">
                  <td>2</td>
                  <td> Back-End </td>

                  <td>
                    <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_department" data-skin="dark" data-placement="top" title="تعديل البيانات">
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
          <!--END: DEPARTMENT TABLE-->

          <!--begin::Modal-->
          <div class="modal fade" id="edit_department" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="exampleModalLabel"> تعديل القسم </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <form class="kt-form pb-0 p-3">
                    <div class="row align-items-center">

                      <div class="form-group col-12 my-3">
                        <div class="row">
                          <label class="col-form-label col-12"> اسم القسم <span class="kt-font-danger fs_15"> * </span> </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-line-chart" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control  is-invalid" placeholder=" اسم القسم ">
                          </div>
                          <div class="invalid-feedback d-block pl-2">
                            اسم القسم لايمكن ان يكون فارغ
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

      <div class="col-12 col-md-6">
        <div class="kt-portlet">

          <div class="kt-portlet__head align-items-center justify-content-between">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title kt-font-boldest"> اضافة مسمي وظيفي </h3>
            </div>
          </div>

          <div class="kt-portlet__head filter">
            <form class="w_100">
              <div class="row justify-content-center mt-4">

                <div class="form-group col-10 mt-0">
                  <div class="row">
                    <div class="col-12">
                      <div class='input-group' id='kt_daterangepicker_2'>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder=" المسمي الوظيفي ">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-2 mb-0">
                  <div class="input-group">
                    <button type="submit" class="btn btn-success no_border">إضافة</button> 
                  </div>
                </div>
              </div>
            </form>
          </div>

          <!--START: JOB TITLES TABLE-->
          <div class="container-fluid">
            <table class="table mt-5">
              <thead class="thead-dark">
                <tr>
                  <th style="width: 30px;">#</th>
                  <th class="text-center"> المسمي الوظيفي </th>
                  <th class="action text-center">إجراء</th>
                </tr>
              </thead>

              <tbody>
                <tr class="text-center">
                  <td>1</td>
                  <td> Front-End Developer </td>

                  <td>
                    <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_title" data-skin="dark" data-placement="top" title="تعديل البيانات">
                      <i class="la la-edit"></i>
                    </button>

                    <button class="btn btn-outline-danger btn-icon btn-circle delete" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل البيانات">
                      <i class="la la-trash-o"></i>
                    </button>
                  </td>
                </tr>

                <tr class="text-center">
                  <td>2</td>
                  <td> Back-End Developer </td>

                  <td>
                    <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_title" data-skin="dark" data-placement="top" title="تعديل البيانات">
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
          <!--END: JOB TITLES TABLE-->

          <!--begin::Modal-->
          <div class="modal fade" id="edit_title" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="exampleModalLabel"> تعديل المسمي الوظيفي </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <form class="kt-form pb-0 p-3">
                    <div class="row align-items-center">

                      <div class="form-group col-12 my-3">
                        <div class="row">
                          <label class="col-form-label col-12"> المسمي الوظيفي <span class="kt-font-danger fs_15"> * </span> </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control  is-invalid" placeholder=" المسمي الوظيفي ">
                          </div>
                          <div class="invalid-feedback d-block pl-2">
                            المسمي الوظيفي الوظيفي لايمكن ان يكون فارغ
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