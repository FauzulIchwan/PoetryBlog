<div class="page">
  <div class="container">
    <div class="con">
      <p class="teks_login"><h2><center><STRONG>Welcome To Poetry Blog</STRONG></center></h2></p>
      <p class="teks_login"><h3><center>Create an account</center></h3></p>
     <form name="formregis" method="post" action="<?= site_url('Home/cekregistration') ?>">
      <div class="form-group">
        <label>Full Name : </label>
        <input  type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"  value="<?=set_value('name') ?>">
        <small class="text-danger"><?=form_error('name') ?></small>
      </div>
      <div class="form-group">
         <label>Username : </label>
        <input  type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp"  value="<?=set_value('username') ?>">
        <small class="text-danger"><?=form_error('username') ?></small>
      </div>
      <div class="form-group">
         <label>Email : </label>
        <input  type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp"  value="<?=set_value('email') ?>">
        <small class="text-danger"><?=form_error('email') ?></small>
      </div>
      <div class="form-group">
        <table>
          <tr>
            <label>Birth Date : </label>
          </tr>
          <br>
          <tr>
            <label>Day </label>
            <select name="day" id="day" class="form-regis">
              <?php 
                for ($d = 1; $d <= 31; $d++){
               ?>
               <option><?=$d?></option>
               <?php 
               } 
               ?>
            </select>
            <label>Month </label>
            <select name="month" id="month" class="form-regis">
              <?php 
                for ($m = 1; $m <= 12; $m++){
               ?>
               <option><?=$m?></option>
               <?php 
               } 
               ?>
            </select>
            <label>Year </label>
            <select name="year" id="year" class="form-regis">
              <?php 
                for ($y = 1930; $y <= 2020; $y++){
               ?>
               <option><?=$y?></option>
               <?php 
               } 
               ?>
            </select>
        </table>
      </div>
      <div class="form-group">
         <label>Password : </label>
        <input  type="password" name="password1" class="form-control" id="password1" aria-describedby="emailHelp" >
        <small class="text-danger"><?=form_error('password1') ?></small>
      </div>
      <div class="form-group">
         <label>Confirm Password : </label>
        <input  type="password" name="password2" class="form-control" id="password2" aria-describedby="emailHelp" >
      </div>
      <center><button type="submit" class="btn btn-primary" style="width: 60%;, border-radius: 10px; background-color: #c9a632; border:1px solid white;">Submit</button></center>
     </form>
    <hr>
    <center>
        <a href="<?= site_url('Home/login') ?>">Already have an account? Login!</a>
    </center>
    </div>
  </div>
</div>