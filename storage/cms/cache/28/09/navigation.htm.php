<?php 
class Cms571517c00943d_456208443Class extends \Cms\Classes\PartialCode
{
public function onEnd()
{
    $regex = '/blog-(.*)/';
    
    preg_match($regex, $this->page->id, $match);
    
    if($match) {
        $this->page->id = 'blog';
    }
    
    
    $regex = '/forum-(.*)/';
    
    preg_match($regex, $this->page->id, $match);
    
    if($match) {
        $this->page->id = 'forum';
    }
    
}

}
