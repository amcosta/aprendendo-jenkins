<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05/08/18
 * Time: 16:29
 */

namespace Tests\Validator;


use App\Validator\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    public function testValidatePassword()
    {
        $validator = new PasswordValidator('123');
        $this->assertFalse($validator->isValid());
    }
}