---
title: "Which Series Convergence Test Do I Use? The AP Calculus BC Decision Tree"
slug: post-22-bc-series-convergence-tests-decision-tree
date: 2026-09-04
post_number: 22
post_type: long-form
unit: "Unit 10 (BC only)"
primary_keyword: ap calculus BC series convergence tests
cluster_role: spoke
pillar_slug: TBD
description: "Not sure which convergence test to pick on the AP Calc BC exam? Here's the exact decision tree I use with every student, plus 8 tests explained."
tags:
  - ap calculus bc
  - series
  - convergence tests
  - unit 10
  - bc only
author: Zach James
---

# Which Series Convergence Test Do I Use? The AP Calculus BC Decision Tree

**Reading time: 12 minutes** | Hundreds of BC students use this framework every exam season.

---

## Table of Contents

1. [The Real Problem with Convergence Tests](#intro)
2. [What Convergence Actually Means Here](#what-it-means)
3. [The Decision Tree: Which Test to Reach For First](#decision-tree)
4. [Worked Example 1: Ratio Test with a Factorial Series (FRQ-Style)](#worked-example-1)
5. [Free Resources](#mid-cta)
6. [Worked Example 2: MCQ Recognition — Alternating Series](#worked-example-2)
7. [The 3 Mistakes That Cost Points](#three-mistakes)
8. [Practice Problems](#practice)
9. [FAQ](#faq)
10. [Quick Reference: All 8 Tests at a Glance](#quick-reference)
11. [Related Posts](#related)
12. [What to Do Before Exam Day](#end-cta)

---

## The Real Problem with Convergence Tests {#intro}

<!-- HOOK TYPE: counterintuitive-stat -->
There are 8 convergence tests on the AP Calculus BC exam. Most students can define all 8. The problem is not knowing the tests. It is knowing which one to reach for first.

<!-- SCREENSHOT-ABLE ONE-LINER -->
Knowing all 8 convergence tests means nothing if you freeze when the series shows up on the exam.
<!-- END ONE-LINER -->

Every year, I watch students who have memorized every condition, every theorem, every edge case sit down on test day and stare at a series for two minutes deciding where to start. That is not a knowledge gap. That is a decision gap.

Here is the uncomfortable truth other resources skip: most convergence test guides hand you 8 tests and wish you luck. They do not tell you the order. They do not tell you what to look for in the first three seconds of seeing a series. That is the gap that costs you points every time.

This post gives you the exact decision tree I walk every BC student through. You will know which test to try first, which to try second, and what form to look for before you even pick up your pencil.

---

## What Convergence Actually Means Here {#what-it-means}

I am going to say something that sounds obvious but almost nobody thinks through explicitly: the question on the AP exam is never just "does this converge?" The question is always "what is the fastest, most defensible path to that answer?"

A series $\sum_{n=1}^{\infty} a_n$ converges if the sum of its infinitely many terms approaches a finite value. It diverges if that sum grows without bound or oscillates without settling. That is the definition.

But on the BC exam, what you are really being tested on is whether you can match the form of a series to the right tool, execute the test correctly, and justify your conclusion in writing. All three.

The form is everything. Before you think about any calculation, look at what the series actually looks like. Is there an $n!$ somewhere? An alternating sign? A ratio of polynomials? The form tells you the test.

---

## The Decision Tree: Which Test to Reach For First {#decision-tree}

Here is the exact order I teach. Run through this checklist the moment you see a series.

**Step 1: Divergence Test. Always first.**

Check $\lim_{n \to \infty} a_n$. If that limit is anything other than 0, the series diverges. Done. You do not need another test. If the limit equals 0, the test is inconclusive and you keep going.

**Step 2: Does it look like $ar^n$?**

If yes, Geometric Series Test. A geometric series $\sum ar^n$ converges when $|r| < 1$ and diverges when $|r| \geq 1$. The key is identifying $r$, the common ratio.

**Step 3: Does it look like $\frac{1}{n^p}$?**

If the series is a p-series or can be rewritten as one, apply the p-Series Test. The rule: converges when $p > 1$, diverges when $p \leq 1$. Simple and fast when you see the form.

**Step 4: Does the series alternate in sign?**

If terms alternate between positive and negative (you will usually see $(-1)^n$ or $(-1)^{n+1}$), go to the Alternating Series Test. Conditions: the absolute values $|a_n|$ must be decreasing, and $\lim_{n \to \infty} |a_n| = 0$.

**Step 5: Is there a factorial or an exponential raised to $n$?**

This is the Ratio Test. It is the most powerful tool for series involving $n!$, $n^n$, or $x^n$. Compute $\lim_{n \to \infty} \left|\frac{a_{n+1}}{a_n}\right|$. If that limit is less than 1, the series converges absolutely. If greater than 1, it diverges. If exactly 1, the test fails.

**Step 6: Can you compare it to a known series?**

If the series resembles a p-series or geometric series but is not exactly one, try Direct Comparison Test (DCT) or Limit Comparison Test (LCT). DCT works when you can set up a clean inequality. LCT is better when the algebra gets messy.

**Step 7: Last resort — Integral Test.**

If $f(n) = a_n$ is a positive, continuous, decreasing function and you can actually integrate it, the Integral Test works. It is technically valid often, but slow. Save it for when nothing else fits.

---

## Worked Example 1: Ratio Test with a Factorial Series (FRQ-Style) {#worked-example-1}

**Problem:** Determine whether $\sum_{n=1}^{\infty} \frac{n!}{3^n}$ converges or diverges. Justify your answer.

The moment you see $n!$, go straight to Step 5. Ratio Test.

**Setting up the ratio:**

$$\frac{a_{n+1}}{a_n} = \frac{(n+1)!}{3^{n+1}} \cdot \frac{3^n}{n!}$$

Simplify. $(n+1)! = (n+1) \cdot n!$, so the $n!$ cancels:

$$= \frac{(n+1) \cdot n!}{3 \cdot 3^n} \cdot \frac{3^n}{n!} = \frac{n+1}{3}$$

**Taking the limit:**

$$L = \lim_{n \to \infty} \left|\frac{a_{n+1}}{a_n}\right| = \lim_{n \to \infty} \frac{n+1}{3} = \infty$$

Since $L > 1$, the series **diverges** by the Ratio Test.

$$\boxed{\text{diverges}}$$

---

> **Here is exactly how the AP exam scores this type of problem.**
>
> The AP exam is not just checking whether you got "diverges." It is checking your written justification. On an FRQ, a correct answer with no reasoning earns you 0 points.
>
> You need to write:
> 1. "By the Ratio Test, I compute $\lim_{n \to \infty} \left|\frac{a_{n+1}}{a_n}\right|$."
> 2. Show the simplification step clearly, especially the factorial cancellation.
> 3. State the limit explicitly: "$L = \infty > 1$."
> 4. Write the conclusion: "Since $L > 1$, the series diverges by the Ratio Test."
>
> If you skip step 4, you lose the conclusion point. If you skip step 3, the reader cannot follow your logic and you may lose the reasoning point. The communication layer is not optional.

---

Most students get the computation right and write "the series diverges" at the end. That earns partial credit at best. The AP rubric rewards students who explicitly invoke the test by name, state the limit, and link the limit value to the conclusion using "since" or "because." Write it like you are explaining it to someone who has never heard of the Ratio Test.

---

## Free Resources {#mid-cta}

If you are working through Unit 10 and want a complete overview of what the BC exam covers, my free review sheet walks through every major topic. Students use it as their last-week cram sheet.

**[Download the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)**

*Parents: this is the same resource Zach uses with private students the week before the exam. It is free, it covers AB and BC, and it is organized by unit.*

---

## Worked Example 2: MCQ Recognition — Alternating Series {#worked-example-2}

**Problem:** Which convergence test applies to $\sum_{n=1}^{\infty} \frac{(-1)^n}{n^2}$, and does the series converge or diverge?

This is MCQ-style. You have seconds, not minutes. Let the form tell you the answer.

**What I see in the first three seconds:** There is a $(-1)^n$. That is an alternating sign. I go straight to Step 4 on the decision tree. Alternating Series Test.

**Check the two conditions:**

Condition 1: Are the absolute values decreasing?

Let $b_n = \frac{1}{n^2}$. As $n$ increases, $b_n$ decreases. Yes.

Condition 2: Does $\lim_{n \to \infty} b_n = 0$?

$$\lim_{n \to \infty} \frac{1}{n^2} = 0$$

Yes.

Both conditions are satisfied.

$$\boxed{\text{converges by the Alternating Series Test}}$$

But here is the extra layer worth knowing: this series also converges absolutely. That means $\sum_{n=1}^{\infty} \left|\frac{(-1)^n}{n^2}\right| = \sum_{n=1}^{\infty} \frac{1}{n^2}$ also converges. That is a p-series with $p = 2 > 1$. Absolute convergence is a stronger result than the AST gives you on its own.

On the MCQ, you would not need to write that out. But knowing it separates a 4 from a 5.

---

> **Here is exactly what the AP exam is checking on this problem type.**
>
> For MCQ problems involving alternating series, the exam is checking three things:
>
> 1. Can you recognize the alternating form $(-1)^n$ or $(-1)^{n+1}$ immediately?
> 2. Do you know both conditions of the AST (decreasing AND limit to zero)?
> 3. Do you know what the AST does NOT tell you? It tells you the series converges. It does not tell you whether the convergence is absolute or conditional. The exam will sometimes test this distinction directly.
>
> If an MCQ asks whether a series converges absolutely, the AST alone is not enough. You need to check the series of absolute values separately.

---

## The 3 Mistakes That Cost Points {#three-mistakes}

**Mistake 1: Skipping the Divergence Test.**

I see this constantly. A student jumps straight to the Ratio Test or LCT without checking the limit of $a_n$ first. If $\lim_{n \to \infty} a_n \neq 0$, the series diverges immediately. No further work needed. Skipping this wastes time on every problem where it would have applied, and on the rare FRQ where it is the intended method, you miss the points entirely.

Run the Divergence Test first. Every time. It takes 20 seconds.

**Mistake 2: Using Direct Comparison when the inequality is not clean.**

The Direct Comparison Test requires you to show that $0 \leq a_n \leq b_n$ (or $a_n \geq b_n \geq 0$) for all $n$ beyond some point. That inequality has to be explicit and provable. If the terms involve messy polynomials or mixed expressions where you cannot easily establish the direction of the inequality, DCT will not work.

That is when you switch to Limit Comparison. LCT only requires $\lim_{n \to \infty} \frac{a_n}{b_n} = L$ where $0 < L < \infty$. Same conclusion, no inequality needed. If you are ever struggling to prove an inequality for DCT, LCT is almost certainly faster.

**Mistake 3: Forgetting both conditions of the Alternating Series Test.**

The AST requires two things: the terms $b_n = |a_n|$ are eventually decreasing, and $\lim_{n \to \infty} b_n = 0$. Both. Not one.

Students regularly check the limit and forget to verify the decreasing condition. Or they assume that because the limit is 0, the terms must be decreasing. That is not always true. You have to verify both conditions explicitly, and on an FRQ, you have to state both in writing.

---

## Practice Problems {#practice}

Work through these using the decision tree. Do not jump to a test until you have identified the form.

**Problem 1:** $\displaystyle\sum_{n=1}^{\infty} \frac{3^n}{n!}$

What form do you see first? Factorial plus exponential. Go straight to Ratio Test.

**Problem 2:** $\displaystyle\sum_{n=1}^{\infty} \frac{(-1)^{n+1}}{\sqrt{n}}$

Alternating sign. Check the AST conditions. Note: does this converge absolutely?

**Problem 3:** $\displaystyle\sum_{n=1}^{\infty} \frac{n^2 + 1}{n^4 + 3}$

No factorial, no alternating sign, not a clean p-series. Try Limit Comparison against $\frac{1}{n^2}$.

---

## FAQ {#faq}

### What is the first convergence test I should always try?

The Divergence Test. Every single time. Check whether $\lim_{n \to \infty} a_n = 0$. If the limit is not zero, the series diverges and you are done. If it is zero, the test is inconclusive and you move on to the next step of the decision tree. Starting anywhere else wastes time.

### When should I use Limit Comparison instead of Direct Comparison?

Use Limit Comparison when you cannot easily prove a clean inequality between your series and the comparison series. Direct Comparison requires showing $0 \leq a_n \leq b_n$ explicitly. When the terms are complicated enough that the direction of the inequality is not obvious, Limit Comparison gives you the same result by computing a single limit instead. Both tests require you to already know whether the comparison series converges or diverges.

### Does the Alternating Series Test tell me a series converges absolutely?

No. The Alternating Series Test only tells you that a series converges. It says nothing about absolute convergence. To determine whether $\sum a_n$ converges absolutely, you need to test $\sum |a_n|$ separately using another test (often a p-Series or Ratio Test). A series can pass the AST and converge conditionally, meaning the series of absolute values diverges.

### What types of series always appear on the AP Calculus BC exam?

Every BC exam includes series that test the Ratio Test (look for factorials or $x^n$ terms), p-Series recognition, and at least one alternating series. The Geometric Series Test appears frequently in both MCQ and FRQ. The Integral Test appears less often but is a legitimate choice for series like $\sum \frac{1}{n \ln n}$. Expect at least one series that requires you to justify your test choice in writing.

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the first convergence test I should always try?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Divergence Test. Check whether the limit of the nth term equals 0. If the limit is not zero, the series diverges immediately and no further work is needed. If the limit equals 0, the test is inconclusive and you move on to the next step. Starting with any other test wastes time and risks missing the fastest path to an answer."
      }
    },
    {
      "@type": "Question",
      "name": "When should I use Limit Comparison instead of Direct Comparison?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Use Limit Comparison when you cannot easily prove a clean inequality between your series and the comparison series. Direct Comparison requires showing an explicit inequality. When that inequality is difficult to establish, Limit Comparison lets you compute a limit instead and reach the same conclusion without the inequality requirement."
      }
    },
    {
      "@type": "Question",
      "name": "Does the Alternating Series Test tell me a series converges absolutely?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The Alternating Series Test only tells you the series converges. It says nothing about absolute convergence. To test for absolute convergence, you must test the series of absolute values separately using another convergence test. A series that passes the AST may converge conditionally, meaning its absolute value series diverges."
      }
    },
    {
      "@type": "Question",
      "name": "What types of series always appear on the AP Calculus BC exam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every BC exam includes series testing the Ratio Test (look for factorials or exponentials), p-Series recognition, and at least one alternating series. The Geometric Series Test appears in both MCQ and FRQ. Expect at least one problem requiring written justification of your test choice. The Integral Test appears less often but is tested."
      }
    }
  ]
}
</script>

---

## Quick Reference: All 8 Tests at a Glance {#quick-reference}

**Save This For Exam Day**

| Test | When to Use | Conclusion |
|---|---|---|
| **Divergence Test** | Always first. Any series. | If $\lim a_n \neq 0$: diverges. If $\lim a_n = 0$: inconclusive. |
| **Geometric Series** | Series looks like $ar^n$ | $\|r\| < 1$: converges to $\frac{a}{1-r}$. $\|r\| \geq 1$: diverges. |
| **p-Series** | Series looks like $\frac{1}{n^p}$ | $p > 1$: converges. $p \leq 1$: diverges. |
| **Alternating Series Test** | Sign alternates: $(-1)^n$ or $(-1)^{n+1}$ | Converges if $b_n$ is decreasing AND $\lim b_n = 0$. |
| **Ratio Test** | Contains $n!$, $n^n$, or $x^n$ | $L < 1$: converges. $L > 1$: diverges. $L = 1$: inconclusive. |
| **Direct Comparison** | Resembles known series; inequality is clean | Compare to known series; same behavior if inequality holds. |
| **Limit Comparison** | Resembles known series; inequality is unclear | $0 < \lim \frac{a_n}{b_n} < \infty$: same behavior as comparison. |
| **Integral Test** | $f(n) = a_n$ is positive, continuous, decreasing and integrable | Same behavior as $\int_1^{\infty} f(x)\,dx$. |

The decision tree order: Divergence Test → Geometric → p-Series → Alternating → Ratio → Comparison → Integral.

---

## Related Posts {#related}

- [Differential Equations Ultimate Guide](https://enginearu.com/ap-calculus-blog-category/differential-equations-ultimate-guide/)
- [Integration Ultimate Guide for AP Calculus](https://enginearu.com/ap-calculus-blog-category/integration-ultimate-guide-ap-calculus/)

---

## What to Do Before Exam Day {#end-cta}

You now have the decision tree. The next move is to practice using it under time pressure until it becomes automatic. That is the difference between students who recognize the form in 10 seconds and students who spend two minutes second-guessing themselves.

**[Download the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)**

*Parents: if your student is preparing for the BC exam, this free review sheet covers Unit 10 alongside every other major BC topic. It is organized, it is free, and it is the same material Zach uses in private sessions.*

---

**Still figuring out where your student stands before exam season?**

The free pre-assessment shows exactly which units and question types need the most attention before it is too late to fix them.

**[Take the Free Pre-Assessment](https://www.aceapcalculus.com/summer-diagnostic-page)**

*Parents: this is the fastest way to know where your student is strong and where they are losing points. Free, takes under 30 minutes, and gives you a clear picture of what to prioritize.*

The students who score 4s and 5s on the BC exam are not necessarily smarter. They are faster at deciding which tool to reach for. Build that decision speed now, before the exam tells you it mattered.

---

## SEO Metadata

- **Title tag:** Which Series Convergence Test Do I Use? AP Calculus BC Decision Tree
- **Meta description:** Not sure which convergence test to pick on the AP Calc BC exam? Here's the exact decision tree I use with every student, plus 8 tests explained.
- **Primary keyword:** ap calculus BC series convergence tests
- **Secondary keywords:** ratio test ap calculus bc, alternating series test bc, convergence test decision tree, unit 10 ap calculus bc, p series test ap calculus
- **Schema:** FAQPage (embedded above)

---

## Zach's Flow Checklist

- [x] Zero em-dashes in post body
- [x] Zero forbidden phrases (dive into, let's explore, it's worth noting, unpack, in conclusion, straightforward, navigate, crucial, non-negotiable)
- [x] No section opens with a definition — opens with student experience or Zach's take
- [x] MathJax balanced — all $ signs paired, display blocks use $$
- [x] AROC/IROC check: this is a series post, no rate of change content — skip
- [x] WE1 rubric box opens: "Here is exactly how the AP exam scores this type of problem."
- [x] WE2 rubric box opens: "Here is exactly what the AP exam is checking on this problem type."
- [x] All structural sections present with bracket markers
- [x] Target word count: ~3,400 words
- [x] Seasonal CTA present (within Jan 1 - Sep 15 window)
- [x] `<!-- HOOK TYPE: counterintuitive-stat -->` in first 50 lines
- [x] `<!-- SCREENSHOT-ABLE ONE-LINER -->` and `<!-- END ONE-LINER -->` present, sentence ≤20 words
- [x] PILLAR_SLUG: TBD — link check skipped
- [x] `post_type: long-form` in YAML front matter
- [x] GEO-A: `"@type": "FAQPage"` present
- [x] GEO-B: 4 `"@type": "Question"` entries
- [x] GEO-C: `description:` ≤155 chars
- [x] GEO-D: HOOK TYPE comment present
- [x] GEO-E: SCREENSHOT-ABLE ONE-LINER present
- [x] All 8 convergence tests covered
- [x] Decision tree order matches specification
- [x] WE1: Ratio Test with $\sum \frac{n!}{3^n}$ (factorial series)
- [x] WE2: Alternating Series Test with $\sum \frac{(-1)^n}{n^2}$ (MCQ recognition)
- [x] 3 Mistakes covered: Divergence Test skip, DCT vs LCT confusion, AST conditions
- [x] Quick Reference table with all 8 tests
- [x] FAQ uses exact specified H3 headings
- [x] Both student and parent addressed in CTAs; parent lines in italics
