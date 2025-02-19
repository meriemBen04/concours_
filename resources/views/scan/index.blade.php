@extends('layouts.solic')
@section('content')
<div class="main-content app-content">
    <div class="page-header main-container container-fluid px-5">
        <h4 class="page-title">Verifier votre salle</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Activities</a></li>
            <li class="breadcrumb-item active" aria-current="page">Verify salle</li>
        </ol>
    </div>
        <div class="main-container container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- <div class="card-header d-flex justify-content-between">
                            <a href="javascript:void(0);" class="btn btn-radius btn-secondary-light" data-bs-toggle="modal" data-bs-target="#ajoutModal"><i class="fe fe-plus me-2"></i>Ajouter un concours</a>
                            <a href="/concours/viewdeleted" class="btn btn-radius btn-warning-light"><i class="zmdi zmdi-collection-text"></i>
                                Concours archivés</a>
                        </div> -->
                        <div class="card-body">
                        <input id="search" onchange="SearchFunction();" type="text" class="form-control col-md-12"
                           autofocus onblur="this.focus();" 
                        placeholder="Scanner le code QR pour verifier le condidat">
      
                                <br><br>

                                <table class="table table-bordered text-nowrap border-bottom" id="file-datatable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">ID</th>
                                            <th class="wd-15p border-bottom-0">Matricule</th>
                                            <th class="wd-20p border-bottom-0">Nom</th>
                                            <th class="wd-15p border-bottom-0">Prénom</th>
                                            <th class="wd-10p border-bottom-0">Date de naissance</th>
                                            <th class="wd-10p border-bottom-0">Email</th>
                                            <th class="wd-10p border-bottom-0">Telephone</th>
                                            <th class="wd-10p border-bottom-0">Genre</th>
                                            <th class="wd-10p border-bottom-0">Spécialité</th>
                                            <th class="wd-10p border-bottom-0">Concours</th>
                                            <th class="wd-10p border-bottom-0">Salle</th>
                                            <th class="wd-25p border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($condidats as $conc) <!-- Use $conc here -->
                                            <tr id="ligne{{$conc->id}}">
                                                <td>{{$conc->id}}</td>
                                                <td>{{$conc->matricule}}</td>
                                                <td>{{$conc->nom}}</td>
                                                <td>{{$conc->prenom}}</td>
                                                <td>{{$conc->date_naissance}}</td>
                                                <td>{{$conc->email ?? ""}}</td>
                                                <td>{{$conc->telephone ?? ""}}</td>
                                                <td>{{$conc->genre ?? ""}}</td>


                                                <td>{{$conc->specialite->nom ?? ""}}</td>
                                                <td>{{$conc->concours->annee_acadimique ?? ""}}</td>
                                                <td>{{$conc->salle->nom ?? ""}}</td>


                                                <td id="action{{$conc->id}}"> 
                                                    {{-- <div class="table-action ">
                                                        @include('includes.concdidats_edit_delet',compact('conc'))
            
                                                    </div> --}}
            
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                              </div>
                        </div>
                    </div>

                </div>
                        
                        
                
            </div>
        </div>

    
</div>
<script>



    function SearchFunction()
    {

        var input;

        var bodyDiv = document.body;


        input = document.getElementById("search");

        var filter = input.value.toLowerCase();
         console.log(filter);
       

       
        $.ajax({

            headers:
            {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Assure-toi que le token CSRF est bien présent
            },

            type:"POST",
            url :"/recherchercondidat", 
            data :{lien: filter},

            success:function(data)
            {

                if(data.sortie !== undefined)
                {
                   
                    if ('speechSynthesis' in window)
                    {

                        // Créez un objet SpeechSynthesisUtterance contenant la phrase à lire
                        var phrase = new SpeechSynthesisUtterance("Sortie effectuée");

                        // Utilisez l'API pour lire la phrase à voix haute
                        window.speechSynthesis.speak(phrase);
                    }


                    $('#ligne'+data.sortie).attr('class','text-success');
                }
                },
        });
    }
    </script>



@endsection

