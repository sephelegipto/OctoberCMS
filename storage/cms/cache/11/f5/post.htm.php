<?php 
class Cms5ba0a66e1ce85050631148_245b7ad474f3c3f1f50f399b61cf0c17Class extends Cms\Classes\PageCode
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
