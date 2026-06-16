<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalist Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap">
    <!-- <link rel="stylesheet" href="style.css"> -->
     <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: #e7edf5;
    font-family: Arial, sans-serif;
    margin: 0;
}
.container {
    width: 100%;
    max-width: 420px;
    background: white;
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}
.logo {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 2rem;
}

.logo-img {
    width: 180px;
    height:auto;
    display: block;
    transition: transform 0.3s ease;
}

.logo-img hover {
    transform: scale(1.05);
}
.input-group {
    margin-bottom: 15px;
}
.input-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
    font-weight: 600;
    color: #333;
    text-align: left;
}
.input-group input {
    width: 100%;
    padding: 0.9rem;
    border: 1px solid #d1d5db;
    border-radius: 12px;
    outline: none;
    box-sizing: border-box;
    font-size: 1rem;
}

.input-group input:focus {
    border-color: #38A3A5;
}

.login-btn {
    display: block;
    width: 100%;
    padding: 1rem;
    background: #2c3e73;
    color: white;
    text-align: center;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    margin-top: 1rem;
    box-sizing: border-box;
    transition: background 0.3s ease;
}
.login-btn:hover {
    background: #2d8a8c;
}
.footer {
    margin-top: 1.5rem; 
    display: flex;
    justify-content: space-between;
}
.footer a {
    text-decoration: none;
    color: #38A3A5;
    font-size: 0.9rem;
}
.footer a:hover {
    text-decoration: underline;
    
}
     </style>
     
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="/Rachel/Pawhub/index.php" class="group flex items-center gap-5">
        <img src="/Rachel/Pawhub/images/logo3.png" alt="Pawhub Logo" class="h-24 w-auto group-hover:scale-110 transition duration-300"></a>
        </div>
        <div class="input-group">
            <label>Email Address</label>
            <input type="email" placeholder="Username@gmail.com">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="●●●●●●●●●●●●●●●●●●●●●●●●●●">
        </div>
        <a href="#" class="login-btn">Login</a>
        <div class="footer">
            <a href="#">Register</a>
            <a href="#">Forgot Password?</a>
        </div>
    </div>
</body>
</html>