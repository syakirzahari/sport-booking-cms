@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('articleTypes.index') !!}">Article Types</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Article Types</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($articleTypes, ['route' => ['articleTypes.update', $articleTypes->id], 'method' => 'patch']) !!}

                              @include('article_types.fields')
                              {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                              <a href="{{ route('articleTypes.index') }}" class="btn btn-secondary">Cancel</a>
                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection