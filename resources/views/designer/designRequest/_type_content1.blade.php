<div class="form-group row">
    <label for="structure_name" class="col-sm-2 col-form-label">Structure Name</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="structure_name" value="{{ $designRequest->structure_name }}">
    </div>
</div>
<div class="form-group row">
    <label for="sku" class="col-sm-2 col-form-label">SKU #</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="sku" value="{{ $designRequest->sku }}">
    </div>
</div>
<div class="form-group row">
    <label for="model" class="col-sm-2 col-form-label">Model #</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="model" value="{{ $designRequest->model }}">
    </div>
</div>

<label for="" class="col-sm-6 col-form-label">Color Scheme: {{ $colorScheme->name }}</label>

@include(config('settings.folder_designer') . '.designRequest._color_scheme')


