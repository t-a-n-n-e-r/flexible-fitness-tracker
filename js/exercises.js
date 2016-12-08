function addRemoveButtonListeners() {
   $('.remove-button').click(function(e) {
      e.preventDefault();

      if(!confirm("Are you sure you would like to delete this exercise?\nAll workouts that reference it will be removed as well!"))
         return;

      var id = $(this).parent().parent().attr("id").substr(1);

      $.ajax({
         url: "./api/remove_exercise.php?exercise=" + id,
         success: function(resp) {
            loadTable();
         }
      });
   });
}

function addAddAnotherListener() {
   $("#add-parameter").click(function(e) {
      e.preventDefault();
      $("#parameters").append($("#parameters").children().first().clone().find("input").val("").end());
   });
}

function addSubmitListener() {
   $("#submit-button").click(function(e) {
      e.preventDefault();

      $("#failedAlert").hide();

      var d = {};
      d['name'] = $("#name").val();
      d['description'] = "";

      var parameters = $("#parameters").children();
      for(i = 0; i < parameters.length; i++) {
         d['p' + i] = parameters.eq(i).find("input").val();
      }

      $.ajax({
         method: "POST",
         url: "./api/add_exercise.php",
         data: d,
         success: function(resp) {
            $("#failedAlert").hide();
            $("#successAlert").show();
            resetForm();
            loadTable();
         },
         error: function(resp) {
            $("#failedAlertText").text(resp.responseText);
            $("#failedAlert").show();
            $("#successAlert").hide();
         }
      });
   });
}

function resetForm() {
   $("#name").val("");

   var parameters = $("#parameters").children();
   for(i = 1; i < parameters.length; i++) {
      parameters.eq(i).remove();
   }
   $("#parameters").children().eq(0).find("input").val("");
}

function loadTable() {
   $.ajax({
      url: "./api/list_exercises.php",
      success: function(val) {
         $("#table-body").empty();

         var split = val.split("\n");
         for(var i = 0; i < split.length - 1; i += 2) {
            $("#table-body").append(
               "<tr id='e" + split[i] + "'><td>" + split[i+1] + "</td>"
               + "<td></td><td><a class='remove-button' href='#'>remove</a></td></tr>"
            );

            (function(id) {
               $.ajax({
                  url: "./api/list_exercise_parameters.php?exercise=" + id,
                  success: function(val) {
                     $("#e" + id).children("td")[1].append(
                        val.split("\n").filter(function(_, i) { return i % 2 == 1 }).join(", "));
                  }
               });
            })(split[i]);
         }

         addRemoveButtonListeners();
      }
   });
}

$(document).ready(function() {
   loadTable();
   addSubmitListener();
   addAddAnotherListener();
});
