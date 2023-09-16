    @extends('layouts.admin')
    @section('css')
        <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="/admin/assets/css/app.min.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="/admin/assets/bundles/datatables/datatables.min.css">
        <link rel="stylesheet" href="/admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="/admin/assets/css/style.css">
        <link rel="stylesheet" href="/admin/assets/css/components.css">
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="/admin/assets/css/custom.css">
        <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

    @endsection
    @section('title')
        Projects
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Export Table</h4>
                        <div class="card-header-form">
                            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Name (UZ)</th>
                                    <th>Title (UZ)</th>
                                    <th>Apartements</th>
                                    <th>Images</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($projects as $project)

                                    <tr>
                                        <td>
                                            {{ $loop->iteration}}
                                        </td>

                                        <td>
                                            @php
                                                $text = $project->name_uz;
                                                $chunks = str_split($text, 30);
                                                echo implode('<br>', $chunks);
                                            @endphp
                                        </td>
                                        <td>
                                            @php
                                                $text = $project->title_uz;
                                                $chunks = str_split($text, 30);
                                                echo implode('<br>', $chunks);
                                            @endphp
                                        </td>
                                        <td>
                                            @php
                                                $text = $project->name_en;
                                                $chunks = str_split($text, 30);
                                                echo implode('<br>', $chunks);
                                            @endphp
                                        </td>
                                        <td>
                                            <img alt="image" src="/site/images/projects/{{$project->images}}" width="35">
                                        </td>
                                        <td style="d-flex">
                                             <a href="{{ route('admin.projects.destroy',$project->id) }}" class="btn btn-primary">Show</a>
                                            <a href="{{ route('admin.projects.edit',$project->id) }}" class="btn btn-success">Edit</a>
                                            <form style="display:inline" action="{{ route('admin.projects.destroy',$project->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button href="#" class="btn btn-danger" type="submit" onclick="return confirm('O\'chrishni xohlaysizmi')">Detail</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('js')
        <script src="/admin/assets/js/app.min.js"></script>
        <!-- JS Libraies -->
        <!-- Page Specific JS File -->
        <script src="/admin/assets/bundles/datatables/datatables.min.js"></script>
        <script src="/admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="/admin/assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
        <script src="/admin/assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
        <script src="/admin/assets/bundles/datatables/export-tables/jszip.min.js"></script>
        <script src="/admin/assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
        <script src="/admin/assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
        <script src="/admin/assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
        <script src="/admin/assets/js/page/datatables.js"></script>
        <!-- Template JS File -->
        <script src="/admin/assets/js/scripts.js"></script>
        <!-- Custom JS File -->
        <script src="/admin/assets/js/custom.js"></script>
    @endsection
