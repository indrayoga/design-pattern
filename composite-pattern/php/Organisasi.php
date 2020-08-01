<?php

/**
 * Interface Organisasi
 */
interface Organisasi 
{

    /**
     * setiap kongkrit class yang implement interface organisasi
     * harus implementasi fungsi ini.
     */
    public function hitungGaji(): int;
}