<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <form action="/phone" method="post">
            <label>Phone</label>
            <input type="text" name="phone" value="{{old('phone')}}" />
            <span style="color:red;">{{$errors->first('phone')}}</span>
            <input type="submit" value="submit" />
        </form>
    </body>
</html>
