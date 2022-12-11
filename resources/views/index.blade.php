<x-guest-layout>
  <x-slot name="title">Want To Bye</x-slot>

  @auth
    Auth user content
  @else
    Don`t auth user content
  @endauth
</x-guest-layout>
