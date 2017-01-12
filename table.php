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
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                   <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> Gudang</a>
                    </li>
                    <li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Stok Barang</a>
                    </li>
						   <li  >
                        <a  href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Laporan</a>
                    </li>	
                      <li  >
                        <a class="active-menu"  href="table.php"><i class="fa fa-table fa-3x"></i> Daftar Harga</a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Tambah User </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Transaksi<span class="fa arrow"></span></a>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a   href="blank.php"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
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
                        <h5>Anda puas, kami senang </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Harga
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Item</th>
                                            <th>Nama Item/Barang</th>
                                            <th>Harga Pokok</th>
                                            <th>Harga Jual</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td class="center">5.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 6</td>
                                            <td>Win 98+</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td class="center">7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10001</td>
                                            <td>ANLENE GOLD 250 KOTAK</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10002</td>
                                            <td>BIORE MENS SRUCB 40 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10003</td>
                                            <td>BIORE FACIAL ACNE OIL CARE 40</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10004</td>
                                            <td>BIORE BF PURE MILD 100 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10005</td>
                                            <td>BIORE BF REFFIL DEODORANT 250 ML</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10006</td>
                                            <td>BIORE BF SWEET PEACH 100 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10007</td>
                                            <td>SHAMPOO SUNSLIK KUNING</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10008</td>
                                            <td>TROPICANA SLIM PLAIN 275 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10009</td>
                                            <td>TROPICANA SLIM SWEETER 100 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10010</td>
                                            <td>SUN TIM SAYUR DAN AYAM 120 </td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10011</td>
                                            <td>SUN TIM INSTAN TOMAT WORTEL AYAM 12</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10012</td>
                                            <td>SUN TIM INSTAN BERAS MERAH 100 BOX</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10013</td>
                                            <td>SUN BERAS MERAH 120 BOX</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10014</td>
                                            <td>SUN TOMAT WORTEL 120 BOX</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10015</td>
                                            <td>SUN SAYUR MAYUR 120 BOX</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10016</td>
                                            <td>SUN SARI BUAH 120 BOX</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10017</td>
                                            <td>SUN PISANG 120 BOX</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10018</td>
                                            <td>SUN MARIE BISCUIT 80 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10019</td>
                                            <td>PROMINA SARI BUAH 144 BOX</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10020</td>
                                            <td>PROMINA BERAS MERAH 144 BOX</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10021</td>
                                            <td>PROMINA TIM SAYUR AYAM 144 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10022</td>
                                            <td>PROMINA SARI PISANG 144 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10023</td>
                                            <td>PROMINA KACANG HIJAU 144 BOX</td>
                                            <td>O,OO</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10024</td>
                                            <td>PROMINA SUP JAGUNG AYAM</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10025</td>
                                            <td>COCA COLA ZERO SUGAR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10026</td>
                                            <td>SPRITE</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10027</td>
                                            <td>FANTA</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10028</td>
                                            <td>POCARI SWEAT</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10029</td>
                                            <td>SUSU ULTRA MILK COKLAT</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10030</td>
                                            <td>SUSU ULTRA MILK STRAWBERRY</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10031</td>
                                            <td>SUSU ULTRA MILK VANILLA</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10032</td>
                                            <td>KURSI PLASTIK</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10033</td>
                                            <td>MEJA PLASTIK</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10034</td>
                                            <td>KURSI TIGA KAKI</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10035</td>
                                            <td>MEJA BUNDAR MERAH</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10036</td>
                                            <td>CORNETTO DISC CHOCOLATE</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10037</td>
                                            <td>FITTING GANTUNG</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>10038</td>
                                            <td>KRAFT KEJU CAKE 16 GR </td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10039</td>
                                            <td>BISKUAT ENEGRI BANANA COCO 23 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10040</td>
                                            <td>SHAMPOO DOVE </td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>10041</td>
                                            <td>MONT BLANC PARFUME WOMAN</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>10042</td>
                                            <td>CLINIQUE EYESHADOW 213</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>10043</td>
                                            <td>PEPSODENT HERBAL 125 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10044</td>
                                            <td>PEPSODENT WHITENING 190 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>10045</td>
                                            <td>PEPSODENT SENSITIF 75 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>10046</td>
                                            <td>PEPSODENT SIKAT FAMILY 120 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>10047</td>
                                            <td>PEPSODENT SIKAT ULTRA CARE 120 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>10048</td>
                                            <td>PEPSODENT SIKAT DOUBLE CARE 120 GR</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>10049</td>
                                            <td>INDOMIE KARI AYAM</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>10050</td>
                                            <td>INDOMIE SOTO</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>10051</td>
                                            <td>INDOMIE GORENG</td>
                                            <td>0,00</td>
                                            <td class="center">0,00</td>
                                            <td class="center">Barang</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
              
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</php>
