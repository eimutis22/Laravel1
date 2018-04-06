<div id="formWrap">

    <form action="/register" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
        <h2>Register</h2>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit">
    </form>

<a href="/displayusers">Display list of registered users</a>

</div>

