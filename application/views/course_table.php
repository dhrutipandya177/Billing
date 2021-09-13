<script src="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css"></script>
<div class="panel panel-default course_table">
						<div class="panel-heading">
							admission Records
						</div>
						<div id="msg"></div>
						<div class="table-right-content">
							<button href="#" class="btn btn-info" data-toggle="modal" data-target="#createcourse">
							<span><i class="fa fa-plus" aria-hidden="true"></i></i></span>
							</button> 
							<a href="#" class="btn btn-danger text-white" data-placement="bottom" title="Delete Multiple Record" id="multi_row_remove"><i class="fa fa-trash" aria-hidden="true"></i></span>
							</a>
						</div>
						<div>
							<table id="table2" class="table table-striped income-table no-spacing padding-0" ui-jq="footable" ui-options='{"paging": {"enabled": true },"filtering": {"enabled": true},"sorting": {  "enabled": true}}' style = "display: block; overflow-y : auto ; white-space: normal; ">
								<thead>
									<tr>
										<th>
											<div class="custom-checkbox custom-checkbox-table custom-control">
												<input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all" for="checkbox-all" name="select-all">
												<label for="checkbox-all" class="custom-control-label">&nbsp;</label>
											</div>
										</th>
										<th>Sn</th>
										<th width="500%">Department</th>
										<th width="200%">Reg no</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $sno = 1;
										foreach ($all_courses as $val) { ?>
									<tr>
										<td>
											<div class="custom-checkbox custom-control">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-<?php echo $sno; ?>" name="mark" value="<?php echo $val->id ; ?>">
												<label for="checkbox-<?php echo $sno; ?>" class="custom-control-label">&nbsp;</label>
											</div>
										</td>
										<td><?php echo $sno; ?></td>
										<td><?php echo $val->name; ?></td>
										<td><?php echo $val->duration; ?></td>
										<td>
											<?php $xx= $val->id; ?>
											<a href="javascript:co_upd(<?php echo $xx; ?>)" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
											<a href="javascript:remove_co(<?php echo $xx; ?>)" class="active" ui-toggle-class=""><i class="fa fa-trash text-danger text"></i></a>
										</td>
									</tr>
									<?php $sno++;
										} ?>
								</tbody>
							</table>
						</div>
					</div>
					
					<script src="https://demo.rnwmultimedia.com/dist/assets/bundles/datatables/datatables.min.js"></script>
<script src="https://demo.rnwmultimedia.com/dist/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<!-- Page Specific JS File -->
<script src="https://demo.rnwmultimedia.com/dist/assets/js/page/datatables.js"></script>
					<script>
						 $(document).ready(function() {
         $('course_table').DataTable();
         } )
		function resetval() {
		$("#mid_menu_add")[0].reset();
		}
		$(function(){
		$("table2").largetable({
		enableMaximize: true
		})
		});
						</script>