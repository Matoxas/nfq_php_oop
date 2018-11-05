<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP2 - Matas Kaznavičius</title>
  </head>
  <body>


    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    use Nfq\Akademija\Room\{Room, SingleRoom, BedRoom, Apartment};
    use Nfq\Akademija\{Guest, Reservation, BookingManager};

    $room = new SingleRoom(1408, 99);
    $guest = new Guest('Vardenis', 'Pavardenis');
    $startDate = new \DateTime('2018-11-01');
    $endDate = new \DateTime('2018-11-05');
    $reservation = new Reservation($startDate, $endDate, $guest);
    BookingManager::bookRoom($room, $reservation);


    ?>



  </body>
</html>
