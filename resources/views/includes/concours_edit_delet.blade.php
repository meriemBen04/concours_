<button type="button" class="btn-sm btn btn-danger" data-toggle="modal" data-bs-target="#suppressionModal{{ $conc->id }}" data-bs-toggle="modal">

    <i class=" fa fa-trash-o"></i> Supprimer
</button> 
<div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id="suppressionModal{{ $conc->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Souhaitez-vous supprimer le concours de  "{{ $conc->annee_acadimique }}"</h6>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Conteneur Flexbox avec un espace entre les boutons -->
                <div class="d-flex justify-content-between w-100">
                    <!-- Bouton Supprimer avec espace à droite -->
                    <div class="btn-group w-50" role="group">
                        <button type="submit" class="btn btn-danger w-100" onclick="supprimer_conc(this);" data-dismiss="modal" identifiant="{{ $conc->id }}"> Supprimer </button>
                    </div>
            
                    <!-- Bouton Fermer avec espace à gauche -->
                    <div class="btn-group w-50" role="group">
                        <button type="button" class="btn btn-primary w-100 ms-2" data-bs-dismiss="modal" aria-label="Close" role="button">Fermer</button>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<button type="button" class="btn-sm btn btn-cyan" data-bs-toggle="modal" data-bs-target="#exampleModal{{$conc->id}}">
    <i class="fa fa-pencil"></i> Modifier
</button>
<div class="modal fade" id="exampleModal{{ $conc->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier
                    Concours</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/concours/update/{{$conc->id}}" method="post" enctype="multipart/form-data" class=" row col-md-12">
                    @csrf
                    <div class="form-group">
                            
                        <input type="hidden" value="{{ $conc->id }}" class="form-control" name="id">  

                    </div>
                    
                    <div class="form-group col-md-6">
                        <label class="label label-default" for="annee">Année académique
                        <span class="text-red">*</span>
                        </label>
                        <input required type="text" value="{{ $conc->annee_acadimique ?? ''}}" name="annee" placeholder="2024/2025" class="form-control" id="annee" pattern="\d{4}/\d{4}" title="Format attendu : 2024/2025">
                        <small class="form-text ">Veuillez entrer l'année académique au format "Année/Année" (ex : 2024/2025).</small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label class="label label-default" for="date_debut">Date début
                            <span class="text-red">*</span>

                        </label>
                        <input required type="date" value="{{ $conc->date_debut ??'' }}" name="date_debut" class="form-control" id="date_debut" placeholder="Date début du concours">
                    </div>

                    <div class="form-group col-md-6">
                        <label class="label label-default" for="date_fin">Date fin
                            <span class="text-red">*</span>
                        </label>
                        <input required type="date" value="{{ $conc->date_fin ?? '' }}" name="date_fin" class="form-control" id="date_fin" placeholder="Date de fin du concours">
                    </div>

                    <div class="form-group col-md-6">
                        <label class="label label-default" for="description">Description</label>
                        <textarea  name="description" class="form-control" id="description" placeholder="Description du concours">{{ $conc->description ?? '' }}</textarea>
                    </div>

                    <div class="btn-group col-md-6" role="group">
                       
                         <button type="submit" class="col-md-12 btn btn-success-light" >Enregistrer</button>
                    </div>

                    <div class="btn-group col-md-6" role="group">
                        <button type="button" class="col-md-12 btn btn-danger-light" data-bs-dismiss="modal" aria-label="Close" role="button">Fermer</button>
                    </div>
                
                </form>
            </div>
        </div>
    </div>
</div>


