<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GD 4 Halaman 2 - Stefanus Vemas</title>
    <style>
      legend {
        font-size: 30px;
      }
      td,
      th {
        padding: 5px;
        text-align: center;
        border: 1px solid;
      }
      .sesi {
        background-color: bisque;
      }
    </style>
  </head>
  <body>
    <legend>Schedule</legend>
    <ul style="list-style-type: square">
      <li><a href="{{url('halaman1')}}">Page 1</a></li>
      <li><a href="{{url('halaman2')}}">Page 2</a></li>
    </ul>

    <hr style="border: dotted" />

    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <th colspan="6" style="background-color: rgb(230, 171, 84)">
          Jadwal Kuliahku
        </th>
      </tr>
      <tr>
        <th>Sesi</th>
        <th>Senin</th>
        <th>Selasa</th>
        <th>Rabu</th>
        <th>Kamis</th>
        <th>Jumat</th>
      </tr>

      <tr>
        <td>1</td>
        <td></td>
        <td class="sesi">Pemrograman Web</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>2</td>
        <td class="sesi">Peretasan Etis</td>
        <td></td>
        <td></td>
        <td></td>
        <td class="sesi">Manajemen Proyek Perangkat Lunak</td>
      </tr>

      <tr>
        <td>3</td>
        <td></td>
        <td></td>
        <td></td>
        <td class="sesi">Penjaminan Mutu Perangkat Lunak</td>
        <td rowspan="2" class="sesi">Pemrograman Berbasis Platform</td>
      </tr>

      <tr>
        <td>4</td>
        <td></td>
        <td></td>
        <td></td>
        <td class="sesi">Pemrograman Berbasis Komputasi Awan</td>
      </tr>
    </table>
  </body>
</html>
