@extends('layout.dashboard_layout')

@section('content')

        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Inscription</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Inscription</li>
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
                                        <a href="/ajouter_inscription" class="btn btn-primary">Ajouter</a>
                                    </div>
                                </div>

                               
                                <div class="card-body">
                                    <div class="table-responsive col-lg-10">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>nom apprenant</th>
                                                    <th>formation</th>
                                                   
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($inscriptions as $inscription)
                                                <tr>
                                                    <th>{{$inscription->id_inscription}}</th>
                                                    <td>{{$inscription->nom_inscription}}</td>
                                                    <td>{{$inscription->tel_inscription}}</td>
                                                    <td>{{$inscription->email_inscription}}</td>
                                                    <td>{{$inscription->adresse_inscription}}</td>
                                                    <td>{{$inscription->niveau_scolaire}}</td>
                                                    <td>{{$inscription->situation}}</td>
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