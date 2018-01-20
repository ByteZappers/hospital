<?php 
include 'header.php';
include 'nav.php';
?>
<div class="container-fluid">
    <div class="page-content">
        <!-- BEGIN BREADCRUMBS -->
        <div class="breadcrumbs">
            <h1>Patient Treatment</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Doctor</a>
                </li>
                <li class="active">Patient Treatment</li>
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
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control"  id="form_control_1" value="Tayyab" readonly>
                                                        <label for="form_control_1">Patient Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control"  id="form_control_1" value="19" readonly>
                                                        <label for="form_control_1">Age</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <select class="form-control edited" id="form_control_1" readonly>
                                                            <option value="2" selected>Y</option>
                                                            <option value="3" >M</option>
                                                            <option value="4">D</option>
                                                        </select>
                                                        <label for="form_control_1">:</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-1">
                                                    <div class="form-group form-md-radios">
                                                        <label>Gender</label>
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio77" name="radio2" class="md-radiobtn" checked readonly>
                                                                <label for="radio77">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Male </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control"  id="form_control_1" readonly value="Father">
                                                        <label for="form_control_1">Relation with Patient</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control"  id="form_control_1" value="Salamuddin" readonly>
                                                        <label for="form_control_1">Gardian Name</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control"  id="form_control_1">
                                                        <label for="form_control_1">Weight</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control"  id="form_control_1">
                                                        <label for="form_control_1">Temperature</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">B.p</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">Sugar</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Assign Medicens</label>
                                                        <select class="bs-select form-control" data-live-search="true" data-size="8">
                                                            <option selected="selected">Select Medicens</option>
                                                            <option>Ziac</option>
                                                            <option>Ziagen</option>
                                                            <option>Ziana Gel</option>
                                                            <option>Pfizer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
													<label>Timings</label>
                                                	<div class="md-checkbox-inline">
                                                	    <div class="md-checkbox">
                                                	        <input type="checkbox" id="checkbox30" class="md-check">
                                                	        <label for="checkbox30">
                                                	            <span></span>
                                                	            <span class="check"></span>
                                                	            <span class="box"></span> Morning </label>
                                                	    </div>
                                                	    <div class="md-checkbox has-error">
                                                	        <input type="checkbox" id="checkbox31" class="md-check" checked>
                                                	        <label for="checkbox31">
                                                	            <span></span>
                                                	            <span class="check"></span>
                                                	            <span class="box"></span> After Noon </label>
                                                	    </div>
                                                	    <div class="md-checkbox has-warning">
                                                	        <input type="checkbox" id="checkbox32" class="md-check">
                                                	        <label for="checkbox32">
                                                	            <span></span>
                                                	            <span class="check"></span>
                                                	            <span class="box"></span> Night </label>
                                                	    </div>
                                                	</div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-radios">
                                                        <label>Duration</label>
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio1" name="radio1" class="md-radiobtn">
                                                                <label for="radio1">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> D </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio2" name="radio1" class="md-radiobtn" checked>
                                                                <label for="radio2">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> W</label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="radio3" name="radio1" class="md-radiobtn">
                                                                <label for="radio3">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> M </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">Qty</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-circle green som-btn-top">Add Treatment</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <textarea class="form-control" rows="3"></textarea>
                                                        <label for="form_control_1">Remark</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <textarea class="form-control" rows="3"></textarea>
                                                        <label for="form_control_1">Examination</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <textarea class="form-control" rows="3"></textarea>
                                                        <label for="form_control_1">Diagnosis</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Lab Test</label>
                                                        <select class="bs-select form-control" data-live-search="true" data-size="8">
                                                            <option selected="selected">Select Test</option>
                                                            <option>Blood Test</option>
                                                            <option>Sugar</option>
                                                            <option>ECG</option>
                                                            <option>Blood</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-circle green som-btn-top">Add Test</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                                                    <div class="portlet light bordered dr">
                                                        <div class="portlet-title">
                                                            <div class="caption">	
                                                                <span class="caption-subject font-green bold uppercase">Medicens</span>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="table-scrollable">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th> # </th>
                                                                            <th> Name </th>
                                                                            <th> Timings </th>
                                                                            <th> Duration </th>
                                                                            <th> Action </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td> 1 </td>
                                                                            <td> Panadol </td>
                                                                            <td> 1-1-1 </td>
                                                                            <td> 5 Days </td>
                                                                            <td>
                                                                                <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> 2 </td>
                                                                            <td> Clomfranil (25gm) </td>
                                                                            <td> 0-0-1 </td>
                                                                            <td> 2 Month </td>
                                                                            <td>
                                                                                <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> 3 </td>
                                                                            <td> Disprin </td>
                                                                            <td> 1-0-1 </td>
                                                                            <td> 3 Days </td>
                                                                            <td>
                                                                                <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> 4 </td>
                                                                            <td> Zic </td>
                                                                            <td> 1-0-0 </td>
                                                                            <td> 1 week </td>
                                                                            <td>
                                                                                <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END SAMPLE TABLE PORTLET-->
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                                                    <div class="portlet light bordered dr">
                                                        <div class="portlet-title ">
                                                            <div class="caption">	
                                                                <span class="caption-subject font-green bold uppercase">Lab Test</span>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="table-scrollable">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th> # </th>
                                                                            <th> Name </th>
                                                                            <th> Action </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td> 1 </td>
                                                                            <td> ECG </td>
                                                                            <td>
                                                                                <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> 2 </td>
                                                                            <td> Blood Test </td>
                                                                            <td>
                                                                                <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> 3 </td>
                                                                            <td> Ablation</td>
                                                                            <td>
                                                                                <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> 4 </td>
                                                                            <td> Breat MRI</td>
                                                                            <td>
                                                                                <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                                    <i class="fa fa-trash-o"></i> Delete </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END SAMPLE TABLE PORTLET-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions noborder">
                                            <button type="button" class="btn blue">Submit</button>
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
    </div>
    <a href="#index" class="go2top">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- END FOOTER -->
</div>
<?php 
include 'footer.php';
?>