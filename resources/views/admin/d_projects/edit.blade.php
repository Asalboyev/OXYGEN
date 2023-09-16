
@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection
@section('title')
    Edit D_Project
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.d_projects.update',$d_project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h4>Edit Project</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name (UZ)</label>
                        <input type="text" class="form-control" required  value="{{$d_project->name_uz}}" name="name_uz" >
                    </div>
                    <div class="form-group">
                        <label>Name (RU)</label>
                        <input type="text" class="form-control" required  value="{{$d_project->name_ru}}" name="name_ru" >
                    </div>
                    <div class="form-group">
                        <label>Name (EN)</label>
                        <input type="text" class="form-control" required  value="{{$d_project->name_en}}"  name="name_en" >
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" required  value="{{$d_project->price}}" name="price" >
                    </div>
                    <div class="form-group">
                        <label>Square</label>
                        <input type="text" class="form-control" required  value="{{$d_project->square}}" name="square" >
                    </div>
                    <div class="form-group">
                        <label>Balcony</label>
                        <input type="text" class="form-control" required  value="{{$d_project->balcony}}"  name="balcony" >
                    </div>
                    <div class="form-group">
                        <label>Bathroom</label>
                        <input type="text" class="form-control" required  value="{{$d_project->bathroom}}" name="bathroom">
                    </div>
                    <div class="form-group">
                        <label>Bedroom</label>
                        <input type="text" class="form-control" required  value="{{$d_project->bedroom}}" name="bedroom">
                    </div>
                    <div class="form-group">
                        <label>Hallway</label>
                        <input type="text" class="form-control" required  value="{{$d_project->hallway}}" name="hallway">
                    </div>
                    <div class="form-group">
                        <label>Hitchen</label>
                        <input type="text" class="form-control" required  value="{{$d_project->hitchen}}" name="hitchen" id="hitchen">
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" class="form-control"   name="images">
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
