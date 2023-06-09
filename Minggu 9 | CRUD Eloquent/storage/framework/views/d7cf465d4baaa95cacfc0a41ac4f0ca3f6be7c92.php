<?php $__env->startSection('main'); ?>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Profile Statistics</h3>
        </div>
        <div class="page-content">
            <div class="d-flex justify-content-between mb-4">
                <div class="">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active "><a aria-current="page" href="<?php echo e(route('admin.dashboard')); ?>">Pengalaman Kerja</a>
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>

        <div class="d-flex justify-content-between mb-4">
            <form class=" w-50 w-md-100" action="/home/search" method="get">
                <div class="d-flex gap-2">
                    <div class="col-8">
                        <input name="nama" type="text" class="form-control py-2 shadow-none" id="basicInput"
                            placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                            </path>
                        </svg>
                    </button>
                    <a class="col-1 btn btn-primary" href="<?php echo e(route('admin.dashboard')); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z">
                            </path>
                            <path
                                d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z">
                            </path>
                        </svg></a>
                </div>
            </form>
            <div class="">
                <a href="/home/create" class="btn icon icon-left btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg> Tambah Data</a>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">Data Pengalaman Kerja</h4>
                    <div class="table-responsive mt-4">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Keluar</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-bold-500"><?php echo e($item->nama); ?></td>
                                        <td><?php echo e($item->jabatan); ?></td>
                                        <td class="text-bold-500"><?php echo e($item->tahun_masuk); ?></td>
                                        <td><?php echo e($item->tahun_keluar); ?></td>
                                        <td class="text-center">
                                            <a href="/home/update/<?php echo e($item->id); ?>" class="btn icon btn-primary"><i
                                                    class="bi bi-pencil"></i></a>
                                            <button onclick="dialogHapus('<?php echo e($item->id); ?>', '<?php echo e($item->nama); ?>')"
                                                class="btn icon btn-danger"><i class="bi bi-x"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mb-4">
            
            <?php echo e($data->links()); ?>

        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Mazer</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="https://saugi.me">Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('otherjs'); ?>
<script>
        // TODO: Cek jika ada session success maka akan tampil Sweet Alert
        <?php if(session('success')): ?>
            Swal.fire(
                'Berhasil',
                '<?php echo e(session('success')); ?>',
                'success'
            )
        <?php endif; ?>


        // fungsi untuk menampilkan dialog konfirmasi
        // dimana terdapat parameter id dan nama sesuai data yang diklik
        function dialogHapus(id, nama) {
            Swal.fire({
                title: 'Hapus Data',
                text: "Apakah anda yakin ingin menghapus " + nama,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = '/home/delete/' + id;
                    // jika diklik yes maka akan dialihkan ke rute proses delete
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mphstar/Development/Workshop Web/Minggu 8 | CRUD Eloquent/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>