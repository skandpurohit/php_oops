<?php

class Collection
{
    public $items = [];

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        var_dump($key);
        return array_sum(array_column($this->items, $key));
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

class VideoCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

$videos = new VideoCollection([
    new Video('php video', 100),
    new Video('oops video', 200),
    new Video('laravel video', 300),
]);

//var_dump($collection);

echo $videos->length();
