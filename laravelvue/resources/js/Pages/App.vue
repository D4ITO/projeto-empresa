<script setup>
import{ Head, Link } from '@inertiajs/inertia-vue3';



defineProps(
{
    canLogin: Boolean,
    canRegister: Boolean,
});


</script>

<template>
         <div class="class"></div>
   
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-sm text-gray-700 dark:text-gray-500 underline"
                >Dashboard</Link
            >

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Log in</button></Link>

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Register</button></Link>
            </template>
        </div>
    
  </template>
  
  <style>
    @import 'tailwindcss/base';
    @import 'tailwindcss/components';
    @import 'tailwindcss/utilities';

    
  </style>
  