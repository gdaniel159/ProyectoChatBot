<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>
        {{-- Para extender una estructura para el uso en distintas vistas, deberia especificar de la siguiente forma la seccion --}}
        @yield('title')
    </title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('layouts._partials.menu')
    <main>
        @yield('content')
        @include('layouts._partials.chatbot')
        <div id="responseContainer"></div>
    </main>
    @include('layouts._partials.footer')
    @yield('script')
    <script>

        const toggleButton = document.querySelector('.toggle-button');
        const chatbotContainer = document.querySelector('.chatbot-container');
        const sendButton = document.getElementById('sendButton');
        const messageInput = document.getElementById('message_input');
        const responseContainer = document.getElementById('responseContainer');
        const chatMessages = document.getElementById('chat-messages');
        
        toggleButton.addEventListener('click', () => {
            chatbotContainer.classList.toggle('show-chatbot');
        });

        sendButton.addEventListener('click', async () => {

            const userMessage = messageInput.value;
            // console.log(userMessage);

            const jsonData = {

                user_message : encodeURIComponent(userMessage)

            }

            try{

                const response = await fetch('http://127.0.0.1:5000/api',{
                    method : 'POST',
                    headers : {
                        'Content-Type' : 'application/json'
                    },
                    body : JSON.stringify(jsonData)
                });

                // const responseBody = await response.json();  // Aquí obtienes el cuerpo en formato JSON

                // console.log(responseBody);

                const responseData = await response.json();
                const apiResponse = responseData.response;

                addMessage(userMessage, 'user');
                addMessage(apiResponse, 'bot');

            } catch (error) {

                console.log('Error al enviar la solicitud: ', error);

            }

        });

        function addMessage(message, sender) {

            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender}`;
            
            const messageContent = document.createElement('p');
            messageContent.textContent = message;

            const senderSpan = document.createElement('span');
            senderSpan.className = 'message-sender';
            senderSpan.textContent = sender === 'user' ? 'Tú' : 'PetPalBot';
            
            messageDiv.appendChild(senderSpan);
            messageDiv.appendChild(messageContent);
            chatMessages.appendChild(messageDiv);

        }

    </script>
</body>
</html>