<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

  <!-- begin:: Content -->
  <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet min_height_auto">
      <div class="kt-portlet__body">
        <div class="kt-widget kt-widget--user-profile-3">
          <div class="kt-widget__top">
            <div class="kt-widget__content">
              <div class="kt-widget__info row">
                <div class="col-6 d-flex align-items-center"> 
                  <h2>مشروع 1 </h2>
                </div>

                <div class="kt-widget__stats flex-fill col-6">
                  <div class="kt-widget__item">
                    <span class="kt-widget__date">
                      تاريخ النهاية
                    </span>
                    <div class="kt-widget__label">
                      <span class="btn btn-label-danger btn-sm btn-bold btn-upper"> 2021 - 4 - 15 </span>
                    </div>
                  </div>
                  <div class="kt-widget__item flex-fill">
                    <span class="kt-widget__subtitel">مؤشر التقدم</span>
                    <div class="kt-widget__progress d-flex  align-items-center">
                      <div class="progress" style="height: 5px;width: 100%;">
                        <div class="progress-bar kt-bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="kt-widget__stat">
                        60%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="kt-widget__bottom">

            <div class="kt-widget__item">
              <div class="kt-widget__icon">
                <i class="flaticon-pie-chart"></i>
              </div>
              <div class="kt-widget__details">
                <span class="kt-widget__title"> <a href="ProjectTasks.php">مهام</a> </span>
                <span class="kt-widget__value">3</span>
              </div>
            </div>

            <div class="kt-widget__item">
              <div class="kt-widget__icon">
                <i class="flaticon-file-2"></i>
              </div>
              <div class="kt-widget__details">
                <span class="kt-widget__title"><a href="ProjectAttachments.php">الوصف و الملحقات</a></span>
                <span class="kt-widget__value">5</span>
              </div>
            </div>

            <div class="kt-widget__item">
              <div class="kt-widget__icon">
                <i class="flaticon-chat-1"></i>
              </div>
              <div class="kt-widget__details">
                <span class="kt-widget__title"><a href="ProjectComments.php">التعليقات</a></span>
                <span class="kt-widget__value">2</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end:: Content -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->