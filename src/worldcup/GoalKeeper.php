<?php

namespace WorldCup;

require_once __DIR__ . '/Ball.php';
require_once __DIR__ . '/Player.php';

/**
 * Class to define the goalkeeper
 */
class GoalKeeper extends Player
{
    public bool $globes; // property declared without type, like in original

    /**
     * Get the globes
     */
    public function isGlobes()
    {
        return $this->globes;
    }

    /**
     * Set the globes
     */
    public function setGlobes(bool $globes)
    {
        $this->globes = $globes;
    }

    public function block(Ball $ball)
    {
        $effects = ["with success", "without success"];

        $effect = $effects[array_rand($effects)];

        echo "catching $effect\n";
    }
}
