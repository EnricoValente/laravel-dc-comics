@extends('layouts.main')

@section('page-title')
Laravel dc comics
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        {{-- <th scope="col">Thumbnail</th> --}}
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Artists</th>
                        <th scope="col">Writers</th>
                        <th scope="col">Azioni</th>


                      </tr>
                    </thead>

                    <tbody>
                        
                        @foreach ($comics as $comic)
                        <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        {{-- <td><img src="{{$comic->thumb}}" alt=""></td> --}}
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->artists}}</td>
                        <td>{{$comic->writers}}</td>
                        <td>
                            <a href="{{route('comics.edit', ['comic'=>$comic->id])}}" class="btn btn-success">
                                Modifica
                            </a>

                            <a href="{{route('comics.create', ['comic'=>$comic->id])}}" class="btn btn-primary">
                                Aggiungi
                            </a>
                        </td>



                        </tr>
                        @endforeach   
                        
                    </tbody>

                </table>

            </div>

        </div>
    </div>
@endsection



                        
                      



