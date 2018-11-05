<?php
/**
 * Created by PhpStorm.
 * User: mataskazanavicius
 * Date: 04/11/2018
 * Time: 23:54
 */

namespace Nfq\Akademija\Room;


class SingleRoom extends Room
{
    protected $bedCount = 1;
    protected $roomType = 'Standard';
    protected $hasRestroom = true;
    protected $hasBalcony = false;
    protected $extras = ['TV', 'air-conditioner'];

}