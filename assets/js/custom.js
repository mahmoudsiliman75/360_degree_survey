$(document).ready( function () {
  $('.project_files').fileinput();

  // START:: TINY MCE
  tinymce.init({
    selector: '.text_editor'
  });
  // END:: TINY MCE

  // START:: CHANGE PROFILE PAGE
  $(".image").on('change', function() {
    if (this.files && this.files[0]) {
      var reader = new FileReader();
  
      reader.onload = (e) => {
        $('.image-preview').attr('src', e.target.result);
      }
  
      reader.readAsDataURL(this.files[0]);
    };
  });
  // END:: CHANGE PROFILE PAGE

  // START:: ENABLE TASKS
  $(".user_checkbox").attr('disabled', 'true');
  $(".finish_btn").attr('disabled', 'true');

  $(".start_btn").on('click', function() {
    $(this).attr('disabled', 'true');
    $(this).siblings().removeAttr('disabled');
    $(this).parent().parent().parent().children('.data').children('.kt-notification-v2').children('.kt-checkbox').children('.user_checkbox').removeAttr('disabled');
  });
  // END:: ENABLE TASKS

  // START: DELETE TASK
  $(".user_checkbox").on('change', function() {
    $(this).parent().parent().parent().css('display', 'none');
  });

  $('.finish_btn').on('click', function() {
    $(this).parent().parent().parent().parent().parent().parent().css('display', 'none');
  });
  // END: DELETE TASK

  // START:: CHANGE OFFER PIC
  $(".offer-image").on('change', function() {
    if (this.files && this.files[0]) {
      var reader = new FileReader();
  
      reader.onload = (e) => {
        $('.offer-image-preview').attr('src', e.target.result);
      }
  
      reader.readAsDataURL(this.files[0]);
    };
  });
  // END:: CHANGE OFFER PIC

  // START:: PRINT THIS
  $('#print_btn').on('click', function() {
    $('.print_wraper').printThis({
      importStyle: true, 
      importCSS: true,
      loadCSS: "../css/custom.css",
      canvas: true,
      copyTagClasses: true, 
      removeInline: false,
    });
  });
  // END:: PRINT THIS

  // START:: CHART JS
  new Chart($('#myChart'), {
    type: 'bar',
    data: {
      labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5'],
      datasets: [
        {
          data: [5, 4.5, 4, 1.5, 4],
          backgroundColor: [
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)'
          ],
          borderColor: [
            'rgba(54, 162, 235, 1)',
            'rgba(255, 99, 132, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
          ],
          borderWidth: 1
        },
      ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
          max: 5
        }
      },

      plugins: {
        legend: {
          display: false
        }
      }
    }
  });
  // END:: CHART JS
  
  // START:: OWL CAROUSEL
  $('#testemonials').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:30,
    nav: false,
    dots: true,
    items:1,
    rtl: true, 
    smartSpeed: 2500,
    dotsSpeed: 2500,
  });
  // END:: OWL CAROUSEL 

  // START:: RATER.JS
  var options = {
    max_value: 5,
    step_size: 0.5,
    initial_value: 0,
    selected_symbol_type: 'utf8_star', // Must be a key from symbols
    cursor: 'pointer',
    readonly: false,
    change_once: false, // Determines if the rating can only be set once
    ajax_method: 'POST',
    url: 'localhost/projects/360_degree_survey/Rate.php',
    additional_data: {} // Additional data to send to the server
  }

  $(".rating").rate(options);
  // END:: RATER.JS

  $('#remove-offer-pic').on('click', function() {
    $(this).parent().parent().empty();
  });

  // START:: SELECT2 OPTIONS
  $('#res_select2_3').select2({
  placeholder: "اختار مسؤل التنفيذ",
  });

  $('#test_res_select2_3').select2({
    placeholder: "اختار مسؤل الاختبار",
    });

  $('#services_select2_3').select2({
  placeholder: "اختار الخدمات",
  });

  $('#package_select2_3').select2({
  placeholder: "اختار الباقة",
  });

  $('#client-services').select2({
  placeholder: "اختار الخدمات",
  });

  $('#years').select2({
    placeholder: "سنوات",
    });

  $('#monthes').select2({
    placeholder: "شهور",
  });
  // START:: SELECT2 OPTIONS

  //  START:: SWEET ALERT
  $('.done').click(function(e) {
    swal.fire({
      title: 'تم التاكيد ',
      type: 'success',
      showCancelButton: false,
      confirmButtonText: 'تم'
    })
  });

  $('.confirm').click(function(e) {
      swal.fire({
        title: 'تأكيد التعاقد',
        type: 'question',
        showCancelButton: true,
        cancelButtonText: 'إلغاء',
        confirmButtonText: 'تأكيد'
      }).then(function(result) {
        if (result.value) {
          swal.fire(
            'تم التأكيد',
            '',
            'success'
          )
        }
      });
  });

  $('.delete').click(function(e) {
    swal.fire({
      title: "تأكيد الحذف  ",
      text: "",
      type: "error",
      buttonsStyling: false,
      confirmButtonText: "حذف",
      confirmButtonClass: "btn btn-danger",
      showCancelButton: true,
      cancelButtonText: "إلغاء",
      cancelButtonClass: "btn btn-default"
    }).then(function(result) {
    if (result.value) {
      swal.fire(
        'تم الحذف',
        '',
        'success'
      )
      }
    });
  });

  $('.archive').click(function(e) {
    swal.fire({
      title: "تأكيد الأرشفة  ",
      text: "",
      type: "warning",
      buttonsStyling: false,
      confirmButtonText: "أرشفة",
      confirmButtonClass: "btn btn-danger",
      showCancelButton: true,
      cancelButtonText: "إلغاء",
      cancelButtonClass: "btn btn-default"
    }).then(function(result) {
    if (result.value) {
      swal.fire(
        'تمت الأرشفة',
        '',
        'success'
      )
      }
    });
  });

  $('.restore').click(function(e) {
    swal.fire({
      title: "تأكيد الإستعادة  ",
      text: "",
      type: "question",
      buttonsStyling: false,
      confirmButtonText: "إستعادة",
      confirmButtonClass: "btn btn-success",
      showCancelButton: true,
      cancelButtonText: "إلغاء",
      cancelButtonClass: "btn btn-default"
    }).then(function(result) {
    if (result.value) {
      swal.fire(
        'تمت الإستعادة',
        '',
        'success'
      )
      }
    });
  });

  $('.collect-mone').click(function(e) {
    swal.fire({
      title: "تم التحصيل ",
      text: "",
      type: "success",
      buttonsStyling: false,
      confirmButtonText: "تم",
      confirmButtonClass: "btn btn-success",
      showCancelButton: false,
    })
  });

    $('.cancel-collect-mone').click(function(e) {
    swal.fire({
      title: "تم إلغاء العملية ",
      text: "",
      type: "error",
      buttonsStyling: false,
      confirmButtonText: "تم",
      confirmButtonClass: "btn btn-danger",
      showCancelButton: false,
    })
  });
  // END:: SWEET ALERT

  // START:: CALC THE REMAINING OF NEW DEAL
  let calcTheRemaining = () => {
    let totalCost = parseInt( $('#total-cost').val() );
    let downPayment = parseInt( $('#down-payment').val() );
    $('#the-remaining').val( totalCost - downPayment );
  };

  $('#total-cost').on('input', calcTheRemaining);
  $('#down-payment').on('input', calcTheRemaining)
  // END:: CALC THE REMAINING OF NEW DEAL

  // START:: ADD SYSTEM USER INFO
  $('.system-user').css('display', 'none');
  $('#system-user-status-selector').on('change', function() {
    let optionValue = $('#system-user-status-selector').children('option:checked').val();
    if( optionValue == 0 ) {
      $('.system-user').css('display', 'none');
    } else if ( optionValue == 1 ) {
      $('.system-user').css('display', 'block');
    }
  });
  // END:: ADD SYSTEM USER INFO
});