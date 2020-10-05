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
                        <th>Ilość szt.</th>
                        <th>Szczegóły</th>
                        </thead>
                        <tbody>
                            @foreach($book as $b)
                        <tr>
                            <td>{{$b->title}}</td>
                            <td>{{$b->author}}</td>
                            <td>{{$b->isbn}}</td>

                            <td>{{$b->stock}}</td>
                            <td>
                                @if($b->stock > 0 )
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#show{{$b->id}}">
                                        Podejrzyj

                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#order{{$b->id}}">
                                        Zarezerwuj
                                    </button>
                                    @elseif($b->stock = 0)
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#show{{$b->id}}">
                                        Podejrzyj
                                        </button>
                                @endif
                            </td>
                        </tr>
                        <div class="modal fade" id="order{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Złóż zamówienie</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/{{$b->img_src}}" class="" alt="Obrazek"/>
                                        <legend>Tytuł</legend> <p>{{$b->title}}</p>
                                        <legend>Autor</legend></legend><h3>{{$b->author}}</h3>
                                        <legend>ISBN</legend><i>{{$b->isbn}}</i>
                                         <div class="card">
                                             <legend>Imię i nazwisko: </legend>
                                             <input type="text" name="fname" value="{{Auth::user()->name}}" readonly/>
                                            <legend>Ilość szt. </legend>
                                            <input type="text" name="stock" value="1" readonly/>
                                             <legend>Okres wypożyczenia</legend>
                                             <select name="">
                                                 <option>...</option>
                                                 <option value="1">2 dni</option>
                                                 <option value="2">7 dni</option>
                                                 <option value="3">14 dni</option>
                                                 <option value="4">30 dni</option>
                                             </select>
                                             <legend>Określ formę odbioru zamówienia</legend>
                                           <select name="">
                                               <option>...</option>
                                               <option value="1">Kurier</option>
                                               <option value="2"> Paczkomat</option>
                                               <option value="3">Osobiście</option>
                                           </select>
                                         </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Zapisz</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


// Modal do poglądu
                        <div class="modal fade" id="show{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Podgląd</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/{{$b->img_src}}" class="" alt="Obrazek"/>
                                        <legend>Tytuł</legend> <p>{{$b->title}}</p>
                                        <legend>Autor</legend></legend><h3>{{$b->author}}</h3>
                                        <legend>ISBN</legend><i>{{$b->isbn}}</i>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <table class="table table-sm">
                        <thead>
                        <th>Tytuł</th>
                        <th>Autor</th>
                        <th>ISBN</th>
                        <th>Zdjęcie</th>
                        <th>Ilość szt. </th>
                        <th>Szczegóły</th>
                        </thead>
                        <tbody>
                        @foreach($article as $a)
                            <tr>
                                <td>{{$a->title}}</td>
                                <td>{{$a->author}}</td>
                                <td>{{$a->isbn}}</td>
                                <td>{{$a->img_src}}</td>
                                <td>{{$a->stock}}</td>
                                @if($a->stock > 0)
                                <td><a href="#" class="btn btn-sm btn-info">Zarezerwuj</a> </td>
                                @else
                                <td class="bg-danger">Brak książek na stanie</td>
                                    @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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

