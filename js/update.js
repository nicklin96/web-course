$(document).ready(function () {
    $("#delete_but").hide();
   $("#submit").click(function () {
       var options={
           target: "#ajax_target",
           success: function (data) {
               alert("success!");
           }
       };
       $("#insertForm").ajaxSubmit(options);
       $("#delete_but").hide();
       $("#ajax_target").html("");
       return false;
   });
   $("#ajax_query").click(function () {
       $.ajax({
           url: "/cgi-bin/query.pl",
           type: "POST",
           async: true,
           success: function (data,text,xhr) {
               $("#ajax_target").html(data);
           },
           error:function (xhr,text) {
               alert(xhr);
               alert(text);
           }
       });
       $("#delete_but").show();
   });
});
function deleteInfo() {
    var options={
        target: "#ajax_target",
        success: function (data) {
            alert("delete success!");
        }
    };
    $("#deleteForm").ajaxSubmit(options);
    return false;
}

