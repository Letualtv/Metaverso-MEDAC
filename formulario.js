$(document).ready(function() {

    // Handle form submission.
    $("#submit").click(function(e) {
  
      var firstName = $("#firstName").val(),
          lastName = $("#lastName").val(),
          source = window.location.pathname,
          optTimestamp = undefined,
          utcSeconds = Date.now() / 1000,
          timestamp = new Date(0),
          phone = $("#areaCode").val()
                + $("#phone1").val()
                + $("#phone2").val();
  
      e.preventDefault();
  
      if (firstName == "") {
        $('#form-response').html('<div class="mt-3 alert alert-info" role="alert">Por favor introduzca su nombre y apellidos.</div>');
      } else if (phone.match(/[^0-9]/gi)) {
        $('#form-response').html('<div class="mt-3 alert alert-info" role="alert">Su número de teléfono contiene carácteres inválidos. Por favor, revise su número.</div>');
      } else if (phone.length < 10) {
        $('#form-response').html('<div class="mt-3 alert alert-info" role="alert">Porfavor, introdúzca su número de teléfono.</div>');
      } else if (phone.length > 10) {
        $('#form-response').html('<div class="mt-3 alert alert-info" role="alert">Su número de teléfono contiene demasiados dígitos. Por favor, revise el número de teléfono proporcionado.</div>');
      } else {
        $('#submit').prop('disabled', true);
        $('#submit').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>  Enviando su formulario</button>');
  
        timestamp.setUTCSeconds(utcSeconds);
  
        var data = JSON.stringify({
          'destinationNumber': phone,
          'firstName': firstName,
          'source': source,
          'optTimestamp': timestamp.toString()
        });
  
        $.ajax({
          type: 'POST',
          url: 'https://example.execute-api.us-east-1.amazonaws.com/v1/register',
          contentType: 'application/json',
          data: data,
          success: function(res) {
            $('#form-response').html('<div class="mt-3 alert alert-success" role="alert"><p>Congratulations! You&apos;ve successfully registered for SMS Alerts from ExampleCorp.</p><p>We just sent you a message. Follow the instructions in the message to confirm your subscription. We won&apos;t send any additional messages until we receive your confirmation.</p><p>If you decide you don&apos;t want to receive any additional messages from us, just reply to one of our messages with the keyword STOP.</p></div>');
            $('#submit').prop('hidden', true);
            $('#unsubAll').prop('hidden', true);
            $('#submit').text('Preferences saved!');
          },
          error: function(jqxhr, status, exception) {
            $('#form-response').html('<div class="mt-3 alert alert-danger" role="alert">Ocurrió un error. Por favor, inténtelo de nuevo más tarde.</div>');
            $('#submit').text('Save preferences');
            $('#submit').prop('disabled', false);
          }
        });
      }
    });
  });