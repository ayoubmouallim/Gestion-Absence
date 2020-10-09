<?php

use Illuminate\Support\Facades\Route;


/*      Admin     */

Route::group(['namespace' => 'Admin'], function () {
     
    Route::get('/','adminController@index');

    Route::group(['prefix' => 'teacher'], function () {
        
        Route::get('/addTeacher','profController@addProf')->name("add.prof");
        Route::get('/showAll','profController@showAllProf')->name("show.all.prof");
        Route::post('/saveProf','profController@save')->name('save');
        Route::get('/edit/{id}','profController@editprof')->name('editprof');
        Route::put('/update/{id}','profController@updateprof')->name('updateprof');
        Route::get('/delete/{id}','profController@deleteprof')->name('deleteprof');


    });

    Route::group(['prefix' => 'student'], function () {
        
        Route::get('/addStudent','etudiantController@addStudent')->name("add.student");
        Route::get('/showAll','etudiantController@showAllStudent')->name("show.all.student");

        Route::post('/saveStudent','etudiantController@saveStudent')->name("save.student");
        Route::get('edit/{id}','etudiantController@editStudent')->name("edit.student");
        Route::get('delete/{id}','etudiantController@deleteStudent')->name("delete.student");
        Route::post('update','etudiantController@updateStudent')->name("update.student"); 
    });

    Route::group(['prefix' => 'matiere'], function () {
        
        Route::get('/addMatiere','matiereController@addMatiere')->name("add.matiere");
        Route::get('/showAll','matiereController@showAllMatiere')->name("show.all.matiere");

        Route::post('/saveMatiere','matiereController@saveMatiere')->name("save.matiere");
        Route::get('edit/{id}','matiereController@editMatiere')->name("edit.matiere");
        Route::get('delete/{id}','matiereController@deleteMatiere')->name("delete.matiere");
        Route::post('update','matiereController@updateMatiere')->name("update.matiere");
    });


});