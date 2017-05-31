<?php

spl_autoload_register(function ($className) {
    include getClassPath($className) . '.php';
});

function getClassPath(string $className): string
{
    $registeredClasses = [
        'Controller' => 'Controller',
        'ModelAbstract' => 'model/ModelAbstract',
        'Student' => 'model/Student',
        'Family' => 'model/Family',
        'RepositoryAbstract' => 'repository/RepositoryAbstract',
        'StudentRepository' => 'repository/StudentRepository',
        'FamilyRepository' => 'repository/FamilyRepository'
    ];

    return $registeredClasses[$className];
}
