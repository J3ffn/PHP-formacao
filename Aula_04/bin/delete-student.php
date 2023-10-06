<?php

use alura\Doctrine\Entity\Student;
use alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . "/../vendor/autoload.php";

$entityManager = EntityManagerCreator::createEntityManager();

// cria uma entidade que é observada pelo doctrine, porém, vem apenas o id buscado(pode ser qualquer parâmetro)
$student = $entityManager->getPartialReference(Student::class, $argv[1]);

$entityManager->remove($student);
$entityManager->flush();
