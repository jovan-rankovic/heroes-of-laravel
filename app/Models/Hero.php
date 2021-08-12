<?php

namespace App\Models;

abstract class Hero
{
    protected int $health;

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int amount
     */
    public function removeHealth(int $amount): void
    {
        $this->health -= $amount;
    }
}
