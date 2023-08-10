<?php
include 'sessionfile.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>G-SHARE | CHAT</title>
   <link rel="stylesheet" href="chat.css">
   <link rel="icon" type="image/x-icon" href="img/gshares.png">
   <link rel="stylesheet" href="css/bootstrap.min.css"/>
   <style>
      .chat-container {
         height: 500px;
         width: 700px;
         overflow-y: scroll;
      }
   </style>
</head>
<body class="b-g">
   <div class="container py-3">
      <h2 class="G m-bottom text-white">G-SHARE | CHAT</h2>   
      <div class="row">
         <div class="col-md-6 mx-auto">
            <div class="chat-container b-C rounded rounded-2 px-2" id="chat-container">
               <!-- Chat messages will be dynamically loaded here -->
            </div>
            <form id="chat-form" class="mt-4">
               <div class="input-group">
                  <input type="text" id="message-input" required name="message" class="form-control ms-5" placeholder="Type your message...">
                  <button type="submit" class="btn btn-primary">Send</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Include jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
      // Function to load chat messages
      function loadChatMessages() {
         $.ajax({
            url: 'get_messages.php',
            method: 'GET',
            success: function(response) {
               $('#chat-container').html(response);
               scrollToBottom(); // Scroll to the bottom of the chat container
            },
            error: function(xhr, status, error) {
               console.log(xhr.responseText);
            }
         });
      }

      // Function to scroll to the bottom of the chat container
      function scrollToBottom() {
         var container = $('#chat-container');
         container.scrollTop(container.prop("scrollHeight"));
      }

      // Function to send a new message
      function sendMessage(message) {
         $.ajax({
            url: 'send_message.php',
            method: 'POST',
            data: {
               message: message
            },
            success: function() {
               $('#message-input').val(''); // Clear the input field
               loadChatMessages(); // Reload chat messages
            },
            error: function(xhr, status, error) {
               console.log(xhr.responseText);
            }
         });
      }

      // Load chat messages on page load
      $(document).ready(function() {
         loadChatMessages();

         // Submit form on message send button click
         $('#chat-form').submit(function(event) {
            event.preventDefault();
            var message = $('#message-input').val();
            sendMessage(message);
         });

         // Automatically load new messages every 2 seconds
         setInterval(function() {
            loadChatMessages();
         }, 500);
      });
   </script>
</body>
</html>
