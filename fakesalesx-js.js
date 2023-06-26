window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {
        jQuery('.fsalesx').flickity({
            // options
            cellAlign: 'center', // Mengatur sel alignment ke bawah
            contain: true,
            wrapAround: true, // Mengaktifkan wrap-around
            autoPlay: 7000, // Durasi autoplay
            prevNextButtons: false, // Menonaktifkan tombol sebelumnya dan selanjutnya
            pageDots: false, // Menonaktifkan titik halaman
            pauseAutoPlayOnHover: false, // Menonaktifkan jeda autoplay saat dihover
            draggable: false, // Membuat slide tidak dapat di-drag
            freeScroll: false, // Membuat slide tidak dapat di-scroll
            groupCells: 1, // Mengatur jumlah sel yang ditampilkan
            // fullscreen: true, // Mengaktifkan mode layar penuh
            // lazyLoad: true, // Mengaktifkan lazy load
            // rightToLeft: true, // Mengatur arah slide ke kanan
            // initialIndex: 2, // Mengatur slide pertama yang ditampilkan
            // accessibility: true, // Mengaktifkan aksesibilitas
            adaptiveHeight: true, // Mengatur tinggi sel sesuai dengan konten
            bottomEdge: true, // Mengatur sel tidak dapat melewati batas bawah
        });

    });







});