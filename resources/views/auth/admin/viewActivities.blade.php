@extends('app')

@section('content')
    <!-- Create Task Form... -->

    <!-- Current Tasks -->
    @if (count($activities) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                All Activities

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Activity</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $activity->name }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection