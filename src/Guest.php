<?php
/**
 * Created by PhpStorm.
 * User: mataskazanavicius
 * Date: 04/11/2018
 * Time: 23:18
 */

namespace Nfq\Akademija;


class Guest
{
    protected $firstName;
    protected $lastName;

    public function __construct($firstName, $lastName){

        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return $this->firstName. ' '. $this->lastName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName():string
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName():string
    {
        return $this->lastName;
    }


}