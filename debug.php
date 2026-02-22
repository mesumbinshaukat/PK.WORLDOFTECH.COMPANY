<?php
$context = stream_context_create(['http' => ['ignore_errors' => true]]);
$content = file_get_contents('http://localhost:8888', false, $context);
echo $content;
