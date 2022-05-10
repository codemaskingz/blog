@include('header')

<x-usercomponent data="users component header" />
<h1>user page</h1>
@include('about')

@for($i=0;$i<10;$i++)
<h1>{{$i}}</h1>
@endfor

@csrf
@foreach($user as $individualpeople)
<h2>{{$individualpeople}}</h2>
@endforeach

<script>
    var data = @json($user);
    console.warn(data[3])
</script>
@include('footer')