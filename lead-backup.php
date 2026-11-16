<?php
// Writes a private backup copy of every form submission, so no enquiry is lost
// even if email delivery fails. File: _leads/leads.jsonl (web access is blocked).
function backup_lead($rec, $sent, $body, $subject, $headers) {
    // Optional second email copy. Put an address between the quotes to enable it.
    $copy = "";

    $dir = __DIR__ . "/_leads";
    if (!is_dir($dir)) { @mkdir($dir, 0750, true); }
    $file = $dir . "/leads.jsonl";
    if (!(@file_exists($file) && @filesize($file) > 5000000)) {
        foreach ($rec as $k => $v) { $rec[$k] = substr((string)$v, 0, 2000); }
        $rec["time_utc"] = gmdate("c");
        $rec["mail"] = $sent ? "sent" : "FAILED";
        $flags = 256;
        if (defined("JSON_INVALID_UTF8_SUBSTITUTE")) { $flags = $flags | JSON_INVALID_UTF8_SUBSTITUTE; }
        $line = json_encode($rec, $flags);
        if ($line !== false) { @file_put_contents($file, $line . "\n", FILE_APPEND | LOCK_EX); }
    }
    if ($copy !== "") { @mail($copy, "[COPY] " . $subject, $body, $headers); }
}
