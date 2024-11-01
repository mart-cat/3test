<x-layout>
@foreach ( $cats as $cat)
<p>{{$cat->name}}</p>
<p>{{$cat->user_id}}</p>
@endforeach
</x-layout>