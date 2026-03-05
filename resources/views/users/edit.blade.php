<!-- File: resources/views/users/edit.blade.php -->
<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <!-- Avatar Upload -->
  <div class="mb-4">
    <label class="block text-gray-700">Foto Profil</label>
    <input type="file" name="avatar" class="mt-1 block w-full">
  </div>

  <!-- Cover Photo Upload -->
  <div class="mb-4">
    <label class="block text-gray-700">Foto Cover</label>
    <input type="file" name="cover_photo" class="mt-1 block w-full">
  </div>

  <!-- Bio -->
  <div class="mb-4">
    <label class="block text-gray-700">Bio</label>
    <textarea name="bio" 
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
              rows="4">{{ old('bio', $user->bio) }}</textarea>
  </div>

  <!-- Social Links -->
  <div class="mb-4">
    <label class="block text-gray-700">GitHub URL</label>
    <input type="url" name="github_url" 
           value="{{ old('github_url', $user->github_url) }}"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
  </div>

  <button type="submit" 
          class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
    Simpan Perubahan
  </button>
</form>