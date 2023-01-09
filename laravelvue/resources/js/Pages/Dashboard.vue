<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';



</script>

<template>
    
    <Head title="Cadastro" />

    <AuthenticatedLayout>
      

        <div class="mt-5 md:col-span-2 md:mt-0">
          <form action="/dashboard" method="POST">
        
            <div class="title"><h2 class="font-semibold text-xl text-gray-800 leading-tight" >Cadastro de cliente</h2></div>
            <div class="overflow-hidden shadow sm:rounded-md">
              <div class="bg-white px-4 py-5 sm:p-6">       
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" name="firstname" id="firstname" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  </div>
  
                  <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Sobrenome</label>
                    <input type="text" name="lastname" id="lastname" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  </div>
  
                  <div class="col-span-6 sm:col-span-4">
                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" name="email" id="email" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  </div>

                  <div class="col-span-6 sm:col-span-4">
                    <label for="email-address" class="block text-sm font-medium text-gray-700">CPF/CNPJ/RG</label>
                    <input type="text" name="rgs" id="rgs" autocomplete="rgs" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  </div>
  
                  <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-gray-700">País</label>
                    <select id="country" name="country" autocomplete="countryname" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                      <option>Brasil</option>
                    </select>
                  </div>
                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium text-gray-700">CEP</label>
                    <input type="text" name="postalcode" id="postalcode" autocomplete="postalcode" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  </div>
  
                  <div class="col-span-6">
                    <label for="street-address" class="block text-sm font-medium text-gray-700">Rua</label>
                    <input type="text" name="address" id="address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  </div>
  
                  <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="city" class="block text-sm font-medium text-gray-700">Cidade</label>
                    <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  </div>
  
                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="region" class="block text-sm font-medium text-gray-700">Estado</label>
                    <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                  </div>
  
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cadastrar</button>
              </div>
            </div>
          </form>
        </div>
      
    
  
    <div class="hidden sm:block" aria-hidden="true">
      <div class="py-5">
        <div class="border-t border-gray-200" />
      </div>
    </div>
        
        
    </AuthenticatedLayout>
</template>

