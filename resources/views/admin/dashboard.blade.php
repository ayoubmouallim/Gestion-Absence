@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

<br>

<br><br>
<div class="row">
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Utilisateurs</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users }}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-user"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Etudiants</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $etudiants }}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-address-card"></i>                  
                      </div>
                  </div>
                </div>
              </div>
            </div>
            
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Matieres</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $matieres }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Filieres</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $filieres }}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

   <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Enseignants</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $enseignants}}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary  text-uppercase mb-1">Semestres</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $semestres}}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-list"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Departements</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $departements }}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-list-alt"></i>
                         </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
           
                  </div>
                </div>
              </div>
            </div>

              </div>
              </div>
            </div>
@endsection