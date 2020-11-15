<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');



//--------------  Espace Prof--------------------// 
Route::group(['prefix' => 'Prof' , 'namespace' => 'Prof'], function () {
    
    Route::get('/','ProfController@index')->name('home.prof');
    Route::get('/create-seance','ProfController@createSeance')->name('create.seance');
    Route::post('/save-seance','ProfController@saveSeance')->name('save.seance');
    Route::get('/list-seance','ProfController@listSeance')->name('list.seance');
    // Routes : Noter Absence
    Route::get('/noterabsence/{id}','ProfController@PageNoteAbsence')->name('pageAbsence');
    Route::post('/save-absence','ProfController@saveAbsence')->name('save.absence');
    
    // historique d'absence
    Route::get('/historique-absence','ProfController@historiqueAbsence')->name('historique.absence');
    Route::get("/edit/{id}",'ProfController@editSeance')->name('edit.seance');
    Route::put("/update/{id}",'ProfController@updateSeance')->name('update.seance');
    
});
//--------------  Espace Prof--------------------// 


//--------------  register Etudiant--------------------// 
Auth::routes();
Route::get('CNE-Page','Auth\RegisterController@cnePage')->name('cne.page');
route::post('register-etudiant', 'Auth\RegisterController@showRegistrationForm')->name('register');
route::post('save-user', 'Auth\RegisterController@register2')->name('save.user');
//--------------  fin register Etudiant--------------------// 

//--------------  Route Etudiant--------------------// 
 
Route::group(['prefix' => 'Etudiant','namespace' => 'Etudiant'], function () {
    
    Route::get('/','etudiantController@index')->name('espaceEtudiant');
        //absence
    route::get('listeAbsenceEtu','etudiantController@listeAbsenceEtudiant')->name('listeAbsenceEtu');
        //profil
    route::get('profil', 'etudiantController@GetDataProfil')->name('profil');
    Route::put('update','etudiantController@update')->name('updatePhoto');// modifier un cv
});

//-----------------*********------------------------//


//--------------  Route Administration--------------------// 

Route::view('/Administration','administration.administration');

Route::group(['prefix' => 'Administration','namespace' => 'Administration'], function () {

route::get('listeEtudiantAbs', 'administrationController@ListeEtudiantsAbs')->name('adminiabs');
});
