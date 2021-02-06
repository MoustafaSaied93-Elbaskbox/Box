
<?php
include('inc/header.php');
?>


<style>
.col-xl-3 a{
  color: #af9128;
}
.col-xl-3 a:hover {
 opacity: 1;
 list-style: none;
 text-decoration: none;
 display: inline-block;
 color: white;
}
</style>


<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">


<?php  
$fam = mysqli_query($conn, "SELECT * FROM  family");
$num = 1;
while ($family = mysqli_fetch_assoc($fam)){

  if($family["Status"]==1)
  {


    $link ='<a href="link_Families.php?loop_link='.$family['Family_ID'].'">';
  }

  else
  {

    $link= '<span class="disable-links"><a href="link_Families.php?loop_link='.$family['Family_ID'].'"style: span.disable-links {pointer-events: none;} ></a></span>';
  }




 echo '
 <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
 '. $link.'
   
   <div class="card">
     <div class="card-body">
       <div class="row">
         <div class="col-12">
           <div class="d-flex align-items-center align-self-start">
             <h3 class="mb-0">الاعضاء : 80</h3>
             <p class="text-success mr-2 mb-0 font-weight-medium">الاجمالى : 2542</p>
           </div>
         </div>
       </div>
       <h6 class="text-muted font-weight-normal">'.$family['Family_Name'].'</h6>
       <input type="hidden" id="hiddeninput" value='.$family["Status"].'>
     </div>
   </div>
     </a>
 </div>
';
 $num ++;
}; ?>


    </div>



  <!-- Large modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">إضافة عائلة جديدة</button>



  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="col-12 grid-margin stretch-card">
      <div class="card">
       <div class="card-body">
      <h4 class="card-title">ادخل عائلة جديدة</h4>
      <p class="card-description">العائلات </p>

      <form class="forms-sample">
      <div class="form-group">
    <label for="exampleInputName1">اسم العائلة</label>
  <input type="text" class="form-control" id="FamilyName" placeholder="الاسم">
  </div>



  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">حالة العائلة</legend>
      <div class="col-sm-8">
        <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="1" checked> مفعلة
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="0"> معطلة
              </label>
            </div>

      </div>
    </div>
  </fieldset>

  <button type="submit" class="btn btn-primary mr-2" id="SaveRecord">حفظ</button>
  <button  class="btn btn-secondary" data-dismiss="modal">الغاء</button>
  </form>
  </div>
 </div>
    </div>
                    <!-- content-wrapper ends -->
      </div>
    </div>
  </div>




  <div class="main-panel" id="pa">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> العائلات </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">العائلات</a></li>
            <li class="breadcrumb-item active" aria-current="page">العائلات</li>
          </ol>
        </nav>
      </div>

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data table</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">



<table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;">
  <thead>
    <tr>
   <th> الرقم</th>
    <th>اسم العائلة</th>
    <th>حالة العائلة</th>
    <th>العمليات</th>
    </tr>
  </thead>
  <tbody>

   <?php  


 $fam = mysqli_query($conn, "SELECT * FROM  family");
$num = 1;
while ($family = mysqli_fetch_assoc($fam)){

<<<<<<< Updated upstream
  $familystatus=$family['Status'];
=======
<table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;">
   <thead>
  <tr>
 <th>اسم العائلة</th>
  <th>حالة العائلة</th>
  <th>العمليات</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td>الحجاجية</td>
  <td>مفعلة</td>
  <td>
          <a href="#" class="btn btn-warning" >تعديل </a>
          <a href="#"  class="btn btn-danger" > حذف <i class="fa fa-fw fa-trash"></i> </a>
>>>>>>> Stashed changes

  if($familystatus==1)
  {

<<<<<<< Updated upstream
    $value="مفعل";
  }
  else{
=======
       </tr>
>>>>>>> Stashed changes

    $value="معطل";
  }

<<<<<<< Updated upstream

    echo ';
      <tr>
<td>'.$num .' </td>

 <td>'.$family['Family_Name'].'</td>
  <td>'.$value.'</td>
  <td>
<a href="#" class="btn btn-warning" >تعديل </a>
 <a href="#"  class="btn btn-danger" > حذف <i class="fa fa-fw fa-trash"></i> </a>

  </td>

</tr>
   ';
    $num ++;
} ?>


  </tbody>
    <tfoot>
    <tr>
    <th>رقم العائلة</th>
    <th>اسم العائلة</th>
    <th>حالة العائلة</th>
    <th>العمليات</th>
    </tr>
   </tfoot>
   </table>
     </div>
    </div>
    </div>
      </div>
=======
   </tbody>
    <tfoot>
     <tr>
  <th>اسم العائلة</th>
  <th>حالة العائلة</th>
   <th>العمليات</th>
  </tr>
   </tfoot>
   </table>
  </div>
  </div>
  </div>
  </div>
  </div>
>>>>>>> Stashed changes
    </div>
    </div>

    <!-- content-wrapper ends -->










<?php
include('inc/footer.php');
?>


<script type="text/javascript">
  $(document).ready(function () {

    var Status=$("#hiddeninput").val();

    console.log(Status);

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
                  

                
                  var status=1;
                } 
                else{
                

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

  });

</script>