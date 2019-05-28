<table class="table table-bordered table-striped">
    <thread>
        <th> ID </th>
        <th> Prix </th>
        <th> Titre </th>
        <th> Genre </th>
    </thread>
    @foreach($LesMangas as $mangas)
        <tr>
            <td> {{ $mangas->getIdManga() }}</td>
            <td> {{ $mangas->getPrix() }}</td>
            <td> {{ $mangas->getTitre()}}</td>
            <td> {{ $mangas->getGenre()}} </td>
        </tr>
    @endforeach
</table>