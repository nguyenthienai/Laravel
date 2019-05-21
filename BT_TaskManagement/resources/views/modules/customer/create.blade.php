creat day ne
<html>
<body>
<form action="/customer/store" method="post">
    @csrf
    <button type="submit" name="ok">Save</button>
    <button><a href="/customer/index">Back</a></button>
</form>
<form>
    @if($display_result)
        {{$status}}
    @endif
</form>

</body>
</html>

