@extends('admin.layout')

@section('title', 'View All')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h3>Teachers</h3>
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
                                <th>Role</th>
                                <th>Image</th>
                                {{--                                <th>Status</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php
                                $count = 1;

                            @endphp

                            @forelse ( $users as $user )
                                <tr>
                                    <td style="vertical-align: middle !important;">{{ $count++ }}</td>
                                    <td style="vertical-align: middle !important;">{{ucfirst($user->first_name)}} {{ ucfirst($user->last_name) }}</td>
                                    <td style="vertical-align: middle !important;">{{ $user->email }}</td>
                                    @if($user->role == 2)
                                        <td style="vertical-align: middle !important;">Teachers</td>
                                    @endif

                                    <td style="vertical-align: middle !important;">
                                        @if(!empty($user->image))
                                            {{ $user->image }}
                                        @else
                                            <img src="{{asset('files/images//do_not_delete/do_not_delete.png')}}" width="50" alt="no image">
                                        @endif
                                    </td>

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
                                        <a href="#" data-toggle="modal" data-target="#exampleModal" onclick="exampleModal()"
                                           data-id="{{$user->id}}" data-first_name="{{$user->first_name}}"
                                        data-last_name="{{$user->last_name}}" data-email="{{$user->email}}"
                                        data-role="{{$user->role}}" data-image="{{$user->image}}" >
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                 stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                 class="css-i6dzq1">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>

                                        </a>

                                        <a href="#">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                 stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                 class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>

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
@endsection

@include('admin.teachers.edit')


<script>
    function exampleModal(e) {
        // $('#exampleModal').on('show', function(e) {
             var link = $(e)
             modal = $('#exampleModal')
             var id = link.data('id')
             var first_name = link.data('first_name')
             var last_name = link.data('last_name')
             var email = link.data('email')
             var role = link.data('role')
             var image = link.data('image')

            modal.find('#first_name').val(first_name);
            modal.find('#last_name').val(last_name);
            modal.find('#email').val(email);
            modal.find('#role').val(role);
            modal.find('#image').val(image);
        // });
    }
</script>
