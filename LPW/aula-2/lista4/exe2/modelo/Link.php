<?php
class Link {
    public $linkImg;
    public $info;

    public function __construct($linkImg, $info) {
        $this->linkImg = $linkImg;
        $this->info = $info;
    }
}
