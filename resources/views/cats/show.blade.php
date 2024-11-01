<x-layout>

@foreach ($users as $user) 
    @foreach ($user->cats as $cat)
    <p>{{$cat->name}}</p>
@endforeach
@endforeach

</x-layout>