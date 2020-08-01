<?php
require_once "./Organisasi.php";

class Divisi implements Organisasi
{
    protected $children;

    public function __construct()
    {
        $this->children = new SplObjectStorage;   
    }

    public function add(Organisasi $children): void
    {
        $this->children->attach($children);
    }

    public function remove(Organisasi $children): void
    {
        $this->children->detach($children);
    }

    public function hitungGaji(): int
    {
       $totalGaji = 0;
       foreach($this->children as $child)
       {
            $totalGaji += $child->hitungGaji();
       }

       return $totalGaji;
    }
}