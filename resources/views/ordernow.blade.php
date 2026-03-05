@extends('master')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <h3>Order Summary</h3>
            <table class="table table-striped mt-3">
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td>₹{{ $total }}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>₹0</td>
                    </tr>
                    <tr>
                        <td>Delivery charge</td>
                        <td>₹100</td>
                    </tr>
                    <tr>
                        <td><strong>Total Amount</strong></td>
                        <td><strong>₹{{ $total + 100 }}</strong></td>
                    </tr>
                </tbody>
            </table>

            <form method="POST" action="{{ url('orderplace') }}">
                @csrf
                <div class="mb-3 mt-3">
                    <textarea class="form-control" placeholder="Enter your address" name="address" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Payment Method:</label>
                    <div class="form-check">
                        <input type="radio" name="payment" class="form-check-input" value="online" id="online" required>
                        <label class="form-check-label" for="online">Online Payment</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="payment" class="form-check-input" value="emi" id="emi">
                        <label class="form-check-label" for="emi">EMI Payment</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="payment" class="form-check-input" value="cod" id="cod">
                        <label class="form-check-label" for="cod">Payment on Delivery</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection