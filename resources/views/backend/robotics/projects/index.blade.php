@extends ('backend.layouts.app')

{{--@section('title', 'Projects')--}}
{{--@section('after-styles')
    {{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection--}}
@section('page-header')
    <h1>{{ 'List of projects' }}</h1>
@endsection

@section('content')
{{--    <div class="box box-success">
        <div class="box-header with-border">

            <h3 class="box-title">{{ 'List of projects' }}</h3>

            <div class="box-tools pull-right">

                @include('backend.Leuco.includes.partials.OrderRequests-header-buttons')

            </div>

        </div>--}}


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <div class="box-body">
            <div class="table-responsive">
                <table id="Projects-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>{{'Title'}}</th>
                        <th>{{'Overview'}}</th>
                        <th>{{'Description'}}</th>
                        <th>{{ __('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$project->title}}</td>
                            <td>{{$project->overview}}</td>
                            <td>{{$project->description}}</td>
                            <td>{!! $project->action_buttons !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->


    </div><!--box box-success-->
@endsection

{{--@section('after-scripts')
    {{ Html::script("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables-extend.js") }}

    <script>
        $(function() {
            $('#news-table').DataTable({
                dom: 'lfrtip',
                processing: false,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route("admin.KDBook.news.get") }}',
                    type: 'post',
                    error: function (xhr, err) {
                        if (err === 'parsererror')
                            location.reload();
                    }
                },
                columns: [
                    {data: 'human_date', name: 'human_date'},
                    {data: 'catalog', name: 'catalog'},
                    {data: 'title', name: 'title'},
                    {data: 'body', name: 'body'},                    
                    {data: 'image', name: 'image', searchable: false, sortable: false},
                    {data: 'active', name: 'active' },
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "desc"]]
            });
        });
    </script>
@endsection--}}

