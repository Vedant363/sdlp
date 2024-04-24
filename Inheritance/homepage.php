<?php
// HomePage.php
require_once 'page.php';

class HomePage extends Page {
    public function __construct() {
        parent::__construct("Home Page", "Welcome to our website!");
    }
}
?>
