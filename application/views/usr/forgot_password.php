
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?php echo $title; ?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-body">

                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/images/logo-dark.png" height="22" alt="logo"></a>
                    </div>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Reset Password</h4>
                        <div class="alert alert-success m-t-30" role="alert">
                            Enter your Email and instructions will be sent to you!
                        </div>

						<!-- Flasher -->
						<?php if ($this->session->flashdata('success')) { ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong><i class="icon fa fa-check"></i> Success!</strong> <?php echo $this->session->flashdata('success'); ?>
							</div>
						<?php } else if ($this->session->flashdata('error')) {  ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong> Error!</strong> <?php echo $this->session->flashdata('error'); ?>
							</div>
						<?php } else if ($this->session->flashdata('warning')) {  ?>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong><i class="icon fa fa-warning"></i> Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
							</div>
						<?php } else if ($this->session->flashdata('info')) {  ?>
							<div class="alert alert-info alert-dismissible fade show" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong><i class="icon fa fa-info"></i> Info!</strong> <?php echo $this->session->flashdata('info'); ?>
							</div>
						<?php } ?>

						<br /><!-- limit -->


                        <?php
							$attr_form = [
								'id' => 'form-forgot-password',
								'name' => 'form-forgot-password',
								'class' => 'form-horizontal',
							];
							echo form_open('main/forgot_password_process', $attr_form);
						?>

                            <div class="form-group">
                                <label for="useremail">Email</label>
                                <input type="email" class="form-control" id="useremail" name="UsrEmail" placeholder="Enter email">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Remember It ? <a href="<?php echo base_url('auth/sign_in') ?>" class="font-500 text-primary"> Sign In here </a> </p>
                <p>© 2019 Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>

        <!-- end wrapper-page -->

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/waves.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/theme/Veltrix_v2.1/horizontal/') ?>assets/js/app.js"></script>

    </body>

</html>