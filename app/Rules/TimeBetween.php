<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class TimeBetween implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $pickUpDate = Carbon::parse($value);
        $pickUpTime = Carbon::createFromTime($pickUpDate->hour, $pickUpDate->minute, $pickUpDate->second);

        $openTime = Carbon::createFromTimeString('08:00:00');
        $closeTime = Carbon::createFromTimeString('22:00:00');

        return $pickUpTime->between($openTime, $closeTime) ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please choose a time between 08:00 and 22:00.';
    }
}
