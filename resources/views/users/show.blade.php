<!-- File: resources/views/users/show.blade.php -->
<div class="min-h-screen bg-gray-100">
  <!-- Cover Photo -->
  <div class="h-48 bg-cover bg-center" 
       style="background-image: url('{{ asset('storage/'.$user->cover_photo) }}')">
  </div>

  <!-- Profile Info -->
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative -mt-20">
      <img class="w-32 h-32 rounded-full border-4 border-white mx-auto" 
           src="{{ asset('storage/'.$user->avatar) }}" 
           alt="{{ $user->name }}">
      
      <div class="mt-4 text-center">
        <h1 class="text-2xl font-bold">{{ $user->name }}</h1>
        <p class="text-gray-600">{{ $user->bio }}</p>
        
        <!-- Social Media -->
        <div class="mt-4 flex justify-center space-x-4">
          @if($user->github_url)
            <a href="{{ $user->github_url }}" class="text-gray-600 hover:text-gray-900">
              <i class="fab fa-github"></i> GitHub
            </a>
          @endif
          <!-- Tambahkan Twitter, LinkedIn, dll -->
        </div>
      </div>
    </div>
  </div>
</div>