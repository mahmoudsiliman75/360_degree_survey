<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!-- START:: URGENT TASKS SECTION -->
    <div class="kt-portlet rounded justify-content-between border">

      <div class="kt-portlet__head">
        <div class="kt-portlet__head-label d-flex justify-content-center w-100">
          <h2 class="kt-portlet__head-title kt-font-boldest"> الصفحة الشخصية </h2>
        </div>
      </div>

      <div class="kt-portlet__body">
        <div class="container mb-4">
          <div class="row justify-content-center align-items-center">
            <div class="col-6">
              <!-- START:: USER CARD -->
              <div class="card user_card simple_shadow">
                <img src="assets/pics/default.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <!-- START:: LIST GROUP -->
                  <div class="kt-demo">
                    <div class="kt-demo__preview">
                      <div class="kt-list-timeline">
                        <div class="kt-list-timeline__items">
                          <div class="kt-list-timeline__item">
                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                            <i class="kt-list-timeline__icon kt-font-info la la-user"></i>
                            <span class="kt-list-timeline__text">محمود سليمان <span class="kt-font-boldest mx-2"> (Front-End Developer) </span> </span>
                          </div>
                          <div class="kt-list-timeline__item">
                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                            <i class="kt-list-timeline__icon kt-font-info la la-at"></i>
                            <span class="kt-list-timeline__text"> test@technomasr.com </span>
                          </div>
                          <div class="kt-list-timeline__item">
                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                            <i class="kt-list-timeline__icon kt-font-info la la-mobile"></i>
                            <span class="kt-list-timeline__text"> 01000000001 </span>
                          </div>
                          <div class="kt-list-timeline__item">
                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                            <i class="kt-list-timeline__icon kt-font-info la la-map-marker"></i>
                            <span class="kt-list-timeline__text"> عنوان محمود سليمان </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- END:: LIST GROUP -->
                </div>
              </div>
              <!-- END:: USER CARD -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END:: URGENT TASKS SECTION -->

	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->