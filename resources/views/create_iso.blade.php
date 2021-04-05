@extends('layouts.layout')
@section('title', 'Page Title')
@section('content')


<style>

form label {
    color: white !important;
}
</style>

@if(!isset(Auth::user()->email))
  <script>window.location = "/"</script>

@else


  <form style="margin-top: 5rem;">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">SO</label>
      <select id="inputState" class="form-control">
        <option selected>Choose SO</option>
        <option>AIX</option>
        <option>Windows</option>
        <option>Linux</option>
      </select>
    </div>
    <div class="form-group col-md-3">
        <label for="inputName">Nombre de Maquina</label>
        <input type="text" class="form-control" id="inputName">
      </div>
    <div class="form-group col-md-3">
        <label for="inputName">Usuario</label>
        <input type="text" class="form-control" id="inputName">
      </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
        <label for="inputEmail4">Zona Horaria</label>
        <select id="inputState" class="form-control">
          <option selected>Escoga la zona Horaria</option>
          <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
          <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
          <option value="-10:00">(GMT -10:00) Hawaii</option>
          <option value="-09:50">(GMT -9:30) Taiohae</option>
          <option value="-09:00">(GMT -9:00) Alaska</option>
          <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
          <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
          <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
          <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
          <option value="-04:50">(GMT -4:30) Caracas</option>
          <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
          <option value="-03:50">(GMT -3:30) Newfoundland</option>
          <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
          <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
          <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
          <option value="+00:00" selected="selected">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
          <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
          <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
          <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
          <option value="+03:50">(GMT +3:30) Tehran</option>
          <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
          <option value="+04:50">(GMT +4:30) Kabul</option>
          <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
          <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
          <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
          <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
          <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
          <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
          <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
          <option value="+08:75">(GMT +8:45) Eucla</option>
          <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
          <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
          <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
          <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
          <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
          <option value="+11:50">(GMT +11:30) Norfolk Island</option>
          <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
          <option value="+12:75">(GMT +12:45) Chatham Islands</option>
          <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
          <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
        </select>
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Distribucion teclado</label>
      <select id="inputState" class="form-control">
        <option selected>Escoga la distribucion del teclado</option>
        <option>Albanian</option>
