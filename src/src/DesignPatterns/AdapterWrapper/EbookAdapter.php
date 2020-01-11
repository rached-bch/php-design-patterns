<?php
namespace App\DesignPatterns\AdapterWrapper;

class EbookAdapter implements BookInterface {
    protected $ebook;
    public function __construct(EbookInterface $ebook) {
        $this->ebook = $ebook;
    }
    public function getName() {
        return $this->ebook->getName();
    }
    public function turnPage() {
        $this->ebook->nextPage();
    }
}