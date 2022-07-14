@if (session()->has('success'))
    <div class="alert alert-success border-success" style="font-size: 20px; margin-top: 15px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled"></i>
        </button>
        <strong>Success!</strong>&nbsp;{{ session()->get('success') }}
    </div>

@elseif (session()->has('error'))
    <div class="alert alert-danger border-danger" style="font-size: 20px; margin-top: 15px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled"></i>
        </button>
        <strong>Error!</strong>&nbsp;{{ session()->get('error') }}
    </div>

@elseif (session()->has('warning'))
    <div class="alert alert-warning border-warning" style="font-size: 20px; margin-top: 15px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled"></i>
            </button>
            <strong>Warning!</strong>&nbsp;{{ session()->get('warning') }}
    </div>
@endif


