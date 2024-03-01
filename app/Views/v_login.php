<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Foto</title>
<style>
  body, html {
    background-color: #333;
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container {
    width: 80%;
    overflow: hidden;
    display: flex;
    border-radius: 10px;
  }

  .left-div, .right-div {
    width: 50%;
    height: 40vh;
    box-sizing: border-box;
    font-family: monospace;
    font-size: 15px;
    color: black;
  }

  input[type="text"],
  input[type="password"],
  button {
    width: 100%;
    padding: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    background-color: #54abf3;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
  }

  button {
    border-radius: 0%;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #0056b3;
  }

  .left-div {
    background-color: #b5b5b5;
    padding: 20px;
  }

  .right-div {
    background-color: #54abf3;
    padding: 20px;
  }
</style>
</head>
<body>

<div class="container">
  <div class="left-div">
    <center>
        <h2>Selamat Datang!</h2>
        <p>Silahkan Buat Akun Anda</p>
        <button>Sign Up</button>
    </center>
  </div>
  <div class="right-div">
    <center>
        <h2>Silahkan Login!</h2>
        <form action="<?php base_url()?>/Home/proses_login" method="post" autocomplete="off">
            <input type="text" name="a" id="" placeholder="Username">
            <input type="password" name="b" id="" placeholder="Password">
            <button type="submit" name="submit">Sign In</button>
        </form>
    </center>
  </div>
</div>

</body>
</html>
