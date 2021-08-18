<link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/login.css"); ?>"/>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="<?= base_url("login/login_process") ?>" method=post>
      <input type="text" name=email placeholder="username"/>
      <input type="password" name=password placeholder="password"/>
      <button type="submit">login</button>
      <h1 class="message"><?= $this->session->flashdata("err_mesg") ?></h1>
    </form>
  </div>
</div>
