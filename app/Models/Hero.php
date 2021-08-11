<?php

namespace App\Models;

abstract class Hero
{
    private int $type;
    private int $health;

    /**
     * @param int $type
     * @param int $health
     */
    public function __construct(int $type, int $health)
    {
        $this->type = $type;
        $this->health = $health;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int $health
     */
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }
}
