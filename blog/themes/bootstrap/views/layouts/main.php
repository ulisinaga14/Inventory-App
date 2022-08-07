<?php /* @var $this Controller */ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="language" content="en">

	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/font-awesome.min.css">
	<?php 
		$ac = Yii::app()->theme->baseUrl;
		$maps['jquery.min.js']= $ac.'/js/jquery-3.5.1.min.js';
		$maps['jquery.js']    = $ac.'/js/jquery-3.5.1.min.js';
		$maps['popper.js']    =$ac.'/js/popper.min.js';
        $maps['bootstrap.js'] =$ac.'/js/bootstrap.min.js';  
		
        $cs=Yii::app()->clientScript;    
		// menggabungkan javascript yang bawaan yii dengan kita
		$cs->scriptMap=array_merge($cs->scriptMap,$maps);
		
        Yii::app()->clientScript->registerScriptFile('jquery.min.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile('popper.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile('bootstrap.js', CClientScript::POS_END);
	?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>

	<div class="container" id="page">

		<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#A3A3fF;">
			<a class="navbar-brand" href="#">Inventory</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php $this->widget('zii.widgets.CMenu', array(
					'items' => array(
						//diakses ketika belum login
						array(
							'label' => 'Login', 'url' => array('/site/login'),
							'visible' => Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Contact', 'url' => array('/site/contact'),
							'visible' => Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						//diakses ketika sudah login
						array(
							'label' => 'Stock', 'url' => array('/stock/index'),
							'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Barang Masuk', 'url' => array('/Barangmasuk/index'),
							'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Barang Keluar', 'url' => array('/Barangkeluar/index'),
							'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'User', 'url' => array('/User/index'),
							'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Profil', 'url' => array('/site/profil'),
							'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Logout', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						)
					),
					'htmlOptions' => array('class' => 'nav mr-auto'),
					'submenuHtmlOptions' => array('class' => 'nav-item'),
				)); ?>
				
  </div>
</nav>
<div class="container" id="page">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
</div><!-- page -->

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
	
	
    <?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
</body>
</html>
