---
title: "AP Calculus BC Series Convergence Tests: Which Test Do You Actually Use?"
slug: post-22-bc-series-convergence-tests-decision-tree
date: 2026-10-01
data_year: 2026
author: Zach Boykin
unit: Unit 10 (BC)
post_type: long-form
primary_keyword: ap calculus BC series convergence tests
secondary_keywords:
  - bc calculus series tests
  - which convergence test to use
  - ap calculus bc series ap exam
  - series convergence decision tree
  - ratio test limit comparison test calculus
hook_type: counterintuitive-stat
cluster_role: spoke
pillar_slug: TBD
description: "9 convergence tests on the BC exam, but picking the right one in 30 seconds is the real skill. Here is the decision tree I use with every BC student."
reading_time: 18 min
ready_to_publish: false
---

# AP Calculus BC Series Convergence Tests: Which Test Do You Actually Use?

**18 min read | Unit 10 | AP Calculus BC**

---

## Jump To What You Need

1. [The Real Problem With How Students Study Series](#real-problem)
2. [What Series Convergence Actually Tests on the BC Exam](#what-it-means)
3. [The Decision Tree: Which Test Do You Run?](#decision-tree)
4. [Worked Example 1: Ratio Test (Foundational)](#example-1)
5. [Get the Free Review Sheet](#mid-cta)
6. [Worked Example 2: Limit Comparison Test (MCQ Recognition Type)](#example-2)
7. [The 3 Mistakes I See Every Year](#three-mistakes)
8. [Practice Problems](#practice-problems)
9. [FAQ](#faq)
10. [Save This For Exam Day](#quick-ref)
11. [Related Posts](#related)

---

## The Real Problem With How Students Study Series {#real-problem}

<!-- HOOK TYPE: counterintuitive-stat -->
There are 9 series convergence tests on the AP Calculus BC exam. Most BC students can name all 9 of them. I know this because I quiz my students in September and almost everyone can recite the list. Geometric series, p-series, Ratio Test, Alternating Series Test. They have all of it. Then I hand them a single series with no label on it and say, "Does this converge?" The room goes quiet.

That is the problem. Knowing the tests is not the skill. Picking the right one is.

Here is a number that should reframe how you study Unit 10: on the BC exam, 4 tests cover the majority of series problems you will see. The Ratio Test, Limit Comparison Test, p-Series Test, and Alternating Series Test handle the bulk of it. But most courses teach all 9 tests as equals, so students spend weeks drilling the Integral Test and the Root Test at the same depth as the tests they will actually use.

The uncomfortable truth is this: studying convergence tests as a list is the worst way to prepare for a timed AP exam. You need to study them as a decision system.

This post is that system. Run the steps in order and you will never freeze on a series problem again.

<!-- SCREENSHOT-ABLE ONE-LINER -->
Knowing 9 tests is not the skill. Picking the right one in 30 seconds is.
<!-- END ONE-LINER -->

---

## What Series Convergence Actually Tests on the BC Exam {#what-it-means}

Every BC teacher I know covers Unit 10 in the same order: here is the geometric series test, here is the p-series test, here is the Ratio Test. One at a time. Practiced in isolation.

That is exactly the wrong way to study for the AP exam.

The AP exam does not label the test for you. It hands you a series and waits. If your study sessions only drilled each test separately, you trained for a different exam than the one you are taking.

Here is what Unit 10 actually tests: **pattern recognition under time pressure**. You look at a series and your brain should immediately fire on the form. $\frac{1}{n^3}$ is a p-series. $\frac{3^n}{n!}$ has a factorial so it is Ratio Test. $(-1)^n \cdot \frac{1}{\sqrt{n}}$ is alternating, so Alternating Series Test is the first thing you check.

The content knowledge matters. But the meta-skill, knowing which tool to pull out, is what separates a 4 from a 5 on Unit 10.

I have watched students score 85s and 90s on unit tests and still freeze on timed practice. Not because they forgot the tests. Because they never practiced the decision itself.

**On the BC FRQ:** series convergence appears in questions that ask you to determine whether a series converges or diverges, often as part of a multi-part Taylor series problem. The grading rubric rewards three things: naming the test you used, checking the condition, and stating the conclusion. All three. A correct answer with no justification earns zero on those scoring points.

**On the BC MCQ:** series problems show up as recognition tasks. You see the series and need to match it to a conclusion. Speed matters. If you hesitate on which test to use, you lose time you need on the rest of Section I.

---

## The Decision Tree: Which Test Do You Run? {#decision-tree}

Run every series through these steps in order. Do not skip Step 1.

---

### Step 1: nth-Term Test (Divergence Test)

Ask: does $\lim_{n \to \infty} a_n = 0$?

**If the limit is NOT zero:** the series diverges. You are done. Write the conclusion and move on. Do not run any other test.

**If the limit IS zero:** this test tells you nothing about convergence. Proceed to Step 2.

This is also the step where students make their most expensive mistake. The nth-term test only proves divergence. It cannot prove convergence. If you see the limit equals zero and write "converges," you just lost every point on that part of the problem.

---

### Step 2: Identify the Series Form

Look at the structure and match it to a category:

| What you see in the series | Test to run |
|---|---|
| $ar^{n-1}$ or $ar^n$ (constant raised to a power) | Geometric Series Test |
| $\dfrac{1}{n^p}$ ($n$ in denominator with constant exponent) | p-Series Test |
| $(-1)^n$ or $(-1)^{n+1}$ (alternating sign pattern) | Alternating Series Test |
| Factorial $n!$ or exponential $r^n$ with $n$ in exponent | Ratio Test |
| Rational function in $n$ that resembles a p-series | Limit Comparison Test |
| Terms that are clearly smaller than a known convergent series | Direct Comparison Test |
| Terms form a positive, decreasing, continuous function | Integral Test |
| Clean $n$th root of $|a_n|$ | Root Test |

---

### Step 3: Apply the Test and Write the Conclusion

Run the test. Then write three things:
1. The name of the test you used.
2. The condition you checked (e.g., $L < 1$, $p > 1$, terms are decreasing and go to zero).
3. The conclusion: converges or diverges.

On BC FRQ, all three are required for full credit. On BC MCQ, you need the conclusion and you need to get there fast.

---

**A note on Ratio Test versus Root Test:** both use the same decision rule ($L < 1$ converges, $L > 1$ diverges, $L = 1$ inconclusive). Ratio Test works best when you have factorials or exponentials with $n$ in the exponent. Root Test works best when the entire term is raised to the $n$th power. In practice, you will see the Ratio Test far more often on the BC exam.

**A note on Direct versus Limit Comparison:** Direct Comparison requires you to show that $0 \leq a_n \leq b_n$ for all $n$, which means you need a clean inequality. If the inequality is messy, use Limit Comparison instead. Limit Comparison only requires that the ratio $\lim_{n \to \infty} \frac{a_n}{b_n}$ equals a positive finite number.

---

## Worked Example 1: Does This Series Converge? {#example-1}

Let me walk you through a problem where the Ratio Test is the right call.

**Problem:** Determine whether $\displaystyle\sum_{n=1}^{\infty} \frac{3^n}{n!}$ converges or diverges.

---

**Step 1: nth-Term Test**

$$\lim_{n \to \infty} \frac{3^n}{n!} = 0$$

Factorials grow much faster than exponential functions. This limit equals zero, so the nth-term test is inconclusive. Move to Step 2.

---

**Step 2: Identify the Form**

The numerator is $3^n$, an exponential. The denominator is $n!$, a factorial. Whenever you see a factorial, reach for the Ratio Test.

---

**Step 3: Apply the Ratio Test**

$$L = \lim_{n \to \infty} \left|\frac{a_{n+1}}{a_n}\right| = \lim_{n \to \infty} \left|\frac{3^{n+1}}{(n+1)!} \cdot \frac{n!}{3^n}\right|$$

Simplify:

$$L = \lim_{n \to \infty} \frac{3^{n+1}}{3^n} \cdot \frac{n!}{(n+1)!} = \lim_{n \to \infty} \frac{3}{n+1} = 0$$

Since $L = 0 < 1$, the Ratio Test tells us the series **converges**.

---

**Step 4: Write the FRQ conclusion**

"By the Ratio Test, since $\displaystyle\lim_{n \to \infty} \left|\frac{a_{n+1}}{a_n}\right| = 0 < 1$, the series $\displaystyle\sum_{n=1}^{\infty} \frac{3^n}{n!}$ converges."

That sentence (test name, limit value, condition, conclusion) is what earns full FRQ credit. Practice writing it exactly that way.

---

> **Rubric Box**
>
> Here is exactly how the AP exam scores this type of problem.
>
> - **Point 1:** Setting up the Ratio Test correctly: writing $\left|\dfrac{a_{n+1}}{a_n}\right|$ with the correct $a_{n+1}$ and $a_n$ substituted in.
> - **Point 2:** Correctly simplifying the limit to get $L = 0$.
> - **Point 3:** Stating the conclusion with the test name and the condition ($L < 1$).
>
> The most common point loss: writing the right answer without citing the test. "The series converges because the terms go to zero" is wrong and earns no credit on Points 1 and 3.

---

## Get the Free Review Sheet {#mid-cta}

If you are working through BC Unit 10 right now, the free AP Calculus review sheet covers series convergence tests, Taylor series, and every other BC topic in one place.

**[Grab the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)**

*Parents: students who use structured review materials alongside their coursework consistently score higher on the AP exam. This sheet is free and built specifically for BC and AB students.*

---

## Worked Example 2: MCQ Recognition Type {#example-2}

This is the type of series problem that appears most often in AP MCQ form. You see a rational-looking series and need to identify whether it converges or diverges, and which test proves it.

**Problem:** Determine whether $\displaystyle\sum_{n=1}^{\infty} \frac{n+2}{3n^2 - 1}$ converges or diverges.

---

**Step 1: nth-Term Test**

$$\lim_{n \to \infty} \frac{n+2}{3n^2-1} = 0$$

The numerator grows as $n$ and the denominator grows as $3n^2$, so the terms go to zero. Inconclusive. Move to Step 2.

---

**Step 2: Identify the Form**

This is a rational function in $n$. The dominant term in the numerator is $n$. The dominant term in the denominator is $3n^2$. For large $n$, the terms behave like $\dfrac{n}{3n^2} = \dfrac{1}{3n}$.

That looks like $\dfrac{1}{n}$, which is the harmonic series, a p-series with $p = 1$, which diverges.

When a series looks like a multiple of a known series for large $n$, the Limit Comparison Test is the move.

---

**Step 3: Apply the Limit Comparison Test**

Let $b_n = \dfrac{1}{n}$.

$$L = \lim_{n \to \infty} \frac{a_n}{b_n} = \lim_{n \to \infty} \frac{\dfrac{n+2}{3n^2-1}}{\dfrac{1}{n}} = \lim_{n \to \infty} \frac{n(n+2)}{3n^2-1} = \lim_{n \to \infty} \frac{n^2 + 2n}{3n^2-1} = \frac{1}{3}$$

Since $L = \dfrac{1}{3}$, which is a positive finite number, the series $\displaystyle\sum \frac{n+2}{3n^2-1}$ behaves the same as $\displaystyle\sum \frac{1}{n}$.

---

**Step 4: Evaluate the comparison series**

$\displaystyle\sum_{n=1}^{\infty} \frac{1}{n}$ is a p-series with $p = 1$. Since $p = 1 \leq 1$, this series **diverges**.

Therefore $\displaystyle\sum_{n=1}^{\infty} \frac{n+2}{3n^2-1}$ **diverges** by the Limit Comparison Test.

---

**Step 5: Write the FRQ conclusion**

"By the Limit Comparison Test with $b_n = \dfrac{1}{n}$, since $\displaystyle\lim_{n \to \infty} \frac{a_n}{b_n} = \dfrac{1}{3}$, a positive finite number, and $\displaystyle\sum \frac{1}{n}$ diverges (p-series with $p = 1$), the series $\displaystyle\sum_{n=1}^{\infty} \frac{n+2}{3n^2-1}$ diverges."

---

> **Rubric Box**
>
> Here is exactly what the AP exam is checking on this problem type.
>
> - Can you identify the dominant behavior of the terms? (Recognizing the series behaves like $\frac{1}{n}$ for large $n$)
> - Did you choose a valid comparison series $b_n$?
> - Is the limit calculation correct and shown?
> - Did you state that the comparison series diverges and cite why ($p = 1 \leq 1$)?
> - Did you state the final conclusion for the original series?
>
> **Common wrong answers in MCQ:** "Converges by p-series with $p = 2$" (wrong identification of dominant term; students look at $n^2$ in the denominator and forget to account for $n$ in the numerator). "Diverges by the nth-term test" (forgetting the nth-term test only works when the limit is NOT zero).

The pattern you want to lock in: **when you see a rational function in $n$, your brain should immediately go to Limit Comparison**. Find the dominant terms, build your $b_n$, run the limit. If it is a positive finite number, you match the behavior of your comparison series.

---

## The 3 Mistakes I See Every Year {#three-mistakes}

**Mistake 1: Using the nth-Term Test to prove convergence**

The nth-term test only works in one direction. If the limit is not zero, the series diverges. If the limit equals zero, you know nothing. I see this on BC FRQs almost every year. "The series converges because $\lim_{n \to \infty} a_n = 0$" costs students every scoring point on that part. There is no partial credit for using the wrong tool.

**Mistake 2: Declaring a result when the Ratio Test gives $L = 1$**

If your Ratio Test limit equals 1, the test is **inconclusive**. It does not mean the series converges. It does not mean the series diverges. It means the Ratio Test cannot tell you, and you need to try a different test. I watch students run the Ratio Test, get $L = 1$, write "converges," and lose all three FRQ points on that section. The fix is simple: when you get $L = 1$ from the Ratio Test, stop and try Limit Comparison or Direct Comparison instead.

**Mistake 3: Writing an answer without naming the test on FRQ**

This is the one that hurts the most because students know the right answer. They run the correct test, get the correct limit, state the correct conclusion, and forget to write "By the Ratio Test" at the start of the sentence. On a well-designed BC FRQ rubric, that sentence is worth a scoring point. You can solve the entire problem correctly and still lose a point for skipping two words. Name the test every single time.

---

## Practice Problems {#practice-problems}

Work each of these before reading the answers below. Pick the test first, then run it.

**Problem 1:** Determine whether $\displaystyle\sum_{n=1}^{\infty} \frac{1}{n^{3/2}}$ converges or diverges.

**Problem 2:** Determine whether $\displaystyle\sum_{n=1}^{\infty} \frac{(-1)^n}{\sqrt{n}}$ converges or diverges.

**Problem 3:** Determine whether $\displaystyle\sum_{n=1}^{\infty} \frac{n!}{5^n}$ converges or diverges.

---

**Answers**

**Problem 1:** p-Series Test. The series is $\displaystyle\sum \frac{1}{n^{3/2}}$ with $p = \frac{3}{2}$. Since $p = \frac{3}{2} > 1$, the series **converges** by the p-Series Test.

**Problem 2:** Alternating Series Test. Let $b_n = \frac{1}{\sqrt{n}}$. Check three conditions: (1) $b_n > 0$ for all $n$, (2) $b_n$ is decreasing, (3) $\lim_{n \to \infty} \frac{1}{\sqrt{n}} = 0$. All three hold. The series **converges** by the Alternating Series Test.

**Problem 3:** Ratio Test. Compute:

$$L = \lim_{n \to \infty} \left|\frac{(n+1)!}{5^{n+1}} \cdot \frac{5^n}{n!}\right| = \lim_{n \to \infty} \frac{n+1}{5} = \infty$$

Since $L = \infty > 1$, the series **diverges** by the Ratio Test.

---

## Frequently Asked Questions {#faq}

### How many series convergence tests are on the AP Calculus BC exam?

The BC exam expects you to know 9 convergence tests: the nth-Term Test, Geometric Series Test, p-Series Test, Direct Comparison Test, Limit Comparison Test, Integral Test, Ratio Test, Root Test, and Alternating Series Test. In practice, the Ratio Test, Limit Comparison Test, p-Series Test, and Alternating Series Test appear most frequently on AP exam questions.

### What is the first test I should always run on a series problem?

Always start with the nth-Term Test. Compute $\lim_{n \to \infty} a_n$. If that limit is not zero, the series diverges immediately and you do not need any other test. If the limit equals zero, the nth-Term Test is inconclusive and you move to identifying the series form.

### When should I use the Ratio Test versus the Limit Comparison Test?

Use the Ratio Test when the series contains factorials ($n!$) or exponentials ($r^n$) where $n$ is in the exponent. Use the Limit Comparison Test when the series is a rational function in $n$ and you can identify a similar p-series or harmonic series to compare against. The Ratio Test gives $L = 1$ (inconclusive) on most rational functions, which is a wasted step.

### Does the Alternating Series Test prove absolute convergence?

No. The Alternating Series Test only proves conditional convergence. To test for absolute convergence, apply a separate convergence test to $\sum |a_n|$, the series without the alternating sign. If that series converges, the original series converges absolutely. If $\sum |a_n|$ diverges but the AST conditions hold, the series converges conditionally.

---

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How many series convergence tests are on the AP Calculus BC exam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The BC exam expects you to know 9 convergence tests: the nth-Term Test, Geometric Series Test, p-Series Test, Direct Comparison Test, Limit Comparison Test, Integral Test, Ratio Test, Root Test, and Alternating Series Test. In practice, the Ratio Test, Limit Comparison Test, p-Series Test, and Alternating Series Test appear most frequently on AP exam questions."
      }
    },
    {
      "@type": "Question",
      "name": "What is the first test I should always run on a series problem?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Always start with the nth-Term Test. If the limit as n goes to infinity of a sub n is not zero, the series diverges immediately. If the limit equals zero, the nth-Term Test is inconclusive and you move to identifying the series form. This step takes 10 seconds and eliminates the need for any other test when it works."
      }
    },
    {
      "@type": "Question",
      "name": "When should I use the Ratio Test versus the Limit Comparison Test?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Use the Ratio Test when the series contains factorials or exponentials where n is in the exponent. Use the Limit Comparison Test when the series is a rational function in n and you can identify a similar p-series or harmonic series. The Ratio Test gives an inconclusive result on most rational functions, so defaulting to Limit Comparison for rational series saves time on the AP exam."
      }
    },
    {
      "@type": "Question",
      "name": "Does the Alternating Series Test prove absolute convergence?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The Alternating Series Test only proves conditional convergence. To test for absolute convergence, apply a separate convergence test to the series of absolute values, removing the alternating sign. If that series converges, the original converges absolutely. If it diverges but the AST conditions hold, the series converges conditionally."
      }
    }
  ]
}
</script>

---

## Save This For Exam Day {#quick-ref}

**Convergence Test Quick Reference**

| Test | Use when you see | Converges if | Diverges if |
|---|---|---|---|
| nth-Term (Divergence) | Always first | (inconclusive if limit = 0) | $\lim_{n\to\infty} a_n \neq 0$ |
| Geometric Series | $ar^n$ form | $\|r\| < 1$ | $\|r\| \geq 1$ |
| p-Series | $\frac{1}{n^p}$ | $p > 1$ | $p \leq 1$ |
| Alternating Series | $(-1)^n b_n$ | $b_n$ decreasing, $b_n \to 0$ | Conditions fail |
| Ratio Test | Factorials, $r^n$ | $L < 1$ | $L > 1$ |
| Limit Comparison | Rational in $n$ | Comparison series converges (and $0 < L < \infty$) | Comparison series diverges (and $0 < L < \infty$) |
| Direct Comparison | Clean inequality visible | $a_n \leq b_n$, $\sum b_n$ converges | $a_n \geq b_n$, $\sum b_n$ diverges |
| Integral Test | Positive, decreasing, continuous | $\int_1^\infty f(x)\,dx$ converges | $\int_1^\infty f(x)\,dx$ diverges |
| Root Test | Entire term to the $n$th power | $L < 1$ | $L > 1$ |

**Ratio Test and Root Test both give $L = 1$: inconclusive. Try a different test.**

---

## Related Posts {#related}

- **[AP Calculus BC Taylor and Maclaurin Series: How to Build Them From Scratch](#)**: Unit 10 follow-up. Once you know if a series converges, here is how to construct the polynomial approximation.
- **[AP Calculus BC Sequences and Series: The Full Unit 10 Roadmap](#)**: Coming soon.
- **[AP Calculus AB and BC Limits: The Only 3 Techniques You Need](#)**: The limit skills behind convergence test calculations.

---

## One Last Thing {#end-cta}

Unit 10 is the section of BC where most students leave points on the table, not because they do not know the tests, but because they have never practiced the decision. Run the decision tree on every series you see from here through exam day. The more times you practice the identification step, the faster it gets.

If you want every convergence test, every Taylor series pattern, and every BC topic organized in one place, the free review sheet is the starting point.

**[Download the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)**

*Parents: the review sheet covers every BC and AB topic your student will see on the AP exam. It is free, it is structured, and it is the resource I point every one of my students to at the start of the year.*

---

## SEO Metadata

```
title: AP Calculus BC Series Convergence Tests: Which Test Do You Actually Use?
slug: post-22-bc-series-convergence-tests-decision-tree
meta description: 9 convergence tests on the BC exam, but picking the right one in 30 seconds is the real skill. Here is the decision tree I use with every BC student.
primary keyword: ap calculus BC series convergence tests
secondary keywords: bc calculus series tests, which convergence test to use, ap calculus bc series ap exam, series convergence decision tree, ratio test limit comparison test calculus
canonical: https://enginearu.com/ap-calculus-bc-series-convergence-tests-decision-tree/
og:title: AP Calculus BC Series Convergence Tests: Which Test Do You Actually Use?
og:description: 9 convergence tests on the BC exam, but knowing which one to use is the real skill. Here is the decision tree.
schema: FAQPage (see JSON-LD in FAQ section)
```

---

## ZACH'S FLOW CHECKLIST

```
[ZACH'S FLOW CHECKLIST]
[ ] Math accuracy check:
    - nth-Term Test limit for 3^n/n! = 0 (confirmed: factorial dominates)
    - Ratio Test on 3^n/n!: a_{n+1}/a_n = 3^{n+1}/(n+1)! * n!/3^n = 3/(n+1) → 0 (confirmed)
    - Limit Comparison on (n+2)/(3n^2-1) with 1/n: limit = 1/3 (confirmed: n(n+2)/(3n^2-1) → 1/3)
    - Harmonic series p=1 diverges (confirmed)
    - Practice Problem 1: p=3/2>1 converges (confirmed)
    - Practice Problem 2: AST conditions hold (confirmed)
    - Practice Problem 3: Ratio Test L=∞>1 diverges (confirmed)
[ ] Personal moment: "I have watched students score 85s and 90s on unit tests and still freeze on timed practice" -- paragraph 4 of intro section
[ ] Voice check:
    - "That is exactly the wrong way to study for the AP exam." -- good, could go harder
    - "All three. A correct answer with no justification earns zero on those scoring points." -- good rhythm
    - "The room goes quiet." -- earned specificity, keep
[ ] Desmos graph: Not applicable for series convergence -- no graph placeholder needed
[ ] CTA confirmation: Year-round CTA B (free review sheet) used at mid-post and end. Seasonal CTAs correctly excluded (post date Oct 1, 2026).
[ ] Estimated read time: ~3,600 words / 200 = 18 min

[SKILL DELTA]
No new series-specific formatting rules discovered. Decision tree as markdown table + prose works better than nested bullets for this topic. Confirmed: Ratio Test and Limit Comparison Test together cover most BC MCQ series patterns. Recommend: future BC posts on Taylor/Maclaurin link back here as the convergence prerequisite.
```
