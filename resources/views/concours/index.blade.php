@extends('layouts.solic')
@section('content')
    <div class="main-content app-content">
        <div class="page-header main-container container-fluid px-5">
            <h4 class="page-title">Concours</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Activities</a></li>
                <li class="breadcrumb-item active" aria-current="page">Concours</li>
            </ol>
        </div>
        <!-- START MAIN-CONTAINER -->
        <div class="main-container container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="javascript:void(0);" class="btn btn-radius btn-secondary-light" data-bs-toggle="modal" data-bs-target="#ajoutModal"><i class="fe fe-plus me-2"></i>Ajouter un concours</a>
                            <a href="/concours/viewdeleted" class="btn btn-radius btn-warning-light"><i class="zmdi zmdi-collection-text"></i>
                                Concours archivés</a>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom table-striped" id="file-datatable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">ID</th>
                                            <th class="wd-15p border-bottom-0">Année académique</th>
                                            <th class="wd-20p border-bottom-0">Date début</th>
                                            <th class="wd-15p border-bottom-0">Date fin</th>
                                            <th class="wd-10p border-bottom-0">Description</th>
                                            <th class="wd-25p border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($concours as $conc) <!-- Use $conc here -->
                                            <tr id="ligne{{$conc->id}}">
                                                <td>{{$conc->id}}</td>
                                                <td>{{$conc->annee_acadimique}}</td>
                                                <td>{{$conc->date_debut}}</td>
                                                <td>{{$conc->date_fin}}</td>
                                                <td>{{$conc->description}}</td>
                                                <td id="action{{$conc->id}}"> 
                                                    <div class="table-action ">
                                                        @include('includes.concours_edit_delet',compact('conc'))
            
                                                    </div>
            
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
        <div class="modal fade" id="ajoutModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header pd-x-20">
                        <h3 class="modal-title" id="lineModalLabel">Ajouter un concours</h3>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
        
                    <div class="modal-body">
                        <form action="/concours/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                            @csrf
        
                            <div class="form-group col-md-6">
                                <label  for="annee">Année académique
                                <span class="text-red">*</span>
                                </label>
                                <input required type="text" value="{{ old('annee') }}" name="annee" placeholder="2024/2025" class="form-control" id="annee" pattern="\d{4}/\d{4}" title="Format attendu : 2024/2025">
                                <small class="form-text ">Veuillez entrer l'année académique au format "Année/Année" (ex : 2024/2025).</small>
                            </div>
                            
                            
        
                            <div class="form-group col-md-6">
                                <label  for="date_debut">Date début
                                    <span class="text-red">*</span>

                                </label>
                                <input required type="date" value="{{ old('date_debut') }}" name="date_debut" class="form-control" id="date_debut" placeholder="Date début du concours">
                            </div>
        
                            <div class="form-group col-md-6">
                                <label  for="date_fin">Date fin
                                    <span class="text-red">*</span>
                                </label>
                                <input required type="date" value="{{ old('date_fin') }}" name="date_fin" class="form-control" id="date_fin" placeholder="Date de fin du concours">
                            </div>
        
                            <div class="form-group col-md-6">
                                <label  for="description">Description</label>
                                <textarea  name="description" class="form-control" id="description" placeholder="Description du concours">{{ old('description') }}</textarea>
                            </div>
                            <div class="btn-group col-md-6" role="group">

                            <button type="submit" class="col-md-12 btn btn-success-light">Enregistrer</button>
                            </div>

                        <div class="btn-group col-md-6" role="group">
                            <button type="button" class="col-md-12 btn btn-danger-light" data-bs-dismiss="modal" aria-label="Close" role="button">Fermer</button>
                        </div>
                        
                            <!-- Ajoute d'autres champs si nécessaire -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        function setValidation(input, isValid) {
            let label = document.querySelector("label[for='" + input.id + "']");
            if (!isValid) {
                input.classList.add("is-invalid", "state-invalid");
                if (label) label.classList.add("is-invalid", "state-invalid");
            } else {
                input.classList.remove("is-invalid", "state-invalid");
                if (label) label.classList.remove("is-invalid", "state-invalid");
            }
        }
    
        document.getElementById("annee").addEventListener("input", function() {
            let annee = this.value;
            let regex = /^\d{4}\/\d{4}$/;
            if (regex.test(annee)) {
                let parts = annee.split("/");
                if (parseInt(parts[1]) !== parseInt(parts[0]) + 1) {
                    this.setCustomValidity("L'année académique doit être consécutive (ex: 2023/2024).");
                    setValidation(this, false);
                } else {
                    this.setCustomValidity("");
                    setValidation(this, true);
                }
            } else {
                this.setCustomValidity("Format attendu : 2024/2025.");
                setValidation(this, false);
            }
        });
    
        document.getElementById("date_debut").addEventListener("change", function() {
            let debut = new Date(this.value);
            let fin = new Date(document.getElementById("date_fin").value);
            if (document.getElementById("date_fin").value && debut >= fin) {
                this.setCustomValidity("La date de début doit être avant la date de fin.");
                setValidation(this, false);
            } else {
                this.setCustomValidity("");
                setValidation(this, true);
            }
        });
    
        document.getElementById("date_fin").addEventListener("change", function() {
            let debut = new Date(document.getElementById("date_debut").value);
            let fin = new Date(this.value);
            if (document.getElementById("date_debut").value && debut >= fin) {
                this.setCustomValidity("La date de fin doit être après la date de début.");
                setValidation(this, false);
            } else {
                this.setCustomValidity("");
                setValidation(this, true);
            }
        });
    });
</script>
   