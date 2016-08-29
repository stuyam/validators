<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <form action="/email" method="post">
            <label>Email</label>
            <input type="text" name="email" value="{{old('email')}}" />
            <br>
            <span style="color:red;">{{$errors->first('email')}}</span>
            <br>
            <input type="submit" value="submit" />
        </form>
    </body>
</html>
