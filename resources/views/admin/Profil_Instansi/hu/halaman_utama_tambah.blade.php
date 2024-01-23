 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel"><i><strong>Halaman Utama Proil Instansi</strong></i></h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('store_halaman_utama') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                         <label>Yayasan</label>
                         <input type="text" name="nama_yayasan"class="form-control" placeholder="Nama Yayasan">
                     </div>
                     <div class="form-group">
                         <label>Instansi</label>
                         <input type="text" name="nama_instansi"class="form-control"
                             placeholder="Nama Instansi/Sekolah">
                     </div>
                     <div class="form-group">
                         <label>Penjelasan</label>
                         <input type="text" name="penjelasan"class="form-control"
                             placeholder="Penjelasan dari sekolah">
                     </div>
                     <hr>
                     <div class="form-group">
                         <label>Gambar 1</label>
                         <input type="file" name="gambar_pertama"class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Deskripsi Gambar 1</label>
                         <input type="text" name="deskripsi_gambar1"class="form-control"
                             placeholder="Deskripsi dari gambar 1">
                     </div>
                     <div class="form-group">
                         <label>Gambar 2</label>
                         <input type="file" name="gambar_kedua"class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Deskripsi Gambar 2</label>
                         <input type="text" name="deskripsi_gambar2"class="form-control"
                             placeholder="Deskripsi dari gambar 2">
                     </div>
                     <div class="form-group">
                         <label>Gambar 3</label>
                         <input type="file" name="gambar_ketiga"class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Deskripsi Gambar 3</label>
                         <input type="text" name="deskripsi_gambar3"class="form-control"
                             placeholder="Deskripsi dari gambar 3">
                     </div>
                     <button type="submit" class="btn btn-primary mt-3">Submit</button>
                     <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
