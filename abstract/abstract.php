<?php

abstract class Achievement
{

    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));

    }


    public function icon()
    {
        return strtolower(str_replace(' ','-', $this->name())).'.png';
    }

    abstract public function qualifier($user);
}




class FirstThousandPoints extends Achievement
{
    public function qualifier($user)
    {
        
    }
}


class FirstBestAnswer extends Achievement
{
    public function qualifier($user)
    {
        
    }
}

$acheivement = new FirstThousandPoints;
echo $acheivement->qualifier('user');