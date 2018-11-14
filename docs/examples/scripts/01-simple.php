<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "bootstrap.php";

use DocxTemplate\TemplateFactory;

$doc = new ExampleDoc("01-simple.docx");
$template = TemplateFactory::load($doc->getOriginalPath());
$template->assign([
    "title" => "This is testing",
    "testing"  => "This is testing of utf8 Привеfddт мир!",
    "helpful" => 'This is testing of special character <>!@#$%^&*()_+;:"\'\\|/',
    "name"=>"Anju Dhiman",
    "custom_variable"=>122,
    "name2"=>"Anju2 dhiman2"
]);
$template->save($doc->getProcessedPath());
