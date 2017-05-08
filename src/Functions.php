<?php

function dump($value)
{
    echo PHP_SAPI !== 'cli' ? "<pre>\n" : null;
    var_dump($value);
    echo PHP_SAPI !== 'cli' ? "</pre>\n" : null;
}
