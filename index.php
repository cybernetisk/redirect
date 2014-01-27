<?php
// *.cyb.no redirectes hit, så kan vi gjøre egne redirecter her selv :)

$url = ltrim($_SERVER['REDIRECT_URL'], "/");
if (!preg_match("~^(.*)\\.cyb\\.no$~i", $_SERVER['HTTP_HOST'], $match))
{
    die("Host mismatch!");
}
$subdomain = $match[1];

switch(strtolower($subdomain))
{

    case 'testa':
        header('Location: http://google.com');
        die;
    
    case 'oko':
        header('Location: http://cyb.no/okonomi/');
        die;

// Forum, wiki og andre tjenester:
    case 'z':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AgxsqTftPgbYdHhQNk52TWZLZlN2M01lUk5Oa3dyT3c');
        die;
    case 'rapport':
    case 'rapporter':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AvHDUXiAiHqUdDNFUUQxaHNldWdWWmhXX2l5c2hweWc&usp=sharing');
        die;
    case 'ordenen':
    case 'orden':
        header('Location: http://cyb.ifi.uio.no/ordenen/');
        die;
    case 'budsjett2013':
    case 'budsjett13':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0At9BWyjhL887dEh2RFZKbFFWcGZUSlg5NE91QW1Bd1E');
        die;
    case 'budsjett':
    case 'budsjett2014':
    case 'budsjett14':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0At9BWyjhL887dGYwcUsxVFNXaFZoYkdwMFB4TTlucEE');
        die;
    case 'budsjett2012':
    case 'budsjett12':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AoWH8VPaicVedFpUYTBhR1lYMXR0VkwtLWVXLVZWOVE');
        die;
    case 'budsjetth2011':
    case 'budsjetth11':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AvHDUXiAiHqUdGNLeU9hOGdoM1ZvT1EtNng1eDFVakE');
        die;
    case 'bong':
    case 'bong13':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AvM9mrSkURTOdEEtOE8wdnVBYXQ5S25ZV09RWnZ1OUE');
        die;
    case 'docs':
        header('Location: http://cyb.no/docs/');
        die;
    case 'vedtekt':
    case 'vedtekter':
        header('Location: http://cyb.no/cyb_vedtekter.pdf');
        die;
    case 'ical':
        header('Location: https://www.google.com/calendar/embed?src=cybernetisk.selskab@gmail.com&ctz=Europe/Oslo&gsessionid=OK');
        die;
    case 'ifi-blekka':
        header('Location: http://cyb.ifi.uio.no/docs/ifi-blekka_2011.pdf');
        die;
    case 'irc':
        header('Location: http://cyb.ifi.uio.no/fora/ircc/');
        die;
    case 'forum':
        header('Location: http://cyb.ifi.uio.no/smf/');
        die;
    case 'gcal':
        header('Location: http://www.google.com/calendar/embed?src=cybernetisk.selskab%40gmail.com&ctz=Europe/Oslo');
        die;
    case 'refundering':
        header('Location: http://cyb.ifi.uio.no/okonomi/Refunderingsskjema.pdf');
        die;
    case 'sm':
    case 'sjekkliste':
    case 'sm-sjekkliste':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AhqWeuIzIBbadDdfRWQ0MlRJbFBPcGFzeDJ0cTBpZ3c');
        die;

    case 'wiki':
        // search for something?
        if ($url)
        {
            header('Location: http://cyb.ifi.uio.no/aktiv/index.php?title=Special%A3Search&search='.urlencode($url).'&go=Go');
        }
        else
        {
            header('Location: http://cyb.ifi.uio.no/aktiv/');
        }
        die;

// Permanente Wordpress-seksjoner:
    case 'aktiv':
    case 'frivillig':
    case 'volunteer':
        header('Location: http://cyb.ifi.uio.no/cyb/aktiv-i-cyb/');
        die;
    case 'ny':
        header('Location: http://cyb.ifi.uio.no/cyb/aktiv-i-cyb/');
        die;
    case 'blekka':
        header('Location: http://cyb.ifi.uio.no/ifi-blekka/');
        die;
    case 'cal':
        header('Location: http://cyb.ifi.uio.no/kalender/');
        die;
    case 'escape':
    case 'kjeller':
        header('Location: http://cyb.no/kjeller');
        die;
    case 'kafe-info':
        header('Location: http://cyb.ifi.uio.no/kjeller/kafe/');
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
    case 'fbc':
        header('Location: https://uio200.basecamphq.com');
        die;
    case 'galla':
        header('Location: http://cyb.ifi.uio.no/2013/09/Ifi-galla_2013/');
        die;
    case 'genfors':
        header('Location: http://cyb.ifi.uio.no/kalender/generalforsamling/');
        die;
    case 'gallapåmeldte':
    case 'gallapåmeldte2013':
    case 'gjester':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0AglUcicBmEzrdEZmRnU1bENXbXltdGpoLVVBWDFad1E&usp=drive_web#gid=0');
        die;
    case 'hackaton':
        header('Location: http://cyb.ifi.uio.no/2011/11/hackaton-2-desember/');
        die;
    case 'hyttetyr':
    case 'hyttetur':
        header('Location: https://docs.google.com/forms/d/1syagKGQclnm7lYnOgaiPiyTDiscsyGpcFjK7E3V0Om4/viewform');
        die;
    case 'illustrator':
        header('Location: http://cyb.ifi.uio.no/2012/01/illustratorkurs/');
        die;
    case 'jentekveld':
        header('Location: http://www.facebook.com/event.php?eid=194673667219021');
        die;
    case 'party': 
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
    case 'whisky':
        header('Location: https://spreadsheets.google.com/a/lebesbye.com/viewform?formkey=dDQtQ29OQWlvTTRTUDcxWWZ5S2RpYWc6MQ&ifq/');
        die;

    case 'nord1':
		header('Location: http://cyb.ifi.uio.no/nord1');
		die;

    //Signup sheets
    case 'barjobb':
    case 'bar':
        header('Location: https://docs.google.com/spreadsheet/ccc?key=0ArBMpT8sPaNYdFhLcFI4dmt6WWVzYUZLWUVtZEJsenc&usp=sharing');
        die;

    case 'kafe':
        header('Location: https://docs.google.com/forms/d/1_EQ8yptbp0Q2PI77AB2oLntDFOEUSADx0P6P4Rbx1KU/viewform');
        die;
    case 'kafefadder':
    case 'fadderkafe':
        header('Location: https://docs.google.com/forms/d/1NVLCT6mwXAMsvAwL1V6f-z1nQJDX93f9L-hh1EmReiY/viewform');
        die;

    //Mail-greier
    case 'alumni':
        header('Location: https://sympa.uio.no/cyb.no/info/alumnus');
        #header('Location: https://sympa.uio.no/ifi.uio.no/info/cyb-alumni');
        die;

	default:
		header('Location: http://cyb.ifi.uio.no');
}

