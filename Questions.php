<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
      <!-- START:: QUESTIONS SECTION -->
      <div class="col-12">
        <div class="kt-portlet">

          <div class="kt-portlet__head align-items-center justify-content-between">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title kt-font-boldest"> قائمة الاسئلة </h3>
            </div>
          </div>

          <div class="kt-portlet__head filter">
            <form class="w_100">
              <div class="row justify-content-center my-4">

                <div class="wraper col-12 col-md-6 d-flex justify-content-center align-items-center">
                  <div class="form-group w_80 mb-0">
                    <div class='input-group'>
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="la la-question-circle"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder=" السؤال بالعربية ">
                    </div>
                  </div>

                  <div class="form-group mb-0 mx-2">
                    <div class="input-group">
                      <button type="submit" class="btn btn-success no_border">إضافة</button> 
                    </div>
                  </div>
                </div>

                <div class="wraper col-12 col-md-6 d-flex justify-content-center align-items-center">
                  <div class="form-group w_80 mb-0">
                    <div class='input-group'>
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="la la-question-circle"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder=" السؤال بالإنجليزية ">
                    </div>
                  </div>

                  <div class="form-group mb-0 mx-2">
                    <div class="input-group">
                      <button type="submit" class="btn btn-success no_border">إضافة</button> 
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <!--START:: QUESTIONS TABLE-->
          <div class="container-fluid">
            <div class="row justify-content-center">
              <table class="col-12 col-md-10 table mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 30px;">#</th>
                    <th class="text-center"> السؤال </th>
                    <th class="action text-center">إجراء</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="text-center">
                    <td>1</td>
                    <td>
                      <p class="arabic_question my-3">
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو
                        أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا؟
                      </p>

                      <p class="english_question my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Sapiente suscipit in nam consequuntur cupiditate harum?
                      </p> 
                    </td>

                    <td>
                      <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_user_data" data-skin="dark" data-placement="top" title="تعديل البيانات">
                        <i class="la la-edit"></i>
                      </button>
                    </td>
                  </tr>

                  <tr class="text-center">
                    <td>2</td>
                    <td>
                      <p class="arabic_question my-3">
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو
                        أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا؟
                      </p>

                      <p class="english_question my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Sapiente suscipit in nam consequuntur cupiditate harum?
                      </p> 
                    </td>

                    <td>
                      <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_user_data" data-skin="dark" data-placement="top" title="تعديل البيانات">
                        <i class="la la-edit"></i>
                      </button>
                    </td>
                  </tr>

                  <tr class="text-center">
                    <td>3</td>
                    <td>
                      <p class="arabic_question my-3">
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو
                        أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا؟
                      </p>

                      <p class="english_question my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Sapiente suscipit in nam consequuntur cupiditate harum?
                      </p> 
                    </td>

                    <td>
                      <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_user_data" data-skin="dark" data-placement="top" title="تعديل البيانات">
                        <i class="la la-edit"></i>
                      </button>
                    </td>
                  </tr>

                  <tr class="text-center">
                    <td>4</td>
                    <td>
                      <p class="arabic_question my-3">
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو
                        أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا؟
                      </p>

                      <p class="english_question my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Sapiente suscipit in nam consequuntur cupiditate harum?
                      </p> 
                    </td>

                    <td>
                      <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_user_data" data-skin="dark" data-placement="top" title="تعديل البيانات">
                        <i class="la la-edit"></i>
                      </button>
                    </td>
                  </tr>

                  <tr class="text-center">
                    <td>5</td>
                    <td>
                      <p class="arabic_question my-3">
                        لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو
                        أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا؟
                      </p>

                      <p class="english_question my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Sapiente suscipit in nam consequuntur cupiditate harum?
                      </p> 
                    </td>

                    <td>
                      <button type="button" class="btn btn-outline-success btn-icon btn-circle" data-toggle="modal" data-target="#edit_user_data" data-skin="dark" data-placement="top" title="تعديل البيانات">
                        <i class="la la-edit"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>  
            </div>

            <!--statr::Modal-->
            <div class="modal fade" id="edit_user_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel"> تعديل الاسئلة </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="w_100">
                      <div class="row justify-content-center my-4">

                        <div class="wraper col-12 my-3 d-flex justify-content-center align-items-center">
                          <div class="form-group w_80 mb-0">
                            <div class='input-group'>
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="la la-question-circle"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder=" السؤال بالعربية ">
                            </div>
                          </div>

                          <div class="form-group mb-0 mx-2">
                            <div class="input-group">
                              <button type="submit" class="btn btn-success no_border">إضافة</button> 
                            </div>
                          </div>
                        </div>

                        <div class="wraper col-12 my-3 d-flex justify-content-center align-items-center">
                          <div class="form-group w_80 mb-0">
                            <div class='input-group'>
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="la la-question-circle"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder=" السؤال بالإنجليزية ">
                            </div>
                          </div>

                          <div class="form-group mb-0 mx-2">
                            <div class="input-group">
                              <button type="submit" class="btn btn-success no_border">إضافة</button> 
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
          <!--END:: QUESTIONS TABLE-->

        </div> 
      </div>
      <!-- END:: QUESTIONS SECTION -->
    </div>
	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->