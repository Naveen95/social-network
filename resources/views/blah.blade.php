 @foreach ($posts as $post)

                                    <article class = "post" data-postid="{{ $post->id }}">
                                        <p>{{$post->userpost}}</p>
                                    <div class='info'>
                                        Posted by {{ $post->user->name }} on {{ $post->user->created_at}}
                                    </div>
                                     
                                     <div class = 'interaction'>
                                        <a href=#>Like </a> |
                                        @if(Auth::user() == $post->user)
                            |
                                            <a href="#" class="edit">Edit</a> |
                                            <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>

                                        @endif
                                        

                                @endforeach