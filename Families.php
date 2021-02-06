
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



      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <a href="link_Families.php">
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
            <h6 class="text-muted font-weight-normal">الحجاجية</h6>
          </div>
        </div>
          </a>
      </div>


      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <a href="link_Families.php">
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
            <h6 class="text-muted font-weight-normal">الحجاجية</h6>
          </div>
        </div>
          </a>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <a href="link_Families.php">
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
            <h6 class="text-muted font-weight-normal">الحجاجية</h6>
          </div>
        </div>
          </a>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <a href="link_Families.php">
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
            <h6 class="text-muted font-weight-normal">الحجاجية</h6>
          </div>
        </div>
          </a>
      </div>


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
          <input type="text" class="form-control" id="exampleInputName1" placeholder="الاسم">
          </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">حالة العائلة</legend>
      <div class="col-sm-8">
        <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked> مفعلة
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> معطلة
              </label>
            </div>

      </div>
    </div>
  </fieldset>



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
        <div class="card-body">
          <h4 class="card-title">Data table</h4>
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
