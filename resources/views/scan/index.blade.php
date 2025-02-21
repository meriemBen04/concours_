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
                    <div class="card-header d-flex justify-content-between">
                        <h3>Trouver votre salle en scannon votre CODE QR</h3>
                    </div>
                    <div class="card-body">
                        <input id="search"  onchange="SearchFunction();" type="text" class="form-control col-md-12"
        autofocus onblur="this.focus();"placeholder="Scanner le code QR pour vérifier le candidat">

                            <br><br>

                            {{-- <div class="table-responsive">
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
                                            <th class="wd-10p border-bottom-0">Spécialité</th>
                                            <th class="wd-10p border-bottom-0">Concours</th>
                                            <th class="wd-10p border-bottom-0">Salle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="ligne"></d>
                                            <td></d>
                                            <td></d>
                                            <td></d>
                                            <td></d>
                                            <td></d>
                                            <td></d>
                                            <td></d>
                                            <td></d>
                                            <td></d>
                                            <td></d>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div> --}}
                    </div>
                    
                </div>
            </div>    
        </div>
    </div>
    <div class="main-container container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">INFORMATION DE CANDIDAT</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
            <div class="card-body">
                <!-- Zone d'affichage des infos -->
                <div id="candidate-info" style="display: none;"></div>

                <div class="dimmer active">
                    <div class="spinner1">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script type="text/javascript">


        // window.addEventListener("keydown", function(event)
    
        // {
    
        //     if(event.getModifierState("CapsLock")==true)
    
        //     {
        //         swal.close();
        //         //
        //     }
    
        //     else
    
        //     {
    
        //         $("#search").val("");
    
        //         swal("Attention", "Veuillez Allumer Ver Maj", "warning");
    
        //         //
    
        //     }
    
        //     //
    
        // });
    
    //
    </script>
<script>



    function SearchFunction()
    {

        

        var input,filter;

        var bodyDiv = document.body;

        input = document.getElementById("search");

        filter = input.value.toLowerCase();

        $('#search').val('');

        
         console.log(filter);
         $(".dimmer").show();

           
        $.ajax({

            headers:
            {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Assure-toi que le token CSRF est bien présent
            },

            type:"POST",
            url :"/searchcond/ajax", 
            data :{lien: filter},

            success:function(data)
            {
                console.log("Réponse du serveur :", data); // Afficher la réponse JSON
                
                $(".dimmer").hide();

            if (data.nom && data.prenom) {
                
                        $(".dimmer").hide();
                        $("#candidate-info").html(`
        <div class="table-responsive">                
        <table class="table border text-nowrap text-md-nowrap table-hover mb-0 table-striped">
            <tbody>
                <tr>
                    <th>Nom</th>
                    <td>${data.nom}</td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td>${data.prenom}</td>
                </tr>
                <tr>
                    <th>Spécialité</th>
                    <td>${data.specialite}</td>
                </tr>
                <tr  id="salle" class="salle-row" style="border-top: solid green 2px;border-bottom: solid green 2px; color : green;">
                    <th>Salle</th>
                    <td>${data.salle}</td>
                </tr>
                <tr>
                    <th>Concours</th>
                    <td>${data.concours}</td>
                </tr>
                <tr>
                    <th>Numéro Téléphone</th>
                    <td>${data.telephone}</td>
                </tr>
            </tbody>
        </table>
    </div>
    `).fadeIn();
    
                   

            // Changer la couleur de fond avec une animation
            bodyDiv.animate({'backgroundColor': '#43c49c'}, 2000);

            // Lecture vocale du message
                    if ('speechSynthesis' in window) {
            var phrase = new SpeechSynthesisUtterance(`مرحبًا، لقد تم تعيينك في ${data.salle}`);
            phrase.lang = "ar-SA"; // Langue arabe
            phrase.rate = 1.3; // Vitesse de la parole (0.1 à 10, 1 = normal)
            window.speechSynthesis.speak(phrase);
        }


            // Cacher les infos et réafficher le loader après 30 secondes
            setTimeout(function() {
                $("#candidate-info").fadeOut(function() {
                    $(".dimmer").fadeIn();
                });
            }, 30000);
             $("#salle").css({
                "background-color": "rgba(0, 128, 0, 0.3)", // Vert transparent
                "transition": "background-color 2s ease-in-out"
            });

            // Supprimer la couleur après 2 secondes
            setTimeout(() => {
                $("#salle").css("background-color", "transparent");
            }, 1000);
               
            } else {

                bodyDiv.animate({'backgroundColor':"#f8191b"}, 2000);

                $("#candidate-info").html(`<p class="text-danger">${data.message}</p>`).show();
                setTimeout(function() {
                $("#candidate-info").fadeOut(function() {
                    $(".dimmer").fadeIn();
                });
            }, 30000);

            }

        },
        error: function(xhr) {
            console.error("Erreur AJAX :", xhr.responseText);
            $(".dimmer").hide(); // Cacher le loader en cas d'erreur

            var errorMessage = JSON.parse(xhr.responseText).message;
            $("#candidate-info").html(`<p class="text-danger">${errorMessage}</p>`).show();
            setTimeout(function() {
                $("#candidate-info").fadeOut(function() {
                    $(".dimmer").fadeIn();
                });
            }, 5000);
                bodyDiv.animate({'backgroundColor':"#f8191b"}, 2000);

        }
    });
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- $("#candidate-info").html(`
        <div class="row mt-4">
            <div class="col-md-6">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" value="${data.nom}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" value="${data.prenom}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Spécialité</label>
                <input type="text" class="form-control" value="${data.specialite}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Salle</label>
                <input type="text" class="form-control" value="${data.salle}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Concours</label>
                <input type="text" class="form-control" value="${data.concours}" readonly>
            </div>
        </div>
    `).fadeIn(); --}}
@endsection

