<template>
  <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
      <!-- Back button -->
      <NuxtLink 
        to="/" 
        class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 mb-8 group"
      >
        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:-translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
        </svg> -->
        <span>Back to Home</span>
      </NuxtLink>

      <!-- Profile Card -->
      <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="relative">
          <div class="h-48 bg-gradient-to-r from-blue-600 to-indigo-600"></div>
          <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2">
            <img
              :src="profile.photo"
              alt="Profile picture"
              class="w-32 h-32 rounded-full border-4 border-white object-cover bg-white shadow-lg"
            />
          </div>
        </div>

        <div class="pt-20 pb-8 px-6">
          <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900">{{ profile.name }}</h1>
            <p class="mt-2 text-lg text-gray-600">{{ profile.description }}</p>
          </div>

          <!-- Social Links -->
          <div class="mt-8 flex justify-center space-x-6">
            <a 
              v-if="profile.socials?.github" 
              :href="profile.socials.github" 
              target="_blank" 
              class="text-gray-600 hover:text-gray-900 transition-colors p-2 hover:bg-gray-100 rounded-full"
              title="GitHub Profile"
            >
              <i class="fab fa-github text-2xl"></i>
            </a>
            <a 
              v-if="profile.socials?.linkedin" 
              :href="profile.socials.linkedin" 
              target="_blank" 
              class="text-gray-600 hover:text-blue-600 transition-colors p-2 hover:bg-blue-50 rounded-full"
              title="LinkedIn Profile"
            >
              <i class="fab fa-linkedin text-2xl"></i>
            </a>
            <a 
              v-if="profile.socials?.instagram" 
              :href="profile.socials.instagram" 
              target="_blank" 
              class="text-gray-600 hover:text-pink-600 transition-colors p-2 hover:bg-pink-50 rounded-full"
              title="Instagram Profile"
            >
              <i class="fab fa-instagram text-2xl"></i>
            </a>
          </div>

          <!-- Skills Section -->
          <div class="mt-12">
            <h2 class="text-2xl font-semibold text-gray-900 text-center mb-6">Skills & Technologies</h2>
            <div class="flex flex-wrap justify-center gap-3">
              <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Vue.js</span>
              <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium">Laravel</span>
              <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-medium">Tailwind CSS</span>
              <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">JavaScript</span>
              <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-medium">PHP</span>
              <span class="px-4 py-2 bg-indigo-100 text-indigo-800 rounded-full text-sm font-medium">MySQL</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const profile = ref({
  name: '',
  description: '',
  photo: '',
  socials: {
    github: '',
    linkedin: '',
    instagram: ''
  }
})

onMounted(async () => {
  try {
    const response = await fetch('http://localhost:8000/api/profile')
    const data = await response.json()
    profile.value = data
  } catch (error) {
    console.error('Error fetching profile:', error)
  }
})
</script>
