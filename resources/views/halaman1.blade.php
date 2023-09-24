<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GD 4 Halaman 1 - 210711398</title>
    <style>
      img {
        border-radius: 50%;
        width: 150px;
      }

      legend {
        font-size: 30px;
      }
      td,
      th {
        padding: 5px;
        border: 1px solid;
      }
    </style>
  </head>
  <body>
    <fieldset>
      <legend>Contact</legend>
      <ul style="list-style-type: square">
        <li><a href="{{url('halaman1')}}">Page 1</a></li>
        <li><a href="{{url('halaman2')}}">Page 2</a></li>
      </ul>
      <hr style="border: dotted" />

      <table style="width: auto">
        <tr>
          <th colspan="5">List kontak orang Penting</th>
        </tr>

        <tr>
          <th>No</th>
          <th>Photo</th>
          <th>Nama</th>
          <th>Telp</th>
          <th>Domisili</th>
        </tr>

        <tr>
          <td>1</td>
          <td><img src="{{ asset('images/Picture1.jpg')}}" alt="1" /></td>
          <td>Stefanus</td>
          <td>021 997899</td>
          <td>Babarsari</td>
        </tr>

        <tr>
          <td>2</td>
          <td><img src="{{ asset('images/Picture1.jpg')}}" alt="1" /></td>
          <td>Vemas</td>
          <td>021 718920</td>
          <td>Sleman</td>
        </tr>

        <tr>
          <td>3</td>
          <td><img src="{{ asset('images/Picture1.jpg')}}" alt="1" /></td>
          <td>Aditya</td>
          <td>021 892839</td>
          <td>Yogyakarta</td>
        </tr>
      </table>
    </fieldset>
  </body>
</html>
