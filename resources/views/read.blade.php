<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penerbit Buku</th>
            <th>Penulis Buku</th>
            <th>Harga Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody> 
        
        @foreach ($Books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
              <td>{{ $book->judul }}</td>
              <td>{{ $book->penulis }}</td>
              <td>{{ $book->penerbit }}</td>
              <td>{{ $book->harga }}</td>
            <td>
                <button class="btn btn-success text-bg-success" onclick="show({{ $book->id }})">Update</button>
                <button class="btn btn-danger text-bg-danger" onclick="destroy({{ $book->id }})">Delete</button>    </td>
        </tr>
        @endforeach
    </tbody>
</table>