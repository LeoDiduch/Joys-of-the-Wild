<div id="add-post">
    <div id="post-form">
        <div id="post">
            <img src="img/Wild-Logo.png" alt="" id="profile-photo">
            <textarea id="post-text" name="post-content" placeholder="Want to share something ?"></textarea>
        </div>

        <div id="control">
            <div class="modal-container">
<!--onclk1-->   <div class="email">
                    <div class="from">
                        <div class="from-contents">
                            <div class="name"><i class="fas fa-plus"></i> Add Media</div>
                        </div>
                    </div>
                    <div class="to">
                        <div class="to-contents">
                            <div class="top">
                                <div class="name-large">Add some <strong>MEDIA</strong> please !</div>
<!--onclk2-->                   <div class="x-touch">
                                    <div class="x">
                                        <div class="line1"></div>
                                        <div class="line2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="row">
                                    <input id="url-input" type="url" pattern="https://.*" placeholder="Insert media link please."/>
                                    <p>Or :</p>  
                                </div>

                                <div class="row">
                                    <input id="media-input" type="file" accept="image/png, image/jpeg, image/gif video/mp4"/>
                                    <p>Accepted format : .jpg, .png, .gif, .mp4</p>
                                </div>

                                <div class="row">
                                    <button id="send-media" class="popup-add" type="submit">Add !</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-container-2">
                <div class="email-2">
                    <div class="from-2">
                        <div class="from-contents-2">
                            <div class="name-2"><i class="fas fa-plus"></i> Add tags</div>
                        </div>
                    </div>
                    <div class="to-2">
                        <div class="to-contents-2">
                            <div class="top-2">
                                <div class="name-large-2">Add some <strong>TAGS</strong> please !</div>
                                <div class="x-touch-2">
                                    <div class="x-2">
                                        <div class="line1-2"></div>
                                        <div class="line2-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-2">
                                <div class="row-2">
                                <input id="tags-input" type="text" placeholder="Add your tags here.">

                                </div>
                                <div class="row-2">
                                    <p>Limit yourself to 3 tags please ! </p>
                                </div>

                                <div class="row-2">
                                    <button id="send-tags" class="popup-add" type="submit">Add !</button>
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