<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Pqr
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="block mb-8">
                <a href="{{ route('pqr.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('pqr.update', $pqr->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="PQR" class="block font-medium text-sm text-gray-700">PQR</label>
                                <div class=" rounded-md shadow-sm mt-1 block w-full">
                                    {{ $pqr->PQR }}
                                </div>
                        </div>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="Asunto_PQR" class="block font-medium text-sm text-gray-700">Asunto_PQR</label>
                                <div class=" rounded-md shadow-sm mt-1 block w-full">
                                {{ $pqr->Asunto_PQR }}
                            </div>
                        </div>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="Usuario" class="block font-medium text-sm text-gray-700">Usuario</label>
                                <div class=" rounded-md shadow-sm mt-1 block w-full">
                                {{ $pqr->Usuario }}
                            </div>
                        </div>

                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="Estado" class="block font-medium text-sm text-gray-700">Estado</label>
                                <div id="estado" class=" rounded-md shadow-sm mt-1 block w-full ">
                                {{ $pqr->Estado }}
                                </div>
                                <div id="innerSel" style="display: none;">
                                <select name="estado_sel" id="estado_sel" class="form-multiselect  rounded-md shadow-sm mt-1  w-full">
                                <?php switch ($pqr->Estado) {
                                    case 'Nueva':
                                        echo '<option value="Nueva">Nueva</option>
                                              <option value="Ejecucion">Ejecucion</option>
                                              <option value="Cerrado">Cerrado</option>';
                                        break;
                                    case 'Ejecucion':
                                        echo '<option value="Ejecucion">Ejecucion</option>
                                              <option value="Cerrado">Cerrado</option>';
                                        break;
                                    case 'Cerrado':
                                        echo '<option value="Cerrado">Cerrado</option>';
                                        break;
                                    default:
                                        break;
                                } ?>
                                </select>
                                </div>
                                <input type="hidden" name="Estado" id="EstOld" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $pqr->Estado }}">
                                   <script type="text/javascript" src="/js/jquery.js"></script>
                                   <script type="text/javascript">
                                   jQuery('div#estado').click(function(){
                                       jQuery('div#estado').css('display', 'none');
                                       jQuery('div#innerSel').css('display', 'block');
                                    });
                                    jQuery('select#estado_sel').change(function(){
                                        jQuery('input#EstOld').val(jQuery(this).val());
                                        jQuery('div#estado').html(jQuery('select#estado_sel option:selected').text());
                                        jQuery('div#innerSel').css('display', 'none');
                                        jQuery('div#estado').css('display', 'block');
                                        
                                    });
                                   </script>
                        </div>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="created_at" class="block font-medium text-sm text-gray-700">Creacion</label>
                                <div class=" rounded-md shadow-sm mt-1 block w-full">
                                {{ $pqr->created_at }}
                            </div>
                        </div>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="Vencimiento" class="block font-medium text-sm text-gray-700">Vencimiento</label>
                                <div class=" rounded-md shadow-sm mt-1 block w-full">
                                {{ $pqr->expires_at }}
                            </div>
                        </div>
                        
                        

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>