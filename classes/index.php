<?php

class Team
{

    protected $name;
    protected $members = [];

    public function __construct($name, $members)
    {
     $this->name = $name;
     $this->members = $members;   
    }

    //nice readable way for code to initiate objects
    public static function start(...$params)
    {   
        echo "===================";
        var_dump(...$params);
        echo "===================";
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function addMember($name)
    {
        $this->members[] = $name;
    }

}

class Member

{
    protected $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}



$team1 = Team::start('family', [
    new Member('Skand Purohit'),
    new Member('Soumya Purohit')
]);

$team1->addMember('Deep Purohit');

var_dump($team1->members());