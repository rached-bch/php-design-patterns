<?php
namespace App\DesignPatterns\Decorator;

abstract class BookingDecorator {
    protected $booking;
    public function __construct(Booking $booking) {
        $this->booking = $booking;
    }

    public abstract function calculatePrice();
}