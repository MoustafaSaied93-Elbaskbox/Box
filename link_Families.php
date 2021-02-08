<?php include('inc/header.php'); ?>



<!-- Extra large modal -->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myExtraLargeModalLabel">إضافة تفاصيل الاعضاء</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="forms-sample">
    <div class="form-group">
    <label for="exampleInputName1"> اسم العضو</label>
    <input type="text" class="form-control" id="FamilyName" placeholder="برجاء ادخال اسم العضو">
    </div>
    <div class="form-group">
    <label for="exampleInputName1"> رقم الهاتف</label>
    <input type="text" class="form-control" id="FamilyName" placeholder="برجاء ادخال رقم الهاتف">
    </div>
    <div class="form-group">
    <label for="exampleInputName1">المبلغ</label>
    <input type="text" class="form-control" id="FamilyName" placeholder="برجاء ادخال مبلغ المساهمة الدوري">
    </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">العائلة</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <option selected="">اختار اسم العائلة</option>
          <?php
          $fam = mysqli_query($conn, "SELECT * FROM  family");
          $num = 1;
          while ($family = mysqli_fetch_assoc($fam)){
              echo '  <option value="'.$family['Family_Name'].'">'.$family['Family_Name'].'</option>
' ;}?>
        </select>
      </div>
    </div>



    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">المنطقة</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <option selected="">برجاء اختيار اسم المدينة او المنطقة</option>
          <option value="1">الرياض</option>
          <option value="2">جدة</option>
          <option value="3">مكة المكرمة</option>
          <option value="3">المدينة المنورة</option>
          <option value="3">الاحساء</option>
          <option value="3">الدمام</option>
          <option value="3">الطائف</option>
          <option value="3">القصيم</option>
          <option value="3">تبوك</option>
          <option value="3">القطيف</option>
          <option value="3">خميس مشيط</option>
          <option value="3">حفر الباطن</option>
          <option value="3">الجبيل</option>
          <option value="3">الخرج</option>
          <option value="3">ابها</option>
          <option value="3">حائل</option>
          <option value="3">نجران</option>
          <option value="3">ينبع</option>
          <option value="3">صبيا</option>
          <option value="3">الدوادمى</option>
          <option value="3">بيشة</option>
          <option value="3">ابو عريش</option>
          <option value="3">القنفدة</option>
          <option value="3">محايل</option>
          <option value="3">سكاكا</option>
          <option value="3">عنيزة</option>
          <option value="3">القريات</option>
          <option value="3">صامطة</option>
          <option value="3">جازان</option>
          <option value="3">المجمعة</option>
          <option value="3">القويعة</option>
          <option value="3">الرس</option>
          <option value="3">الباحة</option>
        </select>
      </div>
    </div>



    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">حالة العضو</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <option selected="">اختار حالة العضو</option>
          <option value="1">داخل السعودية</option>
          <option value="2">خارج السعودية</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="label">التاريخ</label>
      <div class="custom-date-input">
        <input type="text" name="" class="form-control datepicker" placeholder="برجاء كتابة تاريخ الادخال">
      </div>
    </div>

    </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
        <button type="button" class="btn btn-primary">حفظ</button>
      </div>
    </div>
  </div>
</div>






<div class="table-container" style="margin-top:30px;">
  <div class="t-header"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">إضافة جديدة</button>
  <a href="invoice.php"  <button type="button" class="btn btn-primary">تقرير</button> </a>
</div>
  <div class="table-responsive" >
    <table id="copy-print-csv" class="table custom-table" style="text-align: center;">
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
           <button type="button" class="btn btn-outline-warning">تعديل</button>
            <button type="button" class="btn btn-outline-danger">حذف</button>

          </td>

        </tr>


      </tbody>
    </table>
  </div>
</div>
































<?php include('inc/footer.php'); ?>
