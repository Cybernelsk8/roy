<x-guest-layout>

<div class="min-h-screen flex items-center shadow justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    {{-- logo --}}
    <div>
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Iniciar sesión en tu cuenta
      </h2>
      <p class="mt-2 text-center text-sm text-gray-600">
          Si no tienes cuenta registrate 
        <a href="{{route('register')}}" class="font-medium text-blue-900 hover:text-blue-900">
          <strong>aquí</strong>
        </a>
      </p>
    </div>

    {{-- mensajes de error --}}

    <x-jet-validation-errors class="mb-4" />

      @if (session('status'))
          <div class="mb-4 font-medium text-sm text-green-600">
              {{ session('status') }}
          </div>
      @endif

    <form class="mt-8 space-y-6" action="{{route('login')}}" method="POST">
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="username" class="sr-only">Código de empleado</label>
          <input id="username" name="username" type="text" autocomplete="username" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-900 focus:border-blue-900 focus:z-10 sm:text-sm" placeholder="Código de empleado">
        </div>
        <div>
          <label for="password" class="sr-only">Contraseña</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-900 focus:border-blue-900 focus:z-10 sm:text-sm" placeholder="Contraseña">
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-blue-900 focus:ring-blue-900 border-gray-300 rounded">
          <label for="remember_me" class="ml-2 block text-sm text-gray-900">
              Recuérdame
          </label>
        </div>

        <div class="text-sm">
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="font-medium text-blue-900 hover:text-blue-900">
              ¿Olvidaste tu contraseña?
            </a>
          @endif
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-900 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Iniciar sesión
        </button>
      </div>
    </form>
  </div>
</div>
  
</x-guest-layout>
