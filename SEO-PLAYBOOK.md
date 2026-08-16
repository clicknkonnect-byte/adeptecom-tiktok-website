# Adeptecom SEO Playbook (USA market)

This file is the source of truth for the automated twice-weekly SEO routine.
Goal: improve organic visibility for **Adeptecom** in the **United States** market
for TikTok Shop agency / management / affiliate / creator / Spark Ads / GMV Max / LIVE
selling search terms, AND get cited by AI assistants (ChatGPT, Perplexity, Google AI
Overviews) — i.e. classic SEO + AEO/GEO.

Site: static HTML + one PHP contact form. Deploys on Hostinger from `main`.
Canonical domain: https://adeptecom.co

## Each run — do ALL of the following, then commit & push to `main`

1. **Pick the next keyword.** Open `seo/keywords.md`, choose the highest-priority
   keyword not yet marked `done`. Prefer USA intent + TikTok Shop relevance.

2. **Publish one blog post** in `/blog/` targeting that keyword:
   - Filename: kebab-case slug of the primary keyword, `.html`.
   - Use the SAME page skeleton as `blog/how-to-start-and-scale-a-tiktok-shop-in-the-usa.html`
     (same `<head>`, header, footer, `../` asset paths, cursor-dot, script).
   - 900–1400 words, original, accurate, US-focused. No fabricated stats or client names.
   - Structure: H1 with the keyword; short intro; 4–7 H2 sections; a real FAQ block
     (3+ Q&As) using `<details class="qa">`; a closing CTA band linking to `../index.html#contact`.
   - Internal-link to 2–4 relevant service pages (`../service-*.html`) and 1 related post.
   - Add JSON-LD: `Article`, `FAQPage`, and `BreadcrumbList` (copy the pattern from the seed post).
   - Set `datePublished`/`dateModified` to today (UTC).

3. **AEO / LLM optimization.** Make the post answer-first: a crisp 1–2 sentence answer
   directly under each H2 question, clear entity naming ("Adeptecom", "TikTok Shop"),
   and a scannable FAQ. This is what LLMs quote.

4. **Update the blog index** (`blog/index.html`) — add the new post as the first card.

5. **Technical / on-page SEO.**
   - Add the new post to `sitemap.xml` (loc, `<lastmod>` = today, changefreq monthly, priority 0.6).
   - Bump `<lastmod>` on `/` and `/blog/index.html` to today.
   - Verify every page has a unique `<title>`, meta description, canonical, and OG tags.
   - Keep `robots.txt` allowing all + sitemap reference.

6. **Directories & citations.** In `seo/directories.md`, mark one directory as the
   "submit next" target for the human team (the routine cannot create accounts/submit forms).

7. **Rank monitoring.** Append a dated row to `seo/rank-log.md` noting the keyword
   published this run and the target term to watch.

8. **Bookkeeping.** Mark the chosen keyword `done` in `seo/keywords.md` with today's date.

9. **Commit & push.** One commit, message: `SEO: <post title> + technical updates (<date>)`.
   Then `git push origin main`. Hostinger auto-deploys.

## Guardrails
- NEVER invent metrics, client names, or testimonials. Use only claims already on the site
  ($52M+ sales, $38M+ affiliate GMV, 10K+ creators, 100% Upwork JSS) or generic, defensible statements.
- US spelling and US market framing.
- One post per run — quality over volume (Google penalizes thin mass content).
- Do not touch `contact.php` recipient, pricing, or the address.
- If unsure, prefer smaller, correct changes over large risky ones.
