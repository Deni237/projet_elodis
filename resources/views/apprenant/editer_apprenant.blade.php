@extends('layout.dashboard_layout')

@section('content')

        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Editer Apprenant</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Editer Apprenant</li>
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
                                        <form action="/modifier_apprenant" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <input type="hide" class="form-control" name="id_apprenant"  value="{{$apprenant[0]->id_apprenant}}" >

                                                    <div class="form-group">
                                                        <label>Nom & prenom</label>
                                                        <input type="text" class="form-control"  name="nom" value="{{$apprenant[0]->nom_apprenant}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input  class="form-control" type="email" name="email" value="{{$apprenant[0]->email_apprenant}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>telephone</label>
                                                        <input class="form-control" type="number" value="{{$apprenant[0]->tel_apprenant}}"  name="telephone" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Adresse</label>
                                                        <input class="form-control" type="text" value="{{$apprenant[0]->adresse_apprenant}}"  name="adresse" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>langue</label>
                                                        <input class="form-control" type="text" value="{{$apprenant[0]->langues}}"  name="langue" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Niveau scolaire</label>
                                                        <input class="form-control" type="text"  value="{{$apprenant[0]->niveau_scolaire}}" name="niveau" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>situation patrimoniale</label>
                                                        <input class="form-control" type="text" value="{{$apprenant[0]->situation}}" name="situation" required>
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