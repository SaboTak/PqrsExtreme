<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear PQR
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="block mb-8">
                <a href="{{ route('pqr.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Volver</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('pqr.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="PQR" class="block font-medium text-sm text-gray-700">PQR</label>
                            <!--<input type="text" name="PQR" id="PQR" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('PQR', '') }}" /> -->
                            <select  name="PQR" id="PQR" class="form-multiselect  rounded-md shadow-sm mt-1  w-full" >
                                    <option value="{{ old('PQR', 'Peticion')  }}"> Peticion</option>
                                    <option value="{{ old('PQR', 'Queja')  }}"> Queja</option>
                                    <option value="{{ old('PQR', 'Reclamo')  }}"> Reclamo</option>
                            </select>
                            @error('PQR')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Asunto_PQR" class="block font-medium text-sm text-gray-700">Asunto_PQR</label>
                            <input type="text" name="Asunto_PQR" id="Asunto_PQR" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('Asunto_PQR', '') }}" />
                            @error('Asunto_PQR')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Usuario" class="block font-medium text-sm text-gray-700">Usuario</label>
                            <!-- <input type="text" name="Usuario" id="Usuario" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('Usuario', '')  }}" /> -->
                            <select  name="Usuario" id="Usuario" class="form-multiselect  rounded-md shadow-sm mt-1  w-full" >
                            @foreach ($users as $user)
                                <option value="{{ $user->name }}"> {{ $user->name }}</option>
                            @endforeach
                            </select>
                            @error('Usuario')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Estado" class="block font-medium text-sm text-gray-700">Estado</label>
                            <!-- <input type="text" name="Estado" id="Estado" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('Estado', '') }}" />-->
                                   <select  name="Estado" id="Estado" class="form-multiselect  rounded-md shadow-sm mt-1  w-full" >
                                        <option value="{{ old('Estado', 'Nueva')  }}"> Nueva</option>
                                        <option value="{{ old('Estado', 'Ejecucion')  }}"> Ejecucion</option>
                                        <option value="{{ old('Estado', 'Cerrado')  }}"> Cerrado</option>
                                   </select>
                                   
                            @error('Estado')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Vencimiento" class="block font-medium text-sm text-gray-700">Vencimiento</label>
                            <input type="date" name="Vencimiento" id="Vencimiento" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('Vencimiento', '') }}" />
                            @error('Vencimiento')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div> -->
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>