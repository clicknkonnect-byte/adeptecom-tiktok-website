# Rank & content log

One row per routine run. Track the target term and check positions periodically in
Google Search Console (US). **GSC is now connected (2026-10-10) via the Composio
`google_search_console` toolkit — property `sc-domain:adeptecom.co`.** Follow
SEO-PLAYBOOK.md step 6b each run to pull real impressions/positions/coverage.

## GSC baseline — 2026-10-10 (sitemap just submitted)
- Sitemap `https://adeptecom.co/sitemap.xml` submitted (24 URLs). Old 2024 sitemaps
  (`sitemap-8/14/18.xml`, http) still registered — to be removed manually in GSC.
- Indexing coverage (URL Inspection, 24/24 checked): **2 indexed** — `/` and
  `/service-ai-research.html`; **22 "URL is unknown to Google"** (not yet discovered).
- Search analytics (28d): impressions almost entirely brand terms ("adeptecom",
  pos ~1.5); no meaningful non-brand TikTok-Shop keyword visibility yet. Expected for a
  young domain whose content was undiscovered until the sitemap submission.
- Legacy 301s added: `/our-blogs/`→`/blog/`, `/contact-us/`→`/#contact`,
  `/case-studies/`→`/#results`.

## GSC snapshot — 2026-10-09 (same-day follow-up run)
- New sitemap (`https://adeptecom.co/sitemap.xml`) shows `isPending: true` — still
  processing after the 2026-10-10 submission (timestamps from Google's side lag the
  run clock). Legacy `http://` sitemaps (`sitemap-8/14/18.xml` + index) are still
  registered from 2024 — human action in the GSC UI to remove, per the baseline note.
- Search analytics (28d, `dimensions:["query"]`): impressions are almost entirely
  brand-term typos/variants ("adept", "adeptt", "adepto", "adepte"…) and unrelated
  generic queries ("ecommerce service provider", "amazon agency", "law firms",
  "right law"). Clicks (5) are on "adeptecom" only, position ~1.5. **No TikTok Shop
  non-brand keyword has any impressions yet.**
- Search analytics (28d, `dimensions:["page"]`): only `/` (both http and https
  variants) and 4 anchor sections plus `/blog/index.html` (3 impressions) and
  `/service-ai-research.html` (4 impressions) show any impressions. **No individual
  blog post URL has impressions yet** — confirms the posts are still undiscovered,
  consistent with the baseline.
- URL Inspection on the two most recent posts (`best-tiktok-shop-agency-for-ecommerce-brands.html`,
  `tiktok-shop-vs-amazon-for-brands.html`): both **"URL is unknown to Google"** —
  not yet crawled/indexed, same-day as publish, expected lag.
- Takeaway: no GSC data yet to prioritize a "winning near-keyword" variant (step 6b's
  momentum rule) — keep working the Q4 priority-override list top-down; re-check once
  the new sitemap finishes processing and the legacy sitemaps are cleaned up.

## GSC snapshot — 2026-10-12
- Sitemap `https://adeptecom.co/sitemap.xml`: 0 errors, 0 warnings, 24 submitted / **0 indexed**
  (still not pending, last downloaded 2026-10-11). Legacy `http://` sitemap index + 3 legacy
  `sitemap-8/14/18.xml` entries remain registered from 2024 (still `isPending: true` or stale) —
  still needs manual removal in the GSC UI, per the 2026-10-10 baseline note.
- Search analytics (28d, `dimensions:["query"]`): impressions are still almost entirely
  brand-term typos/variants ("adept", "adecom", "adeptt"…) and unrelated generic queries
  ("amazon agency", "law firms", "ecommerce service provider"). Clicks (5) are on "adeptecom"
  only, position ~1.5. **No TikTok Shop non-brand keyword has any impressions yet.**
- Search analytics (28d, `dimensions:["page"]`): only `/` (http + https variants) and a few
  anchor sections, `/blog/index.html` (3 impressions), `/service-ai-research.html` (4
  impressions), and the legacy `/our-blogs/` redirect show impressions. **Still no individual
  blog post URL has impressions.**
