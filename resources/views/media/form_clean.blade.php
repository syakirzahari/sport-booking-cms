<div class="col-md-12 mb-3">
    <hr>
    <h4>Venue Image</h4>
    <div class="alert alert-info">
        <small>
            Supported formats are jpg, png.
            <br>Max resolution is 1024px x 1024px.
            <br>Maximum size is 2MB.
        </small>
    </div>
</div>

@for($i = 1; $i <= $limit; $i++)
    @include('media.fields_clean', ['i' => $i])
@endfor
