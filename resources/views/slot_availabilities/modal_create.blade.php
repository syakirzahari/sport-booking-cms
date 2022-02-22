<div class="modal fade" id="availability" tabindex="-1" aria-labelledby="availability" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Slot Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>        
        </div>
        <div class="modal-body">
          {{ Form::open(['route' => ['slotAvailabilities.update', 'id'], 'method' => 'PUT', 'id' => 'create_slot_form']) }}
          {{-- <div class="mb-3">
              {{ Form::label('slot_id', 'Slot:') }}
              {{ Form::hidden('venue_slot_id', $venue_slot_id ?? null) }}
              {{ Form::text('venue_slot_id', \App\Models\Slot::find($venue_slot_id)->id ?? '-', ['class' => 'form-control', 'readonly']) }}
          </div>
           --}}
          <div class="mb-3">
              {!! Form::label('date', 'Date:') !!}
              <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
              {!! Form::date('date', null, ['class' => 'form-control', 'id' => 'date', 'data-field' => "date"]) !!}
          </div>
          
          <div class="mb-3">
              {!! Form::label('time_from', 'Time From:') !!}
              <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
              {!! Form::time('time_from', null, ['class' => 'form-control', 'id' => 'time_from', 'data-field' => "time"]) !!}
          </div>
          
          <div class="mb-3">
              {!! Form::label('time_to', 'Time To:') !!}
              <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
              {!! Form::time('time_to', null, ['class' => 'form-control', 'id' => 'time_to', 'data-field' => "time"]) !!}
          </div>
          
          <div class="mb-3">
              {{ Form::label('rate', 'Rate (RM):') }}
              <sup style="color:red"><i class="fa fa-asterisk"></i></sup>
              {{ Form::number('rate', null, ['class' => 'form-control']) }}
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{ Form::button('Save', ['type' => 'button','class' => 'btn btn-primary', 'id'=> 'save_slot_btn'] ) }}
        </div>          
        {{ Form::close() }}
      </div>
    </div>
  </div>