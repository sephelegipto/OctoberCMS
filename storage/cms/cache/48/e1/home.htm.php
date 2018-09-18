<?php 
class Cms5ba079fa27c52340593911_9876430350d7a51b8391667e14c86716Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
