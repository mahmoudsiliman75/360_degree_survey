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
              <h3 class="kt-portlet__head-title kt-font-boldest"> قائمة المشاريع </h3>
            </div>

            <div class="btn_box">
              <a href="AddProject.php" type="button" class="btn btn-outline-info mx-1"> <i class="la la-plus"></i> إضافة مشروع </a>
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
                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                        </div>
                        <input type='text' class="form-control" readonly placeholder="اختار التاريخ" />
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

          <!--START: PROJECTS TABLE-->
          <div class="container">
            <table class="table mt-5">
              <thead class="thead-dark">
                <tr>
                  <th style="width: 30px;">#</th>
                  <th class="text-center"> المشروع </th>
                  <th class="text-center"> تاريخ البداية </th>
                  <th class="text-center"> تاريخ الانتهاء </th>
                  <th class="text-center"> الحالة </th>
                  <th class="action text-center">إجراء</th>
                </tr>
              </thead>

              <tbody>
                <tr class="text-center">
                  <td>1</td>
                  <td> مشروع 1 </td>
                  <td> 2021 - 4 - 15 </td>
                  <td> 2021 - 4 - 15 </td>
                  <td>
                    <span class="kt-badge kt-badge--unified-info kt-badge--lg kt-badge--rounded kt-badge--bold p-2 rounded w_auto">
                      جارى العمل
                    </span>
                  </td>

                  <td>
                    <a href="ProjectDetails.php" class="btn btn-outline-success btn-icon btn-circle" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تفاصيل المشروع">
                      <i class="la la-hdd-o"></i>
                    </a>
                  </td>
                </tr>

                <tr class="text-center">
                  <td>2</td>
                  <td> مشروع 2 </td>
                  <td> 2021 - 4 - 15 </td>
                  <td> 2021 - 4 - 15 </td>
                  <td>
                    <span class="kt-badge kt-badge--unified-danger kt-badge--lg kt-badge--rounded kt-badge--bold p-2 rounded w_auto">
                      متاخر
                    </span>
                  </td>

                  <td>
                    <a href="ProjectDetails.php" class="btn btn-outline-success btn-icon btn-circle" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تفاصيل المشروع">
                      <i class="la la-hdd-o"></i>
                    </a>
                  </td>
                </tr>

                <tr class="text-center">
                  <td>3</td>
                  <td> مشروع 3 </td>
                  <td> 2021 - 4 - 15 </td>
                  <td> 2021 - 4 - 15 </td>
                  <td>
                    <span class="kt-badge kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold p-2 rounded w_auto">
                      منتهى
                    </span>
                  </td>

                  <td>
                    <a href="ProjectDetails.php" class="btn btn-outline-success btn-icon btn-circle" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تفاصيل المشروع">
                      <i class="la la-hdd-o"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--END: PROJECTS TABLE-->

        </div> 
      </div>
    </div>
	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->