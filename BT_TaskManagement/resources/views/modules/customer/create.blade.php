
<html>
<body>
<h2>create day ne</h2>
<form action="/customer/store" method="post">
    @csrf
    <button type="submit" name="ok">Save</button>
    <button><a href="/customer/index">Back</a></button>
</form>
<form>
    @if (Session::has('info'))
       {{ Session::get('info') }}
    @endif
</form>

</body>
</html>

