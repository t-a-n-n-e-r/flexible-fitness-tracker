function loadTable() {
   $.ajax({
      url: "./api/load_log.php",
      success: function(val) {
         $("#table-body").empty();
         var split = val.split("\n");
         for(var i = 0; i < split.length - 1; i += 3) {
            $("#table-body").append("<tr><td>" + split[i] + "</td><td>" + split[i + 1] + "</td><td>" + split[i + 2] + "</td></tr>");
         }
      }
   });
}

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

function addApplyListener() {
   $("#apply-button").click(function(e) {
      e.preventDefault();

      $("#table-body").children().each(function() {
         var hide = false;
         if($("#exercises option:selected").text() && $("#exercises option:selected").text() !== $(this).children().eq(0).text()) {
            hide = true;
         } else if($("#start").val() && new Date($(this).children().eq(1).text()) < new Date($("#start").val())) {
            hide = true;
         } else if($("#end").val() && new Date($(this).children().eq(1).text()) > new Date($("#end").val())) {
            hide = true;
         }

         $(this).attr("class", hide ? "collapse" : "");
      });
   });
}

function addClearListener() {
   $("#clear-button").click(function(e) {
      e.preventDefault();

      $("#table-body").children().each(function() {
         $(this).attr("class", "");
      });

      $("#start").val("");
      $("#end").val("");
      $("#exercises").val(0);
   });
}

$(document).ready(function() {
   loadTable();
   addApplyListener();
   addClearListener();
   addExerciseOptions();
});
