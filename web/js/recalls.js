$().ready(() => {


  $('.form-control').mask('+380000000000', { placeholder: '(+380) ____-____' });

  $('.recalls-js').click(phone_number);

  function phone_number() {
    let phone = $("#feedback input[name=phone_number]").val();
    let action = $("#feedback").attr('action');
    console.log(action);
    $.ajax({
      url: action,
      data: { phone },
      method: 'POST',
      success: (response) => {
        let parsed_response = JSON.parse(response);
        if (parsed_response.status == STATUSES.success) {
          $('#feedback').empty();
        }else {
          let errors_message = parsed_response.errors.join('\n');
          $('#feedback .errors').text(errors_message);
        }
      }
    });
  };
});
