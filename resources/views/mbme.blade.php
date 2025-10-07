<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #333;
            line-height: 1.6;
            padding: 20px;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 25px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #4a4a4a;
            margin-bottom: 10px;
            font-size: 2.2rem;
        }

        .subtitle {
            color: #6c757d;
            font-size: 1.2rem;
            font-weight: 400;
        }

        .content-wrapper {
            display: flex;
            gap: 30px;
            margin-bottom: 30px;
        }

        .left-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .right-panel {
            flex: 1;
        }

        .info-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .card-header i {
            font-size: 1.5rem;
            color: #844693;
            margin-right: 12px;
        }

        .card-header h2 {
            color: #4a4a4a;
            font-size: 1.5rem;
        }

        .param-values {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .param-card {
            background: #f9f9ff;
            padding: 18px;
            border-radius: 10px;
            border-left: 4px solid #844693;
            transition: transform 0.2s;
        }

        .param-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        .param-name {
            font-weight: 600;
            color: #844693;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        .param-name i {
            margin-right: 8px;
            font-size: 0.9rem;
        }

        .param-value {
            word-break: break-all;
            color: #555;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .payment-container {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        #payment-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px dashed #e0e0e0;
            border-radius: 12px;
            padding: 20px;
            margin-top: 20px;
            background: #fcfcff;
            min-height: 400px;
        }

        #error-message {
            color: #dc3545;
            margin-top: 15px;
            padding: 12px 15px;
            background: #f8d7da;
            border-radius: 8px;
            display: none;
            font-weight: 500;
        }

        .security-note {
            background: #e9f7fe;
            padding: 20px;
            border-radius: 12px;
            margin-top: 20px;
            border-left: 4px solid #3b91e6;
        }

        .security-note h3 {
            color: #3b91e6;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .security-note h3 i {
            margin-right: 10px;
        }

        .security-note p {
            color: #3b6db3;
            line-height: 1.5;
        }

        .payment-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .payment-methods {
            display: flex;
            gap: 15px;
        }

        .payment-method {
            font-size: 1.8rem;
            color: #6c757d;
        }

        @media (max-width: 992px) {
            .content-wrapper {
                flex-direction: column;
            }

            .left-panel, .right-panel {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .param-values {
                grid-template-columns: 1fr;
            }

            .card-header h2 {
                font-size: 1.3rem;
            }

            h1 {
                font-size: 1.8rem;
            }
        }

        .loading {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #844693;
        }

        .loading-spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #844693;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin-bottom: 15px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>Secure Payment Checkout</h1>
        <p class="subtitle">Complete your transaction safely and securely</p>
    </header>

    <div class="content-wrapper">
        <div class="left-panel">
            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-info-circle"></i>
                    <h2>Transaction Details</h2>
                </div>
                <div class="param-values">
                    <div class="param-card">
                        <div class="param-name">
                            <i class="fas fa-receipt"></i>
                            Order ID
                        </div>
                        <input type="hidden" id="oid" value="{{ $oid }}">
                        <div class="param-value" id="url-oid">Not Provided</div>
                    </div>
                    <div class="param-card">
                        <div class="param-name">
                            <i class="fas fa-user"></i>
                            User ID
                        </div>
                        <input type="hidden" id="uid" value="{{ $uid }}">
                        <div class="param-value" id="url-uid">Not Provided</div>
                    </div>
                    <div class="param-card">
                        <div class="param-name">
                            <i class="fas fa-clock"></i>
                            Timestamp
                        </div>
                        <div class="param-value" id="url-timestamp">Not provided</div>
                    </div>
                </div>
            </div>

            <div class="security-note">
                <h3><i class="fas fa-shield-alt"></i> Secure Transaction</h3>
                <p>Your payment information is encrypted and processed securely. We do not store your credit card details.</p>
            </div>

            <div class="payment-info">
                <div>
                    <h3>Accepted Payment Methods</h3>
                </div>
                <div class="payment-methods">
                    <i class="fab fa-cc-visa payment-method"></i>
                    <i class="fab fa-cc-mastercard payment-method"></i>
                    <i class="fab fa-cc-amex payment-method"></i>
                    <i class="fab fa-cc-paypal payment-method"></i>
                </div>
            </div>
        </div>

        <div class="right-panel">
            <div class="info-card payment-container">
                <div class="card-header">
                    <i class="fas fa-credit-card"></i>
                    <h2>Payment Information</h2>
                </div>
                <p>Please enter your payment details to complete the transaction</p>

                <div id="payment-container">
                    <div class="loading">
                        <div class="loading-spinner"></div>
                       
                    </div>
                </div>
                <div id="error-message"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://pgapi.mbme.org/scripts/payment_handler.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Extract parameters (using mock values for demonstration)
        const urlParams = new URLSearchParams(window.location.search);
        const oid =  document.getElementById("oid").value;
        const uid =  document.getElementById("uid").value;
        const timestamp = new Date().toISOString();

        const errorElement = document.getElementById("error-message");

        console.log("OID:", oid, "UID:", uid, "Timestamp:", timestamp);

        // Display values
        document.getElementById("url-oid").textContent = oid;
        document.getElementById("url-uid").textContent = uid;
        document.getElementById("url-timestamp").textContent = timestamp;

        errorElement.textContent = "";

        if (!oid) {
            errorElement.textContent = "Please provide Order ID";
            errorElement.style.display = "block";
            return;
        }

        if (!uid) {
            errorElement.textContent = "Please provide User ID";
            errorElement.style.display = "block";
            return;
        }

        try {
            const payment = new SecurePayment({
                elementId: "payment-container",
                oid: oid,
                uid: uid,
                baseUrl: "https://pgapi.mbme.org",
                timestamp: timestamp,
                styles: {
                    container: {
                        backgroundColor: "#ffffff",
                        borderRadius: "12px",
                        boxShadow: "0 2px 10px rgba(0,0,0,0.08)",
                        padding: "25px",
                        width: "100%",
                        margin: "0 auto",
                    },
                    title: {
                        fontSize: "22px",
                        fontWeight: "600",
                        color: "#844693",
                        marginBottom: "15px",
                    },
                    subtitle: {
                        fontSize: "15px",
                        color: "#6a3776",
                        marginBottom: "25px",
                    },
                    input: {
                        height: "44px",
                        padding: "0 15px",
                        fontSize: "16px",
                        borderWidth: "1px",
                        borderStyle: "solid",
                        borderColor: "#dddddd",
                        borderRadius: "8px",
                        backgroundColor: "#ffffff",
                        color: "#333333",
                        marginBottom: "12px",
                        transition: "all 0.2s ease",
                    },
                    label: {
                        fontSize: "15px",
                        color: "#844693",
                        fontWeight: "500",
                        marginBottom: "8px",
                    },
                    button: {
                        height: "48px",
                        backgroundColor: "#844693",
                        color: "#ffffff",
                        fontSize: "16px",
                        fontWeight: "600",
                        borderRadius: "8px",
                        padding: "0 20px",
                        width: "100%",
                        marginTop: "20px",
                        cursor: "pointer",
                        transition: "background-color 0.2s ease",
                    },
                },
            });

            payment.initialize().catch((error) => {
                console.error("Payment initialization failed:", error);
                errorElement.textContent =
                    "Payment initialization failed: " + (error.message || error);
                errorElement.style.display = "block";
            });
        } catch (error) {
            console.error("Error creating payment instance:", error);
            errorElement.textContent = "Error: " + (error.message || error);
            errorElement.style.display = "block";
        }
    });
</script>
</body>
</html>
