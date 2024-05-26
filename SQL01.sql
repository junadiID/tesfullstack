SELECT m.NamaMahasiswa AS nama_mahasiswa, mk.NamaMataKuliah AS NamaMataKuliah, n.Grade FROM tmahasiswa m JOIN tnilai n ON m.NRIM = n.NRIM JOIN tmatakuliah mk ON n.KodeMK = mk.KodeMK WHERE TIMESTAMPDIFF(YEAR, m.TglLahir, CURDATE()) > 25 AND n.Grade < 60;