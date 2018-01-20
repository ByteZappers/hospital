<?php 
include 'header.php';
include 'nav.php';
?>
<div class="container-fluid">
    <div class="page-content">
        <div class="page-content-col">
        	<div class="breadcrumbs">
        	    <h1>Store View Bill</h1>
        	    <ol class="breadcrumb">
        	        <li>
        	            <a href="#">Home</a>
        	        </li>
        	        <li>
        	            <a href="#">Store</a>
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
                <hr/>
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Medicens </th>
                                    <th class="hidden-xs"> Timing </th>
                                    <th class="hidden-xs"> Dr. Qty   </th>
                                    <th class="hidden-xs"> Patient Qty </th>
                                    <th class="hidden-xs"> Unit Price </th>
                                    <th> Total </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> Panadol </td>
                                    <td class="hidden-xs"> 1-0-0 </td>
                                    <td class="hidden-xs"> 5 Days </td>
                                    <td class="hidden-xs"> 
                                        <div class="input-group store-txt">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn grey" type="button">Days</button>
                                            </span>
                                        </div>
                                    </td>
                                    <td> Rs: 7 </td>
                                    <td> Rs: 75 </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Disprin </td>
                                    <td class="hidden-xs"> 0-0-1 </td>
                                    <td class="hidden-xs"> 1 Day   </td>
                                    <td class="hidden-xs"> 
                                        <div class="input-group store-txt">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn grey" type="button">Days</button>
                                            </span>
                                        </div>
                                    </td>
                                    <td> Rs: 7 </td>
                                    <td> Rs: 50 </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> Panadol </td>
                                    <td class="hidden-xs"> 0-0-1 	</td>
                                    <td class="hidden-xs"> 2 week</td>
                                    <td class="hidden-xs"> 
                                        <div class="input-group store-txt">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn grey" type="button">Days</button>
                                            </span>
                                        </div>
                                    </td>
                                    <td> Rs: 7 </td>
                                    <td> Rs: 18 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control"  id="form_control_1">
                            <label for="form_control_1">Total Bill</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control"  id="form_control_1">
                            <label for="form_control_1">Discount</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" id="form_control_1">
                            <label for="form_control_1">Received Amount</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group form-md-radios">
                            <label>Payment Via</label>
                            <div class="md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio66" name="radio2" class="md-radiobtn">
                                    <label for="radio66">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Cash</label>
                                </div>
                                <div class="md-radio">
                                    <input type="radio" id="radio77" name="radio2" class="md-radiobtn" checked>
                                    <label for="radio77">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Cheque </label>
                                </div>
                                <div class="md-radio">
                                    <input type="radio" id="radio88" name="radio2" class="md-radiobtn">
                                    <label for="radio88">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Credit Card </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" id="form_control_1">
                            <label for="form_control_1">#</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" id="form_control_1">
                            <label for="form_control_1">Balance</label>
                        </div>
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
                        
                        <br/>
                        <a class="btn btn-lg blue hidden-print margin-bottom-5" onclick="javascript:window.print();"> Print
                            <i class="fa fa-print"></i>
                        </a>
                        <a class="btn btn-lg green hidden-print margin-bottom-5"> Submit Bill
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