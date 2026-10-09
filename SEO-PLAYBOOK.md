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

## Q4 2026 directive: aggressive lead generation (set 2026-10-09)

The owner has asked explicitly to go aggressive this quarter: more content,
faster, with the specific goal of USA DTC brands finding Adeptecom through
search AND through AI assistants (ChatGPT, Perplexity, AI Overviews) when
they're evaluating who to hire, and then actually sending an inquiry via
`../index.html#contact`. This is a deliberate, owner-approved change to the
"one post per run" guardrail below. Until the owner says otherwise:

- **Keyword order:** pick the next keyword from the "Q4 2026 priority
  override" list at the top of `seo/keywords.md` first (commercial /
  bottom-funnel "hiring an agency" intent), not the plain top-down table.
  Fall back to top-down once that override list is exhausted.
- **Cadence:** the routine's own trigger fires more often this quarter (see
  the scheduled trigger, not this file) — don't try to compensate by cramming
  multiple posts into a single run. One strong, fully-validated post per run
  is still the right unit of work; frequency is how volume goes up, not
  per-run scope. If a human explicitly asks for more than one post in a
  single run, that's fine too, but don't default to it on your own.
- **Every post should read as "how do I pick/evaluate an agency" where the
  keyword allows it** — buyer-checklist framing (what to look for, questions
  to ask, red flags, pricing breakdowns) converts to inquiries far better than
  pure how-to content, and is exactly the shape of answer AI assistants quote
  when someone asks "how do I find a TikTok Shop agency." Keep informational
  keywords too (they build topical depth and still get AEO-cited), just don't
  let them crowd out the commercial ones this quarter.
- **Never rank or name specific competitor agencies as recommendations** —
  buyer-checklist posts give criteria and red flags, not a "best agencies"
  listicle that sends the reader to a competitor. It's fine to note neutrally
  that published "best agency" rankings are often written by the agencies on
  them (this is true and it's a real reason to prefer a checklist).
- **AI-answer-engine grounding:** keep `/llms.txt` at the repo root current
  (services, packages/pricing, proof points, contact path) — see step 5a
  below. This is a direct lever for how AI assistants describe and cite
  Adeptecom, separate from classic SEO.
- This section itself is the deliberate update the "one post per run" line
  below asked for — it doesn't need to be re-justified every run, just
  followed, and revisited if the owner says to dial back.

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
   Also update the **"Latest guides" section on `index.html`** (id `guides`): add the new
   post as the first card there and remove the oldest so it keeps the 6 most-recent posts,
   each linking directly with a `blog/<slug>.html` href. This gives every post a direct
   internal link from the homepage (the strongest page), which helps Google discover and
   index it faster.

5. **Technical / on-page SEO.**
   - Add the new post to `sitemap.xml` (loc, `<lastmod>` = today, changefreq monthly, priority 0.6).
   - Bump `<lastmod>` on `/` and `/blog/index.html` to today.
   - Verify every page has a unique `<title>`, meta description, canonical, and OG tags.
   - Keep `robots.txt` allowing all + sitemap reference.

5a. **AI-answer-engine file.** Keep `/llms.txt` at the repo root in sync with
    reality: services, pricing tiers, the approved proof points (guardrails
    below), and the contact path. This is read by AI crawlers/assistants and
    is a direct AEO lever — update it the same run you change pricing,
    services, or add a page that should be surfaced to an AI assistant.

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

6b. **Search Console data (real indexing + ranking, every run).** Google Search Console
   is now connected via the Composio `google_search_console` toolkit. The property is a
   DOMAIN property — always pass `site_url: "sc-domain:adeptecom.co"`. Load the Composio
   meta-tools with `ToolSearch` (select `COMPOSIO_SEARCH_TOOLS`, `COMPOSIO_GET_TOOL_SCHEMAS`,
   `COMPOSIO_MULTI_EXECUTE_TOOL`) if they aren't already available, then — best-effort,
   NEVER fail the run if GSC is unreachable or the connection is inactive:
   - `GOOGLE_SEARCH_CONSOLE_LIST_SITEMAPS` — confirm `https://adeptecom.co/sitemap.xml`
     is present with 0 errors; if errors, note them at the top of `seo/rank-log.md`.
   - `GOOGLE_SEARCH_CONSOLE_SEARCH_ANALYTICS_QUERY` (last 28 days; run once with
     `dimensions:["query"]` and once with `["page"]`, `row_limit:25`). Append a dated
     "GSC snapshot" block to `seo/rank-log.md` listing the top ~10 non-brand queries with
     impressions, clicks, and average position, plus the top pages. When GSC returns rows
     this is the SOURCE OF TRUTH for the "AEO check"/rank columns — the step-6 WebSearch
     is only a fallback for terms GSC has no data on yet.
   - `GOOGLE_SEARCH_CONSOLE_INSPECT_URL` — inspect this run's new post and the previous
     run's post; record `coverageState` ("Submitted and indexed" vs "URL is unknown to
     Google") in each post's `rank-log.md` row.
   - **Prioritise from the data:** if a page already earns impressions for a near-keyword
     at position ~5–20, make the next post an adjacent/long-tail variant of that winning
     term (double down on momentum) ahead of a cold backlog keyword; add such variants to
     `seo/keywords.md` tagged `(gsc <date>)`.
   - READ-ONLY. There is NO API to "request indexing" for normal pages — never attempt it;
     that stays a manual human action in the GSC UI.

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
  on its own. (It changed 2026-10-09 — see the "Q4 2026 directive" section above. The rule
  is still in force per-run; volume this quarter comes from firing the routine more often,
  not from writing more posts in one sitting.)
- Do not touch `contact.php` recipient, pricing, or the address.
- If unsure, prefer smaller, correct changes over large risky ones.
