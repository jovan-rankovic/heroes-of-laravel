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
     * @param Character $character
     */
    abstract public function normalAttack(Character $character): void;
}
