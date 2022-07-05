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

                               
                                <div class="card-body">
                                <div class="basic-elements">
                                        <form action="/enregistrer_apprenant" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>apprenant</label>
                                                        <select class="form-control" name="apprenant" required>
                                                            @foreach($apprenants as $apprenant)
															<option value="{{$apprenant->id_apprenant}}">{{$apprenant->nom_apprenant}}</option>
                                                            @endforeach
		
														</select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>formation</label>
                                                        <select class="form-control" name="formation" required>
                                                            @foreach($formations as $formation)
															<option value="{{$formation->id_formation}}">{{$formation->nom_formation}}</option>
                                                            @endforeach
		
														</select>
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