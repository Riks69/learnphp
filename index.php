<?php

//// library example
class Job {
    public function task(ConsoleLogger $logger) {
        for($i = 0; $i < 10; $i++) {
            $logger -> log("Task $i completed!");
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message) {
        echo $message . "\n";
    }
}

interface Logger {
    public function log($message);
}

//// user code
class NothingLogger {
    public function log($message) {

    }
}

class FileLogger {
    public function log($message) {
        $file = fopen('log.log', 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

$job = new Job();
$logger = new ConsoleLogger();
$job -> task($logger);