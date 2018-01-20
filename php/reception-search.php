<?php 
include 'header.php';
include 'nav.php';
?>
<div class="container-fluid">
    <div class="page-content">  
        <div class="row">
            <div class="col-md-12">
	            <div class="portlet-body">
	                <table id="table-pagination" data-toggle="table" data-url="../assets/global/plugins/bootstrap-table/data/data-search-patient.json" data-height="300" data-pagination="true"
	                data-search="true">
	                    <thead>
	                        <tr>
	                            <th data-field="id" data-align="left">#</th>
	                            <th data-field="pid" data-align="left">P ID</th>
	                            <th data-field="name" data-align="left ">Name</th>
	                            <th data-field="phone" data-align="left">Phone</th>
	                            <th data-field="nic" data-align="left">CNIC</th>
	                            <th data-field="date" data-align="left">Date</th>
	                            <th data-field="remove" data-align="left">Action</th>
	                        </tr>
	                    </thead>
	                </table>
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