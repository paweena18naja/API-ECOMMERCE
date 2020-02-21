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

				$servername = '192.168.3.21'; //   Name server
				$databasename = 'Dplus_ECOMMERCE'; // Name database  Microsoft SQL
				$user = 'axdata'; // Username
				$pass = 'ax@data'; // Password
				$connection_string = "DRIVER={SQL Server};SERVER=$servername;DATABASE=$databasename;AutoTranslate=no";  //à»ç¹¡ÒÃ¡ÓË¹´ connection string ã¹¡ÒÃ connect ODBC
				$link = odbc_connect($connection_string,$user, $pass) or die ("connect failed");   

				if ($link->connect_error) {
					die("Connection failed: " . $link->connect_error);
				} 
				//echo "connect SuccessResponse". "\n";

				//header('Content-type:application/json;charset=WINDOWS-874');
				$url= "https://www.focusshield.com/wc-api/v3/orders?consumer_key=ck_61539ae5df52dd25c97d6a565ea994164ef60e1a&consumer_secret=cs_34518f3326f5f3d11529820f0c4842af5537451b&status=processing&filter[limit]=15";
				$content = file_get_contents($url);
				$json = json_decode($content, true);
				//print_r($json);

				$x = 0;
				while($x <=  $order_id = $json['orders'][$x]['id'].length) {
					
					$order_id 				= iconv("UTF-8","TIS-620",$json['orders'][$x]['order_number']);	
					$first_name 			= iconv("UTF-8","TIS-620",$json['orders'][$x]['billing_address']['first_name']);	
					$last_name 				= iconv("UTF-8","TIS-620",$json['orders'][$x]['billing_address']['last_name']);	
					$setAddress1 			= iconv("UTF-8","TIS-620",$json['orders'][$x]['billing_address']['address_1']);	
					$setAddress2 			= iconv("UTF-8","TIS-620",$json['orders'][$x]['billing_address']['city']);	
					$setAddress3 			= iconv("UTF-8","TIS-620",$json['orders'][$x]['billing_address']['address_2']);	
					$setPostcode 			= iconv("UTF-8","TIS-620",$json['orders'][$x]['billing_address']['postcode']);	
					$setPhoneNumber 		= iconv("UTF-8","TIS-620",$json['orders'][$x]['billing_address']['phone']);
					$setEmail 				= iconv("UTF-8","TIS-620",$json['orders'][$x]['billing_address']['email']);
					$setShipping 			= iconv("UTF-8","TIS-620",$json['orders'][$x]['shipping_methods']);
					$setPayment_id 			= iconv("UTF-8","TIS-620",$json['orders'][$x]['payment_details']['method_id']);
					$setPayment_title 		= iconv("UTF-8","TIS-620",$json['orders'][$x]['billing_address']['method_title']);
					$setSubtotal 			= iconv("UTF-8","TIS-620",$json['orders'][$x]['subtotal']);
					$setSubtotal 			= intval($setSubtotal);	
					$setTotal_discount 		= iconv("UTF-8","TIS-620",$json['orders'][$x]['total_discount']);
					$setTotal_discount 		= intval($setTotal_discount);
					$setTotal_shipping 		= iconv("UTF-8","TIS-620",$json['orders'][$x]['total_shipping']);
					$setTotal_shipping 		= intval($setTotal_shipping);
					$setTotal_price			= iconv("UTF-8","TIS-620",$json['orders'][$x]['total']);
					$setTotal_price 		= intval($setTotal_price);	

					$setAddress = $setAddress1.'  '.$setAddress2.' '.$setAddress3;
					$setName= $first_name.'  '.$last_name ;
					
					$strSQL_check = "SELECT ORDER_NUMBER FROM dbo.WOOCOMMERCE_BEWELL WHERE (ORDER_NUMBER = '$order_id')";       	
					$result_check = odbc_exec($link,$strSQL_check);  
					ob_start();
					$num_row = odbc_result_all($result_check);
					ob_clean();
					if ($num_row == 0 AND $order_id <> null){
					?>
					<font style="opacity:.1">.</font>
					<?php
					//echo "Insert new order Completed"."\n";
						$strSQL = "INSERT INTO WOOCOMMERCE_BEWELL(ORDER_NUMBER,CUSTOMER_NAME,ADDRESS,POSTCODE,PHONE_NUMBER,EMAIL,SHIPPING,PAYMENT_ID,PAYMENT_TITLE,SUBTOTAL,TOTAL_SHIPPING,TOTAL_DISCOUNT,TOTAL_PRICE,SHOP_CHANNEL,STATUS_WOO)
						VALUES('$order_id','$setName','$setAddress','$setPostcode','$setPhoneNumber','$setEmail','$setShipping','$setPayment_id','$setPayment_title','$setSubtotal','$setTotal_shipping','$setTotal_discount','$setTotal_price','Woocommerce','Processing')";
						$result = odbc_exec($link,$strSQL); 
						//echo $result;
						$line_items = $json['orders'][$x]['line_items'];
						$sumline_items =  count($line_items);
						$y = 0;
							while($sumline_items > 0){
								$num = $x;
								$ID					= iconv("UTF-8","WINDOWS-874",$json['orders'][$num]['line_items'][$y]['id']);
								$SKU				= iconv("UTF-8","WINDOWS-874",$json['orders'][$num]['line_items'][$y]['sku']);
								$ITEMNAME 			= iconv("UTF-8","WINDOWS-874",$json['orders'][$num]['line_items'][$y]['name']);	
								$PRICE 				= iconv("UTF-8","WINDOWS-874",$json['orders'][$num]['line_items'][$y]['price']);
								$PRICE 				= intval($PRICE);					
								$QTY				= iconv("UTF-8","WINDOWS-874",$json['orders'][$num]['line_items'][$y]['quantity']);	
									
								//echo 'Check num = '.$x. "\n";
								//echo 'Check sumline_items = '.$sumline_items. "\n";
								//echo 'Check order_id = '.$order_id. "\n";
								//echo 'Check Sku = '.$SKU. "\n";
								//echo 'Check ITEMNAME = '.$ITEMNAME. "\n";
								//echo 'Check PRICE = '.$PRICE. "\n";
								//echo 'Check QTY = '.$QTY. "\n\n\n\n\n\n";
									
									$strSQL = "INSERT INTO WOOCOMMERCE_BEWELL_ITEM (ID,ORDER_NUMBER,SKU,ITEMNAME,PRICE,QTY) 
									VALUES('$ID','$order_id','$SKU','$ITEMNAME','$PRICE','$QTY')";
									$result = odbc_exec($link,$strSQL); 
									$y++;
									$sumline_items--;
							}		 
					}			
					else if($num_row > 0 ) {?>
						<font style="opacity:.1">.</font>
						<?php
					}  
					$x++;
				}     
			?>
		
		

              
	
		
