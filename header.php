<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<header class="header pusha-push">
    <div class="header-wrapper">
        <div class="logo">  
            <h2 class="logo-text"><a href="<?php echo $actual_link ?>">Colin Videlock</a></h2>
        </div>
        <div class="hamburger-container">
            <a href="#" class="hamburger-icon js-open-panel" aria-expanded="false"></a>
        </div>
        <ul class="nav">
            <li><a href="<?php echo $actual_link; ?>">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="https://spectralshadow.com/">SpectralShadow</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li class="sub">
                <a href="/contact">Contact</a>
                <ul class="subnav nav">
                    <li><a target="_blank" href="https://github.com/spectralshadow514/">Github</a></li>
                    <li><a href="/cv_assets/extra/Colin_Videlock_2020_resume.pdf">Resume PDF</a></li>
                    <li><a href="/cv_assets/extra/Colin_Videlock_2020_resume.docx">Resume Doc</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>