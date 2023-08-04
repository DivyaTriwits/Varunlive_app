
<!DOCTYPE html>
<html lang="en">


<head>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=ues" name="viewport">
	<meta name="description" content="The Global Scholarship">
	<meta name="author" content="">
	<meta name="keywords" content="">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo base_url()?>assets/img/brand/sc logo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
	<!-- Title -->
	<title>The Global Scholarship</title>

	<!-- Bootstrap css-->
	<link href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

	<!-- Icons css-->
	<link href="<?php echo base_url()?>assets/css/icons.css" rel="stylesheet"/>

	<!-- Style css-->
	<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/dark-boxed.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/boxed.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/skins.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/dark-style.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/colors/hide.css" rel="stylesheet">
	<!-- Color css-->
	<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/css/colors/color.css">

	<!-- Select2 css -->
	<link href="<?php echo base_url()?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">


	<!-- Internal RatingThemes css-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/ratings.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-1to10.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-movie.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-square.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-pill.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-reversed.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bars-horizontal.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/fontawesome-stars.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/css-stars.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/bootstrap-stars.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/rating/themes/fontawesome-stars-o.css">


	<!-- P-SCROLL css-->
	<link href="<?php echo base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">

	<!-- Internal DataTables css-->
	<link href="<?php echo base_url()?>assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet"/>

	<link href="<?php echo base_url()?>assets/plugins/prism/prism.css" rel="stylesheet">
	<!-- Switcher css-->
	<link href="<?php echo base_url()?>assets/switcher/css/switcher.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/switcher/demo.css" rel="stylesheet">
	<!-- Internal Gallery css-->
	<link href="<?php echo base_url()?>assets/plugins/gallery/gallery.css" rel="stylesheet">
	<!-- Internal Specturm-color picker css-->
	<link href="<?php echo base_url()?>assets/plugins/spectrum-colorpicker/spectrum.css" rel="stylesheet">

	<!-- Internal Ion.rangeslider css-->
	<link href="<?php echo base_url()?>assets/plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
	<!-- Internal Sweet-Alert css-->
	<link href="<?php echo base_url()?>assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">
	<script src="<?php echo base_url()?>assets/plugins/sweet-alert/sweetalert.min.js"></script>
	<script src="<?php echo base_url()?>assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>
	<!-- Bootstrap Validations -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		.has-error .help-block {
			color: red;
		} 
		.has-success .help-block {
			color: green;
		} 
	</style> 



</head>

<body class="horizontalmenu" style="position: fixed;">






	<!-- Page -->
	<div class="page">







		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages  justify-content-center text-center sign-2" style="width:80% !important;">
				<div class="col-md-12 col-xl-6 ">
					<div class="sign1">
						<div class="card" >
							<div class="">

								<div class="card-body mt-2 mb-2">

								<div class="text-center">
									<img align="center" style="max-width: 50%"  src="<?php echo base_url()?>assets/img/brand/sc logo.png" class="" alt="logo" >
								</div>
									
									
								
								
									<div class="clearfix"></div>
									<form id="supportLoginForm" method="post" action="<?php echo base_url()?>verify-support-superadmin-login">
										<h5 class="text-center mb-5 mt-2">Super Admin Sign In</h5>
										
                                      <!-- <p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to Continue in our website</p> -->
										
                                      <div class="form-group text-left">
											<label class="">Email </label>
											<input class="form-control rounded-11" name="username" placeholder="Users email" type="email" autocomplete="off" required>
										</div>
										<div class="form-group text-left">
											<label class="">Password</label>
											<input class="form-control rounded-11" name="password" placeholder="password" type="password" autocomplete="off" required>
										</div>
										<div class="row">
										<!--	<div class="col-12">
												<div class="form-group mb-0 text-left">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input">
														<span class="custom-control-label">Remember me</span>
													</label>
												</div>
											</div> -->

										
											<div class="col-12 mt-3">
												<input type="submit" class="btn btn-primary rounded-11 btn-block" value="Sign In">
											</div>


												<div class="col-12  mt-3">
												<a href="<?php echo base_url()?>support-forgot-password" class="text-dark">Forgot password?</a>
											</div>
										</div>
										<!-- <div class="text-center tx-15 text-muted mt-3">You Don't have an Account <a class="btn-link font-weight-normal text-primary" href="#">Sign Up</a></div> -->
									</form>
							<!-- 		<hr class="divider mt-4">
									<div class="coming-form d-flex justify-content-center mt-4">
										<div class="coming-form1 mr-4">
											<a href="#">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></i>
											</a>
										</div>
										<div class="coming-form1 mr-4">
											<a href="#">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></i>
											</a>
										</div>
										<div class="coming-form1">
											<a href="#">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></i>
											</a>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
			<script src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
		<!--Internal Apexchart js-->
		<script src="<?php echo base_url()?>assets/js/apexcharts.js"></script>

		<!-- Internal Chart.Bundle js-->
		<script src="<?php echo base_url()?>assets/plugins/chart.js/Chart.bundle.min.js"></script>


		<!-- Peity js-->
		<script src="<?php echo base_url()?>assets/plugins/peity/jquery.peity.min.js"></script>

		<!-- Internal Data Table js -->
		<script src="<?php echo base_url()?>assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/jszip.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/pdfmake.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/vfs_fonts.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.html5.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.print.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/table-data.js"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Select2 js-->
		<script src="<?php echo base_url()?>assets/plugins/select2/js/select2.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/select2.js"></script>

		<!-- Sidebar js -->
		<script src="<?php echo base_url()?>assets/plugins/sidebar/sidebar.js"></script>

		<!-- INTERNAL INDEX js -->
		<script src="<?php echo base_url()?>assets/js/index.js"></script>

		<!-- Sticky js -->
		<script src="<?php echo base_url()?>assets/js/sticky.js"></script>

		<!-- Custom js -->
		<script src="<?php echo base_url()?>assets/js/custom.js"></script>

		<!-- Switcher js -->
		<script src="<?php echo base_url()?>assets/switcher/js/switcher.js"></script>

         		<!-- Internal Clipboard js-->
		<script src="<?php echo base_url()?>assets/plugins/clipboard/clipboard.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/clipboard/clipboard.js"></script>

		<!-- Internal Prism js-->
		<script src="<?php echo base_url()?>assets/plugins/prism/prism.js"></script>
		<!-- Internal Gallery js-->
		<script src="<?php echo base_url()?>assets/plugins/gallery/picturefill.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/gallery/lightgallery.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/gallery/lightgallery-1.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/gallery/lg-pager.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/gallery/lg-autoplay.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/gallery/lg-fullscreen.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/gallery/lg-zoom.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/gallery/lg-hash.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/gallery/lg-share.js"></script>
        	<!-- Internal Sweet-Alert js-->
		
		
		<!-- Internal Form-elements js-->
		<script src="<?php echo base_url()?>assets/js/form-elements.js"></script>
			<!-- Internal Jquery-Ui js-->
		<script src="<?php echo base_url()?>assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!-- Internal Jquery.maskedinput js-->
		<script src="<?php echo base_url()?>assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>

		<!-- Internal Specturm-colorpicker js-->
		<script src="<?php echo base_url()?>assets/plugins/spectrum-colorpicker/spectrum.js"></script>

		<!-- Internal Ion-rangeslider js-->
		<script src="<?php echo base_url()?>assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

		<script src="<?php echo base_url()?>assets/plugins/rating/jquery.barrating.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/rating/ratings.js"></script>


