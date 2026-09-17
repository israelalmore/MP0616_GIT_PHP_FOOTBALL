<?php

namespace WorldCup;

class Player extends Person {
    private String $position; 

    public function passBall() {
        echo "passing ball\n";
    }

    /**
     * Get the position
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set the position
     */
    public function setPosition($position) {
        $this->position = $position;
    }
}
