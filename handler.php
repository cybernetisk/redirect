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
    case 'git':
    case 'github':
        // lenke til generalforsamlingens nyeste dagsorden
        header('Location: https://github.com/cybernetisk');
        die;
    case 'api':
        header('Location: https://in.cyb.no/api/');
        die;
    case 'bat':
    case 'danskebat':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSeXrCjWGXs3fsfI-iLU8b_OPUzsTOknKO_7-fFbXi8NU0NuHw/viewform');
        die;
    case 'kjeks':
        // lenke til generalforsamlingens nyeste dagsorden
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
    case 'gf':
        // lenke til generalforsamlingens nyeste dagsorden
        header('Location: https://cybernetisk.github.io/docs/generalforsamling/dagsorden.pdf');
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

    case 'rf':
        header('Location: http://realistforeningen.no');
        die;

        // ØKONOMIRELATERT
    case 'okonomi':
    case 'oko':
        header('Location: http://cyb.no/okonomi/');
        die;
    case 'svinn':
        header('Location: https://in.cyb.no/varer/inventorycount/37/registrations');
        die;
    case 'storesafen':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AsmINoGULmbPdFZHU1BYVlZqV2VDeDF1MkFBY1dVNXc&usp=drive_web');
        die;
    case 'budsjett':
        header('Location: https://docs.google.com/spreadsheets/d/1GftlK1MdQXfJt8DHCeypSTGb5k5ZQsFw0h_XNcXZBuM/edit');
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
    case 'utlegg':
        header('Location: http://cyb.no/okonomi/skjemaer/alle/For%20alle/Refunderingsskjema-siste.pdf');
        die;
    case 'bestill':
        header('Location: https://jira.cyb.no/servicedesk/customer/portal/1');
        die;

    case 'vask':
        header('Location: https://docs.google.com/spreadsheets/d/1ULbkuRfWzCbi3pgapfZaL2vsKAHbTHlSufSUvRWSi2g/edit#gid=0');
        die;
    case 'skapet':
        header('Location: https://docs.google.com/spreadsheets/d/1-WQfuOUgx5i9b3hng6ZCBxjr84fW5vdUtkCM9MJSN9o/edit#gid=0');
        die;
    case 'barmeny':
        header('Location: https://docs.google.com/document/d/1wiLVIRGQ8dMiD1wm0wtn-d2aaZslaNo5DtfwwIKgNnc');
        die;
    case 'drink':
    case 'drinker':
    case 'drinkmeny':
        header('Location: https://docs.google.com/document/d/1dowUcGqDN-GwzEFWB1JHBXAbOXqSD7RRVVxjQErU6qE/edit?usp=sharing');
        die;
    case '3t':
        header('Location: https://tripletex.no/execute/dashboard?contextId=2845076');
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


        // SM skjema:
    case 'ferdig':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLSc48fb7TmGTdFEJ5At8z3e0dzdnmXM6GuNliry4nOJP1Z808Q/viewform');
        die;

    case 'internmail':
    case 'mailingliste':
        header('Location: https://groups.google.com/a/cyb.no/forum/#!forum/aktiv');
        die;
    case 'pr':
        header('Location: https://jira.cyb.no/servicedesk/customer/portal/3');
        die;
    case 'promotering':
    case 'promo':
        header('Location: https://wiki.cyb.no/display/PR');
        die;
    case 'ical':
#header('Location: https://www.google.com/calendar/embed?src=cybernetisk.selskab@gmail.com&ctz=Europe/Oslo&gsessionid=OK');
        header('Location: https://internt.cyb.no/api/cal/events.ics');
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
    case 'refundering':
        header('Location: http://cyb.ifi.uio.no/okonomi/Refunderingsskjema.pdf');
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
        header('Location: https://docs.google.com/forms/d/1SxsokxeOv-BQsCDYM8B-mt1tlurcHIGhVmkWT22z20I/viewform');
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
        header('Location: http://cyb.ifi.uio.no/fadderuke');
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
        header('Location: https://cyb.no/404.html');
        die;
    case 'gallapåmeldte':
    case 'gjester':
        header('Location: https://docs.google.com/spreadsheets/d/1eFeU1kMJVow0rG1y49jgxUgWofqJUCKx2f1KDKJLn7A');
        die;

# Hyttetur
    case 'cabin':
    case 'salsa': # Fordi Adrian..
    case 'hytte':
    case 'hyttetyr':
    case 'hyttetur':
    case 'cabin-trip':
        header('Location: https://docs.google.com/forms/d/1tTFzXTXOWeLemNI6fo7LurPBo5k3Kz-1uXK5kTVbifA?usp=sharing');
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
        header('Location: http://cyb.no/protokoll/');
        die;

        //Signup sheets
    case 'arr':
        header('Location: https://docs.google.com/spreadsheets/d/1jiyZb4_vnjgcul6AsqLvPQwsLourdEw8upuWtoLkjcs/edit');
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

    case 'kafefadder':
    case 'fadderkafe':
        header('Location: https://docs.google.com/forms/d/1_ZuXsnAPpIzo49o_ALa0JKwsYtHRY7BPo78vzrObzDM/viewform');
        die;

    case 'santa':
        header('Location: https://docs.google.com/forms/d/e/1FAIpQLScmpsPRZdOocSC6Z776wivQWGRK4XmHh0iPoX65Coyj8BZESw/viewform');
        die;

    case 'alumni':
        header('Location: https://sympa.uio.no/cyb.no/info/alumnus');
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
        header('Location: http://internt.cyb.no/varer/products');
        die;
    case 'innpris':
        header('Location: https://internt.cyb.no/varer/inventory');
        die;

    case 'www':
    default:
        header('Location: http://cyb.no');

        // Slutt aa legg inn ting på bunn her, det overkjører default....| 
}

