<?php

namespace cgsmith\flatpickr;

class FlatpickrLanguageAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/flatpickr';

    /**
     * List of available locales 
     * @see https://flatpickr.js.org/localization/
     */
    public $locale = '';

    public $depends = [
        FlatpickrAsset::class,
    ];

    public function registerAssetFiles($view)
    {
        if (!empty($this->locale)) {
            $this->js[] = 'dist/l10n/' . $this->locale . '.js';
        }

        parent::registerAssetFiles($view);
    }
}