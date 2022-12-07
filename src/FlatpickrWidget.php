<?php

namespace cgsmith\flatpickr;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * FlatpickrWidget renders a Input Widget.
 *
 * ```php
 *   <?= $form->field($model, 'next_payout_date')->widget(
 *      FlatpickrWidget::class, [
 *          'model' => $model,
 *          'attribute' => 'next_payout_date',
 *          // you can set flatpickrConfig array to match flatpickr JS options
 *      ]
 *     );
 * ?>
 * ```
 *
 * For more details and usage information on InputWidget, see the [guide article on forms](guide:input-forms).
 *
 * @author Chris Smith <chris@cgsmith.net>
 */
class FlatpickrWidget extends InputWidget
{
    /**
     * @link https://flatpickr.js.org/options/
     * @var array
     */
    public array $flatpickrConfig = [
        'enableTime' => false,
        'dateFormat' => 'U',
        'altInput' => true,
        'altFormat' => 'F j, Y',
        'minDate' => 'today',
    ];

    public function run()
    {
        if (isset($this->options['class'])) {
            $this->options['class'] = trim($this->options['class'] . ' ' . 'date-' . $this->attribute);
        } else {
            $this->options['class'] = 'date-' . $this->attribute;
        }

        $input = $this->hasModel()
            ? Html::activeTextInput($this->model, $this->attribute, $this->options)
            : Html::textInput($this->name, $this->value, $this->options);

        echo $input;

        $flatpickrConfig = Json::encode($this->flatpickrConfig);

        FlatpickrAsset::register($this->getView());
        $view = $this->getView();
        $view->registerJs('
            // cgsmith-flatpickr-widget
            $(\'.date-' . $this->attribute.'\').flatpickr('
            . $flatpickrConfig .
            ')');
    }
}