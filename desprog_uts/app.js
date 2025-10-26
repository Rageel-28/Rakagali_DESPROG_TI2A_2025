// kunci penyimpanan di Web Storage
const LS_KEY = 'laporan_cempluk';       // localStorage: array semua laporan
const LAST_ID_KEY = 'laporan_last_id';  // sessionStorage: id laporan terakhir (untuk success.html)

// baca semua data laporan dari localStorage (hasilnya array)
function readStore() {
  try {
    const raw = localStorage.getItem(LS_KEY) || '[]'; // ambil string JSON, default '[]'
    const arr = JSON.parse(raw);                      // parse ke JS object
    return Array.isArray(arr) ? arr : [];             // pastikan berupa array
  } catch {
    return [];                                        // jika JSON rusak, kembalikan array kosong
  }
}

// tulis (replace) seluruh array laporan ke localStorage
function writeStore(arr) {
  localStorage.setItem(LS_KEY, JSON.stringify(arr));  // simpan sebagai string JSON
}

// hapus semua data laporan dari localStorage
function resetStore() {
  localStorage.removeItem(LS_KEY);
}

// tambah 1 record laporan ke localStorage
function addRecord({ nama, email, jenis, judul, pesan }) {
  // buat id unik dari timestamp: YYYYMMDDHHMMSS (14 digit pertama)
  const id = new Date().toISOString().replace(/[-:.TZ]/g,'').slice(0,14);

  // objek laporan
  const rec = {
    id, nama, email, jenis, judul, pesan,
    waktu: new Date().toISOString() // simpan waktu ISO untuk pengurutan
  };

  // gabungkan dengan data lama, lalu simpan
  const data = readStore();
  data.push(rec);
  writeStore(data);

  // simpan id terakhir ke sessionStorage (untuk success.html)
  sessionStorage.setItem(LAST_ID_KEY, id);

  return rec; // opsional: balikan objek yang barusan disimpan
}

// cari 1 record berdasarkan id
function getById(id) {
  return readStore().find(x => x.id === id) || null;
}

// ambil record paling baru berdasarkan waktu
function latestRecord() {
  const data = readStore();
  if (!data.length) return null; // jika kosong
  // urut desc (baru → lama) berdasarkan waktu, ambil indeks 0
  return [...data].sort((a,b)=> new Date(b.waktu) - new Date(a.waktu))[0];
}

// format ISO date → “22 Okt 2025 14.05”
function formatIDDate(iso) {
  const d = new Date(iso);
  if (isNaN(d)) return '-'; // jika tanggal tidak valid
  return d.toLocaleString('id-ID', {
    day:'2-digit', month:'short', year:'numeric',
    hour:'2-digit', minute:'2-digit'
  }).replace('.', ''); // hilangkan titik di singkatan bulan jika ada
}

// VALIDASI HANYA dipakai di index.html (halaman form)
function validateInput(p) {
  const err = [];
  // cek wajib isi
  if (!p.nama || !p.email || !p.jenis || !p.judul || !p.pesan) err.push('Form tidak lengkap.');
  // cek email sederhana
  if (p.email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(p.email)) err.push('Email tidak valid.');
  // cek judul & pesan
  if (p.judul.length > 100) err.push('Judul terlalu panjang (maks 100).');
  if (p.pesan.length < 10) err.push('Pesan terlalu pendek (min 10).');
  return err;
}

// expose ke window agar fungsi bisa dipakai di file HTML lain
window.readStore = readStore;
window.writeStore = writeStore;
window.resetStore = resetStore;
window.addRecord = addRecord;
window.getById = getById;
window.latestRecord = latestRecord;
window.formatIDDate = formatIDDate;
window.validateInput = validateInput;
