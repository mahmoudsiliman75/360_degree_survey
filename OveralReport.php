<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">

      <!-- START:: FILTERS SECTION -->
      <div class="col-12">
        <div class="kt-portlet min_height_auto">
          <div class="kt-portlet__head align-items-center justify-content-between">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title kt-font-boldest"> التقرير الكلى </h3>
            </div>

            <div class="wraper">
              <a href="DepartmentsReports.php" class="btn btn-outline-info mx-1"> 
                <i class="la la-bar-chart-o"></i> 
                تقارير الاقسام
              </a>

              <button class="btn btn-outline-success mx-1"> 
                <i class="la la-file-excel-o"></i> 
                Download Excel File 
              </button>
            </div>
          </div>

          <div class="kt-section__content py-2 px-4">
            <div class="filter">
              <form class="w_100">
                <div class="row justify-content-between my-4">

                  <div class="wraper col-12 col-md-6 d-flex justify-content-start align-items-center">
                    <div class="form-group mb-0 w_80">
                      <div class="row">
                        <div class="col-12">
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-star-o" style="font-size: 18px"></i> </span>
                            <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                              <option> اختار شهر التقييم  </option>
                              <option value="1"> فبراير 2021 </option>
                              <option value="2"> مايو 2021 </option>
                              <option value="3"> اغسطس 2021 </option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group mb-0">
                      <div class="input-group">
                        <button type="submit" class="btn btn-success no_border">بحث</button> 
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END:: FILTERS SECTION -->

      <!-- START:: PROGRESS BAR SECTION -->
      <div class="col-12">
        <div class="kt-portlet px-4 min_height_auto">
          <div class="row justify-content-between">
            <div class="kt-section__content py-4 col-6">
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
              </div>
            </div>

            <div class="col-3 d-flex justify-content-end align-items-center">
              <div class="persons_counter ltr_dir">
                <span>
                  <i class="la la-user la-2x"></i>
                </span>
                <span class="fs_25 margin">
                  : 30  / 40
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END:: PROGRESS BAR SECTION -->

      <!-- START:: RATINGS TABLES ECTION -->
      <div class="col-12 col-md-7">
        <div class="kt-portlet py-3">

          <!--START: RATING QUESTIONS TABLE-->
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-12">
                <table class="table mt-3">
                  <thead class="thead-dark">
                    <tr>
                      <th style="width: 30px;">#</th>
                      <th class="text-center"> السؤال </th>
                      <th class="text-center" style="width: 161px;"> التقييم </th>

                    </tr>
                  </thead>

                  <tbody>
                    <tr class="text-center">
                      <td>1</td>
                      <td> 
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود؟
                      </td>
                      <td>
                        <div class="wraper text-right">
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                        </div>
                      </td>
                    </tr>

                    <tr class="text-center">
                      <td>2</td>
                      <td> 
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود؟  
                      </td>
                      <td>
                        <div class="wraper text-right">
                          <span> <i class="la la-star-half-o la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                        </div>
                      </td>
                    </tr>

                    <tr class="text-center">
                      <td>3</td>
                      <td> 
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود؟
                      </td>
                      <td>
                        <div class="wraper text-right">
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                        </div>
                      </td>
                    </tr>

                    <tr class="text-center">
                      <td>4</td>
                      <td> 
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود؟
                      </td>
                      <td>
                        <div class="wraper text-right">
                          <span> <i class="la la-star-half-o la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                        </div>
                      </td>
                    </tr>

                    <tr class="text-center">
                      <td>5</td>
                      <td> 
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود؟
                      </td>
                      <td>
                        <div class="wraper text-right">
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                          <span> <i class="la la-star la-2x kt-font-warning"></i> </span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>  
              </div>
            </div>
          </div>
          <!--END: RATING QUESTIONS TABLE--> 

        </div> 
      </div>
      <!-- END:: RATINGS TABLES ECTION -->

      <!-- START:: RATINGS GRAPH ECTION -->
      <div class="col-12 col-md-5">
        <div class="kt-portlet min_height_auto p-4">
          <canvas id="myChart" width="400" height="400"></canvas>
        </div> 
      </div>
      <!-- END:: RATINGS GRAPH ECTION -->
    </div>
	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->