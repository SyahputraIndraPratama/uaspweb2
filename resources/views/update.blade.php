<div class="p2">
    <div class="form-group mb-3">
        <input type="text" name="judul" id="judul" class="form-control "placeholder="judul" required value="{{ $Books->judul }}" autocomplete="off">
    </div>
    <div class="form-group mb-3">
        <input type="text" name="penulis" id="penulis" class="form-control " placeholder="penulis..." required value="{{ $Books->penulis }}" autocomplete="off" >
    </div>
   
    <div class="form-group mb-3">
        <input type="text" name="penerbit" id="penerbit" class="form-control " placeholder="penerbit..." required value="{{ $Books->penerbit }}" autocomplete="off" >
    </div>
   
    <div class="form-group mb-3">
        <input type="number" name="harga" id="harga" class="form-control " placeholder="harga..." required value="{{ $Books->harga }}" autocomplete="off" >
    </div>
   
      </div>
    <div class="form-group mt-5">
    <button class="btn btn-primary" onclick="update({{ $Books->id }})">Update Buku</button>
    </div>
</div>