<html>
<body>
<div>
    <h2>Login</h2>
    <form action="/doLogin" method="post">
        @csrf
        User name: <input type="text" name="username" placeholder="User name"><br><br>
        Password: <input type="text" name="pass" placeholder="Password"><br><br>

        <button type="submit">Login</button>
        <button><a href="cancelLogin">Cancel</a> </button>
    </form>

</div>


</body>
</html>
