<h3>Items | Periode <?php echo $model->tanggal;?></h3>
<?php
$this->widget('web.widgets.TbExtendedGridView', array(
	'fixedHeader' => true,
	'headerOffset' => 40,
	'type' => 'striped',
	'dataProvider' => $dataReportMasuk,
	'responsiveTable' => true,
	'template' => "{items}",
        'columns'=>array(
            'idmasuk',
            'idbarang',
            'tanggal',
            'jumlah',            
            'keterangan', // This is a reference for parms / parameters
        ),
	));?>
<div align="left">
    <b>Printed By : <? echo Yii::app()->user->name;?><br/>
Printed At : <? echo date("d/m/Y H:i:s");?></b>
            <div align="right">Copyright &COPY; <?php echo date('Y'); ?> By Jsource</div>
</div>