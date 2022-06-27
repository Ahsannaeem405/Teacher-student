@extends('admin.layout')

@section('title', 'View All')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h3>Subscriptions</h3>
                    </div>
                </div>

                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover text-center" id="requests">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Starting Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $count = 1;

                            @endphp
{{--                            @forelse ( $users as $user )--}}

                                <tr>
                                    <td style="vertical-align: middle !important;">{{ $count++ }}</td>
                                    <td style="vertical-align: middle !important;">David Miller</td>
                                    <td style="vertical-align: middle !important;">$2000</td>
                                    <td style="vertical-align: middle !important;">{{date('Y-m-d')}}</td>

                                    {{--                                <td style="vertical-align: middle !important;">--}}
                                    {{--                                    @if($user->status == 1)--}}
                                    {{--                                      <label class="badge badge-success">Active</label>--}}
                                    {{--                                    @elseif($user->status == 2)--}}
                                    {{--                                      <label class="badge badge-warning">Inactive</label>--}}
                                    {{--                                    @else--}}
                                    {{--                                      <label class="badge badge-danger">Block</label>--}}
                                    {{--                                    @endif--}}
                                    {{--                                </td>--}}

                                    <td style="vertical-align: middle !important;">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal" onclick="edit(this)"
                                           data-id='1' data-name='David Miller'
                                           data-starting_date={{date('Y-m-d')}} data-price='$2000'>
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                 stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                 class="css-i6dzq1">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </a>

                                        <a href="{{ route('admin.subscription-delete', ['id' => '1']) }}">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                 stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                 class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
{{--                            @empty--}}

{{--                            @endforelse--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('admin.subscription.edit')

@section('JS')
    <script>
        function edit(el) {
            var link = $(el)
            var modal = $("#exampleModal")
            var id = link.data('id')
            var name = link.data('name')
            var price = link.data('price')
            var starting_date = link.data('starting_date')

            modal.find('#id').val(id);
            modal.find('#name').val(name);
            modal.find('#price').val(price);
            modal.find('#starting_date').val(starting_date);
        }

    </script>
@endsection
