<?php
/**
 * Created by PhpStorm.
 * User: mataskazanavicius
 * Date: 04/11/2018
 * Time: 23:54
 */

namespace Nfq\Akademija\Room;


class BedRoom extends Room
{

    protected $bedCount = 2;
    protected $roomType = 'Gold';
    protected $hasRestroom = true;
    protected $hasBalcony = true;
    protected $extras = ['TV', 'air-conditioner', 'refrigerator', 'mini-bar', 'bathtub'];

}