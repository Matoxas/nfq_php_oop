<?php
/**
 * Created by PhpStorm.
 * User: mataskazanavicius
 * Date: 04/11/2018
 * Time: 23:54
 */

namespace Nfq\Akademija\Room;


class Apartment extends Room
{
    protected $bedCount = 4;
    protected $roomType = 'Diamond';
    protected $hasRestroom = true;
    protected $hasBalcony = true;
    protected $extras = ['TV', 'air-conditioner', 'refrigerator', 'kitchen box',
        'mini-bar', 'bathtub', 'free Wi-fi'];

}