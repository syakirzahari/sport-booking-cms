@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('slots.index') !!}">Slots</a>
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
                              <strong>Edit Slots</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($slots, ['route' => ['slots.update', $slots->id], 'method' => 'patch']) !!}

                              @include('slots.fields')
                              <!-- Submit Field -->
                                <div class="form-group col-sm-12">
                                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                    <a href="{{ route('slots.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection