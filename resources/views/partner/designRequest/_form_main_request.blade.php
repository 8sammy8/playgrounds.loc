<div class="col-12">
    <form action="{{ route('partner.design.store') }}" method="post">
        @csrf
{{--        <div class="form-group row">--}}
{{--            <label for="user_id" class="col-sm-2 col-form-label">Customer ID #</label>--}}
{{--            <div class="col-sm-6">--}}
{{--                <input type="text" class="form-control" name="user_id" id="user_id" placeholder="Customer ID" value="{{ old('user_id') }}">--}}
{{--                @error('user_id')--}}
{{--                <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="form-group row">
            <label for="quote" class="col-sm-2 col-form-label">Quote #</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="quote" id="quote" placeholder="Quote" value="{{ old('quote') }}">
                @error('quote')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="job_name" class="col-sm-2 col-form-label">Job Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="job_name" id="job_name" placeholder="Job Name" value="{{ old('job_name') }}">
                @error('job_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="job_location" class="col-sm-2 col-form-label">Job Location</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="job_location" id="job_location" placeholder="Job Location" value="{{ old('job_location') }}">
                @error('job_location')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <fieldset class="form-group">

            <div class="accordion row ml-5" id="accordionColorSchemeType">
                <legend class="col-form-label col-sm-6 pt-3 pb-3">Select your design request type</legend>
                @foreach(config('settings.request_type') as $key => $requestType)
                    <div class="col-sm-10 pb-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="radio" name="request_type"
                                   id="request_type[{{ $key }}]" value="{{ $key }}"
                                   data-toggle="collapse" data-target="#type_content{{ $key }}"
                            >
                            <label class="custom-control-label" for="request_type[{{ $key }}]">
                                {{ $requestType['title'] }}
                            </label>
                        </div>
                    </div>

                    <div id="type_content{{ $key }}" class="col-12 collapse "
                         aria-labelledby="headingOne" data-parent="#accordionColorSchemeType">

                        @include(config('settings.folder_partner') . '.designRequest._type_content' . $key)
                    </div>
                @endforeach
                @error('request_type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </fieldset>

        <div class="form-group row">
            <label for="notes" class="col-sm-4 col-form-label">Notes</label>
            <div class="col-sm-12">
                <textarea type="text" class="form-control" name="notes" id="notes" rows="3">{{ old('notes') }}</textarea>
                @error('notes')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <hr>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
