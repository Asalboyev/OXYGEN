@extends('layouts.admin')

@section('title')
Posts Show
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
            <h4>Posts Table Id-> {{ $project->id }}</h4>
            <div class="card-header-form">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <tr>
                        <th>Name (UZ)</th>
                        <td>{{ $project->name_uz }}</td>
                    </tr>
                    <tr>
                        <th>Name (RU)</th>
                        <td>{{ $project->name_ru }}</td>
                    </tr>
                    <tr>
                        <th>Mame (EN)</th>
                        <td>{{ $project->name_en }}</td>
                    </tr>
                    <tr>
                        <th>Title (UZ)</th>
                        <td>{{ $project->title_uz }}</td>
                    </tr>
                    <tr>
                        <th>Title (RU)</th>
                        <td>{{ $project->title_ru }}</td>
                    </tr>
                    <tr>
                        <th>Title (En)</th>
                        <td>{{ $project->title_en }}</td>
                    </tr>
                    <tr>
                        <th>Metro NAme</th>
                        <td>{{ $project->m_name }}</td>
                    </tr>
                    <tr>
                        <th>V Time</th>
                        <td>{{ $project->v_time }}</td>
                    </tr>
                    <tr>
                        <th>Apartement</th>
                        <td>{{ $project->apartement }}</td>
                    </tr>
                    <tr>
                        <th>Cost</th>
                        <td>{{ $project->cost }}</td>
                    </tr>

                    <tr>
                        <th>Image</th>
                        <td> <img width="150px" src="/site/images/projects/{{ $project->images }}" alt=""></td>
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

