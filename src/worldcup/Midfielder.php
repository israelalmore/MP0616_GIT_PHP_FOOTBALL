<?php

namespace WorldCup;

/**
 * Class to define the midfielder
 */
class Midfielder extends Player {
    private bool $vision;


    /**
     * Get the visions
     */
    public function isVision() {
        return $this->vision;
    }

    /**
     * Set the vision
     */
    public function setVision(bool $vision) {
        $this->vision = $vision;
    }

    public function organize() {
        echo "organizing\n"; // En PHP no existe print1n, así que uso echo para que funcione.
    }
}
