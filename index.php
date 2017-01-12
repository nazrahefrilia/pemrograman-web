<?php  
    session_start();
?>

<!DOCTYPE html>
<php xmlns="http://www.w3.org/1999/xphp">

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Sistem Kasir</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sistem Kasir</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> Gudang</a>
                    </li>
                    <li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Stok Barang</a>
                    </li>
						   <li  >
                        <a   href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Laporan</a>
                    </li>	
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Daftar Harga</a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Tambah User </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Transaksi<span class="fa arrow"></span></a>
                                            </li>  
                  <li  >
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>TokoKu.com</h2>   
                        <h5>Anda puas, kami senang :) </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelop-e
                    o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 New</p>
                    <p class="text-muted">Messages</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">30 Tasks</p>
                    <p class="text-muted">Remaining</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Orders</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue">
                    <i class="fa fa-warning"></i>
                </span>

                    <p class="text-muted">
                          <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                              Barang yang termasuk ke dalam sale adalah barang-barang peralatan rumah tangga. 
                              Alat tulis mendapatkan diskon apabila kosumen membawa kartu pelajar saat melakukan pembayaran di kasir . 
                               </span>
                    </p>


              
                 
                 <!-- /. ROW  --> 
<form method="POST" action="simpan_penjualan.php">
<table border="0" align="center">
<tr> 
<td colspan="3" align="center"><h2>Form Inputan</h2></td>
</tr>
<tr>
<td>Nama Barang</td>
<td>:</td>
<td><input type="text" name="nama_barang" id="nama_barang" /></td>
</tr>
<tr>
<td>Jenis Barang</td>
<td>:</td>
<td><input type="text" name="jenis_barang" id="jenis_barang" /></td>
</tr>
<tr>
<td>Harga Satuan</td>
<td>:</td>
<td><input type="text" name="harga_satuan" id="harga_satuan" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
<tr>
<td>Jumlah Beli</td>
<td>:</td>
<td><input type="text" name="jumlah_beli" id="jumlah_beli" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
<tr>
<td>Total Bayar</td>
<td>:</td>
<td><input type="text" name="total_bayar" id="total_bayar" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
</tr>
<tr>
<td>Diskon</td>
<td>:</td>
<td><input type="text" name="diskon" id="diskon" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
</tr>
<tr>
<td>Total Setelah Diskon</td>
<td>:</td>
<td><input type="text" name="setelah_diskon" id="setelah_diskon" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
</tr>
<tr>
<td>Bayar</td>
<td>:</td>
<td><input type="text" name="bayar" id="bayar" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
<tr>
<td>Kembalian</td>
<td>:</td>
<td><input type="text" name="kembalian" id="kembalian" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
</tr>
<script type="text/javascript">
  function mulaiHitung(){
    Interval = setInterval("hitung()",1);
  }
  function hitung(){
    harga_satuan  = parseInt(document.getElementById("harga_satuan").value);
    jumlah_beli   = parseInt(document.getElementById("jumlah_beli").value);
    total_bayar   = harga_satuan * jumlah_beli;
    document.getElementById("total_bayar").value = total_bayar;

diskon = "";
persen = "";
    if (total_bayar >= 100000) {
      diskon = (0/100)*total_bayar;
      persen = "0%";
    }
    else if (total_bayar > 100000 && total_bayar <= 200000) {
      diskon = (10/100000)*total_bayar;
      persen = "10%";
    }
    else if (total_bayar > 200000 && total_bayar <= 200000) {
      diskon = (20/100000)*total_bayar;
      persen = "20%"
    }
     else if (total_bayar > 300000) {
      diskon = (30/100000)*total_bayar;
      persen = "30%"
    }

    document.getElementById("diskon").value = persen+"-->" +diskon;
    setelah_diskon = total_bayar - diskon;
    document.getElementById("setelah_diskon").value = setelah_diskon;
    bayar       = parseInt(document.getElementById("bayar").value);
    Kembalian     = bayar - setelah_diskon;
    document.getElementById("kembalian").value = kembalian;
  }
  function berhentiHitung(){
    clearInterval(Interval);
  }
</script>
<tr>
<td></td>
<td></td>
<td><input type="submit" value="Simpan" /><input type="reset" value="Reset" /></td>
</tr>
</table>
</form>
          
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</php>
