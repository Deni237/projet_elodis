@extends('layout.dashboard_layout')

@section('content')

        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Formation</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
                                    <li class="breadcrumb-item active">Formation</li>
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
                                        <a href="/ajouter_formation" class="btn btn-primary">Ajouter</a>
                                    </div>
                                </div>

                               
                                <div class="card-body">
                                    <div class="table-responsive col-lg-10">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                    <th>ID</th>
                                                    <th>nom</th>
                                                    <th>prix</th>
                                                    <th>prerequis</th>
                                                    <th>description</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($formations as $formation)
                                                <tr>
                                                    <th>{{$formation->id_formation}}</th>
                                                    <td>{{$formation->nom_formation}}</td>
                                                    <td>{{$formation->prix_formation}}</td>
                                                    <td>{{$formation->prerequis}}</td>
                                                    <td>{{$formation->description}}</td>
                                                    <td><a href="/editer_formation?ids={{$formation->id_formation}}"><li class="ti-pencil"></li></a><a href="/supprimer_formation?ids={{$formation->id_formation}}" ><li class="ti-trash" style="margin-top:10px;"></li></a></td>

                                                    
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