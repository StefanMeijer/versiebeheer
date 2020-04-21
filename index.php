<?php
//Autoloading classes
require_once('vendor/autoload.php');

$exampleLesson = new exampleLessonController;
$exampleLesson->addListItem('item toevoegen');
$exampleLesson->html();
