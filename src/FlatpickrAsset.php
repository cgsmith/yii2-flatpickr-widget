<?php

namespace cgsmith\flatpickr;

use yii\web\JqueryAsset;

class FlatpickrAsset extends \yii\web\AssetBundle
{
    public $js = [
        '//cdn.jsdelivr.net/npm/flatpickr',
    ];

    public $css = [
        '//cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}