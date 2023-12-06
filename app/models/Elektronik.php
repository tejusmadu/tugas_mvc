<?php

namespace App\Models;

use App\Core\Model;

class Elektronik extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_elektronik";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $nama_elektronik = $_POST['nama_elektronik'];
        $jenis_elektronik = $_POST['jenis_elektronik'];
        $warna_elektronik = $_POST['warna_elektronik'];

        $sql = "INSERT INTO tb_elektronik (nama_elektronik, jenis_elektronik, warna_elektronik)
                VALUES (:nama_elektronik, :jenis_elektronik, :warna_elektronik)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama_elektronik", $nama_elektronik);
        $stmt->bindParam(":jenis_elektronik", $jenis_elektronik);
        $stmt->bindParam(":warna_elektronik", $warna_elektronik);

        $stmt->execute();
    }

    public function edit($id)
    {
        $query = "SELECT * FROM tb_elektronik WHERE elektronik_id=:elektronik_id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":elektronik_id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $nama_elektronik = $_POST['nama_elektronik'];
        $jenis_elektronik = $_POST['jenis_elektronik'];
        $warna_elektronik = $_POST['warna_elektronik'];
        $id = $_POST['elektronik_id'];

        $sql = "UPDATE tb_elektronik
                SET nama_elektronik=:nama_elektronik, jenis_elektronik=:jenis_elektronik, warna_elektronik=:warna_elektronik
                WHERE elektronik_id=:elektronik_id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama_elektronik", $nama_elektronik);
        $stmt->bindParam(":jenis_elektronik", $jenis_elektronik);
        $stmt->bindParam(":warna_elektronik", $warna_elektronik);
        $stmt->bindParam(":elektronik_id", $id);

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_elektronik WHERE elektronik_id=:elektronik_id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":elektronik_id", $id);
        $stmt->execute();
    }
}
