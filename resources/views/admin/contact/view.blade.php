@extends('admin.layout')

@section('title', 'View Request')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Request</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <p><strong>Name:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <p>{{ ucfirst($request->name) }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <p><strong>Email:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <p>{{ $request->email }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <p><strong>Subject:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <p>{{ $request->subject }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <p><strong>Message:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <p>{!! $request->pctextarea !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
