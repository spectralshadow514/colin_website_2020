<?php
require_once('head.php');
?>
  <?php
  require_once('header.php');
  ?>
  <div class="banner">
    <div class="banner-image" style="background-image: url('/cv_assets/img/cv_banner_full.jpg');"></div>
    <div class="overlay-area">
      <div class="container">
        <h1>Contact Me</h1>
      </div>
    </div>
  </div>
    <div class="container">
        <div class="flex grid-row middle vertical-align">
          <div class="column-12">
            <h2>Send me your information!</h2>
            <p>I'll be sure to get back to you as soon as possible!</p>
            <form id="form1" name="form1" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://spectralshadow.wufoo.com/forms/zpnwebv03cz4pr/#public">
              <header id="header" class="info">
                <h2 class="0">Colin Videlock Contact Form</h2>
                <div class="0"></div>
              </header>
              <ul>
                <li id="foli1" class="notranslate name-field">
                  <label class="desc" id="title1">Name</label>
                  <span>
                    <input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="0" placeholder="" />
                    <label for="Field1">First</label>
                  </span>
                  <span>
                    <input id="Field2" name="Field2" type="text" class="field text ln" value="" size="14" tabindex="0" placeholder="" />
                    <label for="Field2">Last</label>
                  </span>
                </li>
                <li id="foli3" class="phone notranslate phone-field">
                  <label class="desc" id="title3">Phone Number<span id="req_3" class="req">*</span></label>
                  <span>
                    <input id="Field3" name="Field3" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="0" onkeyup="autotab(this, document.getElementById('Field3-1'), this); filterNonnumeric(this);" onfocus="this.selectionStart = this.selectionEnd = this.value.length;" placeholder="" required />
                    <label for="Field3">###</label>
                  </span>
                  <span class="symbol">-</span>
                  <span>
                    <input id="Field3-1" name="Field3-1" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="0" onkeyup="autotab(this, document.getElementById('Field3-2'), document.getElementById('Field3')); filterNonnumeric(this);" onfocus="this.selectionStart = this.selectionEnd = this.value.length;" placeholder="" required />
                    <label for="Field3-1">###</label>
                  </span>
                  <span class="symbol">-</span>
                  <span>
                    <input id="Field3-2" name="Field3-2" type="tel" class="field text" value="" size="4" maxlength="4" tabindex="0" onkeyup="autotab(this, this, document.getElementById('Field3-1')); filterNonnumeric(this);" onfocus="this.selectionStart = this.selectionEnd = this.value.length;" placeholder="" required />
                    <label for="Field3-2">####</label>
                  </span>
                </li>
                <li id="foli4" class="notranslate email-field">
                  <label class="desc" id="title4" for="Field4">Email<span id="req_4" class="req">*</span></label>
                  <div>
                    <input id="Field4" name="Field4" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="0" placeholder="" required />
                  </div>
                </li>
                <li id="foli5" class="notranslate website-field">
                  <label class="desc" id="title5" for="Field5">Website</label>
                  <div>
                    <input id="Field5" name="Field5" type="url" class="field text medium" value="" maxlength="255" tabindex="0" placeholder="" />
                  </div>
                </li>
                <li id="foli6" class="notranslate comments-field"><label class="desc" id="title6" for="Field6">Comments</label>
                  <div>
                    <textarea id="Field6" name="Field6" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="0" onkeyup="" placeholder=""></textarea>
                  </div>
                </li>
                <li class="buttons ">
                  <div>
                    <input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" />
                    <a href="https://master.wufoo.com/forms/m7p0x3/def/field1=spectralshadow.wufoo.com/forms/colin-videlock-contact-form/" target="_blank" class="report-abuse-link">Report Abuse</a>
                  </div>
                </li>
                <li class="hide">
                  <label for="comment">Do Not Fill This Out</label>
                  <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                  <input type="hidden" id="idstamp" name="idstamp" value="aFrMInss8RKb+i4en06+T/ChzCG4DAHnP2E8lEiJ0gY=" />
                </li>
              </ul>
            </form>
          </div>
        </div>
    </div>
  <?php
    require_once('footer.php');
  ?>
<?php
require_once('foot.php');
?>