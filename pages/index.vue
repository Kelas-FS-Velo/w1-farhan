<template>
  <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 flex flex-col items-center justify-center p-4">
    <div class="max-w-4xl w-full bg-white rounded-2xl shadow-xl p-8 md:p-12 text-center">
      <div class="mb-8">
        <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-4">
          Welcome to My Portfolio
        </h1>
        <p class="text-gray-600 text-lg md:text-xl">
          Discover my journey, projects, and expertise in web development
        </p>
      </div>

      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <NuxtLink 
          to="/profile" 
          class="group relative inline-flex items-center gap-2 px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 shadow-md"
        >
          <span>View My Profile</span>
          <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
          </svg> -->
        </NuxtLink>
        
        <a 
          href="https://github.com/fakhrudinf" 
          target="_blank"
          class="inline-flex items-center gap-2 px-8 py-4 bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition-all duration-300 transform hover:scale-105 shadow-md"
        >
          <i class="fab fa-github text-xl"></i>
          <span>GitHub Profile</span>
        </a>
      </div>

      <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 bg-blue-50 rounded-xl">
          <div class="w-12 h-12 bg-blue-600 text-white rounded-lg flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-code text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Web Development</h3>
          <p class="text-gray-600">Crafting modern and responsive web applications</p>
        </div>

        <div class="p-6 bg-indigo-50 rounded-xl">
          <div class="w-12 h-12 bg-indigo-600 text-white rounded-lg flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-mobile-alt text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Mobile First</h3>
          <p class="text-gray-600">Building responsive designs for all devices</p>
        </div>

        <div class="p-6 bg-purple-50 rounded-xl">
          <div class="w-12 h-12 bg-purple-600 text-white rounded-lg flex items-center justify-center mb-4 mx-auto">
            <i class="fas fa-server text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Backend Development</h3>
          <p class="text-gray-600">Creating robust and scalable backend solutions</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>