<script type="text/javascript">
	
			
	       $('#example-pill').barrating('show', {
            theme: 'bars-pill',
            initialRating: 'A',
            showValues: true,
            showSelectedRating: false,
            allowEmpty: true,
            emptyValue: '-- no rating selected --',
            onSelect: function(value, text) {
                alert('Selected rating: ' + value);

                document.getElementById('actualRating').value=value;
            }
        });

</script>



<?php if($this->session->flashdata('incorrect-password-error')){?>		
<Script>
	swal({
		title: 'Password!',
		text: 'Incorrect password!',
		type: 'error',
		timer: 3000,
        showConfirmButton: false
	});
</Script>
<?php }?>

<?php if($this->session->flashdata('no-account-found-error')){?>		
<Script>
	swal({
		title: 'Account!',
		text: 'No account found with this email!',
		type: 'error',
		timer: 3000,
        showConfirmButton: false
	});
</Script>
<?php }?>


<?php if($this->session->flashdata('logout-success')){?>		
<Script>
	swal({
		title: 'Logout!',
		text: 'Logout success!',
		type: 'success',
		timer: 3000,
        showConfirmButton: false
	});
</Script>
<?php }?>


<?php if($this->session->flashdata('session-creation-error')){?>		
<Script>
	swal({
		title: 'Reset Password !',
		text: 'Failed to create session!',
		type: 'error',
		timer: 3000,
        showConfirmButton: false
	});
</Script>
<?php }?>


<?php if($this->session->flashdata('reset-link-expired-error')){?>		
<Script>
	swal({
		title: 'Reset Password!',
		text: 'Reset password link has expired!',
		type: 'error',
		timer: 3000,
        showConfirmButton: false
	});
</Script>
<?php }?>


<?php if($this->session->flashdata('password-reset-success')){?>		
<Script>
	swal({
		title: 'Password Reset!',
		text: 'Password Reset success!',
		type: 'success',
		timer: 3000,
        showConfirmButton: false
	});
</Script>
<?php }?>


<?php if($this->session->flashdata('password-reset-error')){?>		
<Script>
	swal({
		title: 'Reset Password!',
		text: 'Failed to reset the password!',
		type: 'error',
		timer: 3000,
        showConfirmButton: false
	});
</Script>
<?php }?>





<script>
$(document).ready(function() {

    $('#supportLoginForm').bootstrapValidator({
        // message: 'This value is not valid',
        // feedbackIcons: {
        //     valid: 'glyphicon glyphicon-ok',
        //     invalid: 'glyphicon glyphicon-remove',
        //     validating: 'glyphicon glyphicon-refresh'
        // },
        fields: {
            username: {
                message: 'Email is not valid',
                validators: {
                    notEmpty: {
                        message: 'Email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'Please provide valid email address'
                    }
                    // regexp: {
                    // regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                    //  message: '<br >'
                    // }
                   
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required and cannot be empty'
                    },
                    stringLength: {
                        min: 5,
                        max: 16,
                        message: 'Password must be more than 4 and less than 17 characters long'
                    }
                }
                
            }


        }
    }) .on('success.form.bv', function(e) {
        $(this)[0].submit();
    });
});
</script>



	</body>


</html>




