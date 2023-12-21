<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <h1>Forum Rumpi!</h1>
        <nav class="nav">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>

                <li><a href="profile.php">Profil</a></li>



            </ul>
        </nav>
        <button type="button" class="modal-button" onclick="openModal('modal1')"> <i class="fa-solid fa-gear"></i>
        </button>
    </header>
    <!-- nanti isi comment nha dinamis dari db-->
    <main>

        <div id="modal1" class="modal">
            <div class="modal-content">
                <button type="button" class="close-button" onclick="closeModal('modal1')">˂</button>
                <br>
                <center>
                    <h3>Pengaturan</h3>
                    <button onclick="darkMode()">Mode Gelap</button>
                </center>
            </div>
        </div>
        <script src="{{ asset('js/modal.js') }}"></script>
        <script>
            applyDarkModePreference();
        </script>

        <script src="{{ asset('js/darkmode.js') }}"></script>


        {{--       @dd($post) --}}

        <section class="comments-section">
            <div class="post-content">

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
        </section>


        <section class="comments-section">



            <h2>Komentar</h2>

            @foreach ($postComments as $comment)
                <div class="comment">
                    <div class="comment-header">
                        @if ($comment->user->profilePhoto == null)
                            <img id="imageProfile" src="{{ asset('profile_images/default_profile.webp') }}">
                        @else
                            <img id="imageProfile" src="{{ $comment->user->profilePhoto }}">
                        @endif
                        <div class="comment-info">
                            <div class="user-info">
                                <h3>{{ $comment->user->username }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="comment-content">
                        <p>{{ $comment->updated_at->format('d-m-Y') }}</p>
                        <p>{{ $comment->content }}</p>
                    </div>
                </div>
            @endforeach


            <h2>Tambahkan Komentar</h2>
            <div class="comment-form">
                <form action="comment.php" method="post" id="comment-form">
                    <label for="comment-content">Komentar Anda:</label> <br>
                    <textarea id="comment-content" name="comment_content" rows="5" required></textarea><br>
                    <button type="submit">Kirim Komentar</button>
                </form>
            </div>

        </section>






















        </section>

        <div>
            <a> Kembali ke postingan</a>
        </div>

    </main>

    <footer>
        <p>&copy; 2023 Forum Rumpi!</p>
    </footer>

</body>

</html>
