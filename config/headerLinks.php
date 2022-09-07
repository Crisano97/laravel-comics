<?php
class HeaderLink{
    public $name;
    public $url;

    public function __construct($_name, $_url){
        $this->name = $_name;
        $this->url = $_url;
    }
}

return [
    new HeaderLink("character","#"),
    new HeaderLink("comics","#"),
    new HeaderLink("movies","#"),
    new HeaderLink("tv","#"),
    new HeaderLink("games","#"),
    new HeaderLink("collectibles","#"),
    new HeaderLink("videos","#"),
    new HeaderLink("fans","#"),
    new HeaderLink("news","#"),
    new HeaderLink("shop","#"),
];