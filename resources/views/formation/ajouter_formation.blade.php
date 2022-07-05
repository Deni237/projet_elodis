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
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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

                               
                                <div class="card-body">
                                <div class="basic-elements">
                                        <form action="/enregistrer_formation" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Nom</label>
                                                        <input type="text" class="form-control"  name="nom" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>prix</label>
                                                        <input  class="form-control" type="decimal" name="prix" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>description</label>
                                                        <input class="form-control" type="text"  name="description" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>prerequis</label>
                                                        <input class="form-control" type="text"  name="prerequis" required>
                                                    </div>

                                                </div>                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary">Envoyer</button>
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