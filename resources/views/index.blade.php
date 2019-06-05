<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/cerulean/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />

        <style>
            .card {
                margin-bottom: 20px;
            }
            .card > .card-header {
                color: white !important;
            }
            .well {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            }
            .label-info {
                background-color: #5bc0de;
            }
            .label {
                display: inline;
                padding: .2em .6em .3em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <h1 class="page-header">Tutorial de tags (sistema de etiquetas)</h1>
                    @if(session('info'))
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                    @endif

                    @if(count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST">
                        {{ csrf_field() }}
                        <label for="title">Título</label>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control">
                        </div>

                        <label for="body">Cuerpo</label>
                        <div class="form-group">
                            <textarea name="body" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="form-group well">
                            <label for="tags">Etiquetas (palabras separadas por comas)</label>
                            <input type="text" name="tags" data-role="tagsinput" class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                    <hr>
                    @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header bg-primary text-info">{{ $post->title }}</div>
                        <div class="card-body">{{ $post->body }}</div>
                        <div class="card-footer">
                            @forelse($post->tags as $tag)
                            <span class="label label-info">{{ $tag->name }}</span>
                            @empty
                            <em>Sin etiquetas</em>
                            @endforelse
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    </body>
</html>
