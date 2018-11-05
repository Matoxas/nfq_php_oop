<?php
/**
 * Created by PhpStorm.
 * User: mataskazanavicius
 * Date: 04/11/2018
 * Time: 23:43
 */

namespace Nfq\Akademija;


use Nfq\Akademija\Room\Room;

class BookingManager
{
    static function bookRoom(Room $room, Reservation $reservation){

        // todo if time clashes



        if($room->addReservation($reservation)){

            echo 'Room '.$room->getRoomNumber().' successfully booked for 
            <strong>'.$reservation->getGuest().'
            </strong> from <time>'.$reservation->getStartDate()->format('Y-m-d').'</time> to 
            <time>'.$reservation->getEndDate()->format('Y-m-d').'</time>!';

        }else{
            echo 'fail';
        }



    }

}