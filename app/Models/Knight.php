<?php

namespace App\Models;

class Knight extends Character
{
    public function __construct()
    {
        $this->health = 100;
    }

    public function normalAttack(int $amount): void
    {
        // TODO: Implement normalAttack() method.
    }
}
