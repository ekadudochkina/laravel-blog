@extends("layouts.main-layout")

@section("content")
    <main role="main" class="main">
        <div class="article">
            <div id="articleId" class="d-none">{{$article->id}}</div>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 m-auto text-center">
                            <h2>{{$article->title}}</h2>

                            <div class="text-start article-counters">
                            <span class="pe-3 views">
                                <span class="icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#000"
                                      class="bi bi-eye" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                </svg>
                                </span>
                                <span class="number">{{$article->number_of_views()}}</span>
                            </span>

                                <span class="likes cursor-pointer">
                                <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#000"
                                     class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                </svg>
                                </span>
                                <span class="number">{{$article->number_of_likes()}}</span>
                                <span class="like-error error ps-2 small"></span>
                            </span>
                            </div>

                            <hr>

                            <div class="text-start">
                                @foreach($article->tags as $tag)
                                    <h4 class="d-inline-block"><span
                                            class="badge bg-dark bg-secondary mb-3">{{$tag->title}}</span></h4>
                                @endforeach
                            </div>
                            <div class="text-start pb-4 pt-5">
                                {{$article->text}}
                            </div>
                            <hr>

                            <div class="text-start col-md-10 m-auto">
                                @foreach($article->comments as $comment)
                                    <div class="review media text-muted pt-3">
                                        <p class="media-body px-3 py-3 mb-0  lh-125 border border-gray">
                                            <span class="subject d-block text-gray-dark">{{$comment->subject}}</span>
                                            <span class="body">{{$comment->body}}</span>
                                        </p>
                                    </div>
                                @endforeach
                            </div>

                            <div class="text-start pt-4">
                                <h4 class="bold mb-3">Оставить комментарий</h4>
                                <div class="alert alert-info hide" id="comment-alert">
                                    <p class="m-0"></p>
                                </div>
                                <form id="comment-form">
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlInput1">Тема сообщения</label>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                               placeholder="">
                                        <div class="error-wrap">
                                            <span id="subject-error" class="hide error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlTextarea1">Сообщение</label>
                                        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                                        <div class="error-wrap">
                                            <span id="body-error" class="hide error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <button id="submit-btn" class="btn btn-dark" type="submit">Отправить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/views.js') }}" defer></script>
    <script src="{{ asset('js/comments.js') }}" defer></script>
@endsection
