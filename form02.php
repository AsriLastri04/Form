<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<br>
<h1>Belanja Online</h1>
<hr>
<div class="container-fluid">
    <div class="row">

      <!-- Form -->
      <div class="col-md-9 bg-light p-5">       
<form action = "form02.php" method="POST">
<form>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" value="Kirim" name="proses" class="bg-success">
    </div>
  </div>
</form>
</div>
<!-- Bagian Daftar Harga -->
<div class="col-md-3">
      <ul class="list-group">
  <li class="list-group-item active"><h5>Daftar Harga</h5></li>
  <li class="list-group-item">Tv : 4.200.000</li>
  <li class="list-group-item">  Kulkas : 3.100.000</li>
  <li class="list-group-item">Mesin Cuci : 3.800.000</li>
  <li class="list-group-item active">Harga dapat berubah setiap saat</li>
</ul>
    </div>
  </div>
</div>
<br>
<hr>



<?php
$proses = $_POST['proses'];
$customer = $_POST['customer'];
$produk_pilihan = $_POST['produk'];
$jumlah_beli = $_POST['jumlah'];
$harga_tv = 4200000;
$harga_kulkas = 3100000;
$harga_mesincuci = 3800000;
$total = 0;

    // if else

    if($produk_pilihan == 'TV'){
      $total = $harga_tv*$jumlah_beli;
    }elseif ($produk_pilihan == 'Kulkas') {
      $total = $harga_kulkas*$jumlah_beli;
    }elseif ($produk_pilihan == 'Mesin Cuci'){
      $total = $harga_mesincuci*$jumlah_beli;
    }else{
      $total = 0;
    }
    
    echo 'Proses : '.$proses;
    echo '<br> Nama Customer : '.$customer;
    echo '<br> Produk : '.$produk_pilihan;
    echo '<br> Jumlah Produk : '.$jumlah_beli;
    echo '<br> Total Harga : Rp. '.$total;
?>
</body>
</html>