<?php

namespace App\Models;

class Wizard extends Character
{
    public function __construct()
    {
        $this->health = 150;
    }

    public function normalAttack(Character $character): void
    {
        // TODO: Implement normalAttack() method.
    }
}
