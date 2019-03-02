<?php
require_once 'vendor/autoload.php';

use Tnq\AwsService\App;

try {
    $s3 = App::get("fileSystemS3", [
        "key"=>"###", 
        "secret" => "###",
        "bucket" => "###",  
        "region" => "###"
    ]);
}
catch (Exception $e) {
    echo $e->getMessage() . "\n";
}