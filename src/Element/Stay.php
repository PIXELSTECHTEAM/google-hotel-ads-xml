<?php

namespace Bahiazul\GoogleHotelAds\Xml\Element;

/**
 * Stay
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Stay extends Base
{
    /**
     * The check-in date for the itinerary.
     *
     * @var string
     */
    public $checkInDate;

    /**
     * The number of nights for the itinerary, expressed as a positive integer.
     *
     * @var int
     */
    public $lengthOfStay;
}