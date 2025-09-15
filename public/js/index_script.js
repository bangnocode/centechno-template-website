function contactWarning() {
    Swal.fire({
        title: "Maaf",
        text: "Contact Masih Belum Tersedia",
        icon: "warning"
    });
}

function toggleMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileMenu.classList.contains('hidden')) {
        // Open menu
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('animate-fade-in');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent background scroll
    } else {
        // Close menu
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('animate-fade-in');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        document.body.style.overflow = 'auto'; // Re-enable background scroll
    }
}

function closeMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    mobileMenu.classList.add('hidden');
    mobileMenu.classList.remove('animate-fade-in');
    menuIcon.classList.remove('hidden');
    closeIcon.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close mobile menu when clicking outside
document.addEventListener('click', function (event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuButton = document.getElementById('mobile-menu-button');

    if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
        if (!mobileMenu.classList.contains('hidden')) {
            closeMenu();
        }
    }
});

// Close mobile menu on window resize (when switching to desktop view)
window.addEventListener('resize', function () {
    if (window.innerWidth >= 768) { // md breakpoint
        closeMenu();
    }
});

// auto-update tahun copyright
document.getElementById("year").textContent = new Date().getFullYear();

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#form_survei').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: "/survei",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",

            // 🔹 Tampilkan loading sebelum request dikirim
            beforeSend: function () {
                Swal.fire({
                    title: 'Mengirim data...',
                    text: 'Mohon tunggu sebentar',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            },

            success: function () {
                Swal.fire("Berhasil!", "Data ditambahkan", "success");
                $('#form_survei')[0].reset();
            },

            error: function (xhr) {
                Swal.fire("Gagal!", "Terjadi Kesalahan", "error");
                console.log("Error:", xhr.status, xhr.responseText);
            }
        });
    });
});