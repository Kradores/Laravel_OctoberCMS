<?php 
class Cms5dc8291b94eb0368393200_c3b8f356d2f33bbfd9c07283b210abc1Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
