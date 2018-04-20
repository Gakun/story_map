<?php
$story = require(__DIR__.'/story_php/story.php');
file_put_contents(__DIR__.'/story_json/story.json', json_encode($story));
$story1 = require(__DIR__.'/story_php/story1.php');
file_put_contents(__DIR__.'/story_json/story1.json', json_encode($story1));
$levelstory = require(__DIR__.'/story_php/levelstory.php');
file_put_contents(__DIR__.'/story_json/levelstory.json', json_encode($levelstory));