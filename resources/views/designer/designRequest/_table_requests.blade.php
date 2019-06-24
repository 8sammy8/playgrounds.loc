<style>
    .icon:hover {
    color: #1ab7ea;
    }
</style>
    <table class="box table table-striped table-hover display responsive nowrap m-t-0 dataTable dtr-inline">
        <thead>
        <tr>
            <th scope="col">Info</th>
            <th scope="col"><i class="fa fa-comment-o"></i></th>
            <th scope="col">@sortablelink('user_id', 'Requestor')</th>
            <th scope="col">@sortablelink('priority', 'Priority')</th>
            <th scope="col">@sortablelink('request_type', 'Type')</th>
            <th scope="col">@sortablelink('updated_at', 'Submission Date')</th>
            <th scope="col">@sortablelink('complete_at', 'Complete Date')</th>
            <th scope="col">@sortablelink('status', 'Status')</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($designerRequests) && $designerRequests->isNotEmpty())
            @foreach($designerRequests as $designerRequest)
                <tr>
                    <td>
                        {{ $designerRequest->job_name }}: {{ $designerRequest->job_location }}
                        {{ $designerRequest->structure_name }}
                    </td>
                    <td><i class="icon fa fa-comment-o"></i></td>
                    <td>{{ $designerRequest->responsible->name }}</td>
                    <td style="background-color: {{ config("settings.priority.{$designerRequest->priority}.color") }}" class="text-white">
                        {{ config("settings.priority.{$designerRequest->priority}.title") }}
                    </td>
                    <td style="background-color: {{ config("settings.request_type.{$designerRequest->request_type}.color") }}" class="text-white">
                        {{ config("settings.request_type.{$designerRequest->request_type}.title") }}
                    </td>
                    <td>
                        {{ \Carbon\Carbon::parse($designerRequest->updated_at)->calendar() }}
                    </td>
                    <td>
                        @if($designerRequest->complete_at)
                            {{ \Carbon\Carbon::parse($designerRequest->complete_at)->calendar() }}
                        @endif
                    </td>
                    <td style="background-color: {{ config("settings.status.{$designerRequest->status}.color") }}" class="text-white">
                        {{ config("settings.status.{$designerRequest->status}.title") }}
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    {{ $designerRequests->links("pagination::bootstrap-4") }}
