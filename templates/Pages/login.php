<?php
/**
 * @var \App\View\AppView $this
 */
$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #0c0f1d;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* Animated Glowing Blobs */
        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            filter: blur(130px);
            z-index: 1;
            opacity: 0.4;
            animation: float 20s infinite alternate;
        }

        .blob-1 {
            background: linear-gradient(135deg, #ff007f 0%, #7f00ff 100%);
            top: -10%;
            left: -10%;
        }

        .blob-2 {
            background: linear-gradient(135deg, #00f0ff 0%, #0072ff 100%);
            bottom: -10%;
            right: -10%;
            animation-delay: -10s;
        }

        @keyframes float {
            0% {
                transform: translate(0px, 0px) scale(1);
            }
            50% {
                transform: translate(50px, 80px) scale(1.1);
            }
            100% {
                transform: translate(-30px, -50px) scale(0.9);
            }
        }

        /* Glassmorphic Container */
        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 440px;
            padding: 40px;
            margin: 20px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.35);
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-area {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo-area h1 {
            font-size: 32px;
            font-weight: 700;
            background: linear-gradient(to right, #00f0ff, #ff007f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
            margin-bottom: 8px;
        }

        .logo-area p {
            color: #8c92ac;
            font-size: 14px;
            font-weight: 300;
        }

        /* Form Styling */
        .form-group {
            position: relative;
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            color: #d1d5db;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 8px;
            margin-left: 4px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
            font-size: 16px;
            transition: color 0.3s;
        }

        .input-wrapper input {
            width: 100%;
            padding: 14px 16px 14px 48px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: #fff;
            font-size: 14px;
            font-weight: 400;
            outline: none;
            transition: all 0.3s;
        }

        .input-wrapper input::placeholder {
            color: #6b7280;
        }

        .input-wrapper input:focus {
            border-color: #00f0ff;
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 15px rgba(0, 240, 255, 0.2);
        }

        .input-wrapper input:focus + i {
            color: #00f0ff;
        }

        /* Button Styling */
        .submit-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #00f0ff 0%, #0072ff 100%);
            border: none;
            border-radius: 12px;
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0, 114, 255, 0.3);
            margin-top: 10px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 240, 255, 0.4);
            background: linear-gradient(135deg, #00f0ff 0%, #00cdff 100%);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Custom Alert / Flash Notification */
        .alert-box {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: #ef4444;
            padding: 12px 16px;
            border-radius: 12px;
            font-size: 13px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-box i {
            font-size: 16px;
        }

        /* Custom styling for flash message generated by CakePHP */
        .message {
            background: rgba(239, 68, 68, 0.15) !important;
            border: 1px solid rgba(239, 68, 68, 0.3) !important;
            color: #fca5a5 !important;
            padding: 12px 16px !important;
            border-radius: 12px !important;
            font-size: 13px !important;
            margin-bottom: 24px !important;
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>

    <div class="login-container">
        <div class="logo-area">
            <h1>Strawberry Cake</h1>
            <p>Welcome back! Please enter your details.</p>
        </div>

        <!-- Render Flash Messages -->
        <?= $this->Flash->render() ?>

        <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'login']]) ?>
            <div class="form-group">
                <label for="email">Email Address</label>
                <div class="input-wrapper">
                    <i class="fa-regular fa-envelope"></i>
                    <?= $this->Form->email('email', [
                        'id' => 'email',
                        'placeholder' => 'yourname@example.com',
                        'required' => true,
                        'autocomplete' => 'email'
                    ]) ?>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock"></i>
                    <?= $this->Form->password('password', [
                        'id' => 'password',
                        'placeholder' => '••••••••',
                        'required' => true,
                        'autocomplete' => 'current-password'
                    ]) ?>
                </div>
            </div>

            <button type="submit" class="submit-btn">Sign In</button>
        <?= $this->Form->end() ?>
    </div>
</body>
</html>
