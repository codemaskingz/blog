<h1>this is the list from the database</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>LastName</td>
        <td>FirstName</td>
        <td>Username</td>
        <td>Password</td>
        <td>Email</td>

    </tr>
    @foreach($keywords as $items)
    <tr>
        <td>{{$items['id']}}</td>
        <td>{{$items['lastname']}}</td>
        <td>{{$items['firstname']}}</td>
        <td>{{$items['username']}}</td>
        <td>{{$items['password']}}</td>
        <td>{{$items['email']}}</td>
    </tr>
    @endforeach
</table>

<span>
    {{$keywords->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>