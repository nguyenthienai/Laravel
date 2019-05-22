
<html>
<body>
<div>
    <h2>Simple Calculator</h2>
    <form action="/add" method="post">
        @csrf
        <input type="number" name="num1" placeholder="input number 1">
        <input type="number" name="num2" placeholder="input number 2"><br><br>
        <button type="submit" name="btn" value="add">Add</button>
        <button type="submit" name="btn" value="sub">Sub</button>
        <button type="submit" name="btn" value="mul">Mul</button>
        <button type="submit" name="btn" value="div">Div</button>
    </form>
    @if(Session::has('result'))
       <h2>{{Session::get('result')}}</h2>
    @endif

    <?php

    ?>
</div>


</body>
</html>
