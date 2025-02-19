@extends('layouts.solic')
    @section('content')
    <div class="main-content app-content">
        <div class="page-header main-container container-fluid px-5">
            <h4 class="page-title">Concours</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Activities</a></li>
                <li class="breadcrumb-item active" aria-current="page">Concours archivés</li>
            </ol>
        </div>
        <!-- START MAIN-CONTAINER -->
        <div class="main-container container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <p class="card-title">Liste des concours archivés</p>
                            
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="file-datatable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">ID</th>
                                            <th class="wd-15p border-bottom-0">Année académique</th>
                                            <th class="wd-20p border-bottom-0">Date début</th>
                                            <th class="wd-15p border-bottom-0">Date fin</th>
                                            <th class="wd-10p border-bottom-0">Description</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($concours as $conc) <!-- Use $conc here -->
                                            <tr >
                                                <td>{{$conc->id}}</td>
                                                <td>{{$conc->annee_acadimique}}</td>
                                                <td>{{$conc->date_debut}}</td>
                                                <td>{{$conc->date_fin}}</td>
                                                <td>{{$conc->description}}</td>
                                                
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
    </div>
    @endsection

