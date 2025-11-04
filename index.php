<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3</title>
</head>
<body>
    <main>
        <form action="FormHandler.php" method="post">
            <input type="text" name="firstname" placeholder="firstname.."/>
            <input type="text" name="lastname" placeholder="lastname.."/>
            <label>Favourite pet</label>
            <Select name="favouritePets">
                <option value="cat">Cat</option>
                <option value="cow">Cow</option>
                <option value="Dog">Dog</option>
            </Select>
            <Button type="submit">Submit</Button>
        </form>
    </main>
</body>
</html>