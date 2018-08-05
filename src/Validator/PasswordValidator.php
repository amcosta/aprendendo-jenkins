<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05/08/18
 * Time: 16:27
 */

namespace App\Validator;


class PasswordValidator
{
    /**
     * @var string
     */
    private $string;

    public function __construct(string $password)
    {
        $this->string = $password;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return strlen($this->string) >= 8;
    }
}