
 @extends('layouts.enseignant')

@section('content')

<section class="features text-center">
    <div class="container">
      <br><br>
      <h1>Liste des Seances</h1>
 
      <div class="row">
        <div class="col-md-4">
            <select class="form-control" id="matiereDropdown">
                <option value="All">All Matiere</option>
                @foreach ($matieres as $matiere)
                    <option value="{{ $matiere -> nom_mat }}">{{ $matiere -> nom_mat }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-control" id="filiereDropdown">
                <option value="All">All</option>
                <option value="GLSID2">GLSID2</option>
                <option value="BDCC2">BDCC2</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="date" class="form-control" id="dateDropdown">
        </div>
        
    </div>
    <br>

      <table class="table table-hover table-striped">
  
        <thead class="thead-dark">
          <tr>
            <th scope="col">etat</th>
            <th scope="col">Nom Etudiant(e)</th>
            <th scope="col">Date</th>
            <th scope="col">Heure Debut</th>
            <th scope="col">Heure Fin</th>
            <th scope="col">Type</th>
            <th scope="col">Matiere</th>
            <th scope="col">Filiere</th>
            <th scope="col">Semestre</th>

          </tr>

        </thead>
     
  
        <tbody id="download-forms-table-tbody">
          @isset($absence) 
          <tr>
          @foreach($absence as $key=>$abs)

          @foreach($abs as $a)
           @if($a->etat == 1)
           <td>Absent(e)</td>
           @else
           <td>Present(e)</td>
@endif
        <td>{{ $a->etudiantabs['nom_etu']}}</td>
        <td>{{ $a->seanceabs['date'] }}</td>
        <td>{{ $a->seanceabs['heure_debut'] }}</td>
        <td>{{ $a->seanceabs['heure_fin'] }}</td>
        <td>{{ $a->seanceabs['type'] }}</td>
        <td>{{ $a->seanceabs->seancematiere['nom_mat'] }}</td>
        <td>{{ $a->seanceabs->seancematiere->filieremat['nom_filiere'] }}</td>
        <td>{{ $a->seanceabs->seancematiere->semestre['nom_sem'] }}</td>
        </tr>

          @endforeach
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



@endsection