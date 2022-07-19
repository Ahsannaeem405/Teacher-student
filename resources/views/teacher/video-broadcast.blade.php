<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Lecture</title>


</head>
<body>

    <div class="container-fluid" style="margin-bottom: 50%;">
        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">COURSE DETAILS</span></h3>
            </div>
        </div>

        @if ($type === 'broadcaster')
            <broadcaster :auth_user_id="{{ $id }}" env="{{ env('APP_ENV') }}"
                         turn_url="{{ env('TURN_SERVER_URL') }}" turn_username="{{ env('TURN_SERVER_USERNAME') }}"
                         turn_credential="{{ env('TURN_SERVER_CREDENTIAL') }}" />

        @else
            <viewer stream_id="{{ $streamId }}" :auth_user_id="{{ $id }}"
                    turn_url="{{ env('TURN_SERVER_URL') }}" turn_username="{{ env('TURN_SERVER_USERNAME') }}"
                    turn_credential="{{ env('TURN_SERVER_CREDENTIAL') }}" />
        @endif
    </div>

</body>
</html>
