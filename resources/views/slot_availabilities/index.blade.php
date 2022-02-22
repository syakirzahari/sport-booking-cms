@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Slot Availabilities</li>
    </ol>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Venue: {{ $details->venue->name }}
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Sport: <span class="badge badge-primary">{{ $details->sport->name }}</span></p>
                <p>Slot: <span class="badge badge-primary">{{ $details->court_name }}</span></p>
              </blockquote>            
              <a type="button" href="{{ route('slots.index') }}" class="btn btn-warning">Back</a>
            </div>
          </div>
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Slot Availabilities
                             <a class="pull-right" href="{{ route('slotAvailabilities.create', ['venue_slot_id' => request()->venue_slot_id ?? 'null']) }}"><i class="fa fa-plus-square fa-lg"></i> Add</a>
                         </div>
                         <div class="card-body">
                             @include('slot_availabilities.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>                         
                  </div>
             </div>
         </div>
    </div>
@endsection