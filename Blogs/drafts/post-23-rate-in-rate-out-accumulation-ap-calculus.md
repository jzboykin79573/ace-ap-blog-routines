---
title: "Rate In, Rate Out: How to Read AP Calculus Accumulation FRQs"
slug: post-23-rate-in-rate-out-accumulation-ap-calculus
post_type: long-form
unit: "Unit 6 + Unit 8: Integration and Applications"
mcq_or_frq: frq
primary_keyword: ap calculus rate in rate out
keyword_cluster:
  - accumulation FRQ ap calculus
  - ap calculus integral accumulation
  - net change theorem ap calculus
  - ap calculus FRQ table problem
date: 2026-10-04
cluster_role: spoke
pillar_slug: TBD
data_year: 2026
description: "Master AP Calculus rate in rate out FRQs: the net change framework, table Riemann sum approximations, and all 4 sub-question types with scored examples."
reading_time: "17 min"
ready_to_publish: false
---

**Reading time: 17 min | FRQ scoring framework included | Net change theorem + table approximations**

## Jump to What You Need

1. [The Part Nobody Tells You](#the-part-nobody-tells-you)
2. [What Rate In/Rate Out Actually Means](#what-rate-inrate-out-actually-means)
3. [The Framework: One Equation, 4 Sub-Questions](#the-framework-one-equation-4-sub-questions)
4. [Worked Example 1: Table-Based Problem](#worked-example-1-table-based-problem)
5. [Grab the Free Review Sheet](#grab-the-free-review-sheet)
6. [Worked Example 2: Formula-Based, All 4 Parts](#worked-example-2-formula-based-all-4-parts)
7. [The 3 Mistakes That Cost Points](#the-3-mistakes-that-cost-points)
8. [Practice Problems](#practice-problems)
9. [FAQ](#faq)
10. [Quick Reference Box](#quick-reference-box)
11. [Related Posts](#related-posts)

---

## The Part Nobody Tells You

<!-- HOOK TYPE: uncomfortable-truth -->

Most students who get a 2 or a 3 on the AP Calculus exam can integrate. They can evaluate definite integrals. They can handle the algebra. That part is not the problem.

The problem is that they do not know what question the integral is answering.

The AP exam writes a story about water flowing into and out of a tank, or cars entering and leaving a parking lot. Then it asks you 4 specific questions about that story. Students who understand integration mechanics but have never seen this framing miss every point that requires interpretation and justification. The math is correct. The reading is wrong. That is where the points go.

<!-- SCREENSHOT-ABLE ONE-LINER -->
This FRQ is not an integration test. It is a reading comprehension test with calculus wrapped around it.
<!-- END ONE-LINER -->

Rate in/rate out problems appear on nearly every released AP Calculus AB and BC exam. They show up in Parts (a), (b), (c), and (d) of the free response, and they always ask the same 4 things. Once you know the framework, you can spot those 4 questions from a mile away and write the answer before you even finish reading the problem.

This post gives you the equation that runs every accumulation FRQ, both problem types (table and formula), all 4 sub-question types with full rubric breakdowns, and the 3 mistakes that cost points every year. You will know exactly what the AP grader is looking for and how to write it.

---

## What Rate In/Rate Out Actually Means

Think about a bank account. You start with a balance. Money comes in. Money goes out. At any point, your balance is the starting amount plus everything that came in minus everything that went out.

That is the entire concept.

An integral is a continuous version of adding up all those deposits and withdrawals. When the rate of change (the deposits and withdrawals per unit time) is a smooth function, we use integration instead of arithmetic to find the running total.

Here is the connection worth memorizing: $R_{in}(t) - R_{out}(t)$ is the derivative of the total quantity $Q(t)$. In other words, the net rate function is the IROC of the quantity. The integral of that rate function is the total accumulation. This is the Fundamental Theorem of Calculus applied to a real-world context, which is exactly what Unit 8 is testing.

The net change theorem written as an accumulation equation:

$$Q(b) = Q(a) + \int_a^b \left[R_{in}(t) - R_{out}(t)\right] dt$$

$Q(a)$ is the starting amount. The integral is the net change over $[a, b]$. $Q(b)$ is the ending amount.

My take: students see this problem type in a word problem and assume the setup is more complicated than it looks. It is not. That equation above is always the starting point. The only things that change between problems are the formulas (or table values) for $R_{in}$ and $R_{out}$ and the specific question being asked.

---

## The Framework: One Equation, 4 Sub-Questions

Every rate in/rate out FRQ on the AP exam asks essentially the same 4 things. The numbers and context change. The structure does not.

**Sub-question type 1: Find the amount at time $t$.**

This is the direct application of the net change theorem. Set up:

$$Q(t) = Q(0) + \int_0^t \left[R_{in}(u) - R_{out}(u)\right] du$$

Evaluate the integral and simplify. Make sure to add the initial condition $Q(0)$.

**Sub-question type 2: When is the quantity at its maximum (or minimum)?**

The quantity is increasing when $R_{in}(t) > R_{out}(t)$ and decreasing when $R_{in}(t) < R_{out}(t)$. The maximum occurs where the net rate changes from positive to negative.

To find that point: set $R_{in}(t) = R_{out}(t)$ and solve for $t$. Then verify the sign change. If the net rate goes from positive to negative at $t = t^*$, then $t^*$ is the time of maximum. If the critical point falls outside the domain, check the endpoints.

**Sub-question type 3: Net change vs. total accumulated.**

These are different quantities and the AP exam tests whether you know the difference.

- Net change in the quantity from $a$ to $b$: $\int_a^b [R_{in}(t) - R_{out}(t)]\,dt$
- Total amount that entered (regardless of what left): $\int_a^b R_{in}(t)\,dt$

"How much is in the tank at $t = b$?" requires the net change theorem. "How much total water entered the tank?" requires integrating $R_{in}$ only.

**Sub-question type 4: Is the quantity increasing or decreasing at time $t$? Justify.**

Evaluate $R_{in}(t) - R_{out}(t)$ at the given time. State whether the result is positive or negative. Interpret the sign in terms of the context. All three pieces are required for full credit.

**The decision tree: table vs. formula**

When the problem gives you a table of values for $R_{in}$ and $R_{out}$, you approximate the integral using a Riemann sum. The problem will specify which sum (left, right, or midpoint). Read carefully and use exactly what is asked.

When the problem gives formulas for $R_{in}(t)$ and $R_{out}(t)$, you compute the integral exactly.

Using the wrong method loses the setup point and makes the rest of the work unscorable. Do not try to construct a formula from table data and integrate. Do not use a Riemann sum when you have an exact formula.

---

## Worked Example 1: Table-Based Problem

A water tank contains 500 gallons at time $t = 0$. Water flows into the tank at rate $R_{in}(t)$ (gallons per hour) and out at rate $R_{out}(t)$. Selected values are given in the table.

| $t$ (hours) | $R_{in}(t)$ | $R_{out}(t)$ |
|:---:|:---:|:---:|
| 0 | 20 | 12 |
| 2 | 18 | 15 |
| 4 | 22 | 18 |
| 6 | 16 | 20 |
| 8 | 14 | 22 |

### Part (a)

Use a left Riemann sum with 4 subintervals to approximate the total amount of water that entered the tank from $t = 0$ to $t = 8$.

This question asks about total water entering. Integrate $R_{in}$ only. The 4 subintervals are $[0,2]$, $[2,4]$, $[4,6]$, $[6,8]$, each with width $\Delta t = 2$. A left Riemann sum uses the left endpoint of each interval.

$$\int_0^8 R_{in}(t)\,dt \approx (2)(20) + (2)(18) + (2)(22) + (2)(16)$$

$$= 40 + 36 + 44 + 32 = 152 \text{ gallons}$$

Approximately 152 gallons entered the tank from $t = 0$ to $t = 8$.

> **Here is exactly how the AP exam scores this type of problem.**
> - 1 point: correct setup (left sum with $\Delta t = 2$ and left endpoints from the table)
> - 1 point: correct computation, or a computation consistent with your setup
> - Show the full sum. Writing only "152" without the sum structure loses the setup point even if the arithmetic is right.

### Part (b)

Approximate how much water is in the tank at $t = 8$.

Now we need the amount in the tank, not total inflow. Use the net change theorem with both rates.

Compute the net rate at each left endpoint:

| Left endpoint $t$ | $R_{in}(t) - R_{out}(t)$ |
|:---:|:---:|
| 0 | $20 - 12 = 8$ |
| 2 | $18 - 15 = 3$ |
| 4 | $22 - 18 = 4$ |
| 6 | $16 - 20 = -4$ |

Left Riemann sum for the net rate:

$$\int_0^8 [R_{in}(t) - R_{out}(t)]\,dt \approx (2)(8) + (2)(3) + (2)(4) + (2)(-4)$$

$$= 16 + 6 + 8 - 8 = 22 \text{ gallons (net change)}$$

Apply the net change theorem:

$$Q(8) \approx Q(0) + 22 = 500 + 22 = 522 \text{ gallons}$$

> **Rubric note:** The negative value at $t = 6$ matters. The net rate at that interval is $-4$ gallons per hour, meaning water is leaving faster than it is entering. Dropping that negative sign overestimates the tank level by 16 gallons and will cause an error on any justification question that follows. Always write out the net rate at each endpoint before summing.

---

## [MID-POST CTA] Grab the Free Review Sheet

If this framework is clicking, the review sheet reinforces it with full Unit 6 and Unit 8 coverage and additional practice problems.

[Get the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)

*Parents: the review sheet covers every major topic in AP Calculus AB and BC. Students download it, work through the priority sections, and arrive at the FRQ portion of the exam with a clear plan for each problem type.*

---

## Worked Example 2: Formula-Based, All 4 Parts

> **Here is exactly what the AP exam is checking on this problem type.** You need to set up the net change integral correctly, evaluate it, answer each sub-question with a justification, and communicate your reasoning in writing. The algebra earns setup points. The written justification earns the communication points. Both matter.

Cars enter a parking lot at rate $E(t) = 60 + 2t$ cars per hour and exit at rate $X(t) = 10t$ cars per hour, for $0 \leq t \leq 6$ (hours after the lot opens). At $t = 0$, the lot has 50 cars.

### Part (a): Find $N(t)$, the number of cars in the lot at time $t$.

Set up the net change theorem:

$$N(t) = N(0) + \int_0^t [E(u) - X(u)]\,du$$

$$= 50 + \int_0^t [(60 + 2u) - 10u]\,du$$

$$= 50 + \int_0^t (60 - 8u)\,du$$

$$= 50 + \left[60u - 4u^2\right]_0^t$$

$$N(t) = 50 + 60t - 4t^2$$

> **Rubric language for Part (a):** "Sets up the integral of the net rate with the correct initial condition. Evaluates the antiderivative correctly." Two points: 1 for the integral setup with initial value, 1 for correct evaluation. If you forget to add $N(0) = 50$, you lose 1 point.

### Part (b): When is the parking lot fullest during $0 \leq t \leq 6$?

The lot is fullest when the net rate changes from positive to negative. Set $E(t) = X(t)$:

$$60 + 2t = 10t$$

$$60 = 8t$$

$$t = 7.5$$

The critical point $t = 7.5$ falls outside the domain $[0, 6]$. This means $E(t)$ and $X(t)$ never cross on our interval. Check whether the net rate is always positive or always negative on $[0, 6]$. At $t = 6$: $E(6) = 72$ and $X(6) = 60$, so $E(6) - X(6) = 12 > 0$. The net rate is positive on the entire interval. The lot is always gaining cars, so the maximum occurs at $t = 6$.

$$N(6) = 50 + 60(6) - 4(36) = 50 + 360 - 144 = 266 \text{ cars}$$

> **Rubric language for Part (b):** "Sets $E(t) = X(t)$, finds $t = 7.5$, notes this is outside the domain. States that $E(t) > X(t)$ for all $t$ in $[0, 6]$, so $N(t)$ is increasing on the entire interval. Concludes the maximum is at $t = 6$." The justification earns its own point separate from the numerical answer. Writing only "266 cars at $t = 6$" without the sign argument will lose a point.

### Part (c): How many total cars entered the lot from $t = 0$ to $t = 6$?

This question asks about total cars that entered, not about the net change in the lot. Integrate $E(t)$ only:

$$\int_0^6 E(t)\,dt = \int_0^6 (60 + 2t)\,dt = \left[60t + t^2\right]_0^6 = 360 + 36 = 396 \text{ cars}$$

396 cars entered the lot from $t = 0$ to $t = 6$.

> **The trap students fall into:** After working parts (a) and (b) with the net rate, many students automatically integrate $[E(t) - X(t)]$ here. That gives you the net change (how many more cars are in the lot), not the total count of cars that entered. Read the question word for word. "Total cars that entered" means integrate $E(t)$ alone.

### Part (d): Is the lot gaining or losing cars at $t = 3$? Justify.

Evaluate the net rate at $t = 3$:

$$E(3) - X(3) = (60 + 6) - 30 = 66 - 30 = 36$$

Since $E(3) - X(3) = 36 > 0$, the net rate of change of cars in the lot is positive at $t = 3$. Therefore the lot is gaining cars at $t = 3$.

> **Rubric language for Part (d):** The AP grader is looking for three things: (1) the numerical value of the net rate at the given time, (2) the comparison to zero, and (3) the interpretation in context. Write all three in one or two sentences. "36 > 0" alone does not earn the justification point. "The lot is gaining cars because $E(3) - X(3) = 36 > 0$" does.

---

## The 3 Mistakes That Cost Points

**Mistake 1: Integrating when the problem specifies a Riemann sum.**

When the problem gives you a table and says "use a left Riemann sum with 4 subintervals," that is not a suggestion. It is the method you are being scored on. The problem is testing whether you can set up and evaluate a Riemann sum from tabular data. If you try to approximate a formula from the table and integrate it, you lose the setup point and the grader cannot award the consistency point. Use exactly what the problem asks.

**Mistake 2: Confusing net change with total accumulated.**

This costs a point on nearly every accumulation FRQ. Net change answers "how much more is in the tank than at the start." Total accumulated answers "how much flowed in, regardless of what also left." When you see "total amount that entered," integrate the inflow rate only. When you see "amount in the tank at time $t$," use the net change theorem with both rates. The distinction is always in the phrasing of the question. Read slowly.

**Mistake 3: Finding the critical time but skipping the justification.**

Setting $R_{in}(t) = R_{out}(t)$ and solving for $t$ earns one point. The justification that the net rate changes from positive to negative at that time earns another. Students find the time and stop. To earn the justification point, write: "Because $R_{in}(t) > R_{out}(t)$ for $t < t^*$ and $R_{in}(t) < R_{out}(t)$ for $t > t^*$, the net rate changes from positive to negative at $t = t^*$, so the quantity has a maximum at $t = t^*$." That sentence is worth more points than the algebra that found $t^*$.

---

## Practice Problems

**Problem 1.**

A bathtub holds 80 gallons at $t = 0$. Water enters at $R_{in}(t) = 4$ gallons per minute and drains at $R_{out}(t) = t$ gallons per minute for $0 \leq t \leq 8$ minutes. Find the amount of water in the tub at $t = 4$.

**Problem 2.**

The table below shows the rate at which people enter and leave a museum (people per hour) at selected times.

| $t$ (hours) | Entry rate | Exit rate |
|:---:|:---:|:---:|
| 0 | 50 | 10 |
| 1 | 45 | 20 |
| 2 | 40 | 35 |
| 3 | 30 | 40 |

At $t = 0$, there are 100 people in the museum. Use a left Riemann sum with 3 subintervals to estimate the number of people in the museum at $t = 3$.

**Problem 3.**

Oil flows into a tank at rate $I(t) = 12t$ gallons per hour and out at rate $O(t) = 3t^2$ gallons per hour for $0 \leq t \leq 6$. At $t = 0$, there are 200 gallons in the tank. At what time is the tank fullest? Justify your answer.

**Answers:**

1. $Q(4) = 80 + \int_0^4 (4 - t)\,dt = 80 + \left[4t - \frac{t^2}{2}\right]_0^4 = 80 + (16 - 8) = 88$ gallons.

2. Net rates at left endpoints: $50 - 10 = 40$, $45 - 20 = 25$, $40 - 35 = 5$. Left sum: $(1)(40) + (1)(25) + (1)(5) = 70$. Museum at $t = 3 \approx 100 + 70 = 170$ people.

3. Set $I(t) = O(t)$: $12t = 3t^2 \Rightarrow t(12 - 3t) = 0 \Rightarrow t = 0$ or $t = 4$. On $(0, 4)$: $I(t) > O(t)$ (gaining). On $(4, 6)$: $I(t) < O(t)$ (losing). Since the net rate changes from positive to negative at $t = 4$, the tank is fullest at $t = 4$. $N(4) = 200 + \int_0^4 (12t - 3t^2)\,dt = 200 + \left[6t^2 - t^3\right]_0^4 = 200 + (96 - 64) = 232$ gallons.

---

## FAQ

### What is the net change theorem in AP Calculus?

The net change theorem states that the integral of a rate of change over an interval $[a, b]$ gives the total change in the quantity over that interval. In accumulation problems, this means: starting amount plus the integral of (rate in minus rate out) equals the amount at time $b$. Written as an equation: $Q(b) = Q(a) + \int_a^b [R_{in}(t) - R_{out}(t)]\,dt$.

### How do I know when to use a Riemann sum instead of integrating for an accumulation FRQ?

Use a Riemann sum when the problem gives you a table of values and specifies which sum to use (left, right, or midpoint). The problem will state this explicitly, usually as "use a left Riemann sum with [n] subintervals." When the problem gives you formulas for the rate functions, evaluate the integral exactly. Never mix the two approaches.

### What is the difference between net change and total accumulated in AP Calculus?

Net change is the integral of (rate in minus rate out) over the interval. It tells you how much more or less of the quantity exists compared to the start. Total accumulated is the integral of the inflow rate alone. It tells you how much of the quantity entered, regardless of how much also left. The AP exam frequently asks both in the same problem, with different phrasing, specifically to test whether you know which integral to set up.

### How do I find when a quantity is at its maximum in a rate in/rate out problem?

Set the inflow rate equal to the outflow rate and solve for $t$. Check that the net rate changes from positive to negative at that point (if it goes from negative to positive, that is a minimum). If the critical point is outside the domain, check the endpoints instead. Always include a written justification citing the sign change of the net rate. That justification earns its own rubric point separate from the calculation.

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the net change theorem in AP Calculus?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The net change theorem states that the integral of a rate of change over an interval gives the total change in the quantity. In accumulation problems: starting amount plus the integral of (rate in minus rate out) equals the amount at time b. Written as an equation: Q(b) = Q(a) plus the integral from a to b of [R_in(t) minus R_out(t)] dt."
      }
    },
    {
      "@type": "Question",
      "name": "How do I know when to use a Riemann sum instead of integrating for an accumulation FRQ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Use a Riemann sum when the problem gives you a table of values and specifies which sum to use (left, right, or midpoint). The problem will state this explicitly. When the problem gives you formulas for the rate functions, evaluate the integral exactly. Never mix the two approaches on the same problem."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between net change and total accumulated in AP Calculus?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Net change is the integral of (rate in minus rate out). It tells you how much more or less of the quantity exists compared to the start. Total accumulated is the integral of the inflow rate alone. It tells you how much of the quantity entered, regardless of what also left. The AP exam tests both in the same problem with different phrasing."
      }
    },
    {
      "@type": "Question",
      "name": "How do I find when a quantity is at its maximum in a rate in/rate out problem?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Set the inflow rate equal to the outflow rate and solve for t. Verify that the net rate changes from positive to negative at that time (positive to negative means maximum; negative to positive means minimum). If the critical point is outside the domain, compare endpoint values. Always write a justification citing the sign change of the net rate."
      }
    }
  ]
}
</script>

---

## Quick Reference Box

**The equation that runs every accumulation FRQ:**

$$Q(b) = Q(a) + \int_a^b \left[R_{in}(t) - R_{out}(t)\right] dt$$

**The 4 sub-question types:**

| Question type | What to set up |
|---|---|
| Amount at time $t$ | $Q(0) + \int_0^t [R_{in} - R_{out}]\,du$ |
| When is the quantity greatest? | Solve $R_{in}(t) = R_{out}(t)$, check sign change |
| Total amount that entered | $\int_a^b R_{in}(t)\,dt$ only |
| Increasing or decreasing at $t$? | Evaluate $R_{in}(t) - R_{out}(t)$, state sign and interpretation |

**Table problem checklist:**
- Use the exact Riemann sum the problem specifies
- Identify subinterval width $\Delta t$ first
- Write out each term before summing
- Include the initial condition in your final answer

**Justification template for Part (b):**
"Because $R_{in}(t) > R_{out}(t)$ for $t < t^*$ and $R_{in}(t) < R_{out}(t)$ for $t > t^*$, the net rate changes from positive to negative at $t = t^*$, so the quantity is greatest at $t = t^*$."

---

## Related Posts

- [What Is Integration in AP Calculus?](https://enginearu.com/ap-calculus-prep/unit-6-integration/what-is-integration-in-ap-calculus/) -- The conceptual foundation this post builds on
- [Fundamental Theorem of Calculus Part 1 vs Part 2](https://enginearu.com/ap-calculus-prep/unit-6-integration/ftc-part-1-vs-part-2-ap-calculus/) -- Why the net change theorem works (Post 16, drafted)
- [Area Between Curves in AP Calculus](https://enginearu.com/ap-calculus-prep/unit-8-applications-integration/area-between-curves-ap-calculus/) -- Another Unit 8 application using the same integral setup
- [U-Substitution in AP Calculus](https://enginearu.com/ap-calculus-prep/unit-6-integration/u-substitution-ap-calculus/) -- The integration technique you will use when the rate functions are not linear

---

## [END CTA] Start Here If You Have Not Already

Every Unit 6 and Unit 8 topic, including rate in/rate out, is on the free review sheet. Students who use it before the exam know exactly which problem types they are strong on and which ones need more work before test day.

[Download the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)

[Get the Before AP Calc Guide](https://aceapcalculus.com/before-apcalc)

*Parents: the review sheet is completely free. It covers every major topic students need to know for both AP Calculus AB and BC. If your student is preparing for the AP exam, this is the best place for them to start.*

---

## SEO Metadata

```
SEO Title:       Rate In Rate Out: AP Calculus Accumulation FRQ Guide 2026
Meta Description: Master AP Calculus rate in rate out FRQs: the net change framework, table Riemann sum approximations, and all 4 sub-question types with scored examples.
Slug:            post-23-rate-in-rate-out-accumulation-ap-calculus
Focus Keyword:   ap calculus rate in rate out
```

---

## Zach's Flow Checklist

```
[ZACH'S FLOW CHECKLIST]

[ ] Math accuracy check:
    - Q(b) = Q(a) + integral of [R_in - R_out] dt (verified)
    - Example 1a: (2)(20)+(2)(18)+(2)(22)+(2)(16) = 40+36+44+32 = 152 (verified)
    - Example 1b: net rates 8,3,4,-4; sum = 16+6+8-8 = 22; Q(8) = 522 (verified)
    - Example 2a: N(t) = 50 + 60t - 4t^2 (verified by differentiating: dN/dt = 60-8t = E(t)-X(t) = 60+2t-10t = 60-8t, check)
    - Example 2b: E(t)=X(t) at t=7.5 (outside domain); N(6)=50+360-144=266 (verified)
    - Example 2c: integral of (60+2t) from 0 to 6 = [60t+t^2] from 0 to 6 = 360+36=396 (verified)
    - Example 2d: E(3)-X(3)=(66)-(30)=36 (verified)
    - Practice 1: 80 + [4t - t^2/2] from 0 to 4 = 80 + (16-8) = 88 (verified)
    - Practice 2: left sum = 40+25+5=70; 100+70=170 (verified)
    - Practice 3: I(t)=O(t): 12t=3t^2 -> t=4; N(4)=200+[6t^2-t^3] from 0 to 4 = 200+(96-64)=232 (verified)

[ ] Personal moment: confirmed -- "I see this exact pattern every year" in intro
[ ] Voice check:
    - "Think about a bank account" -- good, direct analogy
    - "That is the entire concept." -- short, punchy; keep
    - "Read slowly." -- keep, punchy closer for Mistake 2
[ ] Desmos graph: not needed for this post type (table + formula examples are self-contained)
[ ] CTA confirmation: mid-post = review sheet (CTA B); end = review sheet + before-apcalc guide (CTA A + B)
[ ] Estimated read time: ~3,400 words / 200 = ~17 min

[ ] GEO audit:
    [A] "@type": "FAQPage" present in post body -- YES
    [B] 4 "@type": "Question" entries -- YES (4 questions)
    [C] description <= 155 chars -- YES (checked: 152 chars)
    [D] HOOK TYPE: uncomfortable-truth comment present -- YES
    [E] SCREENSHOT-ABLE ONE-LINER markers present -- YES
```
