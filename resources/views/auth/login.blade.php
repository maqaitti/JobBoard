<x-layout>

<x-slot:heading>
    Login
</x-slot:heading>
<form method="POST" action="/login">
  @csrf
  
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

         <x-form-field>
          <x-form-label for="email">Email</x-form-label>
           <div class="mt-2">
             <x-form-input name="email" id="email" required />
            <x-form-error name="email" id="email"/>
          </div>
        </x-form-field>


  <x-form-field>
    <x-form-label for="password">Password</x-form-label>
      <div class="mt-2">
        <x-form-input name="password" id="password" required />
      <x-form-error name="" id="password"/>
    </div>
  </x-form-field>    
        </div>        

        <!-- <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"> -->
        <!-- <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-gray-900">salary</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input id="salary" type="text" name="salary" placeholder="122,000 birr" class="block min-w-0 grow bg-white py-1.5 px-4 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" required>
            </div>
            @error('salary')
            <p class="text-xs text-500 font-semibold mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div> -->
        <!-- </div>         -->

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
<x-form-button>Login</x-form-button>
  </div>
</form>

</x-layout>