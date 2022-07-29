@extends('admin.layout')

@section('title', 'View Request')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h3>Withdraw Requests</h3>
                    </div>
                </div>

                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover text-center" id="requests">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Teacher Name</th>
                                <th>Paypal Email</th>
                                <th>Stripe Public Key</th>
                                <th>Stripe Secrete Key</th>
                                <th>Request Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $count = 1;

                            @endphp
                            @forelse ( $requests as $request )

                                <tr>
                                    <td style="vertical-align: middle !important;">{{ $count++ }}</td>
                                    <td style="vertical-align: middle !important;">{{ ucwords($request->user->name) }}</td>
                                    <td style="vertical-align: middle !important;">{{ (!empty($request->paypal_email) ? $request->paypal_email : '---') }}</td>
                                    <td style="vertical-align: middle !important;">{{ (!empty($request->stripe_pk) ? $request->stripe_pk : '---') }}</td>
                                    <td style="vertical-align: middle !important;">{{ (!empty($request->stripe_sk) ? $request->stripe_sk : '---') }}</td>
                                    <td style="vertical-align: middle !important;">${{ $request->withdraw_amount }}</td>
                                    <td style="vertical-align: middle !important;">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ ucfirst($request->status) }}
                                            </button>
                                            @if($request->status == 'completed')
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" disabled="">
                                                    {{--                                                <a class="dropdown-item" href="#">Pending</a>--}}
                                                    <a class="dropdown-item" style="pointer-events: none"
                                                       href="{{ route('admin.request-status', ['status' => encrypt('completed'), 'id' => encrypt($request->id)]) }}">Completed</a>
                                                    {{--                                                <a class="dropdown-item" href="#">Something else here</a>--}}
                                                </div>
                                            @else
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    {{--                                                <a class="dropdown-item" href="#">Pending</a>--}}
                                                    <a class="dropdown-item" href="{{ route('admin.request-status', ['status' => encrypt('completed'), 'id' => encrypt($request->id)]) }}">Completed</a>
                                                    {{--                                                <a class="dropdown-item" href="#">Something else here</a>--}}
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td style="vertical-align: middle !important;">
                                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                            <strong>Withdraw</strong></a>
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.withdraw_requests.payment-modal')
@endsection
