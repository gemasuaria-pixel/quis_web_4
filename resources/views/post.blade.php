
<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>


  
  <article class="py-8 max-w-screen-md border-b border-gray-300">
  
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>

    <div class="text-base text-gray-500">
      <a href="#">{{ $post->author->name }}</a> |
      <time datetime="2023-10-01">{{ $post->created_at->diffForHumans() }}</time> 
    </div>
    <p class="my-4">{{ $post['body']}}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to post </a>
  </article>

</x-layout>