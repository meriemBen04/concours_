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
                            <a href="javascript:void(0);" class="btn btn-radius btn-secondary-light" data-bs-toggle="modal" data-bs-target="#ajoutModal"><i class="fe fe-plus me-2"></i>Ajouter un concours</a>
                            <a href="/concours/viewdeleted" class="btn btn-radius btn-warning-light"><i class="zmdi zmdi-collection-text"></i>
                                Concours archivés</a>
                        </div>
                        <div class="card-body">
                            <input id="search"  type="text" class="form-control col-md-12"
                                autofocus 
                                placeholder="Scanner le code QR">
                            <div class="table-responsive">
                                <br><br>

                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable" id="datatable-11" width="100%" cellspacing="0">
                                    <thead >
                                        <tr>
                                            <th>Matricule <i class="wd-15p border-bottom-0"></i></th>
                                            <th>Nom <i class="wd-15p border-bottom-0"></i></th>
                                            <th>Prénom <i class="wd-15p border-bottom-0"></i></th>
                                            <th>Date de naissance <i class="wd-15p border-bottom-0"></i></th>
                                            <th>Salle <i class="wd-15p border-bottom-0"></i></th>
                                            <th>Spécialité <i class="wd-15p border-bottom-0"></i></th>
                                            <th>Concours <i class="wd-15p border-bottom-0"></i></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody id="mes_presences">
                                        <tr>
                                            <td>{{ $candidat->matricule ?? '' }}</td>
                                            <td>{{ $candidat->nom ?? '' }}</td>
                                            <td>{{ $candidat->prenom ?? '' }}</td>
                                            <td>{{ isset($candidat->date_naissance) ? date('d/m/Y', strtotime($candidat->date_naissance)) : '' }}</td>
                                            <td>{{ $candidat->salle->nom ?? '' }}</td>
                                            <td>{{ $candidat->specialite->nom ?? '' }}</td>
                                            <td>{{ $candidat->concours->nom ?? '' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                        
                        
                
            </div>
        </div>

    
</div>
@endsection
<script type="text/javascript">>
    <script type="text/javascript">
window.addEventListener("keyup", function(event) {
    if (event.getModifierState("CapsLock")) {
        swal.close();
    } else {
        $("#search").val("");
        swal("Attention", "Veuillez allumer Ver Maj", "warning");
    }


    //

});
</script>


