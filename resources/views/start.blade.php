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
        <a href="{{ route('asimit.pay', ['price' => 10, 'currency' => 'AED']) }}"
           class="btn btn-success text-center">
            Pay 10 AED
        </a>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
