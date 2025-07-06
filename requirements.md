Entwickler-Wissensdatenbank: Neuerstellung der Website deineTrainerin.at (Version 2)
Diese Wissensdatenbank dient als Grundlage, um die bestehende Website deineTrainerin.at vollständig neu zu entwickeln. Sie enthält eine Auflistung des gesamten Inhalts (Text, Bilder, Struktur) sowie wichtige funktionale Anforderungen. Darüber hinaus werden Schritte vorgeschlagen, um ein eigenes Backend, ein Content-Management-System (CMS) und ein Terminvergabesystem zu implementieren. Das Ziel ist, die Seite neu aufzubauen, dabei alle bestehenden Inhalte und Bilder weiterzuverwenden, aber die technische Basis komplett zu erneuern. Besondere Vorgaben des Projekts sind unter anderem die ausschließliche Verwendung kostenloser und einfach zu bedienender Technologien, Betrieb auf einem eigenen Server, bevorzugt Eigenentwicklungen (bzw. 100% kostenlose Bibliotheken), zweisprachige Inhalte Deutsch/Englisch, sowie eine sehr benutzerfreundliche Bedienung und ein hervorragendes SEO-Ranking.
Projektkontext und Ziele
deineTrainerin.at ist die Website von Mag. Sabine Taudes – einer Ernährungswissenschafterin und Trainerin – die ganzheitliche Ernährungsberatung, Bewegungstraining und Wohlbefinden-Coaching für ihre Kunden anbietet. Die Webseite richtet sich an Personen (insbesondere Frauen) auf der Suche nach individuell abgestimmtem Coaching in den Bereichen Ernährung, Fitness und Gesundheit. Die aktuelle Version (v2) der Website präsentiert Sabine Taudes’ Philosophie und Angebot in ansprechender Form und enthält persönliche Einblicke, Leistungsbeschreibungen sowie Möglichkeiten zur Kontaktaufnahme und Terminvereinbarung. Ziel des Relaunch-Projekts ist es, eine neue Weblösung zu entwickeln, die:
Die vorhandenen Inhalte und Bilder vollständig integriert: Der Content (Texte und Medien) soll 1:1 übernommen werden, um Konsistenz zu gewährleisten.
Ein modernes, performantes technisches Fundament bietet: Das neue System soll auf 100% freien Technologien basieren, leicht wartbar und ausbaufähig sein (inkl. eigenem Backend/CMS).
Erweiterte Funktionalität bereitstellt: Insbesondere ein Terminvergabesystem (Online-Terminbuchung) und ggf. weitere interaktive Funktionen sollen ergänzt werden.
Zweisprachigkeit ermöglicht: Alle Inhalte sollen auf Deutsch und Englisch verfügbar sein (umschaltbar für den Nutzer).
Benutzerfreundlichkeit und SEO verbessert: Die Seite soll sehr einfach zu bedienen sein (sowohl für Besucher als auch für die Betreiberin bei der Contenteingabe) und Suchmaschinen-optimiert aufgebaut werden.
Im Folgenden werden zunächst die bestehenden Inhalte und Strukturen der aktuellen Website detailliert aufgelistet. Darauf aufbauend werden Design-/Styleguides und Funktionen beschrieben. Abschließend folgt ein Abschnitt mit technischen Empfehlungen sowie ein Entwicklungsplan in Schritten (Agents.md), um die Neuerstellung systematisch umzusetzen.
Bestehende Website-Inhalte und Struktur
Die aktuelle Seite scheint als One-Page-Website umgesetzt zu sein, bei der alle wichtigen Informationen auf einer einzelnen Seite in verschiedenen Sektionen präsentiert werden. Im Menü werden die Punkte Home, Leistungen, Über mich und Anfahrt aufgeführt, die vermutlich zu Ankern innerhalb der Seite springen
deinetrainerin.at
deinetrainerin.at
. Zusätzlich gibt es auffällige Call-to-Action-Elemente wie “Termin”-Buttons, um Besucher direkt zur Terminvereinbarung zu leiten
deinetrainerin.at
deinetrainerin.at
. Im Folgenden sind alle inhaltlichen Sektionen der Website mit ihren wichtigsten Punkten aufgeführt:
Header/Home (Startbereich): Im oberen Bereich der Seite werden in einem Slider oder Hero-Section mehrere zentrale Slogans und Botschaften angezeigt, zusammen mit einem Termin-Button. Diese Kernbotschaften lauten beispielsweise:
“Liebe geht bekanntlich durch den Magen, also schenke deinem Körper etwas Liebe mit einem Ernährungsplan von deiner Trainerin.”
deinetrainerin.at
 – Dieser Slogan betont die Bedeutung der Ernährung und verweist auf einen Ernährungsplan von “deiner Trainerin”.
“deine Trainerin unterstützt deinen Bewegungsapparat bei der Regeneration und zeigt dir die passenden Übungen”
deinetrainerin.at
 – Diese Botschaft fokussiert auf Bewegung/Training und Regeneration mit Hilfe der Trainerin.
“meistere den Weg zur Gesundheit mit deiner Trainerin und das Glück kommt von allein”
deinetrainerin.at
 – Dieser Slogan motiviert dazu, mit Hilfe der Trainerin einen gesunden Lebensweg zu schaffen, wobei das Glück dann von selbst folgt.
Jeder dieser Slides enthält vermutlich einen “Termin”-Button oder Link als Handlungsaufforderung (CTA)
deinetrainerin.at
, um direkt einen Termin zu vereinbaren. Visuell hinterlegt sind diese Botschaften wahrscheinlich mit passenden Bildern oder Hintergründen (z.B. ein Bild von Sabine in Aktion, siehe Bild jump.jpg). Das Farbschema im Header orientiert sich am Corporate Design (siehe Design unten, Logo-Farben etc.).
Über mich – Vorstellung der Trainerin: Diese Sektion stellt Sabine Taudes persönlich vor. Überschrieben ist sie mit “Das bin ich, deine Trainerin”
deinetrainerin.at
. Inhalte in diesem Abschnitt:
Ein persönlicher Motivationstext / Werdegang: Sabine erzählt von ihrem Hintergrund. Beispielsweise erwähnt sie den Tod ihrer Mutter im Alter von 39 Jahren (als Sabine 1999 mit dem Ernährungswissenschaft-Studium begann) und wie diese Erfahrung sie motiviert hat, sich mit gesunder Ernährung zu beschäftigen
deinetrainerin.at
deinetrainerin.at
. Sie schildert, dass sie überzeugt ist, Krankheiten mit der richtigen Ernährung und Bewegung vorbeugen zu können – eine Überzeugung, die sie schon mit 18 hatte und bis heute (als zweifache Mutter) trägt
deinetrainerin.at
. Dieser persönliche Hintergrund erklärt, warum sie nach Jahren in der Privatwirtschaft und einer Ausbildung zur Master Trainerin den Schritt in die Selbstständigkeit gemacht hat, um anderen Menschen zu helfen
deinetrainerin.at
.
Ein inspirierender Appell: “Daher freue ich mich, dich mit einem gesunden Lifestyle begeistern & anstecken zu können! Entdecke deine Experimentierfreudigkeit & glaub an dich!”
deinetrainerin.at
 – Diese Aussage unterstreicht ihre Freude daran, andere zu einem gesunden Lebensstil zu inspirieren.
Bild der Trainerin: In diesem Abschnitt ist ein Foto von Sabine eingebunden (Datei jump.jpg), das Sabine wahrscheinlich in sportlicher Pose zeigt
deinetrainerin.at
. Dieses Bild verleiht der Seite Persönlichkeit und sollte im neuen Design ebenfalls präsent sein (ggf. aktualisiert oder in moderner Formatierung).
Ausbildungen und Qualifikationen: Eine Liste ihrer beruflichen Ausbildungen wird aufgeführt, um Kompetenz zu untermauern. Dazu gehören:
Ernährungswissenschafterin (Magisterstudium Ernährungswissenschaften, Universität Wien)
deinetrainerin.at
Sporttrainerin (Personal Trainer A-Lizenz, Traineracademy Wien)
deinetrainerin.at
HTL-Lehrerin für Biologie, Medizin, Gesundheitswesen (pädagogisches Bachelorstudium, PH NÖ)
deinetrainerin.at

