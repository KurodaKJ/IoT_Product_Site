<!DOCTYPE html>
<html lang="nl">
<head>
    <title>GildeDevopsSolutions - Calculator</title>
    <?php include 'sitetemplate/head.php'; ?>
</head>
<body>
    <header>
        <?php include 'sitetemplate/navbar.php'; ?>
    </header>

    <section class="calculation-section">
        <form>
            <input type="text" name="num1" placeholder="Getal 1">
            <input type="text" name="num2" placeholder="Gatal 2">
            <select name="operator">
                <option value="None">None</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="×">×</option>
                <option value="÷">÷</option>
            </select>
            <br>
            <button type="submit" class="calculation-submit" name="submit" value="submit">Berekenen</button>
        </form>
        <p>De uitkomst is:</p>
        <?php include 'sitetemplate/calculation.php'; ?>
    </section>

    <footer>
        <?php include 'sitetemplate/footer.php'; ?>
    </footer>
</body>
</html>