<body>
<div style="overflow-x:auto;">
<table id="example" class="display" cellspacing="0">
   <!--ส่วนหัว-->
   <thead>
            <tr>
				<th width="80"> <div align="center">Order_Number</div></th>
				<th width="80"> <div align="center">Name   </div></th>
				<th width="80"> <div align="center">Address     </div></th>
				<th width="50"> <div align="center">Tel</div></th>
				<th width="50"> <div align="center">Email</div></th>
				<th width="50"> <div align="center">Shipping</div></th>
				<th width="50"> <div align="center">Payment</div></th>
				<th width="50"> <div align="center">NetPrice</div></th>
				<th width="50"> <div align="center">Status_Woo</div></th>
				<th width="50"> <div align="center">Detail</div></th>
			</tr>
    </thead>

 <!-- ส่วนท้าย -->   
    <tfoot>
            <tr>
				<th width="80"> <div align="center">Order_Number</div></th>
				<th width="80"> <div align="center">Name   </div></th>
				<th width="80"> <div align="center">Address     </div></th>
				<th width="50"> <div align="center">Tel</div></th>
				<th width="50"> <div align="center">Email</div></th>
				<th width="50"> <div align="center">Shipping</div></th>
				<th width="50"> <div align="center">Payment</div></th>
				<th width="50"> <div align="center">NetPrice</div></th>
				<th width="50"> <div align="center">Status_Woo</div></th>
				<th width="50"> <div align="center">Detail</div></th>
			</tr>
        </tfoot>
 <!--ส่วนเนื้อหา -->
  	<tbody>
			<?php
									
$sql = "SELECT * FROM dbo.WOOCOMMERCE_BEWELL ORDER BY ORDER_NUMBER DESC";
$result = odbc_exec($link,$sql);

while($row2 = odbc_fetch_array($result)){
						
						?>
						  <tr>
							<td align="left"><?php echo $row2["ORDER_NUMBER"];?></td>
							<td><?php echo iconv('TIS-620','UTF-8//ignore',$row2["CUSTOMER_NAME"]);?></td>								
							<td><?php echo iconv('TIS-620','UTF-8//ignore',$row2["ADDRESS"].$row2["POSTCODE"]);?></td>
							<td><?php echo iconv('TIS-620','UTF-8//ignore',$row2["PHONE_NUMBER"]);?></td>
							<td><?php echo iconv('TIS-620','UTF-8//ignore',$row2["EMAIL"]);?></td>
							<td><?php echo iconv('TIS-620','UTF-8//ignore',$row2["SHIPPING"]);?></td>
							<td><?php echo iconv('TIS-620','UTF-8//ignore',$row2["PAYMENT_ID"]);?></td>
							<td><?php echo iconv('TIS-620','UTF-8//ignore',$row2["TOTAL_PRICE"]);?></td>
							<td><?php echo iconv('TIS-620','UTF-8//ignore',$row2["STATUS_WOO"]);?></td>
							<td><a href='http://www.dplus-system.com:8080/dplus-commerce/ecommerce/dashboard/woocommerce/woocommerce-api-bewell-detail.php/?on=<?php echo $row2["ORDER_NUMBER"]; ?>'>Detail</a></td>
						  </tr>
						  
						<?php
						}
						?>
      </tbody>
 
    </table>
	</div>	
</body>
	
		
		
		
		
		
		
		
		
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





