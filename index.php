<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!-- START:: DEVELOPER HOME PAGE -->
    <h2 class="text-center mb-4"> For Developer </h2>
    <div class="row">
      <div class="col-6">
        <!-- START:: URGENT TASKS SECTION -->
        <div class="kt-portlet border border-warning rounded urgent_tasks">

          <div class="kt-portlet__head" style="background-color: #fffef0;">
            <div class="kt-portlet__head-label d-flex justify-content-center w-100">
              <h2 class="kt-portlet__head-title kt-font-warning kt-font-boldest"> تعديلات طارئة </h2>
            </div>
          </div>

          <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="container"> 
              <!--begin::Accordion-->
              <div class="accordion accordion_urgent_tasks accordion-solid accordion-panel accordion-toggle-svg" id="urgent_accordion">
                <div class="group border-bottom mb-5">
                  <div class="project_title_wraper d-flex align-items-center justify-content-between mt-3">
                    <h4> اسم المشروع </h4>
                    <span class="kt-badge kt-badge--warning kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
                      am 1 : 00 
                    </span>
                  </div>

                  <div class="card my-3">
                    <div class="card-header" id="accordion_urgent_1">
                      <div class="card-title warning_bg" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">

                        <div class="info_box">
                          <span class="mx-2 kt-font-boldest"> مجموعة مهام 1 </span>
                          <span class="kt-badge kt-badge--warning kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
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
                    <div id="collapse_1" class="collapse show" aria-labelledby="accordion_urgent_1" data-parent="#urgent_accordion">
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
                    <div class="card-header" id="accordion_urgent_2">
                      <div class="card-title collapsed warning_bg" data-toggle="collapse" data-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">

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
                    <div id="collapse_2" class="collapse" aria-labelledby="accordion_urgent_2" data-parent="#urgent_accordion">
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

                </div>
              </div>
              <!--end::Accordion-->
            </div>
          </div>
        </div>
        <!-- END:: URGENT TASKS SECTION -->
      </div>

      <div class="col-6">

        <!-- START:: DAY TASKS SECTION -->
        <div class="kt-portlet border border-primary rounded day_tasks">
          <div class="kt-portlet__head kt-shape-bg-color-2">
            <div class="kt-portlet__head-label d-flex justify-content-center w-100">
              <h2 class="kt-portlet__head-title kt-font-primary kt-font-boldest"> مهام اليوم </h2>
            </div>
          </div>

          <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="container"> 
              <!--begin::Accordion-->
              <div class="accordion accordion_day_tasks accordion-solid accordion-panel accordion-toggle-svg" id="day_accordion">
                <div class="group border-bottom mb-5">
                  <div class="project_title_wraper d-flex align-items-center justify-content-between mt-3">
                    <h4> اسم المشروع </h4>
                    <span class="kt-badge kt-badge--info kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
                      am 1 : 00 
                    </span>
                  </div>

                  <div class="card my-3">
                    <div class="card-header" id="accordion_day_1">
                      <div class="card-title brand_bg" data-toggle="collapse" data-target="#collapse_day_1" aria-expanded="true" aria-controls="collapse_day_1">
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
                    <div id="collapse_day_1" class="collapse show" aria-labelledby="accordion_day_1" data-parent="#day_accordion">
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
                    <div class="card-header" id="accordion_day_2">
                      <div class="card-title collapsed brand_bg" data-toggle="collapse" data-target="#collapse_day_2" aria-expanded="false" aria-controls="collapse_day_2">
                        <div class="info_box">
                          <span class="mx-2 kt-font-boldest"> مجموعة مهام 2 </span>
                          <span class="kt-badge kt-badge--info kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
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
                    <div id="collapse_day_2" class="collapse" aria-labelledby="accordion_day_2" data-parent="#urgent_accordion">
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
                </div>
              </div>
              <!--end::Accordion-->
            </div>
          </div>
        </div>
        <!-- END:: DAY TASKS SECTION -->

      </div>

      <div class="col-12">

        <!-- START:: OVERDUE TASKS SECTION -->
        <div class="kt-portlet border border-danger rounded overdue_tasks">
          <div class="kt-portlet__head" style="background-color: #fff0f0;">
            <div class="kt-portlet__head-label d-flex justify-content-center w-100">
            <h2 class="kt-portlet__head-title kt-font-danger kt-font-boldest"> مهام متاخرة </h2>
            </div>
          </div>

          <div class="container">
            <!--begin::Accordion-->
            <div class="accordion accordion_overdue_tasks accordion-solid accordion-panel accordion-toggle-svg" id="overdue_accordion">
              <div class="group border-bottom mb-5">
                <div class="project_title_wraper d-flex align-items-center justify-content-between mt-3">
                  <h4> اسم المشروع </h4>
                  <span class="kt-badge kt-badge--danger kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
                    am 1 : 00 
                  </span>
                </div>

                <div class="card my-3">
                  <div class="card-header" id="accordion_overdue_1">
                    <div class="card-title danger_bg" data-toggle="collapse" data-target="#collapse_overdue_1" aria-expanded="true" aria-controls="collapse_overdue_1">
                      <div class="info_box">
                        <span class="mx-2 kt-font-boldest"> مجموعة مهام 1 </span>
                        <span class="kt-badge kt-badge-outline kt-badge--danger  kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
                          <span class="mr-2 kt-font-boldest"> -4  </span> ساعات
                        </span>
                        <span class="kt-badge kt-badge--danger kt-badge--lg kt-badge--rounded p-2 rounded text-white w_auto">
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
                  <div id="collapse_overdue_1" class="collapse show" aria-labelledby="accordion_overdue_1" data-parent="#overdue_accordion">
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
        <!-- END:: OVERDUE TASKS SECTION -->

      </div>

    </div>
    <!-- END:: DEVELOPER HOME PAGE -->

    <!-- START:: PROJECT MANAGER HOME PAGE -->
    <h2 class="text-center mt-5 mb-4"> For Project Manager </h2>
    <div class="kt-portlet border rounded">
      <div class="kt-portlet__head kt-shape-bg-color-1">
        <div class="kt-portlet__head-label d-flex justify-content-center w-100">
          <h2 class="kt-portlet__head-title kt-font-boldest"> جميع المهام </h2>
        </div>
      </div>

      <div class="kt-portlet__body">
        <div class="row">
          <div class="col-12">

            <!-- START:: PROJECT MANAGER ALL TASKS SECTION -->
            <div class="kt-portlet">

              <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="container mb-4"> 
                  <!--begin::Accordion-->
                  <div class="accordion accordion_project_tasks accordion-solid accordion-panel accordion-toggle-svg" id="project_accordion">
                    <div class="group mb-3">

                      <div class="card my-3">
                        <div class="card-header" id="accordion_project_1">
                          <div class="card-title brand_bg" data-toggle="collapse" data-target="#collapse_project_1" aria-expanded="true" aria-controls="collapse_project_1">
                            <div class="info_box">
                              <span class="mx-2 kt-font-boldest"> مجموعة مهام 1 <span class=" kt-font-boldest kt-label-font-color-2"> (موظف 1)</span> </span>
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
                              <span class="mx-2 kt-font-boldest"> مجموعة مهام 2 <span class=" kt-font-boldest kt-label-font-color-2"> (موظف 1)</span> </span>
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
                              <span class="mx-2 kt-font-boldest"> مجموعة مهام 3 <span class=" kt-font-boldest kt-label-font-color-2"> (موظف 2)</span> </span>
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
            <!-- END:: PROJECT MANAGER ALL TASKS SECTION -->

          </div>
        </div>
      </div>
    </div>

    <div class="kt-portlet border rounded">
      <div class="kt-portlet__head kt-shape-bg-color-1">
        <div class="kt-portlet__head-label d-flex justify-content-center w-100">
          <h2 class="kt-portlet__head-title kt-font-boldest"> المهام حسب الموظف </h2>
        </div>
      </div>

      <div class="kt-portlet__body">
        <div class="row">
          <div class="col-12">

            <!-- START:: PROJECT MANAGER ALL TASKS SECTION -->
            <div class="kt-portlet">

              <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="container mb-4"> 
                  <!--begin::Accordion-->
                  <div class="accordion accordion-solid accordion-panel accordion-toggle-svg" id="tasks_by_emp_1_accordion">
                    <div class="group border rounded p-3 mb-5">
                      <div class="emp_title_wraper d-flex align-items-center justify-content-between mt-3">
                        <h4> موظف 1 </h4>
                      </div>

                      <div class="card my-3">
                        <div class="card-header" id="accordion_emp_1_1">
                          <div class="card-title brand_bg" data-toggle="collapse" data-target="#collapse_emp_1_1" aria-expanded="true" aria-controls="collapse_emp_1_1">
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
                        <div id="collapse_emp_1_1" class="collapse show" aria-labelledby="accordion_emp_1_1" data-parent="#day_accordion">
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
                        <div class="card-header" id="accordion_emp_1_2">
                          <div class="card-title collapsed warning_bg" data-toggle="collapse" data-target="#collapse_emp_1_2" aria-expanded="false" aria-controls="collapse_emp_1_2">
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
                        <div id="collapse_emp_1_2" class="collapse" aria-labelledby="accordion_emp_1_2" data-parent="#urgent_accordion">
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
                        <div class="card-header" id="accordion_emp_1_3">
                          <div class="card-title collapsed danger_bg" data-toggle="collapse" data-target="#collapse_emp_1_3" aria-expanded="false" aria-controls="collapse_emp_1_3">
                            <div class="info_box">
                              <span class="mx-2 kt-font-boldest"> مجموعة مهام 2 </span>
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
                        <div id="collapse_emp_1_3" class="collapse" aria-labelledby="accordion_emp_1_3" data-parent="#urgent_accordion">
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

                  <div class="accordion accordion-solid accordion-panel accordion-toggle-svg" id="tasks_by_emp_2_accordion">
                    <div class="group border rounded p-3 mb-5">
                      <div class="emp_title_wraper d-flex align-items-center justify-content-between mt-3">
                        <h4> موظف 2 </h4>
                      </div>

                      <div class="card my-3">
                        <div class="card-header" id="accordion_emp_2_1">
                          <div class="card-title brand_bg" data-toggle="collapse" data-target="#collapse_emp_2_1" aria-expanded="true" aria-controls="collapse_emp_2_1">
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
                        <div id="collapse_emp_2_1" class="collapse show" aria-labelledby="accordion_emp_2_1" data-parent="#day_accordion">
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
                        <div class="card-header" id="accordion_emp_2_2">
                          <div class="card-title collapsed warning_bg" data-toggle="collapse" data-target="#collapse_emp_2_2" aria-expanded="false" aria-controls="collapse_emp_2_2">
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
                        <div id="collapse_emp_2_2" class="collapse" aria-labelledby="accordion_emp_2_2" data-parent="#urgent_accordion">
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
                        <div class="card-header" id="accordion_emp_2_3">
                          <div class="card-title collapsed danger_bg" data-toggle="collapse" data-target="#collapse_emp_2_3" aria-expanded="false" aria-controls="collapse_emp_2_3">
                            <div class="info_box">
                              <span class="mx-2 kt-font-boldest"> مجموعة مهام 2 </span>
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
                        <div id="collapse_emp_2_3" class="collapse" aria-labelledby="accordion_emp_2_3" data-parent="#urgent_accordion">
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
            <!-- END:: PROJECT MANAGER ALL TASKS SECTION -->

          </div>
        </div>
      </div>
    </div>
    <!-- END:: PROJECT MANAGER HOME PAGE -->

	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->