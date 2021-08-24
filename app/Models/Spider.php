<?php

namespace App\Models;

class Spider extends Character
{
    public function __construct()
    {
        $this->health = 100;
    }

    public function normalAttack(Character $character): void
    {
        // TODO: Implement normalAttack() method.
    }
}
