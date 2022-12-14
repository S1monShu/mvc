<?php 

require 'post.php';
$posts = getPosts();

include "views/index.show.php";