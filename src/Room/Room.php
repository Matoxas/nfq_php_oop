<?php
/**
 * Created by PhpStorm.
 * User: mataskazanavicius
 * Date: 04/11/2018
 * Time: 22:29
 */

namespace Nfq\Akademija\Room;


     use Nfq\Akademija\ReservableInterface;
     use Nfq\Akademija\Reservation;


     class Room implements ReservableInterface
    {

        protected $roomType;
        protected $hasRestroom;
        protected $hasBalcony;
        protected $bedCount;
        protected $roomNumber;
        protected $extras;
        protected $price;
        protected $reservations = [];

        public function __construct($roomNumber, $price)
        {
            $this->roomNumber = $roomNumber;
            $this->price = $price;
        }

//        public function __destruct()
//        {
//            $this->reservations = [];
//        }

         public function __toString()
         {

             return (string)$this->roomNumber;
         }


         public function addReservation(Reservation $reservation)
        {
            try{


                foreach ($this->reservations as $res){

                    if($res->getstartDate() == $reservation->getStartDate()
                        && $res->getendDate() == $reservation->getEndDate()){
                        // todo throw exception
                    }
                }

                array_push($this->reservations, $reservation);
                return true;

            } catch (\Exception $e){
                return $e;
            }
        }

        public function removeReservation(Reservation $reservation)
        {

            $key = array_search($reservation, $this->reservations);
            if ($key !== false){
                unset($this->reservations, $key);
                return 'rezervacija sėkmingai pašalinta';
            }else{
                return 'rezervacijos pasirinktu laiku nėra';
        }

        }

        // GETTERS AND SETTERS

         /**
          * @return mixed
          */
         public function getBedCount():\int
         {
             return $this->bedCount;
         }

         /**
          * @return mixed
          */
         public function getExtras()
         {
             return $this->extras;
         }

         /**
          * @return mixed
          */
         public function getHasBalcony()
         {
             return $this->hasBalcony;
         }

         /**
          * @return mixed
          */
         public function getHasRestroom()
         {
             return $this->hasRestroom;
         }

         /**
          * @return mixed
          */
         public function getPrice()
         {
             return $this->price;
         }

         /**
          * @return array
          */
         public function getReservations(): array
         {
             return $this->reservations;
         }

         /**
          * @return mixed
          */
         public function getRoomNumber()
         {
             return $this->roomNumber;
         }

         /**
          * @return mixed
          */
         public function getRoomType()
         {
             return $this->roomType;
         }

         /**
          * @param mixed $bedCount
          */
         public function setBedCount($bedCount)
         {
             $this->bedCount = $bedCount;
         }

         /**
          * @param mixed $extras
          */
         public function setExtras($extras)
         {
             $this->extras = $extras;
         }

         /**
          * @param mixed $hasBalcony
          */
         public function setHasBalcony($hasBalcony)
         {
             $this->hasBalcony = $hasBalcony;
         }

         /**
          * @param mixed $hasRestroom
          */
         public function setHasRestroom($hasRestroom)
         {
             $this->hasRestroom = $hasRestroom;
         }

         /**
          * @param mixed $price
          */
         public function setPrice($price)
         {
             $this->price = $price;
         }

         /**
          * @param array $reservations
          */
         public function setReservations(array $reservations)
         {
             $this->reservations = $reservations;
         }

         /**
          * @param mixed $roomNumber
          */
         public function setRoomNumber($roomNumber)
         {
             $this->roomNumber = $roomNumber;
         }

         /**
          * @param mixed $roomType
          */
         public function setRoomType($roomType)
         {
             $this->roomType = $roomType;
         }

     }