<?php if (Yii::app()->user->hasFlash('contact')) : ?>

	<div class="flash-success">
		<?php echo Yii::app()->user->getFlash('contact'); ?>
	</div>

<?php else : ?>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


	<div class="form">

		<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'contact-form',
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
			),
		)); ?>

		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
			<meta name="description" content="" />
			<meta name="author" content="" />
			<title>Clean Blog - Start Bootstrap Theme</title>
			<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
			<!-- Font Awesome icons (free version)-->
			<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
			<!-- Google fonts-->
			<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
			<!-- Core theme CSS (includes Bootstrap)-->
			<link href="css/styles.css" rel="stylesheet" />
		</head>

		<body>
			<header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
				<div class="container position-relative px-4 px-lg-5">
					<div class="row gx-4 gx-lg-5 justify-content-center">
						<div class="col-md-10 col-lg-8 col-xl-7">
							<div class="page-heading">
								<h1>Contact Me</h1>
								<span class="subheading">Have questions?</span>
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- Main Content-->
			<main class="mb-4">
				<div class="container px-4 px-lg-5">
					<div class="row gx-4 gx-lg-5 justify-content-center">
						<div class="col-md-10 col-lg-8 col-xl-7">
							<p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
							<div class="my-5">
								<!-- * * * * * * * * * * * * * * *-->
								<!-- * * SB Forms Contact Form * *-->
								<!-- * * * * * * * * * * * * * * *-->
								<!-- This form is pre-integrated with SB Forms.-->
								<!-- To make this form functional, sign up at-->
								<!-- https://startbootstrap.com/solution/contact-forms-->
								<!-- to get an API token!-->



								<?php echo $form->errorSummary($model); ?>

								<form action="mail.php" method="post">
									<div class="card border-primary rounded-0">
										<div class="card-header p-0">
											<div class="bg-info text-white text-center py-2">
												<h3><i class="fa fa-envelope"></i> Hubungi Kami</h3>
												<p class="m-0">Sampaikan saran dan pendapat anda</p>
											</div>
										</div>
										<div class="card-body p-3">
											<div class="form-group">
												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<div class="input-group-text"><i class="fa fa-user text-info"></i></div>
													</div>
													<?php echo $form->textField($model, 'name'); ?>
													<?php echo $form->error($model, 'name'); ?>
												</div>
											</div>

											<div class="form-group">
												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
													</div>
													<?php echo $form->textField($model, 'email'); ?>
													<?php echo $form->error($model, 'email'); ?>
												</div>
											</div>

											<div class="form-group">
												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
													</div>
													<?php echo $form->textField($model, 'subject', array('size' => 30, 'maxlength' => 128)); ?>
													<?php echo $form->error($model, 'subject'); ?>
												</div>
											</div>

											<div class="form-group">
												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
													</div>
													<?php echo $form->textArea($model, 'body', array('rows' => 4, 'cols' => 40)); ?>
													<?php echo $form->error($model, 'body'); ?>
												</div>
											</div>

											<?php if (CCaptcha::checkRequirements()) : ?>
												<div class="row">
													<?php echo $form->labelEx($model, 'verifyCode'); ?>
													<div>
														<?php $this->widget('CCaptcha'); ?> </div>
													<div>
														<?php echo $form->textField($model, 'verifyCode'); ?>
													</div>
													<div class="hint">Please enter the letters as they are shown in the image above.
														<br />Letters are not case-sensitive.
													</div>
													<?php echo $form->error($model, 'verifyCode'); ?>
												</div>
											<?php endif; ?>

											<div class="row buttons">
												<?php echo CHtml::submitButton('Submit'); ?>
											</div>

											<?php $this->endWidget(); ?>

										</div><!-- form -->

									<?php endif; ?>
									<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
									<!-- Core theme JS-->
									<script src="js/scripts.js"></script>
									<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
									<!-- * *                               SB Forms JS                               * *-->
									<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
									<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
									<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		</body>