<?php

    $output = shell_exec('ls -la');
    echo "\n<pre>$output</pre>\n";

    $backtick = `ls`;
    echo htmlspecialchars("\n$backtick\n");

?>