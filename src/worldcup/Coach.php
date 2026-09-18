<?php

namespace WorldCup;

class Coach extends Person {
    private String $style; 

    public function train() {
        echo "train\n";
    }

    /**
     * Get the style
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * Set the style
     */
    public function setStyle(String $style) {
        $this->style = $style;
    }
}
