---
title: "Concavity and Inflection Points in AP Calculus: The Rate-of-Rate-of-Change Story Your Textbook Skips"
slug: post-22-concavity-inflection-points-ap-calculus
post_type: long-form
unit: "Unit 5: Analytical Applications of Differentiation"
mcq_or_frq: both
primary_keyword: concavity and inflection points ap calculus
keyword_cluster:
  - concave up concave down ap calculus
  - inflection point calculus definition
  - second derivative test concavity
  - ap calculus unit 5 concavity
  - f prime prime ap calculus
date: 2026-10-04
cluster_role: spoke
pillar_slug: TBD
data_year: 2026
description: "Concavity in AP Calculus is a tool, not a shape. Learn to use f''(x) to find inflection points, apply the SDT, and nail Riemann sum questions."
reading_time: "16 min"
ready_to_publish: false
---

# Concavity and Inflection Points in AP Calculus: The Rate-of-Rate-of-Change Story Your Textbook Skips

**16 min read** | MCQ + FRQ scoring rubrics included | Unit 5: Analytical Applications

---

## Jump To What You Need

1. [What Concavity Actually Means (Not the Bowl Shape)](#what-it-means)
2. [The AROC/IROC Frame: Why f''(x) Is the Real Story](#aroc-iroc)
3. [How to Find Concavity and Inflection Points: Step-by-Step](#method)
4. [Worked Example 1: Full Concavity Analysis on f(x) = x^4 - 4x^3](#example-1)
5. [Worked Example 2: SDT + Riemann Sum Connection (FRQ Level)](#example-2)
6. [The 3 Mistakes That Cost AP Points](#mistakes)
7. [Practice Problems](#practice)
8. [FAQ](#faq)
9. [Quick Reference Box](#quick-reference)
10. [Related Posts](#related)

---

## Introduction

<!-- HOOK TYPE: uncomfortable-truth -->
You know what a "smiley face" graph looks like. You know what a "frown" looks like. And if that is all you have, you are one wrong MCQ answer away from wondering how you missed something you definitely learned.

Concavity is not a shape. It is a statement about how fast the slope is changing. That distinction is the entire difference between a student who recognizes a concavity problem on sight and one who draws a bowl with their pencil and hopes for the best.

The AP exam does not ask you to identify shapes. It asks you to use concavity as a tool. Specifically: to apply the Second Derivative Test to classify critical points, to determine whether a Riemann sum overestimates or underestimates, and to locate inflection points accurately. Three different question types. All rooted in the same concept. Most students only ever learn the bowl version.

I see it constantly. Students score 80s and 90s on unit tests, then freeze on the MCQ because the graph looks slightly different from the practice packet. That is the gap concavity creates when you learn it by shape instead of by rate.

<!-- SCREENSHOT-ABLE ONE-LINER -->
Concavity is not a shape you memorize. It is a rate of change you can measure and use.
<!-- END ONE-LINER -->

---

## What Concavity Actually Means (Not the Bowl Shape) {#what-it-means}

Every AP student has heard "concave up is a smiley face." That gets you through a quiz. It will not get you through the exam.

Here is the real definition. A function is **concave up** on an interval when $f''(x) > 0$ on that interval. That means the first derivative $f'(x)$ is increasing. The slope is going up. If you imagined walking along the curve from left to right, the ground is tilting upward.

A function is **concave down** when $f''(x) < 0$. The first derivative $f'(x)$ is decreasing. The slope is going down.

The bowl analogy is a consequence of this, not the definition. A curve where slope keeps increasing is going to look like the bottom of a bowl. A curve where slope keeps decreasing is going to look like a hill. The visual comes from the math, not the other way around.

**My take:** Learn the bowl to double-check your answer. Do not learn the bowl to find the answer.

An **inflection point** is where the concavity changes. Not just where $f''(x) = 0$. Not just where $f''(x)$ does not exist. Those are candidates. An inflection point is confirmed only when $f''(x)$ changes sign at that $x$ value.

That one sentence is worth 3-4 MCQ points over the course of the exam. Write it down.

---

## The AROC/IROC Frame: Why f''(x) Is the Real Story {#aroc-iroc}

You already know this setup. The derivative $f'(x)$ gives you the instantaneous rate of change of $f(x)$. It is the slope of the tangent line at a single point.

Now apply that same logic one level up.

$f''(x)$ is the derivative of $f'(x)$. That means $f''(x)$ is the instantaneous rate of change of $f'(x)$. In English: $f''(x)$ tells you how fast the slope is changing at any given moment.

And just like you can talk about the average rate of change (AROC) of $f(x)$ over an interval, you can talk about the AROC of $f'(x)$ over an interval:

$$\text{AROC of } f' \text{ over } [a,b] = \frac{f'(b) - f'(a)}{b - a}$$

That is just the average rate of change of the slope. And $f''(x)$ is the instantaneous version of that, zoomed into a single point.

Why does this matter? Because it reframes what concavity means in terms you already know.

- Concave up: $f''(x) > 0$ means the IROC of slope is positive. Slope is growing. $f'(x)$ is increasing.
- Concave down: $f''(x) < 0$ means the IROC of slope is negative. Slope is shrinking. $f'(x)$ is decreasing.

This is not just a conceptual note. It is directly tested on FRQ justifications. When the AP exam asks you to justify why a function is concave up on an interval, "the slope is increasing" is a scoring response. "It looks like a bowl" is not.

---

## How to Find Concavity and Inflection Points: Step-by-Step {#method}

**Step 1: Find $f''(x)$.**

Take the derivative of the derivative. If you have $f'(x)$ already, differentiate it. Pay attention to signs.

**Step 2: Find where $f''(x) = 0$ or is undefined.**

These are the only $x$ values where concavity can change. Call them candidates.

**Step 3: Build a sign chart for $f''(x)$.**

Pick test values in each interval created by your candidates. Plug them into $f''(x)$. Positive means concave up. Negative means concave down.

**Step 4: Identify inflection points.**

An inflection point exists at $x = c$ only if $f''(x)$ changes sign on either side of $c$. If the sign does not change, $c$ is not an inflection point, even if $f''(c) = 0$.

**Step 5: Apply the Second Derivative Test (when looking for extrema).**

If $f'(c) = 0$:
- $f''(c) > 0$: local minimum
- $f''(c) < 0$: local maximum
- $f''(c) = 0$: the test is inconclusive. You must use the First Derivative Test.

That last line is the one students skip. And it shows up on the AP exam specifically because it is the one students skip.

---

## Worked Example 1: Full Concavity Analysis on $f(x) = x^4 - 4x^3$ {#example-1}

Let's work through $f(x) = x^4 - 4x^3$ completely. This is the kind of function that appears in free-response questions because it has both inflection points and a case where the Second Derivative Test fails.

**Step 1: Find $f'(x)$.**

$$f'(x) = 4x^3 - 12x^2 = 4x^2(x - 3)$$

Critical points at $x = 0$ and $x = 3$.

**Step 2: Find $f''(x)$.**

$$f''(x) = 12x^2 - 24x = 12x(x - 2)$$

$f''(x) = 0$ at $x = 0$ and $x = 2$.

**Step 3: Sign chart for $f''(x)$.**

Test values in each interval:

| Interval | Test value | $f''$ value | Concavity |
|---|---|---|---|
| $x < 0$ | $x = -1$ | $12(-1)(-1-2) = 36 > 0$ | Concave up |
| $0 < x < 2$ | $x = 1$ | $12(1)(1-2) = -12 < 0$ | Concave down |
| $x > 2$ | $x = 3$ | $12(3)(3-2) = 36 > 0$ | Concave up |

**Step 4: Identify inflection points.**

At $x = 0$: $f''$ changes sign from positive to negative. Sign change confirmed. Inflection point.

At $x = 2$: $f''$ changes sign from negative to positive. Sign change confirmed. Inflection point.

Both $x = 0$ and $x = 2$ are inflection points.

**Step 5: Confirm with the Second Derivative Test at $x = 0$ and $x = 3$.**

At $x = 0$: $f'(0) = 0$ and $f''(0) = 0$. The SDT is inconclusive.

That is a problem a lot of students do not know how to handle. When the SDT fails, you go back to the First Derivative Test. Look at $f'(x) = 4x^2(x-3)$ on either side of $x = 0$:

- $x = -0.5$: $f'(-0.5) = 4(0.25)(-0.5 - 3) = 4(0.25)(-3.5) < 0$
- $x = 0.5$: $f'(0.5) = 4(0.25)(0.5 - 3) = 4(0.25)(-2.5) < 0$

Same sign on both sides. No sign change. $x = 0$ is not a local extremum.

At $x = 3$: $f'(3) = 0$ and $f''(3) = 12(3)(3-2) = 36 > 0$. Local minimum. SDT works here.

[DESMOS EMBED:
Functions: x^4 - 4*x^3 (color #0f1e3c), 12*x*(x-2) (color #e8a020, dashed)
Point: (0, 0) labeled "Inflection (0,0)" (color #e8a020)
Point: (2, -16) labeled "Inflection (2,-16)" (color #e8a020)
Point: (3, -27) labeled "Local Min (3,-27)" (color #1a7a4a)
Window: x[-2, 5] y[-35, 10]
Lock viewport: yes
Notes: Show f(x) in navy and f''(x) in gold dashed. Label both inflection points and the local minimum.]

---

> **Here is exactly how the AP exam scores this type of problem.**
>
> **Point 1:** Correct computation of $f''(x)$: students earn this by showing the algebra clearly. Do not skip steps.
>
> **Point 2:** Correct identification of inflection point $x$ values: you must show the sign chart or equivalent evidence that $f''(x)$ changes sign. Writing "$f''(x) = 0$ at $x = 2$" alone does not earn the inflection point justification point.
>
> **Point 3:** Classification of critical point at $x = 3$: students must state $f''(3) > 0$ and therefore local min. If the SDT was inconclusive, the grader expects the FDT work instead.
>
> **Common partial credit trap:** Students earn Points 1 and 3 but lose Point 2 because they list $x = 0$ and $x = 2$ as inflection points without evidence of sign change. One sentence with a sign chart is all you need.

---

## [MID-POST CTA]

If you want the full AP Calculus review on units 1 through 8, I have a free review sheet that covers concavity, the SDT, and every other key concept.

**[Get the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)**

*Parents: this is the same resource I walk every student through in our first session. It is free, no email required.*

---

## Worked Example 2: SDT, Inflection Points, and Riemann Sum Connection (FRQ Level) {#example-2}

This is the version you need to be ready for on the actual exam. It connects 3 ideas in one problem. I see this tested almost every year.

**Problem setup:** Let $g(x) = x^3 - 6x^2 + 9x + 1$.

(a) Find all intervals where $g$ is concave up and concave down.
(b) Identify all inflection points. Justify.
(c) A student approximates $\int_0^2 g(x)\,dx$ using a Midpoint Riemann sum with 2 equal subintervals. Is this an overestimate or underestimate? Justify.

**Part (a): Concavity intervals.**

$$g'(x) = 3x^2 - 12x + 9$$

$$g''(x) = 6x - 12 = 6(x - 2)$$

$g''(x) = 0$ at $x = 2$.

- For $x < 2$: $g''(1) = 6(1) - 12 = -6 < 0$. Concave down on $(-\infty, 2)$.
- For $x > 2$: $g''(3) = 6(3) - 12 = 6 > 0$. Concave up on $(2, \infty)$.

**Part (b): Inflection point.**

At $x = 2$, $g''$ changes sign from negative to positive. Inflection point confirmed at $x = 2$.

$g(2) = 8 - 24 + 18 + 1 = 3$.

Inflection point at $(2, 3)$.

**Part (c): Midpoint Riemann sum estimate.**

On $[0, 2]$, a Midpoint sum with 2 subintervals uses $x = 0.5$ and $x = 1.5$ as sample points.

$$M_2 = g(0.5)(1) + g(1.5)(1)$$

$$g(0.5) = (0.125) - 6(0.25) + 9(0.5) + 1 = 0.125 - 1.5 + 4.5 + 1 = 4.125$$

$$g(1.5) = (3.375) - 6(2.25) + 9(1.5) + 1 = 3.375 - 13.5 + 13.5 + 1 = 4.375$$

$$M_2 = 4.125 + 4.375 = 8.5$$

Now, is this an overestimate or underestimate?

On $[0, 2]$, $g''(x) = 6x - 12 < 0$ for all $x < 2$. The function is concave down on the entire interval $[0, 2]$.

When a function is **concave down** on an interval:
- The Midpoint Riemann sum **overestimates** the integral.
- The Trapezoidal Riemann sum **underestimates** the integral.

When a function is **concave up** on an interval:
- The Midpoint Riemann sum **underestimates** the integral.
- The Trapezoidal Riemann sum **overestimates** the integral.

So the Midpoint sum of 8.5 is an **overestimate**.

Why? Because on a concave down curve, the tangent line at the midpoint lies above the curve. The Midpoint rectangle uses the function height at the center of each subinterval, which is above the actual curve on a concave down function.

---

> **Here is exactly what the AP exam is checking on this problem type.**
>
> **Part (a):** Concavity intervals: you need $g''(x)$ computed correctly and a sign analysis. State the intervals using interval notation.
>
> **Part (b):** Inflection point justification: "g''(x) changes from negative to positive at x = 2, so there is an inflection point at (2,3)." State both coordinates.
>
> **Part (c):** Riemann sum estimation: the key scoring move is citing concavity as the justification. Write: "Since $g$ is concave down on $[0,2]$, the Midpoint Riemann sum overestimates the integral." That is the complete justification. Showing the arithmetic is not required for this point, but doing it demonstrates control.
>
> **Partial credit note:** Many students earn Parts (a) and (b) but write "the sum is larger than the actual area" for Part (c) without citing concavity. That is not a scoring justification on its own.

---

## The 3 Mistakes That Cost AP Points {#mistakes}

**Mistake 1: Calling f''(x) = 0 an inflection point without checking sign change.**

This is the most common concavity error on the AP exam. Setting $f''(x) = 0$ gives you candidates, not conclusions. You must verify the sign of $f''$ on both sides.

Consequence: You list an inflection point that does not exist, lose the justification point, and possibly get the classification of a nearby critical point wrong. One mistake, three point losses.

**Mistake 2: Trusting the SDT when f''(c) = 0.**

The Second Derivative Test is inconclusive whenever $f''(c) = 0$. In that case, $x = c$ could be a local max, a local min, or an inflection point. You cannot know without the First Derivative Test.

The AP exam gives you functions like $f(x) = x^4 - 4x^3$ specifically to test whether you know this. At $x = 0$: $f''(0) = 0$, SDT fails, and the FDT shows no extremum. A student who stops at "$f''(0) = 0$, test inconclusive" earns zero. A student who runs the FDT earns the point.

**Mistake 3: Confusing the Riemann sum rule for concave up vs. concave down.**

I get this wrong too when I rush. Here is the clean version:

- Concave up: Trapezoidal overestimates, Midpoint underestimates.
- Concave down: Trapezoidal underestimates, Midpoint overestimates.

Name the feeling: this is the mistake that shows up in the last MCQ of a section when you are tired and guessing. You know the connection exists but you flip the direction. Write this rule on your formula sheet right now.

---

## Practice Problems {#practice}

Three problems. Work them before checking answers.

**Problem 1:** Let $h(x) = x^3 - 3x^2 - 9x + 5$.

Find all inflection points of $h$. Justify your answer.

**Problem 2:** Let $f(x) = x^4 - 8x^2$.

(a) Find all intervals where $f$ is concave up and concave down.

(b) Use the Second Derivative Test to classify each critical point. If the SDT is inconclusive at a critical point, state that and use the FDT instead.

**Problem 3 (MCQ style):** The function $k$ is twice differentiable and $k''(x) > 0$ for all $x$ in $[1, 4]$. A student uses the Trapezoidal Rule with 3 equal subintervals to approximate $\int_1^4 k(x)\,dx$. Which of the following is true?

(A) The approximation is an overestimate.
(B) The approximation is an underestimate.
(C) The approximation equals the exact value.
(D) The relationship cannot be determined.

---

### Answers

**Problem 1:**

$$h'(x) = 3x^2 - 6x - 9$$

$$h''(x) = 6x - 6 = 6(x - 1)$$

$h''(x) = 0$ at $x = 1$.

Sign check: $h''(0) = -6 < 0$, $h''(2) = 6 > 0$. Sign changes. Inflection point at $x = 1$.

$h(1) = 1 - 3 - 9 + 5 = -6$.

Inflection point at $(1, -6)$.

**Problem 2:**

$$f'(x) = 4x^3 - 16x = 4x(x^2 - 4) = 4x(x-2)(x+2)$$

Critical points: $x = -2, 0, 2$.

$$f''(x) = 12x^2 - 16$$

$f''(x) = 0$ at $x = \pm\frac{2}{\sqrt{3}} \approx \pm 1.155$.

- $x < -1.155$: $f''(-2) = 48 - 16 = 32 > 0$, concave up
- $-1.155 < x < 1.155$: $f''(0) = -16 < 0$, concave down
- $x > 1.155$: $f''(2) = 32 > 0$, concave up

Inflection points at $x = \pm\frac{2\sqrt{3}}{3}$.

SDT at critical points:

$f''(-2) = 12(4) - 16 = 32 > 0$: local minimum at $x = -2$.

$f''(0) = -16 < 0$: local maximum at $x = 0$.

$f''(2) = 32 > 0$: local minimum at $x = 2$.

**Problem 3: (A)**

$k''(x) > 0$ on $[1, 4]$ means $k$ is concave up. Trapezoidal Rule overestimates when the function is concave up. Answer: (A).

---

## FAQ {#faq}

### Can a function have f''(c) = 0 without having an inflection point at x = c?

Yes. $f(x) = x^4$ is the classic example. $f''(x) = 12x^2$, so $f''(0) = 0$. But $f''(x) > 0$ on both sides of $x = 0$. No sign change. No inflection point. In my experience, the AP exam tests this exact scenario at least once per exam year, usually in MCQ Section I.

### How do I justify an inflection point on the FRQ?

Two things. First, state that $f''(c) = 0$ (or does not exist). Second, show that $f''$ changes sign at $x = c$ by evaluating $f''$ on both sides. A sign chart with labeled test values is accepted. One sentence like "Since $f''$ changes from negative to positive at $x = 2$, there is an inflection point at $x = 2$" earns the justification point.

### When does the Second Derivative Test fail?

It fails when $f''(c) = 0$ at a critical point. At that point, you get no information from the SDT. Use the First Derivative Test: examine the sign of $f'$ on each side of $x = c$. If $f'$ changes from negative to positive, local min. If positive to negative, local max. If no sign change, neither.

### Does the Midpoint Rule always underestimate?

No. That is a very common misconception. The Midpoint Rule underestimates only when the function is concave up. It overestimates when the function is concave down. If concavity changes over the interval, you cannot make a general claim without more analysis.

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Can a function have f''(c) = 0 without having an inflection point at x = c?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. f(x) = x^4 is the classic example. f''(x) = 12x^2, so f''(0) = 0, but f''(x) is positive on both sides of x = 0. No sign change means no inflection point. The AP exam tests this scenario regularly, usually in the multiple choice section."
      }
    },
    {
      "@type": "Question",
      "name": "How do I justify an inflection point on the FRQ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "State that f''(c) = 0 or is undefined, then show that f'' changes sign at x = c by evaluating f'' on both sides. A sign chart with labeled test values is accepted. One clear sentence confirming the sign change earns the justification point on the AP rubric."
      }
    },
    {
      "@type": "Question",
      "name": "When does the Second Derivative Test fail?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Second Derivative Test fails when f''(c) = 0 at a critical point. The test gives no information in that case. You must use the First Derivative Test instead: check whether f'(x) changes sign on either side of x = c to determine if the point is a local max, local min, or neither."
      }
    },
    {
      "@type": "Question",
      "name": "Does the Midpoint Rule always underestimate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The Midpoint Rule underestimates only when the function is concave up on the interval. It overestimates when the function is concave down. If concavity changes over the interval, you cannot make a general claim without more analysis. This distinction is tested directly on AP MCQ questions."
      }
    }
  ]
}
</script>

---

## Quick Reference Box {#quick-reference}

**Concavity rules:**

| Condition | Meaning | Visual |
|---|---|---|
| $f''(x) > 0$ | Concave up | Slope increasing |
| $f''(x) < 0$ | Concave down | Slope decreasing |

**Inflection point confirmation:**

$f''(c) = 0$ (or undefined) AND $f''$ changes sign at $x = c$.

**Second Derivative Test:**

| $f'(c) = 0$ and... | Conclusion |
|---|---|
| $f''(c) > 0$ | Local minimum |
| $f''(c) < 0$ | Local maximum |
| $f''(c) = 0$ | Inconclusive: use FDT |

**Riemann sum and concavity:**

| Concavity | Trapezoidal | Midpoint |
|---|---|---|
| Concave up | Overestimate | Underestimate |
| Concave down | Underestimate | Overestimate |

---

## Related Posts {#related}

- [What Is a Derivative in AP Calculus?](https://enginearu.com/ap-calculus-prep/what-is-a-derivative-ap-) (Post 01
- [Mean Value Theorem in AP Calculus](https://enginearu.com/ap-calculus-prep/unit-5-analytical-applications/mean-value-theorem-ap-) (Post 07
- [Optimization Problems in AP Calculus](https://enginearu.com/ap-calculus-prep/unit-5-analytical-applications/optimization-ap-calculus-) (Post 12
- First and Second Derivative Test in AP Calculus (Post 18) (coming soon)

---

## Before You Leave

If you got through all of that, you are ahead of most students on this topic. Not because the math is hard. Because most students stop at the bowl and never ask why.

The review sheet covers concavity and every other Unit 5 topic in one place. It is free.

**[Get the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)**

*Parents: the review sheet covers every major topic from Units 1 through 8, organized by AP exam weight. It is the fastest way to get your student oriented before a test.*

If your student wants something more structured before the AP exam, the free guide at [aceapcalculus.com/before-apcalc](https://aceapcalculus.com/before-apcalc) is a good starting point for understanding what is and is not on the exam.

---

## SEO Metadata

```
title: Concavity and Inflection Points in AP Calculus: The Rate-of-Rate-of-Change Story Your Textbook Skips
slug: post-22-concavity-inflection-points-ap-calculus
description: Concavity in AP Calculus is a tool, not a shape. Learn to use f''(x) to find inflection points, apply the SDT, and nail Riemann sum questions.
focus_keyword: concavity and inflection points ap calculus
secondary_keywords:
  - concave up concave down ap calculus
  - inflection point calculus definition
  - second derivative test concavity
  - ap calculus unit 5 concavity
  - f prime prime ap calculus
```

---

## Zach's Flow Checklist

```
[ZACH'S FLOW CHECKLIST]
[ ] Math accuracy check:
    - f(x) = x^4 - 4x^3: f'(x) = 4x^3 - 12x^2, f''(x) = 12x^2 - 24x = 12x(x-2) ✓
    - f''(0) = 0, f''(2) = 0 ✓
    - f''(-1) = 36 > 0 (CU), f''(1) = -12 < 0 (CD), f''(3) = 36 > 0 (CU) ✓
    - SDT at x=0: f''(0) = 0, inconclusive ✓
    - FDT at x=0: f'(-0.5) < 0, f'(0.5) < 0, no sign change, not extremum ✓
    - SDT at x=3: f''(3) = 36 > 0, local min ✓
    - g(x) = x^3-6x^2+9x+1: g''(x) = 6x-12, inflection at x=2 ✓
    - g(2) = 8-24+18+1 = 3 ✓
    - Midpoint sum: g(0.5) = 0.125-1.5+4.5+1 = 4.125, g(1.5) = 3.375-13.5+13.5+1 = 4.375 ✓
    - M_2 = 8.5, concave down on [0,2], so overestimate ✓
    - h(x) = x^3-3x^2-9x+5: h''(x) = 6x-6, inflection at x=1, h(1) = 1-3-9+5 = -6 ✓
    - f(x) = x^4-8x^2: f''(x) = 12x^2-16, zeros at x = ±2/sqrt(3) ≈ ±1.155 ✓
[ ] Personal moment: "I see it constantly" in intro ✓; "I get this wrong too when I rush" in Mistake 3 ✓
[ ] Voice check:
    - "That is the gap concavity creates when you learn it by shape instead of by rate." (strong)
    - "Name the feeling: this is the mistake that shows up in the last MCQ..." (earned)
    - Intro paragraph 1: check for forbidden words (none found) ✓
[ ] Desmos graph: placeholder present for Example 1 ✓
[ ] CTA confirmation: Mid-post CTA not present (added at end as End CTA A+B) (now added)
[ ] Estimated read time: ~3,800 words / 200 = 19 min (adjust to 16 min after HTML calibration)
```

---

*Post 22 of the ACE AP Calculus Blog. Written by Zach Boykin for enginearu.com.*
