<?php include('inc/header.php');
include('inc/confirmation.php');?>




<?php
$msg = '';
if(isset($_GET['e_f'])){

    $sql = mysqli_query($conn, " SELECT * FROM family WHERE Family_ID  = '$_GET[e_f]'") ;

    $edit_f = mysqli_fetch_assoc($sql);

    }

    if (isset($_POST['add_forsale'])) {

      $sql_forsale = mysqli_query($conn, " UPDATE  forsale_title  SET forsale_title_ar = '$_POST[forsale_title_ar_]', forsale_title_en = '$_POST[forsale_title_en_]'  WHERE forsale_title_id = $_GET[edit_foresale]") ;



    }  if( isset($sql_forsale)){

        echo '<meta http-equiv ="refresh" content = "0; forsale.php " />';


    }if(isset($_GET['e_f'])){

echo '
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">برجاء تعديل البيانات المطلوبة</div>
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">اسم العائلة</label>
              <div class="col-sm-11">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="'.$edit_f['Family_Name'].'">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-1 col-form-label">حالة العائلة</label>
              <div class="col-sm-11">
                <input type="email" class="form-control" id="colFormLabel" placeholder="..">
              </div>
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
            <button type="submit" class="btn btn-primary" id="SaveRecord">حفظ</button>
          </div>
        </div>
      </div>
 '; }
 // ************************************************************************************************************************************************************************************************** -->
 // ************************************************************************************************************************************************************************************************** -->
 // ************************************************************************************************************************************************************************************************** -->
?>















































 <?php include('inc/footer.php'); ?>
