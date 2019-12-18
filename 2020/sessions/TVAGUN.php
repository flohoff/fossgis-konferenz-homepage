<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Geodaten jonglieren mit ogr2ogr – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_TVAGUN">zurück zum Programm</a></p>
        <h2 class='abstract-title'>Geodaten jonglieren mit ogr2ogr</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Workshop</span> von                <span class='abstract-speakers'>Claas Leiner</span></p>
            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 12:30 Uhr<br><span class='abstract-room-heading'>Ort: </span>SR R-110</p>

            
            <p>QGIS kann kann über die Schnittstelle GDAL/OGR praktisch sämtliche relevanten Geodatenformate lesen und sehr viele auch schreiben. Es gibt einige Datenformate, mit denen Nutzer/innen es häufiger zu tun bekommen, die jedoch als Arbeitsformat ungeeignet sind.
Dazu gehören insbesondere das NAS-XML-Format der Landesämter für Geoinformation und OSM-Rohdaten im OSM- oder PBF-Format.
Diese Daten lassen sich zwar direkt ins QGIS laden und anschließend in ein anderes Format speichern. Wer jedoch sehr große oder viele Dateien konvertieren muss, ist im QGIS mit sehr langen Ladezeiten oder auch Programmhängern konfrontiert. Mit dem Kommandozeilen-Werkzeug ogr2ogr, welches mit QGIS automatisch installiert wird, lassen sich auch sehr große PBF-Dateien oder ein ganzes Verzeichnis von NAS-XML-Dateien konvertieren bzw. in eine Datenbank importieren. Zudem könne Inhalte schon beim Import über die eingebaute SQL-Schnittstelle gewählt und Geometrien direkt in ein anderes Koordinatenbezugssystem umprojiziert werden.
Mit der Integration der Werkzeuge in kurze Linux-Shell-Skripts oder Windows-Batch lassen sich ganze Daten-Verzeichnisse konvertieren und viele Abläufe automatisieren,
Im Workshop konvertieren wir verschiedene Formate, wählen dabei Inhalte aus und projizieren in andere Koordinatensysteme um.
Auch das umprojizieren ganzer Verzeichnisse mit Shapefiles via ogr2ogr wird durchgeführt.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>