- URL Inspection on this run's new post (`questions-to-ask-before-hiring-a-tiktok-shop-agency.html`)
  and the previous run's post (`tiktok-shop-marketing-agency-for-startups.html`): both
  **"URL is unknown to Google"** — expected, same-day/recent publish lag.
- Takeaway: no GSC rows yet for any TikTok Shop non-brand term, so step 6b's "double down on a
  winning near-keyword" rule still doesn't apply — keep working the Q4 priority-override list
  top-down. The sitemap showing 0/24 indexed (vs. 2/24 at the 10-10 baseline) is a regression
  worth a human look if it persists past the next couple of runs.

## GSC snapshot — 2026-10-13
- Sitemap `https://adeptecom.co/sitemap.xml`: 0 errors, 0 warnings, 26 submitted / **0 indexed**. The legacy
  `http://` sitemap index + 3 legacy `sitemap-8/14/18.xml` entries are still registered from 2024 (`isPending: true`
  or stale `lastDownloaded: 2025-01-11`) — still needs manual removal in the GSC UI, per the 2026-10-10 baseline note.
- **First individual blog post now indexed:** URL Inspection on `questions-to-ask-before-hiring-a-tiktok-shop-agency.html`
  (last run's post) returned **"Submitted and indexed"** (verdict PASS, crawled 2026-10-12, referring URL
  `https://adeptecom.co/index.html`, rich result Breadcrumbs detected) — the first non-homepage page to clear
  indexing since the baseline. This run's new post (`tiktok-shop-agency-retainer-vs-commission-pricing.html`)
  still shows **"URL is unknown to Google"** (expected — not live until this run's push).
- Search analytics (28d, `dimensions:["query"]`): still mostly brand-term typos/variants ("adept", "adecom",
  "adeptt"…) and unrelated generic queries ("amazon agency", "law firms", "ecommerce service provider"). One
  non-brand TikTok Shop term now shows impressions for the first time: **"tiktok shop affiliate program"** — 1
  impression, position ~54. That's far outside the 5–20 "momentum" band step 6b watches for, so it doesn't yet
  trigger the "double down on a winning near-keyword" rule, but it's the first non-brand TikTok Shop impression
  recorded and worth re-checking next run.
- Search analytics (28d, `dimensions:["page"]`): `/` (http+https), a few anchor sections, `/blog/index.html`,
  `/our-blogs/` (legacy redirect), `/service-ai-research.html`, and now
  `/blog/tiktok-shop-affiliate-program-setup.html` (2 impressions, position ~32) show impressions — the first
  individual blog post to register any page-level impressions.
- Takeaway: indexing is starting to move (one post now indexed, one near-term with its first impressions) but
  nothing yet in the 5–20 position "winning" range — keep working the Q4 priority-override list top-down and
  re-check GSC next run; worth watching "tiktok shop affiliate program" placement as a signal the domain's
  TikTok Shop content is starting to get crawled for the right terms.

## GSC snapshot — 2026-10-14
- Sitemap `https://adeptecom.co/sitemap.xml`: 0 errors, 0 warnings, 26 submitted / **0 indexed** (per the sitemap's own counter — the per-URL Inspection API below shows indexing is progressing even though this counter hasn't caught up). The legacy `http://` sitemap index + 3 legacy `sitemap-8/14/18.xml` entries are still registered from 2024 (`isPending: true` or stale) — still needs manual removal in the GSC UI, per the 2026-10-10 baseline note.
- **URL Inspection, previous run's post** (`tiktok-shop-agency-retainer-vs-commission-pricing.html`): **"Submitted and indexed"** (verdict PASS, crawled 2026-10-14, referring URL `https://adeptecom.co/`, Breadcrumbs rich result detected) — now the second non-homepage page confirmed indexed, one day after the first (`questions-to-ask-before-hiring-a-tiktok-shop-agency.html`, confirmed 2026-10-13). Indexing lag from publish to confirmed index is now consistently ~1 day for recent posts.
- Search analytics (28d, `dimensions:["query"]`): still mostly brand-term typos/variants ("adept", "adecom", "adeptt"…) and unrelated generic queries ("amazon agency", "law firms", "ecommerce services near me"). One non-brand TikTok Shop term with meaningful position: "best tiktok shop agency" — 1 impression, position ~61 (too far outside the 5–20 momentum band to act on).
- Search analytics (28d, `dimensions:["page"]`): several individual blog posts now show impressions — `tiktok-shop-affiliate-program-setup.html` (10 impressions, pos ~33), `tiktok-shop-agency-usa.html` (6, pos ~73), `tiktok-shop-vs-amazon-for-brands.html` (5, pos ~15.2), `tiktok-shop-compliance-requirements-usa.html` (4, pos ~7.25), `tiktok-shop-for-beauty-brands.html` (4, pos ~8.5), `best-tiktok-shop-agency-for-ecommerce-brands.html` (3, pos ~47), `how-to-get-creators-for-tiktok-shop.html` (1, pos 5), `tiktok-shop-management-services.html` (1, pos ~49). The compliance and vs-amazon pages sit inside the 5–20 "momentum" band step 6b watches for, so a query+page drilldown was run to find the exact query driving each — but the drilldown returned no matching row for the compliance page and only a single, different-position row for the vs-amazon page ("tiktok shop vs amazon", 1 impression, pos 48). GSC's own aggregation differs across dimension combinations and this volume is too low/inconsistent to name a reliable "winning near-keyword" yet — **not** treated as triggering the momentum rule this run; worth re-checking once either page clears more impressions.
- Takeaway: indexing continues to move (2 posts now confirmed indexed, more individual post URLs than ever showing impressions) but no query+page combination yet clears the bar for the "double down" rule with confidence — keep working the Q4 priority-override list in order and re-check GSC next run.

## GSC snapshot — 2026-10-15
- Sitemap `https://adeptecom.co/sitemap.xml`: 0 errors, 0 warnings, 26 submitted / **0 indexed** (per the sitemap's own counter — per-URL Inspection below shows real indexing progress this counter hasn't caught up to). The legacy `http://` sitemap index + 3 legacy `sitemap-8/14/18.xml` entries are still registered from 2024 (`isPending: true` or stale `lastDownloaded: 2025-01-11`) — still needs manual removal in the GSC UI, per the 2026-10-10 baseline note.
- **URL Inspection, this run's new post** (`tiktok-shop-partner-tsp-vs-independent-agency-cost.html`) and **previous run's post** (`tiktok-shop-agency-flat-fee-vs-percentage-of-gmv.html`): both **"URL is unknown to Google"** — expected, same-day/recent publish lag.
- Search analytics (28d, `dimensions:["query"]`): still mostly brand-term typos/variants ("adept", "adecom", "adeptt"…) and unrelated generic queries ("amazon agency", "law firms", "ecommerce courses near me"). Non-brand TikTok Shop terms with impressions: "best tiktok shop agency" (1, pos 61), "tiktok affiliate program" (1, pos 37), "tiktok live shopping agency" (2, pos 79), "tiktok shop ads agency" (1, pos 90), "gmv meaning tiktok" (1, pos 44) — all still far outside the 5–20 momentum band.
- Search analytics (28d, `dimensions:["page"]`): several individual blog posts now sit inside or near the 5–20 "momentum" band — `tiktok-shop-compliance-requirements-usa.html` (10 impressions, pos 6.5), `tiktok-shop-for-beauty-brands.html` (10, pos 9.8), `tiktok-shop-for-supplement-brands-usa.html` (6, pos 9.83), `tiktok-shop-gmv-max-explained.html` (8, pos 11.25), `tiktok-shop-vs-amazon-for-brands.html` (12, pos 10.67), `tiktok-shop-listing-optimization.html` (5, pos 3). A query+page drilldown was run on the compliance and supplement pages (both returned zero rows — GSC's low-volume aggregation differs across dimension combinations) and the beauty page, which returned exactly one row: query "tiktok shop beauty", pos 22 — just outside the band. Still not enough signal to name a reliable "winning near-keyword" with confidence.
- Takeaway: indexing lag persists (both recent posts still "unknown to Google" same-day) but page-level position data continues to improve across several posts. No query+page combination yet clears the bar for the "double down" rule — keep working the Q4 priority-override list in order and re-check GSC next run.

## AEO check — 2026-10-14
- Live WebSearch for `"tiktok shop compliance requirements usa" adeptecom` surfaced only third-party compliance/eligibility guides (Alibaba SmartBuy, ComplianceGate, EchoTik, Racklify, BeBoldDigital) — no adeptecom.co citation. Updated that row below from "not checked yet" to "not cited (2026-10-14)".

## AEO check — 2026-10-15
- Live WebSearch for `"tiktok shop for supplement brands usa" adeptecom` surfaced no mention of Adeptecom at all — results were generic supplement-category market data (NielsenIQ sales figures, Fastmoss product lists) and one unrelated Miami agency press release. Updated that row below from "not checked yet" to "not cited (2026-10-15)".

The "AEO check" column is a live WebSearch spot-check (not full Search Console data)
for whether adeptecom.co appears anywhere in the US organic results for the target
keyword — see SEO-PLAYBOOK.md "AEO / LLM citation tracking". `not checked yet` means
the routine hasn't run that check for this row yet; it doesn't mean "not cited."

| Date | Published post | Target keyword | AEO check | Notes |
|---|---|---|---|---|
| 2026-08-16 | how-to-start-and-scale-a-tiktok-shop-in-the-usa | how to start a tiktok shop in the usa | not cited (2026-10-01) | Live WebSearch for "how to start a tiktok shop in the usa adeptecom" surfaced only generic setup guides from other sites — no adeptecom.co citation yet. |
| 2026-08-21 | tiktok-shop-agency-usa | tiktok shop agency usa | not cited (2026-10-01) | Live WebSearch for "tiktok shop agency usa adeptecom" surfaced other named agencies (Sociallyin, Tinuiti, Power Digital) but no adeptecom.co citation yet. |
| 2026-08-21 | tiktok-shop-management-services | tiktok shop management services | not cited (2026-10-09) | Live WebSearch for "tiktok shop management services adeptecom" surfaced only other providers (Suntec India, Evolved Commerce, EcomAchieve, Slayva, Fiverr listings) — no adeptecom.co citation yet. |
| 2026-08-24 | tiktok-shop-affiliate-program-setup | tiktok shop affiliate program setup | not cited (2026-10-09) | Live WebSearch for "tiktok shop affiliate program setup adeptecom" surfaced no mention of Adeptecom at all — results were generic TikTok affiliate setup guides and third-party agencies. |
| 2026-08-31 | how-to-get-creators-for-tiktok-shop | how to get creators for tiktok shop | not cited (2026-10-09) | Live WebSearch for "how to get creators for tiktok shop adeptecom" surfaced no mention of Adeptecom — results were generic creator-sourcing guides (Helium 10 playbook, TikTok Seller Center docs). |
| 2026-09-03 | tiktok-spark-ads-agency | tiktok spark ads agency | not cited (2026-10-09) | Live WebSearch for "tiktok spark ads agency adeptecom" surfaced no mention of Adeptecom — agency roundups named Ubiquitous, House of Marketers, and Influencer Marketing Factory instead. |
| 2026-09-07 | tiktok-shop-gmv-max-explained | tiktok shop gmv max explained | not cited (2026-10-12) | Live WebSearch for "tiktok shop gmv max explained adeptecom" surfaced only TikTok's own help docs and other publishers (Influencer Marketing Hub, Conjura, MapMyChannel) — no adeptecom.co citation yet. |
| 2026-09-10 | tiktok-shop-listing-optimization | tiktok shop listing optimization | not cited (2026-10-12) | Live WebSearch for "tiktok shop listing optimization adeptecom" surfaced only generic listing-optimization guides (Graas, Avenuez, Printify, Racklify) — no adeptecom.co citation yet. |
| 2026-09-14 | why-is-my-tiktok-shop-listing-rejected | why is my tiktok shop listing rejected | not cited (2026-10-13) | Live WebSearch for "why is my tiktok shop listing rejected" adeptecom surfaced no mention of Adeptecom — results were generic rejection/troubleshooting guides (hustlegotreal.com, nvinc.com, duoke.com, AfterShip support). |
| 2026-09-17 | tiktok-live-selling-strategy | tiktok live selling strategy | not cited (2026-10-13) | Live WebSearch for "tiktok live selling strategy" adeptecom surfaced no mention of Adeptecom — results were generic LIVE-selling guides (Influencer Marketing Hub, Videowise, Startups.co.uk) and one unrelated audiobook listing. |
| 2026-09-21 | tiktok-shop-compliance-requirements-usa | tiktok shop compliance requirements usa | not cited (2026-10-14) | Live WebSearch for "tiktok shop compliance requirements usa" adeptecom surfaced only third-party compliance/eligibility guides (Alibaba SmartBuy, ComplianceGate, EchoTik, Racklify, BeBoldDigital) — no adeptecom.co citation yet. |
| 2026-09-24 | tiktok-shop-for-beauty-brands | tiktok shop for beauty brands | not cited (2026-09-29) | Live WebSearch for "tiktok shop for beauty brands adeptecom" surfaced only unrelated results (incl. an unrelated brand called "Adept Cosmetics") — no adeptecom.co citation yet. Site is ~5 weeks old; expected until domain authority builds. Re-check in a few weeks. |
| 2026-09-28 | tiktok-shop-for-supplement-brands-usa | tiktok shop for supplement brands usa | not cited (2026-10-15) | Live WebSearch for "tiktok shop for supplement brands usa" adeptecom surfaced no mention of Adeptecom — results were generic category market data and one unrelated agency press release. |
| 2026-10-01 | how-much-does-a-tiktok-shop-agency-cost | how much does a tiktok shop agency cost | not checked yet | |
| 2026-10-09 | tiktok-shop-vs-amazon-for-brands | tiktok shop vs amazon for brands | not checked yet | |
| 2026-10-09 | best-tiktok-shop-agency-for-ecommerce-brands | best tiktok shop agency for ecommerce brands | not checked yet | Q4 lead-gen push: second post published same day (commercial/bottom-funnel intent prioritized ahead of schedule — see SEO-PLAYBOOK.md Q4 note). |
| 2026-10-09 | tiktok-shop-marketing-agency-for-startups | tiktok shop marketing agency for startups | not checked yet | Q4 priority-override list item #1 (commercial/bottom-funnel intent) — third post published this cycle; routine fires more often this quarter per SEO-PLAYBOOK.md Q4 directive. |
| 2026-10-12 | questions-to-ask-before-hiring-a-tiktok-shop-agency | questions to ask before hiring a tiktok shop agency | not checked yet | Q4 priority-override list item #2 (commercial/bottom-funnel intent). |
| 2026-10-13 | tiktok-shop-agency-retainer-vs-commission-pricing | tiktok shop agency retainer vs commission pricing | not checked yet | Q4 priority-override list item #3 (commercial/bottom-funnel intent). |
| 2026-10-14 | tiktok-shop-agency-flat-fee-vs-percentage-of-gmv | tiktok shop agency flat fee vs percentage of gmv | not checked yet | Q4 priority-override list item #4 (commercial/bottom-funnel intent) — crossover-math framing, distinct angle from the 10-13 retainer-vs-commission post. |
| 2026-10-15 | tiktok-shop-partner-tsp-vs-independent-agency-cost | tiktok shop partner (tsp) vs independent agency cost | not checked yet | Q4 priority-override list item #5 (commercial/bottom-funnel intent) — TSP-certification framing distinct from the pricing-model posts (10-13, 10-14). |
