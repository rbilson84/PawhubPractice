<?php

require_once 'partials/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>

        .logo-img {
    width: 180px;
    height:auto;
    display: block;
    margin: 0 auto;
    transition: transform 0.3s ease;
    align-items: center;
}

.logo-img:hover {
    transform: scale(1.05);
}
        /* Custom fade-in animation (reused from login page) */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px); /* Optional: slight slide-down effect */
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Apply the animation to an element */
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm animate-fade-in">
        <img src="/Rachel/Pawhub/images/logo3.png" alt="Pawhub Logo" class="logo-img"></a>
        <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">Forgot Password?</h2>
        <p class="text-center text-gray-600 mb-6 text-sm">
            Enter your email address below and we'll send you a link to reset your password.
        </p>
        <form action="#" method="POST">
            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="your@example.com"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500"
                    required
                >
            </div>
            <div class="flex items-center justify-between">
                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                >
                    Send Reset Link
                </button>
            </div>
        </form>
        <div class="text-center mt-6">
            <a href="/Rachel/Pawhub/login.php" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                Back to Login
            </a>
        </div>
    </div>
</body>
</html>