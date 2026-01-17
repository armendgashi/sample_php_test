<?php
function displayComment($name, $message)
{
    // Constrain inputs to reasonable lengths to reduce abuse (DoS/memory) and ensure predictable output
    $name = (string)$name;
    $message = (string)$message;

    $name = mb_substr($name, 0, 100, 'UTF-8');
    $message = mb_substr($message, 0, 5000, 'UTF-8');

    // Output-encode user-controlled data before inserting into HTML to prevent XSS
    $safeName = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeMessage = htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

    echo "<div>";
    echo "<strong>{$safeName}</strong>";
    echo "<p>{$safeMessage}</p>";
    echo "</div>";
}