Diese Haupt-Ausbildungen sind in einer Bulletpoint-Liste genannt
deinetrainerin.at
. Zudem werden ihre Spezialisierungen und Fortbildungen als weitere Bulletpoints aufgeführt: Darmmikrobiom, Hormon- und Nährstoffberatung, Immunsystem, Ernährung und Psyche (inkl. Unterstützung bei Burnout/Depression), Motivation & Durchhaltevermögen, Essstörungen, Gendermedizin
deinetrainerin.at
deinetrainerin.at
. Zwei Anmerkungen sind dabei in Klammern erläutert: Bei Ernährung und Psyche etwa “Unterstützung bei Burnout, Depressionen und Antriebslosigkeit”【3†L99-L102}, sowie bei Gendermedizin der Hinweis “(Der weibliche Körper ist anders und muss ernst genommen werden)”【3†L105-L107】. Diese Auflistung zeigt die fachliche Bandbreite von Sabine Taudes und sollte im neuen System übernommen werden (ggf. als klar strukturierte Liste oder Akkordeon für Übersicht).
Schwerpunkte: Es folgt eine weitere Liste mit Sabines praktischen Schwerpunkten in der Beratung
deinetrainerin.at
. Diese betonen ihren holistischen Ansatz: “Ganzheitliche Ernährungsberatung mit Ursachenforschung statt nur Symptombehandlung”, verschiedene spezifische Themen: Verdauungsbeschwerden, Trägheit, schwaches Immunsystem, Entzündungen, Diabetes Typ II, Fettleber, Hashimoto, Ernährung in/ab der Hormonumstellung (Wechseljahre) und im Alter, sowie nochmals der Fokus auf Darmgesundheit (Zitat: “Geht es unseren Darmbakterien gut, geht es uns gut!”
deinetrainerin.at
). Diese Punkte umreißen die inhaltlichen Kernthemen ihrer Beratungspraxis und sollten in ähnlicher Form wiedergegeben werden (gegebenenfalls in einem “Was ich biete” Abschnitt).
Philosophie: Sabines Grundhaltung wird unter dem Schlagwort “Ganzheitlicher Ansatz” erläutert
deinetrainerin.at
. Sie stellt klar, dass Bewegung, Ernährung und Wohlbefinden die drei Säulen sind, die ins Gleichgewicht gebracht werden müssen. Ein Zitat aus diesem Abschnitt: “Sind die 3 im Einklang? Dann ist es perfekt! Sind sie es nicht, dann lass sie uns gemeinsam betrachten und an den richtigen Schrauben drehen.”
deinetrainerin.at
. Dieses Zitat beschreibt schön ihre Herangehensweise, kleine Veränderungen im Alltag mit großer Wirkung umzusetzen. Außerdem werden drei Motto-Sätze als Merksätze hervorgehoben: “Der Körper ist dein bestes Trainingsgerät, mehr brauchst du nicht.”, “Ernähre dich so, dass du dich gut fühlst.”, “Schenke dir und deinem Inneren Glücksmomente.”
deinetrainerin.at
. Diese Leitsätze unterstreichen die Philosophie und könnten im Design z.B. als grafisch hervorgehobene Zitate oder Icons umgesetzt werden. Abschließend appelliert sie: “Schätze dein ganzheitliches und individuelles Coaching, in diskreter und privater Atmosphäre.”
deinetrainerin.at
, was den Nutzen ihres Coachings für den Kunden betont.
Social Media & Projekte (Tätigkeitsbereiche): Nach der Philosophie folgt ein kurzer Hinweis darauf, dass Sabine in vielen Projekten involviert und vielseitig unterwegs ist. Der Text “folge mir auf Social Media, um dir selbst ein Bild zu machen und mich besser kennenzulernen” lädt die Besucher ein, sie in sozialen Netzwerken zu begleiten
deinetrainerin.at
. Direkt darunter befinden sich Icons/Bilder als Links zu Social-Media-Profilen. In der aktuellen Seite sind hier vermutlich zwei Icons eingebunden (möglicherweise für Facebook und Instagram), die verlinkt sind
deinetrainerin.at
. Im Quelltext werden diese als Bild 23 und 24 referenziert. (Tatsächlich scheint es hier ein kleiner Fehler zu geben – eventuell wurde fälschlicherweise das SVS-100er Logo erneut eingebunden. Im neuen Aufbau sollte hier klar korrekte Social-Media-Icons verwendet werden, z.B. das Facebook- und Instagram-Logo, jeweils verlinkt auf Sabines Profile.) Die neuen Seiten sollten also Links zu ihren Social-Media-Seiten enthalten. Sabine Taudes hat z.B. eine Facebook-Präsenz (facebook.com/deineTrainerin.at) und evtl. Instagram; diese Verknüpfungen dienen der Kundenbindung.
Call-to-Action Sektion (Kontaktmöglichkeiten): Unmittelbar nach den Social-Media-Icons folgen drei wichtige Handlungsaufforderungen, jeweils als Frage formuliert
deinetrainerin.at
deinetrainerin.at
:
“Hast du schon Fragen?” – Der Besucher wird ermutigt, bei Fragen eine Nachricht zu schreiben. Es gibt einen Hinweis “Hier geht’s zu meinem Kontaktformular”
deinetrainerin.at
. In der aktuellen Seite führt dies vermutlich zu einem Kontaktformular (möglicherweise in einem Popup oder am Seitenende). Im neuen System muss unbedingt ein benutzerfreundliches Kontaktformular implementiert werden, über das Interessenten allgemeine Anfragen stellen können.
“Du möchtest mich persönlich sprechen?” – Hier wird angeboten, die Telefonnummer zu hinterlassen, damit Sabine zurückrufen kann. Konkret steht dort “Hinterlasse mir deine Nummer und ich melde mich bei dir. Darf ich deine Nummer haben?”
deinetrainerin.at
. Das deutet auf ein einfaches Callback-Formular hin, wo der Nutzer seine Telefonnummer eintragen kann. In der neuen Seite sollte dies ebenfalls als Feld im Kontaktformular (oder separatem kurzen Formular) realisiert werden. Eventuell kann man das Kontaktformular so gestalten, dass man entweder eine Nachricht schreibt oder seine Telefonnummer für einen Rückruf angibt.
“Ich hab dich überzeugt?” – Wenn der Besucher bereits überzeugt ist und direkt einen Termin vereinbaren will, heißt es: “Hier kannst du einen Termin mit mir vereinbaren. Hast du Zeit für ein Gespräch?”
deinetrainerin.at
. Dies ist ein Aufruf zur Terminvereinbarung. Auf der aktuellen Seite ist “Hier kannst du einen Termin mit mir vereinbaren” als klickbarer Link “Termin” umgesetzt
deinetrainerin.at
. Später im Text (am Ende der Seite) wird diese Terminvereinbarung nochmals erwähnt mit “Hier kannst du dir gleich einen Termin für ein kostenloses und unverbindliches Erstgespräch reservieren: Termin”
deinetrainerin.at
. Es ist nicht ganz klar, ob dieser Link zu einem externen Buchungstool führt oder ein eingebettetes Kalender-Widget öffnet – im HTML ist kein Link ersichtlich, es könnte per Skript ein Kalender/Modal geladen werden. Für das neue System ist es wichtig, ein Terminbuchungssystem bereitzustellen, wo Nutzer online einen freien Termin für ein Erstgespräch buchen können. (Details dazu unter Funktionale Anforderungen weiter unten.)
Leistungen – “Das erwartet dich”: Dieser Abschnitt beschreibt die Angebote von Sabine in zwei großen Kategorien, jeweils mit detaillierten Unterpunkten: “Ernährung & Consulting” und “Bewegung & Wohlbefinden”
deinetrainerin.at
deinetrainerin.at
. Es beginnt mit der Überschrift “Das erwartet dich”
deinetrainerin.at
 als Einleitung. Danach folgen die beiden Kategorien:
Ernährung & Consulting:
Eine Unterüberschrift oder Teaser “Deine Trainerin zeigt dir, was Ernährung wirklich bedeutet und welche Lebensmittel am besten zu dir und deiner Gesundheit passen ...”
deinetrainerin.at
 dient als Einführung. Danach wird der Begriff “ERNÄHRUNG & CONSULTING” nochmals als Titel angezeigt (vermutlich gestalterisch hervorgehoben)
deinetrainerin.at
.
Teil 1 – Ernährung: Hier gibt es einen erklärenden Textabschnitt zur Ernährungsberatung. Er beginnt mit einem Zitat: “Die meisten Zivilisationskrankheiten werden durch falsches Ernährungsverhalten ausgelöst.” – eine bekannte Aussage, die viele schon gehört haben
deinetrainerin.at
. Sabine schildert, dass starkes Übergewicht und Diabetes in ihrer Familie sie dazu bewegt haben, Ernährungswissenschaften zu studieren
deinetrainerin.at
. Sie ist überzeugt, dass die richtige Lebensmittelauswahl und das richtige Essverhalten “zu einem langen und vor allem gesunden Leben primär beitragen”
deinetrainerin.at
. Anschließend folgt eine lange Liste von Fragen bzw. Themen, die im Ernährungscoaching behandelt werden können (jede Zeile beginnt mit einem Häkchen ✓):
Was esse ich wann?
deinetrainerin.at
Wie beuge ich Krankheiten vor?
Wie bin ich im Berufsalltag leistungsfähiger?
Wie optimiere ich mein Training durch eine Ernährungsumstellung?
Wie gehe ich mit Allergien und Unverträglichkeiten um?
Wie erkenne ich falsche Essgewohnheiten?
Wie nehme ich gesund ab und bin dabei satt?
Welche Vitamine und Mineralstoffe benötige ich?
Wie gestalte ich meinen Ernährungsplan?
Was sollte ich in meiner Ernährung vermeiden?
Wie lege ich schlechte Gewohnheiten ab?
Wie aktiviere/saniere ich meinen Darm?
Wie motiviere ich mich?
deinetrainerin.at
deinetrainerin.at

Diese Auflistung umfasst praktisch alle gängigen Fragen, die in einer Ernährungsberatung auftreten können. Im neuen System könnte man diese als Bulletpoint-Liste oder Akkordeon (ausklappbare FAQs) darstellen.
Am Ende dieses Ernährung-Unterabschnitts steht ein Fazit: “Nimm deine Gesundheit in die Hand! Ich begleite dich!”
deinetrainerin.at
. Dieser motivierende Abschlusssatz sollte ebenfalls übernommen werden (evtl. hervorgehoben).
Teil 2 – Consulting: Im Anschluss an Ernährung folgt ein kurzer Abschnitt über Lebensmittel-Consulting und Projektbegleitung. Sabine erwähnt ihre 16-jährige Erfahrung als Lead Auditorin in der Lebensmittelkontrolle & Herkunftssicherung und als Trainerin des Ernährungsvorsorge-Coachs am WIFI Wien
deinetrainerin.at
. Sie bietet an, diesen Erfahrungsschatz in Ernährungsberatung, Lebensmittelconsulting und Projektbegleitung weiterzugeben
deinetrainerin.at
. Auch hier gibt es ein Fazit: “Ich bin die perfekte Netzwerkpartnerin!”
deinetrainerin.at
 – was hervorhebt, dass sie als Partnerin in Projekten Mehrwert liefern kann.
“Weitere Informationen”: Nach Consulting steht ein Link oder Hinweis “Weitere Informationen”
deinetrainerin.at
. Das klingt, als gäbe es ggf. eine Unterseite oder zusätzliche Infos (eventuell ein Download oder externes Angebot). In der aktuellen Seite scheint dies aber nicht verlinkt zu sein (möglicherweise eine ausgegraute Option). Für den Relaunch sollte entschieden werden, ob zusätzliche Detailseiten für Ernährung & Consulting angeboten werden oder ob dieser Vermerk entfernt wird, falls es keine weiteren Infos gibt.
Bewegung & Wohlbefinden:
Auch hier startet es mit einem Teaser-Satz: “Deine Trainerin hilft dir die richtigen Übungen für deinen Körper zu finden ...”
deinetrainerin.at
, gefolgt vom hervorgehobenen Titel “BEWEGUNG & WOHLBEFINDEN”
deinetrainerin.at
.
Teil 1 – Bewegung (Training): Sabine fragt “Bist du bereit für dein Training?” und erläutert dann ihr Trainingskonzept
deinetrainerin.at
. Wichtig: Sie arbeitet nur mit dem eigenen Körpergewicht des Kunden (Bodyweight-Training) – “Mehr brauchst du nicht und es ist die schonendste Form zu trainieren”
deinetrainerin.at
. Sie erklärt, dass man damit Muskeln und Gelenke im vollen Bewegungsradius trainiert und “Stabilität, Mobilität und Flexibilität” verbessert
deinetrainerin.at
. Das formt nicht nur den Körper und baut Muskeln auf, sondern “erhält auch die Gesundheit”
deinetrainerin.at
. Als Fazit wird mitgegeben: “Freue dich auf das Wiedererlangen deiner Ganzkörper-Kraft & Beweglichkeit!”
deinetrainerin.at
 – ein motivierender Ausblick für den Trainierenden.
