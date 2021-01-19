@extends('layouts.etudiants')
@section('content')
    




<section class="features text-center">
    <div class="container">
      <br><br>
  <h1>Liste des absences</h1>
 
      <div class="row">
        <div class="col-md-6">
            <select class="form-control" id="matiereDropdown">
                <option value="All">Tout les matière</option>
                @foreach($matieres as $mat)
                <option value="{{ $mat-> nom_mat }}">{{ $mat -> nom_mat }}</option>
                @endforeach

            </select>
        </div>
    
        
        <div class="col-md-6">
            <input type="date" class="form-control" id="dateDropdown">
        </div>
        
    </div>
    <br>

      <table class="table table-hover table-striped">
  
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nom </th>
            <th scope="col">Etat</th>
            <th scope="col">Date</th>
            <th scope="col">Heure Debut</th>
            <th scope="col">Heure Fin</th>
            <th scope="col">Type</th>
            <th scope="col">Matière</th>
            <th scope="col">Filière</th>
            <th scope="col">Semestre</th>
                              
          </tr>
             
        </thead>
     
  
        <tbody id="download-forms-table-tbody">
          @isset($absences) 
          <tr>
          @foreach($absences as $abs)

        <td>{{ $abs->etudiantabs['nom_etu']}}</td>
           @if($abs->etat == 1)
           <td>Absent(e)</td>
           @else
           <td>Present(e)</td>
@endif
        <td>{{ $abs->seanceabs['date'] }}</td>
        <td>{{ $abs->seanceabs['heure_debut'] }}</td>
        <td>{{ $abs->seanceabs['heure_fin'] }}</td>
        <td>{{ $abs->seanceabs['type'] }}</td>
        <td>{{ $abs->seanceabs->seancematiere['nom_mat'] }}</td>
        <td>{{ $abs->seanceabs->seancematiere->filieremat['nom_filiere'] }}</td>
        <td>{{ $abs->seanceabs->seancematiere->semestre['nom_sem'] }}</td>
        </tr>

          @endforeach
          @endisset
        </tbody>
      </table>

      
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
       //Filtering region dropdown
       $('body').on("change", '#matiereDropdown', function() {
        var filter, table, tr, td, i;
        filter = $(this).val();
        table = document.getElementById("download-forms-table-tbody");
        tr = table.getElementsByTagName("tr");
      
        if (filter == "All") {
            // Loop through all table rows, and show anyrows that is hidden
            for (i = 0; i < tr.length; i++) {
                tr[i].style.display = "";
           
            }
        } else {
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[6];
                if (td) {
                    if (td.innerHTML.indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                } else {
                    var a = "No Records Found!!!";
                }
            }
        }
    });

    //Filtering filiere dropdown
    $('body').on("change", '#filiereDropdown', function() {
        var filter, table, tr, td, i;
        var matiereval = $('#matiereDropdown :selected').val();
        filter = $(this).val();
        table = document.getElementById("download-forms-table-tbody");
        tr = table.getElementsByTagName("tr");
        if (filter == "All") {
            // Loop through all table rows, and show anyrows that is hidden
            for (i = 0; i < tr.length; i++) {
                tr[i].style.display = "";
            }
        } else {
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                var td1 = '';
                if (matiereval != 'All') {
                    td1 = tr[i].getElementsByTagName("td")[6];
                    console.log(td1)
                }
                td = tr[i].getElementsByTagName("td")[7];
                console.log('td1' + td1)
                if (td) {
                    if (td.innerHTML.indexOf(filter) > -1) {
                        if (td1 != '') {
                            if (td1.innerHTML.indexOf(matiereval) > -1) {
                                tr[i].style.display = "";
                            } else {

                                tr[i].style.display = "none";
                            }
                        }
                        if (td1 == '') {
                            tr[i].style.display = "";
                        }
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    });

    //Show active inactive users
    
    $('body').on("change", '#dateDropdown', function() {
                var filter, table, tr, td, i;
                filter = $(this).val();
                table = document.getElementById("download-forms-table-tbody");
                tr = table.getElementsByTagName("tr");
                var matiereval = $('#matiereDropdown :selected').val();
                var filiereval = $('#filiereDropdown :selected').val();
                if (filter == "All") {
                    // Loop through all table rows, and show anyrows that is hidden
                    for (i = 0; i < tr.length; i++) {
                        tr[i].style.display = "";
                    }
                } else {
                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[2];
                      
                    var td1 = '';
                    if (matiereval != 'All') {
                        td1 = tr[i].getElementsByTagName("td")[6];
                    }

                    var td2 = '';
                    if (filiereval != 'All') {
                        td2 = tr[i].getElementsByTagName("td")[7];
                    }
                        if (td) {
                            if (td.innerHTML.indexOf(filter) > -1) {
                                if (td1 != '') {
                                    if (td1.innerHTML.indexOf(matiereval) > -1) {
                                        tr[i].style.display = "";
                                    } else {

                                        tr[i].style.display = "none";
                                    }
                                }
                                    if (td2 != '') {
                                        if (td2.innerHTML.indexOf(filiereval) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                    if (td1 == '' || td2 == '') {
                                        tr[i].style.display = "";
                                    }
                                } else {
                                    tr[i].style.display = "none";
                                }
                            } else {
                                var a = "No Records Found!!!";
                            }
                        }
                    }
                });
</script>



@stop