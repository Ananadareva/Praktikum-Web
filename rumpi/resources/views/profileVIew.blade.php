<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Postingan Baru</title>

    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <h1>Forum Rumpi!</h1>
        <nav class="nav">
            <ul>
                <li><a href={{ route('home') }}>Home</a></li>
            </ul>
        </nav>

        <div style="display: flex; justify-content: space-between;">
            <button id="backBtn" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i>
            </button>


            <button id="setBtn" type="button" class="modal-button" onclick="openModal('modal1')">
                <i class="fa-solid fa-gear"></i>
            </button>
        </div>
    </header>




    <main>



        <!-- Modal RejMsg -->
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


        <script src="js/modal.js"></script>
        <script>
            applyDarkModePreference();
        </script>

        <script src="js/darkmode.js"></script>

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
        <section class="profil-section">
            <div class="profil-left">
                <div class="profil-image">

                    @if ($dataUser->profile->url == null)
                        <img id="imageProfile" src="{{ asset('profile_images/default_profile.webp') }}">
                    @else
                        <img id="img-profil" src="{{ asset($dataUser->profile->url) }}" alt="profile">
                    @endif

                </div>
                <div class="post-info">
                    <h3><span>{{ $dataUser->name }}</span></h3>
                    <p id="biography"> {{ $dataUser->profile->biografi }}</p>
                </div>

            </div>
            <div class="profil-right">
                {{--     {{dd($dataUser->profile->url)}} --}}
                <div class="proflie-data">
                    <h3>Informasi Pribadi</h3>
                    <ul>
                        <li>
                            <strong>Email</strong><br>
                            <span>{{ $dataUser->email }}</span>
                            <hr>
                        </li>
                        <li>
                            <strong>Jenis Kelamin</strong><br>
                            <span>{{ $dataUser->profile->jenis_kelamin }}</span>
                            <hr>
                        </li>

                        <li>
                            <strong>Tanggal Lahir</strong><br>
                            <span>{{ $dataUser->profile->tanggal_lahir }}</span>
                            <hr>
                        </li>
                        <li>
                            <strong>Negara</strong><br>
                            <span>{{ $dataUser->profile->negara }}</span>
                            <hr>
                        </li>
                    </ul>

                    <div class="button-position">

                        {{-- <form method="get" action="{{ route('post.edit' , ['postId'=>1]) }}">


                            @csrf
                            <button class="button-edit-lihatPost" type="button">
                                Edit Profil
                            </button>
                        </form> --}}
                    </div>




                </div>
            </div>









        </section>


        <div class="h2-position">

            <h2> Daftar Pos </h2>

        </div>


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif



        @foreach ($dataUser->posts as $post)
            <section class="post-section">
                <div class="button-container">


                    <form method="get" action="{{ route('post.edit', ['idPost' => $post->id]) }}">
                        @csrf
                        <button style="background: blue; color: white;" type="submit">
                            Edit
                        </button>
                    </form>

                    <form method="post" action="{{ route('post.delete', ['idPost' => $post->id]) }}">
                        @csrf
                        <button style="background: red; color: white;"
                            onclick="return confirm(' Yakin ingin Menghapus Pos? Pos Akan dihapus permanen')">Hapus</button>
                    </form>
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

                    <i class="fas fa-thumbs-up fa-lg" style="color: red;"></i> {{ $post->like_count }}


                    <form action="{{ route('comment.show', ['idPost' => $post->id]) }}" method="get"
                        style="display: inline-block;">
                        <button type="submit" style="background: none; border: none; cursor: pointer;">
                            <i class="fas fa-comment fa-lg" style="color: blue;"></i> Komentar
                        </button>
                    </form>





                </div>
            </section>
        @endforeach


        {{--  {{dd($dataUser->posts)}} --}}





        <br>
    </main>



    <footer>
        <p>&copy; 2023 Forum Rumpi!</p>
    </footer>
</body>

</html>
