<html>
<body>
<div>
    <form action="change" method="post">
        @csrf
        <input type="text" placeholder="English" name="input">
        <button type="submit" name="change">Change</button>
    </form>
    <hr>
    <form>
        @if($dis)

            @foreach ($array as $key=>$value)
                @if ($input === $key)
                    {{$input .":  " .$value}}
                @endif
            @endforeach
        @endif
    </form>
</div>
</body>
</html>
