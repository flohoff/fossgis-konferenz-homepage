<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Docker-basierte GDI in der freien Wildbahn – FOSSGIS 2021</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/dienstag.php#session_SSTGDP">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Docker-basierte GDI in der freien Wildbahn</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Vortrag</span>                von <span class='abstract-speakers'>Christian Mayer</span></p>
                                                                            <p><span class='abstract-time-heading'>Zeit: </span>Dienstag 08. Juni 15:00 Uhr
                <br><span class='abstract-room-heading'>Ort: </span>Bühne 3
                <br><span class='abstract-room-heading'>Dauer: </span>20 Minuten
            </p>

                        
            <p>Docker hat sich in den letzten Jahren als defacto Standard für Anwendungen mit Hilfe von Containervirtualisierung etabliert. Auch im Bereich der Geoinformatik, vor allem im Open Source Bereich, 
werden essentielle Softwarekomponeten als Docker-Images bereitgestellt. Damit wird ein einfacher Distributionsweg inklusive Abhängigkeiten etabliert, sowie die Installation von offener und freier GIS-Software stark vereinfacht. Zum einen können Docker-basierte Architekturen für die Nutzung gemeinsamer, geteilter Entwicklungssetups extrem von Vorteil sein. Zum anderen bringt die Docker Nutzung Vorteile beim Aufsetzen sowie der Skalierung von Geodateninfrastrukturen in Cloud-basierten Systemen. </p>
<p>Im mFund Projekt SAUBER (Satellitenbasiertes System zur Anzeige, Prognose und Simulation von Luftschadstoffen für eine nachhaltige Stadt- und Regionalentwicklung) werden Geodaten, die Luftschadstoffe räumlich modellieren, mittels KI-Methodik erstellt. Diese Geodaten werden in einer zentralen Geodateninfrastruktur mittels standardisierter Schnittstellen veröffentlicht. Diese GDI ist komplett docker-basiert und mittels Docker-Compose / Docker-Swarm orchestriert. Dies erlaubt eine hochgradig automatisierte Bereitstellung der GDI. Somit kann die GDI sehr einfach entweder lokal zu Entwicklungszwecken aber auch auf (Cloud-) Servern aufgesetzt werden.</p>
<p>Der Vortrag gibt eine kurze Übersicht über die Basistechnologien Docker, Docker-Compose und Docker-Swarm. Außerdem wird die Methodik und der Aufbau der GDI aus dem SAUBER Projekt als Realweltbeispiel einer Docker-basierten GDI vorgestellt. Außerdem werden die Vorteile aber auch die Herausforderungen und Nachteile eines solchen Setups vorgestellt.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>