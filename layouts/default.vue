<template>
  <div class="min-h-screen bg-gray-100">
    <nav class="bg-white shadow-sm">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex space-x-8">
            <div class="flex-shrink-0 flex items-center">
              <h1 class="text-xl font-bold">My Nuxt App</h1>
            </div>
            <div class="flex items-center space-x-4">
              <NuxtLink to="/" class="text-gray-600 hover:text-gray-900">Home</NuxtLink>
              <NuxtLink to="/profile" class="text-gray-600 hover:text-gray-900">Profile</NuxtLink>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <main class="py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <slot />
      </div>
    </main>
  </div>
</template>
