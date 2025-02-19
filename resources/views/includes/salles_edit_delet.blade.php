<button type="button" class="btn-sm btn btn-danger" data-toggle="modal" data-bs-target="#suppressionModal{{ $salle->id }}" data-bs-toggle="modal">

    <i class=" fa fa-trash-o"></i> Supprimer
</button> 
<div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id="suppressionModal{{ $salle->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Souhaitez-vous supprimer le salle   "{{ $salle->nom }}"</h6>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Conteneur Flexbox avec un espace entre les boutons -->
                <div class="d-flex justify-content-between w-100">
                    <!-- Bouton Supprimer avec espace à droite -->
                    <div class="btn-group w-50" role="group">
                        <button type="submit" class="btn btn-danger w-100" onclick="supprimer_salle(this);" data-dismiss="modal" identifiant="{{ $salle->id }}"> Supprimer </button>
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
<!-- 
<button type="button" class="btn-sm btn btn-primary" data-toggle="modal"
    data-target="#exampleModal{{ $salle->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="updateModal{{ $salle->id }}" tabindex="-1"
    role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Modifier la salle:</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/salles/update" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group ">

                            <input type="hidden" name="id" value="{{ $salle->id }}" class="form-control" name="id">

                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="nom">Nom </label>
                            <input required type="text" value="{{ $salle->nom ?? '' }}" name="nom"class="form-control" id="nom">
                        </div>


                        <div class="form-group col-md-6 ">
                            <label class="label label-default" for="capacite">Capacité </label>
                            <input required type="number" value="{{ $salle->capacite ?? '' }}" name="capacite"  class="form-control" id="capacite">
                            <p class="invalid-feedback"></p>
                        </div>

                        <div class="form-group col-md-12 ">
                            <label class="label label-default" for="description">Description </label>
                            <input  type="text" value="{{  $salle->description ?? ''  }}" name="description" class="form-control" id="description">

                        </div>




                        <div class="btn-group col-md-6" role="group">
                            <button id="modif_enregistrer" type="submit" class="btn btn-primary col-md-12">
                                Enregistrer </button>
                        </div>


                        <div class="btn-group col-md-6" role="group">

                            <button type="button" class=" col-md-12 btn btn-danger"
                                data-dismiss="modal" role="button">Fermer</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
