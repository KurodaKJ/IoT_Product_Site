<!DOCTYPE html>
<html lang="nl">
<head>
    <title>GildeDevopsSolutions - Contact</title>
    <?php include 'sitetemplate/head.php'; ?>
</head>
<body>
    <header>
        <?php include 'sitetemplate/navbar.php'; ?>
    </header>

    <main>
        <section class="contact-section">
            <div class="container">
                <div class="contact-above">
                    <h2>Contact</h2>
                    <i class="material-icons">place</i><p>Bredeweg 235, 6042 GE Roermond</p>
                    <i class="material-icons">local_phone</i><p>Tel. +31 6 14884513</p>
                    <i class="material-icons">local_post_office</i><p>Support@GildeDevops.nl</p>
                </div>
 
                <div class="contact-below">
                    <form action="sitetemplate/connect.php" method="post">
                        <label for="firstname">Voornaam</label>
                        <input type="text" name="firstName" id="firstName" placeholder="Voornaam.." required>

                        <label for="surname">Achternaam</label>
                        <input type="text" name="surName" id="surName" placeholder="Acternaam.." required>

                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="voorbeeld@gmail.com.." required>

                        <label for="subject">Onderwerp</label>
                        <input type="text" name="subject" id="subject" placeholder="Onderwerp.." required>

                        <label for="message">Bericht</label>
                        <textarea name="message" id="message" placeholder="Uw bericht.." cols="30" rows="10" required></textarea>

                        <input type="submit" class="contact-submit" value="Versturen">
                    </form>
                </div>
            </div>

            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10001.800629967694!2d6.001932192829345!3d51.192356423352074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c74b54d8f5115b%3A0xec10121b95befa4b!2sGilde%20Opleidingen!5e0!3m2!1snl!2snl!4v1634113652630!5m2!1snl!2snl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </main>
    <footer>
        <?php include 'sitetemplate/footer.php'; ?>
    </footer>
</body>
</html>