

 <?php include('inc/header.php'); ?>



<!-- Row start -->
<div class="row gutters" >
  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
    <div class="card">
      <div class="card-body p-0">
        <div class="invoice-container">
          <div class="invoice-header">

            <!-- Row start -->
            <div class="row gutters">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                <div class="custom-actions-btns mb-5">
                  <a href="#" class="btn btn-primary">
                    <i class="icon-export"></i> استخراج
                  </a>
                  <a href="#" class="btn btn-dark">
                    <i class="icon-printer"></i> طباعة
                  </a>
                </div>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gutters">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <a href="index.html" class="invoice-logo">
                  <img src="img\logo-dark.png" alt="Wafi Admin Dashboard">
                </a>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <address class="text-right">
                  فاتورة : عائلة الحجاجية<br>
                  تاريخ الفاتورة : 10/1/2021<br>

                </address>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gutters">
              <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
                <div class="invoice-details">
                  <address>
                    Alex Maxwell<br>
                    150-600 Church Street, Florida, USA
                  </address>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                <div class="invoice-details">
                  <div class="invoice-num">
                    <div>Invoice - #009</div>
                    <div>January 10th 2020</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

          </div>

          <div class="invoice-body">

            <!-- Row start -->
            <div class="row gutters">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>العائلة</th>
                        <th>اجمالى الاعضاء</th>
                        <th>مبلغ الفرد الواحد</th>
                        <th>اجمالى الفاتورة</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          الحجاجية
                          <p class="m-0 text-muted">
                            نبذة عن العائلة
                          </p>
                        </td>
                        <td>300 عضو</td>
                        <td>50 ريال</td>
                        <td>3000 ريال</td>
                      </tr>


                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2">
                          <p>
                            Subtotal<br>
                            Shipping &amp; Handling<br>
                            Tax<br>
                          </p>
                          <h5 class="text-danger"><strong>Grand Total</strong></h5>
                        </td>
                        <td>
                          <p>
                            $5000.00<br>
                            $100.00<br>
                            $49.00<br>
                          </p>
                          <h5 class="text-danger"><strong>$5150.99</strong></h5>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Row end -->
          </div>

          <div class="invoice-footer">
            شكرا لكم..!
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

    <div class="row gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4">
        <div class="invoice-status">
          <i class="icon-insert_invitation"></i>
          <h2 class="status text-success">580</h2>
          <h5 class="status-title">المدفوع</h5>
          <p class="status-type">اجمالى الفواتير المدفوعة</p>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4">
        <div class="invoice-status">
          <i class="icon-event_available"></i>
          <h2 class="status text-info">250</h2>
          <h5 class="status-title">اجمالى الفواتير الغير مدفوعة</h5>
          <p class="status-type">الاعضاء التى لم يتم دفع المستحق الدوري</p>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4">
        <div class="invoice-status">
          <i class="icon-event_note"></i>
          <h2 class="status text-danger">420</h2>
          <h5 class="status-title">عدد الاعضاء</h5>
          <p class="status-type">اجمالى عدد الاعضاء المساهمين</p>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- Row end -->


</div>
<!-- Content wrapper end -->


<?php include('inc/footer.php'); ?>
