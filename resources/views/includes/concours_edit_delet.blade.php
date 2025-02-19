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
                        <button type="button" class="btn btn-success w-100 ms-2" data-bs-dismiss="modal" aria-label="Close" role="button">Fermer</button>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<button type="button" class="btn-sm btn btn-cyan" data-bs-toggle="modal" data-bs-target="#exampleModal{{$conc->id}}">
    <i class="fa fa-pencil"></i> Modifier
</button>
<div>
    
</div>
<div class="modal fade" id="exampleModal{{ $conc->id }}" tabindex="-1"
    role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Concours</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/concours/update/{{$conc->id}}" method="post" enctype="multipart/form-data" class="form-row ">
                    @csrf
                    <input type="hidden" value="{{ $conc->id }}" class="form-control" name="id">  

                    <div class="col-xl-6 mb-3">
                        <label for="annee{{ $conc->id }}">Année académique <span class="text-red">*</span></label>
                        <input required type="text" value="{{ $conc->annee_acadimique ?? ''}}" 
                               name="annee" class="form-control" id="annee{{ $conc->id }}" 
                               placeholder="2024/2025" pattern="\d{4}/\d{4}" 
                               title="Format attendu : 2024/2025">
                    </div>

                    <div class="col-xl-6 mb-3">
                        <label for="date_debut{{ $conc->id }}">Date début <span class="text-red">*</span></label>
                        <input required type="date" value="{{ $conc->date_debut ?? '' }}" 
                               name="date_debut" class="form-control" id="date_debut{{ $conc->id }}">
                    </div>

                    <div class="col-xl-6 mb-3">
                        <label for="date_fin{{ $conc->id }}">Date fin <span class="text-red">*</span></label>
                        <input required type="date" value="{{ $conc->date_fin ?? '' }}" 
                               name="date_fin" class="form-control" id="date_fin{{ $conc->id }}">
                    </div>

                    <div class="col-xl-6 mb-3">
                        <label for="description{{ $conc->id }}">Description</label>
                        <textarea name="description" class="form-control" 
                                  id="description{{ $conc->id }}">{{ $conc->description ?? '' }}</textarea>
                    </div>

                    <div class="btn-group col-md-6" role="group">
                        <button type="submit" class="col-md-12 btn btn-success-light">Enregistrer</button>
                    </div>

                    <div class="btn-group col-md-6" role="group">
                        <button type="button" class="col-md-12 btn btn-danger-light" 
                                data-bs-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
    
        document.querySelectorAll("[id^='annee']").forEach(function(input) {
            input.addEventListener("input", function() {
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
        });
    
        document.querySelectorAll("[id^='date_debut']").forEach(function(input) {
            input.addEventListener("change", function() {
                let fin = document.getElementById("date_fin" + this.id.replace("date_debut", "")).value;
                let debut = new Date(this.value);
                let finDate = new Date(fin);
                if (fin && debut >= finDate) {
                    this.setCustomValidity("La date de début doit être avant la date de fin.");
                    setValidation(this, false);
                } else {
                    this.setCustomValidity("");
                    setValidation(this, true);
                }
            });
        });
    
        document.querySelectorAll("[id^='date_fin']").forEach(function(input) {
            input.addEventListener("change", function() {
                let debut = document.getElementById("date_debut" + this.id.replace("date_fin", "")).value;
                let debutDate = new Date(debut);
                let fin = new Date(this.value);
                if (debut && debutDate >= fin) {
                    this.setCustomValidity("La date de fin doit être après la date de début.");
                    setValidation(this, false);
                } else {
                    this.setCustomValidity("");
                    setValidation(this, true);
                }
            });
        });
    
        document.querySelectorAll("form").forEach(function(form) {
            form.addEventListener("submit", function(event) {
                let invalidFields = this.querySelectorAll(".is-invalid");
                if (invalidFields.length > 0) {
                    event.preventDefault();
                    alert("Veuillez corriger les erreurs avant d'enregistrer.");
                }
            });
        });
    });
    </script>
     <script>
       
    function supprimer_conc(objet) {
        var id = $(objet).attr('identifiant');
    
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Assure-toi que le token CSRF est bien présent
            },
            type: "POST",
            url: "/concours/delete/ajax",
            data: { id_concours: id },
    
            success: function(data) {
                $("#suppressionModal" + id).modal('hide');

    
                var id_ligne = "#ligne" + data.id;
                $(id_ligne).css({ 'color': 'red' });
    
                setTimeout(function() {
                    $(id_ligne).hide(1000);
                }, 1000);
    
            },
        });
    }
    </script>
        
    