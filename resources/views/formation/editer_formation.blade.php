@extends('layout.dashboard_layout')

@section('content')

        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Editer Formation</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Editer Formation</li>
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

                               
                                <div class="card-body">
                                <div class="basic-elements">
                                        <form action="/modifier_formation" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <input type="hide" class="form-control"  name="ids" value="{{$formation[0]->id_formation}}"  required>

                                                    <div class="form-group">
                                                        <label>Nom</label>
                                                        <input type="text" class="form-control"  name="nom" value="{{$formation[0]->nom_formation}}"  required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>prix</label>
                                                        <input  class="form-control" type="decimal" name="prix" value="{{$formation[0]->prix_formation}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>description</label>
                                                        <input class="form-control" type="text"  name="description" value="{{$formation[0]->description}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>prerequis</label>
                                                        <input class="form-control" type="text"  name="prerequis" value="{{$formation[0]->prerequis}}" required>
                                                    </div>

                                                </div>                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>

        @stop