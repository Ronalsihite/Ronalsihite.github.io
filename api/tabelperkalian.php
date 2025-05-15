<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tabel Perkalian 10x10 Interaktif</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
    }

    h2 {
      text-align: center;
      margin-top: 30px;
    }

    table {
      border-collapse: collapse;
      margin: 20px auto;
      width: 80%;
      max-width: 600px;
    }

    th, td {
      border: 1px solid #333;
      padding: 12px;
      text-align: center;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    th {
      background-color: #1f3c88;
      color: #fff;
    }

    .highlight {
      background-color: #ffd700 !important;
      color: #000;
      font-weight: bold;
    }

    #result {
      text-align: center;
      font-size: 22px;
      margin-top: 20px;
      color: #1f3c88;
    }
  </style>
</head>
<body>

<h2>Tabel Perkalian 10x10 Interaktif</h2>

<table id="multiplication-table">
  <thead>
    <tr>
      <th>x</th>
      <!-- Header kolom 1 - 10 -->
      <script>
        for (let i = 1; i <= 10; i++) {
          document.write(`<th>${i}</th>`);
        }
      </script>
    </tr>
  </thead>
  <tbody>
    <script>
      for (let row = 1; row <= 10; row++) {
        document.write('<tr>');
        document.write(`<th>${row}</th>`); // Header baris
        for (let col = 1; col <= 10; col++) {
          document.write(`<td onclick="highlightCell(this, ${row}, ${col})">${row * col}</td>`);
        }
        document.write('</tr>');
      }
    </script>
  </tbody>
</table>

<div id="result">Klik sel untuk melihat hasil perkalian</div>

<script>
  function highlightCell(cell, row, col) {
    // Hapus semua highlight sebelumnya
    const allCells = document.querySelectorAll('td');
    allCells.forEach(c => c.classList.remove('highlight'));

    // Tambahkan highlight ke sel yang diklik
    cell.classList.add('highlight');

    // Tampilkan hasil perkalian
    document.getElementById('result').textContent = `Hasil: ${row} × ${col} = ${row * col}`;
  }
</script>

</body>
</html>
