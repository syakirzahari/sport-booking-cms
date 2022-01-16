@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('imageSliders.index') !!}">Image Sliders</a>
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
                                <strong>Create Image Sliders</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'imageSliders.store', 'enctype' => "multipart/form-data"]) !!}

                                @include('media.form', ['limit' => 1])
                                
                                @include('image_sliders.fields')

                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('imageSliders.index') }}" class="btn btn-secondary">Cancel</a>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
