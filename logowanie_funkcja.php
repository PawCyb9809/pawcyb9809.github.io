
<div class="logowanie">
                <div id="id01" class="modal" >
                      <form class="card bg-light modal-content-box animate" action="zaloguj.php" method="post">
                            <div class="modalcontainer">
                                <label><b>Username</b></label><br>
                                    <input type="text" id="inputs" name="login" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" placeholder="Enter Username" autocomplete="off"/> <br>
                                <label><b>Password</b></label><br>
                                    <input type="password" id="inputs" name="haslo" value="<?php if(isset($_COOKIE['password']))echo $_COOKIE['password']; ?>" placeholder="Enter Password" autocomplete="new-password"/> <br>
                                <?php
                                    if(isset($_SESSION['blad'])){
                                        echo $_SESSION['blad'];
                                        unset($_SESSION['blad']);
                                    }else echo "<span><br></span>"; 
                                ?>
                                <button type="submit">Log In</button><br>
                                <div class="psww">
                                    <label class="checklabel" >
                                    <input type="checkbox" name="remember_me" checked="checked"> 
                                    <span class="checkmark"> </span> Remember me 
                                    </label>
                                </div>
                            </div>
                            <div class="modalcontainer" style="background-color:#f1f1f1">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <span class="psw"><a href="?page=forgot">Forgot password?</a></span> 
                            </div>  
                    </form>
                    <script>
                        // Get the modal
                        var modal = document.getElementById('id01');
                        <?php
                    if(isset($_SESSION['modal'])){
                        echo $_SESSION['modal'];         
                        unset($_SESSION['modal']);         
                    };
                ?>
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                </div>
            </div>
