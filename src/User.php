<?php


namespace App;

use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;


class User
{
    private $firstname;
    private $lastname;
    private $email;
    private $age;

    public function __construct(string $email, int $age)
    {
        $this->email = $email;
        $this->age = $age;
    }

    public function isValid()
    {
        $validator = new EmailValidator();
        if($this->age <= 13 || !isset($this->firstname, $this->lastname) || $validator->isValid($this->email, new RFCValidation()) == false)
        {
            return false;
        }else{
            return true;
        }
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}