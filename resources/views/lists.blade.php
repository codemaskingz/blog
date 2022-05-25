<h1>members list</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>Lastname</td>
        <td>Firstname</td>
        <td>Username</td>
        <td>password</td>
        <td>Repassword</td>
        <td>Email</td>
        <td>Stateoforigin</td>
        <td>Perform Operation</td>
    </tr>
@foreach($holder as $items)
    <tr>
        <td>{{$items['id']}}</td>
        <td>{{$items['lastname']}}</td>
        <td>{{$items['firstname']}}</td>
        <td>{{$items['username']}}</td>
        <td>{{$items['password']}}</td>
        <td>{{$items['repassword']}}</td>
        <td>{{$items['email']}}</td>
        <td>{{$items['stateoforigin']}}</td>
        <td><a href={{"delete/".$items['id']}}>Delete</a><br><br>
            <a href={{"edit/".$items['id']}}>Edit</a>
        </td>
    </tr>
@endforeach
</table>

<span>
    {{$holder->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>