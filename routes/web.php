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


Route::view('/Administration','administration.administration');

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
    
});
//--------------  Espace Prof--------------------// 


//--------------  register Etudiant--------------------// 
Auth::routes();

Route::get('CNE-Page','Auth\RegisterController@cnePage')->name('cne.page');
//--------------  fin register Etudiant--------------------// 

//--------------  Route Etudiant--------------------// 
Route::get('/Etudiant','Etudiant\etudiantController@index')->name('espaceEtudiant');


//--------------  Route Etudiant--------------------// 

route::post('register-etudiant', 'Auth\RegisterController@showRegistrationForm')->name('register');
route::post('save-user', 'Auth\RegisterController@register2')->name('save.user');
//--------------  Espace Prof--------------------// 
route::get('listeAbsenceEtu', 'Etudiant\etudiantController@listeAbsenceEtudiant')->name('listeAbsenceEtu');
route::get('profil', 'Etudiant\etudiantController@GetDataProfil')->name('profil');
Route::get('Etudiant/edit','Etudiant\etudiantController@edit');// pour remplir le formumaire de cv a modifier 
Route::put('Etudiant/update','Etudiant\etudiantController@update')->name('updatePhoto');// modifier un cv

//------------------------------------------------->