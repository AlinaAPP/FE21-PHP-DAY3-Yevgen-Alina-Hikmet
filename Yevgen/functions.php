<?php

### Formated var_dump
function format_dump($param)
{
    echo "pre" . var_dump($param) . "<pre>";
}

### Formated var_export
function format_export($param)
{
    echo "pre" . var_export($param) . "<pre>";
}

### Formated print_r
function format_print($param)
{
    echo "pre" . print_r($param) . "<pre>";
}

### Formated highlight_string
function format_highlight_dump($param)
{
    highlight_string("<?php\n\$param =\n" . var_dump($param, true) . ";\n?>");
}

### Formated highlight_string with var_export
function format_highlight_export($param)
{
    highlight_string("<?php\n\$param =\n" . var_export($param, true) . ";\n?>");
}

### Formated highlight_string
function format_highlight_print($param)
{
    highlight_string("<?php\n\$param =\n" . print_r($param, true) . ";\n?>");
}

###############################################################################

### Print at the start and at the end of an exercise 
function start_Exercise($ex_number)
{
    echo "<h3>Exercise $ex_number</h3>";
}

function end_Exercise()
{
    echo "<hr><br>";
}
###############################################################################

?>