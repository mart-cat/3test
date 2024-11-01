<x-layout>
<form action="{{route('log')}}" method="post" class="form-example">
     @csrf  
    <label for="email">Почта </label>
    <input type="email" name="email" id="email" required />
    <label for="password">Пароль </label>
    <input type="password" name="password" id="password" required />
    <input type="submit" value="Отправить!" />
  </form>

</x-layout>
