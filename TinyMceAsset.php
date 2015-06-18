<?php
namespace milano\tinymce;

class TinyMceAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/tinymce-dist';
    public $js = [
        'tinymce.jquery.min.js',
        'jquery.tinymce.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}