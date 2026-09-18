<?php

class task {
    public function job(Logger $logger){
        for($i = 0; $i<10; $i++){
            echo "job $i was done!\n"
            $logger ->log("Job $i was done!")
        }
    }
}


class ConsoleLogger {
    public function log($message){
        echo "$message\n";
    }
}

class NothingLogger implements Logger {
    public function log($message){

    }
}

interface Logger {
    public function log($message){

    }
}

class FileLogger implements Logger{
    public function log($message){
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

$logger = new FileLogger
$task = new Task();
$task ->job($Logger);