<?php

$url = ltrim($_SERVER['REDIRECT_URL'], "/");
if (!preg_match("~^(.*)\\.cyb\\.no$~i", $_SERVER['HTTP_HOST'], $match))
{
    die("Host mismatch!");
}
$subdomain = $match[1];

switch(strtolower($subdomain))
{
    /*
     * Tre typer videresendinger:
     *  1. Ofte oppdaterte videresendinger (~1-2 i semesteret)
     *  2. Forholdsvis faste videresendinger (~1 per to år)
     *  3. One-off spesialer, mega-stor-fester/artige-quirky videresendinger (nærmest unike)
     */


    /*
     * 2. Forholdsvis faste videresendinger
     *  - URL-er som ikke skal oppdateres
     */
    case 'avtaler':
        header('Location: https://wiki.cyb.no/x/vpTJBQ');
        die;
    case 'git':
    case 'github':
        header('Location: https://github.com/cybernetisk');
        die;
    case 'api':
        header('Location: https://in.cyb.no/api/');
        die;
    case 'bat':
    case 'danskebat':
    case 'danskebåt':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSdhyV2uBkYKeiXoXN0Ts12UImknXjsPus-7zHwM61QjhpzQOQ/viewform');
        die;
    case 'kjeks':
        header('Location: https://cyber.uio.no/paste/?872fe4ac6357e9e5#b/3GfngJiM6C4XaVgGW+Kt6M3ZP3uoTcUHqEGuhIv5U=');
        die;
    case 'x':
        // Lenke til X-gruppas hackathon
        header('Location: http://cyb.no/x.html');
        die;
    case 'hackathon':
        header('Location: https://github.com/cybernetisk/hackathon');
        die;
    case 'salutt':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSexknSTuznQfYB4ljz2F4U4bOsKV_QykCWr4rzslTbsXan83g/viewform?usp=sf_link');
        die;

    // Generalforsamling stuff:
    case 'gf':
        // lenke til generalforsamlingens nyeste dagsorden
        header('Location: https://github.com/peterhpo/docs/blob/master/generalforsamling/23V/Dagsorden_Generalforsamling_2023V.pdf');
        die;
    case 'forslagskjema':
    case 'forslagsskjema':
    case 'vedtektsforslagskjema':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSdhWfLlt2OQUkI_0XY5LSrlMbvPIu-JVJ744hjQjXdMpx4psQ/viewform?usp=sf_link');
        die;
    case 'forslag':
    case 'vedtektsforslag':
        header('Location: https://docs.google.com/spreadsheets/d/1j-IaCgDGtGXb13BVwBKXOl645_x47pZQLzR-Za0uaKw/edit?usp=sharing');
        die;
    case 'skjematilbakemelding':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLScusQ46sAd138aaYNb26TCurAbFRcDwcTclQcBu4k1xV8GxZw/viewform?usp=sf_link');
        die;

    case 'docs':
        // UTDATERT: lenke til gamle dokumenter
        header('Location: http://cyb.no/docs/');
        die;
    case 'vedtekter':
        // lenke til nyeste vedtekter
        header('Location: https://cybernetisk.github.io/docs/vedtekter/vedtekter.pdf');
        die;

    case 'test':
        header('Location: http://cyb.no/public/index.html');
        die;
    case 'discord':
    case 'koscord':
        header('Location: https://discord.gg/tRaSgSC9vr');
        die;
    case 'rf':
        header('Location: http://realistforeningen.no');
        die;

    case 'akke':
    case 'loff':
    case 'akkeloff':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSfleEvye7KNN5lCkIvvlluCLK1lHDav0LjcjQVOq7QlpQ2yIw/viewform');
        die;

        // ØKONOMIRELATERT
    case 'okonomi':
    case 'oko':
    case 'øko':
        header('Location: http://cyb.no/okonomi/');
        die;
    case 'svinn':
        header('Location: https://in.cyb.no/varer/inventorycount/50/registrations');
        die;
    case 'storesafen':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AsmINoGULmbPdFZHU1BYVlZqV2VDeDF1MkFBY1dVNXc&usp=drive_web');
        die;
    case 'budsjett':
        header('Location: https://docs.google.com/spreadsheets/d/1r7LBYX12H7uEiZbEYF2rbw2AAVTUuYHE9olz0YViHf8/edit#gid=1835705167');
        die;
    case 'regnskap':
        header('Location: https://okoreports.cyb.no/');
        die;
    case 'kontoplan':
        header('Location: https://docs.google.com/spreadsheets/d/1-yiVwoQGM4It-7LpoIsCdQ0rF9oVs7AiSKRjaJp3xI0/edit?usp=sharing');
        die;
    case 'sosialemidler':
        header('Location: https://docs.google.com/spreadsheets/d/1eiJ8ZdSiKwwvXKbciINCcp_fkveeXAXZNaM336uIkLE/edit');
        die;
    case 'refundering':
    case 'utlegg':
        header('Location: https://nettskjema.no/a/cyb-utlegg');
        die;
    case 'bestill':
        header('Location: https://jira.cyb.no/servicedesk/customer/portal/1');
        die;
    case 'okomail':
    case 'omail':
    case 'ømail':
        header('Location: https://groups.google.com/a/cyb.no/g/gruppe-okonomi');
        die;
    case 'kort':
    case 'card':
    case 'cybkort':
    case 'cybcard':
        header('Location: https://nettskjema.no/a/396301');
        die;
    
    case 'vask':
        header('Location: https://docs.google.com/spreadsheets/d/1ULbkuRfWzCbi3pgapfZaL2vsKAHbTHlSufSUvRWSi2g/edit#gid=0');
        die;
    case 'skapet':
        header('Location: https://docs.google.com/spreadsheets/d/1SPhd8FMb8TtZ5ahS09_CBEOPqHjAXOd_qL-pq0eSIJU/edit?usp=sharing');
        die;
    case 'menu':
    case 'm':
    case 'barmeny':
        header('Location: https://meny.cyb.no');
        die;
    case 'kantina':
    case 'kantine':
        header('Location: https://drive.google.com/file/d/1GnX2YtA5iTHepcTmhoTrX3gGS25Qe4uF/view?usp=sharing');
        die;
    case 'drink':
    case 'drinker':
    case 'drinkmeny':
        header('Location: https://docs.google.com/document/d/1dowUcGqDN-GwzEFWB1JHBXAbOXqSD7RRVVxjQErU6qE/edit?usp=sharing');
        die;
        
    case 'barrutiner':
        header('Location: https://forms.gle/ugb6aWoCoYXm8vYM9');
        die;
        
    case '3t':
        header('Location: https://tripletex.no/execute/inboxVoucher?mode=1&contextId=2845076');
        die;


        // Forum, wiki og andre tjenester:
    case 'rapport':
    case 'rapporter':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AvHDUXiAiHqUdDNFUUQxaHNldWdWWmhXX2l5c2hweWc&usp=sharing');
        die;
    case 'ordenen':
    case 'orden':
        header('Location: https://wiki.cyb.no/display/orden');
        die;
    case 'gammel':
    case 'old':
        header('Location: http://cyb.ifi.uio.no/gammelweb/');
        die;

        //smittesporing
    case '19':
    case 'corona':
    case 'korona':
    case 'smitte':
    case 'virus':
        header('Location: https://forms.gle/EnxQsngoepMZydMt6');
        die;

        // SM skjema:
    case 'ferdig':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSc48fb7TmGTdFEJ5At8z3e0dzdnmXM6GuNliry4nOJP1Z808Q/viewform');
        die;

    case 'internmail':
    case 'mailingliste':
        header('Location: https://groups.google.com/a/cyb.no/g/aktiv');
        die;

    case 'promotering':
    case 'promo':
    case 'pr':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSeh73w5IkAkWkY_RRPJixipvMPkyxMGfMPs45XDgV3994ykjA/viewform?usp=sf_link');
        die;

    case 'ical':
#header('Location: https://www.google.com/calendar/embed?src=cybernetisk.selskab@gmail.com&ctz=Europe/Oslo&gsessionid=OK');
        header('Location: https://in.cyb.no/api/cal/events.ics');
        die;
    case 'ifi-blekka':
        header('Location: http://cyb.ifi.uio.no/docs/ifi-blekka_2011.pdf');
        die;
    case 'irc':
        header('Location: http://cyb.no/wordpress/fora/ircc/');
        die;
    case 'kontaktliste':
        header('Location: https://wiki.cyb.no/x/QgCd');
        die;
    case 'grill':
        header('Location: https://wiki.cyb.no/display/AKTIV/Grillkalender+2015');
        die;
    case 'pubtur':
    case 'p2p':
        header('Location: https://docs.google.com/spreadsheets/d/1U6t-q4Zi3yXnckOgN0bAnT4fbL4DnyWJIeIK1cQUOV0/edit');
        die;
    case 'sm':
    case 'sjekkliste':
    case 'sm-sjekkliste':
        header('Location: https://wiki.cyb.no/display/ESC/Checklist+for+Bar');
        die;
    case 'slack':
        header('Location: https://cybernetisk.slack.com');
        die;
    case 'crowd':
        header('Location: https://jira.cyb.no/crowd/console/login.action');
        die;
    case 'quiz':
        header('Location: https://docs.google.com/spreadsheets/d/1YOtvGEAYqiyFQIw4JNKsSI0uv7C0TFs2juudUllZN0c/edit?usp=sharing');
        die;
    case 'confluence':
        if ($url) {
            header('Location: https://wiki.cyb.no/' . $url);
        } else {
            header('Location: https://wiki.cyb.no/');
        }
        die;

    case 'aktiv':
    case 'ja':
    case 'join':
    case 'blimed':
    case 'bliaktiv':
    case 'makecybgreatagain':
    case 'oneofus':
    case 'joinus':
    case 'interessert':
    case 'frivillig':
    case 'volunteer':
    case 'sure':
    case 'iguess':
    case 'whynot':
    case 'jada':
    case 'woho':
    case 'hijacked':
    case 'brainwashed':
    case 'frivilligtvang':
    case 'cybislove':
    case 'loveis':
    case 'cybislife':
    case 'lifeis':
    case 'tvang':
    case '2kr':
    case 'slay':
    case 'clubpenguin':
    case 'kleptomaner':
    case 'fylleløfte':
    case 'uforplikta':
    case 'pingvinsquad':
    case 'thereisnothingwecando':
    case 'forglory':
    case 'forhonor':
        header('Location: https://nettskjema.no/a/378483');
        die;
    case 'ka':
        header('Location: https://linktr.ee/ka.thas');
        die;
    case 'ny':
        header('Location: http://cyb.no/ny.html');
        die;
    case 'nei':
        header('Location: http://folk.uio.no/julianj/andreas/');
        die;

    case 'parti':
        header('Location: http://partiboi.de');
        die;

    case 'blekka':
        header('Location: http://cyb.ifi.uio.no/ifi-blekka/');
        die;
    case 'escape':
    case 'kjeller':
        header('Location: http://cyb.no/');
        die;

        // Arrangement-/påmeldingssider:
    case '42':
        header('Location: http://cyb.ifi.uio.no/42-3/');
        die;
    case 'fadder':
        //header('Location: https://spreadsheets.google.com/viewform?formkey=dHoxV0ZRYnl0UlNOTXJrTktQR3ctbGc6MQ#gid=0');
        header('Location: http://82.147.36.214/~mariussm/fadder/');
        die;
    case 'fadderuke':
    case 'fadderuka':
    case 'fadderuken':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSfseWVmaCGz21WqCMqRE8qex4lILJ0jTpXEmbU2zFXNQ4Q1ZQ/viewform?usp=sf_link');
        die;
    case 'festen':
        header('Location: http://cyb.ifi.uio.no/festen/');
        die;
    case 'festfunk':
        header('Location: https://docs.google.com/spreadsheet/viewform?hl=en_US&formkey=dFdvZHVNMHltR1k3NGhWNHZrQ0FMRkE6MQ#gid=0');
        die;
    case 'ifi-galla':
    case 'galla':
        header('Location: http://cyb.ifi.uio.no/2015/09/Ifi-galla-2015/');
        die;
    case 'galla16':
        header('Location: https://drive.google.com/drive/folders/0B7JLatxDx5L_dFM4UVNOQ3BRT0U?usp=sharing');
        die;

    case 'gallabudsjett':
        header('Location: http://docs.google.com/spreadsheet/ccc?key=0Ap3QTlUhm0N9dG5LTUd6UjltSE5VZ0RXTEhndmFrOHc');
        die;
    case 'genfors':
        header('Location: http://cyb.ifi.uio.no/kalender/generalforsamling/');
        die;
    case 'gallasignup':
    case 'galla-signup':
    case 'rsvp':
    case 'rspv':
        header('Location: https://forms.gle/7obvRNjK1Ahb5QEu9');
        die;
    case 'rsvp-hjelp':
        header('Location: https://forms.gle/pKuCDYcm75qWR3k79');
        die;
    case 'gallapåmeldte':
    case 'gjester':
        header('Location: https://docs.google.com/spreadsheets/d/1eFeU1kMJVow0rG1y49jgxUgWofqJUCKx2f1KDKJLn7A');
        die;
    case 'sang':
    case 'sanghefte':
    case 'galla-sang':
    case 'gallasang':
    case 'galla_sang':
        header('Location: https://drive.google.com/file/d/1ebKoOE9gYz5ImXp230I9MKRhLEcR8nE5/view?usp=share_link');
        die;
    case 'bordkart':
        header('Location: https://docs.google.com/spreadsheets/d/1HBPEfSn0kbtlADzmy7hkAnLBdIHv6xjgoyT0ULfZ9J4/edit?usp=sharing');
        die;
    case 'hoopla':
        header('Location: https://cyb.hoopla.no');
        die;
    
# Hyttetur
    case 'cabin':
    case 'salsa': # Fordi Adrian..
    case 'hytte':
    case 'hyttetyr':
    case 'hyttetur':
    case 'cabin-trip':
        header('Location: https://nettskjema.no/a/141045');
        die;

    case 'skitur':
        header('Location: https://cyb.no/404.html');
        die;
    case 'kosetirsdag':
    case 'koz':
    case 'kos':
    case 'kosekveld':
    case 'tirsdag':
        header('Location: http://docs.google.com/spreadsheet/ccc?key=0AglUcicBmEzrdGVyNHoycVlxanBFM3pJWTFabEM1RXc');
        die;
    case 'party':
# Ifi-festen i 2011 -- 200-årsjubileet
        header('Location: http://cyb.ifi.uio.no/festen/?lang=en');
        die;
    case 'patent':
        header('Location: https://dbsearch2.patentstyret.no/Mark/DetailNewWindow.aspx?idappl=201109490%2C&culture=en-GB#.TmdZ0OIsJpc.email');
        die;
    case 'skitur':
        header('Location: https://docs.google.com/forms/d/1CLq7o8t52qKMQqCUxEm7KNJ87z2eVszET3Zu343Ksko/viewform#start=embed');
        die;
    case 'skitur-hytte':
        header('Location: https://docs.google.com/forms/d/1-QFtPz2GHvaHx6Hl16DsAVbdI4Djc4ql60dN4Ti0vdw/viewform');
        die;
    case 'faglig-helg':
    case 'fh':
    case 'helg':
        header('Location: http://cyb.ifi.uio.no/helg/');
        die;
    case 'midtveis':
        header('Location: https://www.facebook.com/events/795366147283100/');
        die;
    case 'whisky':
        header('Location: https://billetto.no/e/whiskyseminar-host2019-billetter-387527');
        die;

    case 'protokoll':
        header('Location: https://github.com/cybernetisk/docs/tree/master/protokoll');
        die;

    case 'poeng':
        header('Location: https://docs.google.com/spreadsheets/d/1hHWw6vM7fgd8pJgzB79Q-B0TNA81Dk0F7sN7XMLoKh8/edit#gid=0');
        die;
        //Signup sheets
    case 'arr':
        header('Location: https://docs.google.com/spreadsheets/d/1gNIIPnveDSeb_WJ99zzxvHrQTry5dOBuxcwIILw1qls');
        //header('Location: https://docs.google.com/spreadsheets/d/1Y2O8HzAngIc3tm8iBvqhf_Vbih1UwAVoiQGlkOEtbcc/edit#gid=0');
        die;
    case 'fag':
        header('Location: https://docs.google.com/spreadsheets/d/1zCOUnSjTfnVJkdE9Fn8wIaHwuqwi_ROk7nXE0yQ1Kac/edit#gid=0 ');
        die;

    case 'barjobb':
    case 'bar':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0ArBMpT8sPaNYdFhLcFI4dmt6WWVzYUZLWUVtZEJsenc&usp=sharing');
        die;

    case 'kafe':
        header('Location: https://docs.google.com/spreadsheets/d/1LQapnYb0pHq5wCXrbY2lxglP55NF78W69TEyQLVXS_I/edit?usp=sharing');
        die;

    case 'kaferutiner':
        header('Location: https://forms.gle/fUTQwzrHAKiRJZVx6');
        die;

    case 'kafefadder':
    case 'fadderkafe':
        header('Location: https://docs.google.com/forms/d/1_ZuXsnAPpIzo49o_ALa0JKwsYtHRY7BPo78vzrObzDM/viewform');
        die;

    case 'santa':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLScmpsPRZdOocSC6Z776wivQWGRK4XmHh0iPoX65Coyj8BZESw/viewform');
        die;

    case 'alumni':
        header('Location: https://groups.google.com/a/cyb.no/g/alumnus');
        die;

    case 'intern':
        header('Location: http://in.cyb.no/');
        die;

    case 'bong':
        header('Location: http://in.cyb.no/voucher/worklogs');
        die;

    case 'varer':
    case 'priser':
    case 'varepriser':
        header('Location: http://in.cyb.no/varer/products');
        die;
    case 'innpris':
        header('Location: https://in.cyb.no/varer/inventory');
        die;

    case 'taxi':
        header('Location: https://wiki.cyb.no/x/kHwr');
        die;

    case 'sifra':
    case 'siifra':
        header('Location: https://docs.google.com/forms/d/1Ph-nLXNx_-pcaWKyzYuEMmrzc6E2Faq60cWegvnEtos');
        die;

    case 'nykasse':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSdP_P9HLB21GArdjv5oFUNIMt3M_FaALkdvHYa8ZEfVs9ZcEw/viewform?usp=sf_link');
        die;

    case 'rydding':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSdyHyTMaUEg1o-2v0j4ZLgXRPeu_gZ_lXAwcIQi8X-kuJeeeA/viewform');
        die;

    case 'venteliste':
        header('Location: https://forms.gle/a5vderovaw78zz7s7');
        die;

    case 'utlansoversikt':
        header('Location: https://docs.google.com/spreadsheets/d/1QvCbuJnq4EVmdDDaKU1GbcfXuJgVhH3T8I8CA8f_rhk/edit#gid=0');
        die;

    case 'tilgang':
        header('Location: https://forms.gle/nhYtAyrbpRDxMi7r8');
        die;

    case 'hjelp':
        header('Location: https://forms.gle/uoc9PAuMpy5FqE218');
        die;

    // Sosiale medie profiler:
    case 'instagram':
    case 'insta':
        header('Location: https://www.instagram.com/cybernetisk/');
        die;

    case 'facebook':
    case 'fb':
        header('Location: https://www.facebook.com/cybernetisk');
        die;
        
    case 'ff':
        header('Location: https://drive.google.com/file/d/1EpHB8bYGync2V8Tciwj9hM_1w8yAWBWh/view?usp=sharing');
        die;

    case 'redirect':
        header('Location: https://github.com/cybernetisk/redirect/blob/master/handler.php');
        die;

    case 'www':
    default:
        header('Location: http://cyb.no');

        // Slutt aa legg inn ting på bunn her, det overkjører default....|
}

