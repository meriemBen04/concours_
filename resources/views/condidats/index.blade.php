@extends('layouts.solic')
@section('content')
    <div class="main-content app-content">
        <div class="page-header main-container container-fluid px-5">
            <h4 class="page-title">Concours</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Activities</a></li>
                <li class="breadcrumb-item active" aria-current="page">Condidats</li>
            </ol>
        </div>
        <!-- START MAIN-CONTAINER -->
        <div class="main-container container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="javascript:void(0);" class="btn btn-radius btn-secondary-light" data-bs-toggle="modal" data-bs-target="#ajoutCandidatModal"><i class="fe fe-plus me-2"></i>Ajouter un Condidat</a>
                            
                            <a href="#" class="btn btn-radius btn-info-light"  data-bs-toggle="modal" data-bs-target="#uploadCandidatModal">
                                <i class="fe fe-upload me-2"></i> Upload
                            </a>
                
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom table-striped" id="file-datatable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">ID</th>
                                            <th class="wd-15p border-bottom-0">Matricule</th>
                                            <th class="wd-20p border-bottom-0">Nom</th>
                                            <th class="wd-15p border-bottom-0">Prénom</th>
                                            <th class="wd-10p border-bottom-0">Date de naissance</th>
                                            <th class="wd-10p border-bottom-0">Email</th>
                                            <th class="wd-10p border-bottom-0">Telephone</th>
                                            {{-- <th class="wd-10p border-bottom-0">Genre</th> --}}
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
                                                <td>{{ date_format(date_create($conc->date_naissance),"d/m/Y") ?? '' }}</td>
                                                <td>{{$conc->email ?? ""}}</td>
                                                <td>{{$conc->telephone ?? ""}}</td>
                                                {{-- <td>{{$conc->genre ?? ""}}</td> --}}


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
                                </table>
      

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ajoutCandidatModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header pd-x-20">
                        <h3 class="modal-title">Ajouter un candidat</h3>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
        
                    <div class="modal-body">
                        <form action="/candidats/create" method="post" enctype="multipart/form-data" class="row">
                            @csrf
                           
                            <div class="form-group col-md-6">
                                <label for="matricule">Matricule <span class="text-red">*</span></label>
                                <input required type="text" name="matricule" class="form-control" id="matricule" placeholder="Ex: 20241234" value="{{ old('matricule') }}">
                            </div>
        
                            <div class="form-group col-md-6">
                                <label for="nom">Nom <span class="text-red">*</span></label>
                                <input required type="text" name="nom" class="form-control" id="nom" placeholder="Nom du candidat" value="{{ old('nom') }}">
                            </div>
        
                            <div class="form-group col-md-6">
                                <label for="prenom">Prénom <span class="text-red">*</span></label>
                                <input required type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom du candidat" value="{{ old('prenom') }}">
                            </div>
        
                            <div class="form-group col-md-6">
                                <label for="date_naissance">Date de naissance <span class="text-red">*</span></label>
                                <input required type="date" name="date_naissance" class="form-control" id="date_naissance" value="{{ old('date_naissance') }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="genre" >Genre</label>
                                <select name="genre" class="form-control" id="genre">
                                    <option value="M">Masculin</option>
                                    <option value="F">Féminin</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input  type="email" name="email" class="form-control" id="email" placeholder="email" value="{{ old('email') }}">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="telephone">Telephone</label>
                                <input  type="phone" name="telephone" class="form-control" id="telephone" placeholder="telephone" value="{{ old('telephone') }}">
                            </div>



                            <div class="form-group col-md-6">
                                <label class="form-label" for="specialite_id">Spécialité </label>
                                <select name="specialite_id" class="form-control select2-lg" data-bs-placeholder="Sélectionner une spécialité" id="specialite_id">
                                    <option value="" disabled selected>Sélectionnez une spécialité</option>
                                    @foreach($specialite as $specialit)
                                        <option value="{{ $specialit->id }}">{{ $specialit->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            
                            <div class="form-group col-md-6">
                                <label for="concour_id">Concours <span class="text-red">*</span></label>
                                <select name="concours_id" class="form-control" id="concour_id">
                                    <option value="" disabled selected>Sélectionnez un concours</option>
                                    @foreach($concours as $con)
                                        <option value="{{ $con->id }}">{{ $con->annee_acadimique }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="salle_id">salle <span class="text-red">*</span></label>
                                <select name="salle_id" class="form-control" id="salle_id">
                                    <option value="" disabled selected>Sélectionnez une salle</option>
                                    @foreach($salles as $con)
                                        <option value="{{ $con->id }}">{{ $con->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                           

                            <div class="btn-group col-md-6 mt-3">
                                <button type="submit" class="col-md-12 btn btn-success-light">Enregistrer</button>
                            </div>
        
                            <div class="btn-group col-md-6 mt-3">
                                <button type="button" class="col-md-12 btn btn-danger-light" data-bs-dismiss="modal">Fermer</button>
                            </div>
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="uploadCandidatModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header pd-x-20">
                        <h3 class="modal-title">Importer vos données</h3>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/candidats/upload" method="post" enctype="multipart/form-data" class="row">
                            @csrf
                            <label class="form-label" for="ajout_file">Fichier Excel</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="ajout_file" 
                                        accept=".xls,.xlsx,.csv" onchange="update_file(this)">
                                    <label class="custom-file-label" id="fileLabel" for="ajout_file">Importez le fichier Excel</label>
                                </div>
                            </div>
        
                            <!-- Bouton de soumission -->
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success" id="submitBtn" style="display: none;">
                                    Envoyer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
        
        <script>
            function update_file(input) {
                let file = input.files[0];
        
                if (file) {
                    let fileName = file.name;
                    let allowedExtensions = /(\.xls|\.xlsx|\.csv)$/i; // Extensions autorisées
        
                    if (!allowedExtensions.exec(fileName)) {
                        alert("Seuls les fichiers Excel (.xls, .xlsx, .csv) sont autorisés !");
                        input.value = ""; // Réinitialiser le champ si fichier invalide
                        document.getElementById('fileLabel').textContent = "Importez le fichier Excel";
                        document.getElementById('submitBtn').style.display = "none";
                        return;
                    }
        
                    // Met à jour le texte du label avec le nom du fichier sélectionné
                    document.getElementById('fileLabel').textContent = fileName;
                    document.getElementById('submitBtn').style.display = "inline-block"; // Afficher le bouton d'envoi
                } else {
                    document.getElementById('fileLabel').textContent = "Importez le fichier Excel";
                    document.getElementById('submitBtn').style.display = "none"; // Cacher le bouton si aucun fichier n'est sélectionné
                }
            }
        </script>
        