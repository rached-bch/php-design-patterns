<?php
namespace App\DesignPatterns\AdapterWrapper;

class KindleEbook implements EbookInterface {
    public function getName() {
        return "Kindle EBook";
    }
    public function nextPage() {
        echo "Next kindle ebook page executed";
    }
}