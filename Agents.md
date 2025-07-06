# Agents.md – Aufgabenplan zur Entwicklung (Laravel)

## Phase 1: Setup & Grundstruktur
- [ ] **1. Projekt initialisieren:**  
    - Laravel-Projekt anlegen
    - Git-Repo einrichten, Grundstruktur im Code, .env Beispiel
- [ ] **2. Models & Migrationen:**  
    - Models für Seiten-Content (Page), Terminbuchung (Appointment), Benutzer (User/Admin), Übersetzungen (Translation)
- [ ] **3. Authentifizierung:**  
    - Admin-Login (nur für Backend, optional: Rollen/Berechtigungen)
- [ ] **4. Sprachen vorbereiten:**  
    - Sprachdateien für statische Texte (de/en), Datenbankfelder für Content in beiden Sprachen

## Phase 2: Frontend & CMS-Funktion
- [ ] **5. Basis-Layout und Style:**  
    - Tailwind CSS (o. ä.) einrichten
    - Responsives Hauptlayout (Header, Navigation, Hero, Footer)
    - Styleguide nach Originalseite umsetzen
- [ ] **6. Content-Management (CMS):**  
    - Admin-UI für Pflege aller Texte/Bilder/Listen (z. B. About, Leistungen, Philosophie, Bulletpoints)
    - WYSIWYG-Editor für Fließtext
    - Mehrsprachige Eingabe (Tabs/Fields für DE & EN)
    - Medienverwaltung (Bilder uploaden/tauschen)

## Phase 3: Features & Interaktionen
- [ ] **7. Kontaktformular:**  
    - Frontend-Formular (Name, Email, Nachricht, Tel, DSGVO-Checkbox)
    - Serverseitige Validierung, Bestätigungs-E-Mail, Speicherung in DB (optional)
- [ ] **8. Terminbuchungssystem:**  
    - Backend: Verfügbare Slots anlegen/bearbeiten/löschen (Admin)
    - Frontend: Anzeige verfügbarer Termine (Kalender, z. B. mit FullCalendar.js)
    - Terminbuchung durch User: Slot auswählen, Kontaktdaten eingeben, Termin speichern
    - Bestätigungs-Mails an User/Admin, Statusverwaltung (angefragt/bestätigt/abgelehnt)
    - Mehrsprachigkeit im gesamten Flow
- [ ] **9. Social Media/Karten:**  
    - Social-Links im Footer/Header
    - DSGVO-konforme Karten (OpenStreetMap-Integration oder Google Maps erst nach Consent)
- [ ] **10. Impressum & Datenschutz:**  
    - Statische Seiten, zweisprachig, leicht editierbar

## Phase 4: SEO & Qualität
- [ ] **11. SEO-Features:**  
    - Meta-Tags, Title, Description pro Seite im Backend editierbar
    - Sitemap.xml Generator
    - robots.txt
    - Strukturierte Daten (JSON-LD für LocalBusiness/Person)
- [ ] **12. Cookie Consent:**  
    - Integration eines DSGVO-konformen Consent Banners (z. B. Klaro.js)
- [ ] **13. Performance:**  
    - Bildoptimierung, Caching, PageSpeed-Check, Font-Lokal-Hosting

## Phase 5: Tests, Doku, Go-Live
- [ ] **14. Testing (Browser/Mobil/Edge-Cases)**
- [ ] **15. Migration aller Inhalte und Medien**
- [ ] **16. Admin- und User-Doku, FAQ**
- [ ] **17. Deployment/Produktivschaltung**
- [ ] **18. Monitoring/Feinschliff nach Launch**

---

## Hinweise für Coding Agents
- Halte dich strikt an den Plan (Task für Task).
- Liefere für jeden Task vollständigen, kommentierten Code (Models, Controller, Views, Migrations, Sprachdateien etc.).
- Keine kostenpflichtigen Tools/Bibliotheken.
- Nutze offene Lizenzen (MIT, GPL).
- Dokumentiere alle Konfigurationsschritte im Code und in README.md.

---

## Vorlage für Startprompt (z. B. Codex/GPT-4o)
> **Prompt:**  
> Lies die Dateien requirements.md und Agents.md. Beginne mit Task 1 (“Projekt initialisieren”) und liefere den vollständigen, kommentierten Code sowie README-Abschnitt für dieses Setup.  
> Fahre danach mit Task 2 fort usw.  
> Nutze Laravel 11, Tailwind CSS, FullCalendar.js und alle Features wie in requirements.md beschrieben.  
> Kommentiere und dokumentiere jeden Code-Bereich und liefere am Ende eine Übersicht der wichtigsten Schritte.

---

**Damit hast du alles, um direkt mit einem Coding Agent Schritt für Schritt dein Projekt zu bauen!**  
Wenn du für einzelne Tasks konkrete Prompts brauchst, gib Bescheid (z. B. für „Terminbuchung“, „Sprachumschaltung“ etc.).
