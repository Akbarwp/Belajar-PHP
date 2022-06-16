$(function() {
    
    $('.tombolTambahData').on('click', function() {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('.modal-body form').attr('action', 'http://localhost/belajar/MVC/public/mahasiswa/tambah');

        $.ajax({
            success: function(data) {
                $('#nama').val("");
                $('#nim').val("");
                $('#email').val("");
                $('#jurusan').val("---Pilih Jurusan---");
            }
        });
    });

    $('.tampilModalUbah').on('click', function() {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah');
        $('.modal-body form').attr('action', 'http://localhost/belajar/MVC/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/belajar/MVC/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });

});