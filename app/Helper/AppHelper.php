<?php

namespace App\Helper;

use Illuminate\Contracts\Container\BindingResolutionException;
use InvalidArgumentException;
use MailerLite\MailerLite;

final class AppHelper
{
    /**
     * returns MailerLite SDK object.
     *
     * @throws InvalidArgumentException|BindingResolutionException
     */
    public static function mailerlite(?string $key): MailerLite
    {
        if('' === $key || null === $key) {
            throw new InvalidArgumentException('Invalid API key!');
        }

        return app()->makeWith('MailerliteSDK', [
            'api_key' => $key
        ]);
    }
}
