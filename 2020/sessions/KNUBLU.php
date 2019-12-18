<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>GRASS GIS in der Cloud: actinia Geoprozessierung – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_KNUBLU">zurück zum Programm</a></p>
        <h2 class='abstract-title'>GRASS GIS in der Cloud: actinia Geoprozessierung</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Markus Neteler, Carmen Tawalika</span></p>
            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 15:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Anatomie</p>

            
            <p>Ursprünglich GRaaS (GRASS as a Service) genannt, wurde actinia (https://actinia.mundialis.de) entwickelt, um die GRASS GIS Funktionalität über eine HTTPS REST API bereitzustellen. GRASS GIS Locations, Mapsets, Vektor- und Rasterdaten sowie raum-zeitliche Daten werden zu Ressourcen, die per REST verwaltet und visualisiert werden können. Mit den bestehenden (z.B. Landsat) und in den letzten Jahren neu entstehenden (Copernicus Sentinel) großen Geodatenpools, die Tag für Tag wachsen, soll actinia dem Paradigma folgen, Algorithmen zu den Clouddaten zu bringen. Actinia ermöglicht es, eine große Menge an Geoinformationen aufzubereiten, zu analysieren und bereitzustellen, ohne dass Kenntnisse der Daten, der Analyse, der geeigneten Software zur Automatisierung oder skalierbarer Hardware-Ressourcen erforderlich sind.
Einige der Funktionalitäten sind persistente und flüchtige Berechnung, Benutzerverwaltung zur Begrenzung von z.B. Pixeln, Prozessen und Berechnungsdauer sowie das Loggen von API-Aufrufen und verwendeten Ressourcen durch jeden Benutzer. Ein weiterer Vorteil ist die einfache Installation mit Docker. Bei der Installation in einer Cloud Umgebung mit OpenShift oder Kubernetes verwaltet der integrierte Loadbalancer das Cluster automatisch.
Dem Geist von FOSS folgend sind wir stolz, ein OSGeo-Community-Projekt geworden zu sein und freuen uns auf die Erweiterung der actinia-Community.</p>
<p>Der Vortrag gibt eine Übersicht über Konzepte und grundlegende Funktionalitäten von actinia.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>