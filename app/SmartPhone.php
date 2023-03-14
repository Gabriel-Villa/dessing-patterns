<?php

namespace App;

class SmartPhone
{

    private $cpu;
    private $ram;
    private $camera;
    private $screen;
    private $color;

    /**
     * Get the value of cpu
     */ 
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Set the value of cpu
     *
     * @return  self
     */ 
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;

        return $this;
    }

    /**
     * Get the value of ram
     */ 
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set the value of ram
     *
     * @return  self
     */ 
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get the value of camera
     */ 
    public function getCamera()
    {
        return $this->camera;
    }

    /**
     * Set the value of camera
     *
     * @return  self
     */ 
    public function setCamera($camera)
    {
        $this->camera = $camera;

        return $this;
    }

    /**
     * Get the value of screen
     */ 
    public function getScreen()
    {
        return $this->screen;
    }

    /**
     * Set the value of screen
     *
     * @return  self
     */ 
    public function setScreen($screen)
    {
        $this->screen = $screen;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
