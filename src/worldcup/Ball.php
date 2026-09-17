<?php

namespace WorldCup;

class Ball
{
    private String $material;

    /**
     * Get the material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the style
     */
    public function setMaterial(String $material)
    {
        $this->material = $material;
    }
}
