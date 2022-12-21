<?php

require_once 'Femme.php';

$f = new Femme();

$f->setEstEnceinte();
$f->getEstEnceinte();

$f->accoucher();
$f->accoucher();

$f->getEstEnceinte();
$f->setEstEnceinte();
$f->getEstEnceinte();
