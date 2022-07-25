@extends('admin.layout')

@section('title', 'View All')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h3>Contact</h3>
                    </div>
                </div>

                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover text-center" id="requests">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $count = 1;

                            @endphp

                            @if(count($contacts) > 0)
                                @forelse ( $contacts as $user )
                                    <tr>
                                        <td style="vertical-align: middle !important;">{{ $count++ }}</td>
                                        <td style="vertical-align: middle !important;">{{ucfirst($user->name)}}</td>
                                        <td style="vertical-align: middle !important;">{{ $user->email }}</td>
                                        <td style="vertical-align: middle !important;">{{ $user->subject }}</td>
                                        <td style="vertical-align: middle !important;">{!! substr($user->pctextarea, 0, 10) . '...' !!}</td>
                                        <td style="vertical-align: middle !important;">
                                            <a href="{{ route('admin.view-request', ['id' => encrypt($user->id)]) }}" style="font-size: 25px; text-decoration: none">
                                                <i class="feather icon-eye"></i>
                                            </a>

                                            <a href="{{ route('admin.delete-request', ['id' => encrypt($user->id)]) }}" style="font-size: 25px; color: red; text-decoration: none">
                                                <i class="feather icon-trash-2" ></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
                            @else
                                <p><strong>No request found...</strong></p>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
