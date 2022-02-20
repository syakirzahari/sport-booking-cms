@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('users.index') !!}">User</a>
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
                                <strong>Create User</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'users.store']) !!}

                                   @include('users.fields')
                                   
                                <!-- Submit Field -->
                                <div class="form-group col-sm-12">
                                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>


                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
                $('#state_id').change(function(){
                var stateID = $(this).val();  
                console.log(stateID);
                if(stateID){
                    $.ajax({
                    type:"GET",
                    url:"{{url('getDistrict')}}?state_id="+stateID,
                    success:function(res){        
                    if(res){
                        $("#district_id").empty();
                        $("#district_id").append('<option>Select District</option>');
                        $.each(res,function(key,value){
                        $("#district_id").append('<option value="'+key+'">'+value+'</option>');
                        });
                    
                    }else{
                        $("#district_id").empty();
                    }
                    }
                    });
                }else{
                    $("#district_id").empty();
                }   
            });
        });

        $(function () {
            $('.select2').select2()
            $('.chosen-select').chosen({ width: '100%' }) 
        });
    </script>
@endpush

