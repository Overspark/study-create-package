<?php

namespace StudyCreatePackage\PrintText;

class PrintText
{
    public static function printText(string $text = 'default text'): void
    {
        echo $text;
    }
}