         <header>
                <div class="logo" onclick="window.location.href='home.php';">
                    <img src="../../img/logo.png" alt="Logo">
                </div>
                <div class="menu">
                    <ul>
                        <li class="search">
                            <form action="search.php" method="get">
                                <input type="text" name="search" placeholder="Search job or interest" required>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>                        
                        </li>
                        <li class="name"> <?php echo "Welcome $_SESSION[name]" ?> </li>
                        <li><a href="home.php">Geographic Map</a></li>
                        <li><a href="profile.php">My Profile</a></li>
                        <li><a href="world_chat.php">Posts</a></li>
                        <li><a href="friendList.php">Inbox</a></li>             
                        <li><a href="../checking/logout.php">Logout &rarr;</a></li>
                    </ul>
                </div>
            </header>

            <style>
                header .menu ul li {
                    padding: 5px 20px;
                }
                header .menu {
                    margin-right: 20px;
                }
                .logo{
                    cursor: pointer;
                }
                ul li.search input{
                    padding: 0 5px 0 5px;
                    border: none;
                    outline: none;
                }
                ul li.search button{
                    margin-left: 5px;
                    background: none;
                    border: none;
                    outline: none;
                }
                ul li.search button i{
                    background: black;
                    border: none;
                    color: white;
                }
            </style>