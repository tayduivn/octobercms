<?php 
class Cms5d68932091e25220168580_adaddb92252a2fdc205c8671e78165daClass extends Cms\Classes\PageCode
{
public function onEnd() {

    // get the post component
    $_post = $this->components['blogPost'];
    $check = $_post->currentPostSlug; // check if it is a real post
    $category = $this->components['CategoryTwoLevel']->categoryChild->name;           
    $_post = $_post->post; // post is the alias of my component
    
    // get the title
    $_title = $_post->title;
    if($check != false) {
        // update the page title
        $this->page->title = $_title; 
    }    
    else {
        $this->page->title = $category;
    }
}
}
