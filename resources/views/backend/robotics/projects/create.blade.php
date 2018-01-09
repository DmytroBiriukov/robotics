@extends ('backend.layouts.app')

@section ('title', trans('menus.backend.news-viewer.main'))

@section('after-styles')
    {{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection

@section('page-header')
    <h1>{{ trans('menus.backend.news-viewer.main') }}</h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.news-line.publishintoline')}}</h3>
        </div><!-- /.box-header -->
        <div>

            {!! Form::open(array('route' => 'admin.KDBook.news.store', 'class' => 'form', 'files' => true)) !!}
            <div class="form-group">
                {!! Form::label( trans('labels.backend.general.title') ) !!}
                {!! Form::text('title', null, array('required|max:255',
                    'class'=>'form-control', 'placeholder'=> trans('labels.backend.general.title') )) !!}
            </div>
            <div class="form-group">
                {!! Form::label(trans('labels.backend.general.content')) !!}
                {!! Form::textarea('body', null, array('required|max:511',
                'class'=>'form-control', 'placeholder'=>trans('labels.backend.general.content'))) !!}
            </div>
            <div class="form-group">
                <label for="catalog">{{ trans('labels.backend.news-line.catalog') }}</label>
                <select name="catalog">
                    @foreach($catalogs = App\Models\KDBook\Catalogs::all() as $ctg)
                        <option value="{{$ctg->id}}">{{$ctg->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="input_img">{{trans('labels.backend.general.fileInput')}}</label>
                <input data-preview="#preview" name="input_img" type="file" id="input_img">
                <img class="col-sm-6" id="preview"  src="" />
                <p class="help-block">{{trans('labels.backend.general.fileRequirements')}}</p>
            </div>
            <div class="form-group">
                {!! Form::submit(trans('labels.backend.general.publish'), array('class'=>'btn btn-primary')) !!}
                <button type="button" class="btn btn-primary" onclick="window.history.back();">{{ trans('labels.backend.general.back') }}</button>
            </div>
            {!! Form::close() !!}

        </div>
     </div><!--box box-success-->
@endsection