<?php
// Page.php
class Page {
    protected $title;
    protected $content;
    
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }
    
    public function render() {
        echo "<!DOCTYPE html>\n";
        echo "<html>\n<head>\n";
        echo "<title>$this->title</title>\n";
        echo "</head>\n<body>\n";
        echo "<h1>$this->title</h1>\n";
        echo "<div>$this->content</div>\n";
        echo "</body>\n</html>";
    }
}
?>
