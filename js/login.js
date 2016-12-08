function addSubmitListener() {
   $("#submit-button").click(function(e) {
      e.preventDefault();

      $("#failedAlert").hide();

      var d = {};
      d['username'] = $("#username").val();
      d['password'] = $("#password").val();

      $.ajax({
         type: "POST",
         url: "./api/login.php",
         data: d,
      }).always(function(data, textStatus) {
         if(data) {
            $("#failedAlert").show();
         } else {
            window.location.replace("./");
         }
      });
   });
}

$(document).ready(function() {
   addSubmitListener();
});
