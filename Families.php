 <?php include('inc/header.php');
 include('inc/confirmation.php');?>








 <!-- Row start -->
 <div class="row gutters">
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
       $link= '<span class="disable-links"><a href="link_Families.php?loop_link='.$family['Family_ID'].'"style = "pointer-events: none;" ></a></span>';
     }

    echo '
   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
     '. $link.'
     <div class="info-stats4">
       <div class="info-icon">
         <i class="icon-users"></i>
       </div>
       <div class="sale-num">
         <h4>عدد الاعضاء: 20</h4>
         <h6>'.$family['Family_Name'].'</h6>
       </div>
     </div>
   </a>
   </div>

 <!-- Row end -->

 ';
 $num ++;
 }; ?>
 <!-- Extra large modal -->
 </div>
 <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="myExtraLargeModalLabel">إضافة عائلة جديدة</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
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

     </form>

       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
         <button type="submit" class="btn btn-primary" id="SaveRecord">حفظ</button>
       </div>
     </div>
   </div>
 </div>














 <div class="table-container" style="margin-top:30px;">
   <div class="t-header">  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">إضافة جديدة</button>

</div>
   <div class="table-responsive" >
     <table id="copy-print-csv" class="table custom-table" style="text-align: center;">
       <thead>
         <tr>
           <th>م</th>
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

$familystatus=$family['Status'];

if($familystatus==1)
{

 $value="مفعل";
}
else{

 $value="معطل";
}

 echo '
   <tr>
<td>'.$num .' </td>
<td>'.$family['Family_Name'].'</td>
<td>'.$value.'</td>
<td>

<a href="edit_Families.php?e_f='.$family['Family_ID'].'" class="btn btn-outline-warning" >تعديل </a>
<a href="#" onclick="Delete('.$family['Family_ID'].',1,this)" class="btn btn-danger" data-toggle="modal" data-target="#DeleteConfirmation" > حذف <i class="fa fa-fw fa-trash"></i> </a>
</td>
</tr>
';
 $num ++;
} ?>

       </tbody>
     </table>
   </div>
 </div>
































 <?php include('inc/footer.php'); ?>
