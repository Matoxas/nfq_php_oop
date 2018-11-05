<?php

/**
 * Created by PhpStorm.
 * User: mataskazanavicius
 * Date: 04/11/2018
 * Time: 23:19
 */

namespace Nfq\Akademija;

interface ReservableInterface{

   public function addReservation (Reservation $reservation);
   public function removeReservation (Reservation $reservation);

}