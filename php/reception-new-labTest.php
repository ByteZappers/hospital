<?php 
include 'header.php';
include 'nav.php';
?>
<div class="container-fluid">
    <div class="page-content">
        <!-- BEGIN BREADCRUMBS -->
        <div class="breadcrumbs">
            <h1>New Lab Test</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Reception</a>
                </li>
                <li class="active">New Lab Test</li>
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
        <!-- END BREADCRUMBS -->
        <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
        <div class="page-content-container">
            <div class="page-content-row">
                <!-- END PAGE SIDEBAR -->
                <div class="page-content-col opd">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form role="form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control readOn" id="form_control_" readonly value="P035">
                                                        <label for="form_control_1">Token #:</label>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <span > Select date </span>
                                                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                    <i class="fa fa-calendar"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        <!-- /input-group -->
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control"  id="form_control_1" readonly value="tayyab">
                                                        <label for="form_control_1">Patient Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control"  id="form_control_1">
                                                        <label for="form_control_1">Relation with Patient</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control"  id="form_control_1">
                                                        <label for="form_control_1">Gardian Name</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Service Department</label>
                                                        <select class="bs-select form-control" data-live-search="true" data-size="8">
                                                            
                                                            <option value="EH">ECG</option>
                                                            <option value="YE" selected>Advanced</option>
                                                            <option value="ZM">Emergency</option>
                                                            <option value="ZW">ENT Procedure</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Test Name</label>
                                                        <select class="bs-select form-control" data-live-search="true" data-size="8">
                                                            
                                                            <option value="EH">ECG</option>
                                                            <option value="YE" selected>Advanced</option>
                                                            <option value="ZM">Emergency</option>
                                                            <option value="ZW">ENT Procedure</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">Rate:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">Qty</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">Amount</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">Dis. %</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">Rate</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-circle green som-btn-top">Add Lab Test</button>
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
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">Card #</label>
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
                                                <div class="col-md-12">
                                                   
                                                    <div class="">
                                                        
                                                        <div class="portlet-body">
                                                            <table data-toggle="table" data-url="../assets/global/plugins/bootstrap-table/data/data1.json" data-height="300"
                                                            data-search="true">
                                                                <thead>
                                                                    <tr>
                                                                        <th data-field="id" data-align="left">#</th>
                                                                        <th data-field="service" data-align="left">Service</th>
                                                                        <th data-field="name" data-align="left ">Test</th>
                                                                        <th data-field="price" data-align="left">Rate</th>
                                                                        <th data-field="price2" data-align="left">Qty</th>
                                                                        <th data-field="price3" data-align="left">Amount</th>
                                                                        <th data-field="price4" data-align="left">Dis. %</th>
                                                                        <th data-field="price5" data-align="left">Rate</th>
                                                                        <th data-field="price1" data-align="left">Report Date</th>
                                                                        <th data-field="remove" data-align="left">Remove</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions noborder">
                                            <button type="button" class="btn blue">Submit</button>
                                            <button type="button" class="btn blue"><i class="fa fa-print"></i> Print</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END SIDEBAR CONTENT LAYOUT -->
    </div>
    <a href="#index" class="go2top">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- END FOOTER -->
</div>
<?php 
include 'footer.php';
?>