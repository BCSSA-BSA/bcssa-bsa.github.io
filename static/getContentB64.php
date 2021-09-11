<?php
function outputHelp(){
    print_r("Usage: php getContentB64.php PATH_TO_FILE\r\n");
}

if($argc !== 2){
    print_r("# of inputs wrong!\r\n");
    outputHelp();
    exit();
    
}
if($argv[1] === '-h' || $argv[1] === '--help'){
    outputHelp();
    exit();
}
print_r(base64_encode(file_get_contents($argv[1])) . "\r\n");
exit();