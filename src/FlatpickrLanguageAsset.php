<?php

namespace cgsmith\flatpickr;

class FlatpickrLanguageAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/flatpickr';

    public $locale;

    public $depends = [
        FlatpickrAsset::class,
    ];

    public function registerAssetFiles($view)
    {
        $this->js[] = 'dist/l10n/' . $this->locale . '.js';
        parent::registerAssetFiles($view);
    }
}