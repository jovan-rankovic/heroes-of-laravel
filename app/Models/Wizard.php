<?php

namespace App\Models;

class Wizard extends Hero
{
    public function __construct()
    {
        $this->health = 150;
    }
}
