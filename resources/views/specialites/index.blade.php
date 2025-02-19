@extends('layouts.solic')
@section('content')
    <div class="main-content app-content">
        <div class="page-header main-container container-fluid px-5">
            <h4 class="page-title">Spécilités</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Activities</a></li>
                <li class="breadcrumb-item active" aria-current="page">Spécialités</li>
            </ol>
        </div>
        <!-- START MAIN-CONTAINER -->
        <div class="main-container container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Tables des spécialité des condidats</h3>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="file-datatable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">ID</th>
                                            <th class="wd-15p border-bottom-0">Spécialité</th>
                                            <th class="wd-20p border-bottom-0">description</th>
                                            <th class="wd-25p border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($specialites as $conc) <!-- Use $conc here -->
                                            <tr id="ligne{{$conc->id}}">
                                                <td>{{$conc->id}}</td>
                                                <td>{{$conc->nom}}</td>
                                                <td>{{$conc->daescription}}</td>
                                                
                                                <td> 
                                                    {{-- <div class="table-action ">
                                                        @include('includes.concours_edit_delet',compact('conc'))
            
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
    </div>
 @endsection