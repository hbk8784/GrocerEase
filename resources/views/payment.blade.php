<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/nav-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Payment Form</title>
</head>

<body>
    <div class="container">
        <header>
            @include('component.nav-bar')
        </header>
        <h1 class="payment-amount">Total Amount: $100.00</h1>

        <div class="payment-container">
            <form class="payment-form" action="/process-payment" method="post">
                @csrf

                <label for="payment_method">Select Payment Method:</label>
                <select name="payment_method" id="payment_method">
                    <option value="credit_card">- Please Select -</option>
                    <option value="credit_card">Internet Banking</option>
                    <option value="paypal">Credit/Debit Card</option>
                    <option value="bank_transfer">Cash</option>
                    <option value="cash">PayPal</option>
                </select>
                <button type="submit">Pay</button>
            </form>
        </div>
        <footer>
            @include('component.footer-1')
            @include('component.footer-2')
        </footer>
    </div>


</body>

</html>
