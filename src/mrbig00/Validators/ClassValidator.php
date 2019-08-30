<?php
/**
 * @copyright   Copyright (c) 2019 Zoltan Szanto
 * @author      Zoltan Szanto
 * @license     MIT
 * @since       2019-08-30
 */

namespace mrbig00\Validators;

use yii\validators\Validator;

/**
 * ClassValidator checks if the attribute is a subtype of a given class
 *
 * Usage in rules:
 *
 * ```php
 * ['client', ClassValidator::class, 'skipOnEmpty' => false, 'targetClass' => Client::class],
 * ```
 *
 * @package mrbig00
 */
class ClassValidator extends Validator
{
    public $targetClass;
    public $message;

    public function validateAttribute($model, $attribute)
    {
        if (!is_a($model->{$attribute}, $this->targetClass)) {
            $this->addError(
                $model,
                $attribute,
                $this->message ?? "{$attribute} must be instance of {$this->targetClass}"
            );
        }
    }
}
