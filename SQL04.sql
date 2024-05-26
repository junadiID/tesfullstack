SELECT mk.NamaMataKuliah AS nama_mata_kuliah, AVG(n.Grade) AS rata_rata_nilai FROM tnilai AS n JOIN tmatakuliah AS mk ON n.KodeMK = mk.KodeMK GROUP BY mk.NamaMataKuliah;
