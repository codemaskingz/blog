<h1>Add Member</h1>
@if(session('lastname'))
<h2 style="color: blue;">{{session('lastname')}} user has been added</h2>
@endif

<form action="datame" method="post">
    @csrf
    <input type="text" name="lastname" placeholder="enter your lastname"> <br> <br>
    <input type="text" name="firstname" placeholder="enter your firstname"> <br> <br>
    <button type="submit">ADD MEMBER</button>
</form>