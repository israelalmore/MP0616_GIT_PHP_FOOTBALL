<?php

namespace WorldCup;

/**
 * Class to define the team
 */
class Team
{
    public String $name;
    public Coach $coach;
    public array $players; // array of Player objects

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function play()
    {
        echo "playing\n";
    }

    public function attack()
    {
        echo "attacking\n";
    }

    /**
     * Get the name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the name
     */
    public function setName(String $name)
    {
        $this->name = $name;
    }

    /**
     * Set the coach
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * Get the coach
     */
    public function setCoach(Coach $coach)
    {
        $this->coach = $coach;
    }

    /**
     * Get the players
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set the players
     */
    public function setPlayers(array $players)
    {
        $this->players = $players;
    }
}
