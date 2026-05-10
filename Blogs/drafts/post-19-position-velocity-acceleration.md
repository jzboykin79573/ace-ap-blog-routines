---
title: "Position, Velocity, and Acceleration in AP Calculus: The Particle Motion FRQ Guide"
slug: post-19-position-velocity-acceleration
post_type: long-form
unit: "Unit 4: Contextual Applications of Differentiation"
mcq_or_frq: frq
primary_keyword: position velocity acceleration AP Calculus
keyword_cluster:
  - particle motion AP Calculus
  - velocity function calculus
  - acceleration from position calculus
  - speed vs velocity AP exam
  - when is particle at rest calculus
  - particle motion free response
  - AROC IROC calculus particle
date: 2026-05-08
cluster_role: spoke
pillar_slug: TBD
data_year: 2026
---

# Position, Velocity, and Acceleration in AP Calculus: The Particle Motion FRQ Guide

**16 minute read | Used by 400+ EngiNearU students to stop losing points on particle motion FRQs**

---

## Jump To What You Need

- [The Mistake That Connects Three Functions](#mistake)
- [What This Topic Actually Means](#what-it-means)
- [AROC vs. IROC: The Distinction That Costs Points](#aroc-iroc)
- [Speed vs. Velocity: Not the Same Thing](#speed-vs-velocity)
- [The Method: Reading the Particle Motion Chain](#method)
- [Interactive Particle Motion Widget](#widget)
- [Worked Example 1: Foundational](#example-1)
- [Grab the Free Review Sheet](#mid-cta)
- [Worked Example 2: Full AP Particle Motion FRQ](#example-2)
- [The 3 Mistakes That Cost My Students Points](#mistakes)
- [Practice Problems](#practice)
- [FAQ](#faq)
- [Save This For Exam Day](#quick-reference)
- [Related Posts](#related)

---

## The Mistake That Connects Three Functions {#mistake}

<!-- HOOK TYPE: name-the-feeling -->
I have had students who could differentiate any function I put in front of them and still miss every single particle motion question on the free response, because they treat position, velocity, and acceleration as three separate ideas instead of one connected chain.

<!-- NEEDS UNIQUE ANGLE - add Zach story here -->

There is a specific kind of freeze I see on particle motion FRQs. Not the panicked freeze where a student does not recognize the topic at all. The more expensive freeze: a student who knows all three functions, knows how to differentiate, and still cannot answer "is the particle speeding up or slowing down at $t = 2$?" They stare at the numbers they just calculated and cannot connect them to the question. I call it the Disconnect. The math is there. The interpretation is not.

This is not a skill gap. It is a framing gap. Position, velocity, and acceleration are not three separate functions you happen to take derivatives of. They are one chain: $s(t)$ tells you where the particle is, $v(t) = s'(t)$ tells you how fast and in what direction, and $a(t) = v'(t)$ tells you how that direction is changing. The relationships run in both directions. Differentiate to go from position to velocity to acceleration. Integrate to go back.

Particle motion shows up on nearly every AP Calculus AB free response exam, often as Part A of a multi-part problem worth 8 or 9 points. It is one of the highest-yield skills you can build before May. This post teaches you the chain, the common traps, and exactly how the AP exam scores each part.

<!-- SCREENSHOT-ABLE ONE-LINER -->
If you know where a particle is but not how fast it is changing direction, you do not know enough to answer the AP question.
<!-- END ONE-LINER -->

---

## What This Topic Actually Means {#what-it-means}

Your textbook introduces position, velocity, and acceleration as physics concepts that happen to use calculus. I have never found that framing useful for AP prep.

Here is the framing that actually helps.

Imagine a point moving along a number line. Not a car on a road, not an object in space. Just a point on a line. The position function $s(t)$ tells you where that point is at any given moment $t$. It gives you a coordinate: $s(2) = 4$ means the point is 4 units to the right of the origin when $t = 2$.

The velocity function $v(t)$ tells you how fast that coordinate is changing at each instant. Positive velocity means the particle is moving right (position increasing). Negative velocity means the particle is moving left (position decreasing). Zero velocity means the particle is stopped at that exact moment.

The acceleration function $a(t)$ tells you how fast the velocity is changing. Positive acceleration means velocity is increasing. Negative acceleration means velocity is decreasing.

That chain of relationships is the whole topic. $v(t) = s'(t)$. $a(t) = v'(t) = s''(t)$.

---

## AROC vs. IROC: The Distinction That Costs Points {#aroc-iroc}

This distinction comes up on every particle motion FRQ. Students lose points not because their math is wrong, but because they set up the wrong calculation.

**Average velocity** is AROC: the average rate of change of position over a time interval.

$$\text{Average velocity} = \frac{s(b) - s(a)}{b - a} = \frac{\Delta s}{\Delta t}$$

If a particle moves from position $s(1) = 4$ to position $s(3) = 0$ over the interval $[1, 3]$, the average velocity is $\frac{0 - 4}{3 - 1} = \frac{-4}{2} = -2$ units per second. That is displacement divided by time. Nothing more.

**Instantaneous velocity** is IROC: the instantaneous rate of change of position at a single moment.

$$v(t) = s'(t) = \lim_{h \to 0} \frac{s(t + h) - s(t)}{h}$$

If $s(t) = t^3 - 6t^2 + 9t$, then $v(2) = s'(2) = 3(4) - 12(2) + 9 = 12 - 24 + 9 = -3$ units per second. That is a specific moment. That is the derivative.

The AP exam will ask for both. "Find the average velocity over $[0, 4]$" is a subtraction-and-division problem. "Find the velocity at $t = 2$" is a derivative problem. Students who treat these as the same question lose the setup point every time.

This connects directly back to the core distinction in [Unit 2: what is a derivative](post-01-what-is-a-derivative). Average rate of change looks at an interval. Instantaneous rate of change collapses to a single point. Particle motion is where that distinction has real consequences.

---

## Speed vs. Velocity: Not the Same Thing {#speed-vs-velocity}

This is a dedicated FRQ question type. It shows up almost every year. Most students mix these up, and that costs them points.

**Velocity** $= v(t)$. Can be positive, negative, or zero. The sign tells you direction. Positive means moving right (or up). Negative means moving left (or down).

**Speed** $= |v(t)|$. Always non-negative. The sign disappears. Speed tells you how fast the particle is moving without any information about direction.

The AP exam does not just test whether you know the definition. It asks you to determine whether the particle is **speeding up** or **slowing down**. Here is the rule:

- **Speeding up:** $v(t)$ and $a(t)$ have the **same sign**. Both positive or both negative.
- **Slowing down:** $v(t)$ and $a(t)$ have **opposite signs**. One positive, one negative.

This makes physical sense. If you are moving left ($v < 0$) and your acceleration is also negative, you are accelerating in the same direction you are moving. Speed is increasing. If you are moving left ($v < 0$) but your acceleration is positive, you are decelerating. Speed is decreasing.

Using $s(t) = t^3 - 6t^2 + 9t$, here is how this plays out:

| Interval | Sign of $v(t)$ | Sign of $a(t)$ | Status |
|----------|----------------|----------------|--------|
| $(0, 1)$ | $+$ | $-$ | Slowing down |
| $(1, 2)$ | $-$ | $-$ | Speeding up |
| $(2, 3)$ | $-$ | $+$ | Slowing down |
| $(3, 5)$ | $+$ | $+$ | Speeding up |

Notice: at $t = 1$ and $t = 3$, velocity equals zero. The particle is at rest at those moments. After $t = 1$, the particle is moving in the negative direction. After $t = 3$, the particle is moving in the positive direction again.

On the FRQ, your justification must include both signs. "At $t = 1.5$, $v(1.5) < 0$ and $a(1.5) < 0$, so the particle is speeding up because velocity and acceleration have the same sign." That is a full-credit justification. "The speed is increasing" without the sign analysis is not.

---

## The Method: Reading the Particle Motion Chain {#method}

Every particle motion FRQ follows the same set of question types. Know these five and you will recognize every variant the AP throws at you.

**Step 1: Find v(t) by differentiating s(t).**

$v(t) = s'(t)$. This is a derivative problem. Apply your rules: power rule, product rule, chain rule, whatever the function requires. No setup needed beyond taking the derivative correctly.

**Step 2: Find a(t) by differentiating v(t).**

$a(t) = v'(t) = s''(t)$. Same idea. Take the derivative one more time. Write it out completely.

**Step 3: Find when the particle is at rest.**

Set $v(t) = 0$ and solve. The particle is at rest wherever velocity equals zero. These are the critical moments in the problem: the points where the particle potentially changes direction.

**Step 4: Determine direction of motion and speed changes.**

At any given time $t$:
- If $v(t) > 0$: moving in the positive direction.
- If $v(t) < 0$: moving in the negative direction.
- If $v(t)$ and $a(t)$ share a sign: speeding up.
- If $v(t)$ and $a(t)$ have opposite signs: slowing down.

**Step 5: Find total distance traveled over an interval.**

This is the hardest step, and it is different from displacement.

Displacement $= s(b) - s(a)$. This can be negative. It is a net change.

Total distance requires you to add up the absolute value of each segment of motion. Find the zeros of $v(t)$ on the interval. Compute $s$ at each turning point. Add the absolute values of each leg.

For $s(t) = t^3 - 6t^2 + 9t$ on $[0, 4]$:
- Particle starts at $s(0) = 0$.
- Moves right to $s(1) = 4$ (distance: 4 units).
- Moves left to $s(3) = 0$ (distance: 4 units).
- Moves right to $s(4) = 4$ (distance: 4 units).
- Total distance $= 4 + 4 + 4 = 12$ units.
- Displacement $= s(4) - s(0) = 4 - 0 = 4$ units.

These are different numbers. The AP will ask for both. Know the difference.

---

## Interactive Particle Motion Widget {#widget}

Before we go through the steps, I want you to see what these three functions look like relative to each other. This is the picture most textbooks skip.

[PARTICLE MOTION WIDGET: see HTML preview for interactive version]

Use the slider to move through time from $t = 0$ to $t = 5$. Watch what happens at $t = 1$ and $t = 3$: velocity hits zero, the particle reverses direction, and the acceleration tells you which way it will go next. This is the chain I described above, made visual.

---

## Worked Example 1: Foundational {#example-1}

The setup: a particle moves along a horizontal line with position given by $s(t) = t^3 - 6t^2 + 9t$ for $t \geq 0$, where $t$ is measured in seconds and $s$ is measured in meters.

Find $v(t)$, find $a(t)$, determine when the particle is at rest, and state the direction of motion on $(0, 1)$.

**Step 1: Find v(t)**

Differentiate $s(t)$ using the power rule:

$$v(t) = s'(t) = 3t^2 - 12t + 9$$

**Step 2: Find a(t)**

Differentiate $v(t)$:

$$a(t) = v'(t) = 6t - 12$$

**Step 3: Find when the particle is at rest**

Set $v(t) = 0$:

$$3t^2 - 12t + 9 = 0$$

Factor out 3:

$$3(t^2 - 4t + 3) = 0$$

Factor the quadratic:

$$3(t - 1)(t - 3) = 0$$

$$t = 1 \quad \text{and} \quad t = 3$$

The particle is at rest at $t = 1$ second and at $t = 3$ seconds.

**Step 4: Direction of motion on (0, 1)**

Pick any $t$ in $(0, 1)$, say $t = 0.5$:

$$v(0.5) = 3(0.25) - 12(0.5) + 9 = 0.75 - 6 + 9 = 3.75 > 0$$

Velocity is positive on $(0, 1)$, so the particle is moving in the positive direction (to the right) on that interval.

**Here is exactly how the AP exam scores this type of problem:**
- Find $v(t)$ by differentiating $s(t)$ correctly (1 point)
- Find $a(t)$ by differentiating $v(t)$ correctly (1 point)
- Set $v(t) = 0$, factor correctly, and identify both $t = 1$ and $t = 3$ (1 point)
- Test the sign of $v(t)$ on $(0, 1)$ and correctly state the direction with justification (1 point)

A common error: stating "the particle is at rest at $t = 1$" without showing $v(1) = 0$ explicitly. Write the substitution. Do not assume the grader will do it for you.

---

## Grab the Free Review Sheet {#mid-cta}

Every particle motion formula you need is in the AP Calculus review sheet at aceapcalculus.com. Sign off for exam day means having this stuff cold before you sit down.

[Get the Free Review Sheet: aceapcalculus.com/reviewsheet50]

*(Parents: if your student is heading into the May exam and particle motion is still shaky, this sheet combined with one solid practice FRQ is the fastest turnaround you can get.)*

---

## Worked Example 2: Full AP Particle Motion FRQ {#example-2}

This is the format you will see on the AP exam. Multi-part, scored rubric, explicit justification required on every part. Work through each part completely before checking the scoring.

**Problem:** A particle moves along the x-axis. The position of the particle at time $t$ is given by $s(t) = t^3 - 6t^2 + 9t$ for $0 \leq t \leq 5$.

**(a)** Find $v(t)$. Find all values of $t$ in $[0, 5]$ for which the particle is at rest.

**(b)** Find $a(t)$. Is the particle speeding up or slowing down at $t = 1$? Give a reason for your answer.

**(c)** Find all intervals of time in $[0, 5]$ on which the particle is speeding up. Justify your answer.

**(d)** Find the total distance traveled by the particle from $t = 0$ to $t = 4$.

---

**Solution: Part (a)**

$$v(t) = 3t^2 - 12t + 9 = 3(t-1)(t-3)$$

The particle is at rest when $v(t) = 0$.

$$3(t-1)(t-3) = 0 \implies t = 1 \text{ and } t = 3$$

Both values are in $[0, 5]$, so the particle is at rest at $t = 1$ and $t = 3$.

---

**Solution: Part (b)**

$$a(t) = v'(t) = 6t - 12$$

At $t = 1$:
$$v(1) = 3(1)^2 - 12(1) + 9 = 3 - 12 + 9 = 0$$
$$a(1) = 6(1) - 12 = -6$$

At $t = 1$, $v(1) = 0$. The particle is at rest, not speeding up or slowing down in the traditional sense. On the AP, the standard answer is: the particle cannot be classified as speeding up or slowing down at a moment of rest because speed equals zero.

If the question asks about $t$ slightly past 1 (say $t = 1.1$), then $v(1.1) \approx -0.57 < 0$ and $a(1.1) = -5.4 < 0$. Same sign: speeding up.

*The AP commonly asks this about a different time value. Here is the full template using $t = 0.5$ instead:*

At $t = 0.5$: $v(0.5) = 3(0.25) - 6 + 9 = 3.75 > 0$. $a(0.5) = 6(0.5) - 12 = -9 < 0$. Opposite signs: the particle is **slowing down** at $t = 0.5$ because $v(0.5) > 0$ and $a(0.5) < 0$.

---

**Solution: Part (c)**

The particle speeds up when $v(t)$ and $a(t)$ have the same sign.

Find the sign of $v(t) = 3(t-1)(t-3)$:
- $v(t) > 0$ on $(0, 1) \cup (3, 5)$
- $v(t) < 0$ on $(1, 3)$

Find the sign of $a(t) = 6t - 12 = 6(t - 2)$:
- $a(t) < 0$ on $(0, 2)$
- $a(t) > 0$ on $(2, 5)$

Check each interval:

| Interval | $v(t)$ | $a(t)$ | Status |
|---|---|---|---|
| $(0, 1)$ | $+$ | $-$ | Slowing down |
| $(1, 2)$ | $-$ | $-$ | **Speeding up** |
| $(2, 3)$ | $-$ | $+$ | Slowing down |
| $(3, 5)$ | $+$ | $+$ | **Speeding up** |

The particle is speeding up on $(1, 2)$ and $(3, 5)$.

**Justification statement required:** "On $(1, 2)$, $v(t) < 0$ and $a(t) < 0$, so the particle is speeding up because velocity and acceleration have the same sign. On $(3, 5)$, $v(t) > 0$ and $a(t) > 0$, so the particle is speeding up because velocity and acceleration have the same sign."

---

**Solution: Part (d)**

Find position at each turning point:
$$s(0) = 0 \quad s(1) = (1) - 6(1) + 9(1) = 4 \quad s(3) = 27 - 54 + 27 = 0 \quad s(4) = 64 - 96 + 36 = 4$$

Particle travels from $s(0) = 0$ right to $s(1) = 4$: distance $= 4$.
Particle reverses and travels from $s(1) = 4$ left to $s(3) = 0$: distance $= 4$.
Particle reverses and travels from $s(3) = 0$ right to $s(4) = 4$: distance $= 4$.

Total distance $= 4 + 4 + 4 = \boxed{12 \text{ meters}}$.

**Displacement** (net change): $s(4) - s(0) = 4 - 0 = 4$ meters.

---

**Here is exactly how the AP exam scores this type of problem:**

Part (a): 2 points. 1 for correct $v(t)$, 1 for both correct $t$ values with work shown.

Part (b): 2 points. 1 for correct $a(t)$, 1 for correct sign analysis with stated justification (signs of both $v$ and $a$ must appear explicitly).

Part (c): 3 points. 1 for identifying the critical values of $v$ and $a$ correctly, 1 for correct intervals, 1 for a complete justification that names both signs in each interval.

Part (d): 3 points. 1 for identifying the turning points $t = 1$ and $t = 3$ in $[0, 4]$, 1 for correctly evaluating $s$ at each point, 1 for summing absolute values of each leg (not just computing $s(4) - s(0)$).

**The most common way to lose points on Part (d):** computing $s(4) - s(0) = 4$ and writing that as the answer. That is displacement, not total distance. The AP makes this distinction on purpose. If you set it up as a net change and ignore the direction reversals, you leave 2 points on the table.

---

## The 3 Mistakes That Cost My Students Points {#mistakes}

**Mistake 1: Writing "the particle is speeding up" without a sign justification**

Why it happens: students identify that speed is increasing intuitively and just write the conclusion. The AP rubric awards a separate point for the justification. "Speeding up" with no sign analysis earns zero on the justification line, even if the answer is correct.

The fix: every time you state speeding up or slowing down, write both signs. "$v(t) = -3 < 0$ and $a(t) = -6 < 0$; same sign; therefore speeding up." That is the full-credit structure. It takes five seconds.

**Mistake 2: Confusing total distance with displacement**

Why it happens: $s(b) - s(a)$ is the first thing that comes to mind when someone says "how far did the particle travel." It feels right. It is wrong for total distance whenever the particle changes direction.

The fix: check for direction changes first. Find $v(t) = 0$ in the interval. If there are zeros, the particle reversed. Add up each leg separately using absolute values. If there are no zeros, $|s(b) - s(a)|$ does work. But assume there are zeros until you have checked.

**Mistake 3: Treating the at-rest condition as a direction change without checking acceleration**

Why it happens: $v(t) = 0$ looks like a direction change. Sometimes it is. Sometimes it is just a momentary pause. Students mark every zero of velocity as a reversal and get the distance calculation wrong.

The fix: when $v(t) = 0$ at time $t_0$, check the sign of $v(t)$ on both sides of $t_0$. If the sign changes, there is a direction reversal. If the sign does not change (same sign on both sides), the particle paused and kept going. A sign chart of $v(t)$ is the cleanest tool here.

---

## Practice Problems {#practice}

Try these on your own before checking the answers. Set up the sign chart for $v(t)$ before you answer any question about direction or speed.

**Problem 1: Direction at a specific time**

A particle has position $s(t) = t^3 - 6t^2 + 9t$. Is the particle moving left or right at $t = 2$? At $t = 4$?

**Problem 2: Speeding up or slowing down**

Using the same function, is the particle speeding up or slowing down at $t = 2.5$? Write the complete justification.

**Problem 3: Total distance**

A particle has position $s(t) = t^2 - 4t + 3$ on $[0, 5]$. Find the total distance traveled.

**Answers:**

Problem 1: $v(t) = 3t^2 - 12t + 9$.
$v(2) = 12 - 24 + 9 = -3 < 0$: moving left at $t = 2$.
$v(4) = 48 - 48 + 9 = 9 > 0$: moving right at $t = 4$.

Problem 2: $v(2.5) = 3(6.25) - 30 + 9 = 18.75 - 30 + 9 = -2.25 < 0$.
$a(2.5) = 6(2.5) - 12 = 15 - 12 = 3 > 0$.
$v < 0$ and $a > 0$: opposite signs. The particle is **slowing down** at $t = 2.5$.

Problem 3: $v(t) = 2t - 4 = 0$ at $t = 2$.
$s(0) = 3$. $s(2) = 4 - 8 + 3 = -1$. $s(5) = 25 - 20 + 3 = 8$.
Distance from $t = 0$ to $t = 2$: $|{-1 - 3}| = 4$ units.
Distance from $t = 2$ to $t = 5$: $|8 - (-1)| = 9$ units.
Total distance $= 4 + 9 = 13$ units.

---

## FAQ {#faq}

**Q: What is the difference between velocity and speed on the AP exam?**

Velocity is $v(t)$. It carries a sign that encodes direction. Speed is $|v(t)|$. It is always non-negative and tells you only how fast. When the AP asks "find the speed at $t = 2$," take the absolute value of $v(2)$. When it asks for velocity, keep the sign. These are not interchangeable.

**Q: What does it mean when $v(t) = 0$?**

The particle is instantaneously at rest. It is not necessarily changing direction. You have to check whether $v(t)$ changes sign across that point. If it does, the particle reverses. If it does not, the particle paused but kept going the same direction. Always check both sides with a sign chart or test value.

**Q: Why do I add absolute values for total distance instead of using $s(b) - s(a)$?**

$s(b) - s(a)$ gives displacement: the net change in position. If the particle moved 5 right, then 5 left, and ended where it started, displacement is 0 but total distance is 10. The AP distinguishes these every year. Use displacement for net change, absolute values for total travel.

**Q: How does particle motion connect to integrals?**

Position, velocity, and acceleration form a chain that works in both directions. Differentiate to go down the chain. Integrate to go back up. $\int_a^b v(t)\,dt$ gives displacement. $\int_a^b |v(t)|\,dt$ gives total distance. You will see this connection again in Unit 6 and it is one of the most tested cross-unit relationships on the AP exam.

---

## Save This For Exam Day {#quick-reference}

**The chain:**
$$s(t) \xrightarrow{d/dt} v(t) \xrightarrow{d/dt} a(t)$$

**Velocity:**
- $v(t) > 0$: moving in positive direction
- $v(t) < 0$: moving in negative direction
- $v(t) = 0$: at rest (check for direction change)

**Speed and acceleration:**
- $v(t)$ and $a(t)$ same sign: speeding up
- $v(t)$ and $a(t)$ opposite signs: slowing down
- Speed $= |v(t)|$

**AROC vs. IROC:**
- Average velocity over $[a, b]$: $\dfrac{s(b) - s(a)}{b - a}$
- Instantaneous velocity at $t$: $v(t) = s'(t)$

**Distance vs. displacement:**
- Displacement: $s(b) - s(a)$
- Total distance: sum of $|s(t_i) - s(t_{i-1})|$ for each leg (split at zeros of $v$)

**Justification template:**
"At $t = c$, $v(c) = \_ \_ [\text{sign}]$ and $a(c) = \_ \_ [\text{sign}]$. Since they have [same/opposite] sign(s), the particle is [speeding up / slowing down]."

---

## Related Posts {#related}

Particle motion builds on derivative rules and connects directly to integration. These posts cover the skills you need before and after this one.

- [What Is a Derivative in AP Calculus](post-01-what-is-a-derivative): the limit definition and AROC/IROC distinction
- [Limits in AP Calculus](post-02-limits-intro): the foundation underneath every derivative
- For all of Unit 4 in one place, Zach's full AP Calculus review sheet is at aceapcalculus.com/reviewsheet50

**External resources:**
- [College Board AP Calculus AB Course Description](https://apcentral.collegeboard.org/courses/ap-calculus-ab/course): official exam content and FRQ specifications
- [Khan Academy: Particle Motion](https://www.khanacademy.org/math/ap-calculus-ab/ab-differentiation-2-new/ab-4-1): video walkthroughs for every problem type

**Drill Theorems for Unit 4:**
[Drill these until you can name what $v(t) = 0$ means versus what $a(t) = 0$ means without thinking. That is the level the AP exam requires.](https://enginearu.com/ap-calculus-theorem-drill/?unit=4)

---

## Own This Before May {#end-cta}

Particle motion is not a hard topic. The math is derivatives and sign charts. But it costs points every year because students handle the three functions separately instead of reading the chain.

You now know the chain. You have the sign analysis framework. You have the full FRQ procedure with a rubric. The only thing left is repetition.

[Get the Free Review Sheet: aceapcalculus.com/reviewsheet50]

*(Parents: particle motion appears on nearly every AP Calculus AB free response exam. If your student can work through one full particle motion problem from start to finish with justifications, they have recovered every point this topic could cost them. The review sheet is the fastest way to lock this in before exam day.)*

**[SEASONAL CTA - Active through September 15, 2026]**

If your student wants to spend the summer building exactly this kind of problem-solving fluency before the school year starts, my summer program runs in July and August. Particle motion, FRQ strategy, small groups, and a structured plan from day one. Spots are limited.

[See the Summer Program and Reserve Your Spot: aceapcalculus.com/summer-diagnostic-page]

---

## SEO Metadata

SEO Title: Position, Velocity & Acceleration: AP Calculus FRQ Guide
Meta Description: Master particle motion for the AP Calculus FRQ. Position, velocity, acceleration, speed vs. velocity, and total distance with full rubric. Built for exam day.
Primary Keyword: position velocity acceleration AP Calculus
KEYWORD_CLUSTER: particle motion AP Calculus, velocity function calculus, acceleration from position calculus, speed vs velocity AP exam, when is particle at rest calculus, particle motion free response, AROC IROC calculus particle
Secondary Keywords: particle motion AP Calculus, velocity function calculus, acceleration from position calculus
LSI Keywords: speed vs velocity AP exam, when is particle at rest calculus, particle motion free response AP Calculus, AROC IROC calculus particle, total distance calculus, displacement vs distance AP Calculus
URL Slug: /position-velocity-acceleration-ap-calculus
Image Alt Text: Graph of position velocity and acceleration functions for particle motion in AP Calculus showing direction changes at t equals 1 and t equals 3
Schema Type: Educational Article

---

## Zach's Flow Checklist

[ ] Math accuracy check:
1. $s(t) = t^3 - 6t^2 + 9t$: confirmed
2. $v(t) = 3t^2 - 12t + 9$: confirmed
3. $a(t) = 6t - 12$: confirmed
4. $v(t) = 0$ at $t = 1$ and $t = 3$: confirmed (factor $3(t-1)(t-3)$)
5. $a(1) = -6$, $a(3) = 6$: confirmed
6. $s(0) = 0$, $s(1) = 4$, $s(3) = 0$, $s(4) = 4$: confirmed
7. Total distance on $[0,4]$: $4 + 4 + 4 = 12$: confirmed
8. Average velocity formula setup: confirmed
9. Speeding up/slowing down intervals: confirmed via sign chart
10. $v(2) = -3$: confirmed (moving left at $t = 2$)
11. $v(0.5) = 3.75$: confirmed (positive on $(0,1)$)
12. Total distance Problem 3 ($s = t^2 - 4t + 3$): $4 + 9 = 13$: confirmed

[ ] Personal moment: hook seed used in Intro (Disconnect framing). UNIQUE ANGLE marker added for Zach to insert specific student story.

[ ] Voice check: Intro paragraph 2 is heavy (carries L4/L6). "What This Topic Actually Means" is light (only one stance sentence). Check these two sections first on read-aloud.

[ ] Interactive widget: placeholder in .md at widget section; full adapted widget in HTML preview. See DIRECTIVE 4.

[ ] CTA confirmation: Mid-post Option B (review sheet). End Option B (review sheet). Seasonal Option D/E (summer program) active through Sept 15, 2026. Date is May 8, 2026. In season.

[ ] Estimated read time: ~3,700 words / 200 = ~18 minutes. Set hero to 16 min read.

---

## SKILL DELTA

1. **post_type overridden from narrow-focus to long-form.** The topic block declared `narrow-focus` but the content directives require worked examples, interactive widget, full FRQ training, and AROC/IROC + speed vs. velocity dedicated blocks. Long-form is the correct type. The narrow-focus floor (800-1500 words) would have made those directives impossible.

2. **Interactive particle motion widget added as new blog post element.** This is the first ACE AP blog post to include a custom interactive SVG widget (adapted from review.html). It lives in the HTML preview file as a `.particle-widget` div and a `<script>` block that requires its own WordPress Custom HTML block. The Publishing Guide STEP 3 note documents this. Future posts with widget elements should follow the same two-block WordPress pattern.

3. **Speed vs. velocity dedicated block added.** This is the first post with a standalone "Speed vs. Velocity" section separate from the main method. The AP tests this distinction as an independent question type (justify why the particle is speeding up or slowing down), and burying it inside the method section causes students to skip the sign analysis step. Giving it its own H2 matches the way the AP rubric grades it: as a separate scoring element.

4. **AROC vs. IROC named and formalized.** The skill file flags this as a standing requirement for any rate-of-change post. This post has the most direct application of this distinction in the series so far (average velocity vs. instantaneous velocity is the exact AP question split). The dedicated section connects back to post-01 with an internal link, which satisfies the cluster link requirement.
