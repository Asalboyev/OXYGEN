@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection
@section('title')
    Create Project
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4>Create Project</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name (UZ)</label>
                        <input type="text" class="form-control" required name="name_uz" >
                    </div>
                    <div class="form-group">
                        <label>Name (RU)</label>
                        <input type="text" class="form-control" required name="name_ru" >
                    </div>
                    <div class="form-group">
                        <label>Name (EN)</label>
                        <input type="text" class="form-control" required  name="name_en" >
                    </div>
                    <div class="form-group">
                        <label>Title (UZ)</label>
                        <input type="text" class="form-control" required name="title_uz" >
                    </div>
                    <div class="form-group">
                        <label>Title (RU)</label>
                        <input type="text" class="form-control" required name="title_ru" >
                    </div>
                    <div class="form-group">
                        <label>Titel (EN)</label>
                        <input type="text" class="form-control" required  name="title_en" >
                    </div>
                    <div class="form-group">
                        <label>Metro Name</label>
                        <input type="text" class="form-control" required name="m_name">
                    </div>
                    <div class="form-group">
                        <label>V Time</label>
                        <input type="text" class="form-control" required name="v_time">
                    </div>
                    <div class="form-group">
                        <label>Apartemaent</label>
                        <input type="text" class="form-control" required name="apartement">
                    </div>
                    <div class="form-group">
                        <label>Cost</label>
                        <input type="text" class="form-control" required name="cost" id="cost">
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" class="form-control" required name="images">
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
