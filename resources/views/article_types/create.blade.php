@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('articleTypes.index') !!}">Article Types</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Create Article Types</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'articleTypes.store']) !!}

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
