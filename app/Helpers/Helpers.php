<?php

namespace App\Helpers;

class Helpers
{

    public static function returnMessageFieldValidation(): array
    {
        return [
            'required' => 'O campo :attribute é requerido.',
            'max'    => 'O campo :attribute deve possuir até :max caracteres',
            'between' => 'The :attribute value :input is not between :min - :max.',
        ];
    }
}
