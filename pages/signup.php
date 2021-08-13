<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

    <!-- adds client -->
    <form action="../process/add_clients.php" method="POST" id="id0">
        <h2>Sign Up as Client</h2>
        <?php echo $_GET['error']; ?><br>
        Name: <input type="text" name="cname" required><br>
        Email: <input type="email" name="cmail" required><br>
        Country: <input type="text" name="ccountry" required><br>
        Password: <input type="password" name="cpass" required><br>
        Re-type Password: <input type="password" name="recpass" required><br>
        <input type="submit" value="submit">


    </form>

    <!-- adds dev -->
    <form action="../process/add_dev.php" method="post">
        <h2>Work with us</h2>
        User Name: <input type="text" name="dev_name" required><br>
        Email: <input type="email" name="dev_mail" required><br>
        Phone/WhatsApp: <input type="number" name="dev_num" required><br>
        Country: <input type="text" name="dev_c" required><br>
        A link where we can see your work: <input type="url" name="dev_link" required><br>
        In which feild do you expertise:
        <select name="dev_skill">
            <option value="1">--select skill--</option>
            <option value="2">Logo Designer </option>
            <option value="3">Poster Designer</option>
            <option value="4">Social Media Designer</option>
            <option value="5">Social Media Marketer</option>
            <option value="6">banner design</option>
            <option value="7">UI/UX designer</option>
            <option value="8">Android App developer</option>
            <option value="8">Vue Js developer</option>
            <option value="8">Laravel Developer</option>
            <option value="8">SEO expert</option>
            <option value="8">IOS developer</option>
            <option value="8">React Developer</option>
        </select><br>
        If your talents are not in  the list: <br>
        <textarea name="dev_text"cols="30" rows="10">Type your talents...</textarea><br>
        Terms & conditions: <br>
        1.Rules are applied for everyone.
        <br>
        <input type="checkbox" name="dev_agreement" required>
        I have read and i agree with the rules. <br>
        <input type="submit" value="apply">




    </form>


</body>
</html>