<?php

use Illuminate\Support\Facades\Route;


/*      Admin     */

Route::group(['namespace' => 'Admin'], function () {
     
    Route::get('/','adminController@index');

    Route::group(['prefix' => 'student'], function () {
        
        Route::get('/addStudent','etudiantController@addStudent')->name("add.student");
        Route::get('/showAll','etudiantController@showAllStudent')->name("show.all.student");
        
    });

    Route::group(['prefix' => 'teacher'], function () {
        
        Route::get('/addTeacher','profController@addProf')->name("add.prof");
        Route::get('/showAll','profController@showAllProf')->name("show.all.prof");

    });

    Route::group(['prefix' => 'matiere'], function () {
        
        Route::get('/addMatiere','matiereController@addProf')->name("add.matiere");
        Route::get('/showAll','matiereController@showAllProf')->name("show.all.matiere");
    });


});
