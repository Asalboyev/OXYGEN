
@extends('layouts.admin')

@section('title')
    D Project Show
@endsection
@section('css')
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <!-- Main Content -->
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            @if (session('success'))
                <div class="alert alert-primary alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="card-header">
                <h4>D project Table Id-> {{ $d_project->id }}</h4>
                <div class="card-header-form">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <tr>
                            <th>Name (UZ)</th>
                            <td>{{ $d_project->name_uz }}</td>
                        </tr>
                        <tr>
                            <th>Name (RU)</th>
                            <td>{{ $d_project->name_ru }}</td>
                        </tr>
                        <tr>
                            <th>Mame (EN)</th>
                            <td>{{ $d_project->name_en }}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{ $d_project->price }}</td>
                        </tr>
                        <tr>
                            <th>Square</th>
                            <td>{{ $d_project->square }}</td>
                        </tr>
                        <tr>
                            <th>Balcony</th>
                            <td>{{ $d_project->balcony }}</td>
                        </tr>
                        <tr>
                            <th>Bathroom</th>
                            <td>{{ $d_project->bathroom }}</td>
                        </tr>
                        <tr>
                            <th>Bathroom</th>
                            <td>{{ $d_project->bathroom }}</td>
                        </tr>
                        <tr>
                            <th>Bedroom</th>
                            <td>{{ $d_project->bedroom }}</td>
                        </tr>
                        <tr>
                            <th>Hitchen</th>
                            <td>{{ $d_project->hitchen }}</td>
                        </tr>

                        <tr>
                             <th>Image</th>
                            <td> <img width="150px" src="/site/images/d_projects/{{ $d_project->images }}" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">

            </nav>
        </div>
    </div>
    </div>
@endsection
@section('js')
    <script src="assets/bundles/datatables/datatables.min.js"></script>
    <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/js/page/datatables.js"></script>
@endsection

