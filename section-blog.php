<?php namespace ProcessWire; 

// determine what section we're in and set up a var to help us find posts that belong to the current section
switch ($page->rootParent->id) {
  case '1221':
    $blogSection = "weed-control";
    break;
  case '1222':
    $blogSection = "pest-control";
    break;
  case '1223':
  $blogSection = "plant-tree-health";
    break;
  default:
    $blogSection = "unknown";
    break;
}

if(strlen($input->urlSegment1)) {
	// render the blog post named in urlSegment1 
	$name = $sanitizer->pageName($input->urlSegment1);
  $blogPost = $pages->findOne("template=blog-post,name=$name,blog_section.value=$blogSection");
  
	if($blogPost->id) echo $blogPost->render();// render the post using its template file
	else throw new Wire404Exception();
}else{
  require($config->paths->templates.'includes/section-blog.inc');
  require($config->paths->templates.'_main.php');
}


