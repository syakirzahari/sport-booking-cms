@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('articleTypes.index') }}">Article Types</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Details</strong>
                             </div>
                             <div class="card-body">
                                 @include('article_types.show_fields')
                             </div>
                             <div class="card-footer">
                                <div class="row">
                                    <!-- Submit Field -->
                                    <div class="form-group col-sm-12 m-b-none">
                                  <a href="{{ route('articleTypes.index') }}" class="btn btn-primary">Back</a>
                                </div>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
