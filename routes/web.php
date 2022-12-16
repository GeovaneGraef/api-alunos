<?php

/**
 * 
 * Aqui tu pode criar grupos de rotas para a aplicação, adicionar middlewares de auth 
 * para validar se o usuário está ou não autenticado
 * 
 */

// Aluno
$router->post('/create', 'AlunoController@createStudent');
$router->post('/show', 'AlunoController@showStudent');
$router->put('/update/{id_aluno}', 'AlunoController@updateStudent');
$router->delete('/delete/{id_aluno}', 'AlunoController@deleteStudent');

//Notas
$router->post('/create-grades', 'NotaController@createGrades');