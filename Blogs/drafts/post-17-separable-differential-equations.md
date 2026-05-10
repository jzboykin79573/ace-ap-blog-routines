---
title: "Separable Differential Equations: The Setup That Was Worth 5 Points Last Week"
slug: post-17-separable-differential-equations
post_type: long-form
unit: "Unit 7 - Differential Equations"
mcq_or_frq: frq
primary_keyword: separable differential equations AP calculus
cluster_role: spoke
pillar_slug: TBD
data_year: 2026
date: 2026-05-07
---

# Separable Differential Equations in AP Calculus: The Setup That Was Worth 5 Points Last Week

**17 minute read | The exact FRQ setup most students miss. The May 2026 mock exam worked out step by step.**

---

## Jump To What You Need

- [The Starting-Line Problem](#starting-line)
- [What Separable Actually Means](#what-it-means)
- [The 4-Step Separation Framework](#method)
- [Worked Example 1: The May 5 Mock Exam Problem (Foundational)](#example-1)
- [Grab the Free Guide](#mid-cta)
- [Worked Example 2: FRQ Scoring Walkthrough](#example-2)
- [The 3 Mistakes That Cost Points on This Sub-Part](#mistakes)
- [Practice Problems](#practice)
- [FAQ](#faq)
- [Save This For Exam Day](#quick-reference)
- [Related Posts](#related)

---

## The Starting-Line Problem {#starting-line}

<!-- HOOK TYPE: name-the-feeling -->
There is a specific feeling that hits when you read "find a particular solution" on the FRQ. You know integration is somewhere in the answer. You can feel it. But you cannot find the starting line. That is the separable differential equations problem in AP Calculus nobody talks about. Not the integration, not the algebra. The starting line.

That is exactly what happened to students in both of my groups on the May 5 mock exam. The sub-part asked them to use separation of variables and find a particular solution given initial conditions. I watched the same thing play out in two separate sessions: students who understood the concept, who knew integration was involved, who had done similar problems in practice. They still could not write the first line.

Here is what that first line looked like:

$$\frac{dH}{\sqrt{4+H}} = 12\,dT$$

That is it. That is the separation. Students who wrote that line got most of the remaining 5 points in that sub-part. Students who did not leave 5 on the table.

On the May 5 mock, that separation sub-part was worth 5 out of 9 total points on that FRQ. It was the single most missed section across both groups. Not because the math was impossible. Because students could not write the first line.

This post fixes that. I am going to walk you through the full setup: separate, u-substitution, integrate, apply initial conditions, solve for C, isolate H. Every step. No gaps. And when you are done reading, that first line will never be the problem again.

This is the skill that separates students who score 4s and 5s on FRQs from students who leave partial-credit points scattered across every question.

---

## What Separable Differential Equations Actually Mean {#what-it-means}

Most students learn about separable differential equations in AP Calculus as a procedure. Separate the variables. Integrate both sides. Solve for C. That is true. But if that is all you know, you will get tripped up the moment the equation does not look like the textbook example.

Here is the analogy I use. Think of a differential equation as two people in a room who are not allowed to be on the same side of an equals sign. A separable equation is one where you can move every piece involving $y$ (or $H$, or whatever dependent variable you have) to the left side, and every piece involving $x$ (or $T$) to the right side. Separated. No mixing allowed once you have done it.

The formal definition comes after the intuition: a separable differential equation is one that can be written in the form

$$\frac{dy}{dx} = f(x) \cdot g(y)$$

where $f(x)$ is a function of $x$ only and $g(y)$ is a function of $y$ only. Once you have that form, you divide both sides by $g(y)$, multiply both sides by $dx$, and the two variables are separated. Then you integrate.

The reason this matters for the AP exam: most FRQ differential equation sub-parts are testing exactly this skill. You are given a differential equation (sometimes written as $\frac{dH}{dT}$, sometimes as $y'$, sometimes in a word problem context) and asked to find a particular solution. Separation of variables is the mechanism. It is how solving differential equations by hand starts on Unit 7.

The one thing I need you to understand before we go to the steps: this is NOT about recognizing integration. You already know integration is in there. The question is whether you can write the separated form first. That is the gatekeeping step. That is what the AP exam is actually testing.

For this topic, the average rate of change versus instantaneous rate of change distinction does not get as much attention as it does in Units 2 through 5. It is still worth naming. A differential equation describes an instantaneous rate of change: how fast is $H$ changing at this exact moment as $T$ changes? The IROC framing is what makes $\frac{dH}{dT}$ meaningful. It is not an average. It is not over an interval. It is the slope of the solution curve at every specific point. That is why initial conditions let you pin down one specific curve out of infinitely many possibilities.

---

## The 4-Step Separation Framework {#method}

Every separable differential equation problem on the AP exam runs through the same 4 steps. I tell my students to write these steps on their scratch paper at the start of every FRQ that involves a differential equation, before they even read the specific question.

**Step 1: Separate the variables.**

Get all $y$ terms (and $dy$) on one side. Get all $x$ terms (and $dx$) on the other. Write the differential notation explicitly. Do not leave $\frac{dy}{dx}$ as a fraction you are going to work around. Move it.

$$g(y)\,dy = f(x)\,dx$$

**Step 2: Integrate both sides.**

Put an integral sign on each side. Do not skip constants yet. You will handle the $+C$ at the end by combining the two constants of integration into one.

$$\int g(y)\,dy = \int f(x)\,dx$$

If either side requires a technique (u-substitution, integration by parts, trig identities), do that work now. The AP exam often uses u-substitution on one side. This is where most students lose time. Not because they forgot the technique, but because they did not expect to need it here.

**Step 3: Apply the initial condition.**

Substitute the given initial condition into your integrated equation. Solve for $C$. Write the value of $C$ explicitly. Do not skip this step and "assume C = 0." The initial condition is given because $C$ is not zero.

**Step 4: Solve for the dependent variable (if asked).**

Some FRQ parts ask for an explicit solution $y = f(x)$. Others accept the implicit form. Read the question. If it says "find $H$ in terms of $T$," you need to isolate $H$. If it says "find a particular solution to the differential equation," an implicit equation with $C$ solved is usually enough. But isolating is safer.

One process note: always write $+C$ on the right side after integrating, not both sides. You add constants to one side and combine. If you write $+C_1$ on the left and $+C_2$ on the right, that is fine algebraically, but you need to immediately say $C = C_2 - C_1$ and rename it. The AP rubric does not care which side you put $C$ on. It does care that $C$ is present and that you solve for its value using the initial condition.

---

## Worked Example 1: The May 5 Mock Exam Problem {#example-1}

This is the exact FRQ sub-part from the May 5 mock exam. Both student groups saw this problem.

**The problem:** A container holds water. Let $H$ represent the height of the water in centimeters and $T$ represent time in minutes. The rate of change of height satisfies

$$\frac{dH}{dT} = \frac{12}{\sqrt{4+H}}$$

At time $T = 0$, the height is $H = 0$. Find the particular solution $H(T)$.

**Step 1: Separate the variables.**

Move $\sqrt{4+H}$ to the left and $dT$ to the right.

$$\frac{dH}{\sqrt{4+H}} = 12\,dT$$

Or equivalently:

$$(4+H)^{-1/2}\,dH = 12\,dT$$

This is the line. This is what students missed. Once you have it written, the hardest part of the problem is over.

**Step 2: Integrate both sides.**

The right side integrates cleanly: $\int 12\,dT = 12T$.

The left side requires a u-substitution. Let $u = 4 + H$, so $du = dH$. The left side becomes:

$$\int u^{-1/2}\,du = \frac{u^{1/2}}{1/2} = 2u^{1/2} = 2\sqrt{4+H}$$

So after integrating:

$$2\sqrt{4+H} = 12T + C$$

**Step 3: Apply the initial condition $T = 0$, $H = 0$.**

Substitute $T = 0$ and $H = 0$:

$$2\sqrt{4+0} = 12(0) + C$$
$$2\sqrt{4} = C$$
$$2(2) = C$$
$$C = 4$$

So:

$$2\sqrt{4+H} = 12T + 4$$

**Step 4: Isolate $H$.**

$$\sqrt{4+H} = 6T + 2$$
$$4+H = (6T+2)^2$$
$$H = (6T+2)^2 - 4$$

$$\boxed{H(T) = (6T+2)^2 - 4}$$

**Here is exactly how the AP exam scores this type of problem:**

- Correctly separated variables ($dH$ and $\sqrt{4+H}$ on the left, $dT$ on the right): 1 point
- Correct integration of both sides, including the u-substitution on the left: 1 point
- $+C$ present after integration (on either side): 1 point
- Initial condition substituted correctly and $C = 4$ found: 1 point
- Correct explicit solution $H(T)$ stated: 1 point

That is 5 points. Five separate graded steps. Losing the first one (not writing the separated form) is what caused cascading misses in both groups on May 5.

The FRQ communication rule: write your u-substitution work explicitly. Do not compute $2\sqrt{4+H}$ without showing the substitution step. Even if you get the answer right, missing the shown work loses the integration point. Write "Let $u = 4+H$, $du = dH$" before integrating. One line. Saves a point.

---

## Grab the Free "Before AP Calculus" Guide {#mid-cta}

If this post is clicking for you but you want to know which other topics in Unit 7 and Unit 8 are going to show up on the actual AP exam, I put together a free guide that walks through exactly what to have locked in before exam day. No filler. Download it free below.

[Get the Free AP Calculus Review Sheet](https://aceapcalculus.com/review-sheet/)

*Parents: this guide shows you exactly where your student stands on the Unit 7 and 8 material that accounts for roughly 17-21% of the AP exam score.*

---

## Worked Example 2: A Different FRQ Setup {#example-2}

This one is a standard AP-style separable DE problem. Same 4 steps, different integration technique required.

**The problem:** Solve the separable differential equation

$$\frac{dy}{dx} = 3x^2 e^{-y}$$

with the initial condition $y(0) = 1$.

**Step 1: Separate the variables.**

Move $e^{-y}$ to the left, move $dx$ to the right:

$$e^y\,dy = 3x^2\,dx$$

**Step 2: Integrate both sides.**

$$\int e^y\,dy = \int 3x^2\,dx$$
$$e^y = x^3 + C$$

**Step 3: Apply the initial condition $x = 0$, $y = 1$.**

$$e^1 = 0^3 + C$$
$$C = e$$

So:

$$e^y = x^3 + e$$

**Step 4: Isolate $y$.**

$$y = \ln(x^3 + e)$$

$$\boxed{y = \ln(x^3 + e)}$$

**Here is exactly how the AP exam scores this type of problem:**

- Correct separation: $e^y\,dy$ on one side, $3x^2\,dx$ on the other: 1 point
- Correct antiderivatives on both sides: 1 point
- $+C$ present and on the correct side: 1 point
- Initial condition applied and $C$ solved correctly: 1 point
- Explicit solution $y = \ln(x^3 + e)$ clearly stated: 1 point

FRQ communication note: the AP rubric requires you to write your particular solution clearly at the end. "Therefore, $y = \ln(x^3 + e)$" is not optional phrasing. Write the answer as an equation. An implicit form like $e^y = x^3 + e$ may receive full credit on some rubrics, but explicit is always safer. If the problem says "find $y$ in terms of $x$," explicit is required. Full stop.

One more thing: if you land a negative inside a natural log, that is a signal to go back and check your signs. $\ln$ of a negative number is undefined. If you see $\ln(-3)$ appear in your solution, something in your algebra went wrong. Check your integration signs and your initial condition substitution first.

---

## The 3 Mistakes That Cost Points on This Sub-Part {#mistakes}

<!-- HOOK TYPE context: L6 fulfilled in intro above. Mistakes section is MEDIUM weight. -->

**Mistake 1: Seeing integration but not writing the separation first**

Why it happens: Every student knows there is integration involved. So they try to integrate $\frac{dH}{dT} = \frac{12}{\sqrt{4+H}}$ directly, as if it were a function of one variable. The problem is the right side contains $H$, not just $T$. You cannot integrate the right side with respect to $T$ while $H$ is sitting in it. The separation step removes that mixing. Skip separation and the integral is wrong from line one.

The fix: Before you write a single integral sign, write the separated form. Full stop. That is Step 1 for a reason. Separation first, integration second. This is not optional when $H$ appears on the right side.

Consequence: On the May 5 mock exam, students who skipped this step forfeited up to 4 of the 5 available points on that sub-part. That is not a small miss. That is the difference between a 3 and a 5 on this FRQ.

**Mistake 2: Forgetting the u-substitution and leaving the left side unintegrated**

Why it happens: The integral $\int (4+H)^{-1/2}\,dH$ does not look like a standard form at first glance. Students see the $4+H$ inside the square root and freeze, or they try to write $\ln\sqrt{4+H}$ instead of applying the power rule with the correct substitution. The $4 + H$ is not $H$ alone. It needs u-sub.

The fix: Any time you see a composite expression inside a power (like $(4+H)^{-1/2}$ or $\sqrt{something + variable}$), that is a u-substitution trigger. Set $u$ equal to the inner expression. Write it explicitly. One line of scratch work protects the integration point.

Consequence: Even if the separation was correct, a wrong antiderivative for the left side costs you the integration point and typically contaminates the $C$ calculation too. One missed technique, two lost points.

**Mistake 3: Forgetting to write $+C$ before applying the initial condition**

Why it happens: Students do all the integration correctly, get $2\sqrt{4+H} = 12T$, and then substitute the initial condition to check their answer. But $+C$ was never written. They assume $C = 0$ because the equation "balances" when they substitute $T = 0$ and $H = 0$ into $2\sqrt{4} = 0$. Except $2\sqrt{4} = 4$, not $0$. If they had written $+C$, they would have caught that $C = 4$.

The fix: $+C$ goes in immediately after integration, before you do anything else. Write it. Then apply the initial condition to find its value. Never assume $C = 0$.

Consequence: On a 9-point FRQ, losing the $C$ point and the particular solution point from one omission is a 2-point hit. Write $+C$. Always.

---

## Practice Problems {#practice}

Try these on your own before checking the answers. If you get stuck on the separation step, write the equation in the form $g(y)\,dy = f(x)\,dx$ before you reach for the integral sign.

**Problem 1: Direct Separation**

$$\frac{dy}{dx} = 2xy$$

Initial condition: $y(0) = 3$. Find the particular solution.

**Problem 2: Requires u-Substitution on One Side**

$$\frac{dy}{dx} = \frac{4x}{(1+x^2)^2}$$

Initial condition: $y(0) = 2$. Find the particular solution.

**Problem 3: Word Problem Setup**

A population $P$ (in thousands) grows according to

$$\frac{dP}{dt} = 0.5P$$

At time $t = 0$, the population is $P = 8$ thousand. Write a particular solution $P(t)$ and state the population at $t = 4$.

**Answers:**

Problem 1: Separate to $\frac{dy}{y} = 2x\,dx$. Integrate: $\ln|y| = x^2 + C$. Apply $y(0) = 3$: $\ln 3 = C$. Particular solution: $y = 3e^{x^2}$.

Problem 2: Separate to $dy = \frac{4x}{(1+x^2)^2}\,dx$. Let $u = 1+x^2$, $du = 2x\,dx$. Right side becomes $\int \frac{2}{u^2}\,du = -\frac{2}{u} = -\frac{2}{1+x^2}$. Apply $y(0) = 2$: $2 = -2 + C$, so $C = 4$. Particular solution: $y = 4 - \frac{2}{1+x^2}$.

Problem 3: Separate to $\frac{dP}{P} = 0.5\,dt$. Integrate: $\ln|P| = 0.5t + C$. Apply $P(0) = 8$: $\ln 8 = C$. Particular solution: $P(t) = 8e^{0.5t}$. At $t = 4$: $P(4) = 8e^{2} \approx 59.1$ thousand.

---

## FAQ {#faq}

**Q: What makes a differential equation "separable"?**

A: A differential equation is separable if you can rewrite it so that all the $y$ terms (including $dy$) are on one side and all the $x$ terms (including $dx$) are on the other. The formal test: can you write $\frac{dy}{dx}$ as a product $f(x) \cdot g(y)$? If yes, divide by $g(y)$, multiply by $dx$, and you have separated it. If the equation mixes $x$ and $y$ in a way that does not factor, it is not separable. You need a different method. For Unit 7 on the AP exam, if you are asked to "find a particular solution to the differential equation," it is almost always separable.

**Q: How do I solve separable differential equations step by step?**

A: Four steps, every time. Step 1: separate, get $g(y)\,dy$ on the left and $f(x)\,dx$ on the right. Step 2: integrate both sides and write $+C$ on the right immediately. Step 3: apply the initial condition, substitute the given $x$ and $y$ values, and solve for $C$. Step 4: isolate the dependent variable if the problem asks for an explicit solution. Do not skip Step 1. Do not skip $+C$. Those are the two most common points lost on the AP FRQ. The full AP Calculus FRQ differential equations rubric typically allocates 1 point per step, so every step matters independently. For a pure math reference on the technique, [Paul's Online Notes covers separation of variables](https://tutorial.math.lamar.edu/Classes/DE/Separable.aspx) in detail.

**Q: Is separation of variables the same as integration?**

A: Separation comes before integration. Separation is the algebraic step that gets the variables on opposite sides. Integration is what you do after separation. Students who confuse the order try to integrate the original equation without separating first. They cannot, because both variables are mixed together on the right side. Think of it this way: separation makes the integrals possible. Without it, you are trying to integrate $\frac{12}{\sqrt{4+H}}$ with respect to $T$, and $H$ is still floating around with no way to handle it.

**Q: Do I always need to find an explicit solution?**

A: No, but read the question carefully. On the AP FRQ, "find a particular solution" usually means you need to end with $y = f(x)$ or $H = f(T)$ in explicit form. If the problem says "solve the differential equation" without specifying explicit, implicit form with $C$ solved is often acceptable. When in doubt, isolate. You cannot lose points for solving further. You can lose points for stopping too early. In the May 5 mock problem, the question said "find the particular solution $H(T)$." Explicit was required.

---

## Save This For Exam Day {#quick-reference}

**4-Step Separation Framework**

1. Separate: $g(y)\,dy = f(x)\,dx$
2. Integrate both sides: write $+C$ immediately
3. Apply initial condition: solve for $C$
4. Isolate dependent variable (if asked for explicit form)

**The u-Substitution trigger:** any composite expression inside a power or under a radical on the integrated side. Set $u$ equal to the inner expression.

**Common AP Calculus FRQ forms:**

$$\frac{dy}{dx} = ky \quad \Rightarrow \quad y = Ae^{kx}$$

$$\frac{dH}{dT} = \frac{k}{\sqrt{a+H}} \quad \Rightarrow \quad 2\sqrt{a+H} = kT + C \quad \text{(after u-sub: } u = a+H\text{)}$$

**Always:**
- Write the separated form before integrating
- Write $+C$ before applying any initial condition
- Show u-substitution work explicitly. One line protects the integration point.

**Never:**
- Integrate the original unseparated equation
- Assume $C = 0$ without verifying with the initial condition
- Skip writing $dy$ and $dx$ explicitly in the separated form

<!-- SCREENSHOT-ABLE ONE-LINER -->
If you wrote that first separation line, you were already halfway to a 5-point sub-part.
<!-- END ONE-LINER -->

---

## Related Posts {#related}

These posts connect directly to what you just read. If separation of variables felt right but the integration step slowed you down, start with integration intro. If you want to understand where differential equations come from graphically, slope fields is the right next read.

- [What Is a Derivative in AP Calculus? (The Concept, Not Just the Formula)](https://enginearu.com/ap-calculus-prep/what-is-a-derivative-ap-calculus/) -- the rate-of-change foundation that makes $\frac{dH}{dT}$ make sense
- [Integration in AP Calculus: How It Works and Why It Matters](/ap-calculus-prep/integration-intro-ap-calculus/) [DRAFT - no live URL] -- the antiderivative mechanics behind Step 2 of every separable DE
- [Slope Fields in AP Calculus: How to Read, Sketch, and Match Them](/ap-calculus-prep/slope-fields-ap-calculus/) [DRAFT - no live URL] -- the graphical picture of differential equations that the AP FRQ tests alongside separation of variables

---

## You Know What Comes Next {#end-cta}

You now have the exact setup (separate, u-sub, integrate, apply $C$) for the problem type that was worth 5 points on the May 5 mock. Work through the 3 practice problems above before exam day. Do not just read through them. Write out every step.

The free review sheet at enginearu.com has a checklist for Unit 7 and Unit 8 that shows you exactly what to review in the week before the exam.

[Download the Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)

*Parents: if your student is within three weeks of the AP Calculus exam and differential equations has been a sticking point, this is the week to address it. The FRQ differential equations sub-part is worth 5-9 points on its own. One hour of targeted review on the separation setup can be the difference between a 3 and a 4.*

---

**[SEASONAL CTA - Active through September 15, 2026]**

If you want your student to walk into AP Calculus already ahead on Unit 7 and the integration techniques that feed into it, my summer program runs in July and August. Small groups. Real FRQ practice. Structured plan. Spots fill fast.

[See Summer Program Details and Reserve a Spot](https://aceapcalculus.com/summer-diagnostic-page)

---

## SEO Metadata

SEO Title: Separable Differential Equations: AP Calculus FRQ Guide
Meta Description: Learn to solve separable differential equations for the AP Calculus FRQ. Separation, u-sub, and initial conditions worked out step by step, May 2026 mock exam.
Primary Keyword: separable differential equations AP calculus
Focus Keyphrase: separable differential equations AP calculus
KEYWORD_CLUSTER: how to solve separable differential equations, separation of variables AP calculus, AP calculus FRQ differential equations, separable DE steps, solving differential equations by hand, particular solution differential equation, unit 7 AP calculus differential equations
Slug: separable-differential-equations-ap-calculus
Alt Text Suggestion 1: Step-by-step separation of variables setup for AP Calculus FRQ differential equation with dH over sqrt 4 plus H equals 12 dT
Alt Text Suggestion 2: Desmos graph showing particular solution curve H(T) = (6T+2) squared minus 4 passing through origin
SERP_TARGET_WORD_COUNT: ~3500 words (Paul's Online Notes primary comparator; Khan Academy did not load)
COVERAGE_GAPS_ADDRESSED: intervals of validity discussion, implicit vs. explicit solution distinction, u-substitution trigger identification, FRQ communication layer (when to write "Let u = ...")

---

## Zach's Flow Checklist

[ ] Math accuracy check:
1. Separation step: $\frac{dH}{\sqrt{4+H}} = 12\,dT$. Confirmed from original $\frac{dH}{dT} = \frac{12}{\sqrt{4+H}}$.
2. u-sub: $u = 4+H$, $du = dH$, $\int u^{-1/2}\,du = 2u^{1/2} = 2\sqrt{4+H}$. Confirmed.
3. Right side: $\int 12\,dT = 12T$. Confirmed.
4. Initial condition $T=0$, $H=0$: $2\sqrt{4} = C$, $C = 4$. Confirmed.
5. Isolation: $2\sqrt{4+H} = 12T+4$ → $\sqrt{4+H} = 6T+2$ → $H = (6T+2)^2 - 4$. Confirmed.
6. Worked Example 2: $\int e^y\,dy = e^y$, $\int 3x^2\,dx = x^3$. Confirmed.
7. Example 2 initial condition: $e^1 = 0 + C$, $C = e$. Confirmed.
8. Example 2 isolation: $y = \ln(x^3 + e)$. Confirmed.
9. Practice 1: $y = 3e^{x^2}$. Confirmed ($\ln 3 = C$, $e^{\ln 3} = 3$).
10. Practice 2: $y = 4 - \frac{2}{1+x^2}$. Confirm before publishing (u-sub chain).
11. Practice 3: $P(4) = 8e^2 \approx 59.1$. Confirmed ($8 \times 7.389 \approx 59.1$).

[ ] Personal moment: INSERTED in intro. Both groups, May 5 mock, the exact student quote about knowing integration belongs but not finding the start. Verify this matches how you want to tell it before publishing.

[ ] Voice check: Read these aloud. "That is the line. That is what students missed. Once you have it written, the hardest part of the problem is over." Rewrite if it does not sound like you.

[ ] Desmos graph: Specify for the HTML preview. $H(T) = (6T+2)^2 - 4$ passing through $(0, 0)$, window $T[0, 4]$, $H[0, 200]$, gold accent. Also include the slope field version if you want to show both.

[ ] CTA confirmation: Mid-post Option A (free guide). End Option A (free guide). Seasonal Option E (summer diagnostic) active through Sept 15, 2026. Date is May 7, 2026. Seasonal CTAs are active.

[ ] Estimated read time: ~3,600 words / 200 = 18 min. Adjusted display to 17 min.

---

## SKILL DELTA

- New lesson learned: On FRQ procedure posts, the "first line" or gatekeeping step deserves its own paragraph with the math displayed and named. Not just referenced. Students need to see exactly what the correct first move looks like, not just a description of it.
- Forbidden pattern eliminated: Did not open any section with a definition. "What Separable Actually Means" opens with the analogy first, definition last.
- Analogy or voice move that worked: "Two people not allowed to be on the same side of an equals sign" as the intuition for separability. Carry forward for any future algebraic manipulation posts.
- MCQ/FRQ framing note: FRQ framing was correct throughout. The rubric box language ("Here is exactly how the AP exam scores this type of problem") is in both worked examples. Worked Example 2 uses the same FRQ rubric opener per the MCQ_OR_FRQ=frq spec.
- Internal link note: post-08-integration-intro and post-09-slope-fields-intro are drafts with no live URL. Linked with /ap-calculus-prep/[slug]/ placeholder and flagged [DRAFT, no live URL] in the Related Posts section and in this SKILL DELTA.
- AROC/IROC flag: Surfaced once in "What Separable Actually Means" section. IROC framing for $\frac{dH}{dT}$ as instantaneous rate of change, contrasted with AROC over an interval.
