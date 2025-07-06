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
3. Abhängigkeiten installieren
   `composer install`
   `npm install && npm run build`
   (Die Paketinstallation benötigt Internetzugang.)
4. App Key generieren
   `php artisan key:generate`
5. Datenbank anlegen und migraten  
   `php artisan migrate`
6. Seed-User/Admin anlegen  
   `php artisan db:seed`
7. (Optional) Storage-Link setzen  
   `php artisan storage:link`
8. Lokalen Server starten
   `php artisan serve`

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

