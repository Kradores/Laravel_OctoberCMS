<?php 
class Cms5d5d9ece42c60927180415_e9621479b2bf7a723fd4e78bb57b6043Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
