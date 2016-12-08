function addSubmitListener() {
   $("#submit-button").click(function(e) {
      e.preventDefault();

      var d = {};
      d['username'] = $("#username").val();
      d['password'] = $("#password").val();
      d['name'] = $("#name").val();

      $.ajax({
         type: "POST",
         url: "./api/signup.php",
         data: d,
         success: function(resp) {
            window.location.replace("./login.php");
         },
         error: function(resp) {
            $("#failedAlertText").text(resp.responseText);
            $("#failedAlert").show();
         }
      });
   });
}

$(document).ready(function() {
   addSubmitListener();
});
