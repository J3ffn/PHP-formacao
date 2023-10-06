<?php

use alura\Doctrine\Entity\Course;
use alura\Doctrine\Entity\Phone;
use alura\Doctrine\Entity\Student;
use alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

$studentList = $studentRepository->studentsAndCourses();


foreach ($studentList as $student) {
    echo "ID: $student->id" . PHP_EOL . "Nome: $student->nome" . PHP_EOL;
    echo "Telefones:" . PHP_EOL;

    if ($student->phones()->count() > 0) {
        // Junta os Arrays em uma String separando cada um por vírgula.
        echo implode(", ", $student->phones()
            ->map(fn (Phone $phone) => $phone->number)
        ->toArray());
    }

    echo PHP_EOL . "Cursos:" . PHP_EOL;

    if ($student->courses()->count() > 0) {
        echo implode(", ", $student->courses()
            ->map(fn (Course $course) => $course->nome)
            ->toArray());
    }

    echo PHP_EOL . PHP_EOL;
}

///** @var Student $student */
//$student = $studentRepository->findOneBy([
//    "nome" => "Aluno Teste"
//]);
//
//$student = $studentRepository->findBy([
//    "nome" => "Aluno Teste"
//]);

$dql = "select Count(student) as quantidade from alura\\Doctrine\\Entity\\Student student where student.phones IS EMPTY";
$singleScalarResult = $entityManager->createQuery($dql)->enableResultCache(86400);
var_dump($singleScalarResult); // Apenas o valor simples do PHP (String, int, etc.)"

