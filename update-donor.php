<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update a Donor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Biomat USA</h1>
            <nav>
                <ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="donor-list.html">Donors</a></li>
					<li><a href="add-donor.html">Create a Donor</a></li>
					<li><a href="update-donor.html">Update a Donor</a></li>
					<li><a href="report.html">Generate Reports</a></li>
					<li><a href="login.html">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Update a Donor</h2>
            <form action="update-donor.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>

                <input type="submit" value="Save Changes">
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            &copy; 2023 Biomat USA. All rights reserved.
        </div>
    </footer>
</body>
</html>
