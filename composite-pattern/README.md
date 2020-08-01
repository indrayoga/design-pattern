#Composite Pattern
Composite pattern merupakan bagian dari structural pattern,
composite pattern cocok digunakan untuk struktur data seperti _tree_.
##Contoh:
Dalam organisasi perusahaan bentuk terkecil dari perusahaan tersebut adalah **pegawai** dan pegawai pegawai tersebut di kelompokkan dalam beberapa divisi/bagian juga dan dalam divisi/bagian itu juga bisa terdapat divisi/bagian yang lebih kecil juga. Misal kita diminta bukan saja untuk menghitung gaji pegawai tetapi juga summary gaji pegawai dalam suatu divisi/bagian.
##Langkah-langkah:

1. buat class **Pegawai** dan **Divisi**, class **Pegawai** akan merupakan bentuk elemen terkecil, dan **Divisi** merupakan container class yang bisa menampung **divisi** lain dan juga **Pegawai**.
2. buat interface **Organisasi** yang kedua class di langkah no 1 akan implementasikan.
