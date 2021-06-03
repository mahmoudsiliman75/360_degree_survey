<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
      <!-- START:: ARABIC QUESTIONS SECTION -->
      <div class="col-12">
        <div class="kt-portlet">

          <div class="kt-portlet__head align-items-center justify-content-between">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title kt-font-boldest"> قائمة الاسئلة بالعربية </h3>
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
                          <span class="input-group-text"><i class="la la-question-circle"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder=" السؤال بالعربية ">
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

          <!--START: ARABIC QUESTIONS TABLE-->
          <div class="container-fluid">
            <table class="table mt-5">
              <thead class="thead-dark">
                <tr>
                  <th style="width: 30px;">#</th>
                  <th class="text-center"> السؤال بالعربية </th>
                  <th class="action text-center">إجراء</th>
                </tr>
              </thead>

              <tbody>
                <tr class="text-center">
                  <td>1</td>
                  <td> 
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو
                    أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيو؟
                    </td>

                  <td>
                    <button class="btn btn-outline-danger btn-icon btn-circle delete" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل البيانات">
                      <i class="la la-trash-o"></i>
                    </button>
                  </td>
                </tr>

                <tr class="text-center">
                  <td>2</td>
                  <td> 
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو
                    أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيو؟
                    </td>

                  <td>
                    <button class="btn btn-outline-danger btn-icon btn-circle delete" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل البيانات">
                      <i class="la la-trash-o"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>  
          </div>
          <!--END: ARABIC QUESTIONS TABLE-->

        </div> 
      </div>
      <!-- END:: ARABIC QUESTIONS SECTION -->

      <!-- START:: ENGLISH QUESTIONS SECTION -->
      <div class="col-12">
        <div class="kt-portlet">

          <div class="kt-portlet__head align-items-center justify-content-between">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title kt-font-boldest"> قائمة الاسئلة بالانجليزية </h3>
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
                          <span class="input-group-text"><i class="la la-question-circle"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder=" السؤال بالانجليزية ">
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

          <!--START: ENGLISH QUESTIONS TABLE-->
          <div class="container-fluid">
            <table class="table mt-5">
              <thead class="thead-dark">
                <tr>
                  <th style="width: 30px;">#</th>
                  <th class="text-center"> السؤال بالانجليزية </th>
                  <th class="action text-center">إجراء</th>
                </tr>
              </thead>

              <tbody>
                <tr class="text-center">
                  <td>1</td>
                  <td> 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Sapiente suscipit in nam consequuntur cupiditate harum?
                  </td>

                  <td>
                    <button class="btn btn-outline-danger btn-icon btn-circle delete" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل البيانات">
                      <i class="la la-trash-o"></i>
                    </button>
                  </td>
                </tr>

                <tr class="text-center">
                  <td>2</td>
                    <td> 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Sapiente suscipit in nam consequuntur cupiditate harum?
                    </td>

                  <td>
                    <button class="btn btn-outline-danger btn-icon btn-circle delete" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل البيانات">
                      <i class="la la-trash-o"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>  
          </div>
          <!--END: ENGLISH QUESTIONS TABLE-->

        </div> 
      </div>
      <!-- END:: ENGLISH QUESTIONS SECTION -->
    </div>
	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->