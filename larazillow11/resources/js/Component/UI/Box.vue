<template>
    <div class="border border-gray-200 dark:border-gray-800 rounded-md p-4 shadow-sm 
            text-gray-800 dark:text-gray-300 
            hover:shadow-lg hover:bg-yellow-50 
            dark:bg-gray-800 dark:hover:bg-gray-700 transition-all duration-200">
            <div class="text-gray-500 font-medium">
                <slot name='header'/>
            </div>
        <slot />
    </div>
</template>