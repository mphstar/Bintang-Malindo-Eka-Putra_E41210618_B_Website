@extends('app')

@section('title')
    Multiple Upload with Dropzone File Laravel
@endsection

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <h2 class="text-center my-5">Multiple Upload with Dropzone File Laravel</h2>
                <form action="{{ route('dropzone.proses') }}" class="dropzone" id="image-upload" name="file"
                    files="true" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <h3>Upload Multiple Images</h3>
                    </div>
                </form>
                <button type="button" id="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
@endsection

@section('otherjs')
    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize: 10,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            createImageThumbnails: true,
            autoProcessQueue: false,
            init: function() {
                var myDropzone = this;

                // aksi ketika button diklik
                $('#button').click(function(e) {
                    e.preventDefault();
                    myDropzone.processQueue();
                });

                this.on('sending', function(file, xhr, formData) {
                    // Tambahkan semua input form ke formData dropzone yang akan dipost
                    var data = $('#image-upload').serializeArray();
                    $.each(data, function(key, el) {
                        formData.append(el.name, el.value);
                    });
                })
            },
            success: function(file, respone) {
                // Menampilkan alert berhasil
                Swal.fire(
                    'Berhasil',
                    'Data ' + respone.success + ' Berhasil ditambahkan',
                    'success'
                )
            }
        }
    </script>
@endsection
