<?php 
class Cms57153ecab8339_1300813416Class extends \Cms\Classes\PartialCode
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
