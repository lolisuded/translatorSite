<?php

namespace App\Rules;

use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;

class ValidRecaptcha implements Rule
{

    Const GOOGLE_CAPTCHA_API_LINK = "https://google.com/recaptcha/api/";
    private $client;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client([ 'base_uri' => self::GOOGLE_CAPTCHA_API_LINK]);
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
        // Validate ReCaptcha
        $response = $this->client->post('siteverify', [
            'query' => [
                'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
                'response' => $value
            ]
        ]);

        return json_decode($response->getBody())->success;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Incorrect ReCaptcha.';
    }
}