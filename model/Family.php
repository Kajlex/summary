<?php

/**
 * Created by PhpStorm.
 * User: artem
 * Date: 22.05.17
 * Time: 21:41
 */

class Family extends ModelAbstract
{
    public $id;
    public $firstName;
    public $lastName;
    public $address;

    public function __construct(string $firstName, string $lastName, string $address, int $id = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->id = $id;

    }

    public function validate(): bool
    {
        if (iconv_strlen($this->firstName) > 50 || iconv_strlen($this->firstName) < 2) {
            return false;
        }
        if (iconv_strlen($this->lastName) > 50 || iconv_strlen($this->lastName) < 2) {
            return false;
        }
        if (iconv_strlen($this->address) > 15 || iconv_strlen($this->address) < 2) {
            return false;
        }
        return true;
    }

}