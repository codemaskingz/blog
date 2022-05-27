<h1>Getting Database Record Through Query Builder</h1>
<table border="2">
    <tr>
        <td>ID</td>
        <td>Lastname</td>
        <td>Firstname</td>
        <td>Username</td>
    </tr>
    @foreach($query as $pickone)
    <tr>
        <td>{{$pickone->id}}</td>
        <td>{{$pickone->lastname}}</td>
        <td>{{$pickone->firstname}}</td>
        <td>{{$pickone->username}}</td>
    </tr>
    @endforeach
</table>