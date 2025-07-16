<!DOCTYPE html>
<html lang="en">
<head><!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SPDJ0VHGXV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SPDJ0VHGXV');
</script>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
    <meta name="description" content="KAKA88 - Play exciting slot games, enjoy promotions, and win jackpots. Login or register now to start playing!">
    <meta charset="UTF-8"> 
    <meta name="google-site-verification" content="1R0EoDTR7V0DbaBw2kJFzJnbd9aLzW396LPYAA1L6SE">  
    <title>KAKA88</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> 
    <style> 
        body { 
            margin: 0; 
            font-family: sans-serif; 
            background: #111; 
            color: #fff; 
            padding-bottom: 80px; /* Space for bottom nav */
        }

        header, nav, games { 
            padding: 15px; 
        }

        header {
            background: #1e1e1e;                                                                       
            display: flex;                                                                                  
            justify-content: space-between;                                                                                               
            align-items: center;
        }
        
        .top-navbar {
            background-color: #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 10px;
            border-bottom: 1.5px solid #FFD700;
        }

        .logo img {
            height: 55px;
            width: 100%;
        }

        .register-btn {
            background-color: #FFD700;
            color: #000;
        }

        .login-btn {
            background-color: #fff;
            color: #000;
        }

        .banner {
            position: relative;
            overflow: hidden;
            margin: 8px;
            border-radius: 10px;
        }

        .banner img {
            width: 100%;
            border-radius: 10px;
            display: block;
        }

        #jackpot {
            position: absolute;
            bottom: 1px;
            left: 50%;
            transform: translateX(-50%);
            background: #5b00a7;
            padding: 6px 20px;
            border-radius: 15px;
            border: 3px solid orange;
            color: #ffeb3b;
            font-size: 1.7em;
            font-weight: bold;
            box-shadow: 0 0 10px #000;
        }

        .top-nav, .bottom-nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: #3b3b3b;
            padding: 10px 5px;
        }

        .top-nav div, .bottom-nav div {
            text-align: center;
            font-size: 12px;
            color: white; 
        }

        /* Games Section Container */
        .games-section {
            padding: 10px;
            margin-bottom: 20px;
        }

        .games-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 0 5px;
        }

        .games-title {
            font-size: 18px;
            font-weight: bold;
            color: #FFD700;
        }

        .see-all-btn {
            background: linear-gradient(45deg, #FFD700, #FFA500);
            color: #000;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .see-all-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
        }
           
        /* Updated Game Grid - 2 Rows Only */
        .game-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 8px;
            max-width: 100%;
        }

        .game-item {
            background: #2b2b2b;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            aspect-ratio: 1; /* Makes items square */
            display: flex;
            flex-direction: column;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .game-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
            border: 1px solid #FFD700;
        }

        .game-item img {
            width: 100%;
            height: 70%;
            object-fit: cover;
            border-bottom: 2px solid #444;
        }

        .game-item .game-title {
            padding: 5px;
            font-size: 10px;
            font-weight: bold;
            color: white;
            height: 30%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #333;
        }

        /* Placeholder styling for games without images */
        .game-placeholder {
            background: linear-gradient(135deg, #444, #666);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #FFD700;
            height: 70%;
        }

        /* Game Providers Section */
        .providers-section {
            padding: 10px;
            margin-bottom: 20px;
        }

        .providers-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 0 5px;
        }

        .providers-title {
            font-size: 18px;
            font-weight: bold;
            color: #FFD700;
        }

        .providers-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 8px;
            max-width: 100%;
        }

        .provider-item {
            background: linear-gradient(135deg, #4a1a2e, #6b2c4a);
            border-radius: 15px;
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 15px;
            box-sizing: border-box;
        }

        .provider-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.3);
            border: 2px solid #FFD700;
        }

        .provider-logo {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: brightness(1.1);
        }

        /* Hidden games section */
        .hidden-games {
            display: none;
            margin-top: 15px;
        }

        .hidden-games.show {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .show-less-btn {
            background: linear-gradient(45deg, #666, #888);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .show-less-btn:hover {
            background: linear-gradient(45deg, #777, #999);
            transform: translateY(-2px);
        }

        .nav-buttons {
            display: flex;
            gap: 4px;
        }

        .nav-buttons button {
            padding: 6px 15px;
            border: none;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Updated Bottom Navigation Styles - Matching Layout Colors */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            background: #1e1e1e; /* Matching header background */
            padding: 15px 0;
            border-top: 1px solid #333; /* Matching the original nav border */
            z-index: 1000;
        }

        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
            max-width: 414px;
            margin: 0 auto;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            text-decoration: none;
            color: white;
            font-size: 12px;
            transition: all 0.3s ease;
            padding: 5px;
            border-radius: 8px;
            min-width: 60px;
            cursor: pointer;
        }

        .nav-item:hover {
            color: #FFD700; /* Matching the golden theme */
            background: rgba(255, 215, 0, 0.1);
        }

        .nav-item.active {
            color: #FFD700; /* Matching the golden theme */
            background: rgba(255, 215, 0, 0.2);
        }

        .nav-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            margin-bottom: 2px;
        }

        /* Enhanced Footer Styles */
        footer {
            background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
            padding: 25px 15px;
            margin-top: 30px;
            border-top: 2px solid #FFD700;
            text-align: center;
        }

        .footer-content {
            max-width: 414px;
            margin: 0 auto;
        }

        .footer-licenses {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .license-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            padding: 10px;
            background: rgba(255, 215, 0, 0.1);
            border-radius: 10px;
            border: 1px solid rgba(255, 215, 0, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .license-item:hover {
            background: rgba(255, 215, 0, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.2);
        }

        .license-logo {
            width: 50px;
            height: 50px;
            background: #FFD700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #000;
            font-size: 12px;
        }

        .license-text {
            font-size: 10px;
            color: #ccc;
            text-align: center;
            line-height: 1.2;
        }

        .responsible-gaming {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            padding: 15px;
            background: rgba(255, 69, 0, 0.1);
            border-radius: 10px;
            border: 1px solid rgba(255, 69, 0, 0.3);
        }

        .age-restriction {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .age-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #ff4500, #ff6347);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            font-size: 14px;
        }

        .age-text {
            font-size: 12px;
            color: #ff6347;
            font-weight: bold;
        }

        .responsible-text {
            font-size: 11px;
            color: #ccc;
            text-align: center;
            line-height: 1.3;
        }

        .footer-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #FFD700, transparent);
            margin: 20px 0;
        }

        .footer-copyright {
            display: flex;
            flex-direction: column;
            gap: 8px;
            align-items: center;
        }

        .copyright-main {
            font-size: 12px;
            color: #FFD700;
            font-weight: bold;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
        }

        .copyright-sub {
            font-size: 10px;
            color: #999;
            line-height: 1.4;
            text-align: center;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        .footer-link {
            color: #ccc;
            text-decoration: none;
            font-size: 10px;
            padding: 5px 10px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            color: #FFD700;
            background: rgba(255, 215, 0, 0.1);
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 414px) {
            .game-grid, .providers-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 6px;
            }
            
            .game-item .game-title {
                font-size: 9px;
            }

            .games-title, .providers-title {
                font-size: 16px;
            }

            .see-all-btn {
                padding: 6px 12px;
                font-size: 11px;
            }

            .provider-item {
                padding: 10px;
            }
            
            .nav-item {
                font-size: 11px;
                min-width: 50px;
            }
            
            .nav-icon {
                font-size: 16px;
            }

            .footer-licenses {
                gap: 10px;
            }

            .license-logo {
                width: 40px;
                height: 40px;
                font-size: 10px;
            }

            .responsible-gaming {
                flex-direction: column;
                gap: 10px;
            }

            .age-icon {
                width: 35px;
                height: 35px;
                font-size: 12px;
            }
        }

        @media (max-width: 320px) {
            .game-grid, .providers-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 4px;
            }
            
            .game-item .game-title {
                font-size: 8px;
            }

            .provider-item {
                padding: 8px;
            }

            footer {
                padding: 20px 10px;
            }

            .license-item {
                padding: 8px;
            }
        }

        .modal { 
            display: none; 
            position: fixed; 
            z-index: 2000; 
            left: 0; 
            top: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(0, 0, 0, 0.7); 
            justify-content: center; 
            align-items: center; 
        } 

        .modal-content { 
            background: #1e1e1e; 
            padding: 25px; 
            border-radius: 10px; 
            width: 90%; 
            max-width: 350px; 
            box-shadow: 0 0 10px #000; 
            text-align: center; 
        } 

        .modal-content h2 { 
            margin-bottom: 15px; 
            color: #ffcc00; 
        } 

        .modal-content input { 
            width: 90%; 
            padding: 10px; 
            margin: 8px 0; 
            border: none; 
            border-radius: 5px; 
            background: #333; 
            color: white; 
        } 

        .modal-content button { 
            background: #ff6600; 
            color: white; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            margin-top: 10px; 
            cursor: pointer; 
        } 

        .close { 
            position: absolute; 
            top: 15px; 
            right: 20px; 
            font-size: 1.5em; 
            color: white; 
            cursor: pointer; 
        } 
    </style> 
</head> 
<body> 
    <header class="top-navbar"> 
        <div class="logo"> 
            <img src="assets/logo.png" alt="KAKA88 Logo"> 
        </div> 
        <div class="nav-buttons"> 
            <a href="register.php"><button class="register-btn">Register</button></a> 
            <a href="login.php"><button class="login-btn">Login</button></a> 
        </div> 
    </header> 

    <div class="banner"> 
        <img src="assets/banner.jpg" alt="Jackpot Banner"> 
        <div id="jackpot">$153,345,548.65</div> 
    </div> 

    <div class="top-nav"> 
        <div>HOT GAMES</div> 
        <div>JILLI SLOT</div> 
        <div>CASINO</div> 
    </div> 

    <!-- Games Section with Header - 2 Rows Only -->
    <div class="games-section">
        <div class="games-header">
            <h2 class="games-title">🎮 Popular Games</h2>
            <button class="see-all-btn" onclick="toggleGames()">See All</button>
        </div>

        <!-- Main Game Grid - 2 Rows Only -->
        <div class="game-grid"> 
            <!-- Row 1 -->
            <div class="game-item" onclick="window.location.href='register.php'"> 
                <img src="assets/joker.png" alt="Joker"> 
                <div class="game-title">Joker</div>
            </div> 
            <div class="game-item" onclick="window.location.href='register.php'"> 
                <img src="assets/boxingking.png" alt="Boxing King"> 
                <div class="game-title">Boxing King</div>
            </div> 
            <div class="game-item" onclick="window.location.href='register.php'"> 
                <img src="assets/money.png" alt="Money Tree"> 
                <div class="game-title">Money Tree</div>
            </div> 
            <div class="game-item" onclick="window.location.href='register.php'"> 
                <img src="assets/fortune.png" alt="Fortune"> 
                <div class="game-title">Fortune</div>
            </div> 
            
            <!-- Row 2 -->
            <div class="game-item" onclick="window.location.href='register.php'"> 
                <img src="assets/superace.png" alt="Super Ace"> 
                <div class="game-title">Super Ace</div>
            </div> 
            <div class="game-item" onclick="window.location.href='register.php'"> 
                <div class="game-placeholder">🎰</div>
                <div class="game-title">Lucky Slots</div>
            </div> 
            <div class="game-item" onclick="window.location.href='register.php'"> 
                <div class="game-placeholder">🃏</div>
                <div class="game-title">Poker Pro</div>
            </div> 
            <div class="game-item" onclick="window.location.href='register.php'"> 
                <div class="game-placeholder">🎯</div>
                <div class="game-title">Roulette</div>
            </div> 
        </div>

        <!-- Hidden Games Section -->
        <div class="hidden-games" id="hiddenGames">
            <div class="game-grid">
                <!-- Additional rows when expanded -->
                <div class="game-item" onclick="window.location.href='register.php'"> 
                    <div class="game-placeholder">🂡</div>
                    <div class="game-title">Blackjack</div>
                </div> 
                <div class="game-item" onclick="window.location.href='register.php'"> 
                    <div class="game-placeholder">💎</div>
                    <div class="game-title">Diamond</div>
                </div> 
                <div class="game-item" onclick="window.location.href='register.php'"> 
                    <div class="game-placeholder">🎲</div>
                    <div class="game-title">Dice Master</div>
                </div> 
                <div class="game-item" onclick="window.location.href='register.php'"> 
                    <div class="game-placeholder">🏆</div>
                    <div class="game-title">Champion</div>
                </div> 

                <div class="game-item" onclick="window.location.href='register.php'"> 
                    <div class="game-placeholder">🌟</div>
                    <div class="game-title">Star Luck</div>
                </div> 
                <div class="game-item" onclick="window.location.href='register.php'"> 
                    <div class="game-placeholder">🔥</div>
                    <div class="game-title">Fire Win</div>
                </div> 
                <div class="game-item" onclick="window.location.href='register.php'"> 
                    <div class="game-placeholder">⚡</div>
                    <div class="game-title">Thunder</div>
                </div> 
                <div class="game-item" onclick="window.location.href='register.php'"> 
                    <div class="game-placeholder">🎪</div>
                    <div class="game-title">Circus</div>
                </div> 
            </div>

            <button class="show-less-btn" onclick="toggleGames()">Show Less</button>
        </div>
    </div>

    <!-- Game Providers Section with Actual Images -->
    <div class="providers-section">
        <div class="providers-header">
            <h2 class="providers-title">🏢 Game Providers</h2>
        </div>

        <div class="providers-grid">
            <!-- Row 1 -->
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/jili.jpg" alt="JILI" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/pg.jpg" alt="PG Pocket Games Soft" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/fc.jpg" alt="FC" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/fastspin.jpg" alt="FastSpin" class="provider-logo">
            </div>

            <!-- Row 2 -->
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/spadegaming.jpg" alt="Spadegaming" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/yesbingo.jpg" alt="Yes Bingo" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/jdb.jpg" alt="JDB" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/playtech.jpg" alt="Playtech" class="provider-logo">
            </div>

            <!-- Row 3 -->
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/play8.jpg" alt="Play8" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/pragmaticplay.jpg" alt="Pragmatic Play" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/redtiger.jpg" alt="Red Tiger" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/rich88.jpg" alt="Rich88" class="provider-logo">
            </div>

            <!-- Row 4 -->
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/joker.jpg" alt="Joker" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/playngo.jpg" alt="Play'n GO" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/wm.jpg" alt="WM" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/kagaming.jpg" alt="KA Gaming" class="provider-logo">
            </div>

            <!-- Row 5 -->
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/cq9.jpg" alt="CQ9" class="provider-logo">
            </div>
            <div class="provider-item" onclick="window.location.href='register.php'">
                <img src="assets/netent.jpg" alt="NetEnt" class="provider-logo">
            </div>
        </div>
    </div>

    <!-- Bottom Navigation - All English Text -->
    <nav class="bottom-nav">
        <div class="nav-items">
            <a href="register.php" class="nav-item active" data-page="home">
                <div class="nav-icon">🏠</div>
                <span>Home</span>
            </a>
            <a href="register.php" class="nav-item" data-page="promotion">
                <div class="nav-icon">🎁</div>
                <span>Promotions</span>
            </a>
            <a href="register.php" class="nav-item" data-page="invite">
                <div class="nav-icon">👥</div>
                <span>Invite</span>
            </a>
            <a href="register.php" class="nav-item" data-page="rewards">
                <div class="nav-icon">🏆</div>
                <span>Rewards</span>
            </a>
            <a href="register.php" class="nav-item" data-page="profile">
                <div class="nav-icon">👤</div>
                <span>Profile</span>
            </a>
        </div>
    </nav>

    <!-- Enhanced Footer with Licenses and Responsible Gaming -->
    <footer>
        <div class="footer-content">
            <!-- Gaming Licenses Section -->
            <div class="footer-licenses">
                <div class="license-item">
                    <div class="license-logo">🏛️</div>
                    <div class="license-text">
                        Licensed by<br>
                        <strong>Gaming Curaçao</strong><br>
                        License #8048/JAZ
                    </div>
                </div>
                <div class="license-item">
                    <div class="license-logo">🛡️</div>
                    <div class="license-text">
                        Secure &<br>
                        <strong>Fair Gaming</strong><br>
                        Certified
                    </div>
                </div>
            </div>

            <!-- Responsible Gaming Section -->
            <div class="responsible-gaming">
                <div class="age-restriction">
                    <div class="age-icon">18+</div>
                    <div class="age-text">Adults Only</div>
                </div>
                <div class="responsible-text">
                    <strong>Play Responsibly</strong><br>
                    Gambling can be addictive. Please play within your limits.<br>
                    If you need help, visit <strong>BeGambleAware.org</strong>
                </div>
            </div>

            <!-- Footer Divider -->
            <div class="footer-divider"></div>

            <!-- Copyright Section -->
            <div class="footer-copyright">
                <div class="copyright-main">
                    © 2025 KAKA88 - Premium Online Gaming Platform
                </div>
                <div class="copyright-sub">
                    All rights reserved. KAKA88 is operated under strict gaming regulations.<br>
                    Unauthorized reproduction or distribution is strictly prohibited.<br>
                    <strong>Version 2.1.0</strong> | Last Updated: January 2025
                </div>
            </div>

            <!-- Footer Links -->
            <div class="footer-links">
                <a href="terms.php" class="footer-link">Terms & Conditions</a>
                <a href="privacy.php" class="footer-link">Privacy Policy</a>
                <a href="support.php" class="footer-link">24/7 Support</a>
                <a href="responsible.php" class="footer-link">Responsible Gaming</a>
            </div>
        </div>
    </footer>

    <script>
        // Jackpot Animation
        let jackpotValue = 153345545.83;
        function animateJackpot() {
            jackpotValue += Math.random() * 3;
            document.getElementById('jackpot').innerText = '$' + jackpotValue.toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        }
        setInterval(animateJackpot, 700);

        let jackpotAmount = 51236033.71;
        function updateJackpot() {
            let increase = Math.random() * (1 - 0.01) + 0.01;
            jackpotAmount += increase;
            document.getElementById('jackpot-amount').innerText = "$" + jackpotAmount.toLocaleString(undefined, {minimumFractionDigits:2, maximumFractionDigits:2});
        }
        setInterval(updateJackpot, 1000);

        function handleRedirect() {
            window.location.href = "register.php";
        }

        // Toggle Games Function
        function toggleGames() {
            const hiddenGames = document.getElementById('hiddenGames');
            const seeAllBtn = document.querySelector('.see-all-btn');
            
            if (hiddenGames.classList.contains('show')) {
                hiddenGames.classList.remove('show');
                seeAllBtn.textContent = 'See All';
                seeAllBtn.style.background = 'linear-gradient(45deg, #FFD700, #FFA500)';
                seeAllBtn.style.color = '#000';
            } else {
                hiddenGames.classList.add('show');
                seeAllBtn.textContent = 'Show Less';
                seeAllBtn.style.background = 'linear-gradient(45deg, #666, #888)';
                seeAllBtn.style.color = 'white';
            }
        }

        // Bottom navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.nav-item');
            
            navItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    // Remove active class from all items
                    navItems.forEach(nav => nav.classList.remove('active'));
                    
                    // Add active class to clicked item
                    this.classList.add('active');
                    
                    // Get the page data attribute
                    const page = this.getAttribute('data-page');
                    console.log(`Navigating to register.php from: ${page}`);
                });
            });
            
            // Optional: Add touch feedback for mobile
            navItems.forEach(item => {
                item.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.95)';
                });
                
                item.addEventListener('touchend', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>