<?php
class WebPage {
    /**
    / Creates an HTML webpage using the given params
    /
    / @author Grant Allenby
    /
    **/
    private $main;
    private $css;
    private $pageStart;
    private $header;
    private $footer;
    private $pageEnd;

    public function __construct($pageTitle, $css, $pageHeading1, $footerText) {
        $this->set_css($css);
        $this->set_pageStart($pageTitle,$this->css);
        $this->set_header($pageHeading1);
        $this->set_footer($footerText);
        $this->set_pageEnd();
        // @todo - initialise properties and call methods as required
    }

    private function set_pageStart($pageTitle, $css) {
        $this->pageStart = <<<PAGESTART
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8" />
                <title>$pageTitle</title>
                <link rel="stylesheet" href="$css">
            </head>
            <body>
PAGESTART;
        // @todo - code to create the initial html <!DOCTYPE ... etc.
    }

    private function set_header($pageHeading1) {
        $this->header = <<<HEADER
        <header>
            <h1>$pageHeading1</h1>
        </header>
HEADER;
    }

    private function set_css($css) {
        $this->css = $css;
    }

    private function set_main($main) {
        $this->main = <<<MAIN
        <main>
            $main
        </main>
MAIN;
    }

    private function set_footer($footerText) {
        $this->footer = <<<FOOTER
        <footer>
            $footerText
        </footer>
FOOTER;
    }

    private function set_pageEnd() {
        $this->pageEnd = <<<PAGEEND
            </body>
        </html>
PAGEEND;
    }

    public function addToBody($text) {
        // @todo - add text to the <main> section of a page
        $this->main .= $text;
    }

    public function get_page() {
        // @todo - return a whole webpage, not just the <main> section.
        $this->set_main($this->main);
        return
            $this->pageStart.
            $this->header.
            $this->main.
            $this->footer.
            $this->pageEnd;
    }
}