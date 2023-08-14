<?php
class Greeting {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function displayMessage() {
        echo "Hello, my name is " . $this->name;
    }
}

$greeting = new Greeting("Radu");
$greeting->displayMessage();

?>