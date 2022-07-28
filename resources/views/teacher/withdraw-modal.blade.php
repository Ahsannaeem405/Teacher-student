<div class="modal fade" id="exampleModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="text-align: start;">
                        <h4 class="modal-title" id="exampleModalLabel">WITHDRAW PAYMENT</h4>
                    </div>
                </div>

{{--                <div class="row">--}}
{{--                    <div class="col-lg-12 col-md-12" style="text-align: end;">--}}
{{--                        <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="modal-body">
                <form action="{{ route('teacher.withdraw-payment') }}" method="POST">
                    @csrf
                    <div class="row" style="margin-bottom: 5%; margin-top: 5%">
                        <div class="col-lg-5 col-md-5">
                            <h4 style="color: #585858"><strong>Current Balance:</strong></h4>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <h4>
                                <strong>{{ '$'. (!empty(auth()->user()->balance) ? auth()->user()->balance : '0' )  }}</strong>
                            </h4>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="paypal_email" style="color: #585858"><strong>Paypal Email</strong></label>
                        @if((empty(auth()->user()->balance)))
                            <input type="text" id="paypal_email" class="form-control" disabled>
                        @else
                            <input type="text" name="paypal_email" id="paypal_email"
                                   class="form-control @error('paypal_email') is-invalid @enderror"
                                   autocomplete="paypal_email" autofocus required>
                        @endif
                        @error('paypal_email')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="withdraw_amount" style="color: #585858"><strong>WithDraw Amount</strong></label>
                        @if((empty(auth()->user()->balance)))
                            <input type="text" id="withdraw_amount" class="form-control" disabled>
                        @else
                            <input type="text" name="withdraw_amount" id="withdraw_amount"
                                   class="form-control @error('withdraw_amount') is-invalid @enderror"
                                   autocomplete="withdraw_amount" autofocus required>
                        @endif
                        @error('withdraw_amount')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit"  class="btn" style="background: #C8C97D; color: white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
