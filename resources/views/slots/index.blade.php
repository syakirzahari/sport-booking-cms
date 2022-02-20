@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Slots</li>
    </ol>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              Venue: {{ $details->venue->name }}
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                Sport: <span class="badge badge-primary">{{ $details->sport->name }}</span>
              </blockquote>
            </div>
          </div>
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Slots
                             <a class="pull-right" href="{{ route('slots.create', ['venue_id' => request()->venue_id ?? 'null', 'sport_id' => request()->sport_id ?? 'null']) }}"><i class="fa fa-plus-square fa-lg"></i> Add</a>
                         </div>
                         <div class="card-body">
                             @include('slots.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

