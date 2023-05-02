<head>

    <!-- Load custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

<?php
include "navbar.php";
?>

<body class="bg-light">
    <style>
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
    </style>
    <section class="contract d-flex justify-content-center">
        <div class="   ">
            <div class=" container row  my-5">
                <h3 class="my-5">Message Us</h3>
                <div class="col-lg-6  justify-content-center  mt-4">
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
                </div>

                <div class="col-lg-6 justify-content-center my-2 mb-5">
                    <div>
                        <form class="text-start" method="post" action="#" onsubmit="sendEmail(event)">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>

                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" required></textarea>

                            <input type="submit" class="my-3" name="send" value="Send">
                        </form>
                    </div>

                    <script>
                        function sendEmail(event) {
                            event.preventDefault();

                            var name = document.getElementById("name").value;
                            var email = document.getElementById("email").value;
                            var message = document.getElementById("message").value;

                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                    alert("Your message has been sent!");
                                    document.getElementById("name").value = "";
                                    document.getElementById("email").value = "";
                                    document.getElementById("message").value = "";
                                }
                            };
                            xmlhttp.open("POST", "sendmail.php");
                            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            xmlhttp.send("name=" + name + "&email=" + email + "&message=" + message);
                        }
                    </script>

                </div>

            </div>
        </div>

    </section>
</body>
<?php
include "footer.php";
?>