<?php 

namespace App\Helpers;

class Helpers 
{
    /**
     * Generate generic initials from a name
     * https://chrisblackwell.me/generate-perfect-initials-using-php/
     */
    public static function initials(string $name) : string
    {
        $words = explode(' ', $name);
        if (count($words) >= 2) {
        return mb_strtoupper(
            mb_substr($words[0], 0, 1, 'UTF-8') .
            mb_substr(end($words), 0, 1, 'UTF-8'),
        'UTF-8');
        }
        preg_match_all('#([A-Z]+)#', $name, $capitals);
        if (count($capitals[1]) >= 2) {
        return mb_substr(implode('', $capitals[1]), 0, 2, 'UTF-8');
        }
        return mb_strtoupper(mb_substr($name, 0, 2, 'UTF-8'), 'UTF-8');
    }
}
