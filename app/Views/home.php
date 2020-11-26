<div class="grid-container">
<div class="left-content"></div>
<div class="main-content">
<span class="error"><?php \Config\Services::validation()->listErrors(); ?></span>
<form action="/Login" method="post">
    <?= csrf_field() ?>

    <label for="email">Email Address</label>
    <input type="input" name="email" /><br />

    <label for="password">Password</label>
    <input type="password" name="password" /><br />

    <input type="submit" name="submit" value="Login" />

</form>
</div>
<div class="right-content"></div>
</div>