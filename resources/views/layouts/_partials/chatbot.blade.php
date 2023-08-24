<div class="chatbot-toggle">

    <a href="javascript:void(0)" class="toggle-button">
        <i class="fa-solid fa-comment-dots"></i>
    </a>

    <div class="chatbot-container">

        <h3>PetPalBot</h3>

        <div class="chat-content">

            <img src="{{asset('img/chatbot_profile.png')}}" alt="" class="image-bot">
            <p class="name">PetPalBot</p>
            <p class="downmessage"><small>Puedes aqui escoger una seria de opciones y te dare las respuestas correctas 😃</small></p>

            <div id="chat-messages" class="chat-messages"></div>

            <div class="buttons">

                <button class="bot-button" data-keyword="exotico">Animales Exóticos</button>
                <button class="bot-button" data-keyword="extinto">Animales Extintos</button>
                <button class="bot-button" data-keyword="salvaje">Animales Salvajes</button>
                <button class="bot-button" data-keyword="conservacion">Animales en Peligro de Extinción</button>

            </div>

            <div class="message-container">

                <input type="text" id="message_input" name="message_input">
                <a href="javascript:void(0)" class="enviar" id="sendButton"><i class="fa-regular fa-paper-plane" style="color: #fff"></i></a>

            </div>

        </div>

    </div>

</div>