<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #181a20;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .left-panel {
            flex: 1;
            background: linear-gradient(135deg, #23272f 0%, #181a20 100%);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0 7vw;
            position: relative;
            overflow: hidden;
        }
        .left-panel .company {
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 2rem;
            letter-spacing: 2px;
            color: #b0b8c1;
        }
        .left-panel .welcome {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            opacity: 0.85;
            color: #b0b8c1;
        }
        .left-panel .welcome-back {
            font-size: 2.8rem;
            font-weight: bold;
            margin-bottom: 1.2rem;
            letter-spacing: 2px;
            color: #fff;
        }
        .left-panel .desc {
            font-size: 1rem;
            max-width: 400px;
            opacity: 0.8;
            color: #b0b8c1;
        }
        .left-panel .bg-circles {
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%; z-index: 0;
        }
        .left-panel .content {
            position: relative;
            z-index: 1;
        }
        .right-panel {
            flex: 1;
            background: #181a20;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0 7vw;
        }
        .login-box {
            width: 100%;
            margin: 0 auto;
            background: #23272f;
            border-radius: 14px;
            box-shadow: 0 4px 32px rgba(0,0,0,0.45);
            padding: 2.5rem 1.5rem 2rem 1.5rem; /* reduced left/right padding */
            box-sizing: border-box;
        }
        .login-title {
            color: #fff;
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 0.7rem;
        }
        .login-desc {
            color: #b0b8c1;
            font-size: 0.98rem;
            margin-bottom: 1.5rem;
        }
        .login-box label {
            display: none;
        }
        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: 100%;
            box-sizing: border-box;
            padding: 0.9rem 1rem;
            margin-bottom: 1.1rem;
            border: none;
            border-radius: 6px;
            background: #181a20;
            color: #fff;
            font-size: 1rem;
            outline: none;
            transition: box-shadow 0.2s, background 0.2s;
            /* Remove min-width or max-width if present */
        }
        .login-box input[type="email"]:focus,
        .login-box input[type="password"]:focus {
            box-shadow: 0 0 0 2px #2196f3;
            background: #23272f;
        }
        .login-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }
        .login-options label {
            display: flex;
            align-items: center;
            font-size: 0.97rem;
            color: #2196f3;
            cursor: pointer;
        }
        .login-options input[type="checkbox"] {
            accent-color: #2196f3;
            margin-right: 0.5em;
        }
        .login-options .member-link {
            color: #2196f3;
            text-decoration: none;
            font-size: 0.97rem;
            font-weight: 500;
        }
        .login-box button {
            width: 100%;
            padding: 1rem 0;
            background: #2196f3;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: bold;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .login-box button:hover {
            background: #1769aa;
        }
        .error-message {
            color: #ff6b6b;
            margin-bottom: 1rem;
            text-align: center;
        }
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
            }
            .left-panel, .right-panel {
                flex: none;
                min-height: 40vh;
                padding: 2rem 5vw;
            }
            .login-box {
                max-width: 100%;
                padding: 2rem 1rem 1.5rem 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="right-panel">
            <div class="login-box">
                <div class="login-title">Login Account</div>
                <div class="login-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos
                </div>
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    @if($errors->any())
                        <div class="error-message">
                            {{ $errors->first('login') }}
                        </div>
                    @endif
                    <button type="submit">Login</button>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
