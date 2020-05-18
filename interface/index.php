<?php 

interface Subscription
{
    public function subscribe($email);
}


class Newsletter implements Subscription
{
    public function subscribe($email)
    {
        //
        die('Subscribing with Newsletter');
    }
}


class AppleNews implements Subscription
{
    public function subscribe($email)
    {
        die('Subscribing with AppleNews');
    }
}



class Organization 
{
    public function store(Subscription $organization)
    {
        //
        $email = 'john.doe@gmail.com';
        $organization->subscribe($email);
    }
}


$controller = new Organization();

$controller->store(new AppleNews());