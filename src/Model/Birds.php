<?php

namespace App\Model;

class Birds
{

    private $birds = [
        [
            'name' => 'White bird',
            'description' => 'The chubby white bird drops an egg bomb when players tap the screen after launching the creature from the slingshot.',
            'image' => 'white.png',
        ],
        [
            'name' => 'Black bird',
            'description' => 'Black birds act as bombs, which explode once they\'ve landed on a target, obliterating pigs and buildings around them.',
            'image' => 'black.png',
        ],
        [
            'name' => 'Red bird',
            'description' => 'The first avian missile players encounter when they start the game, the red bird follows a simple trajectory when launched.',
            'image' => 'red.png',
        ],
        [
            'name' => 'Blue bird',
            'description' => 'The blue bird splits into three smaller versions in mid-air when the screen is tapped.',
            'image' => 'blue.png',
        ],
        [
            'name' => 'Yellow bird',
            'description' => 'Tapping the screen after launching the yellow bird gives the critter a speed boost that makes it more deadly.',
            'image' => 'yellow.png',
        ],
        [
            'name' => 'Green bird',
            'description' => 'The green bird turns into a boomerang that doubles back to strike targets in otherwise protected locations.',
            'image' => 'green.png',
        ],
        [
            'name' => 'Big red bird',
            'description' => 'The big red bird is a flying wrecking bail that causes more damage than his smaller red cousin.',
            'image' => 'red-big.png',
        ],
    ];

    /**
     * This method gets all the birds listed in the array above
     * 
     * @return array
     */
    public function getBirds(): array
    {
        return $this->birds;
    }

    /**
     * This method gets data of one bird based on the ID we click, the param int indicates the mandatory condition of an $id 
     * 
     * @param int $id
     * @return void
     */
    public function getBirdById($id){
        // $this->birds[0];
        // $this->birds[1];

        // we check the existence of the bird id
        if(isset($this->birds[$id])){
            //yes then we return the details
            return $this->birds[$id];
        }else{
            return false;
        }

        return $this->birds[$id];
    }
}