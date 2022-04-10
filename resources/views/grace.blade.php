<h1>Register Here</h1>
<form action="details" method="POST">
    @csrf
    <input type="text" name="name" placeholder="create username "><br><br>
    <input type="email" name="email" placeholder="enter your Email "><br><br>
    <input type="text" name="address" placeholder="your address "><br><br>
    <button type="submit" style="color: blue;"> Register here</button>

</form>