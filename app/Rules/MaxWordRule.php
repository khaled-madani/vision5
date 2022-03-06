<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxWordRule implements Rule
{
    protected $countWord;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($count)
    {
        $this->countWord = $count;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value )
    {
        return str_word_count($value) <= $this->countWord;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute cannot be longer than '. $this->countWord .' words.';
    }
}
