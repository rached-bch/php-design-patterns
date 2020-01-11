<?php
namespace App\DesignPatterns\Decorator;

class RoomBooking implements Booking {
    public function calculatePrice() {
        return 100;
    }
}