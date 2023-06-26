window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {
        let duration = jQuery('#fsalesxpr').attr('data-duration');
        if (duration == 'false') {
            // duration = 'false';
            autoPlay = false;
        } else {
            autoPlay = duration;
        }


        console.log(duration);
        jQuery('.fsalesx').flickity({
            // options
            cellAlign: 'center', // Mengatur sel alignment ke bawah
            contain: true,
            autoPlay: autoPlay,
            wrapAround: true, // Mengaktifkan wrap-around
            prevNextButtons: false, // Menonaktifkan tombol sebelumnya dan selanjutnya
            pageDots: false, // Menonaktifkan titik halaman
            pauseAutoPlayOnHover: false, // Menonaktifkan jeda autoplay saat dihover
            draggable: false, // Membuat slide tidak dapat di-drag
            freeScroll: false, // Membuat slide tidak dapat di-scroll
            groupCells: 1, // Mengatur jumlah sel yang ditampilkan
            adaptiveHeight: true, // Mengatur tinggi sel sesuai dengan konten
            bottomEdge: true, // Mengatur sel tidak dapat melewati batas bawah
        });

    });







});