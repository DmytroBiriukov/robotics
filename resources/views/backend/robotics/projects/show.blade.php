@extends ('backend.layouts.app')

@section ('title', 'Project')

{{--@section('after-styles')
    {{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection--}}

@section('page-header')
    <h1>{{ 'Project' }}</h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
          <!--  
          -->
            <h3 class="box-title">{{ 'Edit news item' }}</h3>
           
        </div> <!-- /.box-header -->


        <div>	
                            <h2>{{ $project->title }}</h2>
                            <p>{{ $project->description }}</p>
                            <p>ID : {{$project->id}}</p>
                            <p>Should be Image </p>
                            <p>Month day, YEAR   {{ $project->created_at }} </p>

                            <p>{{ 'Category' }}</p>

                            <p> {!! $project->action_buttons !!} </p>

		</div>



    </div><!--box box-success-->
@endsection