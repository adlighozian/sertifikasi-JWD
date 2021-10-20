function cekForm() {
    const foto = document.getElementById('foto')
    if (foto.value === '' || foto.value === 'null') {
        isInvalid(foto, 'foto', 'Foto tidak boleh kosong')
    }

    const namaLengkap = document.getElementById('namalengkap')
    if (namaLengkap.value === '' || namaLengkap.value === 'null') {
        isInvalid(namaLengkap, 'namalengkap', 'Nama lengkap tidak boleh kosong')
    } else if (namaLengkap.value.length <= 3) {
        isInvalid(namaLengkap, 'namalengkap', 'Nama lengkap minimal 3 karakter')
    }

    const namaPanggilan = document.getElementById('namapanggilan')
    if (namaPanggilan.value === '' || namaPanggilan.value === 'null') {
        isInvalid(namaPanggilan, 'namapanggilan', 'Nama panggilan tidak boleh kosong')
    } else if (namaPanggilan.value.length <= 3) {
        isInvalid(namaPanggilan, 'namapanggilan', 'Nama panggilan minimal 3 karakter')
    }

    const tempatLahir = document.getElementById('tempatlahir')
    if (tempatLahir.value === '' || tempatLahir.value === 'null') {
        isInvalid(tempatLahir, 'tempatlahir', 'Tempat lahir tidak boleh kosong')
    }

    const tanggalLahir = document.getElementById('tanggallahir')
    if (tanggalLahir.value === '' || tanggalLahir.value === 'null') {
        isInvalid(tanggalLahir, 'tanggallahir', 'Tanggal lahir tidak boleh kosong')
    } else {
        const usia = document.getElementById('usia')
        let age = calculateAge(new Date(tanggalLahir.value))

        usia.value = age
    }

    const jenisKelamin = document.getElementById('jeniskelamin')
    if (jenisKelamin.value === '#') {
        isInvalid(jenisKelamin, 'jeniskelamin', 'Jenis kelamin tidak boleh kosong')
    }

    const kotaTinggal = document.getElementById('kotatinggal')
    if (kotaTinggal.value === '' || kotaTinggal.value === 'null') {
        isInvalid(kotaTinggal, 'kotatinggal', 'Kota tinggal tidak boleh kosong')
    }

    const email = document.getElementById('email')
    if (email.value === '' || email.value === 'null') {
        isInvalid(email, 'email', 'Email tidak boleh kosong')
    }

    const noHp = document.getElementById('nohp')
    if (noHp.value === '' || noHp.value === 'null') {
        isInvalid(noHp, 'nohp', 'Nomor handphone tidak boleh kosong')
    } else if (no.value < 4) {
        isInvalid(noHp, 'nohp', 'Nomor handphone minimal 4 karakter')
    }

    const mediaSosial = document.getElementById('mediasosial')
    if (mediaSosial.value === '#') {
        isInvalid(mediaSosial, 'mediasosial', 'Media sosial tidak boleh kosong')
    }

    event.preventDefault();
}

function isInvalid(selector, id, message) {
    selector.classList.add('is-invalid')
    document.getElementById(id + '_validation').innerHTML = message
}

function calculateAge(date) {
    const now = new Date();
    const diff = Math.abs(now - date);
    const age = Math.floor(diff / (1000 * 60 * 60 * 24 * 365));
    return age
}