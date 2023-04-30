<!DOCTYPE html>
<html>
  <head>
    <title>Polisi - Lapor Kejahatan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

<style>
  
.jumbotron {
	background-image: url('https://images.unsplash.com/photo-1547127796-06bb04e4b315?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80');
	background-size: cover;
	background-position: center;
	height: 500px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	color: #fff;
	text-align: center;
  }
  
  .jumbotron h1 {
	font-size: 4rem;
	margin-bottom: 1rem;
  }
  
  .jumbotron p {
	font-size: 2rem;
  }
  

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
  }
  
  body {
	font-family: Georgia, 'Times New Roman', Times, serif;
	font-size: 16px;
	line-height: 1.5;
  }
  
  header {
	background-color: #333;
	color: #fff;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 1rem;
  }
  
  header h1 {
	font-size: 2rem;
  }
  
  nav ul {
	display: flex;
	list-style: none;
  }
  
  nav li {
	margin-left: 1rem;
  }
  
  nav a {
	color: #fff;
	text-decoration: none;
	padding: 0.5rem;
	transition: background-color 0.2s ease;
  }
  
  nav a:hover {
	background-color: #666;
  }
  
  main {
	padding: 1rem;
  }
  
  #lapor form {
	display: flex;
	flex-direction: column;
	max-width: 500px;
	margin: 0 auto;
  }
  
  #lapor label {
	margin-bottom: 0.5rem;
  }
  
  h2 {
	text-align: center;
	margin-bottom: 20px;
  }

  p {
	margin-top: 20px;
	text-align: center;
  }
</style>

  <body>

    <header>
      <h1>Lapor Pak</h1>
      <nav>
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Lapor Kejahatan</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </nav>
    </header>

    <div class="jumbotron">
      <h1>Segera Lapor Keresahan Anda!</h1>
      <p>Laporan diproses jika sudah bayar!</p>
    </div>


    <main>
      <section id="lapor">
        <h2>Lapor Kejahatan</h2>
        <form>
          <label for="jenis-kejahatan">Jenis Kejahatan:</label>
          <select id="jenis-kejahatan" name="jenis-kejahatan">
            <option value="pencurian">Pencurian</option>
            <option value="perampokan">Perampokan</option>
            <option value="pemerkosaan">Pemerkosaan</option>
            <option value="pembunuhan">Pembunuhan</option>
            <option value="lainnya">Lainnya</option>
          </select>
          <label for="deskripsi">Deskripsi:</label>
          <textarea id="deskripsi" name="deskripsi" rows="5"></textarea>
          <label for="lokasi">Lokasi Kejadian:</label>
          <input type="text" id="lokasi" name="lokasi">
          <button type="submit">Kirim Laporan</button>
        </form>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Polisi - Lapor Kejahatan</p>
    </footer>
  </body>
</html>
