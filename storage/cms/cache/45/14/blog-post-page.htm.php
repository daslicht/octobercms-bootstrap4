<?php 
class Cms571516ec5add9_3952773849Class extends \Cms\Classes\PageCode
{
public function onEnd() {
    $this->page->title =   $this['post']->title;
    //echo 'e:'. $this['post']->title;die;
}

}
