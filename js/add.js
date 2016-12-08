function addExerciseOptions() {
   $.ajax({
      url: "./api/list_exercises.php",
      success: function(val) {
         $("#exercises").append("<option></option>");
         var split = val.split("\n");
         for(var i = 0; i < split.length - 1; i += 2) {
            $("#exercises").append("<option value=" + split[i] + ">" + split[i + 1] + "</option>");
         }
      }
   });
}

function addExerciseListener() {
   $("#exercises").change(function() {
      $.ajax({
         url: "./api/list_exercise_parameters?exercise=" + $("#exercises").val(),
         success: function(val) {
            $("#parameters").empty();
            var split = val.split("\n");
            for(var i = 0; i < split.length - 1; i += 2) {
               $("#parameters").append("<div class=\"form-group\"><label for=\"p" + split[i] + "\">" + split[i + 1]
               + "</label><input type=\"text\" class=\"form-control\" id=\"p" + split[i] + "\" placeholder=\""
               + split[i + 1] + "\"></div>");
            }
         }
      });
   });
}

function addSubmitListener() {
   $("#submit-button").click(function(e) {
      e.preventDefault();

      $("#failedAlert").hide();
      $("#successAlert").hide();

      var d = {};
      d['exercise'] = $("#exercises").val();
      d['date'] = $("#date-input").val();
      $("#parameters").find("input").each(function() {
         d[$(this).attr("id")] = $(this).val();
      });

      $.ajax({
         type: "POST",
         url: "./api/add_workout.php",
         data: d,
         success: function(resp) {
            $("#successAlert").show();
         },
         error: function(resp) {
            $("#failedAlertText").text(resp.responseText);
            $("#failedAlert").show();
         }
      });
   });
}

$(document).ready(function() {
   addExerciseOptions();
   addExerciseListener();
   addSubmitListener();
});
