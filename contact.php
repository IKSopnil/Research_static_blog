<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 30 Thesis, Research Topic in Computer Science - Best Topics</title>
    <meta name="description" content="Find the best topics for your thesis or research project in computer science. Get inspired by our list of the top 30 topics, including AI, machine learning, cybersecurity, and more.">
    <meta name="keywords" content="thesis topics, research topics, computer science, AI, machine learning, cybersecurity">

    <link rel="shortcut icon" href="pc.png">

    <!-- Load Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
    <!-- Load custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<?php
include "navbar.php";
?>
<?php


$name = $email = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

    $conn = mysqli_connect("server.bestcloudns.biz","research_blog_user", "blog_user521", "research_blog");

    $sql = "INSERT INTO message (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                <strong>Your message has been sent.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<body class="bg-light">

    <style>
        p {
            font-size: 18px;
            line-height: 1.5;
            text-indent: 50px;
        }

        input[type=text],
        input[type=email],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #444;
        }

        input[type=submit] {
            background-color: #212529;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type=submit]:hover {
            background-color: black;
        }

        div p {
            font-size: 18px;
            font-family: "Georgia", serif;
            font-style: italic;
            line-height: 1.5;
            margin-top: 10px;
        }
    </style>


    <section class="contract  d-flex justify-content-center">
        <div class="   ">
            <div class=" container row  my-5">
                <h3 class="my-5 text-center">Message Us</h3>
                <div class="col-lg-6  justify-content-center  ">
                    <p class="my-4">IKSopnil</p>
                    <p class="my-4">
                        Computer Science and Engineering
                    </p>
                    <p class="my-4">
                        For more, send messages to roarmode@gmail.com.
                    </p>
                    <p class="my-4">
                        "I value your input and appreciate your business.
                        "</p>

                    <strong>Support Developer:</strong><br>
                    <div class="text-center">
                        <a href="https://bmc.link/iksopnil" target="_blank"> <img src="bmc_qr.png" top="200" width="200"></a>
                    </div>
                </div>

                <div class="col-lg-6 justify-content-center my-2 mb-5">
                    <div>
                    <form class="text-start" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>

                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" required></textarea>

                            <input type="submit" class="my-3" name="send" value="Send">
                        </form>
                    </div>           

                </div>

            </div>
        </div>

    </section>
</body>
<?php
include "footer.php";
?>