---
title: "Volumes of Revolution in AP Calculus: The Disk and Washer Method (FRQ Setup Guide)"
slug: post-13-volumes-of-revolution
post_type: long-form
date: 2026-05-04
unit: "Unit 8: Applications of Integration"
mcq_or_frq: frq
primary_keyword: volumes of revolution AP Calculus
keyword_cluster:
  - disk method calculus
  - washer method AP exam
  - volumes of revolution FRQ
  - AP Calculus integration applications
  - rotating around x-axis calculus
  - cross-sectional area calculus
  - AP Calculus AB volume problems
  - integral setup AP exam
cluster_role: spoke
pillar_slug: TBD
data_year: 2026
reading_time: 16 min read
hook_type: name-the-feeling
---

# Volumes of Revolution in AP Calculus: The Disk and Washer Method (FRQ Setup Guide)

**16 min read | Used by 500+ EngiNearU students to set up volume FRQs without freezing**

---

## Jump To What You Need

- [The Picture Problem](#picture-problem)
- [What Volumes of Revolution Actually Are](#what-it-means)
- [The Disk and Washer Method: Step-by-Step](#method)
- [Worked Example 1: Disk Method (Rotation About the x-axis)](#example-1)
- [Grab the Free Pre-Assessment](#mid-cta)
- [Worked Example 2: Washer Method FRQ (Full Rubric)](#example-2)
- [The 3 Mistakes That Cost My Students Points](#mistakes)
- [Practice Problems](#practice)
- [FAQ](#faq)
- [Save This For Exam Day](#quick-reference)
- [Related Posts](#related)
- [What Comes Next](#end-cta)

---

## The Picture Problem {#picture-problem}

<!-- HOOK TYPE: name-the-feeling -->
There is a specific feeling that hits when you read a volumes of revolution FRQ and know, in theory, that you are supposed to write an integral, but have no idea what goes inside it. Not because you forgot the formula. You can see $\pi \int [R]^2\,dx$ in your head right now. The problem is you cannot figure out what $R$ is. So you stare at the page. And the clock keeps running.

I call this the **Radius Blank-Out**, and I see it every single year. Students who have practiced volumes of revolution problems still freeze on exam day not because they got the integration wrong, but because they drew the wrong picture before they ever wrote a single symbol. The picture determines the radius. The radius determines the integral. Get the picture wrong and every step after it is building on a broken foundation.

<!-- NEEDS UNIQUE ANGLE: add Zach story here -->

Here is the truth about this FRQ type: the integral is almost never the hard part. The students who drop points on volumes of revolution problems are not making algebra mistakes inside the integral. They are making geometry mistakes before the integral even starts. Specifically, they confuse outer and inner radii, they subtract functions when they should subtract from a line, and they forget that the radius changes depending on the axis of rotation.

This post fixes that. You will know exactly what to draw, how to identify the radii, and how to set up the integral for both disk and washer problems. Volumes of revolution FRQs account for real points in Unit 8, which is 10-15% of your total AP score. Getting this right matters.

---

## What Volumes of Revolution Actually Are {#what-it-means}

Most textbooks open this topic with the formal definition of a solid of revolution. I have never found that helpful as a first move. Here is the analogy I use instead.

Imagine you take a flat shape drawn on paper, a region between two curves, and you spin it around a line. Like a pottery wheel. The flat shape sweeps through three-dimensional space and traces out a solid. That solid is what you are finding the volume of.

The key insight is this: if you were to cut that solid with a very thin slice perpendicular to the axis of rotation, what you would see is a circle. Or a washer (a circle with a hole). The volume of the whole solid is just the sum of the volumes of all those infinitely thin circular slices. That summation is what the integral does.

You would think the hard part is the integration. It is not. The hard part is identifying the radius (or radii) of each circular cross-section from the picture you draw.

This is where the AROC vs. IROC distinction shows up in a surprising way: when you think about the integral as accumulating the area of each infinitesimal slice, you are using the definite integral as an accumulator of instantaneous cross-sectional area. The area of each slice is an instantaneous value ($\pi R^2$ at a specific $x$), and the integral adds them up across the interval. This is the same relationship between instantaneous rate and total accumulation that you saw when connecting $f'(x)$ (IROC) to $\int_a^b f'(x)\,dx = f(b) - f(a)$ (total change). The disk method is not separate from that idea. It is the same idea applied to geometry.

Here is the formal definition: a **volume of revolution** is a solid created by rotating a two-dimensional region around a line (the axis of rotation). The disk method and washer method are the two formulas used to compute the volume of AP Calculus AB volume problems involving rotation around the x-axis, the y-axis, or any horizontal or vertical line.

---

## The Disk and Washer Method: Step-by-Step {#method}

Two cases. You identify which one applies before you write a single symbol.

**Case 1: Disk Method**

Use when the region being rotated touches the axis of rotation directly (no gap between the region and the axis).

$$V = \pi \int_a^b [f(x)]^2\,dx \quad \text{(rotation about the x-axis)}$$

The radius of each circular cross-section is $f(x)$: the distance from the axis of rotation to the outer curve. Square it, multiply by $\pi$, integrate. That is the disk method calculus setup.

**Case 2: Washer Method**

Use when there is a gap between the region and the axis of rotation. Each cross-section is a washer: a big circle minus a hole.

$$V = \pi \int_a^b \left([R(x)]^2 - [r(x)]^2\right)\,dx \quad \text{(rotation about the x-axis)}$$

$R(x)$ is the **outer radius**: the distance from the axis of rotation to the farther curve.
$r(x)$ is the **inner radius**: the distance from the axis of rotation to the closer curve.

This is one of the most commonly tested setups for the washer method AP exam problems.

**Rotation about the y-axis**

When the axis of rotation is vertical (the y-axis or the line $x = k$), you integrate in terms of $y$. Rewrite your functions as $x = g(y)$ before setting up.

$$V = \pi \int_c^d [f(y)]^2\,dy \quad \text{(disk, rotation about the y-axis)}$$

$$V = \pi \int_c^d \left([R(y)]^2 - [r(y)]^2\right)\,dy \quad \text{(washer, rotation about the y-axis)}$$

**Rotation about a line that is NOT an axis**

This is where most students drop points. If you rotate around the line $y = 2$ instead of $y = 0$ (the x-axis), you do not just use $f(x)$ as your radius. You have to account for the shift.

The radius becomes the distance from $y = 2$ to your curve:
$$R = f(x) - 2 \quad \text{(if the curve is above the line)}$$
$$r = g(x) - 2 \quad \text{(if there is a hole)}$$

Same logic applies for rotation about $y = k$: the radius is the vertical distance between the curve and the line of rotation. If the line is below the region, subtract the line value from the function. If the line is above the region, subtract the function from the line value.

**The 4-step setup process:**

1. Sketch the region. Label which curve is farther from the axis of rotation (outer) and which is closer (inner).
2. Identify the axis of rotation. If it is not a coordinate axis, write out the radius formula explicitly before you integrate.
3. Determine bounds of integration. These are where the curves intersect, or the bounds stated in the problem.
4. Write the integral in the correct form (disk or washer), evaluate, and box the answer with units if given.

[DESMOS EMBED:
Functions: y=x^2 (navy #1a3a6b), y=x (gold #e8a020)
Window: x[-0.2,1.2] y[-0.2,1.2]
Lock viewport: yes
Notes: Region between y=x (top, gold) and y=x^2 (bottom, navy) for 0 ≤ x ≤ 1. Shows the region that will be rotated in the washer method example. Label the outer radius R from x-axis to y=x and inner radius r from x-axis to y=x^2.]

---

## Worked Example 1: Disk Method (Rotation About the x-axis) {#example-1}

The region below $f(x) = \sqrt{x}$ and above the x-axis is rotated about the x-axis on the interval $[0, 4]$. Find the volume of the resulting solid.

**Step 1: Identify the method.**

The region touches the x-axis (the lower boundary is $y = 0$, which is the axis of rotation). No hole. This is a disk problem.

$$V = \pi \int_0^4 [f(x)]^2\,dx = \pi \int_0^4 [\sqrt{x}]^2\,dx$$

**Step 2: Simplify the integrand.**

$$V = \pi \int_0^4 x\,dx$$

Squaring $\sqrt{x}$ gives you $x$. Clean integral from here.

**Step 3: Evaluate.**

$$V = \pi \left[\frac{x^2}{2}\right]_0^4 = \pi \left(\frac{16}{2} - 0\right) = \pi \cdot 8$$

$$\boxed{V = 8\pi}$$

One tip I give every student here: write out $[\sqrt{x}]^2$ as a separate step before simplifying. Students who go straight from $\sqrt{x}$ to $x$ inside the integral sometimes forget the $\pi$ or simplify the wrong thing. One extra line of algebra. Zero points dropped.

**Here is exactly how the AP exam scores this type of problem:**
- Correct formula setup with $\pi$ and the integrand squared: **1 point**
- Correct limits of integration ($0$ to $4$): **1 point**
- Correct antiderivative of $x$ (getting $\frac{x^2}{2}$): **1 point**
- Correct evaluation and final answer $8\pi$: **1 point**

Writing $V = \pi \int_0^4 x\,dx$ with no preceding setup step can cost you the setup point even if your arithmetic is right. Show the squared form first.

---

## Grab the Free Pre-Assessment {#mid-cta}

Not sure where your gaps are before volumes of revolution? I put together a free pre-assessment that shows you exactly which Unit 8 concepts need attention before they become problems on the AP exam.

[Take the Free Pre-Assessment: aceapcalculus.com/summer-diagnostic-page]

*(Parents: this is the fastest way to find out exactly where your student stands in Unit 8 right now, before a test or quiz tells you first.)*

---

## Worked Example 2: Washer Method FRQ (Full Rubric) {#example-2}

This is the problem type that shows up on FRQs every year. The washer method is the AP exam's preferred volume problem because it requires students to identify both radii and set up the integral correctly. If you can do this cold, you will not leave points on the table.

**Problem:** Let $R$ be the region bounded by $f(x) = x$ and $g(x) = x^2$ on the interval $[0, 1]$. The region is rotated about the x-axis. Find the volume of the resulting solid.

**Step 1: Sketch the region. Identify R and r.**

On $[0, 1]$, the line $y = x$ is above the parabola $y = x^2$. The axis of rotation is the x-axis ($y = 0$).

When you rotate the region, each cross-section is a washer:
- **Outer radius:** distance from x-axis to the top curve: $R(x) = x$
- **Inner radius:** distance from x-axis to the bottom curve: $r(x) = x^2$

**Step 2: Write the washer formula.**

$$V = \pi \int_0^1 \left([R(x)]^2 - [r(x)]^2\right)\,dx = \pi \int_0^1 \left(x^2 - x^4\right)\,dx$$

**Step 3: Evaluate.**

$$V = \pi \left[\frac{x^3}{3} - \frac{x^5}{5}\right]_0^1$$

$$V = \pi \left[\left(\frac{1}{3} - \frac{1}{5}\right) - (0)\right]$$

$$V = \pi \left[\frac{5}{15} - \frac{3}{15}\right] = \pi \cdot \frac{2}{15}$$

$$\boxed{V = \frac{2\pi}{15}}$$

**Step 4: Communication layer. What to write on the AP exam.**

This is the step most students skip, and it is the most expensive skip on a rubric. On the AP exam, you must write:

> "Since the region is rotated about the x-axis, the volume is given by the washer method with outer radius $R(x) = x$ and inner radius $r(x) = x^2$."

You do not need to write paragraphs. One sentence identifying the method and both radii. That is the justification point. Without it, the grader cannot award the setup point even if your integral is correct.

**Here is exactly how the AP exam scores this type of problem:**
- Correct washer setup with $[R(x)]^2 - [r(x)]^2$ (not $R(x) - r(x)$, which is a common error): **1 point**
- Correct identification of $R(x) = x$ and $r(x) = x^2$: **1 point**
- Correct antiderivatives $\frac{x^3}{3}$ and $\frac{x^5}{5}$: **1 point**
- Correct final answer $\frac{2\pi}{15}$: **1 point**

Squaring inside and then subtracting is how you earn the first rubric point. Subtracting first, then squaring (writing $\pi \int_0^1 (x - x^2)^2\,dx$) is a different integral that gives a different answer. That error alone costs you 2 or 3 points on a 4-point rubric.

---

## The 3 Mistakes That Cost My Students Points {#mistakes}

<!-- NEEDS UNIQUE ANGLE: add Zach story here -->

**Mistake 1: Subtracting functions before squaring**

Why it happens: The area between curves formula is $\int [f(x) - g(x)]\,dx$, so students write $\pi \int [f(x) - g(x)]^2\,dx$ for the washer. That is wrong. The washer formula subtracts the squares of the functions, not the square of the difference.

The correct form is $\pi \int \left([f(x)]^2 - [g(x)]^2\right)\,dx$.

The fix: write the formula first with $R^2$ and $r^2$ labeled separately before you substitute. If you substitute before writing the formula, you will collapse the step and make this error.

Consequence: this changes the integrand completely and produces an incorrect answer. On a standard 4-point FRQ rubric, this costs you 3 points. Not 1. The setup, the antiderivative, and the answer are all wrong.

**Mistake 2: Mixing up outer and inner radius when the axis is not a coordinate axis**

Why it happens: Students know how to handle $y = 0$ and $x = 0$ as axes. When the axis of rotation shifts to $y = 2$ or $y = -1$, they forget to account for the shift in the radius calculation.

If the region is above $y = 2$ and you rotate around $y = 2$, the outer radius is not $f(x)$. It is $f(x) - 2$. The radius is always the vertical distance from the axis to the curve, not the height of the curve.

Consequence: writing the wrong expression for $R$ or $r$ costs you the radius identification point and, if the error cascades, the final answer point as well. That is up to 2 points lost on a setup that should take 30 seconds.

**Mistake 3: Not drawing the picture first**

Why it happens: Students practicing these problems from a textbook get into a habit of reading the problem, identifying $f(x)$ and $g(x)$, and writing the integral immediately. That works when the problem is standard. On the AP exam, the problem is not always standard. The region might be in an unexpected location. The axis of rotation might be a non-standard line. Without a sketch, you are guessing at which curve is outer and which is inner.

The fix: draw the region. Every time. Label the outer curve, the inner curve, and the axis of rotation. This takes 60 seconds and prevents every mistake in this list.

Consequence: skipping the sketch is the root cause of the other two mistakes above. I have never seen a student who draws a clean, labeled sketch set up the integral wrong. Not once.

---

## Practice Problems {#practice}

Try these on your own before checking the answers. If you get stuck, draw the picture first. Identify the method (disk or washer) and label the radii before you write the integral.

**Problem 1: Disk Method (Foundational)**

The region below $f(x) = 2x$ and above the x-axis on the interval $[0, 3]$ is rotated about the x-axis. Find the volume.

**Problem 2: Washer Method**

Let $R$ be the region bounded by $f(x) = \sqrt{x}$ and $g(x) = x^2$ for $0 \leq x \leq 1$. Find the volume when $R$ is rotated about the x-axis.

**Problem 3: Rotation About a Non-Standard Axis (FRQ Level)**

The region bounded by $f(x) = 4$ and $g(x) = x^2$ is rotated about the line $y = -1$ on the interval $[-2, 2]$. Identify the outer and inner radii, write the integral setup, and find the volume.

**Answers:**

**Problem 1:**

$V = \pi \int_0^3 [2x]^2\,dx = \pi \int_0^3 4x^2\,dx = \pi \left[\frac{4x^3}{3}\right]_0^3 = \pi \cdot \frac{4(27)}{3} = \pi \cdot 36 = 36\pi$

**Problem 2:**

On $[0,1]$: $\sqrt{x} \geq x^2$, so outer radius $R = \sqrt{x}$ and inner radius $r = x^2$.

$$V = \pi \int_0^1 \left([\sqrt{x}]^2 - [x^2]^2\right)\,dx = \pi \int_0^1 (x - x^4)\,dx$$

$$= \pi \left[\frac{x^2}{2} - \frac{x^5}{5}\right]_0^1 = \pi\left(\frac{1}{2} - \frac{1}{5}\right) = \pi \cdot \frac{3}{10} = \frac{3\pi}{10}$$

**Problem 3:**

The axis is $y = -1$, which is below both curves.
- Outer radius: distance from $y = -1$ to $f(x) = 4$: $R = 4 - (-1) = 5$
- Inner radius: distance from $y = -1$ to $g(x) = x^2$: $r = x^2 - (-1) = x^2 + 1$

$$V = \pi \int_{-2}^{2} \left(5^2 - (x^2 + 1)^2\right)\,dx = \pi \int_{-2}^{2} \left(25 - (x^4 + 2x^2 + 1)\right)\,dx$$

$$= \pi \int_{-2}^{2} \left(24 - 2x^2 - x^4\right)\,dx$$

$$= \pi \left[24x - \frac{2x^3}{3} - \frac{x^5}{5}\right]_{-2}^{2}$$

At $x = 2$: $48 - \frac{16}{3} - \frac{32}{5} = 48 - \frac{80}{15} - \frac{96}{15} = 48 - \frac{176}{15} = \frac{720 - 176}{15} = \frac{544}{15}$

By symmetry (even integrand): multiply by 2.

$$V = \pi \cdot \frac{2 \cdot 544}{15} = \frac{1088\pi}{15}$$

---

## FAQ {#faq}

**Q: How do I know whether to use the disk method or the washer method?**

A: One question answers this: is there a gap between the region you are rotating and the axis of rotation? If the region touches the axis directly (no hole), use the disk method. If there is empty space between the region and the axis (the region is bounded by two curves, or the axis is a line that does not border the region), use the washer method. Draw the picture first and the answer is usually obvious.

I tell my students: if you can trace from the axis of rotation directly to the edge of your region without passing through air, you have a disk. If there is air between the axis and the region, you have a washer.

**Q: What is the difference between rotating around the x-axis vs. the y-axis?**

A: The formula structure is the same. The difference is the variable. Rotation about the x-axis means you integrate in terms of $x$ (with $dx$), and your radius is expressed as a function of $x$. Rotation about the y-axis means you integrate in terms of $y$ (with $dy$), and you need to rewrite your functions as $x = g(y)$ before setting up. The AP exam almost always tests rotation about the x-axis or a horizontal line. Y-axis rotation shows up less often in AB, but it is in scope. You can confirm the full list of tested volume setups in the [AP Calculus AB Course and Exam Description](https://apcentral.collegeboard.org/courses/ap-calculus-ab) published by the College Board.

**Q: What if the problem says "the region is bounded by" and does not give me the axis explicitly?**

A: Read more carefully. The problem always tells you the axis of rotation somewhere. If it says "rotated about the x-axis," the axis is $y = 0$. If it says "rotated about the line $y = 3$," the axis is $y = 3$. The axis is never implied. It is always stated. If you missed it, re-read the problem before you set up anything.

**Q: Is there a way to check my integral before I evaluate it?**

A: Yes. After you write the integral, do a units-of-the-answer check: you are integrating $[radius]^2$ (which has units of length squared) over $dx$ (length), so the result has units of length cubed. That matches a volume. If your integrand does not have units of length squared, something is wrong in your setup. Also: the answer should be positive. If you get a negative volume, you either assigned the radii backwards or evaluated the bounds in the wrong order.

---

## Save This For Exam Day {#quick-reference}

**Disk Method (no gap between region and axis):**

$$V = \pi \int_a^b [f(x)]^2\,dx \quad \text{(x-axis rotation)}$$

$$V = \pi \int_c^d [g(y)]^2\,dy \quad \text{(y-axis rotation)}$$

**Washer Method (gap between region and axis):**

$$V = \pi \int_a^b \left([R(x)]^2 - [r(x)]^2\right)\,dx \quad \text{(x-axis rotation)}$$

$R$ = outer radius (farther from axis), $r$ = inner radius (closer to axis)

**Rotation about a non-standard line $y = k$:**

$$R = f(x) - k \quad \text{if the curve is above the line}$$
$$r = g(x) - k \quad \text{if there is an inner boundary above the line}$$
$$R = k - g(x) \quad \text{if the curve is below the line}$$

**Setup checklist (run before every integral):**
- Sketch the region. Label outer curve, inner curve, axis of rotation.
- Identify: disk (no gap) or washer (gap)?
- Write $R$ and $r$ explicitly before substituting.
- Write $[R(x)]^2 - [r(x)]^2$, not $[R(x) - r(x)]^2$.
- Check that the answer is positive and has correct units.

**Notation the AP exam expects:**
- The full integral written with $\pi$, both radii squared, and limits
- Antiderivative shown in bracket notation before evaluation
- Final answer boxed with units if units are given in the problem

---

<!-- SCREENSHOT-ABLE ONE-LINER -->
The washer method squares each radius separately, then subtracts. Not the other way around.
<!-- END ONE-LINER -->

---

## Related Posts {#related}

These posts build the foundation this topic sits on. If any of this felt unfamiliar, go back to these first.

- [What Is a Derivative in AP Calculus?](https://enginearu.com/ap-calculus-prep/what-is-a-derivative-ap-calculus/): the conceptual foundation for everything in this course
- [Introduction to Integration in AP Calculus](/ap-calculus-prep/post-08-integration-intro/): the mechanics you need before volumes make sense
- [U-Substitution in AP Calculus](/ap-calculus-prep/post-10-u-substitution/): for when the volume integral requires a substitution
- [Area Between Curves in AP Calculus](/ap-calculus-prep/post-11-area-between-curves/): volumes of revolution build directly on the area setup you learned here

---

## What Comes Next {#end-cta}

Volumes of revolution are one of the highest-point-value FRQ types in Unit 8, which covers 10-15% of your total AP score. The students who lose points here are not making calculus mistakes. They are making picture mistakes. Draw the region, label the radii, write the formula before you substitute. That sequence costs you nothing and saves you everything.

If you are not sure where you stand on Unit 8, take the free pre-assessment. It takes about 10 minutes and tells you exactly which concepts need work before the AP exam.

[Take the Free Pre-Assessment: aceapcalculus.com/summer-diagnostic-page]

*(Parents: Unit 8 shows up on every AP Calculus AB exam. If your student is working through it right now and feeling shaky, the pre-assessment is the fastest way to identify the gaps before they show up on a rubric.)*

---

**[SEASONAL CTA: Active through September 15, 2026]**

If you want your student to have volumes of revolution locked in before AP Calculus starts next fall, my summer program runs in July and August. We do real FRQ practice. We draw the pictures. We run through every setup type the AP exam tests. Spots are limited each session.

[See Summer Program Details: aceapcalculus.com/summer-diagnostic-page]

---

## SEO Metadata

SEO Title: Volumes of Revolution AP Calculus: Disk and Washer (2026)
Meta Description: Learn the disk and washer method for AP Calculus AB volumes of revolution FRQs. Step-by-step setup, worked examples, and exam rubric explained.
Slug: post-13-volumes-of-revolution
Primary Keyword: volumes of revolution AP Calculus
Keyword Cluster: disk method calculus, washer method AP exam, volumes of revolution FRQ, AP Calculus integration applications, rotating around x-axis calculus, cross-sectional area calculus, AP Calculus AB volume problems, integral setup AP exam
SERP_TARGET_WORD_COUNT: ~3200 (based on Paul's Online Notes ~2400 + standard competitive target; Khan Academy inaccessible, third result 404)
COVERAGE_GAPS_ADDRESSED: rotation about non-standard axes (y=k), sign considerations for negative function values, AROC/IROC accumulation framing, FRQ communication layer (justification sentence)
Post Type: long-form | Hook Type: name-the-feeling | Cluster Role: spoke | Pillar: TBD | Data Year: 2026

---

## ZACH'S FLOW CHECKLIST

[ ] Math accuracy check:
1. Disk formula: $V = \pi \int_a^b [f(x)]^2\,dx$ (confirmed)
2. Washer formula: $V = \pi \int_a^b ([R]^2 - [r]^2)\,dx$ (confirmed)
3. Example 1: $\pi \int_0^4 x\,dx = \pi [x^2/2]_0^4 = 8\pi$ (confirmed)
4. Example 2: $\pi \int_0^1 (x^2 - x^4)\,dx = \pi [x^3/3 - x^5/5]_0^1 = \pi(1/3 - 1/5) = 2\pi/15$ (confirmed)
5. Practice 1: $36\pi$ (confirmed)
6. Practice 2: $\pi(1/2 - 1/5) = 3\pi/10$ (confirmed)
7. Practice 3: Non-standard axis rotation, $1088\pi/15$ (PLEASE VERIFY before publishing; complex expansion)

[ ] Personal moment: HOOK in intro names the Radius Blank-Out. NEEDS UNIQUE ANGLE markers placed in intro and Mistakes section.

[ ] Voice check: Read aloud. Target sentence: "The students who drop points on volumes of revolution problems are not making calculus mistakes. They are making geometry mistakes." Adjust if needed.

[ ] Desmos graph: Region between y=x (gold) and y=x^2 (navy) for 0 ≤ x ≤ 1. Shows outer/inner radius for washer example. Build in HTML preview.

[ ] CTA confirmation: Mid-post Option E (free pre-assessment). End Option E (pre-assessment) + Option D (summer program). Date is 2026-05-04. Seasonal CTAs active through Sept 15, 2026. ✓

[ ] Read time: ~3,500 words / 200 = ~16 min read. Confirmed.

---

## SKILL DELTA

- New lesson learned: For non-standard axis rotation problems, the radius formula must name the shift explicitly ($f(x) - k$ or $k - f(x)$). This needs its own step in the method section. Students who see it only in examples do not generalize.
- Forbidden pattern eliminated: Early drafts of the FAQ answers contained hedging filler phrases and a word implying the setup requires no real effort. Both were cut and replaced with direct, action-oriented language.
- Analogy or voice move that worked: The AROC/IROC accumulation framing in "What This Actually Means." Connecting instantaneous cross-sectional area to the integral as an accumulator gave the concept a foundation without breaking from Zach's voice.
- MCQ/FRQ framing note: This topic is purely FRQ framing (correct per topic block). The washer formula setup and radius identification are extended computation steps, not recognition tasks.
