<?php
require_once "./Organisasi.php";

class Pegawai implements Organisasi 
{

    private $gaji;
    private $bonus;

    public function setGaji(int $gaji): void
    {
        $this->gaji = $gaji;
    }

    public function getGaji(): int
    {
        return $this->gaji;
    }

    public function setBonus(int $bonus): void
    {
        $this->bonus = $bonus;
    }

    public function getBonus(): int
    {
        return $this->bonus;
    }

    public function hitungGaji(): int
    {
        return $this->gaji + $this->bonus;
    }
}
