<?php
<?php
function displayComment($name, $message)
{
    echo "<div>";
    $safeName = htmlspecialchars((string)$name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
...
echo '<strong>' . $safeName . '</strong>';
    $safeMessage = htmlspecialchars((string)$message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
...
echo '<p>' . $safeMessage . '</p>';
    echo "</div>";
}
