@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Sessions') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Session ID</th>
                                    <th>User ID</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Last Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sessions as $session)
                                    <tr>
                                        <td>{{ $session->id }}</td>
                                        <td>{{ $session->user_id }}</td>
                                        <td>{{ $session->ip_address }}</td>
                                        <td>{{ $session->user_agent }}</td>
                                        <td>{{ $session->last_activity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
