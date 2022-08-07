<?php
use yii\helpers\Html;

if(Yii::app()->user->hasFlash('success',"Berhasil Login")) {
    echo '
        <div class="alert alert-success">
            <button type="button" class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.Yii::app()->user->getFlash('success').'
        </div>
    ';
} 

if(Yii::app()->user->hasFlash('info')){
    echo '
        <div class="alert alert-info">
            <button type="button" class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.Yii::app()->user->getFlash('info').'
        </div>
    ';
} 

if(Yii::app()->user->hasFlash('warning')) {
    echo '
        <div class="alert alert-warning">
            <button type="button" class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.Yii::app()->user->getFlash('warning').'
        </div>
    ';
} 

 if(Yii::app()->user->hasFlash('error')) {
    echo '
        <div class="alert alert-error">
            <button type="button" class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.Yii::app()->user->getFlash('error').'
        </div>
    ';
}
?>