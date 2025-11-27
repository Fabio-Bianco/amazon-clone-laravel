# 📝 Guida Commit Messages Professionali

## 🎯 Formato Standard

```
<tipo>(<scope>): <descrizione breve>

[corpo opzionale - spiegazione dettagliata]

[footer opzionale - issues/breaking changes]
```

---

## 🏷️ Tipi di Commit

| Tipo | Quando Usare | Emoji |
|------|--------------|-------|
| `feat` | Nuova funzionalità | ✨ |
| `fix` | Correzione bug | 🐛 |
| `docs` | Modifiche documentazione | 📝 |
| `style` | Formattazione, CSS, UI | 💄 |
| `refactor` | Ristrutturazione codice | ♻️ |
| `perf` | Miglioramenti performance | ⚡ |
| `test` | Aggiunta/modifica test | ✅ |
| `chore` | Task manutenzione | 🔧 |
| `build` | Build system, dipendenze | 📦 |
| `ci` | Configurazione CI/CD | 👷 |

---

## ✅ Esempi CORRETTI

### Commit Semplici
```bash
feat(homepage): add hero banner with category cards
fix(cart): resolve quantity selector z-index issue
style(header): update Amazon official color codes
docs(readme): add installation instructions
refactor(css): split layout into modular files
perf(images): implement lazy loading for products
```

### Commit con Corpo
```bash
feat(mobile): implement hamburger menu with sidebar

- Add slide-in animation with cubic-bezier
- Include overlay with backdrop-filter
- Add 3 navigation sections (Categories, Programs, Help)
- Z-index hierarchy: overlay 1999, sidebar 2000

Closes #12
```

### Commit con Breaking Changes
```bash
refactor(routes)!: restructure routing architecture

BREAKING CHANGE: Route names changed from snake_case to kebab-case
Migration guide in docs/migration.md
```

---

## ❌ Esempi SBAGLIATI

```bash
❌ "fix stuff"              → Troppo vago
❌ "update"                 → Cosa hai aggiornato?
❌ "WIP"                    → Mai committare work-in-progress
❌ "Fixed bug"              → Quale bug?
❌ "asdfasdf"               → Non professionale
❌ "Update homepage.css"    → Usa 'style' come tipo
```

---

## 💡 Best Practices

### ✅ DO
- Usa il presente imperativo: "add" non "added"
- Prima riga max 50 caratteri
- Corpo max 72 caratteri per riga
- Spiega il "perché", non il "cosa"
- Referenzia issue quando possibile
- Un commit = una modifica logica

### ❌ DON'T
- Non usare punto finale nella descrizione
- Non committare codice commentato
- Non mescolare refactoring e feature
- Non usare emoji in progetti aziendali (ok per personal)

---

## 🚀 Commit per Questo Progetto

### Setup Iniziale
```bash
chore: initialize Laravel 11 project
feat: add MVC structure with controllers
feat(routes): define homepage, cart, profile routes
```

### Homepage
```bash
feat(homepage): create hero banner section
feat(homepage): add product grid with 6 columns
style(homepage): implement Amazon color palette
feat(homepage): add category cards with hover effects
perf(homepage): optimize images with Unsplash API
```

### Carrello
```bash
feat(cart): create shopping cart page
feat(cart): add quantity selector with Amazon styling
style(cart): implement 3-tone border buttons
fix(cart): resolve sticky summary z-index conflict
refactor(cart): restructure mobile layout pattern
```

### Header & Navigation
```bash
feat(header): add sticky header with search bar
style(header): apply Amazon official colors (#131A22)
feat(header): implement hamburger menu for mobile
feat(header): add slide-in sidebar with overlay
fix(header): correct cart badge transparent background
```

### Mobile Optimization
```bash
feat(mobile): add 7 responsive breakpoints
style(mobile): optimize cart cards for touch
fix(mobile): resolve header element overlap
refactor(mobile): transform sidebar to pill tabs
perf(mobile): reduce CSS bundle size 30%
```

### Documentation
```bash
docs: create professional README with screenshots
docs: add Italian translation (README_IT.md)
docs(readme): add installation guide
docs(readme): document design system
chore: add MIT license
chore: improve .gitignore configuration
```

---

## 🎨 Con Emoji (Personal Projects)

```bash
✨ feat(homepage): add hero banner
🐛 fix(cart): resolve z-index issue
💄 style(header): update color codes
📝 docs: create README
♻️ refactor(css): split into modules
⚡ perf: optimize images
🔧 chore: update .gitignore
```

---

## 📊 Conventional Commits Completi

Per progetti enterprise, usa il formato completo:

```bash
feat(homepage)!: redesign product grid layout

Replaced 6-column grid with flexible auto-fit columns.
Improves mobile responsiveness and accessibility.

BREAKING CHANGE: Product card class names changed from
.product-item to .product-card. Update custom CSS if overriding.

Closes #45
Refs #32, #38
```

---

## 🔗 Tool Consigliati

- **Commitizen**: CLI per commit guidati
- **Commitlint**: Valida formato commit
- **Husky**: Git hooks per enforcing standards
- **Conventional Changelog**: Auto-genera CHANGELOG.md

### Installazione Rapida
```bash
npm install -g commitizen
commitizen init cz-conventional-changelog --save-dev --save-exact
```

---

## 📚 Risorse

- [Conventional Commits](https://www.conventionalcommits.org/)
- [Angular Commit Guidelines](https://github.com/angular/angular/blob/main/CONTRIBUTING.md)
- [Semantic Versioning](https://semver.org/)

---

## 🎯 Quick Reference

### Commit Veloce
```bash
git add .
git commit -m "feat(cart): add checkout button"
git push
```

### Commit Completo
```bash
git add .
git commit -m "feat(cart): implement shopping cart functionality

- Add item list with images and prices
- Implement quantity selector
- Add remove item action
- Calculate total with tax

Closes #23"
git push
```

---

**Pro Tip**: Usa `git commit --amend` per correggere l'ultimo commit message!
