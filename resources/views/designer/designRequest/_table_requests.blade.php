<div class="row col-9">
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Requestor</th>
            <th scope="col">Priority</th>
            <th scope="col">Type</th>
            <th scope="col">Submission Data</th>
            <th scope="col">Complete Data</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($designerRequests) && $designerRequests->isNotEmpty())
            @foreach($designerRequests as $designerRequest)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $designerRequest->responsible->name }}</td>
                    <td style="background-color: {{ config("settings.priority.{$designerRequest->priority}.color") }}">
                        {{ config("settings.priority.{$designerRequest->priority}.title") }}
                    </td>
                    <td style="background-color: {{ config("settings.request_type.{$designerRequest->request_type}.color") }}">
                        {{ config("settings.request_type.{$designerRequest->request_type}.title") }}
                    </td>
                    <td>
                        {{ $designerRequest->updated_at }}
                    </td>
                    <td>
                        {{ $designerRequest->complete_at }}
                    </td>
                    <td style="background-color: {{ config("settings.status.{$designerRequest->status}.color") }}">
                        {{ config("settings.status.{$designerRequest->status}.title") }}
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

{{--    {{ $paginator->links('pagination.bootstrap-4') }}--}}
    {{ $designerRequests->links("pagination::bootstrap-4") }}
</div>