<?php
namespace App\Services\Export;
use Spatie\ArrayToXml\ArrayToXml;

class Report implements Export{

    public $data;

    public function __construct($data) {
        $this->data = $data;
        return $this;
    }

    public function toJson() {
        header('Content-type: text/json');
        return json_encode($this->data);
    }

    public function toXml() {
        header('Content-type: text/xml');
        $format = [];
        foreach($this->data as $key => $data) {
            $format["_".$key] =  $data;
        }
        return ArrayToXml::convert($format, "root");
    }
    public function toCsv() {

        header('Content-type: text/csv');
        header('Content-Disposition: attachment; filename="export.csv";');

        $f = fopen('php://memory', 'r+');

        $headings = collect($this->data[0])->keys();
        $headings = $headings->map(function($item, $key) {
            return collect(explode('_', $item))
                ->map(function($item, $key) {
                    return ucfirst($item);
                })
                ->join(' ');
        });

        fputcsv($f,$headings->toArray());
        
        foreach ($this->data as $item) {
            fputcsv($f, $item);
        }

        rewind($f);

        return stream_get_contents($f);
    }
}