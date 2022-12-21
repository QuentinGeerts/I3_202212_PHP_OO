<?php

interface ISens
{
    // Méthode PUBLIC et ABSTRAITE
    // Les mots clefs ne sont pas nécessaire
    // Signature : function nom (parms);
    function entendre () : void;
    function voir () : void;
    function gouter () : void;
}
