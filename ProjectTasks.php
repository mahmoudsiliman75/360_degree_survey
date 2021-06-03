<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

  <!-- begin:: Content -->
  <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
      <div class="kt-portlet__body">
        <div class="row">
          <div class="col-12">

            <!-- START:: PROJECT TASKS SECTION -->
            <div class="kt-portlet border rounded project_tasks">
              <div class="kt-portlet__head kt-shape-bg-color-1">
                <div class="kt-portlet__head-label d-flex align-items-center justify-content-between w-100">
                  <h2 class="kt-portlet__head-title kt-font-boldest"> المهام </h2>

                  <div class="btns-box">
                    <a href="AddTask.php" type="button" class="btn btn-outline-success mx-1 mb-1"> 
                      <i class="kt-menu__link-icon la la-clipboard la-2x"></i>  اضافة مهمة  
                    </a>
                  </div>
                </div>
              </div>

              <div class="kt-portlet__head filter">
                <form class="w_100">
                  <div class="row justify-content-center mt-4">

                  <div class="form-group col-12 col-md-3">
                    <div class="row">
                      <div class="input-group-prepend col-12">
                        <span class="input-group-text"> <i class="la la-bookmark-o" style="font-size: 18px"></i> </span>
                        <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                          <option> اختار حالة المهمة </option>
                          <option value="today"> مهام اليوم </option>
                          <option value="urgent"> مهام طارئة </option>
                          <option value="overdue"> مهام متأخرة </option>
                        </select>
                      </div>
                    </div>
                  </div>

                    <div class="form-group col-12 col-md-3 mt-0">
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

              <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="container mb-4"> 
                  <!--begin::Accordion-->
                  <div class="accordion accordion_project_tasks accordion-solid accordion-panel accordion-toggle-svg" id="project_accordion">
                    <div class="group mb-3">

                      <div class="card my-3">
                        <div class="card-header" id="accordion_project_1">
                          <div class="card-title brand_bg" data-toggle="collapse" data-target="#collapse_project_1" aria-expanded="true" aria-controls="collapse_project_1">
                            <div class="info_box">
                              <span class="mx-2 kt-font-boldest"> مجموعة مهام 1 </span>
                              <span class="kt-badge kt-badge--info kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
                                am 1 : 00 
                              </span>
                            </div>                        
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-iconbox--warning">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                              </g>
                            </svg> 
                          </div>
                        </div>
                        <div id="collapse_project_1" class="collapse show" aria-labelledby="accordion_project_1" data-parent="#project_accordion">
                          <div class="card-body p-4">
                            <div class="kt-notification-v2">
                              <span class="kt-notification-v2__item border rounded d-flex alig-items-center justify-content-center">
                                <div class="btn_box mx-3">
                                  <button class="start_btn btn btn-dark btn-sm rounded mx-1">بدء</button>
                                  <button class="finish_btn btn btn-dark btn-sm rounded mx-1">إنهاء</button>
                                </div>
                              </span>

                              <span class="kt-notification-v2__item border-bottom data">
                                <div class="kt-notification-v2">
                                  <label class="kt-checkbox kt-checkbox--info">
                                    <input type="checkbox" class="user_checkbox">
                                    <span></span>
                                  </label>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                  <div class="kt-notification-v2__item-title">
                                    مهمه 1
                                  </div>
                                  <div class="kt-notification-v2__item-desc">
                                    شرح توضيحي
                                  </div>
                                </div>
                              </span>

                              <span class="kt-notification-v2__item border-bottom data">
                                <div class="kt-notification-v2">
                                  <label class="kt-checkbox kt-checkbox--info">
                                    <input type="checkbox" class="user_checkbox">
                                    <span></span>
                                  </label>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                  <div class="kt-notification-v2__item-title">
                                    مهمه 2
                                  </div>
                                  <div class="kt-notification-v2__item-desc">
                                    شرح توضيحي
                                  </div>
                                </div>
                              </span>

                              <span class="kt-notification-v2__item border-bottom data">
                                <div class="kt-notification-v2">
                                  <label class="kt-checkbox kt-checkbox--info">
                                    <input type="checkbox" class="user_checkbox">
                                    <span></span>
                                  </label>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                  <div class="kt-notification-v2__item-title">
                                    مهمه 3
                                  </div>
                                  <div class="kt-notification-v2__item-desc">
                                    شرح توضيحي
                                  </div>
                                </div>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card my-3">
                        <div class="card-header" id="accordion_project_2">
                          <div class="card-title warning_bg collapsed" data-toggle="collapse" data-target="#collapse_project_2" aria-expanded="false" aria-controls="collapse_project_2">
                            <div class="info_box">
                              <span class="mx-2 kt-font-boldest"> مجموعة مهام 2 </span>
                              <span class="kt-badge kt-badge--warning kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
                                am 1 : 00 
                              </span>
                            </div>                          
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                              </g>
                            </svg> 
                          </div>
                        </div>
                        <div id="collapse_project_2" class="collapse" aria-labelledby="accordion_project_2" data-parent="#project_accordion">
                          <div class="card-body p-4">
                            <div class="kt-notification-v2">
                              <span class="kt-notification-v2__item border rounded d-flex alig-items-center justify-content-center">
                                <div class="btn_box mx-3">
                                  <button class="start_btn btn btn-dark btn-sm rounded mx-1">بدء</button>
                                  <button class="finish_btn btn btn-dark btn-sm rounded mx-1">إنهاء</button>
                                </div>
                              </span>

                              <span class="kt-notification-v2__item border-bottom data">
                                <div class="kt-notification-v2">
                                  <label class="kt-checkbox kt-checkbox--warning">
                                    <input type="checkbox" class="user_checkbox">
                                    <span></span>
                                  </label>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                  <div class="kt-notification-v2__item-title">
                                    مهمه 1
                                  </div>
                                  <div class="kt-notification-v2__item-desc">
                                    شرح توضيحي
                                  </div>
                                </div>
                              </span>

                              <span class="kt-notification-v2__item border-bottom data">
                                <div class="kt-notification-v2">
                                  <label class="kt-checkbox kt-checkbox--warning">
                                    <input type="checkbox" class="user_checkbox">
                                    <span></span>
                                  </label>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                  <div class="kt-notification-v2__item-title">
                                    مهمه 2
                                  </div>
                                  <div class="kt-notification-v2__item-desc">
                                    شرح توضيحي
                                  </div>
                                </div>
                              </span>

                              <span class="kt-notification-v2__item border-bottom data">
                                <div class="kt-notification-v2">
                                  <label class="kt-checkbox kt-checkbox--warning">
                                    <input type="checkbox" class="user_checkbox">
                                    <span></span>
                                  </label>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                  <div class="kt-notification-v2__item-title">
                                    مهمه 3
                                  </div>
                                  <div class="kt-notification-v2__item-desc">
                                    شرح توضيحي
                                  </div>
                                </div>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card my-3">
                        <div class="card-header" id="accordion_project_3">
                          <div class="card-title danger_bg collapsed" data-toggle="collapse" data-target="#collapse_project_3" aria-expanded="false" aria-controls="collapse_project_3">
                            <div class="info_box">
                              <span class="mx-2 kt-font-boldest"> مجموعة مهام 3 </span>
                              <span class="kt-badge kt-badge-outline kt-badge--danger  kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
                                <span class="mr-2 kt-font-boldest"> -4  </span> ساعات
                              </span>
                              <span class="kt-badge kt-badge--danger kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
                                am 1 : 00 
                              </span>
                            </div>                          
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                              </g>
                            </svg> 
                          </div>
                        </div>
                        <div id="collapse_project_3" class="collapse" aria-labelledby="accordion_project_3" data-parent="#project_accordion">
                          <div class="card-body p-4">
                            <div class="kt-notification-v2">
                              <span class="kt-notification-v2__item border rounded d-flex alig-items-center justify-content-center">
                                <div class="btn_box mx-3">
                                  <button class="start_btn btn btn-dark btn-sm rounded mx-1">بدء</button>
                                  <button class="finish_btn btn btn-dark btn-sm rounded mx-1">إنهاء</button>
                                </div>
                              </span>

                              <span class="kt-notification-v2__item border-bottom data">
                                <div class="kt-notification-v2">
                                  <label class="kt-checkbox kt-checkbox--danger">
                                    <input type="checkbox" class="user_checkbox">
                                    <span></span>
                                  </label>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                  <div class="kt-notification-v2__item-title">
                                    مهمه 1
                                  </div>
                                  <div class="kt-notification-v2__item-desc">
                                    شرح توضيحي
                                  </div>
                                </div>
                              </span>

                              <span class="kt-notification-v2__item border-bottom data">
                                <div class="kt-notification-v2">
                                  <label class="kt-checkbox kt-checkbox--danger">
                                    <input type="checkbox" class="user_checkbox">
                                    <span></span>
                                  </label>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                  <div class="kt-notification-v2__item-title">
                                    مهمه 2
                                  </div>
                                  <div class="kt-notification-v2__item-desc">
                                    شرح توضيحي
                                  </div>
                                </div>
                              </span>

                              <span class="kt-notification-v2__item border-bottom data">
                                <div class="kt-notification-v2">
                                  <label class="kt-checkbox kt-checkbox--danger">
                                    <input type="checkbox" class="user_checkbox">
                                    <span></span>
                                  </label>
                                </div>
                                <div class="kt-notification-v2__itek-wrapper">
                                  <div class="kt-notification-v2__item-title">
                                    مهمه 3
                                  </div>
                                  <div class="kt-notification-v2__item-desc">
                                    شرح توضيحي
                                  </div>
                                </div>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end::Accordion-->
                </div>
              </div>
            </div>
            <!-- END:: PROJECT TASKS SECTION -->

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end:: Content -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->