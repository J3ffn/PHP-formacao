<?php

use alura\Doctrine\Entity\Phone;
use alura\Doctrine\Entity\Student;
use alura\Doctrine\Helper\EntityManagerCreator;
use Doctrine\ORM\Exception\ORMException;

require_once __DIR__ . "/../vendor/autoload.php";

    $entityManager = EntityManagerCreator::createEntityManager();

    $student = new Student($argv[1]);
    for ($i = 2; $i < $argc; $i++) {
        $student->addPhone(new Phone($argv[$i]));
    }

    $student->addPhone(new Phone("(91) 1111-1111"));

    $entityManager->persist($student);
    $entityManager->flush();

