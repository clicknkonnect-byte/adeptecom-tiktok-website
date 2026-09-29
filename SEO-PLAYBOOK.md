# Adeptecom SEO Playbook (USA market)

This file is the source of truth for the automated SEO routine. The routine's own
stored trigger prompt should stay short and defer to this file — if they ever
disagree, this file wins.

Goal: improve organic visibility for **Adeptecom** in the **United States** market
for TikTok Shop agency / management / affiliate / creator / Spark Ads / GMV Max / LIVE
selling search terms, AND get cited by AI assistants (ChatGPT, Perplexity, Google AI
Overviews) — i.e. classic SEO + AEO/GEO.

Site: static HTML + one PHP contact form. Deploys on Hostinger from `main`.
Canonical domain: https://adeptecom.co

## Each run — do ALL of the following, then commit & push to `main`

0. **Live keyword & SERP research (WebSearch, every run).** Don't rely solely on the
   static backlog in `seo/keywords.md` — it goes stale. Run 2–4 targeted `WebSearch`
   queries this run (batch them in one tool-call message; they're independent and
   fast — no need for a subagent) covering things like:
   - `"tiktok shop" <category or angle> usa` for the category you're about to write on,
     to check what's actually ranking and what real buyer questions look like.
   - A competitor/gap check — e.g. `tiktok shop agency usa questions people ask`, or
     search for a recent published post's exact title to see if adeptecom.co shows up
     yet (this doubles as the AEO check in step 6).
   - A trends check for the vertical — e.g. category GMV/growth data, format shifts
     (LIVE, GMV Max, Spark Ads) — useful for grounding claims and spotting new angles.
   From the results, extract real phrasing: People Also Ask-style questions, buyer
   checklist items, category/trend language. Add anything genuinely new and relevant
   to the bottom of `seo/keywords.md` (dedupe against existing rows first), tagged
   `(live research <date>)` with a one-line source note. This keeps the backlog
   grounded in what people are actually searching *now*, not just the original
   August seed list.

1. **Pick the next keyword.** Open `seo/keywords.md`, choose the highest-priority
   keyword not yet marked `done` — including any added in step 0 this run if one of
   them is now clearly the best USA + TikTok Shop match. Prefer USA intent + TikTok
   Shop relevance.

2. **Publish one blog post** in `/blog/` targeting that keyword:
   - Filename: kebab-case slug of the primary keyword, `.html`.
   - Use the SAME page skeleton as `blog/how-to-start-and-scale-a-tiktok-shop-in-the-usa.html`
     (same `<head>`, header, footer, `../` asset paths, cursor-dot, script).
   - 900–1400 words, original, accurate, US-focused. No fabricated stats or client names.
     External market stats found via WebSearch (e.g. category GMV figures) may be used
     if phrased generically and attributed to "industry reports" / "public reporting" —
     never presented as Adeptecom's own results, and never with a specific competitor
     brand name used as if it were a client or partner.
   - Structure: H1 with the keyword; short intro; 4–7 H2 sections; a real FAQ block
     (3+ Q&As) using `<details class="qa">`; a closing CTA band linking to `../index.html#contact`.
   - Internal-link to 2–4 relevant service pages (`../service-*.html`) and 1 related post.
   - Add JSON-LD: `Article`, `FAQPage`, and `BreadcrumbList` (copy the pattern from the seed post).
   - Set `datePublished`/`dateModified` to today (UTC).
   - Keep the Google Analytics tag (`gtag.js`, id `G-613QQWG97C`) in `<head>` right after the
     viewport meta — every page on the site MUST include this exact tag (it's in the seed skeleton).

3. **AEO / LLM optimization.** Make the post answer-first: a crisp 1–2 sentence answer
   directly under each H2 question, clear entity naming ("Adeptecom", "TikTok Shop"),
   and a scannable FAQ. This is what LLMs quote. Prefer the exact question phrasing you
   found in step 0's research over guessed phrasing — it's more likely to match how
   people actually ask AI assistants.

4. **Update the blog index** (`blog/index.html`) — add the new post as the first card.

5. **Technical / on-page SEO.**
   - Add the new post to `sitemap.xml` (loc, `<lastmod>` = today, changefreq monthly, priority 0.6).
   - Bump `<lastmod>` on `/` and `/blog/index.html` to today.
   - Verify every page has a unique `<title>`, meta description, canonical, and OG tags.
   - Keep `robots.txt` allowing all + sitemap reference.

6. **AEO / LLM citation tracking (WebSearch, every run).** Pick 1–2 previously
   published posts from `seo/rank-log.md` whose "AEO check" column says
   `not checked yet` (oldest first), and run one `WebSearch` per post for its target
   keyword (optionally + `adeptecom`) to see if adeptecom.co shows up anywhere in the
   US organic results. This is a real-search proxy for AI-answer citation, not a
   Search Console number — be honest about that in the note. Update that row's "AEO
   check" column to `cited (<date>)` or `not cited (<date>)` with a one-line reason.
   This can run as a background `Agent` task in parallel with step 2's drafting if you
   want the wall-clock speedup — it's independent of the new post — but merge the
   result into `seo/rank-log.md` before the final commit either way.

7. **Directories & citations.** In `seo/directories.md`, mark one directory as the
   "submit next" target for the human team (the routine cannot create accounts/submit forms).

8. **Rank monitoring.** Append a dated row to `seo/rank-log.md` for the post published
   this run: target keyword, and `AEO check` = `not checked yet` (it'll get picked up
   by a future run's step 6).

9. **Bookkeeping.** Mark the chosen keyword `done` in `seo/keywords.md` with today's date.

10. **Commit & push.** One commit, message: `SEO: <post title> + technical updates (<date>)`.
    Then `git push origin main`. Hostinger auto-deploys.

## Run mechanics — go faster without cutting corners

- **Use `WebSearch` directly for research (steps 0 and 6).** It's fast and each call
  is independent, so batch the queries for a step into one message instead of calling
  them one at a time. Don't reach for a subagent just to run a search — that adds
  spin-up overhead for no benefit.
- **Use the `Agent` tool for genuinely parallel, independent work**, not for
  everything. The one clear case here: step 6's citation audit doesn't depend on step
  2's draft and vice versa, so they can run concurrently. Don't parallelize steps that
  depend on each other's output (e.g. you can't draft the post before step 1 has
  picked the keyword).
- Keep the guardrails below in force no matter how the work is split across tool
  calls or subagents — a subagent doing research still can't invent a stat, and the
  final commit is still one commit from the main thread after everything merges back.

## Guardrails
- NEVER invent metrics, client names, or testimonials. Use only claims already on the site
  ($52M+ sales, $38M+ affiliate GMV, 10K+ creators, 100% Upwork JSS) or generic, defensible
  statements, or attributed external stats per step 2's rule above.
- US spelling and US market framing.
- One post per run — quality over volume (Google penalizes thin mass content). If this
  ever changes, it'll be a deliberate update to this line, not an assumption a run makes
  on its own.
- Do not touch `contact.php` recipient, pricing, or the address.
- If unsure, prefer smaller, correct changes over large risky ones.
