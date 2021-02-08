
// Delet

function Delete(id,page,t){
       window.var1=id;
       window.var3=t;
       if(page==1)
       {
        window.var2="Familes";

       }






    }

    var ConfirmDelete = function () {
      var ID = window.var1;
      var page=window.var2;
      var col=window.var3
    var $button = $(this);
        $.ajax({
         type: "GET",
         cache: false,
         async: true,
        url: "DeleteFunction.php" ,
        data:{ID:ID,page:page},
       success: function (result) {
         $("#DeleteConfirmation").modal("hide");
         toastr.error("تم الحذف بنجاح");
         $tr= $(col).closest("tr");
          $tr.find('td').fadeOut(700, function () {
        $tr.remove();
         });
     //  window.setTimeout(function () { location.reload() }, 1000)
                    }
                })
            }