<option>Arabic (101)</option>
<option>Arabic (102)</option>
<option>Arabic (102) AZERTY</option>
<option>Armenian Eastern</option>
<option>Armenian Western</option>
<option>Assamese - Inscript</option>
<option>Azeri Cyrillic</option>
<option>Azeri Latin</option>
<option>Bashkir</option>
<option>Belarusian</option>
<option>Belgian (Comma)</option>
<option>Belgian (Period)</option>
<option>Belgian French</option>
<option>Bengali</option>
<option>Bengali - Inscript</option>
<option>Bengali - Inscript (Legacy)</option>
<option>Bosnian (Cyrillic)</option>
<option>Bulgarian</option>
<option>Bulgarian (Latin)</option>
<option>Bulgarian (phonetic layout)</option>
<option>Bulgarian (phonetic traditional)</option>
<option>Canadian French</option>
<option>Canadian French (Legacy)</option>
<option>Canadian Multilingual Standard</option>
<option>Chinese (Simplified) - US Keyboard</option>
<option>Chinese (Traditional) - US Keyboard</option>
<option>Chinese (Traditional Macao S.A.R.) US Keyboard</option>
<option>Chinese (Simplified, Singapore) - US keyboard</option>
<option>Croatian</option>
<option>Czech</option>
<option>Czech (QWERTY)</option>
<option>Czech Programmers</option>
<option>Danish</option>
<option>Devanagari - Inscript</option>
<option>Divehi Phonetic</option>
<option>Divehi Typewriter</option>
<option>Dutch</option>
<option>Estonian</option>
<option>Faeroese</option>
<option>Finnish</option>
<option>Finnish with Sami</option>
<option>French</option>
<option>Gaelic</option>
<option>Georgian</option>
<option>Georgian (Ergonomic)</option>
<option>Georgian (QWERTY)</option>
<option>German</option>
<option>German (IBM)</option>
<option>Greek</option>
<option>Greek (220)</option>
<option>Greek (220) Latin</option>
<option>Greek (319)</option>
<option>Greek (319) Latin</option>
<option>Greek Latin</option>
<option>Greek Polytonic</option>
<option>Greenlandic</option>
<option>Gujarati</option>
<option>Hausa</option>
<option>Hebrew</option>
<option>Hindi Traditional</option>
<option>Hungarian</option>
<option>Hungarian 101-key</option>
<option>Icelandic</option>
<option>Igbo</option>
<option>Inuktitut - Latin</option>
<option>Inuktitut - Naqittaut</option>
<option>Irish</option>
<option>Italian</option>
<option>Italian (142)</option>
<option>Japanese</option>
<option>Kannada</option>
<option>Kazakh</option>
<option>Khmer</option>
<option>Korean</option>
<option>Kyrgyz Cyrillic</option>
<option>Lao</option>
<option>Latin American</option>
<option>Latvian</option>
<option>Latvian (QWERTY)</option>
<option>Lithuanian</option>
<option>Lithuanian IBM</option>
<option>Lithuanian New</option>
<option>Luxembourgish</option>
<option>Macedonian (FYROM)</option>
<option>Macedonian (FYROM) - Standard</option>
<option>Malayalam</option>
<option>Maltese 47-Key</option>
<option>Maltese 48-Key</option>
<option>Maori</option>
<option>Marathi</option>
<option>Mongolian (Mongolian Script)</option>
<option>Mongolian Cyrillic</option>
<option>Nepali</option>
<option>Norwegian</option>
<option>Norwegian with Sami</option>
<option>Oriya</option>
<option>Pashto (Afghanistan)</option>
<option>Persian</option>
<option>Polish (214)</option>
<option>Polish (Programmers)</option>
<option>Portuguese</option>
<option>Portuguese (Brazilian ABNT)</option>
<option>Portuguese (Brazilian ABNT2)</option>
<option>Punjabi</option>
<option>Romanian (Legacy)</option>
<option>Romanian (Programmers)</option>
<option>Romanian (Standard)</option>
<option>Russian</option>
<option>Russian (Typewriter)</option>
<option>Sami Extended Finland-Sweden</option>
<option>Sami Extended Norway</option>
<option>Serbian (Cyrillic)</option>
<option>Serbian (Latin)</option>
<option>Sesotho sa Leboa</option>
<option>Setswana</option>
<option>Sinhala</option>
<option>Sinhala - wij 9</option>
<option>Slovak</option>
<option>Slovak (QWERTY)</option>
<option>Slovenian</option>
<option>Sorbian Extended</option>
<option>Sorbian Standard</option>
<option>Sorbian Standard (Legacy)</option>
<option>Spanish</option>
<option>Spanish Variation</option>
<option>Swedish</option>
<option>Swedish with Sami</option>
<option>Swiss French</option>
<option>Swiss German</option>
<option>Syriac</option>
<option>Syriac Phonetic</option>
<option>Tajik</option>
<option>Tamil</option>
<option>Tatar</option>
<option>Telugu</option>
<option>Thai Kedmanee</option>
<option>Thai Kedmanee (non-ShiftLock)</option>
<option>Thai Pattachote</option>
<option>Thai Pattachote (non-ShiftLock)</option>
<option>Tibetan (PRC)</option>
<option>Turkish F</option>
<option>Turkish Q</option>
<option>Turkmen</option>
<option>Uyghur (Legacy)</option>
<option>Ukrainian</option>
<option>Ukrainian (Enhanced)</option>
<option>United Kingdom</option>
<option>United Kingdom Extended</option>
<option>United States - Dvorak</option>
<option>United States - International</option>
<option>United States - Devorak for left hand</option>
<option>United States - Dvorak for right hand</option>
<option selected="selected">United States - English</option>
<option>Urdu</option>
<option>Uyghur</option>
<option>Uzbek Cyrillic</option>
<option>Vietnamese</option>
<option>Wolof</option>
<option>Yakut</option>
<option>Yoruba</option>
      </select>
    </div>
    <div class="form-group col-md-3">
        <label for="inputName">Lenguaje</label>
        <select id="inputState" class="form-control">
  <option value="AF">Afrikaans</option>
  <option value="SQ">Albanian</option>
  <option value="AR">Arabic</option>
  <option value="HY">Armenian</option>
  <option value="EU">Basque</option>
  <option value="BN">Bengali</option>
  <option value="BG">Bulgarian</option>
  <option value="CA">Catalan</option>
  <option value="KM">Cambodian</option>
  <option value="ZH">Chinese (Mandarin)</option>
  <option value="HR">Croatian</option>
  <option value="CS">Czech</option>
  <option value="DA">Danish</option>
  <option value="NL">Dutch</option>
  <option value="EN">English</option>
  <option value="ET">Estonian</option>
  <option value="FJ">Fiji</option>
  <option value="FI">Finnish</option>
  <option value="FR">French</option>
  <option value="KA">Georgian</option>
  <option value="DE">German</option>
  <option value="EL">Greek</option>
  <option value="GU">Gujarati</option>
  <option value="HE">Hebrew</option>
  <option value="HI">Hindi</option>
  <option value="HU">Hungarian</option>
  <option value="IS">Icelandic</option>
  <option value="ID">Indonesian</option>
  <option value="GA">Irish</option>
  <option value="IT">Italian</option>
  <option value="JA">Japanese</option>
  <option value="JW">Javanese</option>
  <option value="KO">Korean</option>
  <option value="LA">Latin</option>
  <option value="LV">Latvian</option>
  <option value="LT">Lithuanian</option>
  <option value="MK">Macedonian</option>
  <option value="MS">Malay</option>
  <option value="ML">Malayalam</option>
  <option value="MT">Maltese</option>
  <option value="MI">Maori</option>
  <option value="MR">Marathi</option>
  <option value="MN">Mongolian</option>
  <option value="NE">Nepali</option>
  <option value="NO">Norwegian</option>
  <option value="FA">Persian</option>
  <option value="PL">Polish</option>
  <option value="PT">Portuguese</option>
  <option value="PA">Punjabi</option>
  <option value="QU">Quechua</option>
  <option value="RO">Romanian</option>
  <option value="RU">Russian</option>
  <option value="SM">Samoan</option>
  <option value="SR">Serbian</option>
  <option value="SK">Slovak</option>
  <option value="SL">Slovenian</option>
  <option value="ES">Spanish</option>
  <option value="SW">Swahili</option>
  <option value="SV">Swedish </option>
  <option value="TA">Tamil</option>
  <option value="TT">Tatar</option>
  <option value="TE">Telugu</option>
  <option value="TH">Thai</option>
  <option value="BO">Tibetan</option>
  <option value="TO">Tonga</option>
  <option value="TR">Turkish</option>
  <option value="UK">Ukrainian</option>
  <option value="UR">Urdu</option>
  <option value="UZ">Uzbek</option>
  <option value="VI">Vietnamese</option>
  <option value="CY">Welsh</option>
  <option value="XH">Xhosa</option>
        </select>

      </div>
    <div class="form-group form-check col-md-2">
        <label for="inputName">Instalar Actualizaciones</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Si
            </label>
          </div>
      </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">CP</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Acepto los Terminos y Condiciones
      </label>
    </div>
  </div>
  <a href="/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear ISO</a>

</form>

@endif




@endsection

