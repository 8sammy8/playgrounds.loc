<div class="col-12">
    <form action="{{ route('designer.design.request.update', ['id' => $designRequest->id]) }}" method="post">
        @csrf
        <fieldset disabled>
        <div class="form-group row">
            <label for="quote" class="col-sm-2 col-form-label">Quote #</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="quote" value="{{ $designRequest->quote }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="job_name" class="col-sm-2 col-form-label">Job Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="job_name" value="{{ $designRequest->job_name }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="job_location" class="col-sm-2 col-form-label">Job Location</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="job_location" value="{{ $designRequest->job_location }}">
            </div>
        </div>

            <hr>

        <div class="form-group row">
            <label for="job_location" class="col-sm-2 col-form-label">Request type</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="request_type" value="{{
                    config('settings.request_type')[$designRequest->request_type]['title'] }}">
            </div>
        </div>

            @include(config('settings.folder_designer') . '.designRequest._type_content' . $designRequest->request_type)

        @if($designRequest->notes)
            <div class="form-group row">
                <label for="notes" class="col-sm-4 col-form-label">Notes</label>
                <div class="col-sm-12">
                    <textarea type="text" class="form-control" id="notes" rows="3">{{ $designRequest->notes }}</textarea>
                </div>
            </div>
        @endif

        </fieldset>

        <hr>

        <div class="form-group row">
            <label for="priority" class="col-sm-2 col-form-label">Priority</label>
            <select class="custom-select col-sm-6" id="priority">
                @foreach(config('settings.priority') as $key => $priority)
                    <option value="{{ $key }}"
                            @if($designRequest->priority == $key) selected @endif
                            style="background-color: {{ $priority['color'] }}"
                    >{{ ucfirst($priority['title']) }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <select class="custom-select col-sm-6" id="status">
                @foreach(config('settings.status') as $key => $status)
                    <option value="{{ $key }}"
                            @if($designRequest->status == $key) selected @endif
                            style="background-color: {{ $status['color'] }}"
                    >{{ $status['title'] }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group row">
            <label for="complete_at" class="col-sm-2 col-form-label">Complete Date</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="complete_at" id="complete_at" value="">

            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@push('css')
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datetimepicker.min.css') }}"/>--}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
@push('scripts')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
{{--    <script src="{{ asset('js/jquery.datetimepicker.min.js') }}"></script>--}}
    <script>
        $( function() {
            $( "#complete_at" ).datepicker();
        } );
    </script>
@endpush


