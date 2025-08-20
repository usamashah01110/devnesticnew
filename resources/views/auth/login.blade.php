<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Portal | Secure Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --gold-primary: #E89922;
            --gold-secondary: #FFD700;
            --gold-light: #F5E9BC;
            --gold-dark: #B8860B;
            /* --cream-bg: #F1F7FC; */
            /* --cream-card: #F1F7FC; */
            --text-dark: #5C3A00;
            --text-muted: #8E6C3A;
            --shadow: 0 10px 30px rgba(180, 140, 40, 0.15);
        }

        body {
            background: linear-gradient(135deg, var(--cream-bg) 0%, #FEF9E7 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: var(--text-dark);
        }

        .container {
            width: 100%;
            max-width: 440px;
        }

        .auth-card {
            /* background: var(--cream-card); */
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            position: relative;
        }

        .auth-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
        }

        .auth-content {
            padding: 40px;
        }

        .brand-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-logo img {
            max-height: 100px;
            /* filter: drop-shadow(0 5px 10px rgba(180, 140, 40, 0.2)); */
        }

        h4 {
            color: var(--gold-dark);
            font-weight: 600;
            margin-bottom: 10px;
            text-align: center;
        }

        .subtitle {
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 35px;
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-control {
            width: 100%;
            background: rgba(255, 255, 255, 0.7);
            border: 2px solid var(--gold-light);
            color: var(--text-dark);
            padding: 16px 20px;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
        }

        .form-control::placeholder {
            color: var(--text-muted);
            opacity: 0.7;
        }

        .btn-login {
            background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-dark) 100%);
            color: white;
            border: none;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 16px;
            border-radius: 10px;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(180, 140, 40, 0.25);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(180, 140, 40, 0.35);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }

        .remember {
            display: flex;
            align-items: center;
        }

        .remember input {
            margin-right: 8px;
            accent-color: var(--gold-primary);
        }

        .forgot-link {
            color: var(--gold-dark);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: var(--gold-primary);
            text-decoration: underline;
        }

        .register-link {
            text-align: center;
            margin-top: 30px;
            color: var(--text-muted);
        }

        .register-link a {
            color: var(--gold-dark);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .register-link a:hover {
            color: var(--gold-primary);
            text-decoration: underline;
        }

        .copyright {
            text-align: center;
            margin-top: 40px;
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        @media (max-width: 576px) {
            .auth-content {
                padding: 30px 25px;
            }

            .form-options {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            cursor: pointer;
            user-select: none;
        }
        
        .error-message {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
        
        .form-group.error .form-control {
            border-color: #e74c3c;
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
            display: none;
            margin-left: 10px;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="auth-card">
            <div class="auth-content">
                <div class="brand-logo">
                    <img src="{{asset('logo2.jpg') }}" alt="Company Logo">
                </div>
                <h4>Welcome Back</h4>

                <form method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf
                    <div class="form-group" id="emailGroup">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address" required autofocus id="emailInput">
                        <div class="error-message" id="emailError"></div>
                    </div>
                    <div class="form-group password-container" id="passwordGroup">
                        <input type="password" name="password" class="form-control" placeholder="Password" required id="passwordInput">
                        <span class="toggle-password" id="togglePassword">👁️</span>
                        <div class="error-message" id="passwordError"></div>
                    </div>
                    <button type="submit" class="btn-login" id="submitButton">
                        SIGN IN <span class="loading" id="loadingIndicator"></span>
                    </button>

                    <div class="form-options">
                        <label class="remember">
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                        @if (Route::has('password.request'))
                            <a class="forgot-link" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="register-link">
                        Don't have an account? <a href="{{ route('register') }}">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('passwordInput');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.textContent = '🔒';
            } else {
                passwordInput.type = 'password';
                this.textContent = '👁️';
            }
        });

        // Form validation and submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset error states
            document.getElementById('emailGroup').classList.remove('error');
            document.getElementById('passwordGroup').classList.remove('error');
            document.getElementById('emailError').style.display = 'none';
            document.getElementById('passwordError').style.display = 'none';
            
            const email = document.getElementById('emailInput').value;
            const password = document.getElementById('passwordInput').value;
            let isValid = true;
            
            // Validate email
            if (!email) {
                document.getElementById('emailGroup').classList.add('error');
                document.getElementById('emailError').textContent = 'Email is required';
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            } else if (!/\S+@\S+\.\S+/.test(email)) {
                document.getElementById('emailGroup').classList.add('error');
                document.getElementById('emailError').textContent = 'Please enter a valid email address';
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            }
            
            // Validate password
            if (!password) {
                document.getElementById('passwordGroup').classList.add('error');
                document.getElementById('passwordError').textContent = 'Password is required';
                document.getElementById('passwordError').style.display = 'block';
                isValid = false;
            }
            
            if (isValid) {
                // Show loading indicator
                document.getElementById('loadingIndicator').style.display = 'inline-block';
                document.getElementById('submitButton').disabled = true;
                
                // Submit the form after a brief delay to show the loading state
                setTimeout(() => {
                    this.submit();
                }, 1000);
            }
        });
    </script>
</body>
</html>