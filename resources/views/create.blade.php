<!DOCTYPE html>
<html>
<head>
    
</head>  
<body>
    @if($errors->any())
    <ul>
    {!!implode('',$errors->all('<li>:message</li>'))!!} 
    </ul>
    @endif

<form action="create" method="post">@csrf
firstname: <input type="text" name="firstname" value="{{old('firstname')}}"

><br>
last: <input type="text" name="lastname" value="{{old('lastname')}}"

><br>
email: <input type="text" name="email" value="{{old('email')}}"

><br>
gender: <input type="text" name="gender" value="{{old('gender')}}"

><br>
<input type="submit">
</form>

 </body>
</html>