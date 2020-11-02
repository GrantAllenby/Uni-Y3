<?php
function htmlBody($api, $graphics) {

    return <<<BODY
    <body>
    <script src="../../resources/$api"></script>
    <script src="includes/graphics/$graphics"></script>
</body>
BODY;
}