  <div class="page">
  <div class="container">
     <?php
            $info = $this->session->flashdata('info');
            if(!empty($info)){
                echo $info;
            }
        ?>
    <div class="con">
      <p class="teks_login"><h2><center><STRONG>Welcome To Poetry Blog</STRONG></center></h2></p>
      <p class="teks_login"><h3><center>Login Page</center></h3></p>
      <form method="POST" action="<?= site_url('Home/ceklogin') ?>">
      <div class="form-group">
        <input  type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
      </div>
      <div class="form-group">
        <input  type="password" name="password" class="form-control" id="password" placeholder="Password">
      </div>
      <center><button type="submit" class="btn btn-primary btn-login" style="width: 60%;, border-radius: 10px; background-color: #c9a632; border:0px;">Login</button></center>
    </form>
    <hr>
    <center>
      <a href="<?= site_url('Home/registration') ?>">Create an account!</a>
    </center>
    </div>
  </div>
</div>  