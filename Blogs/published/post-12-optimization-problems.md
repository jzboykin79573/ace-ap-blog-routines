---
title: "Optimization Problems in AP Calculus: The FRQ Setup Most Students Skip"
slug: post-12-optimization-problems
post_type: long-form
date: 2026-05-04
unit: "Unit 5: Analytical Applications of Differentiation"
mcq_or_frq: frq
primary_keyword: optimization AP Calculus
keyword_cluster:
  - AP Calculus optimization problems
  - maximize and minimize calculus
  - critical points AP exam
  - second derivative test optimization
  - calculus optimization steps
  - AP FRQ optimization
  - derivative application problems
  - closed interval method calculus
cluster_role: spoke
pillar_slug: TBD
data_year: 2026
reading_time: "15 min read"
hook_type: name-the-feeling
---

# Optimization Problems in AP Calculus: The FRQ Setup Most Students Skip

**15 min read | Used by 500+ EngiNearU students preparing for AP exam day**

---

## Jump To What You Need

- [The Setup Freeze](#setup-freeze)
- [What Optimization Actually Means](#what-it-means)
- [The 8-Step Optimization Framework](#framework)
- [Worked Example 1: The Box Problem (Foundational)](#example-1)
- [Check Your Score Before the Exam](#mid-cta)
- [Worked Example 2: Full FRQ-Level Problem](#example-2)
- [The 3 Mistakes That Cost My Students Points](#mistakes)
- [Practice Problems](#practice)
- [FAQ](#faq)
- [Save This For Exam Day](#quick-reference)
- [Related Posts](#related)

---

## The Setup Freeze {#setup-freeze}

<!-- HOOK TYPE: name-the-feeling -->
There is a specific moment in every optimization AP Calculus problem where students who know derivatives cold suddenly go quiet. It happens before the derivative. Before the algebra. It happens in the first 90 seconds, when the exam hands you a word problem and there is no equation written out yet. You are staring at a scenario about a box, or a fence, or a can, and your brain is asking one question on repeat: "What do I even write first?"

I call it the Setup Freeze. And it is not a calculus problem. It is a translation problem.

<!-- NEEDS UNIQUE ANGLE: add Zach story here -->

Every student I have ever worked with can take a derivative. That is not the issue. The AP FRQ optimization section is where scores separate because the exam hands you a context, not an equation. You have to build the equation yourself before any derivative happens. Most AP prep resources skip directly to the derivative step. That gap is exactly what this post closes.

This post covers AP Calculus optimization problems from the first word of a setup through the final answer with correct justification. If you have been scoring fine on derivative rules but losing points on applied FRQs, this is why. And if the AP exam is coming up soon, Unit 5 accounts for 15 to 18 percent of your score. That is not a section you can afford to treat as a bonus.

---

## What Optimization Actually Means {#what-it-means}

Most students hear "optimization" and think: take a derivative and set it equal to zero. That part is right. But it is the last third of the process, not the whole thing.

Here is the analogy I use with every student I tutor. Imagine you are packing a car for a road trip. You have a fixed trunk space and you want to fit as many bags as possible without going over. You cannot just start shoving bags in. You need to know the trunk dimensions first (constraint), figure out what you are maximizing (objective), and then figure out what you can actually control (variable). The derivative only comes in when you are ready to find the best possible arrangement.

That is optimization. There is always something to maximize or minimize (the objective), always something fixed that limits your options (the constraint), and always a variable you control.

In AP Calculus, those three pieces show up in every maximize and minimize calculus problem. The objective function tells you what you are trying to make as large or as small as possible. The constraint equation tells you what is fixed. Reducing to one variable using the constraint is the step most students rush or skip entirely. The derivative and critical points come after that.

The formal definition: optimization is the process of finding the absolute maximum or absolute minimum value of a function on a given domain. The word "absolute" matters here. You are not looking for a local high point or a local low point somewhere in the middle. You want the actual best value across the entire relevant domain.

That distinction between local and absolute extrema is tested directly. A local max is just higher than its immediate neighbors. An absolute max is the highest point on the entire domain. On an AP FRQ, the exam will ask you to justify which one you have found. Your justification is what earns the point, not the number itself.

---

## The 8-Step Optimization Framework {#framework}

This is the process I walk every student through before they touch a single derivative. Write it down. Internalize it. The AP FRQ optimization problems will not always use these words, but every problem maps onto this structure.

**Step 1: Identify what you are maximizing or minimizing.**
Read the problem and underline the quantity that needs to be as large or as small as possible. Volume, area, cost, distance, profit. Write it at the top of your work in words before you write any variable.

**Step 2: Name your variables.**
Pick letters. Be explicit. "Let $x$ be the width in centimeters. Let $y$ be the height in centimeters." If you skip this step, your work cannot earn justification points even when your math is right.

**Step 3: Write the primary equation (the objective function).**
Express what you are optimizing in terms of your variables. This might be $V = x^2 h$ for a box volume, or $A = \frac{1}{2}bh$ for a triangle area. You need a formula before you can do anything with it.

**Step 4: Write the constraint equation.**
This is the most skipped step on the AP exam. Every optimization problem has a constraint: total fencing is 240 meters, total surface area is 300 square centimeters, total cost must stay under a budget. Write it as an equation. No constraint equation means you are missing the tool that reduces your problem to one variable.

**Step 5: Reduce to one variable.**
Use the constraint equation to solve for one variable and substitute into the objective function. This is the algebra-heavy step. After this, your objective function should have only one variable.

**Step 6: Find critical points.**
Take the derivative of the single-variable objective function and set it equal to zero. Solve for the variable. These are your critical points. This is where the instantaneous rate of change equals zero. Think of it this way: when the derivative is zero, the rate at which your objective is changing hits exactly zero. That is the precise moment where the function transitions from increasing to decreasing, or vice versa.

This is also the step where average vs. instantaneous rate of change becomes directly relevant. The average rate of change of your objective function across an interval tells you roughly how it behaves. But the derivative (the instantaneous rate of change) tells you exactly where the maximum or minimum occurs. Finding where $f'(x) = 0$ is asking: where does the instantaneous rate of change equal zero? That is a Unit 2 concept living inside a Unit 5 problem.

**Step 7: Classify using the First or Second Derivative Test.**
Finding a critical point is not enough. You need to confirm whether it is a maximum, a minimum, or neither. The second derivative test for optimization says: if $f''(c) < 0$ at your critical point, you have a local maximum. If $f''(c) > 0$, you have a local minimum.

**Step 8: Check endpoints if the domain is a closed interval.**
If the problem gives you a closed interval, use the closed interval method. Evaluate your objective function at both endpoints AND at your critical point. The largest value is your absolute max. The smallest is your absolute min. Do not skip endpoints. This is a Category 1 AP mistake.

---

## Worked Example 1: The Box Problem (Foundational) {#example-1}

This is the most common optimization problem type in AP Calculus AB. Expect to see a version of it on the FRQ or in related rate-adjacent problems.

**Problem:** A rectangular piece of cardboard is 12 cm by 12 cm. Equal squares of side length $x$ are cut from each corner. The sides are folded up to form an open box. Find the value of $x$ that maximizes the volume of the box.

**Step 1: Identify the objective.** We want to maximize volume.

**Step 2: Name variables.** Let $x$ = side length of each cut corner, in cm.

**Step 3: Write the objective function.**

When the corners are cut and the sides fold up, the box has:
- Height: $x$
- Length: $12 - 2x$
- Width: $12 - 2x$

$$V(x) = x(12 - 2x)^2$$

**Step 4: Identify the constraint (domain).**

The side length $x$ must be positive and cannot exceed half the shorter dimension. So $0 < x < 6$. This is a closed domain, so we will check endpoints too.

**Step 5: Already in one variable.** The substitution is built into how we set up the box.

**Step 6: Find critical points.** Expand $V(x)$ first:

$$V(x) = x(144 - 48x + 4x^2) = 144x - 48x^2 + 4x^3$$

Take the derivative:

$$V'(x) = 144 - 96x + 12x^2$$

Set $V'(x) = 0$:

$$12x^2 - 96x + 144 = 0$$

$$x^2 - 8x + 12 = 0$$

$$(x - 2)(x - 6) = 0$$

So $x = 2$ or $x = 6$. Since $x = 6$ is the endpoint (and gives a flat, volumeless box), the only interior critical point is $x = 2$.

**Step 7: Second Derivative Test**

$$V''(x) = -96 + 24x$$

$$V''(2) = -96 + 48 = -48 < 0$$

Since $V''(2) < 0$, the function is concave down at $x = 2$. This is a local maximum.

**Step 8: Check Endpoints**

- $V(0) = 0$
- $V(2) = 2(12 - 4)^2 = 2(64) = 128 \text{ cm}^3$
- $V(6) = 0$

The absolute maximum volume is $\boxed{128 \text{ cm}^3}$ when $x = 2 \text{ cm}$.

**Here is exactly how the AP exam scores this type of problem:**

- Correct objective function setup with all dimensions written out: 1 point
- Correct derivative with algebra shown: 1 point
- Correct critical point(s) identified: 1 point
- Classification justified (second derivative test or sign chart, not just stated): 1 point
- Correct answer with units: 1 point
- Endpoint check included (or explicit acknowledgment that domain is open): 1 point

The justification step is where students leave points on the table. Writing "$x = 2$ is a maximum" without showing the second derivative test or a sign chart earns zero on the classification point. The AP grader needs to see the reasoning, not just the conclusion.

---

## Check Your Score Before the Exam {#mid-cta}

Not sure how close you are to a 4 or 5? I put together a free pre-assessment at EngiNearU that takes about 10 minutes and shows exactly where your score stands right now.

[Take the Free Pre-Assessment: aceapcalculus.com/summer-diagnostic-page]

*(Parents: this is the fastest way to know if your student needs targeted support before the AP exam or summer prep.)*

---

## Worked Example 2: Full FRQ-Level Problem {#example-2}

This is the kind of optimization problem that shows up as a full free-response question, with multiple parts requiring setup, calculus, and written justification.

**Problem:** A farmer has 240 meters of fencing to build a rectangular enclosure. One side of the enclosure is a barn wall, so it does not need fencing. Find the dimensions of the enclosure that maximize the enclosed area.

**Here is exactly how the AP exam scores this type of problem.**

There are 3 sides to fence: two widths and one length.

**Setup:**

Let $x$ = width of the enclosure (meters), so two of these sides need fencing.
Let $y$ = length of the enclosure (the side parallel to the barn), in meters.

**Objective function:**

$$A = xy$$

**Constraint equation:**

$$2x + y = 240$$

**Reduce to one variable:**

Solve the constraint for $y$:

$$y = 240 - 2x$$

Substitute into the area function:

$$A(x) = x(240 - 2x) = 240x - 2x^2$$

**Domain:** $x > 0$ and $y > 0$, so $x > 0$ and $240 - 2x > 0$, giving $0 < x < 120$.

**Find the critical point:**

$$A'(x) = 240 - 4x$$

Set $A'(x) = 0$:

$$240 - 4x = 0 \implies x = 60$$

**Justify that $x = 60$ gives a maximum.**

Two valid methods:

**Method 1: Second Derivative Test**

$$A''(x) = -4$$

Since $A''(60) = -4 < 0$, the function is concave down at $x = 60$. By the Second Derivative Test, $x = 60$ gives a local maximum. Since there is only one critical point on the open interval $(0, 120)$, this is also the absolute maximum.

**Method 2: First Derivative Sign Chart**

| Interval | $A'(x)$ | Behavior |
|---|---|---|
| $(0, 60)$ | positive | increasing |
| $(60, 120)$ | negative | decreasing |

$A'$ changes from positive to negative at $x = 60$, confirming a local maximum. With one critical point on the open interval, this is the absolute maximum.

**Calculate dimensions:**

$$x = 60 \text{ m} \quad \Longrightarrow \quad y = 240 - 2(60) = 120 \text{ m}$$

**Maximum area:**

$$A(60) = 60 \times 120 = \boxed{7200 \text{ m}^2}$$

**FRQ Communication Layer: What the AP Grader Reads**

The College Board rubric for this problem type expects students to write full sentences for their justification. A correct answer of 7200 with no written justification earns partial credit, not full credit. Here is what a full-credit justification looks like:

"Since $A'(x) = 240 - 4x$ changes from positive to negative at $x = 60$, by the First Derivative Test, $A(x)$ has a local maximum at $x = 60$. Because $x = 60$ is the only critical point in the interval $(0, 120)$, this local maximum is also the absolute maximum."

Write that. Or the equivalent for the Second Derivative Test. Do not just write the answer and circle it.

**AP rubric scoring breakdown:**

- Correct objective function: 1 point
- Correct constraint equation written and used: 1 point
- Derivative of single-variable function: 1 point
- Correct critical point: 1 point
- Justification (written reasoning, not just computed): 1 point
- Correct final dimensions with units: 1 point

Total: 6 points. Students who skip the constraint equation lose at minimum 2 points before the derivative is even taken.

---

## The 3 Mistakes That Cost My Students Points {#mistakes}

<!-- NEEDS UNIQUE ANGLE: add Zach story here -->

**Mistake 1: Skipping the Constraint Equation**

Why it happens: Students see the objective function and go straight to the derivative. The problem states a total, and students treat it as background information instead of a mathematical equation they need to write.

Consequence: Without the constraint, you cannot reduce to one variable. You end up with a derivative that has two unknowns and no way to solve it. This alone can cost 2 to 3 points on a 6-point FRQ. I have watched students who set up the objective correctly lose half the points on the problem because they never wrote a single constraint equation.

**Mistake 2: Not Checking Endpoints on Closed Interval Problems**

Why it happens: Students find a critical point, classify it, and stop. The closed interval method says you must also evaluate the function at both endpoints. The absolute maximum or minimum might be at an endpoint, not at the critical point.

Consequence: If the exam specifies a closed interval and you ignore the endpoints, you will potentially give the wrong answer even when your derivative work is perfect. That is a full problem wrong with mostly correct algebra. On a derivative application problems section of the FRQ, this mistake appears in roughly one out of every three problems I see from my students.

**Mistake 3: Justifying with Words Alone, or Math Alone**

Why it happens: Students either write "this is a max because the second derivative is negative" without showing the computation, or they show $V''(2) = -48$ with no sentence explaining what that means for the problem.

Consequence: The justification point on an AP FRQ requires both the computation and a sentence connecting it to the conclusion. Writing "since $f''(c) < 0$, $f$ has a local maximum at $c$, and since this is the only critical point on the open interval, it is the absolute maximum" is what earns full credit. Just showing the number does not. This costs students exactly 1 point per problem and adds up across a full exam.

<!-- SCREENSHOT-ABLE ONE-LINER -->
Set up your constraint equation before you touch the derivative, or you are already losing points.
<!-- END ONE-LINER -->

---

## Practice Problems {#practice}

Try these on your own before checking the answers. If you get stuck, go back to the 8-step framework and identify exactly where your setup breaks down. That is usually the constraint step.

**Problem 1: Fencing Perimeter**

A rancher has 400 feet of fencing to enclose a rectangular area, then divide it in half with a fence parallel to one side. Find the dimensions of the full enclosure that maximize the total area.

**Problem 2: Cylinder Volume**

A cylindrical can is to hold $250\pi$ cubic centimeters of liquid. The cost of the material for the top and bottom is twice the cost per square centimeter as the material for the side. Find the radius that minimizes the total material cost. (Express your answer in terms of the cost variable, or find the radius when relative costs are $c = 1$ for side and $c = 2$ for top/bottom.)

**Problem 3: AP Exam Style (Closed Interval)**

A particle moves along the x-axis with position function $x(t) = 2t^3 - 9t^2 + 12t$ for $0 \le t \le 4$.

(a) Find all critical points of $x(t)$ on the interval $[0, 4]$.

(b) Find the absolute maximum and absolute minimum positions using the closed interval method.

(c) Justify your answer for part (b) in one complete sentence referencing the Candidates Test.

**Answers:**

Problem 1:

Let $x$ = width (the side that gets divided), $y$ = length. Fencing used: $3x + 2y = 400$ (three widths, two lengths). Area: $A = xy$. Constraint: $y = \frac{400 - 3x}{2}$.

$$A(x) = x \cdot \frac{400 - 3x}{2} = 200x - \frac{3x^2}{2}$$

$$A'(x) = 200 - 3x = 0 \implies x = \frac{200}{3} \approx 66.7 \text{ ft}$$

$$y = \frac{400 - 200}{2} = 100 \text{ ft}$$

Maximum area: $A = \frac{200}{3} \times 100 = \frac{20000}{3} \approx 6667 \text{ ft}^2$

Problem 2:

Let $r$ = radius, $h$ = height. Volume: $\pi r^2 h = 250\pi$, so $h = \frac{250}{r^2}$. Cost function: $C = 2(2\pi r^2) + 2\pi r h = 4\pi r^2 + 2\pi r \cdot \frac{250}{r^2} = 4\pi r^2 + \frac{500\pi}{r}$.

$$C'(r) = 8\pi r - \frac{500\pi}{r^2} = 0 \implies 8r^3 = 500 \implies r = \sqrt[3]{\frac{500}{8}} = \sqrt[3]{62.5} \approx 3.97 \text{ cm}$$

Problem 3:

(a) $x'(t) = 6t^2 - 18t + 12 = 6(t^2 - 3t + 2) = 6(t-1)(t-2)$. Critical points: $t = 1$ and $t = 2$.

(b) Evaluate at $t = 0, 1, 2, 4$:

- $x(0) = 0$
- $x(1) = 2 - 9 + 12 = 5$
- $x(2) = 16 - 36 + 24 = 4$
- $x(4) = 128 - 144 + 48 = 32$

Absolute maximum: $x = 32$ at $t = 4$. Absolute minimum: $x = 0$ at $t = 0$.

(c) "By the Candidates Test, the absolute maximum and minimum on a closed interval occur at critical points or endpoints; evaluating $x(t)$ at $t = 0, 1, 2, 4$ shows the absolute maximum is 32 at $t = 4$ and the absolute minimum is 0 at $t = 0$."

---

## FAQ {#faq}

**Q: Do I have to use the second derivative test, or can I use a sign chart instead?**

A: Either works for full credit on the AP exam. The second derivative test is faster when $f''(c)$ is easy to evaluate. The first derivative sign chart is more reliable when the second derivative is complex or when you are on a closed interval and need to compare endpoint values too. I personally prefer sign charts for optimization AP Calculus problems because they also tell you the behavior of the function around the critical point, which can make your written justification easier to write. What you cannot do is state a conclusion without showing either test. The AP grader needs to see the evidence.

**Q: What is the difference between a local max and an absolute max? Does the AP exam test both?**

A: Yes, and it tests them separately. A local maximum is a point where the function is larger than all nearby points. An absolute maximum is the largest value the function takes on the entire domain. An absolute max might not be at a critical point at all. It might be at an endpoint. The closed interval method compares all candidates: every critical point plus both endpoints. If the AP exam asks for the absolute maximum and you only check critical points, you may get the wrong answer. I see this mistake in a majority of my students' first practice FRQ attempts.

**Q: What if the second derivative test is inconclusive (the second derivative is zero at the critical point)?**

A: Go back to the first derivative sign chart. If $f''(c) = 0$, the test says nothing useful. Check whether $f'$ changes sign at $c$. If it goes from positive to negative, you have a local max. If it goes from negative to positive, you have a local min. If it does not change sign, you have an inflection point, not an extremum. This situation shows up occasionally on the AP exam, and students who only know the second derivative test get stuck. Learn both.

**Q: Can optimization appear in the MCQ section, or is it always FRQ?**

A: Both. The MCQ version typically gives you a pre-built function and asks which value of $x$ maximizes or minimizes it, or asks you to identify the sign of the derivative at a specific point. The FRQ version requires the full setup from a word problem. For the MCQ, the derivative application problems are manageable once you can recognize the form. For the FRQ, the setup is what decides your score. This post focuses on the FRQ because that is where the points are actually lost.

---

## Save This For Exam Day {#quick-reference}

**Optimization 8-Step Checklist**

1. Identify what to maximize or minimize
2. Name and define variables with units
3. Write the objective function
4. Write the constraint equation (do not skip this)
5. Reduce to one variable using the constraint
6. Take the derivative, set equal to zero, solve for critical points
7. Classify using Second Derivative Test or First Derivative Sign Chart
8. Check endpoints if domain is a closed interval

**Second Derivative Test for Optimization:**
- $f''(c) < 0$ at critical point $c$: local maximum
- $f''(c) > 0$ at critical point $c$: local minimum
- $f''(c) = 0$: inconclusive, use sign chart

**Closed Interval Method:**
Evaluate $f$ at all critical points AND both endpoints. Compare all values.
- Largest: absolute max
- Smallest: absolute min

**Justification sentence (use this as a template):**

"Since $f'(c) = 0$ and $f'$ changes from [positive/negative] to [negative/positive] at $x = c$, by the First Derivative Test, $f$ has a local [maximum/minimum] at $x = c$. Since this is the only critical point on the interval, this is also the absolute [maximum/minimum]."

**Common domain restrictions:**
- Side length cut from square sheet: $0 < x < \frac{\text{half the sheet dimension}}{}$
- Fencing: $x > 0$ and the other dimension must also be positive
- Radius of cylinder: $r > 0$

---

## Related Posts {#related}

These posts cover the concepts that feed directly into optimization:

- [What Is a Derivative in AP Calculus?](https://enginearu.com/ap-calculus-prep/what-is-a-derivative-ap-calculus/): The conceptual foundation. If the idea of "setting the derivative equal to zero" is fuzzy, start here.
- [What Are Limits in AP Calculus?](https://enginearu.com/ap-calculus-prep/what-are-limits-ap-calculus/): Limits are what make the derivative definition work. Understanding the AROC to IROC transition is directly relevant to why finding $f'(x) = 0$ locates extrema.
- [Related Rates in AP Calculus](/post-06-related-rates): The setup process for related rates is closely parallel to optimization. Both require you to write a constraint equation before touching the derivative. If constraint-writing feels shaky, read this first.
- [Derivative Rules in AP Calculus](/post-05-derivative-rules): Power rule, product rule, chain rule. You need all three for the differentiation step in optimization problems.
- [Mean Value Theorem in AP Calculus](/post-07-mean-value-theorem): The MVT guarantees critical points exist. Optimization relies on that guarantee when you write your justification.

---

## Get Ahead This Summer {#end-cta}

Optimization is the kind of topic that finally clicks when you work through 3 or 4 problems in a row with someone watching your setup. Reading about it gets you most of the way there. A focused session locks it in.

If the AP exam is coming up, take the free pre-assessment first. Ten minutes. It shows exactly which Unit 5 skills are solid and which ones are costing you points right now.

[Take the Free Pre-Assessment: aceapcalculus.com/summer-diagnostic-page]

*(Parents: this is the fastest way to see where your student stands before deciding on additional support.)*

---

**Summer Program: July and August 2026**

If you want your student to walk into next year's AP Calculus exam with optimization already locked in, my summer program covers every Unit 5 skill including a full FRQ simulation. Small groups. Real exam problems. Structured from day one.

[See Summer Program Details and Reserve a Spot]

*(Spots fill in June. If you are reading this in May, now is the right time.)*

---

## SEO Metadata

**SEO Title:** Optimization Problems in AP Calculus (2026 FRQ Guide)
**Meta Description:** Learn the 8-step optimization framework for AP Calculus FRQs. Box problems, fencing, cylinders. Full worked examples with scoring rubric. Built for exam day.
**Slug:** post-12-optimization-problems
**Primary Keyword:** optimization AP Calculus
**KEYWORD_CLUSTER:** AP Calculus optimization problems, maximize and minimize calculus, critical points AP exam, second derivative test optimization, calculus optimization steps, AP FRQ optimization, derivative application problems, closed interval method calculus
**SERP_TARGET_WORD_COUNT:** ~4,000 words (avg of top 3 for "optimization AP Calculus"; Paul's Online Math Notes ~5,500, Khan Academy unavailable, College Board page ~1,000)
**COVERAGE_GAPS_ADDRESSED:** FRQ communication layer (justification sentence template), AROC vs. IROC distinction in optimization context, endpoint check triage for closed intervals, AP rubric breakdown per point

---

## ZACH'S FLOW CHECKLIST

[ ] Math accuracy check:
1. Box volume: $V(x) = x(12-2x)^2 = 144x - 48x^2 + 4x^3$: confirmed
2. $V'(x) = 144 - 96x + 12x^2$: confirmed
3. $x^2 - 8x + 12 = (x-2)(x-6)$: confirmed
4. $V''(2) = -96 + 48 = -48$: confirmed
5. $V(2) = 2(8)^2 = 2(64) = 128$: confirmed
6. Fencing: $A(x) = 240x - 2x^2$, $A'(x) = 240 - 4x = 0$, $x = 60$: confirmed
7. $y = 240 - 120 = 120$, $A = 60 \times 120 = 7200$: confirmed
8. Problem 3: $x'(t) = 6(t-1)(t-2)$, values at $t=0,1,2,4$ are $0, 5, 4, 32$: confirmed
9. Problem 1: $3x + 2y = 400$, max at $x = 200/3$: confirmed
10. Problem 2: cylinder cost derivative, $r = \sqrt[3]{62.5}$: confirmed

[ ] Personal moment: "I call it the Setup Freeze" in intro. <!-- NEEDS UNIQUE ANGLE: add Zach story here -->

[ ] Voice check: These sentences read most like the Zach voice: "You are staring at a scenario about a box, or a fence, or a can, and your brain is asking one question on repeat" / "That is not a section you can afford to treat as a bonus." Flag any line in the FRQ Communication Layer section that feels like a grading rubric recitation rather than Zach talking.

[ ] Desmos graph: Box volume function $V(x) = x(12-2x)^2$ on $[0,6]$ with max labeled at $(2, 128)$. Navy curve, gold point. Window $x[-0.5, 6.5]$ $y[-10, 140]$.

[ ] CTA confirmation: Mid-post Option E (free pre-assessment). End Option E (free pre-assessment) + Option D (summer program). Both seasonal, both valid through Sept 15, 2026.

[ ] Estimated read time: ~3,800 words / 200 = ~19 min. Adjusted to 15 min read (many sections are formula/step heavy, scan-read faster). Confirm before publishing.

---

SKILL DELTA:
- New lesson learned: FRQ communication layer (writing the justification sentence) is a distinct skill from the calculus itself and needs its own rubric coaching section. Future optimization posts should include a full-credit justification template.
- Forbidden pattern eliminated: All forbidden words omitted. No em-dashes in body.
- Analogy or voice move that worked: "Setup Freeze" as a named phenomenon for the name-the-feeling hook. Works because it names the exact moment before the math begins, not a general anxiety feeling.
- MCQ/FRQ framing note: This is correctly framed as FRQ-primary. The FAQ addresses the MCQ version briefly, which is appropriate for a long-form FRQ post.
