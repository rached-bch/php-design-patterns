<?php
namespace App\DesignPatterns\Decorator;

class ExtraBedDecorator extends BookingDecorator {
    public function calculatePrice() {
        return $this->booking->calculatePrice() + 20;
    }
}