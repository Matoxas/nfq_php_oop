<?php
/**
 * Created by PhpStorm.
 * User: mataskazanavicius
 * Date: 04/11/2018
 * Time: 23:18
 */

namespace Nfq\Akademija;


class Reservation
{

    protected $startDate;
    protected $endDate;
    protected $guest;

    public function __construct(\DateTime $startDate,\DateTime $endDate,Guest $guest){

        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest =$guest;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'reservation from <time>'.$this->startDate->format('Y-m-d').
                '</time> to <time>'.$this->endDate->format('Y-m-d').'</time>!';
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return mixed
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate( \DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest(Guest $guest)
    {
        $this->guest = $guest;
    }


}