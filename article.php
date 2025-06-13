<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
        }

        form {
            flex-grow: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .form-group {
            flex-basis: 48%;
            margin-bottom: 20px;
        }

        .form-group.full-width {
            flex-basis: 100%;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="date"],
        input[type="number"],
        input[type="text"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
            width: calc(100% - 6px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"],
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #0056b3;
        }

        input[type="text"].red {
            border: 1px solid red;
        }

        .image-box {
            width: 200px;
            height: 200px;
            /* Set height equal to width to make it square */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-left: 20px;
        }

        .image-box h3 {
            margin-top: 0;
            padding: 20px 50px;
        }

        .image-box button {
            display: block;
            margin-top: 10px;
            padding: 10px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .image-box button:hover {
            background-color: #0056b3;
        }

        .header {
            background-color: #083e3f;
            /* Changed menu background color to gray */
            padding: 10px;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Artical Entry</h1>
    </div>
    <div class="container">
        <form action="article.php" method="post">


            <div class="form-group">
                <label for="entryDate">Article Entry Date:</label>
                <input type="date" id="entryDate" name="entryDate" required>
            </div>
            <div class="form-group">
                <label for="articleNumber">Current Article Number:</label>
                <input type="number" id="articleNumber" name="articleNumber" required>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="subjectHeading">Subject Heading:</label>
                <input type="text" id="subjectHeading" name="subjectHeading" required>
            </div>
            <div class="form-group">
                <label for="periodicalName">Name Of The Periodical:</label>
                <select id="periodicalName" name="periodicalName" required>
                    <option value="">Select Periodical</option>
                    <option value="Periodical 1">Periodical 1</option>
                    <option value="Periodical 2">Periodical 2</option>
                    <option value="Periodical 3">Periodical 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="volumeNumber">Volume no:</label>
                <select id="volumeNumber" name="volumeNumber">
                    <option value="">Select Volume</option>
                    <option value="Volume 1">Volume 1</option>
                    <option value="Volume 2">Volume 2</option>
                    <option value="Volume 3">Volume 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="newspaperName">Name Of News Paper:</label>
                <select id="newspaperName" name="newspaperName">
                    <option value="">Select Newspaper</option>
                    <option value="Newspaper 1">Newspaper 1</option>
                    <option value="Newspaper 2">Newspaper 2</option>
                    <option value="Newspaper 3">Newspaper 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="issue">Issue:</label>
                <select id="issue" name="issue">
                    <option value="">Select Issue</option>
                    <option value="Issue 1">Issue 1</option>
                    <option value="Issue 2">Issue 2</option>
                    <option value="Issue 3">Issue 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="yearOfPublication">Year Of Pub:</label>
                <select id="yearOfPublication" name="yearOfPublication">
                    <option value="">Select Year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div>
            <div class="form-group">
                <label for="monthOrSeason">Month/Season:</label>
                <select id="monthOrSeason" name="monthOrSeason">
                    <option value="">Select Month/Season</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                </select>
            </div>
            <div class="form-group">
                <label for="translation">Translation of:</label>
                <input type="text" id="translation" name="translation">
            </div>
            <div class="form-group">
                <label for="pagination">Pagination:</label>
                <input type="text" id="pagination" name="pagination">
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location">
            </div>
            <div class="form-group">
                <label for="translator">Translator:</label>
                <input type="text" id="translator" name="translator">
            </div>
            <div class="form-group">
                <label for="seeAlso">See Also:</label>
                <input type="text" id="seeAlso" name="seeAlso">
            </div>
            <div class="form-group">
                <label for="notes">Notes:</label>
                <input type="text" id="notes" name="notes">
            </div>
            <div class="form-group">
                <label for="abstractSummary">Abstract/Summary:</label>
                <input type="text" id="abstractSummary" name="abstractSummary">
            </div>
            <div class="form-group full-width">
                <label for="subjectDescription">Subject Description/Annotation:</label>
                <input type="text" id="subjectDescription" name="subjectDescription" class="red">
            </div>
            <input type="submit" value="Submit">
            <button type="button">Add New</button>
            <button type="button">Save</button>
            <button type="button">Modify</button>
            <button type="button">Update</button>
            <button type="button">Delete</button>
            <button type="button">List</button>
            <button type="button">Cancel</button>
            <button type="button">Close</button>
        </form>
        <div class="image-box">
            <h3>Image Box</h3>
            <button type="button">Add Image</button>
            <button type="button">Remove Image</button>
        </div>
    </div>
</body>

</html>
<?php
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "articledetails"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $articleentrydate = $_POST["entryDate"];
    $currentarticlenumber= $_POST["articleNumber"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $subjectheading = $_POST["subjectHeading"];
    $nameoftheperiodical  = $_POST["periodicalName"];
    $volumeno  = $_POST["volumeNumber"];
    $nameofthenewspaper  = $_POST["newspaperName"];
    $issue = $_POST["issue"];
    $yearofpub = $_POST["yearOfPublication"];
    $month = $_POST["monthOrSeason"];
    $translationof  = $_POST["translation"];
    $pagination  = $_POST["pagination"];
    $location = $_POST["location"];
    $translator = $_POST["translator"];
    $seealso = $_POST["seeAlso"];
    $notes  = $_POST["notes"];
    $absract  = $_POST["abstractSummary"];
    $annotation = $_POST["subjectDescription"];
   
    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO articletable (articleentrydate, currentarticlenumber, title, author, subjectheading,nameoftheperiodical,volumeno,nameofthenewspaper,issue,yearofpub,month,translationof,pagination,location, translator,seealso,notes,absract,annotation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("sssssssssssssssssss",$articleentrydate ,$currentarticlenumber,$title,$author,$subjectheading,$nameoftheperiodical,$volumeno,$nameofthenewspaper,$issue,$yearofpub,$month,$translationof,$pagination,$location,$translator,$seealso,$notes,$absract,$annotation);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>