<x-layout>
<form action="{{route('createnew')}}" method="post" class="form-example">
     @csrf  

    <label for="name">Имя котика </label>
    <input type="text" name="name" id="name" required />

    <label for="who">Порода </label>
    <input type="text" name="who" id="who" required />

    <input type="hidden" name="user_id" value="{{Auth::id()}}" required />

 
    <input type="submit" value="Отправить!" />
  </form>

</x-layout>