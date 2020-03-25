<!DOCTYPE html>

<html>



<head>

  <style>

    table {

      font-family: arial, sans-serif;

      border-collapse: collapse;

      width: 100%;

    }



    td,

    th {

      border: 1px solid #dddddd;

      text-align: left;

      padding: 8px;

    }



    tr:nth-child(even) {

      background-color: #dddddd;

    }

  </style>

</head>

<?php

require_once("database.php");

?>

<body>



  <h2>DAFTAR NAMA MAHASISWA KELAS ISA KP A TAHUN AJARAN 2020/2021</h2>



  <table>

    <tr>

      <th>NRP</th>

      <th>Nama</th>

      <th>Jurusan</th>

    </tr>

    <?php

    $sql = "SELECT * FROM driver ORDER by name ASC";

    $result = $c->query($sql);

    if ($result->num_rows > 0) {



      $drivers = array();

      $i = 0;

      while ($obj = $result->fetch_assoc()) {

        echo '<tr>';

        echo '<td>' . $obj['id'] . '</td>';

        echo '<td>' . $obj['name'] . '</td>';

        echo '<td>' . $obj['license'] . '</td>';

      }

    } else {

      echo "Empty table.";

      die();

    }

    ?>

  </table>



</body>



</html>
