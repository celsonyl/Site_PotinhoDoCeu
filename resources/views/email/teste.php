<!DOCTYPE html>
<html>
<head>
    <title>Confirme seu endereço de e-mail</title>
</head>

<style>
  .btn{
    background-color:rgb(51, 40, 8);
    padding: 12px;
    color:white;
    border-radius: 2px;
    text-transform:uppercase;
    text-decoration: none;
    font-size: 15px;
  }
</style>

<body style="background-image: linear-gradient(0deg, #E6E6F5, white);background-repeat: no-repeat;background-attachment: fixed; font-family: Roboto, sans-serif;">
<div style="background-color: rgb(51, 40, 8); margin:0;padding:0;">
  <p align="center" style="color: white;">LOGO CARALHO</p>
</div>

<div align="center" class="container">
  <h1 style="font-weight: 1;">Confirme seu endereço de e-mail</h1>
  <p align="justify" style="max-width:450px;color:rgb(51, 40, 8);padding-bottom:30px;">Olá, vimos que você é um usuário da Marcenaria,
    por favor confirme seu endereço de e-mail, assim saberemos que você é o titular legítimo desta conta.</p>
  <a class="btn" href="localhost:8000/confirmarEmail/?token={{$link}}&id={{$id}}" target="_blank">
    Confirmar meu e-mail
  </a>
</div>







</body>

</html>
