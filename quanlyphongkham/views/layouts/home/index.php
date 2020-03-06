<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link  rel="stylesheet" href="style.css">

</head>
<body class="bg-light">

  <div class="col-md-3 col-6 shadow khung-login px-0" style="min-height:80vh;">
    <!--login-->
    <div class="login py-5 text-center bg-light" id="login">
      <h5 class="my-5">Đăng Nhập</h5>
      <form method="POST">
      <p class=" text-center px-5">
        <input type="text" name="name" placeholder="Tên đặng nhập" class="py-3 px-3" autocomplete="off">
      </p>
      <p class=" text-center px-5">
        <input type="text" name="password" placeholder="Mật khẩu" class="py-3 px-3"  autocomplete="off">
      </p>
      <p class=" text-center px-5 pt-5">
        <button class="px-5 py-2" name="login">Đăng Nhập</button>
      </p>
    </form>
      <p class=" text-center px-5 pt-5">
        <small class="">Quên mật khẩu ? <span id="btn-reg" style="cursor:pointer">Đăng ký</span></small>
      </p>

    </div>
    <!--rêg-->
  
  <div class="login py-5 text-center" id="reg" style="display: none;">
      <h5 class="my-5">Đăng Ký</h5>
      <form method="POST">
      <p class=" text-center px-5">
        <input type="text" name="name" placeholder="Tên Đăng Nhập" class="py-3 px-3">
      </p>
      <p class=" text-center px-5">
        <input type="text" name="" placeholder="Password" class="py-3 px-3">
      </p>
      <p class=" text-center px-5 pt-5">
        <button class="px-5 py-2">Đăng Ký</button>
      </p>
    </form>
      <p class=" text-center px-5 pt-5">
        <small class="">Đã có tài khoản, <span id="btn-login"  style="cursor:pointer">Đăng Nhập</span></small>
      </p>

    </div>

  </div>
  

<?php 

  if(isset($return)&&($return==0))
  {
   echo '<div class="alert alert-danger alert-dismissible col-6 col-md-3 thongbao">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Xin lỗi!</strong> 
  Sai tên đăng nhập hoặc mật khẩu
</div>';
  }

 ?>

</body>
</html>
<script type="text/javascript">
  $('#btn-reg').click(function(){
    $('.login').hide();
    $('#reg').show();
});
    $('#btn-login').click(function(){
    $('.login').hide();
    $('#login').show();
});
</script>
<style type="text/css">
  
@import url('https://fonts.googleapis.com/css?family=Quicksand&display=swap');
.khung-login
{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: 'Quicksand', sans-serif;
}
.khung-login .login input[type="text"]{
  border-width: 0px;
  border-bottom: 1px solid #efefef!important;
  background-color: transparent;
}
.khung-login .login button{
  
  border:1px solid #efefef ;
  border-radius:20px;
  background-color: transparent;
  transition: 0.3s;
  overflow: hidden;
}
.khung-login .login
{
  position: relative;

  animation-name: op;
  animation-duration: 1s;
}
.khung-login .login:before
{
  position: absolute;
  top: 0;
  left: 0;
  content: '';
  width:100%;
  height: 100%;
  background-color: #76D7C4;
  clip-path: circle(0% at 49% 1%);

  animation-name: example;
  animation-duration: 2s;


  transition: 0.3s;
}
.khung-login .login:before:hover
{
clip-path: circle(0% at 100% 2%);

}
.thongbao
{
  position: fixed;
  top: 30%;
  right: 0;
  animation-name: thongbao;
  animation-duration: 1s;

}
@keyframes example {
  0%   {clip-path: circle(1.1% at 49% 1%);}
  20%{clip-path: circle(70.7% at 50% 50%);

}
50%{clip-path: circle(50% at 50% 100%);
}
60%{clip-path: circle(6.9% at 49% 92%);
}
80%{clip-path: circle(8.1% at 51% 74%);
  opacity: 1;
}


  100% {clip-path: circle(0% at 51% 100%);
  opacity: 0;
  }
}

@keyframes op {
  0%   {opacity: 0;}
  100%{opacity: 1;}
}

@keyframes thongbao {
  0%   {right: -100%;}
  100%{right: 0;}
}




</style>