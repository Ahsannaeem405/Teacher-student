<div class="modal fade" id="exampleModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="text-align: start;">
                        <h4 class="modal-title" id="exampleModalLabel">WITHDRAW PAYMENT</h4>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <form action="{{ route('admin.payment-withdraw') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="paypal_email" style="color: #585858"><strong>Paypal Email</strong></label>
                        <input type="text" name="paypal_email" id="paypal_email"
                               class="form-control @error('paypal_email') is-invalid @enderror"
                               autocomplete="paypal_email" autofocus required>
                                @error('paypal_email')
                                <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="withdraw_amount" style="color: #585858"><strong>WithDraw Amount</strong></label>
                            <input type="text" name="withdraw_amount" id="withdraw_amount"
                                   class="form-control @error('withdraw_amount') is-invalid @enderror"
                                   autocomplete="withdraw_amount" autofocus required>
                        @error('withdraw_amount')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
