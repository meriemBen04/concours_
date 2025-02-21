@extends('layouts.solic')
@section('content')
    <div class="main-content app-content">
        <div class="page-header main-container container-fluid px-5">
            <h4 class="page-title">Salles</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Activities</a></li>
                <li class="breadcrumb-item active" aria-current="page">Salles</li>
            </ol>
        </div>
        <!-- START MAIN-CONTAINER -->
        <div class="main-container container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="javascript:void(0);" class="btn btn-radius btn-secondary-light" data-bs-toggle="modal" data-bs-target="#ajoutModal"><i class="fe fe-plus me-2"></i>Ajouter une Salle </a>
                            <a href="/admin/groupes/viewdeleted" class="btn btn-radius btn-warning-light"><i class="zmdi zmdi-collection-text"></i>
                                Salles archivés</a>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom table-striped" id="file-datatable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">ID</th>
                                            <th class="wd-15p border-bottom-0">Nom</th>
                                            <th class="wd-10p border-bottom-0">Capacité</th>
                                            {{-- <th class="wd-25p border-bottom-0">Actions</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($salles as $salle) <!-- Use $conc here -->
                                            <tr id="ligne{{$salle->id}}">
                                                <td>{{$salle->id}}</td>
                                                <td>{{$salle->nom}}</td>
                                                <td>{{$salle->capacite}}</td>
                                                {{-- <td id="action{{$salle->id}}">  --}}
                                                    {{-- <div class="table-action ">
                                                        @include('includes.salles_edit_delet',compact('salle'))
            
                                                    </div> --}}
            
                                                {{-- </td> --}}
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
                        <h3 class="modal-title" id="lineModalLabel">Ajouter une Salle</h3>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
        
                    <div class="modal-body">
                        <form action="/salles/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                            @csrf
        
                            <div class="form-group col-md-6">
                                <label  for="nom">Nom
                                <span class="text-red">*</span>
                                </label>
                                <input required type="text" value="{{ old('nom') }}" name="nom" placeholder="Salle A" class="form-control" id="nom" >
                            </div>
                            <div class="form-group col-md-6">
                                <label  for="capacite">Capacité
                                
                                </label>
                                     <input  type="number" step="1" min="1" max="500" value="{{ old('capacite', $salle->capacite ?? '') }}" name="capacite" placeholder="Capacité de la salle" class="form-control" id="capacite">
                                </div>
                            
                            
        
                           
                            <div class="form-group col-md-12">
                                <label  for="description">Description</label>
                                <textarea  name="description" class="form-control" id="description" placeholder="Description du Salle">{{ old('description') }}</textarea>
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
    <script src="{{ asset('My_js/salles.js') }}"></script>

@endsection
<script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     function setValidation(input, isValid) {
    //         let label = document.querySelector("label[for='" + input.id + "']");
    //         if (!isValid) {
    //             input.classList.add("is-invalid", "state-invalid");
    //             if (label) label.classList.add("is-invalid", "state-invalid");
    //         } else {
    //             input.classList.remove("is-invalid", "state-invalid");
    //             if (label) label.classList.remove("is-invalid", "state-invalid");
    //         }
    //     }
    
      
    // });
</script>
   