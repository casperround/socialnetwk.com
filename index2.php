    <form action="register_post.php" role="form" method="POST" class="form">
      <input name="email" type="text" placeholder="Email">
      <input name="username" type="text" placeholder="Username">
      <input name="password" type="password" placeholder="Password">
      <input type="text" id="ip" name="ip" style="display:none;" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
      <input type="text" id="ip" name="date" style="display:none;" value="<?= $date ?>" />
      <input type="text" id="ip" name="time" style="display:none;" value="<?= $time ?>" />
      <button type="submit" id="login-button">Register</button>
    </form><br>