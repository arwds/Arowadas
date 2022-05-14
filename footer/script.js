const Footer = () => {
    let nav = document.querySelector('.footer');
    nav.innerHTML=`
    <div id="medialinks">
        <a class="media" href="https://www.youtube.com/channel/UCtpcOrb_AMWjKMlR7M1amdQ"><img src="/img/youtube.png" alt="youtube"></a>
    </div>
    <div id="main">
        <a class="footerlink" href="mailto:contactus.arowadas@gmail.com">Contact Us</a><br>
        <a class="footerlink" href="/policies/privacypolicy.html">Privacy Policy</a><br>
        <a class="footerlink" href="/policies/termsofservice.html">Terms of Service</a><br>
        <a class="footerlink" href="/policies/about.html">About</a>
    </div>
    `;
}

Footer();