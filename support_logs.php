<!-- Main Content-->
<div class="main-content pt-5 mt-5">
	<div class="container-fluid">

	
		

			<!-- End Page Header -->

			<!-- Row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="card overflow-hidden">
						<div class="card-body">
							
							<div class="table-responsive">
								<table id="scholarshiplist" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
									<thead>
										<tr>
											<th>Sl.no</th>
											<th>User name</th>
											<th>Action</th>
											<th>Time Stamp</th>
											<th>scholarship_id</th>
										</tr>
									</thead>
									<tbody>
										<?php $index=1;foreach($login_details as $row){?>
											<tr>
												<td><?php echo $index?></td>
												<td><?php echo $row->name?></td>
												<td><?php echo $row->action?></td>
												<td><?php echo $row->timestamp?></td>
												<td><?php echo $row->scholarship_name?></td>
											</tr>
											<?php $index++;}?>
										</tbody>
									</table>
								</div>
					
							</div>
							
						</div>
					</div>
				</div>

				<!-- End Row -->
			</div>
		</div>
		<!-- End Main Content-->



	



	