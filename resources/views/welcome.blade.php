<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-form {
    max-width: 300px;
    margin: 0 auto;
}

.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
}

.input-container {
    margin-bottom: 15px;
}

.input-container label {
    display: block;
    margin-bottom: 5px;
}

.input-container input {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body>
    <form class="login-form" method="POST" action="{{route('login')}}">
        <h2>Iniciar Sesión</h2>
        <div class="input-container">
            <label for="username">Usuario o Correo Electrónico:</label>
            <input type="text" id="username" name="username" placeholder="Ingresa tu usuario o correo">
        </div>
        <div class="input-container">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña">
        </div>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>