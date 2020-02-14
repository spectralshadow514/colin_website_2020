<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<header class="header">
    <div class="header-wrapper">
        <div class="logo">  
            <h1><a href="<?php echo $actual_link ?>">Colin Videlock</a></h1>
        </div>
        <div class="hamburger-container">
            <a href="#" class="hamburger-icon"></a>
        </div>
        <ul class="nav">
            <li><a href="<?php echo $actual_link; ?>">Home</a></li>
            <li><a href="/about/">About</a></li>
            <li class="sub">
                <a href="#">Examples</a>
                <ul class="subnav nav">
                    <li><a href="/magento/">Magento</a></li>
                    <li><a href="/wordpress/">Wordpress</a></li>
                    <li><a href="/joomla/">Joomla</a></li>
                </ul>
            </li>
            <li><a href="/portfolio/">Portfolio</a></li>
            <li class="sub">
                <a href="/contact/">Contact</a>
                <ul class="subnav nav">
                    <li><a target="_blank" href="https://github.com/spectralshadow514/">Github</a></li>
                    <li><a href="/">Resume PDF</a></li>
                    <li><a href="/">Resume Docx</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>