Teil 2 – Wohlbefinden (Entspannung): Hier liegt der Fokus auf Entspannung und Regeneration. Es werden in einer Bullet-Liste mehrere Stichworte genannt, was Wohlbefinden fördern kann: Auszeit, Freiraum, Erholung, Entspannung, Regeneration, Muskelentspannung, Atemtechnik
deinetrainerin.at
. Diese Begriffe lassen auf verschiedene Entspannungsmethoden schließen (z.B. progressive Muskelentspannung, Atemübungen etc.). Im Fazit steht: “Schenke dir eine persönliche Glückszeit mit der Entspannungsmethode, die dir gut tut!”
deinetrainerin.at
 – also die Aufforderung, sich gezielt Entspannung zu gönnen, in der Form, die einem liegt.
“Weitere Informationen”: Wie bei Ernährung & Consulting gibt es auch hier einen Vermerk “Weitere Informationen”
deinetrainerin.at
, der auf zusätzliche Details hindeutet. Im neuen System sollte analog entschieden werden, ob weitere Inhalte bereitgestellt werden oder dieser Link entfernt wird, um keine leeren Seiten zu haben.
Abschließender Hinweis/Termin: Nach den Wohlbefinden-Infos folgt abschließend noch ein zusammenfassender Hinweis: “Erfolg ist individuell, und daher ist es auch dein Coaching. Bei mir gibt es keinen Plan, der von Kunde zu Kunde gereicht wird. Nach einer umfassenden Anamnese und Zieldefinition arbeiten wir an deiner maßgeschneiderten Lösung.”
deinetrainerin.at
. Das betont die individuelle Betreuung. Direkt anschließend wird erneut zur Terminbuchung aufgefordert: “Hier kannst du dir gleich einen Termin für ein kostenloses und unverbindliches Erstgespräch reservieren:” gefolgt von einem “Termin”-Link/Button
deinetrainerin.at
. Dies ist praktisch der Abschluss der Leistungsbeschreibung mit klarer Aufforderung zum Handeln (CTA). Im neuen System sollte dieser Part prominent platziert und technisch durch ein Buchungstool unterstützt werden (siehe Terminvergabesystem unten).
Kontakt & Anfahrt: Im Footer bzw. als eigenes Overlay sind die Kontaktinformationen und Anfahrtsdaten angegeben
deinetrainerin.at
. Dazu zählen:
Name und Anschrift: Mag. Sabine Taudes, Schwemmäckergasse 16, 2202 Enzersfeld
deinetrainerin.at
. Das ist die Geschäftsadresse (vermutlich der Ort, wo sie Beratungen durchführt). Im neuen System sollte diese Adresse sichtbar sein und idealerweise mit einer Karte verknüpft werden. Aktuell scheint auf der Seite ein Google Maps Element eingebunden gewesen zu sein (im Datenschutztext wird Google Maps erwähnt), welches evtl. per Klick auf “Anfahrt” angezeigt wird. Im Quelltext tauchen zwei “Schließen”-Buttons auf
deinetrainerin.at
, was nahelegt, dass Kontakt & Anfahrt als Popup oder modale Box dargestellt wurden, die man schließen kann. Vermutlich war ein Kartenausschnitt vorhanden. Für die Neuimplementation wäre es sinnvoll, eine Google Maps Einbettung oder statische Karte der Adresse bereitzustellen – aber Achtung: DSGVO-Konformität beachten (evtl. erst nach Zustimmung laden oder statisches Kartenbild mit Link).
Telefon: +43 664 8487999
deinetrainerin.at
 (Mobile Nummer). Diese sollte anklickbar sein (tel:-Link) für mobile Nutzer.
E-Mail: Sabine@deinetrainerin.at
deinetrainerin.at
. Auch diese sollte per mailto:-Link klickbar sein.
Kontaktformular: In der alten Seite war ein Kontaktformular vorgesehen (siehe oben), evtl. als eigenes Popup. Im neuen System kann die Kontaktmöglichkeit direkt auf einer Kontakt-Seite oder im Footer integriert werden. Wichtig ist, dass Nachrichten verschickt werden können (z.B. via Server-Mail oder an eine definierte E-Mail-Adresse).
SVS-Partnerhinweis: In der aktuellen Seite ist ein Bild mit der Bezeichnung 100er.png eingebunden
deinetrainerin.at
. Dies ist das Logo des SVS Gesundheitshunderter-Programms. Sabine ist offenbar Partnerin dieses Programms (die SVS ist die österreichische Sozialversicherung für Selbständige und Bauern, die im Rahmen des “Gesundheitshunderter” Präventionsprogramme fördert). Dieses Logo sollte im neuen Design ebenfalls platziert werden (z.B. im Footer oder Partner-Sektion), da es für Besucher ein Qualitätsmerkmal sein kann.
Sitemap (im Footer): Im Footer wird nochmals das Menü als Sitemap angezeigt (Home, Leistungen, Über mich, Anfahrt)
deinetrainerin.at
. Im neuen Aufbau kann man im Footer eine einfache Navigation oder Sitemap vorsehen. Dies unterstützt auch SEO (interne Verlinkung).
Impressum & Datenschutz: Die Seite verfügt über einen Klickbereich für “Impressum & Datenschutz”
deinetrainerin.at
. Beim Klick darauf wird wahrscheinlich ein weiteres Overlay geöffnet, welches das Impressum und die Datenschutzerklärung anzeigt (auch hier sieht man einen “Schließen”-Button im Quelltext
deinetrainerin.at
). Inhalte:
Impressum: Angaben zum Website-Betreiber (Sabine Taudes) und rechtliche Informationen:
Verantwortlich für den Inhalt: Mag. Sabine Taudes, Schwemmäckergasse 16, 2202 Enzersfeld
deinetrainerin.at
 (Adresse wie oben).
