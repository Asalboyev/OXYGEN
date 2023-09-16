@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection
@section('title')
    Edit Project
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h4>Edit Project</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name (UZ)</label>
                        <input type="text" class="form-control" required value="{{$project->name_uz}}" name="name_uz">
                    </div>
                    <div class="form-group">
                        <label>Name (RU)</label>
                        <input type="text" class="form-control" required value="{{$project->name_ru}}" name="name_ru" >
                    </div>
                    <div class="form-group">
                        <label>Name (EN)</label>
                        <input type="text" class="form-control" required value="{{$project->name_en}}"  name="name_en" >
                    </div>
                    <div class="form-group">
                        <label>Title (UZ)</label>
                        <input type="text" class="form-control" required value="{{$project->title_uz}}" name="title_uz" >
                    </div>
                    <div class="form-group">
                        <label>Title (RU)</label>
                        <input type="text" class="form-control" required value="{{$project->title_ru}}" name="title_ru" >
                    </div>
                    <div class="form-group">
                        <label>Titel (EN)</label>
                        <input type="text" class="form-control" required value="{{$project->title_en}}"  name="title_en" >
                    </div>
                    <div class="form-group">
                        <label>Metro Name</label>
                        <input type="text" class="form-control" required value="{{$project->m_name}}" name="m_name">
                    </div>
                    <div class="form-group">
                        <label>V Time</label>
                        <input type="text" class="form-control" required value="{{$project->v_time}}" name="v_time">
                    </div>
                    <div class="form-group">
                        <label>Apartemaent</label>
                        <input type="text" class="form-control" required value="{{$project->apartement}}" name="apartement">
                    </div>
                    <div class="form-group">
                        <label>Cost</label>
                        <input type="text" class="form-control"  value="{{$project->cost}}" name="cost">
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" class="form-control" required  name="images">
                    </div>

                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')

    <script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script src="/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>


@endsection
