<?php

namespace App\Models;

class Knight extends Hero
{
    public function __construct()
    {
        $this->health = 100;
    }
}
