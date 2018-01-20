<?php 
include 'header.php';
include 'nav.php';
?>
<div class="container-fluid">
    <div class="page-content">
        <div class="page-content-col">
        	<div class="breadcrumbs">
        	    <h1>Invoice</h1>
        	    <ol class="breadcrumb">
        	        <li>
        	            <a href="#">Home</a>
        	        </li>
        	        <li>
        	            <a href="#">Reception</a>
        	        </li>
        	        <li class="active">View Bill</li>
        	    </ol>
        	    <!-- Sidebar Toggle Button -->
        	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".page-sidebar">
        	        <span class="sr-only">Toggle navigation</span>
        	        <span class="toggle-icon">
        	            <span class="icon-bar"></span>
        	            <span class="icon-bar"></span>
        	            <span class="icon-bar"></span>
        	        </span>
        	    </button>
        	    <!-- Sidebar Toggle Button -->
        	</div>

            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="invoice">
                <div class="row invoice-logo">
                    <div class="col-xs-6 invoice-logo-space">
                        <img src="../assets/pages/media/invoice/walmart.png" class="img-responsive" alt="" /> </div>
                    <div class="col-xs-6">
                        <p> #5652256 / 28 Feb 2013
                            <span class="muted"> Consectetuer adipiscing elit </span>
                        </p>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-xs-4">
                        <h3>Patient:</h3>
                        <ul class="list-unstyled">
                            <li> John Doe </li>
                            <li> Mr Nilson Otto </li>
                            <li> FoodMaster Ltd </li>
                            <li> Madrid </li>
                            <li> Spain </li>
                            <li> 1982 OOP </li>
                        </ul>
                    </div>
                    <div class="col-xs-4">
                        <h3>About:</h3>
                        <ul class="list-unstyled">
                            <li> Drem psum dolor sit amet </li>
                            <li> Laoreet dolore magna </li>
                            <li> Consectetuer adipiscing elit </li>
                            <li> Magna aliquam tincidunt erat volutpat </li>
                            <li> Olor sit amet adipiscing eli </li>
                            <li> Laoreet dolore magna </li>
                        </ul>
                    </div>
                    <div class="col-xs-4 invoice-payment">
                        <h3>Payment Details:</h3>
                        <ul class="list-unstyled">
                            <li>
                                <strong>V.A.T Reg #:</strong> 542554(DEMO)78 </li>
                            <li>
                                <strong>Account Name:</strong> FoodMaster Ltd </li>
                            <li>
                                <strong>SWIFT code:</strong> 45454DEMO545DEMO </li>
                            <li>
                                <strong>Account Name:</strong> FoodMaster Ltd </li>
                            <li>
                                <strong>SWIFT code:</strong> 45454DEMO545DEMO </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Item </th>
                                    <th class="hidden-xs"> Description </th>
                                    <th class="hidden-xs"> Quantity </th>
                                    <th class="hidden-xs"> Unit Cost </th>
                                    <th> Total </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> Treatment </td>
                                    <td class="hidden-xs"> Dr. Farooq treatment Fee </td>
                                    <td class="hidden-xs"> 1 </td>
                                    <td class="hidden-xs"> Rs: 75 </td>
                                    <td> Rs: 75 </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Medicens </td>
                                    <td class="hidden-xs"> Panadol </td>
                                    <td class="hidden-xs"> 5 </td>
                                    <td class="hidden-xs"> Rs: 10 </td>
                                    <td> Rs: 50 </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> Medicens </td>
                                    <td class="hidden-xs"> Disprin	</td>
                                    <td class="hidden-xs"> 2 </td>
                                    <td class="hidden-xs"> Rs: 9 </td>
                                    <td> Rs: 18 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="well">
                            <address>
                                <strong>Loop, Inc.</strong>
                                <br/> 795 Park Ave, Suite 120
                                <br/> San Francisco, CA 94107
                                <br/>
                                <abbr title="Phone">P:</abbr> (234) 145-1810 </address>
                            <address>
                                <strong>Full Name</strong>
                                <br/>
                                <a href="mailto:#"> first.last@email.com </a>
                            </address>
                        </div>
                    </div>
                    <div class="col-xs-8 invoice-block">
                        <ul class="list-unstyled amounts">
                            <li>
                                <strong>Sub - Total amount:</strong> Rs: 9265 </li>
                            <li>
                                <strong>Discount:</strong> 12.9% </li>
                            <li>
                                <strong>VAT:</strong> ----- </li>
                            <li>
                                <strong>Grand Total:</strong> Rs: 12489 </li>
                        </ul>
                        <br/>
                        <a class="btn btn-lg blue hidden-print margin-bottom-5" onclick="javascript:window.print();"> Print
                            <i class="fa fa-print"></i>
                        </a>
                        <a class="btn btn-lg green hidden-print margin-bottom-5"> Submit Your Invoice
                            <i class="fa fa-check"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
    </div>
    <a href="#index" class="go2top">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- END FOOTER -->
</div>
<?php 
include 'footer.php';
?>