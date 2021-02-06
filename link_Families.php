
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



<!-- Large modal -->

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
                                  <label for="exampleInputName1">اختار اسم العائلة</label>
                                  <select id="d_17" class="form-control">
                                      <option value=""> الصوفة</option>
                                      <option value=""> الصوفة</option>
                                    </select>
                                   </div>


                                   <div class="form-group"> <!-- Date input -->
                                           <label class="control-label" for="date">Date</label>
                                           <input class="form-control" id="datepicker" name="date" placeholder="MM/DD/YYY" type="text"/>
                                         </div>

                                <div class="form-group">
                                  <label for="exampleInputName1">اسم العضو</label>
                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="الاسم">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputName1">رقم الهاتف</label>
                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="رقم الهاتف">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputName1">اختار المنطقة</label>
                                  <select id="d_17" class="form-control">
                                      <option value=""> الرياض</option>
                                      <option value=""> جدة</option>
                                        <option value="">مكة</option>
                                          <option value="">القصيم</option>
                                          <option value="">الدمام</option>
                                          <option value="">الاحساء</option>
                                            <option value="">الجبيل</option>
                                            <option value="">الطائف</option>

                                    </select>
                                 </div>
                                <div class="form-group">
                                  <label for="exampleInputName1">اختار الشهر</label>
                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="الاسم">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputName1">مبلغ المساهمة</label>
                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="المبلغ">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputName1">حالة العضو</label>
                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="الاسم">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">حفظ</button>
                                <button  class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                              </form>
                            </div>
                          </div>
                        </div>
                  <!-- content-wrapper ends -->
    </div>
  </div>
</div>


  <!-- Large modal -->

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
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="الاسم">
                                  </div>
                                  <button type="submit" class="btn btn-primary mr-2">حفظ</button>
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="width:180px;">إضافة عائلة جديدة</button>

        <div class="card-body">

          <h4 class="card-title">جدول البيانات</h4>
          <div class="row">
            <div class="col-12">

              <div class="table-responsive">







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

          </td>

                      </tr>


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
    </div>

    <!-- content-wrapper ends -->













<?php
include('inc/footer.php');
?>
