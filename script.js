$(document).ready(function(){
  $("#regForm").on("submit", function(){
    let valid = true;

    // Simple validation
    $("input, textarea, select").each(function(){
      if($(this).val() === ""){
        $(this).css("border-color", "red");
        valid = false;
      } else {
        $(this).css("border-color", "#ccc");
      }
    });

    if(!valid){
      alert("Please fill all fields before submitting!");
      return false; // prevent submission
    }
  });
});
