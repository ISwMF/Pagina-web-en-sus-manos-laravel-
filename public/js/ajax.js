function login(){
  var res = "aaaaaaaaaaaaa";
  var a = arguments[0];
  var b = arguments[1];
  var obj = JSON.parse('{ "user":"'+a+'", "password":"'+b+'"}');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
     type:'POST',
     url:'/postLoginRequestByAjax',
     data:obj,
     success:function(data){
       if (data.success == "exitoso") {
         window.location = "/home";
       }else{
         $('#resultado').html(data.success);
       }
     },
      error: function (jqXHR, exception) {
          var msg = '';
          if (jqXHR.status === 0) {
              msg = 'Not connect.\n Verify Network.';
          } else if (jqXHR.status == 404) {
              msg = 'Requested page not found. [404]';
          } else if (jqXHR.status == 500) {
              msg = 'Internal Server Error [500].';
          } else if (exception === 'parsererror') {
              msg = 'Requested JSON parse failed.';
          } else if (exception === 'timeout') {
              msg = 'Time out error.';
          } else if (exception === 'abort') {
              msg = 'Ajax request aborted.';
          } else {
              msg = 'Uncaught Error.\n' + jqXHR.responseText;
          }
          $('#resultado').html(msg);
          console.log(jqXHR);
          console.log(exception);
      },
  });
}
