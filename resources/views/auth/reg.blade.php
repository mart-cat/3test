<x-layout>
<form action="{{route('reg')}}" method="post" class="form-example">
     @csrf  

    <label for="name">Имя </label>
    <input type="text" name="name" id="name" required />
    <label for="email">Почта </label>
    <input type="email" name="email" id="email" required />
    <label for="password">Пароль </label>
    <input type="password" name="password" id="password" required />
    <input type="submit" value="Отправить!" />
  </form>

</x-layout>