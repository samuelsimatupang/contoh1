<?php   
class car{
    public $nama;
    public $brand;
    public $harga;
    public function __clone()
    {
        $namaCopy = $this->nama;
        unset($this->nama);
        $this->nama = $namaCopy;

    }
}

$nama = "Jazz";
$brand = "Honda";
$harga = 80_000_000;
$obj = new car();
$obj->nama = &$namaCopy;
$obj->nama = &$nama;
$obj->brand= &$brand;
$obj->harga= &$harga;

#clone
$copy = clone $obj;

$obj->nama = "Avanza";

print_r($obj);
print_r($copy);