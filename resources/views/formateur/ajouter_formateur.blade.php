@extends('layout.dashboard_layout')

@section('content')

        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Ajouter Formateur</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Ajouter Formateur</li>
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
                                        <form action="/enregistrer_formateur" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Nom & prenom</label>
                                                        <input type="text" class="form-control"  name="nom" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input  class="form-control" type="email" name="email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>telephone</label>
                                                        <input class="form-control" type="number"  name="telephone" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Adresse</label>
                                                        <input class="form-control" type="text"  name="adresse" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>qualification</label>
                                                        <input class="form-control" type="text"  name="qualification" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>type de contrat</label>
                                                        <select class="form-control" name="contrat" required>
															<option value="CDI">CDI</option>
															<option value="CDD">CDD</option>
		
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