<?php namespace ProcessWire;

// check if we have a URL Segment
if(strlen($input->urlSegment1)) {
	// render the blog post named in urlSegment1 
	$name = $sanitizer->pageName($input->urlSegment1);
	$post = $pages->get("/posts/")->child("name=$name");
	if($post->id) echo $post->render();// render the post using its template file
	else throw new Wire404Exception();
}