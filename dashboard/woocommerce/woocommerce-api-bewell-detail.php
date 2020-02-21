<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Ecommerce</title>

    <!-- Bootstrap -->
    <link href="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/build/css/custom.min.css" rel="stylesheet">	
</head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Dplus Mag</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Adminmag</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="/dplus-commerce/ecommerce/dashboard/index.html"><i class="fa fa-home"></i>Home</a></li>
					<li><a><i class="fa fa-edit"></i>Woocommerce<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
						<li><a>Focusshield<span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="/dplus-commerce/ecommerce/dashboard/woocommerce/woocommerce-api-focusshield.php">Dashboard</a></li>
								<li><a href="form_advanced.html">Waiting</a></li>
							</ul>
						</li>
						<li><a>Bewell<span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="/dplus-commerce/ecommerce/dashboard/woocommerce/woocommerce-api-bewell.php">Dashboard</a></li>
								<li><a href="form_advanced.html">Waiting</a></li>
							</ul>
						</li>
                    </ul>
					</li>
				  
                    <li><a><i class="fa fa-desktop"></i>Shopee<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
						<li><a>Focusshield<span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="form_advanced.html">Dashboard</a></li>
								<li><a href="form_advanced.html">Waiting</a></li>
							</ul>
						</li>
						<li><a>Bewell<span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="form_advanced.html">Dashboard</a></li>
								<li><a href="form_advanced.html">Waiting</a></li>
							</ul>
						</li>
                    </ul>
					</li>
                      <li><a><i class="fa fa-clone"></i>Lazada<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
						<li><a>Focusshield<span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="form_advanced.html">Dashboard</a></li>
								<li><a href="form_advanced.html">Waiting</a></li>
							</ul>
						</li>
						<li><a>Bewell<span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="form_advanced.html">Dashboard</a></li>
								<li><a href="form_advanced.html">Waiting</a></li>
							</ul>
						</li>
                    </ul>
					</li>

                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i>Coming Soon<span class="fa fa-chevron-down"></span></a>
                   
                  </li>
                  <li><a><i class="fa fa-windows"></i>Coming Soon<span class="fa fa-chevron-down"></span></a>
                    
                  </li>
                  <li><a><i class="fa fa-sitemap"></i>Coming Soon<span class="fa fa-chevron-down"></span></a>
                   
                  </li>                  
                 
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Adminmag
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

          
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        

		

			<?php
				$getorder = $_GET["on"];
				$servername = '192.168.3.21'; //   Name server
				$databasename = 'Dplus_ECOMMERCE'; // Name database  Microsoft SQL
				$user = 'axdata'; // Username
				$pass = 'ax@data'; // Password
				$connection_string = "DRIVER={SQL Server};SERVER=$servername;DATABASE=$databasename;AutoTranslate=no";  //à»ç¹¡ÒÃ¡ÓË¹´ connection string ã¹¡ÒÃ connect ODBC
				$link = odbc_connect($connection_string,$user, $pass) or die ("connect failed");   

				if ($link->connect_error) {
					die("Connection failed: " . $link->connect_error);
				} 
				else{
									
				$sql = "SELECT * FROM dbo.WOOCOMMERCE_BEWELL WHERE ORDER_NUMBER = '$getorder'";
				$result = odbc_exec($link,$sql);
					while($row2 = odbc_fetch_array($result)){
						 $customer_name 	= iconv('TIS-620','UTF-8//ignore',$row2["CUSTOMER_NAME"]);
						 $shipping	 		= iconv('TIS-620','UTF-8//ignore',$row2["SHIPPING"]);
						 $payment_id 		= iconv('TIS-620','UTF-8//ignore',$row2["PAYMENT_ID"]);
						 $subtotal 			= iconv('TIS-620','UTF-8//ignore',$row2["SUBTOTAL"]);
						 $total_shipping 	= iconv('TIS-620','UTF-8//ignore',$row2["TOTAL_SHIPPING"]);
						 $total_discount 	= iconv('TIS-620','UTF-8//ignore',$row2["TOTAL_DISCOUNT"]);
						 $total_price 		= iconv('TIS-620','UTF-8//ignore',$row2["TOTAL_PRICE"]);
						 $status_woo 		= iconv('TIS-620','UTF-8//ignore',$row2["STATUS_WOO"]);
						 $total_quantity 		= iconv('TIS-620','UTF-8//ignore',$row2["TOTAL_QUANTITY"]);
					}
				?>

						<center>
						<table width="650" border="0">
								<div class="row">
									<div class="col-md-12" align="center"><font size="5" color="black"><b>รายละเอียดเลข Order</b></font></div>
								</div><br>
									<tr>
										<td width="30%">
											<p style="text-align:left"><font>Order_Number</font></p>
										</td>
										<!--
										<td width="50%">
											<p style="text-align:left"><input name="editname" type="text" id="editname" placeholder=""  style="background:#ffffff; color:black; width: 150px;" value="<?php echo $getorder;?>" ></p>
										</td>
										-->
										<td width="70%">
											<p style="text-align:left"><?php echo $customer_name;?></p>
										</td>
									</tr>
									<tr>
										<td width="30%">
											<p style="text-align:left"><font>Shipping</font></p>
										</td>
										<td width="70%">
											<p style="text-align:left"><?php echo $shipping;?></p>
										</td>
									</tr>
									<tr>
										<td width="30%">
											<p style="text-align:left"><font>Payment</font></p>
										</td>
										<td width="70%">
											<p style="text-align:left"><?php echo $payment_id;?></p>
										</td>
									</tr>
									<tr>
										<td width="30%">
											<p style="text-align:left"><font>Total Quantity</font></p>
										</td>
										<td width="70%">
											<p style="text-align:left"><?php echo $total_quantity;?></p>
										</td>
									</tr>
									<tr>
										<td width="30%">
											<p style="text-align:left"><font>Price</font></p>
										</td>
										<td width="70%">
											<p style="text-align:left"><?php echo $subtotal;?></p>
										</td>
									</tr>
									<tr>
										<td width="30%">
											<p style="text-align:left"><font>Total_Shipping</font></p>
										</td>
										<td width="70%">
											<p style="text-align:left"><?php echo $total_shipping;?></p>
										</td>
									</tr>
									<tr>
										<td width="30%">
											<p style="text-align:left"><font>Total_Discount</font></p>
										</td>
										<td width="70%">
											<p style="text-align:left"><?php echo $total_discount;?></p>
										</td>
									</tr>
									<tr>
										<td width="30%">
											<p style="text-align:left"><font>NetPrice</font></p>
										</td>
										<td width="70%">
											<p style="text-align:left"><?php echo $total_price;?></p>
										</td>
									</tr>
									<tr>
										<td width="30%">
											<p style="text-align:left"><font>Status_Woo</font></p>
										</td>
										<td width="70%">
											<p style="text-align:left"><?php echo $status_woo;?></p>
										</td>
									</tr>
								
						</table>
						<hr width="70%">
						</center>
				
				<?php				
				$sql = "SELECT * FROM dbo.WOOCOMMERCE_BEWELL_ITEM WHERE ORDER_NUMBER = '$getorder'";
				$result = odbc_exec($link,$sql);
				$i=0;
					while($row2 = odbc_fetch_array($result)){
						 $sku[$i] 		= iconv('TIS-620','UTF-8//ignore',$row2["SKU"]);
						 $itemname[$i]	= iconv('TIS-620','UTF-8//ignore',$row2["ITEMNAME"]);
						 $price[$i]		= iconv('TIS-620','UTF-8//ignore',$row2["PRICE"]);
						 $qty[$i] 		= iconv('TIS-620','UTF-8//ignore',$row2["QTY"]);
						 //echo 'Test'.$i.'='.$sku[$i];
						 
						 ?>
						 <center>
						 <table width="650" border="0">
							<div class="row">
								<div class="col-md-12" align="center"><font size="5" color="black"><b>Order Item No. <?php echo $i+1;?></b></font></div>
							</div><br>
								<tr>
									<td width="30%">
										<p style="text-align:left"><font>SKU</font></p>
									</td>
									<!--
									<td width="50%">
										<p style="text-align:left"><input name="editname" type="text" id="editname" placeholder=""  style="background:#ffffff; color:black; width: 150px;" value="" ></p>
									</td>
									-->
									<td width="70%">
										<p style="text-align:left"><?php echo $sku[$i];?></p>
									</td>
								</tr>
								<tr>
									<td width="30%">
										<p style="text-align:left"><font>ITEMNAME</font></p>
									</td>
									<td width="70%">
										<p style="text-align:left"><?php echo $itemname[$i]	;?></p>
									</td>
								</tr>
								<tr>
									<td width="30%">
										<p style="text-align:left"><font>Price</font></p>
									</td>
									<td width="70%">
										<p style="text-align:left"><?php echo  $price[$i];?></p>
									</td>
								</tr>
								<tr>
									<td width="30%">
										<p style="text-align:left"><font>QTY</font></p>
									</td>
									<td width="70%">
										<p style="text-align:left"><?php echo  $qty[$i];?></p>
									</td>
								</tr>								
						</table>
						<hr width="70%">
						</center>
						
			<?php
					$i++;
					}
				}
			?>
			
		
		
		
		

								<div class="row">
									<div class="col-md-12" align="center">
										<button type="submit" name="submitback" style="color:green; width: 140px;" onclick="window.history.go(-1); return false;">Back</button>
									</div>
								</div><br>
		
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/Flot/jquery.flot.js"></script>
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/Flot/jquery.flot.time.js"></script>
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/moment/min/moment.min.js"></script>
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="http://www.dplus-system.com:8080/dplus-commerce/ecommerce/build/js/custom.min.js"></script>
	
  </body>
</html>



<!-- Image Filter
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
-->


<!-- Color bg & Color Border Table-->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>	
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
	<script>
		
$(document).ready(function() {
	/*
	$('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ]
    } );
	*/
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
	
	
	
	
	
	
} );

	</script>





