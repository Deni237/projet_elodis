@extends('layout.dashboard_layout')

@section('content')

        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Module</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Module</li>
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
                                    <h4></h4>  
                                </div>
                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-2">
                                        <a href="/ajouter_module" class="btn btn-primary">Ajouter</a>
                                    </div>
                                </div>

                               
                                <div class="card-body">
                                    <div class="table-responsive col-lg-10">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                    <th>ID</th>
                                                    <th>nom</th>
                                                    <th>description</th>
                                                    <th>formation</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($modules as $module)
                                                <tr>
                                                    <th>{{$module->id_module}}</th>
                                                    <td>{{$module->nom_module}}</td>
                                                    <td>{{$module->description_module}}</td>
                                                    <td>{{$module->nom_formation_mo}}</td>  
                                                    <td><a href="/editer_module"><li class="ti-pencil"></li></a><a href="#" ><li class="ti-trash" style="margin-top:10px;"></li></a></td>

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