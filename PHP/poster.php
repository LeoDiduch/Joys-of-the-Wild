<div id="add-post">
    <div id="blank">
    </div>

    <div id="post-form">
        <div id="post">
            <img src="img/Wild-Logo.png" alt="" id="profile-photo">
            <textarea id="post-text" name="post-content" placeholder="Want to share something ?"></textarea>
        </div>

        <div id="control">
            <!--<div id="control-btn">
                <div id="add-media" class="primary-btn mediapopup"><i class="fas fa-plus"></i> Add media</div>

                
                
                <div id="add-tags" class="primary-btn tagspopup"><i class="fas fa-plus"></i> Add tags</div>

                <div id="modals-container">

                    <div class="tagspopuptext" id="mytags">
                        <input type="text" pattern="" placeholder="Enter your tags please."/>
                        <button id="close-tagspopup"><i id="tags-cancel-icon" class="far fa-times-circle"></i></button>
                        <p>3 tags max.</p>
                        <button id="send-tags" class="popup-add" type="submit">Add !</button>
                    </div>
                    
                    <div class="mediapopuptext" id="mymedia">
                        <input id="url-input" type="url" pattern="https://.*" placeholder="Insert media link please."/>
                        <button id="close-mediapopup"><i id="media-cancel-icon" class="far fa-times-circle"></i></button>
                        <p>Or :</p>
                        <input id="media-input" type="file" accept="image/png, image/jpeg, image/gif video/mp4"/>
                        <p>Accepted format : .jpg, .png, .gif, .mp4</p>
                        <button id="send-media" class="popup-add" type="submit">Add !</button>
                    </div> 
                </div>
            </div>-->

            <div class="modal-container">
                <div class="email" onclick="this.classList.add('expand')">
                    <div class="from">
                        <div class="from-contents">
                            <!--<div class="avatar me"></div>-->
                            <div class="name"><i class="fas fa-plus"></i> Add Media</div>
                        </div>
                    </div>
                    <div class="to">
                        <div class="to-contents">
                            <div class="top">
                                <!--<div class="avatar-large me"></div>-->
                                <div class="name-large">Add some media please !</div>
                                <div class="x-touch" onclick="document.querySelector('.email').classList.remove('expand');event.stopPropagation();">
                                    <div class="x">
                                        <div class="line1"></div>
                                        <div class="line2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="row">

                                </div>
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-container-2">
                <div class="email-2" onclick="this.classList.add('expand-2')">
                    <div class="from-2">
                        <div class="from-contents-2">
                            <!--<div class="avatar me"></div>-->
                            <div class="name-2"><i class="fas fa-plus"></i> Add tags</div>
                        </div>
                    </div>
                    <div class="to-2">
                        <div class="to-contents-2">
                            <div class="top-2">
                                <!--<div class="avatar-large me"></div>-->
                                <div class="name-large-2">Add some media please !</div>
                                <div class="x-touch-2" onclick="document.querySelector('.email-2').classList.remove('expand-2');event.stopPropagation();">
                                    <div class="x-2">
                                        <div class="line1-2"></div>
                                        <div class="line2-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-2">
                                <div class="row-2">

                                </div>
                                <div class="row-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="control-send">
                <a href="" id="send"><i class="fas fa-paper-plane"></i></a>
                <a href="" id="cancel"><i class="far fa-times-circle"></i></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>