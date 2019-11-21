<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Pavle Milisavljević pavleelite2017@gs.viser.edu.rs">
    <meta name="description" content="Često postavljana pitanja  ">
    <meta name="keywords" content="Prodavnica,Knjige,FAQ,pitanja">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bukstor FAQ</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
   <!-- navigacija -->
   <?php 
    isipisHtml("nav");
    ?>
    <!-- telo -->
  <div class="container" style="min-height: 75vh">
      <div class="page-header">
      <h1>
        Često postavljanja pitanja
      </h1>
    </div>

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="Prvi">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePrvi" aria-expanded="true" aria-controls="collapsePrvi">
                  Kako kupujem?
              </a>
            </h4>
          </div>
          <div id="collapsePrvi" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="Prvi">
            <div class="panel-body">
              Odaberite artikle koje želite da kupite. Pored svakog artikla nalazi se dugme <i class="fas fa-shopping-cart"></i> – kliknite na njega i artikal će automatski biti dodat u Vašu korpu.<br>
              Artikle u korpi možete na isti način dodati i sa svoje liste želja. U korpi će Vam biti prikazana ukupna cena.
              Kada ste odabrali sve artikle koje želite da kupite, kliknite na korpu u gornjem desnom uglu ekrana i otvori će Vam se obrazac za kupovinu.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingDrugi">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDrugi" aria-expanded="false" aria-controls="collapseDrugi">
                  Da li je neophodna registracija?
              </a>
            </h4>
          </div>
          <div id="collapseDrugi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDrugi">
            <div class="panel-body">
              Ne morate da se registrujete da bi kupovali na našim stranicama. Ali, to je potrebno ako želite da dodajete artikle na Vašu listu želja. Pored toga, sam proces kupovine je brži za registrovane korisnike.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTreci">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTreci" aria-expanded="false" aria-controls="collapseTreci">
                  Kako se registruje?
              </a>
            </h4>
          </div>
          <div id="collapseTreci" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTreci">
            <div class="panel-body">
                Proces registracije je jednostavan:
                <ol>
                <li>Kliknite na "Uloguj se" u gornjem desnom uglu stranice.</li>
              
                <li>Potom kliknite na "Kreiraj nalog" u sredini dna stranice.</li>
                
                <li>Popunite obtazac i kliknite "Kreirajte nalog"</li>
                
                <li>Nakon toga na Vas e-mail biće prosleđeni Vaši korisnički podaci za logovanje. Kada ponovno posetite naše stranice, dovoljno je samo da se ulogujete.   </li>
                </ol>
              </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingCetvrti">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseCetvrti" aria-expanded="false" aria-controls="collapseCetvrti">
                  Kako se logujete?
              </a>
            </h4>
          </div>
          <div id="collapseCetvrti" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCetvrti">
            <div class="panel-body">
                Logujete se pritiskom na "Prijava" - poterebno je samo da unesete svoje korisničko ime i lozinku koji ste prilikom registracije dobili na mejl.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingPeti">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePeti" aria-expanded="false" aria-controls="collapsePeti">
                  Načini plaćanja
              </a>
            </h4>
          </div>
          <div id="collapsePeti" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPeti">
            <div class="panel-body">
              <ul>
                <li>Pouzećem: Naručene artikle dobijate na kućnu adresu, a troškove narudžbine plaćate kuriru.</li>
                <li>Uplatom na račun: Novac nam uplaćujete na naš tekući račun. Nakon što evidentiramo uplatu, u roku od 24 sata knjige će vam biti poslate a isporučene u skladu sa rokom za dostavu. Rok za uplatu je sedam dana.</li>
                <li>Platnim karticama: Ako izaberete plaćanje platnim karticama, tokom procesa naručivanja bićete automatski preusmereni na sajt Banca Intesa Beograd. Banka Intesa Beograd vrši procesuiranje kartica na internetu. Na sajtu Banca Intesa Beograd unosite broj svoje kartice i ostale potrebne podatke. Banka vrši proveru vaše kartice i raspoloživost sredstava na računu, i ako imate uslove za plaćanje, rezerviše sredstva na vašem tekućem računu u vrednosti iznosa porudžbine. U slučaju uspešne rezervacije automatski vam se prosleđuje email sa svim detaljima vaše narudžbenice i detaljima transakcije. Nakon završetka plaćanja sa sajta Banca Intesa Beograd bićete ponovo prosleđeni na delfi.rs gde se kupovina završava. Podaci sa platne kartice od vašeg računara do sajta banke se prenose u zaštićenoj formi upotrebom SSL protokola, kao trenutno najsavremenije tehnologije. Sigurnost podataka prilikom plaćanja garantuje Banca Intesa Beograd i podaci o platnoj kartici niti u jednom trenutku nisu dostupni delfi.rs prodajnom mestu. Ceo sistem je organizovan u cilju maksimalne zaštite vaših poverljivih podataka i predstavalja standard za plaćanje preko interneta širom sveta.</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingSesti">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSesti" aria-expanded="false" aria-controls="collapseSesti">
                  Kako dodajem proizvode na svoju listu želja?
              </a>
            </h4>
          </div>
          <div id="collapseSesti" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSesti">
            <div class="panel-body">
              <ol>
                <li>Jednostavnim klikom na dugme <i class="fas fa-heart"></i> koji se nalazi uz svaki artikal.</li>
                <li>Klikom na dugme <i class="fas fa-heart"></i> možete u bilo koje doba da pristupite svojoj listi želja koja se nalazi unutar Vaših korisničkih stranica i uvek da imate pregled artikala koje ste odabrali.</li>
                <li>Ako Vam se neki proizvod svidi, ali još niste sasvim sigurni da li želite da ga kupite, dodajte ga na listu želja!</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingSedmi">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSedmi" aria-expanded="false" aria-controls="collapseSedmi">
                  Da li moram da kupim proizvode sa svoje liste želja?
              </a>
            </h4>
          </div>
          <div id="collapseSedmi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSedmi">
            <div class="panel-body">
                Ne morate! Lista želja Vam služi kao podsetnik. Pomoću nje možete na jednom mestu da vidite artikle koji Vas zanimaju i koje biste voleli da kupite.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOsmi">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOsmi" aria-expanded="false" aria-controls="collapseOsmi">
                  Da li je kupovina na vašim stranicama sigurna?
              </a>
            </h4>
          </div>
          <div id="collapseOsmi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOsmi">
            <div class="panel-body">
                Kupovina je sigurna. Svi podaci o kupovini vidljivi su samo administratoru. Podaci o Vašoj platnoj kartici biće šifrirani i dostupni samo banci koja obavlja transakciju.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingDeveti">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDeveti" aria-expanded="false" aria-controls="collapseDeveti">
                  Povraćaj robe
              </a>
            </h4>
          </div>
          <div id="collapseDeveti" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDeveti">
            <div class="panel-body">
                Povraćaj robe se koristi isključivo u slučaju reklamacije. Ukoliko je roba plaćena karticom putem interneta, povraćaj se vrši isključivo preko VISA, EC/MC i Maestro metoda plaćanja. Povraćaj novca kupcu je zagarantovan shodno ishodu reklamacionog procesa. Kupac ima pravo da otkaže ugovor o kupovini shodno reklamacionom procesu internet knjižare.

            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingDeseti">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDeseti" aria-expanded="false" aria-controls="collapseDeseti">
                Kupovina van granica teritorije Srbije
              </a>
            </h4>
          </div>
          <div id="collapseDeseti" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDeseti">
            <div class="panel-body">
                Za kupce iz inostranstva mogući su dodatni troškovi carinjenja, po lokalnim zakonima i cenovnicima zemlje u koju se paket isporučuje, koje određuje carina zemlje u koju se paket isporučuje.

                Ukoliko kupac iz inostranstva odbije da preuzme naručeni paket, Knjižare će biti primorana da kupcu naplate ukupne troškove transporta paketa, dok će ostatak novca biti vraćen kupcu.
            </div>
          </div>
        </div> 


    </div>

  </div>
  <!-- footer -->
  <?php 
    isipisHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>