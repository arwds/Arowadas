const Footer = () => {
    let nav = document.querySelector('.footer');
    nav.innerHTML=`
    <div id="medialinks">
        <a class="media" href="https://www.youtube.com/channel/UCtpcOrb_AMWjKMlR7M1amdQ"><img src="/img/youtube.png" alt="youtube"></a>
    </div>
    <div id="main">
        <div class="column column1">
            <h2 class="columnheader"><u>Policies</u></h2>
            <a class="footerlink" href="mailto:contactus.arowadas@gmail.com">Contact Us</a><br>
            <a class="footerlink" href="/policies/privacypolicy.html">Privacy Policy</a><br>
            <a class="footerlink" href="/policies/termsofservice.html">Terms of Service</a><br>
            <a class="footerlink" href="/policies/cookie.html">Cookie Policy</a>
        </div>

        <div class="column column2">
            <h2 class="columnheader"><u>Web Links</u></h2>
            <a class="footerlink" href="/index.html">Home</a><br>
            <a class="footerlink" href="/membercard">Member Card</a><br>
            <a class="footerlink" href="/mathcompo">Math Compo</a><br>
            <a class="footerlink" href="/news">ANEWS</a>
        </div>
    </div>
    `;
}

Footer();