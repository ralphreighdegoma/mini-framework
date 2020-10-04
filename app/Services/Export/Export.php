<?php
namespace App\Services\Export;

interface  Export {
    public function toJson();
    public function toXml();
    public function toCsv();
}