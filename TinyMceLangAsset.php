<?php
namespace milano\tinymce;

class TinyMceLangAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@vendor/as-milano/yii2-tinymce/assets';
    public $depends = [
        'milano\tinymce\TinyMceAsset'
    ];
}
