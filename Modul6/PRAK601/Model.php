<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
</body>

</html>
<?php
require("Koneksi.php");

// fungsi getdata
function getDataBuku()
{
    $statement = koneksi()->prepare('SELECT * FROM buku');
    $statement->execute();
    $result = $statement->fetchall();

    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['judul_buku'] . "</td>";
        echo "<td>" . $row['penulis'] . "</td>";
        echo "<td>" . $row['penerbit'] . "</td>";
        echo "<td>" . $row["tahun_terbit"] . "</td>";
        echo "<td>";
        echo "<a href='FormBuku.php? id_buku=" . $row['id_buku'] . "' class='btn btn-warning btn-sm ml-2'>Ubah</a>";
        echo " ";
        echo "<a href='Buku.php? id_buku=" . $row['id_buku'] . "' class='btn btn-danger btn-sm ml-2' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
        echo "</td>";
        echo "</tr>";
    }
}
function getDataMember()
{
    $statement = koneksi()->prepare('SELECT * FROM member');
    $statement->execute();
    $result = $statement->fetchall();

    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['nama_member'] . "</td>";
        echo "<td>" . $row['nomor_member'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['alamat'] . "</td>";
        echo "<td>" . $row["tgl_mendaftar"] . "</td>";
        echo "<td>" . $row["tgl_terakhir_bayar"] . "</td>";
        echo "<td>";
        echo "<a href='FormMember.php?id_member=" . $row['id_member'] . "' class='btn btn-warning btn-sm ml-2'>Ubah</a>";
        echo " ";
        echo "<a href='Member.php?id_member=" . $row['id_member'] . "' class='btn btn-danger btn-sm ml-2' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
        echo "</td>";
        echo "</tr>";
    }
}
function getDataPeminjaman()
{
    $statement = koneksi()->prepare('SELECT * FROM peminjaman');
    $statement->execute();
    $result = $statement->fetchall();

    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row["tgl_pinjam"] . "</td>";
        echo "<td>" . $row["tgl_kembali"] . "</td>";
        echo "<td>";
        echo "<a href='FormPeminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "' class='btn btn-warning btn-sm ml-2'>Ubah</a>";
        echo " ";
        echo "<a href='Peminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "' class='btn btn-danger btn-sm ml-2' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
        echo "</td>";
        echo "</tr>";
    }
}

// fungsi insert
function insertBuku($judul, $penulis, $penerbit, $thnterbit)
{
    $statement = koneksi()->prepare('INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (:judul, :penulis, :penerbit, :tahun_terbit)');
    $result = $statement->execute(array(':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun_terbit' => $thnterbit));
    if (!empty($result)) {
        header('location:Buku.php');
    }
}
function insertMember($nama, $nomor_member, $password, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
{
    $statement = koneksi()->prepare('INSERT INTO member (nama_member, nomor_member, password, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (:nama_member, :nomor_member, :password, :alamat, :tgl_mendaftar, :tgl_terakhir_bayar)');
    $result = $statement->execute(array(':nama_member' => $nama, ':nomor_member' => $nomor_member, ':password' => $password, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
    if (!empty($result)) {
        header('location:Member.php');
    }
}
function insertPeminjaman($tglpinjam, $tglkembali)
{
    $statement = koneksi()->prepare('INSERT INTO peminjaman (tgl_pinjam, tgl_kembali) VALUES (:tglpinjam, :tglkembali)');
    $result = $statement->execute(array(':tglpinjam' => $tglpinjam, ':tglkembali' => $tglkembali));

    if (!empty($result)) {
        header('location:Peminjaman.php');
    }
}

// fungsi edit
function editBuku()
{
    $statement = koneksi()->prepare('SELECT * FROM buku where id_buku=' . $_GET["id_buku"]);
    $statement->execute();
    $GLOBALS['result'] = $statement->fetchAll();
}
function editMember()
{
    $statement = koneksi()->prepare('SELECT * FROM member where id_member=' . $_GET["id_member"]);
    $statement->execute();
    $GLOBALS['result'] = $statement->fetchAll();
}
function editPeminjaman()
{
    $statement = koneksi()->prepare('SELECT * FROM peminjaman WHERE id_peminjaman =' . $_GET['id_peminjaman']);
    $statement->execute();
    $GLOBALS['result'] = $statement->fetchAll();
}

// fungsi update
function updateBuku($id, $judul, $penulis, $penerbit, $thnterbit)
{
    $statement = koneksi()->prepare('UPDATE buku SET judul_buku="' . $judul . '", penulis="' . $penulis . '", penerbit="' . $penerbit . '", tahun_terbit="' . $thnterbit . '" WHERE id_buku=' . $id);
    $result = $statement->execute();
    if ($result) {
        header('location:Buku.php');
    }
}
function updateMember($id, $nama, $nomor_member, $password, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
{
    $statement = koneksi()->prepare('UPDATE member SET nama_member="' . $nama . '", nomor_member="' . $nomor_member . '", password="' . $password . '", alamat="' . $alamat . '", tgl_mendaftar="' . $tgl_mendaftar . '", tgl_terakhir_bayar="' . $tgl_terakhir_bayar . '"WHERE id_member=' . $id);
    $result = $statement->execute();
    if ($result) {
        header('location:Member.php');
    }
}
function updatePeminjaman($id, $tglpinjam, $tglkembali)
{
    $statement = koneksi()->prepare('UPDATE peminjaman SET tgl_pinjam="' . $tglpinjam . '", tgl_kembali="' . $tglkembali . '" WHERE id_peminjaman=' . $id);
    $result = $statement->execute();
    if ($result) {
        header('location:Peminjaman.php');
    }
}

// fungsi hapus
function deleteBuku($id_buku)
{
    $statement = koneksi()->prepare('DELETE FROM buku where id_buku=' . $id_buku);
    $result = $statement->execute();
    if ($result) {
        header('location:Buku.php');
    }
}
function deleteMember($id_member)
{
    $statement = koneksi()->prepare('DELETE FROM member where id_member=' . $id_member);
    $result = $statement->execute();
    if ($result) {
        header('location:Member.php');
    }
}
function deletePeminjaman($id_peminjaman)
{
    $statement = koneksi()->prepare('DELETE FROM peminjaman WHERE id_peminjaman=' . $id_peminjaman);
    $result = $statement->execute();
    if ($result) {
        header('location:Peminjaman.php');
    }
}
