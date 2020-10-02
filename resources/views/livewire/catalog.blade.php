<div>


    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Książki</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Artykuły</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Czasopisma</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Zasoby multimedialne</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <table class="table table-sm">
                        <thead>
                        <th>Tytuł</th>
                        <th>Autor</th>
                        <th>ISBN</th>
                        <th>Zdjęcie</th>
                        <th>Szczegóły</th>
                        </thead>
                        <tbody>
                            @foreach($book as $b)
                        <tr>
                            <td>{{$b->title}}</td>
                            <td>{{$b->author}}</td>
                            <td>{{$b->isbn}}</td>
                            <td>{{$b->img_src}}</td>
                            <td><a href="#" class="btn btn-sm btn-info">Zarezerwuj</a> </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <legend>Wyszukaj po tytule</legend>
                    <form action="/results?q=article-title" method="post">
                        <input type="search" class="form-input" name="search-article-title" id="search-article-title"/>
                        <button class="btn btn-sm btn-outline-dark" type="submit">Szukaj</button>
                    </form>
                    <legend>Wyszukaj po ISBN</legend>
                    <form action="/results?q=article-isbn" method="post">
                        <input type="search" class="form-input" name="search-article-isbn" id="search-article-isbn"/>
                        <button class="btn btn-sm btn-outline-dark" type="submit">Szukaj</button>
                    </form>
                    <legend>Wyszukaj po autorze</legend>
                    <form action="/results?q=article-author" method="post">
                        <input type="search" class="form-input" name="search-article-author" id="search-article-author"/>
                        <button class="btn btn-sm btn-outline-dark" type="submit">Szukaj</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <legend>Wyszukaj po tytule</legend>
                    <form action="/results?q=magazine-title" method="post">
                        <input type="search" class="form-input" name="search-magazine-title" id="search-magazine-title"/>
                        <button class="btn btn-sm btn-outline-dark" type="submit">Szukaj</button>
                    </form>
                    <legend>Wyszukaj po ISBN</legend>
                    <form action="/results?q=magazine-isbn" method="post">
                        <input type="search" class="form-input" name="search-magazine-isbn" id="search-magazine-isbn"/>
                        <button class="btn btn-sm btn-outline-dark" type="submit">Szukaj</button>
                    </form>
                    <legend>Wyszukaj po autorze</legend>
                    <form action="/results?q=magazine-author" method="post">
                        <input type="search" class="form-input" name="search-magazine-title" id="search-magazine-author"/>
                        <button class="btn btn-sm btn-outline-dark" type="submit">Szukaj</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <legend>Wyszukaj po tytule</legend>
                    <form action="/results?q=media-title" method="post">
                        <input type="search" class="form-input" name="search-media-title" id="search-media-title"/>
                        <button class="btn btn-sm btn-outline-dark" type="submit">Szukaj</button>
                    </form>
                    <legend>Wyszukaj po ISBN</legend>
                    <form action="/results?q=media-isbn" method="post">
                        <input type="search" class="form-input" name="search-media-isbn" id="search-media-isbn"/>
                        <button class="btn btn-sm btn-outline-dark" type="submit">Szukaj</button>
                    </form>
                    <legend>Wyszukaj po autorze</legend>
                    <form action="/results?q=media-author" method="post">
                        <input type="search" class="form-input" name="search-media-author" id="search-media-author"/>
                        <button class="btn btn-sm btn-outline-dark" type="submit">Szukaj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

