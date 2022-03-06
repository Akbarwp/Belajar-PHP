// MENGGUNAKAN AJAX
// // Mengambil elemen yang dibutuhkan
// var keyword = document.getElementById('keyword');
// var tombolCari = document.getElementById('tombolCari');
// var container = document.getElementById('container');

// // Menambahkan event ketika keyword diketik
// keyword.addEventListener('keyup', function() {

//     // Membuat objek ajax
//     var ajax = new XMLHttpRequest();

//     // Mengecek persiapan ajax
//     ajax.onreadystatechange = function() {
//         if(ajax.readyState == 4 && ajax.status == 200) {
//             container.innerHTML = ajax.responseText;
//         }
//     }

//     // Eksekusi ajax
//     ajax.open('GET', 'ajax/barang.php?keyword=' + keyword.value, true);
//     ajax.send();
// });


// MENGGUNAKAN JQUERY
$(document).ready(function() {

    // Menghilangkan tombol cari
    $('#tombolCari').hide();

    // Membuat event ketika keyword diketik
    $('#keyword').on('keyup', function() {

        // Memunculkan loading
        $('.loader').show();

        // ajax menggunakan load dalam jquery
        // $('#container').load('ajax/barang.php?keyword=' + $('#keyword').val());

        // $.get()
        $.get('ajax/barang.php?keyword=' + $('#keyword').val(), function(data) {

            $('#container').html(data);
            $('.loader').hide();
        });
    });
});