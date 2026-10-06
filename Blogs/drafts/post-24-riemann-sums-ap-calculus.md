---
title: "Riemann Sums in AP Calculus: What You're Actually Approximating and Why It Matters"
slug: post-24-riemann-sums-ap-calculus
post_type: long-form
unit: "Unit 6: Integration and Accumulation of Change"
mcq_or_frq: both
primary_keyword: riemann sums ap calculus
keyword_cluster:
  - left riemann sum ap calculus
  - right riemann sum ap calculus
  - midpoint riemann sum
  - trapezoidal sum ap calculus
  - over and underestimate ap calculus
date: 2026-10-06
cluster_role: spoke
pillar_slug: TBD
data_year: 2026
description: "Riemann sums in AP Calculus explained: left, right, midpoint, and trapezoidal methods, plus over/underestimate rules and table-based FRQ practice."
reading_time: "13 min read"
ready_to_publish: false
---

# Riemann Sums in AP Calculus: What You're Actually Approximating and Why It Matters

**13 min read** | Used by thousands of AP Calculus AB and BC students to prepare for the May exam

---

## Jump To What You Need

- [What Riemann Sums Are Actually Doing](#what-riemann-sums-are-actually-doing)
- [The 4 Methods: Left, Right, Midpoint, Trapezoidal](#the-4-methods)
- [Worked Example 1: Table-Based Left Riemann Sum](#worked-example-1)
- [Worked Example 2: Over and Underestimate](#worked-example-2)
- [The 3 Mistakes That Cost Points](#the-3-mistakes)
- [Practice Problems](#practice-problems)
- [FAQ](#faq)
- [Quick Reference: Save This For Exam Day](#quick-reference)

---

<!-- [INTRO -->
<!-- HOOK TYPE: uncomfortable-truth -->
Most students I work with treat Riemann sums like a speed bump. You drive over it slowly, make it through, and then forget it the second integrals show up on the next section. You already know how to integrate, right? Why bother with these rectangles?

Here is the problem with that logic. The AP exam does not care that you can evaluate $\int_0^{10} f(x)\,dx$ with a formula. On FRQ Part A, the exam will hand you a table of values, no equation, and ask you to approximate that same integral using a left Riemann sum. No antiderivative. No formula. Just the table, your setup, and your arithmetic.

I have watched students score 80s and 90s on unit tests and still freeze on FRQ Question 1 because they never practiced reading a Riemann sum from a data table. That freeze costs 3 to 5 points. On an exam where every point is a fight, that is the difference between a 4 and a 5.

Riemann sums are not a warm-up. They are a tested skill. And this post is going to make sure you have them cold.

---

<!-- [WHAT THIS TOPIC ACTUALLY MEANS -->
## What Riemann Sums Are Actually Doing {#what-riemann-sums-are-actually-doing}

You already know that the integral gives you the exact area under a curve. Riemann sums give you an approximation of that area using rectangles (or trapezoids).

Think of it this way. Imagine you are measuring how far a car traveled, but you only know its speed at a few specific moments. You cannot get the exact distance without a continuous speed function. But you can cut the trip into chunks, assume the speed was roughly constant in each chunk, and multiply. Speed times time equals distance. That estimate is a Riemann sum.

This is where IROC and AROC connect to accumulation. The function value $f(x)$ at any single point gives you the instantaneous rate of change at that moment. Each rectangle height in your Riemann sum is one of those instantaneous snapshots. The Riemann sum stacks those IROC values across an interval to approximate total accumulated change. That is not the same as the average rate of change (AROC) over the whole interval. AROC gives you one number for the whole trip. Riemann sums pile up individual snapshots to build the accumulated total.

That piling up of rectangles is, in the limit, exactly what the integral is. When your rectangles get infinitely thin, the sum becomes the exact integral. But on the AP exam, your rectangles stay finite. And the exam tests whether you can set them up correctly from a table.

---

<!-- [THE METHOD -->
## The 4 Methods: Left, Right, Midpoint, Trapezoidal {#the-4-methods}

There are 4 approximation methods you need to know for the AP exam. Here is how each one works.

### Left Riemann Sum

You use the **left endpoint** of each subinterval as the height of the rectangle.

$$L_n = \sum_{i=0}^{n-1} f(x_i) \cdot \Delta x_i$$

### Right Riemann Sum

You use the **right endpoint** of each subinterval as the height of the rectangle.

$$R_n = \sum_{i=1}^{n} f(x_i) \cdot \Delta x_i$$

### Midpoint Riemann Sum

You use the **midpoint** of each subinterval as the height of the rectangle.

$$M_n = \sum_{i=1}^{n} f\!\left(\frac{x_{i-1}+x_i}{2}\right) \cdot \Delta x_i$$

The midpoint sum often gives a better approximation than left or right. But it only appears on FRQs when the table specifically provides midpoint values.

### Trapezoidal Sum

Instead of rectangles, you use trapezoids. This means averaging the left and right function values for each subinterval.

$$T_n = \sum_{i=1}^{n} \frac{f(x_{i-1}) + f(x_i)}{2} \cdot \Delta x_i$$

For **equal subintervals**, this simplifies to:

$$T_n = \frac{\Delta x}{2}\left[f(x_0) + 2f(x_1) + 2f(x_2) + \cdots + 2f(x_{n-1}) + f(x_n)\right]$$

### When Does Each Type Show Up?

- **Table-based FRQs:** Almost always left or right. Sometimes trapezoidal. Rarely midpoint (only if the table gives midpoints).
- **MCQ:** Over/underestimate questions about all 4 types. Conceptual questions about which is most accurate.
- **AB vs. BC:** Both courses test all 4 types. No difference here.

One note on the trapezoidal sum: it is not the same as the average of the left and right Riemann sums, though the formula can look similar. On the AP exam, use the trapezoid formula above. Do not shortcut it.

---

<!-- [WORKED EXAMPLE 1 -->
## Worked Example 1: Table-Based Left Riemann Sum {#worked-example-1}

**The Problem**

The table below gives selected values of a continuous function $f$.

| $x$ | 0 | 1 | 3 | 7 | 10 |
|-----|---|---|---|---|-----|
| $f(x)$ | 4 | 6 | 5 | 9 | 3 |

Use a left Riemann sum with the 4 subintervals indicated by the table to approximate $\int_0^{10} f(x)\,dx$.

---

> **Here is exactly how the AP exam scores this type of problem.**
>
> Rubric points typically go to: (1) correct identification of the subinterval widths, (2) correct use of left endpoints as heights, (3) correct arithmetic. If you use the right endpoint by accident, you get zero credit for that subinterval even if your arithmetic is perfect. Setup matters as much as calculation.

---

**Step 1: Identify the subintervals and their widths.**

The table gives $x$-values at 0, 1, 3, 7, and 10. That creates 4 subintervals:

$$[0,1], \quad [1,3], \quad [3,7], \quad [7,10]$$

The widths are:

$$\Delta x_1 = 1, \quad \Delta x_2 = 2, \quad \Delta x_3 = 4, \quad \Delta x_4 = 3$$

Notice these are unequal widths. That is normal on the AP exam. Do not assume equal subintervals unless the problem says so.

**Step 2: Identify the left endpoint of each subinterval.**

For a left Riemann sum, you use the $f$ value at the left edge of each subinterval.

- Subinterval $[0,1]$: left endpoint is $x = 0$, so height $= f(0) = 4$
- Subinterval $[1,3]$: left endpoint is $x = 1$, so height $= f(1) = 6$
- Subinterval $[3,7]$: left endpoint is $x = 3$, so height $= f(3) = 5$
- Subinterval $[7,10]$: left endpoint is $x = 7$, so height $= f(7) = 9$

**Step 3: Multiply each height by its subinterval width, then add.**

$$L = f(0)\cdot 1 + f(1)\cdot 2 + f(3)\cdot 4 + f(7)\cdot 3$$

$$L = (4)(1) + (6)(2) + (5)(4) + (9)(3)$$

$$L = 4 + 12 + 20 + 27$$

$$\boxed{L = 63}$$

**Coaching close:** The most common error I see here is using $f(1)$, $f(3)$, $f(7)$, and $f(10)$ instead of the left endpoints. That would be the right Riemann sum. Read the problem word. Left means left. Before you write anything, underline which type of sum the problem is asking for.

---

<!-- [MID-POST CTA -->
<!-- START MID-POST CTA -->

## Get the Full AP Calculus Review Sheet

If Riemann sums are clicking but you want to make sure you have covered every testable skill in Units 1 through 8, the free review sheet breaks it all down in one place.

**[Download the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)**

*Parents: This review sheet covers all the high-frequency topics your student needs for the AP exam. It is free and takes 30 seconds to access.*

<!-- END MID-POST CTA -->

---

<!-- [WORKED EXAMPLE 2 -->
## Worked Example 2: Over and Underestimate {#worked-example-2}

This is the question type I see on MCQ almost every year. It does not ask you to compute. It asks you to reason.

**The Problem**

The function $h$ is continuous and twice differentiable on the interval $[0, 6]$. For all $x$ in $[0, 6]$, $h'(x) > 0$ and $h''(x) > 0$. A left Riemann sum with 3 equal subintervals is used to approximate $\int_0^{6} h(x)\,dx$.

Does the left Riemann sum **overestimate** or **underestimate** the integral? Justify your answer.

---

> **Here is exactly what the AP exam is checking on this problem type.**
>
> The exam is checking whether you know the relationship between increasing/decreasing behavior and left/right sums, AND between concavity and midpoint/trapezoidal sums. These are two separate checks. For left and right sums, you only need increasing/decreasing. Concavity is irrelevant for left and right. Get this hierarchy wrong and you will answer incorrectly even when you understand the concept.

---

**Step 1: Determine whether $h$ is increasing or decreasing.**

Since $h'(x) > 0$ on $[0, 6]$, the function $h$ is **increasing** on this interval.

**Step 2: Apply the left/right sum rule for monotone functions.**

Here is the rule:

- If $f$ is **increasing**: Left sum **underestimates**, Right sum **overestimates**.
- If $f$ is **decreasing**: Left sum **overestimates**, Right sum **underestimates**.

Why? Because a left Riemann sum uses the left endpoint as the rectangle height. On an increasing function, the left endpoint is always lower than the function anywhere else in that subinterval. So the rectangle is shorter than the actual area. That is an underestimate.

**Step 3: State the answer.**

The left Riemann sum **underestimates** $\int_0^{6} h(x)\,dx$ because $h$ is increasing on $[0, 6]$, making every left-endpoint rectangle height smaller than the actual function values in that subinterval.

**What about the $h''(x) > 0$ information?**

That is for a different question type. When the problem asks about a **trapezoidal sum** or a **midpoint sum**, concavity is what you check.

- If $f$ is **concave up** ($f'' > 0$): Trapezoidal sum **overestimates**, Midpoint sum **underestimates**.
- If $f$ is **concave down** ($f'' < 0$): Trapezoidal sum **underestimates**, Midpoint sum **overestimates**.

The exam sometimes includes both $h'$ and $h''$ information to see if you can identify which piece applies to which sum type. In this problem, $h''(x) > 0$ would be relevant if the question asked about a trapezoidal or midpoint approximation.

<!-- SCREENSHOT-ABLE ONE-LINER -->
Left, right, midpoint, trapezoid. Pick the wrong one and the rubric says zero.
<!-- END ONE-LINER -->

**One more scenario to know:**

What if $f$ is increasing AND the problem asks about a right Riemann sum? Right sum overestimates. What if $f$ is increasing AND the problem asks about a trapezoidal sum? You check concavity. What if $f$ is increasing, concave up, and you are asked whether the trapezoidal sum overestimates? Yes, it overestimates. The key is always matching the right property to the right sum type.

---

<!-- [THE 3 MISTAKES -->
## The 3 Mistakes That Cost Points {#the-3-mistakes}

I keep a running log of every Riemann sum error I see on student work. These 3 come up more than all the others combined.

**Mistake 1: Using the wrong endpoint.**

A student reads "left Riemann sum," starts at $x_0$, then accidentally grabs $f(x_1)$, $f(x_2)$, $f(x_3)$, $f(x_4)$ for the four subintervals. That is the right sum. The fix is simple: for a left sum with $n$ subintervals, your last function value comes from the second-to-last $x$ in the table, never the last one. If your sum uses $f$ at the rightmost $x$-value, stop and check.

**Mistake 2: Forgetting to multiply by the subinterval width.**

This one loses full rubric points. Students who rush will add $f(0) + f(1) + f(3) + f(7)$ without multiplying by the widths. That is just summing function values. A Riemann sum is:

$$\text{Area of rectangle} = \text{height} \times \text{width} = f(x_i) \cdot \Delta x_i$$

Every term must include the width. On unequal subintervals, each width is different. Write it out.

**Mistake 3: Calling it an overestimate or underestimate without checking the right property.**

I see this on MCQ. A student remembers that "left underestimates" and applies it without checking whether $f$ is actually increasing. If $f$ is decreasing, the left sum overestimates. The rule is conditional. Always check increasing/decreasing first for left/right sums. Always check concavity for midpoint/trapezoidal sums.

---

<!-- [PRACTICE PROBLEMS -->
## Practice Problems {#practice-problems}

Work these before you look at the answers. Set up every term explicitly.

---

**Problem 1**

The table below gives values of a continuous function $g$.

| $x$ | 2 | 4 | 6 | 9 | 12 |
|-----|---|---|---|---|-----|
| $g(x)$ | 8 | 3 | 7 | 1 | 5 |

Use a **right Riemann sum** with the 4 subintervals indicated to approximate $\int_2^{12} g(x)\,dx$.

**Answer:**

Subintervals: $[2,4]$, $[4,6]$, $[6,9]$, $[9,12]$ with widths $2, 2, 3, 3$.

Right endpoints: $x = 4, 6, 9, 12$.

$$R = g(4)\cdot 2 + g(6)\cdot 2 + g(9)\cdot 3 + g(12)\cdot 3$$

$$R = (3)(2) + (7)(2) + (1)(3) + (5)(3) = 6 + 14 + 3 + 15 = \boxed{38}$$

---

**Problem 2**

Use a **trapezoidal sum** with the same table from Problem 1 to approximate $\int_2^{12} g(x)\,dx$.

**Answer:**

$$T = \frac{f(x_0)+f(x_1)}{2}\cdot\Delta x_1 + \frac{f(x_1)+f(x_2)}{2}\cdot\Delta x_2 + \frac{f(x_2)+f(x_3)}{2}\cdot\Delta x_3 + \frac{f(x_3)+f(x_4)}{2}\cdot\Delta x_4$$

$$T = \frac{8+3}{2}(2) + \frac{3+7}{2}(2) + \frac{7+1}{2}(3) + \frac{1+5}{2}(3)$$

$$T = \frac{11}{2}(2) + \frac{10}{2}(2) + \frac{8}{2}(3) + \frac{6}{2}(3)$$

$$T = 11 + 10 + 12 + 9 = \boxed{42}$$

---

**Problem 3**

A continuous, differentiable function $k$ satisfies $k'(x) < 0$ and $k''(x) < 0$ on the interval $[1, 7]$. Which of the following is true about a right Riemann sum $R$ and a trapezoidal sum $T$ used to approximate $\int_1^7 k(x)\,dx$?

(A) $R$ overestimates and $T$ overestimates.
(B) $R$ overestimates and $T$ underestimates.
(C) $R$ underestimates and $T$ overestimates.
(D) $R$ underestimates and $T$ underestimates.

**Answer:** **(D)**

$k'(x) < 0$ means $k$ is decreasing. For a decreasing function, the right sum underestimates (right endpoint is lower than the function values to the left within each subinterval).

$k''(x) < 0$ means $k$ is concave down. For a concave down function, the trapezoidal sum underestimates (the trapezoid "chord" lies below the curve).

Both underestimate. Answer: (D).

---

<!-- [FAQ -->
## FAQ {#faq}

### Is the trapezoidal sum always more accurate than the left or right sum?

Not always, but usually yes. The trapezoidal sum uses both endpoints of each subinterval and averages them, which tends to cancel out some of the over/underestimate error from using just one endpoint. On the AP exam, you will not be asked to prove which is "most accurate" in a general sense. What you will be asked is whether a specific sum overestimates or underestimates for a specific function, and that question has a definite answer based on monotonicity and concavity.

### Do I need to know all 4 types for the AP exam?

Yes. Both AB and BC students need left, right, midpoint, and trapezoidal. Left and right sums appear most often on FRQ table problems. The trapezoidal sum appears on FRQs and MCQ. The midpoint sum appears primarily on MCQ conceptual questions about over/underestimate. Do not skip any of the 4.

### How do Riemann sums relate to the actual integral?

The definite integral is the limit of a Riemann sum as the number of subintervals approaches infinity (and the width of each subinterval approaches zero). Formally:

$$\int_a^b f(x)\,dx = \lim_{n \to \infty} \sum_{i=1}^{n} f(x_i^*)\,\Delta x$$

where $x_i^*$ is any point in the $i$th subinterval. On the AP exam, you do not need to evaluate this limit from scratch. What you need to understand is that a Riemann sum gives an approximation of the integral, and the AP exam will ask you to compute that approximation or reason about its accuracy.

### What if the subintervals have unequal widths?

You handle them exactly the same way, just with different $\Delta x$ values for each term. The AP FRQ almost always uses unequal subintervals because the table points are not evenly spaced. Read the table, compute each width individually, and multiply. There is no shortcut formula for unequal widths. You write out each term.

---

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is the trapezoidal sum always more accurate than the left or right sum?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not always, but usually yes. The trapezoidal sum averages both endpoints of each subinterval, which tends to reduce over/underestimate error. On the AP exam, you will not be asked to prove general accuracy. You will be asked whether a specific sum overestimates or underestimates for a given function, based on monotonicity and concavity."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to know all 4 types for the AP exam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Both AB and BC students need left, right, midpoint, and trapezoidal Riemann sums. Left and right sums appear most often on FRQ table problems. The trapezoidal sum appears on both FRQ and MCQ. The midpoint sum appears primarily on MCQ conceptual questions about over and underestimate. Do not skip any of the 4 types."
      }
    },
    {
      "@type": "Question",
      "name": "How do Riemann sums relate to the actual integral?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The definite integral is the limit of a Riemann sum as the number of subintervals approaches infinity and the width of each approaches zero. On the AP exam, you do not evaluate this limit directly. You need to understand that a Riemann sum approximates the integral, and the exam tests your ability to set up that approximation from a table or to determine if it overestimates or underestimates."
      }
    },
    {
      "@type": "Question",
      "name": "What if the subintervals have unequal widths?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Handle them exactly the same way, with different delta-x values for each term. AP FRQ problems almost always use unequal subintervals because table values are not evenly spaced. Read the table, compute each width individually, and multiply. There is no shortcut formula for unequal widths. Write out each term separately."
      }
    }
  ]
}
</script>

---

<!-- [QUICK REFERENCE BOX -->
## Quick Reference: Save This For Exam Day {#quick-reference}

### The 4 Riemann Sum Formulas

| Method | Formula | What you use as height |
|--------|---------|------------------------|
| Left | $\displaystyle\sum_{i=0}^{n-1} f(x_i)\,\Delta x_i$ | Left endpoint of each subinterval |
| Right | $\displaystyle\sum_{i=1}^{n} f(x_i)\,\Delta x_i$ | Right endpoint of each subinterval |
| Midpoint | $\displaystyle\sum_{i=1}^{n} f\!\left(\tfrac{x_{i-1}+x_i}{2}\right)\Delta x_i$ | Midpoint of each subinterval |
| Trapezoidal | $\displaystyle\sum_{i=1}^{n} \frac{f(x_{i-1})+f(x_i)}{2}\,\Delta x_i$ | Average of both endpoints |

### Over/Underestimate Rules

**For Left and Right sums (check increasing/decreasing):**

| Function behavior | Left sum | Right sum |
|-------------------|----------|-----------|
| Increasing ($f' > 0$) | Underestimates | Overestimates |
| Decreasing ($f' < 0$) | Overestimates | Underestimates |

**For Midpoint and Trapezoidal sums (check concavity):**

| Concavity | Midpoint sum | Trapezoidal sum |
|-----------|--------------|-----------------|
| Concave up ($f'' > 0$) | Underestimates | Overestimates |
| Concave down ($f'' < 0$) | Overestimates | Underestimates |

---

<!-- [RELATED POSTS -->
## Related Posts

- [What Is Integration in AP Calculus?](https://enginearu.com/ap-calculus-prep/unit-6-integration/what-is-integration-in-ap-calculus/): Start here if you want to understand why we compute integrals at all and how the Fundamental Theorem connects to this topic.
- [U-Substitution in AP Calculus](https://enginearu.com/ap-calculus-prep/unit-6-integration/u-substitution-ap-calculus/): Once you move past approximation methods, u-sub is the first major integration technique. This post covers the setup and the most common errors.
- [Area Between Curves in AP Calculus](https://enginearu.com/ap-calculus-prep/unit-8-applications-integration/area-between-curves-ap-calculus/): Riemann sums build the intuition for why the area between curves uses subtraction. This post extends that idea into a full FRQ skill.

---

<!-- [END CTA -->
## Get the Free AP Calculus Study Guide

Riemann sums are one of the highest-frequency FRQ skills on the AP exam. Weak setup here costs points that no amount of antiderivative practice will recover. If you want a complete checklist of every tested skill in Units 1 through 8, the free guide walks through all of it.

**[Get the Free AP Calculus Guide at aceapcalculus.com/before-apcalc](https://aceapcalculus.com/before-apcalc)**

*Parents: If your student has the AP Calculus exam coming up and wants a clear picture of what skills still need work, this free guide is the fastest way to build that roadmap.*

---

<!-- [SEO METADATA -->
## SEO Metadata

```
Title: Riemann Sums in AP Calculus: What You're Actually Approximating and Why It Matters
Meta description: Riemann sums in AP Calculus explained: left, right, midpoint, and trapezoidal methods, plus over/underestimate rules and table-based FRQ practice.
Primary keyword: riemann sums ap calculus
Keyword cluster: left riemann sum ap calculus, right riemann sum ap calculus, midpoint riemann sum, trapezoidal sum ap calculus, over and underestimate ap calculus
Internal links: Post 08 (What Is Integration), Post 10 (U-Substitution), Post 23 (Rate In/Rate Out)
Schema: FAQPage (4 questions)
Reading time: 13 min
Word count target: 3,000-4,500
```

---

<!-- [ZACH'S FLOW CHECKLIST -->
## Zach's Flow Checklist

- [ ] Zero em-dashes anywhere in the post
- [ ] Zero forbidden phrases (dive into, let's explore, it's worth noting, non-negotiable, unpack, in conclusion, straightforward, navigate, crucial)
- [ ] No section opens with "Definition:" or "The [X] is..."
- [ ] All MathJax delimiters balanced (every `$` paired, every `$$` paired)
- [ ] AROC vs IROC distinction surfaced (yes: "What Riemann Sums Are Actually Doing" section)
- [ ] Worked Example 1 rubric box: "Here is exactly how the AP exam scores this type of problem" (yes)
- [ ] Worked Example 2 rubric box: "Here is exactly what the AP exam is checking on this problem type" (yes)
- [ ] All required sections present (yes: intro, what it means, framework, example 1, mid CTA, example 2, 3 mistakes, practice, FAQ, quick ref, related posts, end CTA)
- [ ] Word count 3,000-4,500 (estimate: ~3,300)
- [ ] NO seasonal CTAs (date is Oct 6, outside window, confirmed)
- [ ] `<!-- HOOK TYPE: uncomfortable-truth -->` present before first Intro sentence (yes)
- [ ] `<!-- SCREENSHOT-ABLE ONE-LINER -->` and `<!-- END ONE-LINER -->` present (yes)
- [ ] `post_type: long-form` in YAML (yes)
- [ ] FAQPage JSON-LD with `"@type": "FAQPage"` and 4 `"@type": "Question"` entries (yes)
- [ ] YAML `description:` present and under 155 characters (yes: 146 chars)
- [ ] Reading time and social proof line present (yes)
- [ ] Table of contents present (yes)
- [ ] Mid-post CTA: free review sheet link (yes)
- [ ] End CTA: free guide at aceapcalculus.com/before-apcalc (yes)
- [ ] 3 practice problems with answers (yes)
- [ ] FAQ with 3-4 questions (yes: 4 questions)
- [ ] MCQ framing present (yes: over/underestimate section is MCQ-focused)
- [ ] Table-based FRQ framing present (yes: Worked Example 1)
- [ ] Parent-addressed line in CTAs (yes, both CTAs)
