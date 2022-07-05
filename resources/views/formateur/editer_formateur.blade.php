@extends('layout.dashboard_layout')

@section('content')

        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Editer Formateur</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Editer Formateur</li>
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
                                        <form action="/modifier_formateur" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <input type="hide" class="form-control"  name="ids" value="{{$formateur[0]->id_formateur}}" >

                                                    <div class="form-group">
                                                        <label>Nom & prenom</label>
                                                        <input type="text" class="form-control"  name="nom" value="{{$formateur[0]->nom_formateur}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input  class="form-control" type="email" name="email" value="{{$formateur[0]->email_formateur}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>telephone</label>
                                                        <input class="form-control" type="number"  name="telephone" value="{{$formateur[0]->tel_formateur}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Adresse</label>
                                                        <input class="form-control" type="text"  name="adresse" value="{{$formateur[0]->adresse_formateur}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>qualification</label>
                                                        <input class="form-control" type="text"  name="qualification" value="{{$formateur[0]->qualification}}" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>type de contrat</label>
                                                        <select class="form-control" name="contrat" required>
                                                            <option value="{{$formateur[0]->type_contrat}}">{{$formateur[0]->type_contrat}}</option>
															<option value="CDI">CDI</option>
															<option value="CDD">CDD</option>
		
														</select>
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