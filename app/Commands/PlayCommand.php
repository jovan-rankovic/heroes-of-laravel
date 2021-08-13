<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class PlayCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'play {name=Artisan}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = '>>> Play the game <<<';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $option = $this->menu('Heroes of Laravel', [
            'Start the game',
        ])
            ->setForegroundColour('green')
            ->setBackgroundColour('black')
            ->setWidth(200)
            ->setPadding(10)
            ->setMargin(5)
            ->setExitButtonText("Exit")
            ->setTitleSeparator('*-')
            ->open();

        if ($option !== 0) {
            return;
        }

        $hero = $this->menu('Choose your hero', [
            'Knight',
            'Wizard'
        ])
            ->setForegroundColour('green')
            ->setBackgroundColour('black')
            ->setWidth(200)
            ->setPadding(10)
            ->setMargin(5)
            ->setTitleSeparator('-')
            ->disableDefaultItems()
            ->open();

        $this->info($hero);
    }
}
