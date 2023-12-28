<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Rumpi!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <header>
        <h1>Forum Rumpi!</h1>
        <nav class="nav">
            <ul>

                Kalo gk bisa login dulu
                /rumpi.com/login


                <li><a href=" {{ route('profile.show', ['idLogin' => $userId->id]) }}">Profil</a></li>

            </ul>
        </nav>
        <button type="button" class="modal-button" onclick="openModal('modal1')"> <i class="fa-solid fa-gear"></i>
        </button>
    </header>


    <!--IsI kontene dinamis dari db-->

    <main>





        <!-- Modal Setting -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <button type="button" class="close-button" onclick="closeModal('modal1')">˂</button>
                <br>
                <center>




                    <br>
                    <div class="profil-box">{{--  
                                                session_start();
                                                if (isset($_SESSION['username'])) {
                                                    $username = $_SESSION['username'];
                                                    echo "<strong> $username</strong>";
                                                } else {
                                                    // Handle the case when the username is not set in the session
                                                    $username = "Guest";
                                                }


                                               --}}</div>

                    <h3>Pengaturan</h3>
                    <button onclick="darkMode()">Mode Gelap</button>

                    <br>

                </center>
            </div>
        </div>


        <script src={{ asset('js/modal.js') }}></script>
        <script>
            applyDarkModePreference();
        </script>


        <script src={{ asset('js/darkMode.js') }}></script>




        <br>
        <div id="createPost">
            <a href="{{ route('post.create') }}" style="text-decoration: none;">
                <i class="fas fa-circle fa-lg" style="color: green; display: inline-block; position: relative;">
                    <i class="fas fa-plus"
                        style="color: white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                </i>
                Buat Postingan
            </a>


        </div>
        <br>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        {{--    @foreach ($postDatas as $post)
            {{ $post->content }}
            {{ $post->created_at }}
            {{ $post->user->username }}
                      {{ $post->user->profile->profile_image }}
            {{ $post->post_image }}
            {{ $post->likes }}
            {{ $post->comments->count() }}
            {{ $post->comments->first()->content }}
            {{ $post->comments->first()->user->username }}
            {{ $post->comments->first()->user->profile->profile_image }}
            {{ $post->comments->first()->created_at }}
            {{ $post->comments->first()->updated_at }}
            {{ $post->comments->first()->likes->count() }}
            {{ $post->comments->first()->likes->first()->user->username }}
            {{ $post->comments->first()->likes->first()->user->profile->profile_image }}
            {{ $post->comments->first()->likes->first()->created_at }}
            {{ $post->comments->first()->likes->first()->updated_at }}
            {{ $post->comments->first()->likes->first()->like }}
            {{ $post->likes->first()->user->username }}
            {{ $post->likes->first()->user->profile->profile_image }}
            {{ $post->likes->first()->created_at }}
            {{ $post->likes->first()->up }}
        @endforeach --}}


        @foreach ($postDatas as $post)
            <section class="post-section">
                <div class="post">
                    <div class="post-header">
                        <div class="user-info">

                            {{--     {{dd($post->user->profile->url)}} --}}
                            @if ($post->user->profile && $post->user->profile->url)
                                <img id="imageProfile" src="{{ asset($post->user->profile->url) }}">
                            @else
                                <img id="imageProfile" src="{{ asset('profile_images/default_profile.webp') }}">
                            @endif



                            <h3> {{ $post->user->name }} </h3>
                        </div>

                    </div>
                </div>

                <div class="post-content">
                    {{--   @dd($post->files) --}}
                    @if ($post->files->isNotEmpty())
                        @foreach ($post->files as $file)
                            @if ($file->url != null)
                                <img id="imageProfile" src="{{ $file->url }}">
                            @endif
                        @endforeach
                    @endif


                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->updated_at->format('d-m-Y') }}</p>
                    <p>{{ $post->content }}</p>
                </div>

                <div class="post-footer">
                    <button type="button" style="display: inline-block;">
                        <i class="fas fa-thumbs-up fa-lg" style="color: red;"></i> {{ $post->like_count }}
                    </button>

                    <form action="{{ route('comment.show', ['idPost' => $post->id]) }}" method="get"
                        style="display: inline-block;">
                        <button type="submit" style="background: none; border: none; cursor: pointer;">
                            <i class="fas fa-comment fa-lg" style="color: blue;"></i> Komentar
                        </button>
                    </form>





                </div>
            </section>
        @endforeach

        <div class="pagination-wrapper">
            {{ $postDatas->links() }}
        </div>






    </main>

    <footer>
        <p>&copy; 2023 Forum Rumpi! </p>
    </footer>
</body>

</html>
