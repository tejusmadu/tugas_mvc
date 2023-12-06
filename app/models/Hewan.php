<?php

namespace App\Models;

use App\Core\Model;

class Hewan extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_hewan";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $nama_hewan = $_POST['nama_hewan'];
        $jenis_hewan = $_POST['jenis_hewan'];
        $warna_hewan = $_POST['warna_hewan'];

        $sql = "INSERT INTO tb_hewan (nama_hewan, jenis_hewan, warna_hewan)
                VALUES (:nama_hewan, :jenis_hewan, :warna_hewan)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama_hewan", $nama_hewan);
        $stmt->bindParam(":jenis_hewan", $jenis_hewan);
        $stmt->bindParam(":warna_hewan", $warna_hewan);

        $stmt->execute();
    }

    public function edit($id)
    {
        $query = "SELECT * FROM tb_hewan WHERE hewan_id=:hewan_id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":hewan_id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $nama_hewan = $_POST['nama_hewan'];
        $jenis_hewan = $_POST['jenis_hewan'];
        $warna_hewan = $_POST['warna_hewan'];
        $id = $_POST['hewan_id'];

        $sql = "UPDATE tb_hewan
                SET nama_hewan=:nama_hewan, jenis_hewan=:jenis_hewan, warna_hewan=:warna_hewan
                WHERE hewan_id=:hewan_id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama_hewan", $nama_hewan);
        $stmt->bindParam(":jenis_hewan", $jenis_hewan);
        $stmt->bindParam(":warna_hewan", $warna_hewan);
        $stmt->bindParam(":hewan_id", $id);

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM hewan WHERE hewan_id=:hewan_id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":hewan_id", $id);
        $stmt->execute();
    }
}
