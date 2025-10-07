<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asimit Payment Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4e54c8;
            --primary-gradient: linear-gradient(to right, #8f94fb, #4e54c8);
            --secondary: #6c757d;
            --success: #198754;
            --light: #f8f9fa;
            --dark: #212529;
            --border-radius: 12px;
            --box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        body {
            background: var(--primary-gradient);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px 0;
            color: #495057;
        }

        .payment-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
        }

        .payment-header {
            background: var(--primary-gradient);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .payment-body {
            padding: 30px;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(78, 84, 200, 0.25);
        }

        .btn-primary {
            background: var(--primary-gradient);
            border: none;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 84, 200, 0.4);
        }

        .info-panel {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 25px;
            height: 100%;
        }

        .security-badge {
            background-color: rgba(25, 135, 84, 0.1);
            border-left: 4px solid var(--success);
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .payment-methods {
            display: flex;
            gap: 10px;
            margin: 15px 0;
        }

        .payment-method {
            background: var(--light);
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            flex: 1;
        }

        .payment-method i {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 8px;
        }

        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }

        .feature-list li:last-child {
            border-bottom: none;
        }

        .feature-list i {
            color: var(--primary);
            margin-right: 10px;
            font-size: 18px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            max-width: 180px;
            margin-bottom: 15px;
        }

        @media (max-width: 992px) {
            .info-panel {
                margin-top: 30px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="payment-card">
                <div class="payment-header">
                    <div class="logo-container">
                        <!-- Replace with your actual logo -->
                        <svg class="logo" viewBox="0 0 500 100" xmlns="http://www.w3.org/2000/svg">
                            <text x="50%" y="50%" font-family="Arial" font-size="40" font-weight="bold" fill="white" text-anchor="middle" dominant-baseline="middle">ASIMIT PAY</text>
                        </svg>
                        <h1 class="h3 fw-bold">Secure Payment Gateway</h1>
                    </div>
                </div>

                <div class="row g-0">
                    <!-- Payment Form -->
                    <div class="col-lg-7">
                        <div class="payment-body">
                            <p class="text-muted mb-4">Complete your payment securely with our encrypted payment system</p>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('payment.create') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="customer_name" class="form-label">Full Name *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="customer_name"
                                            name="customer_info[name]"
                                            value="{{ old('customer_info.name', $formData['customer_info']['name'] ?? '') }}"
                                            required
                                            placeholder="Enter your full name"
                                        >
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="customer_email" class="form-label">Email Address *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="customer_email"
                                            name="customer_info[email]"
                                            value="{{ old('customer_info.email', $formData['customer_info']['email'] ?? '') }}"
                                            required
                                            placeholder="Enter your email address"
                                        >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="mobile_country_code" class="form-label">Country Code *</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="mobile_country_code"
                                                name="customer_info[mobile_country_code]"
                                                value="{{ old('customer_info.mobile_country_code', $formData['customer_info']['mobile_country_code'] ?? '+971') }}"
                                                required
                                                placeholder="+971"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="mobile_number" class="form-label">Mobile Number *</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="mobile_number"
                                                name="customer_info[mobile_number]"
                                                value="{{ old('customer_info.mobile_number', $formData['customer_info']['mobile_number'] ?? '') }}"
                                                required
                                                placeholder="Enter mobile number"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="amount" class="form-label">Amount (AED) *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                                        <input
                                            type="number"
                                            step="0.01"
                                            min="0.01"
                                            class="form-control"
                                            id="amount"
                                            name="transaction_info[amount]"
                                            value="{{ old('transaction_info.amount', $formData['transaction_info']['amount'] ?? $price) }}"

                                            placeholder="Enter amount"
                                        >
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="currency" class="form-label">Currency *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                        <select class="form-select" id="currency" name="transaction_info[currency]">
                                            <option value="AED" {{ (old('transaction_info.currency', $formData['transaction_info']['currency'] ?? 'AED') == 'AED') ? 'selected' : '' }}>{{ $currency }}</option>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 py-3 fw-bold">
                                    <i class="fas fa-lock me-2"></i>Proceed to Secure Payment
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Information Panel -->
                    <div class="col-lg-5">
                        <div class="info-panel">
                            <div class="security-badge">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-shield-alt fa-2x me-3"></i>
                                    <div>
                                        <h4 class="mb-0">Bank-Level Security</h4>
                                        <p class="mb-0">256-bit SSL encryption</p>
                                    </div>
                                </div>
                            </div>

                            <h3 class="h5 fw-bold mb-3">Accepted Payment Methods</h3>
                            <div class="payment-methods">
                                <div class="payment-method">
                                    <i class="fab fa-cc-visa"></i>
                                    <div>Visa</div>
                                </div>
                                <div class="payment-method">
                                    <i class="fab fa-cc-mastercard"></i>
                                    <div>Mastercard</div>
                                </div>
                                <div class="payment-method">
                                    <i class="fab fa-cc-amex"></i>
                                    <div>Amex</div>
                                </div>
                            </div>

                            <h3 class="h5 fw-bold mt-4 mb-3">Why choose Asimit Pay?</h3>
                            <ul class="feature-list">
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <div>
                                        <strong>Instant Processing</strong>
                                        <p class="small mb-0">Real-time payment processing</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <div>
                                        <strong>PCI DSS Compliant</strong>
                                        <p class="small mb-0">Highest security standards</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <div>
                                        <strong>24/7 Support</strong>
                                        <p class="small mb-0">Dedicated customer service</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="mt-4 text-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/187/187132.png" width="70" alt="Secure Payment" class="img-fluid mb-2">
                                <p class="small text-muted mb-0">All transactions are secure and encrypted</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <p class="text-white mb-0">© 2023 Asimit Pay. All rights reserved.</p>
                <p class="small text-white">Terms & Conditions | Privacy Policy</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
