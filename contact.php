<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Komunitas Mendaki Gunung</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Kontak Kami</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="contact.php">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Hubungi Kami</h2>
            <form action="" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name"
                required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Kirim</button>
            </form>
            <?php
            include 'db.php'; 

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

               
                $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
                if ($conn->query($sql) === TRUE) {
                    echo "<p>Pesan Anda telah dikirim!</p>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Komunitas Mendaki Gunung</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>