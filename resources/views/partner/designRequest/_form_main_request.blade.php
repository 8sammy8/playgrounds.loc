<div class="col-12">
    <div class="col-12">

    <h3 class="modal-header">Design Request Portal</h3>
    </div>
    <div class="col-8">
        <form action="{{ route('partner.design.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="user_id" class="col-sm-2 col-form-label">Customer ID #</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="user_id" id="user_id" placeholder="Customer ID" value="{{ old('user_id') }}">
                </div>
                {{ $errors->first('user_id') }}
            </div>
            <div class="form-group row">
                <label for="input_quote" class="col-sm-2 col-form-label">Quote #</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="input_quote" id="input_quote" placeholder="Quote" value="{{ old('input_quote') }}">
                </div>
                {{ $errors->first('input_quote') }}
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-6 pt-0">Select your design request type</legend>
                    @foreach(config('settings.request_type') as $key => $requestType)
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="request_type" id="request_type" value="{{ $key }}"
                                   @if ($loop->first)
                                   checked
                                   @endif
                            >
                            <label class="form-check-label" for="request_type">
                                {{ $requestType['title'] }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                    {{ $errors->first('request_type') }}
                </div>
            </fieldset>

            <hr>

            @include(config('settings.folder_partner') . '.designRequest._color_change')

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>