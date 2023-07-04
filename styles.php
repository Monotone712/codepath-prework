/* Reset default browser styles */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
}

header {
    background-color: #333;
    color: #fff;
    padding: 15px;
}

nav ul {
    display: flex;
    justify-content: left;
    align-items: center;
}

nav ul li:not(:last-child) {
    margin-right: 15px;
}

nav ul li:last-child {
    margin-left:auto;
	color: #fff;
    text-decoration: none;
}

nav ul li a {
    color: #fff !important;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li.active a {
    font-weight: bold;
}

.hero-section {
    background-image: url('hero-bg.jpg');
    background-size: cover;
    background-position: center;
    padding: 150px 0;
    text-align: center;
    color: #fff;
}

.hero-content {
    max-width: 600px;
    margin: 0 auto;
}

.hero-content h1 {
    font-size: 40px;
    margin-bottom: 20px;
}

.hero-content p {
    font-size: 20px;
    margin-bottom: 40px;
}

.btn {
    display: inline-block;
    padding: 12px 30px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #666;
}

.features-section {
    background-color: #f9f9f9;
    padding: 60px 0;
}

.features {
    display: flex;
    justify-content: center;
    align-items: top;
}

.feature {
    text-align: center;
    padding: 20px;
    max-width: 300px;
}

.feature img {
    width: 300px;
    margin-bottom: 20px;
}

.feature h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.feature p {
    font-size: 16px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    margin-top: 60px;
}
/* General Styles */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
}

h1, h2 {
    text-align: center;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #337ab7;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #23527c;
}

/* Header Styles */

header {
    background-color: #337ab7;
    padding: 20px;
    color: #fff;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

nav ul li {
    display: inline-block;
    margin-right: 10px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li a.active {
    font-weight: bold;
}

/* Footer Styles */

footer {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
    color: #333;
}