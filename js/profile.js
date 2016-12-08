function loadBio() {
   $.ajax({
      url: "./api/load_bio.php",
      success: function(val) {
         $("#bio").text(val ? val : "(none)");
         $("#bio-input").val(val ? val : "");
      }
   });
}

function loadImage() {
   $.ajax({
      url: "./api/has_profile.php",
      success: function(val) {
         $("#profile-pic").attr("src", val === "1" ? "./api/load_profile_pic.php?" + new Date().getTime()
            : "./image/generic-profile-pic.jpg");
      }
   });
}

function addEditListener() {
   $("#edit-profile-btn").click(function(e) {
      e.preventDefault();

      if($("#edit-form").is(":visible")) {
         $("#edit-form").fadeOut();
      } else {
         $("#edit-form").fadeIn();
      }
   });
}

function addSaveListener() {
   $("#edit-form").submit(function(e) {
      e.preventDefault();

      $("#successAlert").hide();
      $("#failedAlert").hide();

      var formData = new FormData();
      if($("#bio-input").val() && $("#bio-input").val() !== $("#bio").text()) {
         formData.append("bio", $("#bio-input").val());
      }
      if($("#image-input").val()) {
         formData.append("file", $("#image-input")[0].files[0]);
      }

      $.ajax({
         url: './api/update_profile.php',
         type: 'POST',
         data: formData,
         contentType: false,
         processData: false,
         success: function(res) {
            loadImage();
            loadBio();
            $("#edit-form").fadeOut();

            $("#successAlertText").text(res);
            $("#successAlert").show();
         },
         error: function(res) {
            $("#failedAlertText").text(res.responseText);
            $("#failedAlert").show();
         }
      });
   });
}

$(document).ready(function() {
   loadBio();
   loadImage();
   addEditListener();
   addSaveListener();
});
