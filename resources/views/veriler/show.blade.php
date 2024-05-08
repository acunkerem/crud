<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Veriler') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                


              
  <div class="form-group">
    <label for="exampleInputEmail1">Name Lastname</label>
    <input type="text" class="form-control" name="namelastname" value="{{ $veri->namelastname }}" placeholder="Name Lastname" disabled>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" value="{{ $veri->email }}" placeholder="E-mail" disabled>
  </div>

                
        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>