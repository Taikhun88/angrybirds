<?php

namespace App\Model;

class TestOddEven
{
    private $test = [
        [
            "articleA" => "Foulards"
        ],
        [
            "articleA" => "T-shirts"
        ],
        [
            "articleA" => "Pulls"
        ],
        [
            "articleA" => "Caleçons"
        ],
        [
            "articleA" => "Pantalons"
        ],
        [
            "articleA" => "Sneakers"
        ]
    ];

    public function getOddEvenValues()
    {
        return $this->test;
    }
}
