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
    <label for="exampleInputName1">العائلة</label>
    <input type="text" class="form-control" id="FamilyName" placeholder="">
    </div>

    <div class="form-group">
    <label for="exampleInputName1"> رقم الهاتف</label>
    <input type="text" class="form-control" id="FamilyName" placeholder="برجاء ادخال رقم الهاتف">
    </div>

    <div class="form-group">
    <label for="exampleInputName1">المنطقة</label>
    <input type="text" class="form-control" id="FamilyName" placeholder="برجاء ادخال المدينة او المنطقة">
    </div>

    <div class="form-group">
    <label for="exampleInputName1">المبلغ</label>
    <input type="text" class="form-control" id="FamilyName" placeholder="برجاء ادخال مبلغ المساهمة الدوري">
    </div>

    <div class="form-group">
    <label for="exampleInputName1">حالة العضو</label>
    <input type="text" class="form-control" id="FamilyName" placeholder="">
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
