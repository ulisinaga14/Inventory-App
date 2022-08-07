<?php
/* @var $this StockController */
/* @var $model Stock */


?>
<br>
		  <div class="card">
  <div class="card-body">
  <div class="card">
  <div class="card-body">
   <i class="icon fa fa-5x fa-user fa-fw " aria-hidden="true"  style="float:left"></i>
     <h2>Informasi Profil <?php echo Yii::app()->user->name ?></h2>
	   <?php echo CHtml::link('Profil', array('/Site/profil'));?><p>
  </div>
</div>
   
  <br>
	<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Detail Akun</h5>
        <p class="card-text">Id User </span>: <?php echo Yii::app()->user->name ?> </p>
		<p class="card-text">Negara </span>: Indonesia </p>
		<p class="card-text">Kota </span>: Medan </p>
        <i> <?php 
			   if (Yii::app()->user->name == 'admin')
			   echo CHtml::link('Edit Profile', array('/User/index'));
				else 
					echo 'Anda Tidak memiliki akses untuk edit profil!!';?><p></i>
		 </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Detail Aktivitas</h5>
        <p class="card-text">
		<?php 
			   if (Yii::app()->user->name == 'admin')
				echo CHtml::link('Stock Barang', array('/Stock/index'));
				else 
					echo CHtml::link('Transaksi Barang Keluar', array('/Barangkeluar/index')); ?>
		</p>
		  <p class="card-text">
		<?php 
			   if (Yii::app()->user->name == 'admin')
				echo CHtml::link('Transaksi Barang Masuk', array('/Barangmasuk/index'));?>
		</p>
		  <p class="card-text">
		<?php 
			   if (Yii::app()->user->name == 'admin')
				echo CHtml::link('Transaksi Barang Keluar', array('/Barangkeluar/index'));?>
		</p>
		 <p class="card-text">
		<?php 
			   if (Yii::app()->user->name == 'admin')
				echo CHtml::link('Edit Akun', array('/User/index'));?>
		</p>
      </div>
    </div>
  </div>
</div>
     </div>
</div>    
      