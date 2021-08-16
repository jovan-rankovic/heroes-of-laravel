<?php

namespace App\Models;

abstract class Character
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
    abstract public function normalAttack(int $amount): void;
}
