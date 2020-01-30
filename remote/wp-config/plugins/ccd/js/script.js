( function( $ ) {
  // var nco_validate_insurance_activation_form_jquery = function() {
  //   let $form = $('.page-id-3671 .insurance-form-section .nco-form');
  //   let $inputs = $form.find('input:not([type="submit"]), select');

  //   $form.validate({
  //     rules: {
  //       insurance_first_name: "required",
  //       insurance_last_name: "required",
  //       insurance_email: {
  //         required: true,
  //         email: true,
  //       },
  //       insurance_shop: "required",
  //       insurance_invoice_number: "required",
  //       insurance_device: "required",
  //       insurance_insurance_serial: "required",
  //       insurance_activation_code: "required",
  //     },
  //     messages: {
  //       insurance_first_name: "Este campo es requerido.",
  //       insurance_last_name: "Este campo es requerido.",
  //       insurance_email: {
  //         required: "Este campo es requerido.",
  //         email: "Ingrese un correo electrónico valido",
  //       },
  //       insurance_shop: "Este campo es requerido.",
  //       insurance_invoice_number: "Este campo es requerido.",
  //       insurance_device: "Este campo es requerido.",
  //       insurance_insurance_serial: "Este campo es requerido.",
  //       insurance_activation_code: "Este campo es requerido.",
  //     },
  //     submitHandler: function(form) {
  //       form.submit();
  //     },
  //   });

  // }
  

  /**
  * Disables all links and changes cursor for the website, used in ajax calls.
  */
  var webStateWaiting = function(waiting){
    if(waiting) {
      $('body').css('cursor', 'progress');
    }
    else {
      $('body').css('cursor', 'default');
    }
    
    $('a').each(function() {
      if(!$(this).hasClass('disabled') && waiting && !$(this).hasClass('language-option') && !$(this).hasClass('menu-end-post-denominacion-a')) {
        $(this).addClass('disabled');	
      }
      else if ($(this).hasClass('disabled') && !waiting && !$(this).hasClass('language-option') && !$(this).hasClass('menu-end-post-denominacion-a')) {
        $(this).removeClass('disabled');
      }
    });
  }

  $(document).ready(function () {
    // if($('.page-id-3671').length > 0) {
    //   nco_validate_insurance_activation_form_jquery();
    // }
    // if($('.page-id-9776').length > 0) {
    //   $('.page-id-9776 .nco-form.query-form input[type="submit"]').each(function() {
    //     $(this).on('click', function(event){
    //       event.preventDefault();
    //       nco_handle_query_codes(event);
    //       event.stopPropagation();
    //     });
    //   });
    // }
  });
} (jQuery) );