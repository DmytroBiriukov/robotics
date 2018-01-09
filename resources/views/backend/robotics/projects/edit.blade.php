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
            <h3 class="box-title">{{ trans('menus.backend.news-viewer.edit') }}</h3>
        </div> <!-- /.box-header -->

        <div>
              <form  method="POST" enctype="multipart/form-data"   action="{{ route('admin.KDBook.news.update', [$news->id]) }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="title">{{ trans('labels.backend.general.title') }}</label>
                  <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ $news->title }}">
                </div>
                <div class="form-group">
                  <label for="body">{{ trans('labels.backend.general.content') }}</label>
                  <textarea id="body" class="form-control"  name="body">{{ $news->body }}</textarea>
                </div>

                <div class="form-group">
                      <label for="catalog">{{ trans('labels.backend.news-line.catalog') }}</label>
                      <select name="catalog">
                          @foreach($catalogs = App\Models\KDBook\Catalogs::all() as $ctg)
                              <option value="{{$ctg->id}}"
                              @if($ctg->id == $news->catalog_id)
                                  {{' selected '}}
                              @endif
                              >{{$ctg->title}}</option>
                          @endforeach
                      </select>
                </div>

                  <div class="form-group">
                      <label for="active">  {{trans('labels.backend.general.active')}}</label>
                      <select name="active">
                          <option value="1"
                                  @if($news->active == '1')
                                      {{' selected '}}
                                  @endif
                          >{{'active'}} </option>
                          <option value="0"
                          @if($news->active == '0')
                              {{' selected '}}
                                  @endif
                          >{{'inactive'}} </option>
                      </select>
                  </div>

                <div class="form-group">
                  <img src="{{ $news->getMedia('media')->first()->getUrl('thumb') }}"/>
                </div>

                <div class="form-group">

                      <label for="input_img">{{trans('labels.backend.general.fileInput')}}</label>

                      <input data-preview="#preview" name="input_img" type="file" id="input_img">
                      <img class="col-sm-6" id="preview"  src="" />
                      <p class="help-block">{{trans('labels.backend.general.fileRequirements')}}</p>
                </div>

                  <button type="submit" class="btn btn-primary">{{ trans('labels.backend.general.change') }}</button>
                  <button type="button" class="btn btn-primary" onclick="window.history.back();">{{ trans('labels.backend.general.back') }}</button>
              </form>
         </div>
    </div><!--box box-success-->
@endsection