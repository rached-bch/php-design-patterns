<?php
namespace App\DesignPatterns\AdapterWrapper;

class PaperBook implements BookInterface {
    public function getName() {
        return "Paper Book";
    }
    public function turnPage() {
        echo "Turn paper book page executed";
    }
}