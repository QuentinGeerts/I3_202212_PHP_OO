<?php

class Calculatrice
{
    // Propriétés
    public static float $PI = 3.141592;

    // Méthodes
    public static function multiplication(float $n1, float $n2)
    {
        return $n1 * $n2;
    }

    public static function displayPI()
    {
        echo "<p>" . self::$PI . "</p>";
    }
}

// Attributs
echo "<p>" . Calculatrice::$PI . "</p>";
$calc = new Calculatrice();
echo "<p>" . $calc::$PI . "</p>";

// Méthodes
echo "<p>" . Calculatrice::multiplication(12.2, Calculatrice::$PI) . "</p>";
echo "<p>" . $calc::multiplication(12.2, Calculatrice::$PI) . "</p>";
