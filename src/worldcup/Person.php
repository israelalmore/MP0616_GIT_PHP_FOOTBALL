<?php

namespace WorldCup;

/**
 * Class to define the Person
 */

class Person
{
    private int $age;

    /**
     * Get the globes
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the globes
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function run()
    {


        echo "running \n";
    }
}
