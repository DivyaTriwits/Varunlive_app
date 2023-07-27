<!-- Main Content-->
<div class="main-content pt-5 mt-5">
	<div class="container-fluid">



	<!-- </div> -->
	
	<!-- End Page Header -->

	<!-- Row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="card overflow-hidden">
				<div class="card-body">
					<div>
						<h6 class="main-content-label mb-1">Roles</h6>
					</div>
					<div class="table-responsive">
						<table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
							<thead>
								<tr>
									<th>Sl No.</th>
									<th>User</th>
								
									<!--<th>Edit</th>-->
									<!--<th>Delete</th>-->
									<th>View Logs</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; if($user->num_rows()>0){
                                                     foreach($user->result() as $row){
													?>
													<tr>
														<td><?php echo $i;?></td>
														<td><?php echo $row->name?></td>
														
														<!--<td>-->
														<!--	<a  style="color:green;cursor: pointer;" onclick="setDataFunction(-->
              <!--                                                '<?php echo $row->id?>',-->
              <!--                                                '<?php echo $row->role?>',-->
														<!--	)"><i class="zmdi zmdi-edit"></i></a>-->
														
														<!--</td>-->
														<!--<td>	<a style="color:red;cursor: pointer;" onclick="setDeleteFunction('<?php echo $row->id?>')"><i class="zmdi zmdi-delete"></i></a>	</td>-->
															<td><a href="<?php echo base_url('view-support-logs/'.$row->support_id)?>"><button style="background-color:#73D3DD;color: #ffff;" class="btn btn-sm ripple ">View Logs</button></a></td>
													</tr>
													<?php $i++;}}?>		</tbody>
								</table>
							</div>
						</div>
					=
					</div>
				</div>

			</div>
			<!-- End Row -->
						
		</div>

	</div>

	