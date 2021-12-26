@extends('layouts.layout')

@section('content')

    <div class="row bg-light">
        <div class="col-2 bg-primary vh-100">
                <h4 class="text-center text-white mt-3 mb-3">Org Recruitement</h4>

                <div class="mt-3 navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-light">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link text-light"> Planification Entretien</a></li>
                        <li class="nav-item"><a class="nav-link text-light">Paramétre</a></li>
                    </ul>
                </div>
        </div>

        <div class="col-10 vh-100">

            <div class="row h-25 p-2">
                    <div class="col-4 bg-white w-50">
                        <div class="text-center"> Nombre des entretiens par jour </div>
                    </div>
                    <div class="col-4  bg-white w-50 ml-3">
                    nbr ...
                    </div>
                    <div class="col-3  bg-light w-50">

                    </div>
            </div>

            <div class="row h-25 p-2">
                <div class="col-4 bg-white w-50">
                    <div class="text-center"> Nombre des entretiens par jour </div>
                </div>
                <div class="col-4  bg-white w-50 ml-3">
                nbr ...
                </div>
                <div class="col-3  bg-light w-50">
                    <div class="text-center">
                        <button type="button" class="btn btn-primary btn-lg">+ Ajouter Entretien</button>
                    </div>
                </div>
            </div>

            <div class="row h-50 p-2">
                <div class="col-8 bg-white w-100">

                <h6 class="mt-3 mb-3">Liste des Entretiens pour les Condidats</h6>

                <table class="mt-3 table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>

                </div>
                <div class="col-4 bg-light w-100">
                  <div class="border border-success h-100"> <div class="text-center"> Fiche d'entretien du condidat actuel </div> </div>
                </div>
            </div>

        </div>


    </div>

@stop
