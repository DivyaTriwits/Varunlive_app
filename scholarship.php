

<!-- Main Content-->
<div class="main-content pt-5 mt-5">
	<div class="container-fluid">

		<!-- Page Header -->
<!-- 		<div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Support</a>
						</li>
						<li class="breadcrumb-item active">Scholarship</li>
					</ol>
				</nav>
			</div>
		</div> -->
		<!-- End Page Header -->



		<!-- Row -->
		<div class="row" style="text-align: center;">
			<?php $access=$this->Support_model->getsubaccess($this->session->userdata('supportid'),3);
		    if($this->session->userdata('role')!='' && ($this->session->userdata('role')=="Admin" || $access==1)){?>
			<div class="col-lg-4 col-md-6">
				<a href="<?php echo base_url('live-scholarships')?>">
					<div class="card plan-card">
						<div class="card-block">
							<div class="p-3">
								<h1 class="pt-2"><i class="ion-paper-airplane plan-icon bg-secondary"></i></h1>
								<h6 class="text-uppercase font-weight-semibold text-secondary">Push Scholarship</h6>
							</div>
						</div>
					</div>
				</a>
			</div>
			<?php }?>
			<!-- <img src="<?php echo base_url()?>assets/img/icon/scholarship.png"> -->
			<!-- <div class="col-lg-4 col-md-6">
				<a href="<?php echo base_url('scholarship-form')?>">
					<div class="card plan-card">
						<div class="card-block">
							<div class="p-3">
								<h1 class="pt-2"><i class="ti-write plan-icon bg-secondary"></i></h1>
								<h6 class="text-uppercase font-weight-semibold text-secondary">Add New Scholarship</h6>
							</div>
							
						</div>
					</div>
				</a>
			</div> -->
			<?php $access=$this->Support_model->getsubaccess($this->session->userdata('supportid'),4);
		    if($this->session->userdata('role')!='' && ($this->session->userdata('role')=="Admin" || $access==1)){?>
			<div class="col-lg-4 col-md-6">
				<a href="<?php echo base_url('scholarship-list')?>">
				<div class="card plan-card">
					<div class="card-block">
						<div class="p-3">
							<h1 class="pt-2"><i class="si si-book-open plan-icon bg-secondary"></i></h1>
							<h6 class="text-uppercase font-weight-semibold text-secondary">Active Scholarship List</h6>
						</div>

					</div>
				</div>
			</a>

			</div>
			<?php }?>
			<?php $access=$this->Support_model->getsubaccess($this->session->userdata('supportid'),5);
		    if($this->session->userdata('role')!='' && ($this->session->userdata('role')=="Admin" || $access==1)){?>
			<div class="col-lg-4 col-md-6">
				<a href="<?php echo base_url('expired-scholarship-list')?>">
				<div class="card plan-card">
					<div class="card-block">
						<div class="p-3">
							<h1 class="pt-2"><i class="si si-clock plan-icon bg-secondary"></i></h1>
							<h6 class="text-uppercase font-weight-semibold text-secondary">Expired Scholarship List</h6>
						</div>

					</div>
				</div>
			</a>

			</div>
			<?php }?>
			<!-- <div class="col-lg-4 col-md-6">
				<a href="<?php echo base_url()?>institution-scholarship">
				<div class="card plan-card">
					<div class="card-block">
						<div class="p-3">
							<h1 class="pt-2"><i class="si si-book-open plan-icon bg-secondary"></i></h1>
							<h6 class="text-uppercase font-weight-semibold text-secondary">Add Institution Scholarship</h6>
						</div>

					</div>
				</div>
			</a>

			</div> -->
			<?php $access=$this->Support_model->getsubaccess($this->session->userdata('supportid'),6);
		    if($this->session->userdata('role')!='' && ($this->session->userdata('role')=="Admin" || $access==1)){?>

			<div class="col-lg-4 col-md-6">
				<a href="<?php echo base_url()?>view-institution-scholarship-list">
				<div class="card plan-card">
					<div class="card-block">
						<div class="p-3">
							<h1 class="pt-2"><i class="fa fa-bank plan-icon bg-secondary"></i></h1>
							<h6 class="text-uppercase font-weight-semibold text-secondary">View Institution Scholarship List</h6>
						</div>

					</div>
				</div>
			</a>

			</div>
			<?php }?>
			<?php $access=$this->Support_model->getsubaccess($this->session->userdata('supportid'),7);
		    if($this->session->userdata('role')!='' && ($this->session->userdata('role')=="Admin" || $access==1)){?>
			<div class="col-lg-4 col-md-6">
				<a href="<?php echo base_url()?>scholarship-form">
				<div class="card plan-card">
					<div class="card-block">
						<div class="p-3">
							<!-- <i class="fas fa-file-plus"></i> -->
<!-- <i class="fas fa-thumbs-up"></i> -->
<!-- <i class="fas fa-file-plus"></i> -->

							<h1 class="pt-2"><i class="fe fe-file-plus plan-icon bg-secondary"></i></h1>
							<h6 class="text-uppercase font-weight-semibold text-secondary">Add Scholarship</h6>
						</div>

					</div>
				</div>
			</a>

			</div>
			<?php }?>
		<!-- 	<div class="col-lg-4 col-md-6">
				<div class="card plan-card">
					<div class="card-block">
						<div class="p-3">
							<h1 class="pt-2"><i class="fe fe-box plan-icon bg-secondary"></i></h1>
							<h6 class="text-uppercase font-weight-semibold text-secondary">Scholarship Categories</h6>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		
	</div>
</div>
<!-- End Main Content-->
