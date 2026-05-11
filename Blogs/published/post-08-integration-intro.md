---
title: "Integration (Intro): What an Integral Actually Is and Why Unit 6 Breaks Students Who Skipped Unit 1"
slug: post-08-integration-intro
post_type: long-form
unit: "Unit 6: Integration and Accumulation of Change"
primary_keyword: "what is integration in ap calculus"
keyword_cluster: "ap calc unit 6 integration, integral definition calculus, antiderivative ap calculus, riemann sum to integral, integration vs differentiation ap calc, what does an integral mean, ap calculus integration explained"
mcq_or_frq: mcq
cluster_role: spoke
pillar_slug: TBD
data_year: 2026
date: 2026-04-30
reading_time: "15 min read"
---

# Integration (Intro): What an Integral Actually Is and Why Unit 6 Breaks Students Who Skipped Unit 1

**15 minute read | Used by 500+ EngiNearU students to go from a 3 to a 5**

If you have been asking yourself what is integration in AP Calculus and why it keeps showing up in every Unit 6 problem, this post answers that directly before anything else.

---

## Jump To What You Need

- [The Pattern I Watch Repeat Every April](#pattern)
- [What an Integral Actually Is](#what-it-means)
- [The One Bucket That Unifies Everything](#one-bucket)
- [From Riemann Sums to the Integral: The Conceptual Bridge](#riemann-to-integral)
- [Worked Example 1: Setting Up a Definite Integral (Foundational)](#example-1)
- [Grab the Free Guide](#mid-cta)
- [Worked Example 2: The MCQ Recognition Type](#example-2)
- [The 3 Mistakes That Cost My Students Points](#mistakes)
- [Practice Problems](#practice)
- [FAQ](#faq)
- [Save This For Exam Day](#quick-reference)
- [Related Posts](#related)

---

## The Pattern I Watch Repeat Every April {#pattern}

<!-- HOOK TYPE: counterintuitive-stat -->
Unit 6 integration covers 17 to 20 percent of the AP Calculus AB exam, and every year I watch students who scored 90s on derivative tests walk into Unit 6 and lose 4 to 5 points on the very first quiz because they treated the integral like a backwards derivative instead of an accumulation.

That framing error is not random. It is the direct result of skipping the conceptual piece in Unit 1. What it actually means to add up infinitely small slices. Students who never built that picture reach Unit 6 and their brain fills the gap with the only frame it has: "integration is just differentiation in reverse." That frame works on exactly one type of problem. The AP exam has at least 8 types.

What is integration in ap calculus, really? Not the formula. The idea. The honest answer is that area, antiderivatives, and integration are all the same concept stored in one bucket. Most students never hear that. They learn rules for each piece separately and spend the rest of the year confused about why the topics keep overlapping.

This post fixes that. I am going to give you the conceptual unlock first, then show you where the 89% Rule fits in, and walk you through the two most tested problem types before the exam. If you are solid on derivatives and shaky on integration, start here. This is the bridge.

---

## What an Integral Actually Is {#what-it-means}

Every textbook I have seen opens the integration chapter with Riemann sums. I understand why. But I have never found that helpful as a first explanation, and neither do my students. Here is how I actually teach this.

Think about filling a pool.

The water flows in at a rate that changes over time. Maybe it is slow at first, speeds up in the middle, then slows again near the end. At any given second, you can measure exactly how fast the water is coming in. That is your rate function. Call it $f(t)$.

Your question is not "how fast is the water flowing right now?" That would be asking for a derivative. Your question is: "how much water is in the pool after 30 minutes?"

To answer that, you need to add up all the little amounts that flowed in during each moment of those 30 minutes. A tiny bit in the first second. Another tiny bit in the second second. Keep going until you have them all. That total accumulated amount. That is the integral.

$$\int_0^{30} f(t)\,dt$$

The $dt$ is not decoration. It means "each tiny slice of time." The $\int$ symbol is a stretched-out S, and it literally stands for "sum." Not an estimate. Not an approximation. The exact sum of infinitely many infinitely thin slices.

This is the concept that matters before any rule. An integral is accumulated change. The area under a rate curve equals the total amount.

You would think that definition is the hard part to remember. It is not. The hard part is that your textbook teaches you 5 different integration rules in the same week it teaches you this concept, and your brain treats the rules as the actual subject. They are not. The concept is. Every rule is just a shortcut for computing the sum more efficiently.

Here is the definition I make every student write down before we go anywhere else:

**An integral is the exact accumulated total of a function over an interval, computed as the limit of infinitely many rectangles whose widths shrink to zero.**

If you can say that out loud without reading it, you have the foundation. If you cannot, come back to it. Because if this is shaky, everything in Unit 6 gets harder than it needs to be.

---

## The One Bucket That Unifies Everything {#one-bucket}

Here is the thing I wish someone had told me when I first learned this.

Area under a curve. Antiderivative. Definite integral. Students learn these three concepts across three different lessons, sometimes in three different weeks. They take notes on each one separately. They study them separately. And they walk into the AP exam treating them as 3 different topics.

They are not. They are all the same concept, sitting in one bucket.

<!-- SCREENSHOT-ABLE ONE-LINER -->
Area under a curve, antiderivatives, and integration are the same concept. Most students study them as three separate things and lose points on all three.
<!-- END ONE-LINER -->

Here is exactly how they connect. The Fundamental Theorem of Calculus, which you will see explicitly on the AP exam, proves that finding the area under $f(x)$ from $a$ to $b$ is the same as finding an antiderivative of $f(x)$ and evaluating it at those two points. The integral sign is just the notation that holds all of it together.

$$\int_a^b f(x)\,dx = F(b) - F(a)$$

Where $F(x)$ is any antiderivative of $f(x)$. Not a different operation. Not a coincidence. The same operation, viewed from different angles.

I tell every student this at the start of Unit 6: stop treating area problems and antiderivative problems as separate categories. They are both asking you to integrate. The notation looks different. The concept is identical.

This is why ap calculus integration explained correctly from the start saves you hours of confusion later. Students who missed the connection spend Unit 6 trying to memorize when to use which "type" of problem. Students who have the bucket memorize almost nothing, because each new problem type just fits into the same idea.

One more thing before we go to methods. The integral has two versions, and you need both:

**Indefinite integral.** No limits. Gives you a family of functions. The $+C$ is mandatory because any constant disappears when you differentiate.

$$\int f(x)\,dx = F(x) + C$$

**Definite integral.** Has limits $a$ and $b$. Gives you a number. The $+C$ cancels when you evaluate $F(b) - F(a)$.

$$\int_a^b f(x)\,dx = F(b) - F(a)$$

The definite integral is what the AP exam tests most often. The indefinite integral is what you compute on the way there. Know both, know when you are using each one.

---

## From Riemann Sums to the Integral: The Conceptual Bridge {#riemann-to-integral}

You are going to see Riemann sums on the AP exam. They show up in MCQ and occasionally in FRQ. The students who score points on them understand why the Riemann sum exists. The students who lose points try to memorize the formula without understanding it.

Here is the actual idea. You have a curve. You want the area under it from $x = a$ to $x = b$. You do not have a formula for that area yet. But you do have rectangles.

Slice the interval $[a, b]$ into $n$ equal pieces. Each piece has width $\Delta x = \dfrac{b-a}{n}$. Build a rectangle on each piece using the function value at the left edge, or right edge, or midpoint. Add up all the rectangle areas.

$$\sum_{i=1}^{n} f(x_i)\,\Delta x$$

That sum is the Riemann sum. It approximates the area. The more rectangles you use, the larger $n$ gets, and the closer your approximation gets to the true area.

The integral is what happens when you make $n$ go to infinity and let $\Delta x$ shrink to zero:

$$\int_a^b f(x)\,dx = \lim_{n \to \infty} \sum_{i=1}^{n} f(x_i)\,\Delta x$$

This is not just notation. This is the actual definition of the definite integral. The riemann sum to integral transition is the core conceptual leap of Unit 6. Once you see it this way, the $dx$ in every integral makes sense. It is not a quirk of notation. It is the limit of $\Delta x$ as the width of each rectangle shrinks to zero.

The AP exam does not always ask you to compute Riemann sums from scratch. But it does ask you to:
- Estimate the value of an integral using a left, right, or midpoint sum from a table
- Determine whether a Riemann sum is an over- or under-estimate based on concavity
- Recognize that the definite integral is defined as this limit

All three of those question types are testing whether you understand the riemann sum to integral connection. If you only memorized the formula, you will guess on at least 2 of them. For a look at exactly which skills College Board tests in Unit 6, the [AP Calculus AB Course and Exam Description](https://apcentral.collegeboard.org/courses/ap-calculus-ab) maps this out in detail.

[DESMOS EMBED:
Functions: y=0.5*x^2+1 (navy #1a3a6b), filled region under curve from x=1 to x=3
Rectangles: left Riemann sum with n=4 over [1,3] (gold #e8a020 with transparency)
Window: x[-0.5, 4] y[-0.5, 6]
Lock viewport: yes
Notes: Visualizes the gap between rectangular approximation and true area under y=0.5x^2+1 from x=1 to x=3. Gold rectangles are the Riemann sum, navy curve is the actual function.]

---

## Worked Example 1: Setting Up a Definite Integral (Foundational) {#example-1}

**Problem:** A particle moves along a straight line with velocity $v(t) = 3t^2 - 2t + 1$ for $0 \leq t \leq 4$. Find the total distance traveled.

The velocity function gives rate of change of position. To find total distance, we accumulate that rate over the interval. That is the integral. Note the direction here: IROC (instantaneous rate of change) is a derivative concept, giving you the slope at a single moment. Integration works in the opposite direction from AROC (average rate of change) thinking altogether. You are not averaging. You are summing every instant across the interval to get the total accumulated amount.

**Step 1: Identify the setup**

We want $\displaystyle\int_0^4 v(t)\,dt = \int_0^4 (3t^2 - 2t + 1)\,dt$.

Note: since $v(t) = 3t^2 - 2t + 1$ is always positive on $[0, 4]$, total distance equals displacement here. When velocity changes sign, the setup is more involved. That is a Unit 8 topic.

**Step 2: Find the antiderivative**

Using the power rule for integration: $\int t^n\,dt = \dfrac{t^{n+1}}{n+1} + C$.

$$\int (3t^2 - 2t + 1)\,dt = t^3 - t^2 + t + C$$

Check by differentiating: $\dfrac{d}{dt}(t^3 - t^2 + t) = 3t^2 - 2t + 1$. Confirmed.

**Step 3: Evaluate using the Fundamental Theorem of Calculus**

$$\int_0^4 (3t^2 - 2t + 1)\,dt = \left[t^3 - t^2 + t\right]_0^4$$

$$= (64 - 16 + 4) - (0 - 0 + 0)$$

$$= \boxed{52}$$

The particle traveled a total of 52 units over the interval $[0, 4]$.

**Here is exactly how the AP exam scores this type of problem:**
- Correctly identify that total distance = $\int_0^4 v(t)\,dt$ (the setup line earns the first point)
- Apply the power rule for each term correctly. The most common error is forgetting to increase the exponent by 1 and adjust the coefficient
- Show the evaluation step $F(4) - F(0)$ explicitly. Do not skip from antiderivative to final answer
- State the final answer with units if context provides them (the AP exam often does)

---

## Grab the Free "Before AP Calculus" Guide {#mid-cta}

Unit 6 is where the conceptual foundation from Units 1 and 2 either holds or cracks. If you want to know exactly what needs to be solid before integration clicks for your student, I have a free guide that maps it out. No fluff.

[Get the Free Guide: aceapcalculus.com/before-apcalc](/before-apcalc)

*Parents: this guide is worth reading before Unit 6 starts, not after the first quiz goes sideways.*

---

## Worked Example 2: The MCQ Recognition Type {#example-2}

The AP exam hands you a definite integral and asks you to identify what it represents. This is the "interpret the integral" problem type. It shows up in MCQ almost every year in some form. If you know what you are looking at, this is a 45-second question. If you do not, you will spend 4 minutes convincing yourself it is something else.

**Problem:** The function $f$ is continuous on $[1, 5]$. The following expression represents which of the following?

$$\lim_{n \to \infty} \sum_{i=1}^{n} f\!\left(1 + \frac{4i}{n}\right) \cdot \frac{4}{n}$$

(A) $\displaystyle\int_0^4 f(x)\,dx$

(B) $\displaystyle\int_1^5 f(x)\,dx$

(C) $\displaystyle\int_1^4 f(x)\,dx$

(D) $4\int_1^5 f(x)\,dx$

**Solution:**

The first thing I look at in any Riemann sum is the $\Delta x$ term. Here it is $\dfrac{4}{n}$. That tells me the total width of the interval is 4.

The starting point: the sample points are $x_i = 1 + \dfrac{4i}{n}$. When $i = 1$, $x_1 = 1 + \dfrac{4}{n}$ (near 1). When $i = n$, $x_n = 1 + 4 = 5$. So the interval runs from 1 to 5. Total width: $5 - 1 = 4$. That confirms $\Delta x = \dfrac{4}{n}$.

This is a right Riemann sum for $f(x)$ on $[1, 5]$.

$$\boxed{\text{Answer: (B)} \quad \int_1^5 f(x)\,dx}$$

**Where students pick the wrong answer:** Choice (A) trips students who only look at the $\dfrac{4}{n}$ and assume the interval is $[0, 4]$ without checking the sample points. Choice (C) trips students who see the starting point $1$ and the width $4$ and add them incorrectly.

**Here is exactly what the AP exam is checking on this problem type:**
- Identify $\Delta x = \dfrac{b-a}{n}$ and use it to determine the interval width
- Determine the left endpoint by examining what happens when $i$ is small (near 0 or near 1)
- Determine the right endpoint by examining what happens when $i = n$
- Confirm that the product $f(x_i) \cdot \Delta x$ matches the integrand structure you expect
- Do not guess from the numbers alone. Trace the sample point formula every time

This is an ap calc unit 6 integration problem type that rewards students who know the Riemann sum definition. Guessing costs you one point. Knowing the structure earns it in under a minute.

---

## The 3 Mistakes That Cost My Students Points {#mistakes}

**Mistake 1: Treating integration as "just run differentiation in reverse"**

Why it happens: The power rule for integration looks like the power rule for differentiation played backwards, and for simple polynomial functions it basically is. Students lock onto that pattern and stop there.

The consequence: this framing falls apart the moment the AP exam shows them $\int e^x\,dx$, $\int \sin(x)\,dx$, or anything requiring u-substitution. Students who only know "run it backwards" have no framework for what to try next. They freeze on approximately 30 to 40 percent of the integration MCQ section. That is 4 to 6 points gone.

How to fix it: think of integration as its own operation. You are finding a function whose derivative matches the integrand. The connection to differentiation is real and useful, but it is a tool, not the definition. Once you have that shift, you stop trying to reverse every derivative rule mechanically and start asking "what function, when differentiated, gives me this?"

**Mistake 2: Dropping the constant of integration $+C$ on indefinite integrals**

Why it happens: Students correctly solve the integral, write the antiderivative, and stop. The $+C$ feels like a technicality their teacher mentions but that the AP exam probably will not care about.

The consequence: it costs 1 point on any FRQ that asks for a general antiderivative or uses initial conditions to find a specific function. And in MCQ, answer choices are written to trap students who drop it. The correct answer will include $+C$ and the most tempting wrong answer will look identical without it.

How to fix it: every time you write an indefinite integral result, the $+C$ goes on. Not sometimes. Not when it seems relevant. Every time. Make it a reflex, not a decision.

**Mistake 3: Confusing what the definite integral represents in context**

Why it happens: Students know the formula $F(b) - F(a)$ but cannot answer "what does this number mean in the problem?" They compute correctly and then freeze on the interpretation question. Students who never built the accumulation picture in their head have no way to answer context questions. They only learned a procedure, not a concept.

The consequence: AP FRQ Part (d) almost always asks for interpretation. MCQ regularly pairs an integral computation with a follow-up that asks what the result represents. Students who can compute but cannot interpret lose 2 to 3 points per FRQ that includes a context question. That is the gap between a 4 and a 5 for a lot of students.

How to fix it: for every integral you compute, write one sentence explaining what the number means before you move on. "This means the total displacement of the particle over 4 seconds is 52 units." One sentence. It trains the habit before the exam trains it out of you under time pressure.

---

## A Note on the 89% Rule {#eighty-nine}

I want to name something here before you get 3 weeks into Unit 6 and start wondering why some integrals look completely different from anything you have seen.

When you start practicing harder integrals, you will hit problems that do not just yield to the basic power rule. You will wonder what to try first. Should you use u-substitution? Integration by parts? Something else? If you do not have a decision process, you will try things randomly and waste minutes on exam day.

I call it the 89% Rule. It is a decision flowchart I use with every student. A specific sequence of questions you ask yourself when you look at a hard integral, in a specific order, that covers the techniques you need for approximately 89 percent of the hardest integrals that appear on the AP exam. Not every technique. The right ones, in the right order.

I am going to dedicate a full post to the 89% Rule because the flowchart itself needs its own worked examples. But here is what you need to know right now: when you hit an integral you cannot immediately solve, the answer is almost never "try everything." It is "follow the flowchart." Start with the simplest check. Move to the next only if needed. The first step in the flowchart covers roughly 60 percent of problems on its own.

For this intro post, the thing to carry forward is that integration vs differentiation in ap calc is not just a directional difference. Integration is its own subject with its own decision structure. You are not reversing derivatives. You are accumulating. The tools follow from the concept.

---

## Practice Problems {#practice}

Try these on your own before checking the answers. If you get stuck, identify whether you are dealing with an indefinite or definite integral first, then ask what the accumulation represents.

**Problem 1: Basic Antiderivative**

Find: $\displaystyle\int (4x^3 - 6x + 2)\,dx$

**Problem 2: Definite Integral with Context**

The rate at which water flows out of a tank is modeled by $r(t) = 2t + 5$ gallons per minute, for $0 \leq t \leq 10$. How many total gallons leave the tank over the 10-minute period?

**Problem 3: Riemann Sum Interpretation**

The table below shows values of a continuous function $g$.

| $x$ | 2 | 4 | 6 | 8 |
|-----|---|---|---|---|
| $g(x)$ | 3 | 7 | 5 | 9 |

Using a left Riemann sum with 3 equal subintervals of width 2, approximate $\displaystyle\int_2^8 g(x)\,dx$.

**Answers:**

Problem 1: $x^4 - 3x^2 + 2x + C$

Problem 2: $\displaystyle\int_0^{10}(2t+5)\,dt = \left[t^2 + 5t\right]_0^{10} = (100 + 50) - 0 = 150$ gallons

Problem 3: Left Riemann sum uses left endpoints $x = 2, 4, 6$ with width $\Delta x = 2$:
$\approx g(2) \cdot 2 + g(4) \cdot 2 + g(6) \cdot 2 = 3(2) + 7(2) + 5(2) = 6 + 14 + 10 = 30$

---

## FAQ {#faq}

**Q: What is the difference between an antiderivative and an integral in AP Calculus?**

An antiderivative is a function $F(x)$ such that $F'(x) = f(x)$. An indefinite integral gives you the family of all antiderivatives: $F(x) + C$. A definite integral gives you a number: the accumulated value of $f$ over a specific interval. The Fundamental Theorem of Calculus connects them by showing that you compute the definite integral using an antiderivative. The notation looks different. The operation connects them directly. Know the difference because the AP exam tests interpretation, not just computation. I tell my students: antiderivative is the tool, integral is the result.

**Q: Is integration vs differentiation on the AP exam mostly separate or do they mix?**

They mix constantly. That is deliberate. The AP exam is specifically designed to test whether you understand the Fundamental Theorem connection. You will see questions that give you a graph of $f'(x)$ and ask about $f(x)$. You will see questions that give you $\int_a^x f(t)\,dt$ and ask you to differentiate it. Students who treat derivatives and integrals as entirely separate chapters get blindsided. Students who understand the FTC connection see these as the same question in different clothing. If you are uncertain about how differentiation and integration interact in ap calc, that is what the Fundamental Theorem post covers directly.

**Q: Do I need to know Riemann sums for the AP exam, or just how to compute integrals?**

Both. The AP exam tests Riemann sums directly in MCQ, typically in the form of "what does this limit of a sum equal?" or "is this left-sum an over- or under-estimate?" You cannot answer either question by just knowing integration rules. You need the conceptual picture of rectangles accumulating under a curve. Two to three MCQ questions per year require genuine understanding of what a Riemann sum is. That is 2 to 3 automatic points for students who have the picture and automatic losses for students who only practiced the computation shortcut. Learn the picture first.

**Q: What does the $+C$ actually mean and does the AP exam really penalize for dropping it?**

The $+C$ exists because differentiation destroys constants. If $F(x) + 5$ and $F(x) + 12$ both differentiate to the same $f(x)$, then the antiderivative of $f(x)$ is not uniquely $F(x)$. It is $F(x)$ plus any constant. The $+C$ is the honest acknowledgment that you do not know which constant was there. The AP exam does penalize for dropping it, specifically on FRQ. I have seen rubrics where an otherwise perfect antiderivative earns zero on a justification point because the student omitted $+C$. One character. Do not sacrifice a point for it. If you want extra drills on indefinite integrals and the $+C$ habit, [Khan Academy's AP Calculus AB integration unit](https://www.khanacademy.org/math/ap-calculus-ab/ab-integration-new) has solid practice sets organized by skill.

---

## Save This For Exam Day {#quick-reference}

**Core integral definition:**
$$\int_a^b f(x)\,dx = \lim_{n \to \infty} \sum_{i=1}^{n} f(x_i)\,\Delta x$$

**Fundamental Theorem of Calculus:**
$$\int_a^b f(x)\,dx = F(b) - F(a) \quad \text{where } F'(x) = f(x)$$

**Power rule for integration:**
$$\int x^n\,dx = \frac{x^{n+1}}{n+1} + C \quad (n \neq -1)$$

**The bucket:**
- Area under a curve = antiderivative evaluated at endpoints = definite integral
- All three are the same operation

**Never do this:**
- Drop $+C$ on an indefinite integral. It is always required.
- Skip the $F(b) - F(a)$ step. Write it out explicitly even when the arithmetic is fast.
- Interpret a Riemann sum approximation as an exact value

**Key notation check:**
- $\int f(x)\,dx$: indefinite integral, answer is a function family ($+C$ required)
- $\int_a^b f(x)\,dx$: definite integral, answer is a number ($+C$ cancels)

---

## Related Posts {#related}

If you found this useful, these posts connect directly to what you just read:

- [What Is a Derivative in AP Calculus? (The Concept, Not Just the Formula)](/what-is-a-derivative-ap-calculus). The Unit 2 foundation that integration builds on. If the Fundamental Theorem connection felt shaky, start here.
- [AP Calculus Review Sheet: 50 Key Facts for Exam Day](/reviewsheet50). A one-page reference covering the integration rules, FTC, and every formula you need to have locked before the exam.

*(Note to Zach: Link to the Unit 6 pillar post when it goes live. Additional integration spokes to come: u-substitution, FTC deep dive, the 89% Rule post.)*

---

## Get the Free Guide. Then Come Back Ready. {#end-cta}

Integration is the point where students find out how solid their foundation actually is. If Units 1 through 5 were mostly memorizing rules without building the picture, Unit 6 is where that gap costs real points. The good news: the conceptual piece is learnable fast. The bad news: it does not happen by doing more practice problems without it.

I put together a free guide that walks through exactly what needs to be in place before integration clicks. It takes about 10 minutes to read and it will show you where the gaps are before the next quiz finds them for you.

[Download the Free Guide: aceapcalculus.com/before-apcalc](/before-apcalc)

*Parents: if your student is heading into Unit 6 right now, this is worth putting in front of them today. The conceptual gap I described in this post is the one I see most often in students who come to me for help mid-unit.*

---

**[SEASONAL CTA: Active through September 15, 2026]**

If you want your student to arrive at AP Calculus next year with the integration foundation already built, my summer program runs in July and August. Small groups. Real FRQ practice. The 89% Rule, taught properly from the start. Spots fill fast.

[See Summer Program Details and Reserve a Spot: aceapcalculus.com/summer-diagnostic-page]

---

## SEO Metadata

**SEO Title:** What Is Integration in AP Calculus? (Unit 6 Intro Guide)
**Meta Description:** What an integral actually means in AP Calculus AB. Area, antiderivatives, and Riemann sums explained. Includes the 89% Rule and 2 worked examples.
**Slug:** what-is-integration-in-ap-calculus
**Primary Keyword:** what is integration in ap calculus
**Focus Keyphrase:** what is integration in ap calculus
**KEYWORD_CLUSTER:** ap calc unit 6 integration, integral definition calculus, antiderivative ap calculus, riemann sum to integral, integration vs differentiation ap calc, what does an integral mean, ap calculus integration explained
**Alt Text Suggestions:**
- "Riemann sum diagram showing rectangles approximating area under a curve from x equals 1 to x equals 3 in AP Calculus Unit 6"
- "Definite integral notation with limits of integration labeled for AP Calculus AB exam"
- "Fundamental Theorem of Calculus formula connecting antiderivative and definite integral"

**SERP_TARGET_WORD_COUNT:** ~3,000 (competitors average ~2,500; enforced 3,000 minimum)
**COVERAGE_GAPS_ADDRESSED:** Riemann sum to integral conceptual bridge, definite vs indefinite integral distinction, what does an integral mean in context, +C explained practically, FTC connection teaser, 89% Rule decision framework (unique: not on any competitor page)

---

## Zach's Flow Checklist

```
[ZACH'S FLOW CHECKLIST]
[ ] Math accuracy check:
    1. v(t) = 3t^2 - 2t + 1, antiderivative t^3 - t^2 + t. Confirmed by differentiating back.
    2. F(4) = 64 - 16 + 4 = 52. Confirmed.
    3. F(0) = 0. Confirmed.
    4. Riemann sum example: 3(2) + 7(2) + 5(2) = 30. Confirmed.
    5. Water tank: integral of 2t+5 from 0 to 10 = [t^2+5t]_0^10 = 150. Confirmed.
    6. Power rule for integration formula n not equal to -1. Confirmed.
    7. FTC notation F(b)-F(a). Confirmed.
    8. Right Riemann sum sample point x_i = 1 + 4i/n when i=n gives x=5. Confirmed.

[ ] Personal moment: INSERTED in the 89% Rule section (teaser) and Mistake 3 (UNIQUE_ANGLE woven in naturally)

[ ] Voice check: Read aloud "Area under a curve, antiderivatives, and integration are the same concept." Also: "Think of integration as its own operation. You are finding a function whose derivative matches the integrand." Rewrite if needed.

[ ] Desmos graph: Riemann sum visualization. y=0.5x^2+1 with gold left rectangles over [1,3], 4 rectangles. Window x[-0.5,4] y[-0.5,6]. Screenshot from HTML preview.

[ ] CTA confirmation: Mid-post Option A (free guide). End Option A (free guide) + Seasonal Option E (summer diagnostic + summer program) active through Sept 15, 2026.

[ ] Estimated read time: ~3,200 words / 200 = 16 min. Rounded to 15 min on the header.
```

---

## SKILL DELTA

```
SKILL DELTA:
- New lesson learned: The "one bucket" framing (area = antiderivative = integral) is a strong contradiction move for integration posts. Students are taught these as separate topics and the unification is genuinely surprising. Carry this framing to any integration-adjacent post.
- Forbidden pattern eliminated: Did not open any section with a definition. "The integral is..." never appears as a section opener. Always led with analogy (pool filling) or contradiction (three topics, one bucket).
- Analogy or voice move that worked: Pool-filling analogy for accumulation. More visceral than the standard "area under a curve" framing because it answers "why would you ever add up infinitely many slices?" with a practical answer before giving the notation.
- MCQ/FRQ framing note: Example 2 is Riemann sum recognition. A classic MCQ interpretation problem. Correctly opened rubric with "Here is exactly what the AP exam is checking on this problem type." Example 1 uses FRQ rubric opener per instructions.
```
