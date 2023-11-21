@if (Request::is('chat'))
    <style>
        #sendMessage::placeholder {
            color: black !important;
        }
    </style>
@endif
<div class="col-12">

    <!-- Customers Card -->

    <!-- Reports -->

    <div class="chat-card">

        <header class="chat-box-header">

            <div class="chat-box-profile">
                <img src="assets/img/profile-img.png" alt="" class="chat-box-image">
                <div class="chat-box-username-container">
                    <h1 class="chat-box-username">Maaz</h1>
                    <p style="font-size: 8px">Active Now</p>
                </div>

            </div>



            <div class="chat-box-icon-container">
                <a class="nav-link chat-box-icon" href="#">
                    <i class="bi bi-search"></i>
                </a>

                <a class="nav-link chat-box-icon" href="#">
                    <i class="bi bi-image"></i>
                </a>
                <a class="nav-link chat-box-icon" href="#">
                    <i class="bi bi-person-add"></i>
                </a>
                <a class="nav-link chat-box-icon" href="#">
                    <i class="bi bi-camera-video"></i>
                </a>

                <a class="nav-link chat-box-icon" href="#">
                    <i class="bi bi-telephone"></i>
                </a>
                <a class="nav-link chat-box-icon" href="#">
                    <i class="bi bi-gear"></i>
                </a>


            </div>

        </header>
        <div class="chat-container">
            <div class="message-container">
                <div class="message-received-container">
                    <img src="assets/img/profile-img.png" alt="" class="chat-box-message-image">
                    <div class="box">
                        <span class="time-right">11:00</span>
                        <div class="message-box">

                            <p>Hello. How are you today?</p>

                        </div>
                    </div>
                </div>


            </div>
            <div class="message-container-sender">

                <div class="box">
                    <span class="time-right">11:00</span>
                    <div class="message-box  sender">

                        <p>Hello. How are you today?</p>

                    </div>
                </div>

            </div>





        </div>





        <footer class="chat-box-footer bottom-fixed">
            <div class="chat-input-container">
                <div>
                    <i class="bi bi-emoji-smile chat-box-input-emoji"></i>
                    <input type="text" class="chat-box-input" name="" id="sendMessage"
                        placeholder="type a message...">
                </div>

                <div style="padding-right: 10px">
                    <i class="bi bi-send"></i>
                    <i class="bi bi-paperclip"></i>
                    <i class="bi bi-person-vcard"></i>
                </div>
            </div>


            <div style="margin-left: 20px">
                <a class="nav-link chat-box-icon" href="#">
                    <i class="bi bi-mic"></i>
                </a>
            </div>


        </footer>



    </div>

</div>
