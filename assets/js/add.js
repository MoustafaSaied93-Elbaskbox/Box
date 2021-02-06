$(document).ready(function () {
 $('#SaveRecord').click(function (event) {
  event.preventDefault();
  var formData = new FormData();
  var FamilyName=$("#FamilyName").val();
  if(FamilyName=="")
  {
  $("#FamilyName").focus();
return false;
  }
  var radioValue = $("input[name='optradio']:checked").val();
              if(radioValue==1)
              {
                alert("active");
                var status=1;
              }
              else{
                alert(" not active");
                var status=0;
              }
          var pages="Families";
          formData.append("FamilyName", FamilyName);
          formData.append("Statu", status);
          formData.append("page", pages);
              var xhr = new XMLHttpRequest();
              xhr.open("POST", "addfunction.php", true);
              xhr.addEventListener("load", function (evt) { UploadComplete(evt); }, false);
              xhr.addEventListener("error", function (evt) { UploadFailed(evt); }, false);
              xhr.send(formData);
              function UploadComplete(evt) {
                  $(".modal fade bd-example-modal-lg").modal("hide");
                  toastr.success("تمت الاضافة بنجاح");
                  window.setTimeout(function () { location.reload() }, 3000)
              }
              function UploadFailed(evt) {
                  alert("There was an error attempting to upload the file.");

              }

          });
