<?php

namespace cgsmith\flatpickr;

use yii\web\JqueryAsset;

class FlatpickrAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/flatpickr';

    public $js = [
        'dist/flatpickr.min.js',
    ];

    public $css = [
        'dist/flatpickr.min.css',
    ];

    public $depends = [
        JqueryAsset::class,
    ];


}