# Projekt: deineTrainerin.at – Eigenentwicklung (Laravel)

## Zielsetzung
Kompletter Relaunch der Website https://deinetrainerin.at/v2/ auf Basis von Laravel 11, als Self-Hosted Lösung für eigenen Server, 100 % kostenfreie Libraries, deutsch/englisch, sehr einfach zu bedienen, mit eigenem CMS und Terminbuchung.

## Features
- **Komplett editierbare Inhalte (Texte, Bilder) per Backend/CMS**
- **Online-Terminbuchungssystem** (eigene Entwicklung, kein externer Dienst)
- **Mehrsprachigkeit** (Deutsch & Englisch, für alle Seiten und Funktionen)
- **Kontaktformular** mit DSGVO-Checkbox
- **Social Media-Links, Kartenintegration (DSGVO-konform), Impressum/Datenschutz**
- **SEO-Optimierung** (Meta-Tags, Sitemap, Performance, strukturierte Daten)
- **Responsives Design nach Styleguide der Originalseite**

## Tech Stack
- **Backend:** Laravel 11 (PHP 8.2+)
- **Datenbank:** MariaDB/MySQL
- **Frontend:** Tailwind CSS (oder Bootstrap 5), eigene Komponenten
- **Kalender:** FullCalendar.js (MIT), Integration in eigene Buchungskomponente
- **Mail:** PHPMailer (oder Laravel Mail), SMTP
- **Mehrsprachigkeit:** Laravel Localization (lang files), Content in DB pro Sprache
- **Bilder:** lokal oder S3-kompatibles Storage
- **Sonstiges:** DSGVO-konformer Cookie Consent (z. B. Klaro.js), lokale Google Fonts

## Systemanforderungen
- PHP 8.2+
- Composer
- MySQL/MariaDB
- Node.js & npm (für Assets)
- Linux Server (Apache/Nginx)
- HTTPS/SSL empfohlen (Let’s Encrypt)

## Setup (Development)
1. Repository klonen  
   `git clone <repo-url> && cd deinetrainerin`
   Das Repository enthält bereits die grundlegende Laravel-Struktur.
2. .env Datei konfigurieren (`cp .env.example .env` und anpassen)
3. PHP-Abhängigkeiten installieren
   `composer install`
4. Node-Abhängigkeiten installieren
   `npm install`
   
   Für die Entwicklung kann `npm run dev` verwendet werden,
   um Tailwind im Watch-Modus zu starten. Für einen einmaligen
   Build der Assets genügt `npm run build`.
   (Internetverbindung erforderlich.)
5. App Key generieren
   `php artisan key:generate`
6. Datenbank anlegen und migraten
   `php artisan migrate`
7. Seed-User/Admin anlegen
   `php artisan db:seed`
8. (Optional) Storage-Link setzen
   `php artisan storage:link`
9. Lokalen Server starten
   `php artisan serve`
10. In einem zweiten Terminal den Asset-Watcher starten
    `npm run dev`

    Anschließend ist die Seite unter http://localhost:8000 erreichbar.

## Testing
Nach dem Einrichten aller Abhängigkeiten kann die Testumgebung mit PHPUnit ausgeführt werden.

1. Beispieltest ausführen:
   `composer run test`
   Dieser Befehl startet PHPUnit und führt alle Tests im Verzeichnis `tests` aus.
2. Weitere Tests können im Ordner `tests` abgelegt werden. Die Konfiguration befindet sich in `phpunit.xml`.

## Datenmodelle (Task 2)
Die grundlegenden Tabellen werden per Migration angelegt:
- **users** – Name, E-Mail, Passwort-Hash und ein `is_admin` Flag.
- **pages** – Seitenslug, Titel und Inhalt jeweils auf Deutsch und Englisch sowie optionale Meta-Tags.
- **appointments** – Termine mit Start-/Endzeit, Kundendaten und Status.
- **translations** – Schluessel/Locale und Text für dynamische Übersetzungen.


## Deployment (Produktiv)
- Production-ENV und DB einrichten
- Assets kompilieren: `npm run build`
- Caching aktivieren: `php artisan config:cache route:cache view:cache`
- HTTPS aktivieren
- Cronjob für Termin-Erinnerungen etc. (optional)

## Wichtige Pfade & Strukturen
- `app/Models` – Datenmodelle (Pages, Appointment, Translation, User)
- `app/Http/Controllers` – Controller für Frontend, API, Backend (CMS)
- `resources/views` – Blade Templates (Layout, Pages, Admin, Booking)
- `resources/lang/de` und `resources/lang/en` – Sprachdateien
- `routes/web.php` – Seitenrouten
- `public/img` – Bilder
- `storage/app/public` – Uploads

## TODO / Offene Tasks
Siehe Agents.md für komplette Aufgabenaufteilung.

---

## FAQ
- **Kann ich Inhalte ohne Code ändern?**  
  Ja, alle Haupttexte und Bilder sind über das CMS/Backend pflegbar, inklusive Listen, Überschriften und Meta-Tags.
- **Wie kann ich Termine verwalten?**  
  Termine werden im Backend (nur für Admin) verwaltet, Nutzer sehen nur freie Slots.
- **Wie werden Übersetzungen gepflegt?**  
  Entweder in Sprachdateien (`resources/lang`) für statische UI-Elemente oder als Textfelder pro Sprache im Backend für editierbare Inhalte.

---

## Autoren & Support
- Hauptentwicklung: [Dein Name]
- Kontakt: [Deine Mail]
- Dokumentation: requirements.md, Agents.md, Handbuch.pdf

---

