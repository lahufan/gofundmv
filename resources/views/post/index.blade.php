<h1>All Post</h1>
<ul>
    @forelse($posts as $post)
        {{-- <li>{{ $post->status }} - {{ $donations->amount }}</li> --}}
        <li>{{ $post->status }} </li>
        {{-- alternative working methods --}}
        {{-- <li> @include('post.donations', ['donations' => $post->donations, 'post_id' => $post->id])</li> --}}
        {{-- <ul> @include('post.donations', ['donations' => $post->donations()->where('post_id',$post->id)->get()])</ul> --}}
        <ul> @include('post.donations', ['donations' => $post->donations])</ul>
                
    @empty
        <li>No posts to show</li>
    @endforelse
</ul>