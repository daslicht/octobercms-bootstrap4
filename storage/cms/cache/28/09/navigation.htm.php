<?php 
class Cms5715328a6056e_879331543Class extends \Cms\Classes\PartialCode
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
