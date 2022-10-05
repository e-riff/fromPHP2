<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Balance les infos !</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <form action="./thanks.php" method="post">
        <div>
            <label for="name">First Name :</label>
            <input type="text" id="fname" name="fname" placeholder="Yoda">

            <label for="name">Last Name :</label>
            <input type="text" id="lname" name="lname" placeholder="Master">

            <label for="mail">e-mail&nbsp;:</label>
            <input type="email" id="mail" name="mail" placeholder="master-yoda@jedi-online.net" pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$">

            <label for="phone">Phone number :</label>
            <input type="tel" id="phone" name="phone" placeholder="0836656565">

            <label for="topic">Choose a topic:</label>

            <select name="topic" id="topic" required>
                <option value="" disabled selected>Select the topic</option>
                <option value="life">Meaning of life</option>
                <option value="universe">Meaning of universe</option>
                <option value="eveything">Meaning of everything</option>
            </select>

            <label for="msg">Message :</label>
            <textarea id="msg" name="message" placeholder="May the force be with you"></textarea>

            <button type="submit">Envoie le paté !</button>
        </div>
    </form>

</body>

</html>