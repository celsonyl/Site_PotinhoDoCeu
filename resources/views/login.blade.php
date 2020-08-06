@extends('layout.site')
@section('titulo','Login')




@section('conteudo')


    <div style="margin: 0;" class="row">

      <div class="col s0 m5 l5 login-fundo-logo">

        <img style="height: 25vw;" src="https://images-platform.99static.com/hLg63ujt6c9Mw_0_l5yAQGrNIIg=/437x87:1623x1273/500x500/top/smart/99designs-contests-attachments/67/67981/attachment_67981533" alt="logo">

      </div>





    <div class="col s12 m6 l6 form-center-login">

      <img class="login-logo-mobile" src="img/fotos-logo/logo-escrita.png" alt="logo">

      <form class="form-login" action="{{ route('site.login.entrar')}}" method="post">



        <h3>Entrar</h3>

        {{ csrf_field() }}


        <div class="input-field">
          <input type="text" name="email" id="email">
          <label for="ra">Email</label>
        </div>

        <div class="input-field">
          <input type="password" name="password" id="senha">
          <label for="senha">Senha</label>
        </div>
        @if($errors->any())
                    E-mail ou senha incorreto!
                    <br>

        @endif
        <div class="left">
          <label class="form-group ">
            <input type="checkbox" name="rememberMe"/>
            <span>Lembrar meus dados<br></span>
          </label>
        </div>



        <div style="padding-top:40px;" class="">

          <label class="label-agree-term left">
            <a class="font-esqueci-senha" href="{{ url('/forgotPassword') }}"><h6>Esqueceu a senha?</h6></a>
          </label>

          <button class="waves-effect waves-light btn indigo lighten-2 right">Entrar</button>

        </div>

      </form>
    </div>
  </div>

@endsection
