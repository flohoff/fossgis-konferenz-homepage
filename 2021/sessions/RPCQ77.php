<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>SHOGun als Basis flexibler WebGIS-Lösungen — Oder: Weder &#34;off-the-shelf&#34; noch &#34;fully handcrafted&#34; – FOSSGIS 2021</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/mittwoch.php#session_RPCQ77">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>SHOGun als Basis flexibler WebGIS-Lösungen — Oder: Weder &#34;off-the-shelf&#34; noch &#34;fully handcrafted&#34;</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Vortrag</span>                von <span class='abstract-speakers'>Marc Jansen</span></p>
                                                                            <p><span class='abstract-time-heading'>Zeit: </span>Mittwoch 09. Juni 10:00 Uhr
                <br><span class='abstract-room-heading'>Ort: </span>Bühne 1
                <br><span class='abstract-room-heading'>Dauer: </span>20 Minuten
            </p>

                        
            <p>Das OpenSource Geo Framework SHOGun ist die Basis zahlreicher Webanwendungen, die insgesamt sehr unterschiedliche Anwendungsfälle betrachten. Hierzu zählen u.a. Anwendungen zum Gewässermanagement (Progemis), zur holistischen Ökosystemrestauration (HERMOSA) oder zur Verwaltung und Visualisierung von dreidimensionalen Geodaten. SHOGun ist in seiner Architektur dabei so ausgelegt, dass es sich zwischen den Extremen „off-the-shelf“ (Standardprodukt von der Stange) und „fully handcrafted“ (spezifische Individualentwicklung) bewegen kann.</p>
<p>Der Vortrag stellt zunächst die aktuelle Version von SHOGun vor und zeigt anschließend anhand von den oben aufgeführten Beispielen, wie mit SHOGun und einigen anderen Bibliotheken und Drittkomponenten Standardfunktionalität bereitgestellt werden kann, ohne dass kundenspezifische Anpassungen ausgeschlossen oder erschwert werden. Die neueste Version der Software SHOGun setzt nach wie vor auf extrem robuste Basisbibliotheken wie Spring und Hibernate und bietet ein gesundes Maß an Lösungensansätzen für immer wiederkehrende Fragestellungen. Gleichzeitig versucht die Software auch flexible und verlässliche Ableitungen von diesem Kern einfach zu ermöglichen, etwa um eigene Businesslogiken abbilden zu können. Hierzu stehen abstrakte Vaterklassen bereit, um gleich anzusprechende und abgesicherte (REST und GraphQL) Schnittstellen für die verwalteten Entitäten wie Layer oder Applikationen in der Basis aber auch in Projektableitungen ableiten zu können. SHOGun versucht sich in seinem Kern auf genau diese Anforderungen zu beschränken und zusätzliche Fragestellungen durch seine Microservice-Architektur einfach integrierbar zu machen. Exemplarisch sei hier etwa Keycloak für die Identitäts- und Zugriffsverwaltung genannt.</p>
<p>SHOGun umfasst hierbei im Grunde die reine serverseitige Logik und Programmbestandteile. Im Vortrag werden wir jedoch auch Client-Applikationen (sowie deren zugrunde liegende Bibliotheken) vorstellen. Wenn man diese Einzelbestandteile geschickt zusammenstellt, profitiert man zu einem gewissen Teil von den Vorteilen beider Welten (Standardprodukt vs. Eigenentwicklung). SHOGun ist seit vielen Jahren in Entwicklung, hat jedoch in den letzten Jahren massive Neuentwicklungen erfahren und auch das Verständnis des Frameworks hat sich geändert. Dieser Vortrag hofft, die Beweggründe für diese Neugestaltungen anschaulich zu erläutern.</p>
<p>URL:
* https://github.com/terrestris/shogun</p>
        <div class='abstract-bio'>
            <h3 class='abstract-bio-name'>Marc Jansen</h3>
            <p>Ich bin seit vielen Jahren in der OpenSource GIS-Szene aktiv, als Entwickler (u.a. <a href="http://openlayers.org/">OpenLayers</a>, <a href="http://openlayers.org/">GeoExt</a>, <a href="https://github.com/terrestris/shogun">SHOGun</a> usw.), als konzeptuell Beitragender (u.a. <a href="https://github.com/terrestris/react-geo">react-geo</a>, <a href="https://geostyler.org/">GeoStyler</a> usw.), als Sprecher und Workshopleiter (international &amp; national), als OSGeo Charter Member und als Geschäftsführer der zwei Bonner Firmen <a href="https://www.terrestris.de/">terrestris</a> (OpenSource GIS-Lösungen, Beratungen und mehr) und <a href="https://www.mundialis.de/">mundialis</a> (Earth Observation &amp; Geo-Expertise mit freier Software).</p>
        </div>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>