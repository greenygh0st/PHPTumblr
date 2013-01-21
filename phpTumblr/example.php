<?php
/*
This is a super simple example of how to use PHPTumbler.
Please note that this class/script only allows you to read
from a tumbler. It does not allow you to post to it.

Be sure you only use this on your own blog as re-producing
someone else's works without permission can lead to legal 
consquences for yourself.

*/

//First we include these two key files.
require dirname(__FILE__).'/clearbricks/_common.php';
require dirname(__FILE__).'class.read.tumblr.php';

//next we select the blog we want to draw from.
$oTumblr = new readTumblr('greenyghost'); 

//next we select the types of posts we want to get.
//Syntax for: getPosts($StartatWhichPost, $MaximumAmountofPosts, $WhatKindofPosts, $SpecificPostbyID)
//if using the 4th variable all others are null
$oTumblr->getPosts(null,'all','regular'); 

//dumps out data into a usable array
$aTumblr = $oTumblr->dumpArray(true);

//print the results
echo print_r ($aTumblr);
?>
