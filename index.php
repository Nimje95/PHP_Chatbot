<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="root">
        <div class="skewed">
            <div class="container">
                <h1 class="text-center">Chatora PHP Chatbot</h1>
                <div class="media d-flex">
                    <img src="https://miro.medium.com/v2/resize:fit:525/1*lyyXmbeoK5JiIBNCnzzjjg.png" class="rounded-circle float-left img-thumbnail" width="75px" alt="...">
                    <div class="media-body">
                        <h5 style="margin:10px">Chatora</h5>
                        <span style="margin-left: 10px; color: chartreuse;">Online</span>
                    </div>
                </div>
                <br>

                <!--Message container-->
                <div id="chatContainer" class="container border overflow-auto" style="height: 500px; border-radius: 10px; border-bottom-right-radius:0%; border-bottom-left-radius:0%;">
                    <!-- -Chatbot message design
                    <div class="w-50 shadow-sm" style="margin: 10px; padding: 5px; float: left;">
                        <span>Chat: </span>
                        <span style="margin-top: 10px; padding: 10px;">How are you?</span>
                    </div>

                <!-User Message Design
                    <div class="w-50 shadow-sm" style="margin: 10px; padding: 5px; float: right;">
                        <span>You: </span>
                        <span style="margin-top: 10px; padding: 10px;">Awesome</span>
                    </div> -->
                </div>
                <div class="input-group">
                    <input id="text-box" type="text" class="form-control" placeholder="Type your message here" style="border-top-left-radius: 0%;"/>
                    <div class="input-group-append">
                        <button id="sendBtn" class="btn btn-primary" type="button" style=" background-color:blueviolet; border:2px solid blueviolet; border-top-right-radius:0%; border-top-left-radius:0%; border-bottom-left-radius:0%;">Send <i class="fa-solid fa-paper-plane"></i></button>
                    </div>


                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script src="js/main.js"></script>
</body>

</html>