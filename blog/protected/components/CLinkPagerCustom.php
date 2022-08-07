<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class CLinkPagerCustom extends CLinkPager
{

	public $header='<div style="float:left;margin:7px 10px;">Pergi Ke Halaman:</div>';
	public $footer='<div style="clear:both"></div>';
	//public $nextPageLabel='<i class="material-icons">chevron_right</i>';
	//public $prevPageLabel='<i class="material-icons">chevron_left</i>';
	//public $firstPageLabel='<i class="material-icons">&#xE5DC;</i>';
	//public $lastPageLabel='<i class="material-icons">&#xE5DD;</i>';
	public $nextPageCssClass='next page-item';
	public $previousPageCssClass='previous page-item';
	public $firstPageCssClass='first page-item';
	public $lastPageCssClass='last page-item';
	public $hiddenPageCssClass='d-none';
	public $selectedPageCssClass='page-item active';
	public $internalPageCssClass='page-item';
	public $htmlOptions = array(
		'class' => 'pagination',
		'style'=>'float:left;',
 	);

	protected function createPageButton($label,$page,$class,$hidden,$selected)
	{
	    if($hidden || $selected)
	        $class.=' '.($hidden ? $this->hiddenPageCssClass : $this->selectedPageCssClass);
	    return '<li class="'.$class.'">'.CHtml::link($label,$this->createPageUrl($page),array('class'=>'page-link')).'</li>';
	}
}
