@extends('layout.dashboard_layout')

@section('content')

        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Formateur</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
                                    <li class="breadcrumb-item active">Formateur</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                </div>
                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-2">
                                        <a href="/ajouter_formateur" class="btn btn-primary">Ajouter</a>
                                    </div>
                                </div>

                               
                                <div class="card-body">
                                    <div class="table-responsive col-lg-10">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                    <th>ID</th>
                                                    <th>nom</th>
                                                    <th>tel</th>
                                                    <th>email</th>
                                                    <th>adresse</th>
                                                    <th>qualification</th>
                                                    <th>contrat</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($formateurs as $formateur)
                                                <tr>
                                                    <th>{{$formateur->id_formateur}}</th>
                                                    <td>{{$formateur->nom_formateur}}</td>
                                                    <td>{{$formateur->tel_formateur}}</td>
                                                    <td>{{$formateur->email_formateur}}</td>
                                                    <td>{{$formateur->adresse_formateur}}</td>
                                                    <td>{{$formateur->qualification}}</td>
                                                    <td>{{$formateur->type_contrat}}</td>
                                                    <td><a href="/editer_formateur?ids={{$formateur->id_formateur}}"><li class="ti-pencil"></li></a><a href="/supprimer_formateur?ids={{$formateur->id_formateur}}" ><li class="ti-trash" style="margin-top:10px;"></li></a></td>

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

        @stop