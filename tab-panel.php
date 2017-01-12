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
                        <a  class="active-menu" href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Stok Barang</a>
                    </li>
						   <li  >
                        <a  href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Laporan</a>
                    </li>	
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Daftar Harga</a>
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
                     <h2>TokoKu.com </h2>   
                        <h5>Anda puas, kami senang :) . </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                                 
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Stok Barang Minuman
                        </div>
                        <div class="panel-body">
                            <p>Barang yang tersedia 78%</p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Stok Barang Makanan
                        </div>
                        <div class="panel-body">
                            <p>Barang yang tersedia 84%</p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Stok Barang Perlengkapan Rumah Tangga
                        </div>
                        <div class="panel-body">
                            <p>Barang yang tersedia 58%</p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
            </div>
                   <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Stok Barang Alat Tulis
                        </div>
                        <div class="panel-body">
                            <p>Barang yang tersedia 70%</p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Stok Barang Elektronik
                        </div>
                        <div class="panel-body">
                            <p>Barang yang tersedia 68% </p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Stok Barang Pakaian 
                        </div>
                        <div class="panel-body">
                            <p>Barang yang tersedia 50%</p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
            </div>
                    
                    <!-- /. ROW  -->

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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</php>