Kontakt: Tel. und E-Mail (wie oben)
deinetrainerin.at
.
Gewerbeberechtigungen: Reglementiertes Gewerbe: Lebens- und Sozialberatung, eingeschränkt auf Ernährungsberatung sowie Freies Gewerbe: Erstellen von Trainingskonzepten für gesundheitsbewusste Personen (Fitnesstrainer)
deinetrainerin.at
. Diese Angaben entsprechen den in Österreich vorgeschriebenen Informationen über die Gewerbebasis ihrer Tätigkeit.
Im neuen System muss ein Impressum (deutschsprachig, evtl. auch englische Übersetzung auf der EN-Seite) vorhanden sein, das diese Daten enthält.
Datenschutzerklärung: Eine ausführliche Datenschutzerklärung nach DSGVO ist ebenfalls vorhanden
deinetrainerin.at
. Diese wurde offenbar am 13.07.2021 erstellt (eine gängige Praxis ist die Verwendung eines Generators, z.B. von AdSimple – darauf deutet der Verweis im Text hin)
deinetrainerin.at
. Wichtige Punkte aus der Datenschutz-Seite:
Hinweis auf DSGVO und dass alle verwendeten Begriffe geschlechtsneutral zu verstehen sind
deinetrainerin.at
.
Es wird versucht, Datenschutz verständlich und transparent zu erklären (die Erklärung ist recht ausführlich und enthält viele allgemeine Passagen, z.B. zu Cookies, Drittanbietern etc.
deinetrainerin.at
).
Cookie-Banner: Es wird AdSimple Cookie Manager bzw. Cookiebot erwähnt
deinetrainerin.at
, was darauf schließen lässt, dass auf der alten Seite ein Cookie-Consent-Banner im Einsatz ist (zur Verwaltung von Cookies und Skripten). Für die Neuentwicklung muss ein Cookie Consent Mechanismus berücksichtigt werden, insbesondere wenn externe Dienste (Google Maps, evtl. Google Analytics, YouTube o.ä.) eingebunden werden. Es gibt kostenlose Lösungen (z.B. Cookiebot hat einen Gratis-Tarif für kleine Websites, oder man nutzt einen Open-Source-Consent-Banner).
Google Fonts: Die Datenschutz erklärt den Einsatz von Google Webfonts
deinetrainerin.at
. Vermutlich nutzt die aktuelle Seite Google Fonts für die Schriftarten. DSGVO-technisch könnte man in der neuen Seite überlegen, die Fonts lokal zu hosten, um Abfragen bei Google zu vermeiden, oder bei Nutzung weiterhin auf die Datenschutzerklärung verweisen.
Google Maps: Es gibt einen Abschnitt zur Google Maps Datenschutzerklärung
deinetrainerin.at
. Das bestätigt, dass eine Google Maps Karte (für die Anfahrt) integriert ist. Die neue Seite sollte hierauf achten – entweder Google Maps DSGVO-konform einbinden (z.B. 2-Klick-Lösung oder statisches Bild mit freiwilligem Laden) und entsprechend informieren, oder eine alternative Open-Source-Karte (OpenStreetMap) verwenden, um datenschutzfreundlicher zu sein.
Keine explizite Google Analytics Erwähnung wurde in den sichtbaren Ausschnitten gefunden, was nahelegt, dass kein Analytics oder Tracking (außer ggf. Cookiebot Statistik) eingebunden war. Falls im neuen Projekt Webanalyse gewünscht ist, sollte eine datenschutzkonforme Lösung (z.B. eine selbst gehostete Matomo-Instanz oder wenigstens IP-anonymisiertes GA4) gewählt und in die Datenschutzerklärung aufgenommen werden.
Für die neue Website sollte die Datenschutzerklärung auf aktuellem Stand gehalten werden. Es kann sinnvoll sein, die bestehende Erklärung (die sehr umfangreich generisch ist) abzuspecken oder mit dem gleichen Generator neu zu erstellen (mit Stand 2025). In jedem Fall sind Impressum und Datenschutz gesetzliche Pflichtseiten, die implementiert werden müssen (zweisprachig, jeweils in Deutsch und Englisch, mit leicht auffindbarem Link auf jeder Seite, z.B. im Footer).
Zusammenfassung Inhalte: Die oben genannten Punkte decken sämtliche Inhalte der aktuellen Website ab. Damit hat der Entwickler eine vollständige Übersicht, welche Textbausteine, Bilder und Angebote in der neuen Seite berücksichtigt werden müssen. Im nächsten Schritt betrachten wir die Designvorgaben (Styling) und identifizieren die Funktionen, die für die Neuimplementation benötigt werden.
Design und Styling der aktuellen Seite
Die bestehende Website hat ein klares, freundliches Design mit Fokus auf Lesbarkeit und persönlicher Note. Hier die wichtigsten Design-Elemente und wie sie im neuen Projekt berücksichtigt werden sollten:
Logo & Farbgebung: Das Logo “deineTrainerin.at” besteht aus Schriftzug und ggf. einer grafischen Markierung. Im vorliegenden Logo sind zwei Farben erkennbar: Grau (für “deine”) und ein dunkler Rot-/Magenta-Ton (für “Trainerin.at”). Diese Farben ziehen sich vermutlich durch das gesamte Design. Erwartungsgemäß ist der Rotton als Akzentfarbe für Überschriften, Hervorhebungen oder Buttons verwendet, während neutrale Töne (Grau/Schwarz/Weiß) für Hintergründe und Text eingesetzt werden. Im neuen Design sollte das Corporate Design beibehalten werden:
Haupt-Akzentfarbe: Dunkles Pink/Magenta oder Weinrot, wie im Logo (dies könnte z.B. HEX #a50e63 sein – genaue Farbcodes sollten vom vorhandenen Logo/CSS entnommen werden). Diese Farbe kann für Buttons (z.B. Termin-Button), Links, Icons oder Hover-Effekte dienen.
Sekundärfarbe/Neutral: Grau bzw. Anthrazit für Textelemente wie “deine” im Logo. Vermutlich ist Fließtext in dunkelgrauer oder schwarzer Schrift auf weißem Hintergrund gehalten, um gute Lesbarkeit zu gewährleisten.
Hintergrund: Wahrscheinlich weiß oder sehr hell, um einen cleanen Look zu erzeugen.
Im neuen Stylesheet sollten diese Farben definiert sein und konsequent genutzt werden (Primärfarbe für CTA-Elemente, Sekundärfarben für Hintergründe, evtl. ein hellerer Grauton für Footer).
Typography (Schriftarten): Der genaue Font der aktuellen Seite ist nicht aus dem Text ersichtlich, aber da Google Fonts erwähnt werden, nutzt die Seite wahrscheinlich eine oder zwei Webfonts. Möglich wären z.B. “Open Sans”, “Roboto”, “Lato” o.ä., da diese häufig für klare Webseiten genutzt werden. Überschriften könnten evtl. in einer etwas verspielteren Schrift sein, aber vermutlich ist alles in moderner Grotesk/Sans-Serif gesetzt für gute Lesbarkeit. Für das Re-Design sollte man entweder dieselbe Schrift verwenden (aus dem bestehenden CSS ableiten) oder einen ähnlichen freien Font von Google Fonts lokal hosten. Wichtig: Für DSGVO ist es besser, Fonts selbst zu hosten.
Schriftgrößen: Der aktuelle Fließtext scheint in normaler Größe (um 16px) zu sein, Überschriften in gestaffelten Größen. Zitate/Mottos könnten kursiv oder größer dargestellt sein. In der neuen Umsetzung ist auf Responsive Typography zu achten (auf mobilen Geräten genügend große Schrift etc.).
Layout & Strukturelemente: Die bestehende Seite ist wahrscheinlich responsive (mobilfähig) und verwendet ein einspaltiges Layout mit Abschnitten. Einige Design-Merkmale:
Header/Slider: Vermutlich ein großflächiger Bereich mit Hintergrundbild oder Farbe, darin die Slogans zentriert und ein prominenter Button “Termin” (vielleicht farblich hervorgehoben, z.B. in Magenta mit weißer Schrift). Im neuen Design sollte ein solcher Hero-Bereich wieder umgesetzt werden. Man kann hier eventuell ein Bild-Slider integrieren mit 2-3 Bildern (z.B. Sabine beim Training, gesundes Essen etc.), zusammen mit den genannten Sprüchen als Text-Layer. Alternativ könnte ein statisches hero-image mit überlagertem Text und CTA genutzt werden, um Komplexität zu reduzieren. Wichtig ist, dass der “Termin vereinbaren”-Button hier sofort sichtbar ist (Conversion-Optimierung).
Sektionen mit Überschriften: Die Sektionen (“Über mich”, “Das erwartet dich” etc.) verwenden klare Überschriften (H1/H2 etc.). Im Markdown-Export sehen wir z.B. # Das bin ich, deine Trainerin
deinetrainerin.at
 als Haupttitel und darunter mehrere ### Untertitel. Im Frontend könnten diese als auffällige Sektionstitel gestaltet sein (z.B. mittig mit Linie, oder links in der Seitenfarbe). Konsistente Verwendung von Heading-Tags (H1 bis H4) ist wichtig – auch für SEO (eine H1 pro Seite, vermutlich “deineTrainerin.at” o.ä., dann H2 für Hauptsektionen).
Textblöcke: Fließtext ist wahrscheinlich linksbündig und relativ kurz gehalten (viele Absätze, keine endlosen Blöcke). Zitate/Mottos waren eventuell kursiv oder als Blockquote formatiert. Listen (Bulletpoints mit ✓ oder * sind verwendet)
deinetrainerin.at
. Im neuen CSS sollte es entsprechende Stile für Listen (z.B. passende Icons für die Häkchen) geben.
Bilder: Die Seite nutzt gezielt wenige, aber aussagekräftige Bilder: Das Profilbild/Actionbild von Sabine (jump.jpg) und der SVS-Partner Badge (100er.png). Möglicherweise gibt es im Bereich Leistungen auch thematische Icons oder kleine Grafiken, aber das geht aus dem Quelltext nicht hervor. Es scheint keine Galerie oder Ähnliches zu geben. Im Re-Design könnte man überlegen, zusätzliche Bilder einzubinden, z.B. ein Symbolbild für Ernährung (Obst/Gemüse), eines für Training (Person in Bewegung) und eines für Wohlbefinden (Entspannung) – sofern passende, rechtefreie Bilder vorhanden sind. Diese würden die Abschnitte auflockern. Allerdings müssen Bilder nicht zwingend sein; der jetzige Text ist durchaus ausführlich und selbsterklärend. Wichtig: Alle Bilder sollen mit Alt-Tags versehen werden (für SEO und Barrierefreiheit).
Icons und Grafiken: Social Media Icons sind einzubauen (Facebook/Instagram). Evtl. wurden in der alten Seite FontAwesome oder ähnliche Icon-Fonts verwendet. Da nur wenige Icons nötig sind, kann man auch PNG/SVG verwenden (Facebook/Instagram Logo als SVG, Telefonhörer/Briefumschlag Icons neben Kontaktangaben etc.). Alle benötigten Icons sollten kostenlos und lizenzfrei sein.
Farbliche Akzente: Vermutlich sind Buttons (z.B. Termin, Kontakt absenden) in der Akzentfarbe gestaltet. Links könnten ebenfalls in der Akzentfarbe oder dezent (z.B. grau) mit Hover-Effekt sein. Der neue Styleguide sollte definieren: Button-Styles (Farbe, abgerundete Ecken ja/nein, Hover-Farben), Link-Styles, Formularfeld-Styles (vielleicht Rahmen in Akzentfarbe beim Fokus).
Formulare: In der alten Seite waren Formulare möglicherweise per Plugin eingebunden. Im neuen System, wenn Eigenentwicklung, sollte auf konsistente Gestaltung geachtet werden (Labels, Eingabefelder, Buttons groß genug). Farblich können Fehlermeldungen in Rot, Bestätigung in Grün etc. passend zum Theme gestaltet werden.
Footer/Popups: Der Footer war minimalistisch (nur Sitemap und Impressum/Datenschutz). Das Impressum war in einem Pop-up. Für die neue Seite kann man entweder Pop-ups/Modals für diese Rechtstexte machen (dann “Schließen”-Button wie gehabt) oder eine eigene Seite dafür. Modals sind userfreundlich, aber SEO-technisch eigene Seiten (die indexierbar sind) wären vorteilhaft. Man könnte z.B. Impressum und Datenschutz als separate HTML-Seiten unter /impressum und /datenschutz ablegen und trotzdem via Link/Modal anzeigen. Design dafür: schlicht, kleinerer Text, evtl. Scrollbox.
Responsive Design: Die neue Seite muss auf Mobilgeräten gut funktionieren. Die aktuelle Seite v2 ist vermutlich responsive (dank der Verwendung von gängigen Webstandards). Der Entwickler sollte beim Neuaufbau auf Mobile-First achten: Menü als Burger-Menü, Sektionen untereinander stapeln, Schrift etwas größer, Slider an Handy evtl. als einfacher Banner mit text, etc. Auch die Terminbuchung muss mobil nutzbar sein. Die zweisprachige Umschaltung (DE/EN) sollte ebenfalls mobil erreichbar sein (z.B. als Dropdown oder Flaggen-Symbol im Menü).
Zusammengefasst soll das neue Design die aktuelle Ästhetik und Markenidentität beibehalten, aber technisch modern umgesetzt sein (aktuelles HTML5/CSS3, ggf. CSS-Framework wie Bootstrap 5 oder Tailwind, sofern gewünscht, aber nur wenn es kostenlos ist und keinen Ballast bringt). Wichtig ist eine klare, strukturierte Gestaltung, die Professionalität und Vertrauen ausstrahlt, passend zum Thema Gesundheitsberatung.
Funktionale Anforderungen (Features der neuen Website)
Neben der inhaltlichen Übernahme gibt es diverse Funktionen, die entweder bereits in der alten Seite angelegt sind oder für das neue System gefordert werden. Hier eine Auflistung aller benötigten Funktionen und Interaktionen:
Mehrsprachigkeit (Deutsch/Englisch): Die neue Website soll zweisprachig sein. Das bedeutet: Alle oben gelisteten Inhalte müssen auch auf Englisch verfügbar sein. Die Übersetzung muss bereitgestellt oder erstellt werden (falls noch nicht vorhanden). Technisch muss es eine einfache Möglichkeit für den Nutzer geben, zwischen DE und EN zu wechseln – z.B. ein Sprachumschalter im Menü (Flaggen oder Kürzel “DE | EN”). Jede Inhaltsseite sollte in beiden Sprachen vorliegen (z.B. /de/ueber-mich und /en/about-me oder via Query-Parameter/Hash je nach Umsetzung). Wichtig: Auch statische Texte wie “Kontaktformular absenden”, “Termin vereinbaren” etc. müssen übersetzbar sein. SEO-seitig sollten die Sprachen korrekt verlinkt sein (hreflang-Attribut verwenden).
Kontaktformular: Ein zentrales Kontaktformular muss implementiert werden, damit Nutzer Sabine bequem Nachrichten schicken können. Es sollte mindestens folgende Felder haben: Name, E-Mail-Adresse, Nachricht; optional Telefonnummer (dieses Feld kann für den Rückruf genutzt werden). Möglicherweise kann man die Rückruf-Anfrage und die normale Nachricht in einem Formular kombinieren, z.B. mittels Ankreuzfeld “Bitte um Rückruf” – dann gibt der Nutzer seine Nummer an. Das Formular muss Eingaben validieren (E-Mail-Format, erforderliche Felder) und eine Bestätigungsmeldung anzeigen. Bei Absenden soll entweder: a) eine E-Mail an Sabine@deinetrainerin.at generiert werden mit den Formulardaten, und/oder b) die Anfrage in einer Datenbank gespeichert werden, damit sie im Backend einsehbar ist. Da wir ein eigenes Backend planen, kann man die Nachrichten auch dort verwalten. Der Versand sollte über einen SMTP-Server oder eine Server-seitige Mailfunktion erfolgen. Wichtig: DSGVO-Hinweis im Formular (z.B. “Mit dem Absenden erklärst du dich mit der Verarbeitung deiner Daten einverstanden bla bla…” und Link zur Datenschutzerklärung). Ein Captcha oder Spam-Schutz (z.B. Honeypot) ist ratsam, um Spam-Einträge zu vermeiden.
Terminvereinbarungs-System: Dies ist eine Kernfunktion, da Sabine Termine für Erstgespräche online anbieten möchte. Es gibt mehrere Möglichkeiten, dies umzusetzen, unter der Bedingung 100% kostenfrei:
Einfachste Variante: Termin-Anfrage via Formular – Man könnte ein Formular bereitstellen, in dem der Kunde Wunschtermin(e) angibt, und Sabine bestätigt diese manuell per Mail/Telefon. Das wäre unkompliziert (keine Kalenderintegration), aber weniger automatisiert.
Bessere Variante: Online-Terminbuchung mit Kalender – Hier kann Sabine im Backend freie Zeiten verwalten, und Kunden buchen verbindlich. Open-Source-Bibliotheken können helfen: z.B. FullCalendar (JS-Bibliothek) für die Frontend-Darstellung eines Kalenders【Quelle】, kombiniert mit einem eigenen Backend, das Termine als Datensätze speichert. Es gibt auch freie PHP/JS-Lösungen, die man adaptieren kann (z.B. “Easy!Appointments” ist ein Open-Source-Terminbuchungssystem, oder “Booked Scheduler”). Wenn ein Eigenbau bevorzugt wird: Im Backend eine Möglichkeit schaffen, Zeitfenster als verfügbar zu markieren; im Frontend kann der Nutzer einen Slot wählen und seine Kontaktdaten angeben; das System blockiert dann den Slot und schickt Bestätigungen. Dies ist aufwändiger, aber machbar.
Externe Services einbinden: Es existieren kostenlose Terminplaner wie z.B. Calendly (Basic-Version kostenlos) – hier könnte man einen Calendly-Link einbinden oder per iframe integrieren. Vorteil: schnelle Lösung; Nachteil: externe Abhängigkeit (nicht In-House), Daten liegen bei Drittanbieter, englische UI (nicht optimal für deutsche Klienten). Ähnliches gilt für andere SaaS. Aufgrund der Vorgabe “eigene Entwicklung, eigener Server” wäre ein self-hosted Ansatz konsequenter.
Für den MVP könnte man auch mit einer simplen Lösung starten (Termin-Anfrageformular mit Wunschtermin), und später auf einen voll integrierten Kalender erweitern. Wichtig ist, wie Termine bestätigt werden: vermutlich manuell durch Sabine. Also ggf. eher Buchungsanfrage statt Echtzeit-Buchung. In jedem Fall muss der “Termin vereinbaren” Button den Nutzer nicht ins Leere führen. Im aktuellen Stand scheint der “Termin” Link evtl. auf denselben Kontaktbereich zu springen. Besser ist eine dedizierte “Termin buchen” Seite: dort Erklärung “Buchen Sie Ihr kostenloses Erstgespräch”, dann Kalender oder Formular. In der deutschen Version auf Deutsch, englische Seite analog auf Englisch. Außerdem sollte das System automatische Bestätigungs-E-Mails versenden können (an den Kunden und CC an Sabine) mit den Termindetails, sofern möglich. Das erhöht die Professionalität.
Content-Management-System (CMS): Da verlangt wird, dass die Lösung “einfach zu bedienen” ist, muss die Betreiberin (Sabine oder ihr Team) die Inhalte ohne Programmierkenntnisse ändern können. Dafür ist ein Backend mit CMS-Funktionalität nötig. Optionen:
Eigenentwicklung eines einfachen CMS: Dies könnte z.B. auf einem Framework basieren (siehe Technologiewahl unten), wo man für jede inhaltliche Sektion Eingabemasken erstellt. Zum Beispiel: ein Modul “Über mich” mit Feldern für Überschrift, Fließtext, Listenpunkte etc. – oder man verwaltet die Inhalte als Seiten/Beiträge in einer DB. Eigenentwicklung gibt volle Kontrolle, ist aber aufwändig.
Open-Source CMS nutzen: z.B. WordPress (GPL-lizenziert, kostenfrei). WordPress ist sehr weit verbreitet, bietet mit Plugins alles Nötige (Mehrsprachigkeit via Plugin wie Polylang, Kontaktformular via Plugin wie ContactForm7, ggf. Booking via Plugin). Vorteil: schnelle Einrichtung, bekannte Admin-Oberfläche. Nachteil: Wartung (Updates), potenzieller Overkill für so eine spezifische Seite, und nicht “Eigenentwicklung” (aber dafür kostenlos). Andere CMS wie Joomla, Drupal wären auch möglich, aber WP ist am einsteigerfreundlichsten.
Headless CMS + Custom Frontend: Tools wie Strapi oder Directus sind freie headless CMS, die ein Admin-Interface bieten, aber man baut das Frontend selbst (z.B. in Next.js oder Laravel). Vorteil: maßgeschneidertes Frontend, Admin ist vorhanden. Nachteil: Hosting- und Setup-Aufwand, Einarbeitung.
Static Site Generators + Netlify CMS: Da die Inhalte nicht täglich ändern, könnte man eine statische Seite in Betracht ziehen mit einem Editor. Aber Terminbuchung und Formulare sprechen eher für eine dynamische Lösung.
Angesichts der Anforderungen ist WordPress mit Custom Theme eine valide Option: Es erfüllt kostenlos die Anforderungen, ist auf eigenem Server installierbar, hat etablierte Plugins für alle Funktionen (Mehrsprachigkeit, Booking, SEO). Allerdings war in der Anfrage betont “lieber Eigenentwicklung” – daher sollten wir auch einen Plan skizzieren, wie man ein Custom-Backend realisieren würde. In jedem Fall muss das Endergebnis sein, dass Sabine selbst neue Texte/Bilder einpflegen kann: Sei es via WP-Admin oder via einem simplen Admin-Panel wir erstellen. Entscheidende Inhalte, die editierbar sein sollten: Texte der Seite (About, Philosophy, FAQs etc.), Listen (Schwerpunkte, Ausbildungen – evtl. auch im Admin pflegbar oder als Code?), evtl. Termin-Slots (für Buchungssystem), und Blogartikel falls mal welche kommen (aktuell hat sie keinen Blog, aber man könnte eine News-Sektion einplanen). Nicht zu vergessen: Bilingualer Content im CMS. Falls Eigenbau, muss die Datenbank die Inhalte pro Sprache speichern (z.B. separate fields or tables for English). Wenn WordPress, ein Plugin regelt das.
SEO-Optimierung: Ein sehr gutes SEO-Rating ist gewünscht. Dafür müssen wir sowohl technische SEO als auch Inhalt/Keyword-SEO berücksichtigen:
Sauberes HTML mit korrekter Semantik: Überschriften-Hierarchie H1..H3 wie oben erwähnt, Verwendung von meta-Tags (sprechende Page Titles, Meta Descriptions für jede Seite in DE und EN), Alt-Texte für Bilder, strukturierte Daten wo sinnvoll (LocalBusiness schema für die Adresse, Person schema für Sabine als Personal Trainerin, etc.).
Ladezeit optimieren: Kompakte Ressourcengrößen (Bilder optimieren, ggf. lazy loading, CSS/JS minimieren). Evtl. CDN nutzen für Assets (wenn kostenlos, Cloudflare o.ä.). Kein unnötiger Ballast von Libraries (deshalb genau schauen, ob z.B. jQuery nötig ist oder ob man ohne auskommt).
Mobile Friendly: Google bewertet Mobile-Friendliness hoch – also responsive, Touch-Optimierungen etc.
SEO-freundliche URL-Struktur: Sprechende URLs z.B. /leistungen/ernaehrung statt page?id=12. Bei Mehrsprachigkeit: konsistente Strukturen, z.B. domain.at/de/... und /en/... oder separate domains (.com).
Content-SEO: Die Texte sind schon reich an relevanten Keywords (Ernährungsberatung, Bewegungstraining, Darmgesundheit, etc.). Man könnte im neuen Text geringfügig Optimierungen machen, z.B. wichtige Keywords in Überschriften bringen, die Meta Description manuell setzen (“Ganzheitliche Ernährungsberatung und Personal Training in [Region] – Mag. Sabine Taudes hilft Ihnen ...”). Auch der Seitentitel (<title>) sollte das Angebot widerspiegeln (aktuell evtl. einfach der Domainname).
Integrationen: Falls gewünscht, könnte man Google Analytics (oder Matomo) einbauen, was SEO selbst nicht direkt beeinflusst, aber Monitoring erlaubt.
Sitemap und Robots: Generierung einer sitemap.xml, robots.txt erlauben, und die Seite bei Google Search Console anmelden. Da WordPress solche Dinge automatisch/über Plugins kann, ein weiterer Pluspunkt für WP; bei Custom muss man dran denken.
Backlinks/Social: Die Integration der Social Media und ggf. Einbindung eines Facebook-Pixel oder Open Graph Tags für Sharings könnte relevant sein, aber nur wenn geplant.
Insgesamt muss SEO von Anfang an mitgedacht werden. Das neue System sollte Tools oder at least guidelines bieten, um Meta-Daten einzupflegen (bei WP via Yoast SEO Plugin z.B., bei custom via Admin-Felder).
Hosting auf eigenem Server: Das Projekt soll auf einem eigenen Server laufen, was bedeutet wir haben volle Kontrolle über die Umgebung. Vermutlich wird ein Linux-basiertes Webserver (Apache oder Nginx) mit PHP oder Node etc. verwendet, abhängig von der Technologie. Die wichtigste Implikation: Wir sind nicht auf SaaS oder proprietäre Plattformen angewiesen. Alle verwendeten Komponenten müssen sich dort installieren lassen. Bei WordPress wäre das trivial (PHP/MySQL stack). Bei Eigenentwicklung ähnlich (Laravel => PHP, Node -> braucht Node runtime etc.). Der Entwickler muss auch an Sicherheit denken: eigene Server brauchen regelmäßige Updates, Absicherung gegen Angriffe (Firewall, SSL-Zertifikat – Let’s Encrypt kostenlos einsetzen, da SEO auch HTTPS voraussetzt). Das neue Projekt sollte natürlich via HTTPS laufen (aktuelles hat sicher bereits SSL).
Sonstige Funktionen/Überlegungen:
Analytics/Tracking: Wie erwähnt, optional Web Analytics. Falls gewünscht, integrieren (Open-Source falls möglich).
Newsletter: Nicht erwähnt in der alten Seite. Kein Hinweis auf Newsletter vorhanden, also wohl nicht erforderlich.
Blog/News: Ebenfalls nicht vorhanden aktuell. Wenn Sabine in Zukunft Artikel schreiben will (z.B. Gesundheitstipps), könnte man einen Blog-Bereich vorsehen. Da aber nicht explizit gefordert, ist es optional.
Zukunftssicherheit: Falls weitere Sprachen oder Funktionen dazukommen, die Architektur sollte erweiterbar sein.
Zugangsbeschränkungen: Unwahrscheinlich benötigt (keine Login-Bereiche angedeutet). Alles öffentlich.
Accessibility: Grundsätzlich sollten wir auf Barrierefreiheit achten (Kontraste, Alt-Texte, Keyboard-Navigation, etc.), das trägt auch zu SEO bei.
Kommunikation: Kontaktformular reicht vermutlich, kein Live-Chat gewünscht.
Legal Compliance: Impressum, Datenschutz sind da. Cookies Consent für externes embed (Google Maps etc.) muss umgesetzt werden.
Performance: Achieve good page speed scores (Google PageSpeed Insights). Minimierung und caching (enable gzip, browser cache headers). On own server, possibly set up caching (if WP, a caching plugin; if custom, use HTTP caching where appropriate).
Technische Vorgaben und Rahmenbedingungen
Basierend auf den Anforderungen der Auftraggeberin gelten folgende Technologie-Vorgaben:
100% kostenlose Tools & Bibliotheken: Es sollen keinerlei kostenpflichtigen Lizenzen eingesetzt werden. Alle gewählten Technologien müssen Open-Source oder free-tier sein. Beispiele: Programmiersprachen (PHP, JavaScript, Python etc. – alle kostenlos nutzbar), Frameworks (z.B. Laravel, Next.js, React, Vue – alle open source), CMS (WordPress – GPL free, Plugins müssen ebenfalls free sein falls eingesetzt), Datenbank (MySQL/MariaDB or PostgreSQL – alle frei), Webserver (Apache/Nginx – frei). Auch UI-Bibliotheken wie Bootstrap, Tailwind, FontAwesome (Free tier) sind erlaubt, solange kostenlos. Wichtig: Bei Verwendung von Bibliotheken sicherstellen, dass keine urheberrechtlich problematischen Inhalte eingebunden werden (z.B. keine gekauften Templates oder Google Maps API keys mit Kosten).
Eigenes Hosting / eigener Server: Keine Cloud-Lockins. Also kein Wix, Squarespace o.ä., kein Hosting auf WordPress.com, sondern selbst administrierter Server (oder zumindest ein gemieteter Webspace, rootserver etc.). Entwickler muss das System so bauen, dass es auf dem Server der Kundin läuft (vermutlich ein PHP-MySQL Webhoster ist vorhanden, Domain ja). Ggf. sind wir auch für die Einrichtung der Serverumgebung verantwortlich (LAMP/LEMP Stack).
Eigenentwicklung bevorzugt: Das heißt im Zweifel eher selber programmieren als fertige Services nutzen, um volle Kontrolle und Kostentransparenz zu haben. Beispiele: Kontaktformular lieber selbst schreiben statt z.B. ein Drittanbieter-Formservice; Terminplaner eher selbst oder open-source hosten statt z.B. Calendly; Mehrsprachigkeit lieber per Code/Struktur oder WP-Plugin Polylang (kostenlos) als teuren Dienst. Die Ausnahme ist, wenn die Eigenentwicklung den Rahmen sprengt, darf man 100% kostenlose Libraries nutzen. Also wir dürfen auf Open-Source-Komponenten zurückgreifen, aber möglichst solche, die man selbst hostet.
Sprache Deutsch/Englisch: Nicht nur die Website-Inhalte, sondern auch das Interface im Backend sollte möglichst zweisprachig oder zumindest für einen deutschsprachigen User verständlich sein. Wenn wir z.B. WordPress verwenden, gibt es deutsche Sprachfiles. Wenn wir ein eigenes Admin bauen, können wir die Labels zweisprachig oder auf Deutsch halten für Sabine.
Einfache Bedienbarkeit: In der Umsetzung bedeutet das z.B. für das Backend: intuitive Menüführung, WYSIWYG-Editor für Texte (falls WP, der Gutenberg Editor oder Classic Editor auf Deutsch), klare Felder für spezielle Inhalte (z.B. Liste der Ausbildungen als eigene Eingabemaske, damit keine HTML-Kenntnisse nötig). Für den Besucher bedeutet es: klare Navigation, klare Call-to-Action Buttons, keine überfordernden Spielereien. Also kein komplexes multi-step Bestellprozess oder so. Terminbuchung sollte so einfach wie möglich sein (wenig Klicks, klare Infos).
SEO-Optimierung: Bereits oben ausgeführt, aber hier als Vorgabe: Das technische Setup muss SEO fördern. Das bedeutet z.B. wenn WP: Installiere ein SEO-Plugin (Yoast SEO oder RankMath – kostenlos) und konfiguriere Meta-Daten. Wenn Custom: stelle sicher, dass jeder Seite ein eindeutiger <title> und <meta description> gegeben wird. Performance-Vorgaben: Core Web Vitals einhalten (LCP < 2.5s etc.), was auf gute Code-Optimierung hinausläuft.
Technische Lösungsansätze und Empfehlungen
Angesichts der obigen Anforderungen gibt es zwei Haupt-Wege für die Implementierung: A) Umsetzung mit einem bestehenden CMS (z.B. WordPress):
Dies ist vermutlich der schnellste und einfachste Weg, das Projekt umzusetzen, unter Einhaltung der Kostenfrei-Vorgabe. WordPress ist Open Source und hat eine große Community. Eine mögliche Vorgehensweise:
WordPress Grundinstallation auf dem Server einrichten (deutsche Version).
Ein geeignetes Theme wählen oder besser ein eigenes Child-Theme erstellen, um das Design nach Vorlage umzusetzen. Da das Design recht individuell ist (One-Page-Stil, spezifische Sektionen), könnte man auf ein Blanko-Theme (z.B. _s (Underscores) oder GeneratePress free) aufsetzen und eigene Templates für die Seite schreiben. Oder ein Page-Builder-Plugin (Elementor free) nutzen – allerdings muss man aufpassen, dass es keine Kosten verursacht und performance/SEO-Stimmen.
Mehrsprachigkeit: mit Plugin Polylang (kostenlos) oder WPML (nicht kostenlos, daher Polylang bevorzugen). Polylang erlaubt das Übersetzen von Seiten und liefert Sprachumschalter.
Kontaktformular: Plugin wie Contact Form 7 (frei) oder WPForms Lite. Darüber kann man einfach Formulare bauen.
Terminbuchung: Es gibt freie Plugins (z.B. Simply Schedule Appointments (free), Easy Appointments, Booking Calendar plugin). Diese müssten geprüft werden, ob sie die Anforderungen (kostenlos, DE Sprache, Anpassbarkeit) erfüllen. Einige bieten z.B. eine kostenlose Basis-Version (Buchung ohne Zahlung etc.), das könnte genügen. Vorteil: weniger Eigenaufwand, eventuell aber eingeschränkte Funktionsvielfalt.
SEO: Plugin Yoast SEO (free) hilft beim Meta-Daten pflegen, Generierung von Sitemap, etc.
Cookie Banner: z.B. Borlabs Cookie ist bekannt aber kostet, daher besser CookieYes oder Complianz (es gibt kostenlose Versionen) oder Cookiebot via WP plugin. AdSimple hat evtl. eigenes WP-Plugin, falls ihre Texte wiederverwendet werden sollen.
Performance: Mit Caching-Plugin (z.B. WP Super Cache oder W3TC, beide gratis) und evtl. Autoptimize (für Zusammenfassen von CSS/JS).
Backend Usability: WordPress Backend ist grundsätzlich einfach für Endnutzer. Wir können unnötige Menüpunkte ausblenden, die Sprache auf Deutsch einstellen. Sabine könnte so Änderungen vornehmen (Seite “Über mich” editieren wie Word-Dokument etc.).
Custom Post Types: Evtl. definieren für bestimmte Inhalte (z.B. ein CPT “Ausbildung” wenn man diese einzeln pflegen will). Oder man hält es simpel und macht eine “Über mich” Seite, wo alles drin steht mit Listen.
In Summe wäre WordPress eine solide Lösung, sofern “Eigenentwicklung” nicht streng als “von Grund auf coden” interpretiert wird. Es spart Zeit und viele Features sind abgedeckt. Die Kostenfreiheit bleibt gewahrt. Wichtig ist jedoch, WordPress sicher zu halten (Updates) und vor allem nicht mit unnötigen Plugins zu überladen (jedes Plugin könnte Perfomance kosten). B) Individuelle Entwicklung (z.B. mit PHP-Framework oder NodeJS):
Wenn maximale Kontrolle und maßgeschneiderte Lösung gewünscht ist, kann man natürlich ein eigenes kleines CMS bauen. Einige Möglichkeiten:
PHP mit Laravel (oder ein leichteres Microframework wie SlimPHP): Laravel ist kostenlos, hat viel out-of-the-box (User Authentication, Eloquent ORM etc.). Man könnte eine Admin-Oberfläche damit aufbauen. Es gibt Admin-Templates (z.B. AdminLTE – kostenlos) für das UI. In der DB würden dann Tabellen für Inhalte existieren (e.g. pages, translations, appointments, etc.). Vorteil: sehr flexibel, man programmiert nur was man braucht. Nachteil: dauert deutlich länger als WP und erfordert Wartung/Weiterentwicklung bei jedem inhaltlichen Änderungswunsch. Aber wenn ein dedizierter Developer das Projekt betreut, ist das machbar.
JavaScript/Node mit React/Vue: z.B. ein React-Frontend (Next.js) und ein Node backend (Express + a database). Or even a JAMstack approach with headless CMS. This is quite complex for what is essentially a company website. Might be overkill unless developer is more comfortable in JS than PHP. There are also frameworks like Strapi (Node headless CMS with admin UI) – one could use Strapi to define collections for each content type (pages, etc.), which provides an admin UI and API. The frontend could then be built in Next.js or even just pure React using those APIs. This yields a very modern stack and good performance (especially if pre-rendered). But complexity and hosting (Node on server, extra memory) must be considered. Also, multi-language in Strapi is possible but might require plugin (which I believe is free now).
Static site with Netlify CMS: Possibly not suitable due to dynamic features needed (forms, booking). Could combine static and dynamic parts, but too convoluted.
Wenn wir eine Eigenentwicklung wählen, sollten wir auf die Entwicklungszeit achten. Jedes Feature (Kontaktformular, Terminbuchung, Admin Editor) muss dann programmiert werden. Allerdings kann man freie Libraries nutzen:
z.B. PHPMailer für E-Mail-Versand (free),
FullCalendar JS für Kalender-UI (MIT license, free) – für Termin-Auswahl【Quelle】,
Bootstrap für CSS-Komponenten (Buttons, Grid) – frei. Oder Tailwind für a utility-first approach – frei.
TinyMCE or CKEditor (both have free versions) to integrate a rich text editor for editing content in admin, if needed.
Eine Zwischenlösung könnte auch sein: WordPress im Hintergrund als Headless CMS nutzen (nur Admin), und das Frontend als eigene Entwicklung (via WP REST API Daten holen). Aber das ist eher unnötig kompliziert hier. Empfehlung: Da die Zeit und Einfachheit meist entscheidend sind und alle Anforderungen mit WP erfüllbar sind, wäre WordPress eine gute Basis. Es sei denn, man möchte wirklich vollständige Unabhängigkeit von Drittsoftware – aber WordPress zählt ja als Open-Source, nicht als fremder Dienst. Zudem wird SEO mit WP sehr erleichtert durch vorhandene Plugins und eine großen Wissensbasis. Wenn aber z.B. Sicherheitsbedenken oder Performance-Bedenken gegenüber WP bestehen, könnte man mit Laravel was schlankes bauen. Ein Laravel-basiertes CMS könnte in Modulen so gebaut werden:
Models: e.g. Page, Appointment, perhaps a model for translations if needed.
Admin Controllers/Views: for login-protected content editing.
Use Laravel’s localization features for static strings and for content either store separate entries per lang or a JSON column for translations.
The site front could be simple controllers returning Blade templates.
Dies erfordert einen kompetenten Entwickler und einige Wochen Arbeit, aber man hat dann genau was man braucht, nicht mehr. Wartung ist allerdings aufwändiger als WP (wo vieles einfach updatebar ist).
Umsetzung: Schritte zur Neuerstellung (Agents Plan)
Um die komplette Neuimplementierung strukturiert anzugehen, empfiehlt sich ein Phasenplan. Nachfolgend ein mögliches Vorgehen in mehreren Schritten, das als Agents.md dienen kann – jeder Schritt kann einem Entwickler/Verantwortlichen (“Agent”) zugewiesen werden:
Projektsetup & Technologieentscheidung:
Entscheide dich für den Tech-Stack (z.B. WordPress vs. Laravel). Hole ggf. Zustimmung vom Auftraggeber für die Wahl. (Ergebnis: Entwicklungsumgebung steht fest, z.B. XAMPP/WAMP für PHP oder Node.js Setup.)
Richte ein Entwicklungsrepository ein (z.B. GitHub/GitLab) und initialisiere das Grundgerüst des Projekts. Falls WordPress: Entwicklungsinstallation lokal oder auf Staging-Server aufsetzen. Falls Laravel/Custom: Projekt generieren (laravel new) oder Node app initialisieren.
Stelle sicher, dass alle benötigten freien Libraries verfügbar sind (via Composer/npm etc.). Beispiel: bei Laravel – AdminLTE Template, PHPMailer; bei WP – benötigte Plugins herunterladen (Polylang, Contact Form 7, etc.).
Grundstruktur der Seiten erstellen:
Migrate/erstelle Seiten entsprechend der Site-Struktur: Home, Leistungen, Über mich, Kontakt, Impressum, Datenschutz (und englische Gegenstücke). In WordPress z.B. als Pages anlegen (DE und EN Versionen). In Laravel/Custom, erstelle entsprechende Controller und View-Dateien für diese Seiten mit Platzhaltern.
Implementiere die Navigation (Menü) mit den Punkten Home, Leistungen, Über mich, Kontakt/Anfahrt. In einer One-Page könnte das Menü scrollen; jedoch SEO-technisch besser evtl. als separate Seiten für Leistungen/Über mich. Du kannst auch hybrid vorgehen: eine Startseite, die vieles enthält, aber trotzdem Unterseiten bereitstellen. Entsprechend Menülinks definieren (und Sprachumschalter einplanen).
Binde das Logo ein (Header) und setze das Grundlayout (Header, Footer, Content-Bereich). In CSS die Farben aus dem Styleguide definieren.
Inhalte einpflegen (Deutsch):
Übertrage sämtliche Inhalte in deutscher Sprache in die neue Struktur. Orientiere dich an der obigen Inhaltsübersicht:
Startseite: Slogans + Termin-Button.
Über mich: Sabines Vorstellungstext, Zitate, Ausbildungen (Liste), Spezialisierungen (Liste), Schwerpunkte (Liste), Philosophie-Text und Motto-Zitate.
Leistungen: Texte zu “Ernährung & Consulting” (inkl. aller Bulletpoints & Fazits) und “Bewegung & Wohlbefinden” (inkl. Bulletpoints & Fazits), jeweils ggf. als eigene Untersektionen auf der Leistungen-Seite.
Kontakt: Adresse, Tel, E-Mail, evtl. ein einfaches Kontaktformular (Platzhalter).
Footer: SVS-100er Logo, ggf. kurze Info.
Impressum: Rechtstext einfügen (aus alter Seite kopieren und formatieren).
Datenschutz: kompletten Text von alter Seite übernehmen (an neue Domain/Datum anpassen).
Achte auf korrekte Formatierung (Überschriftenhierarchie laut Design, Listen als <ul>, Zitate kursiv oder als Blockquote etc.).
Füge Alt-Texte zu den Bildern hinzu (z.B. alt=“Sabine Taudes beim Sprung” für jump.jpg; alt=“SVS Gesundheitshunderter Logo” für 100er.png).
Überprüfe, dass nichts fehlt (geh die oben erstellte Liste Punkt für Punkt durch).
Englische Inhalte übersetzen/integrieren:
Besorge oder erstelle Übersetzungen aller Textinhalte auf Englisch. (Falls noch nicht vorhanden, muss dies mit Sabine geklärt werden. Automatische Übersetzung kann Basis sein, aber sollte lektoriert werden, gerade bei Fachbegriffen und Tonalität.)
Lege die englischen Seiten an (bei WP mit Polylang: übersetze jede Seite; bei Custom: z.B. JSON-Datei mit Texten oder separate fields).
Implementiere den Language Switcher im Frontend (z.B. Flaggen-Icons im Header oder ein Dropdown “DE/EN”). Teste, ob ein Wechsel wirklich zur entsprechenden übersetzten Seite führt.
Überprüfe auch statische Strings (Formular-Labels, Buttons wie “Termin vereinbaren” etc.) und übersetze sie (“Schedule Appointment” z.B.).
Passe Impressum/Datenschutz ins Englische an: Impressum kann kurz auf Englisch als “Legal Disclosure” oder so angegeben werden (in AT ist nur DE Pflicht, aber zwecks kompletter Bilingualität sollte man was anbieten, zumindest “The site is owned by Sabine Taudes…” etc.). Datenschutzerklärung auf Englisch ist umfangreich – evtl. gibt es vom Generator eine EN-Version; ansonsten wichtig zumindest die Kernpunkte auf Englisch bereitstellen oder darauf hinweisen, dass nur die deutsche Version rechtlich bindend ist.
Backend/CMS-Funktionalität ausarbeiten:
Richte das Admin-Panel für die Inhaltsverwaltung ein. Bei WordPress bedeutet das: Theme-Optionen prüfen (ggf. ACF (Advanced Custom Fields) free nutzen, um bestimmte Inhaltsbereiche besser editierbar zu machen, z.B. flexible content for those bullet lists). Bei Laravel: Baue Admin-Login (Auth), dann Admin-Seiten für Content. Evtl. simplest: eine WYSIWYG-Seite pro Inhalt (not great structure) oder eine kleine Struktur, je nachdem.
Schaffe Eingabemöglichkeiten für: Header-Slogans (könnte man hartcodieren, aber besser dynamisch – z.B. in WP Customizer drei Textfelder, oder in Admin DB Tabelle for slogans), Über-mich-Textbereiche und Listen (ggf. WYSIWYG for the main text, and structured for lists), Leistungen-Texte (kann auch WYSIWYG mit Listen), Kontaktinfos (einfache Felder in einem “Settings” Bereich, oder in WP via Customizer).
Testen im Backend: Simuliere, wie Sabine neue Inhalte ändern würde. Ist es verständlich? (Z.B. in WP könnte man es auch als einen einzelnen “OnePage” Beitrag pflegen, aber sauberer ist aufgeteilt.)
Achte darauf, dass mehrsprachige Inhalte auch im Backend klar getrennt/verbunden sind (Polylang verknüpft Posts, im eigenen muss man z.B. pro Feld eine englische Variante vorsehen).
Kontaktformular implementieren:
Frontend: Erstelle das Formular im Kontakt-Bereich mit HTML5-Formularfeldern (Name, Email, Nachricht, Telefon optional). Validierung mit JavaScript (z.B. Required-Felder markieren).
Backend: Implementiere die Formularverarbeitung. Bei WP: CF7 Plugin übernimmt Mailversand, einfach konfigurieren (Empfänger Sabine@..., Bestätigungstext personalisieren). Bei Custom: Endpunkt schreiben, der Daten entgegennimmt, validiert und per PHP-Mail oder SMTP sendet. Erfolg-/Fehler-Meldungen zurück ans Frontend (AJAX oder nach Absenden eine Danke-Seite).
DSGVO: Füge ein Checkbox-Feld “Datenschutzerklärung akzeptieren” hinzu, das angehakt werden muss (nicht vorausgefüllt). Ohne Haken kein Absenden (das ist zwar rechtlich umstritten ob nötig, aber zur Sicherheit kann man’s machen).
Teste den E-Mail-Versand (ggf. auf dem Server PHP Mail aktivieren oder SMTP Plugin). Test auf Deutsch und Englisch (Mails evtl. zweisprachig je nach Site-Formular).
Terminbuchungssystem umsetzen:
Variante je nach Entscheidung:
a) Wenn Plugin (WP): Installiere und konfiguriere das gewählte Booking-Plugin. Lege die verfügbaren Zeiten/Services an (z.B. Service “Kostenloses Erstgespräch – 30 Min”). Trage die Zeiten ein, an denen Sabine verfügbar ist (z.B. Mi 14-18 Uhr). Teste die Buchung aus Usersicht: Kalender->Slot->Formular->Bestätigung. Passe E-Mail-Templates an (an Kundin und Admin) ins Deutsche. Integriere das Buchungsformular auf der “Termin” Seite (Shortcode o.Ä.). Übersetze Plugin-Strings, falls englische Version benötigt (Polylang kompatibel oder via .po files).
b) Bei Eigenentwicklung: Starte mit einem simplen Ansatz:
Datenbank-Modell für Termine: Felder (Datum, Uhrzeit, Kunde Name, Kunde Email/Tel, Status [angefragt/bestätigt]).
Admin-Oberfläche: Möglichkeit für Sabine, verfügbare Zeit-Slots einzutragen (z.B. “22.07.2025 15:00-15:30 verfügbar”). Das kann auch hart programmiert sein (fixe Zeiten pro Woche), aber flexibler ist manuell eintragen.
Frontend: Zeige dem Nutzer entweder eine Liste der nächsten freien Termine oder einen Kalender (z.B. mit FullCalendar library). Der Nutzer wählt einen Termin, gibt seine Kontaktdaten an (Name, Email, Tel) -> klickt Buchen.
Backend-Handling: Termin-Eintrag in DB wird erstellt mit Status “angefragt” und den Kundendaten. E-Mail Benachrichtigungen an Sabine (zur Info) und an Kunde (als Eingangsbestätigung mit Hinweis “Wir melden uns zur Bestätigung”). Sabine würde dann im Admin den Status auf “bestätigt” setzen oder mit Kunde Kontakt aufnehmen falls neu terminieren. Optional könnte man es auch automatisiert sofort als bestätigt behandeln, aber da Sabine evtl. prüfen will, lieber manuell.
Evtl. zweite E-Mail an Kunde senden, wenn Sabine auf “bestätigen” klickt. Das ist noch Zusatz, kann in Phase 2 kommen.
UI/UX: Nach Buchen Formular eine Bestätigungsmeldung anzeigen “Danke, wir haben Ihre Terminanfrage erhalten.”
Speziell auf Mehrsprachigkeit achten: das Termin-Booking-UI muss ebenfalls auf EN umschalten (z.B. Buttons “Book appointment” etc.).
Zeitpuffer: Falls möglich, verhindern dass zwei Nutzer denselben Slot fast gleichzeitig buchen (Locking oder im DB unique).
Unabhängig von Variante, sorge dafür, dass der “Termin vereinbaren” Button/Link im Header und an allen CTA-Stellen auf die richtige Buchungsseite führt.
Teste den kompletten Ablauf.
Wenn keine Kalender-Integration gewünscht ist, könnte es auch simpler: “Bitte schlagen Sie uns einen Termin vor” Feld im normalen Kontaktformular. Aber besser ist die oben beschriebene konkrete Buchung für Professionalität.
Testing und Feinschliff:
Inhalt überprüfen: Vergleiche die neue Seite mit der alten (Inhalt vollständig? Rechtschreibung, Formatierung stimmen?).
Browser-Test: Teste in gängigen Browsern (Chrome, Firefox, Safari, Edge) sowie auf mobilen Geräten (Chrome Android, Safari iOS). Navigation, Layout, Formulare – alles sollte funktionieren.
Funktionstest: Schicke Testanfragen über das Kontaktformular. Buche Test-Termine. Prüfe, ob E-Mails ankommen (ggf. Spam-Ordner checken).
Mehrsprachigkeitstest: Klicke alle Seiten in DE und EN durch – stimmt der Inhalt, sind die Übersetzungen korrekt zugeordnet?
SEO-Check: Stelle Meta Title/Description sinnvoll ein (z.B. “DeineTrainerin – Ernährungsberatung & Personal Training in Enzersfeld/Nähe Wien” als Title der Startseite). Erstelle eine XML-Sitemap (WP Plugin oder custom script) und checke mit einem Validator. Robots.txt nicht vergessen (Standard: allow all, disallow wp-admin if WP).
Performance-Optimierung: Lade die Seite und analysiere die Geschwindigkeit. Komprimiere ggf. Bilder weiter, aktiviere Caching. Prüfe Google PageSpeed Insights und behebe etwaige kritische Punkte (falls z.B. Render-blocking JS, fehlende Width/Height Attribute bei Bildern etc.).
Security: Wenn eigen, teste grundlegende Security (keine SQL-Injections möglich – benutze Prepared Statements/ORM, form inputs sanitize; XSS-Schutz – output escape; bei WP, installiere Sicherheits-Plugin vllt oder zumindest ändere WP-Login-URL). Setze ein starkes Admin-Passwort.
Cookie/DSGVO-Test: Rufe Seite neu auf -> Cookie Consent Banner erscheint? Funktioniert die Blockierung (z.B. Google Maps erst nach Zustimmung laden)? Falls Cookiebot eingesetzt werden soll, integriere den Code und teste.
Impressum/Datenschutz-Verfügbarkeit: Stelle sicher, dass diese jederzeit z.B. im Footer verlinkt sind (auch auf Mobil).
Deployment auf Live-Server:
Richte den Server ein: Webspace mit Datenbank, PHP/Node etc. Installiere ein SSL-Zertifikat (Let’s Encrypt, via Hostingpanel oder Certbot).
Übertrage die Seite: Bei WP, migriere die Datenbank und Dateien auf den Live-Server (oder installiere frisch und importiere Inhalte). Bei Laravel, push code, run migrations, seeding default content, set .env configs.
Teste auf der Live-Domain nochmals alles (besonders E-Mail Versand, da oft Server Mail anders sein kann).
Aktiviere ggf. Caching/CDN final (falls gewünscht Cloudflare DNS for caching etc., optional).
Google Indexierung: reiche die neue Sitemap bei Google ein, damit die neue Seite schnell indexiert wird.
Alte URLs: Falls sich URL-Struktur geändert hat (z.B. vorher alles auf einer Page, jetzt mehrere), setze Redirects für alte populäre URLs auf die neuen (z.B. deinetrainerin.at/#about -> /ueber-mich). So verliert man kein SEO-Ranking. In WP, ein Redirect-Plugin (gratis) kann helfen; in custom, via .htaccess or server config.
Wartungsplan & Weiterbildung:
Dokumentiere für Sabine in einem kurzen Benutzerhandbuch (kann Teil des README sein oder separate Doku) die wichtigsten Schritte: wie sie Texte ändern kann, wie neue Termine freischalten, wie sie z.B. mehrsprachige Inhalte pflegt. Schulung gegebenenfalls anbieten.
Vereinbare, wie Updates/Backups gehandhabt werden. Bei WP: automatische Updates oder manuell? Bei custom: gibt es einen Wartungsvertrag?
SEO-Weiteres: evtl. anregen, regelmäßig News/Beiträge zu posten (um SEO frisch zu halten), sofern relevant.
Überwache in den ersten Wochen das Fehlerlog, ob alles rund läuft (z.B. E-Mails rausgehen, keine 404-Fehler auftreten).
Jeder der obigen Schritte kann detaillierter unterteilt werden und bestimmten Teammitgliedern zugewiesen werden. Durch diesen Plan wird sichergestellt, dass kein Aspekt vergessen wird – von der Content-Migration bis zur technischen Implementierung aller Features und finalen Qualitätskontrolle.
Abschluss
Mit dieser Wissensdatenbank hat der Developer eine vollständige Übersicht über den Kontext, Inhalt, das Design und die technischen Anforderungen der Website deineTrainerin.at. Die vorhandenen Inhalte und Funktionen wurden gesammelt und analysiert
deinetrainerin.at
deinetrainerin.at
, um sie im Neuaufbau berücksichtigen zu können. Ebenso wurden klare Vorgaben hinsichtlich Technologie (nur kostenlose Tools, eigener Server, zwei Sprachen, SEO-Optimierung) und eine Schritt-für-Schritt-Vorgehensweise dargelegt. Durch die Umsetzung dieses Plans wird die neue Website alle bisherigen Stärken (hochwertiger Content, persönliche Ansprache, Professionalität) übernehmen und gleichzeitig in Sachen Bedienbarkeit, Erweiterbarkeit und Online-Terminservice deutlich verbessert. Das Resultat soll eine moderne, effiziente Homepage sein, die Sabine Taudes’ Angebot optimal präsentiert und den Kunden eine benutzerfreundliche Erfahrung bietet.
