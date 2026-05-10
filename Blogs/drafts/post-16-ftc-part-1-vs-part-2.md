---
title: "The Fundamental Theorem of Calculus: You Already Use Part 1 Every Day and Don't Know It"
slug: post-16-ftc-part-1-vs-part-2
post_type: long-form
unit: "Unit 6: Integration and Accumulation of Change"
primary_keyword: fundamental theorem of calculus AP calculus
keyword_cluster: FTC part 1 AP calculus, FTC part 2 calculus, derivative of an integral FTC, when to use FTC, AP calculus fundamental theorem problems, FTC chain rule, definite integral evaluation theorem
date: 2026-05-07
mcq_or_frq: mcq
cluster_role: spoke
pillar_slug: TBD
data_year: 2026
---

# The Fundamental Theorem of Calculus: You Already Use Part 1 Every Day and Don't Know It

**18 minute read | Used by 500+ EngiNearU students to go from a 3 to a 5**

---

## Jump To What You Need

- [The Invisible Theorem](#invisible-theorem)
- [What the Two Parts Actually Mean](#what-it-means)
- [How to Tell Them Apart Every Time](#framework)
- [Worked Example 1: FTC Part 2 (Evaluation)](#example-1)
- [Grab the Free Guide](#mid-cta)
- [Worked Example 2: FTC Part 1 with Chain Rule (The MCQ Type That Trips Everyone)](#example-2)
- [The 3 Mistakes That Cost My Students Points](#mistakes)
- [Practice Problems](#practice)
- [FAQ](#faq)
- [Save This For Exam Day](#quick-reference)
- [Related Posts](#related)

---

## The Invisible Theorem {#invisible-theorem}

<!-- HOOK TYPE: name-the-feeling -->
There is a specific experience almost every AP Calculus student has with the Fundamental Theorem of Calculus, and I call it the FTC Blind Spot. You have been using one part of it for months. You use it every single time you evaluate a definite integral. And then one day, the AP exam asks you to identify it by name, or to apply the other part, and your mind goes completely blank.

In a session on May 5, one of my students, Max, said exactly this: "I can't tell you what it is, but I know that I use it all the time without recognizing it." When I told him, "You know one of them for sure, because you use it every time you evaluate a definite integral," something clicked. The theorem he had been using automatically for weeks had never been named for him.

That is the exact gap the AP exam exploits. The **fundamental theorem of calculus AP calculus** questions are not asking you to discover something new. They are asking you to name something you already do. And then they ask you to do the harder part, which most students have never practiced at all.

Here is the real cost. Two separate groups of my students missed FRQ Part C on the same exam because they did not know that $\frac{d}{dx}\int_a^x f(t)\,dt = f(x)$, or that when the upper bound is $x^2$ instead of $x$, you need the chain rule. That is not a conceptual mystery. That is 3 to 4 points left on the table because one specific skill was never drilled.

This post names both parts, shows you exactly how to tell them apart, and gives you the chain rule extension that shows up on the AP exam every single year.

---

## What the Two Parts Actually Mean {#what-it-means}

Most textbooks open this topic by calling one theorem "Part 1" and another "Part 2" and then listing definitions. I have never found that useful as a starting point. Here is the framing I use with every student instead.

Think about a thermostat in a room. Imagine the temperature of the room has been changing all morning. At some point you walk in and ask: "What is the current rate of temperature change?" And separately: "How much did the total temperature change from 8 a.m. to noon?"

Those are two completely different questions. One is about a rate at a specific moment. One is about accumulated change over an interval.

The Fundamental Theorem of Calculus is the bridge between those two questions. It says that integration and differentiation are inverse operations. Not similar operations. Inverse ones. That is not just a philosophical claim. It has two specific, testable forms, and the AP exam uses both.

**FTC Part 1: The Derivative of an Integral**

This is the part Max had never named. It says: if you define a function by accumulating area under a curve from a fixed point $a$ to a variable point $x$, then the derivative of that accumulation function is just the original integrand.

$$\frac{d}{dx}\int_a^x f(t)\,dt = f(x)$$

You would think Part 1 is the simpler one because the result looks clean. It is not the one students use automatically. It is the one they blank on.

**FTC Part 2: The Evaluation Theorem**

This is what you have been doing every single time you compute $\int_1^3 2x\,dx = [x^2]_1^3 = 9 - 1 = 8$. You find an antiderivative $F(x)$ and evaluate $F(b) - F(a)$.

$$\int_a^b f(x)\,dx = F(b) - F(a)$$

Every definite integral you have ever computed uses this. Every one. Most of my students learn this as "plug in the bounds" without ever connecting it to a theorem with a name. The AP exam will ask you to identify it by name or use it in a justification. Know both.

One important note before we go further: some older textbooks and some teachers flip the numbering. What I am calling Part 1 (the derivative-of-an-integral form) is labeled Part 2 in certain curricula. The College Board's [AP Calculus Course and Exam Description](https://apcentral.collegeboard.org/media/pdf/ap-calculus-ab-and-bc-course-and-exam-description.pdf) uses the evaluation theorem as Part 2. Stick with context. If you see $\frac{d}{dx}\int_a^x f(t)\,dt$, that is the differentiation form regardless of what your textbook calls it.

---

## How to Tell Them Apart Every Time {#framework}

This is the decision framework I teach in every session. The whole distinction comes down to one question: what is the problem asking you to do?

**Step 1: What is the operation being performed?**

- If the problem asks you to evaluate a definite integral and get a number: use **FTC Part 2 (Evaluation Theorem)**.
- If the problem gives you a function defined as an integral and asks for its derivative: use **FTC Part 1 (Derivative of an Integral)**.

**Step 2: What does the expression look like?**

| You see this form... | Use this |
|---|---|
| $\int_a^b f(x)\,dx = ?$ (find the value) | FTC Part 2: find antiderivative, evaluate $F(b) - F(a)$ |
| $\frac{d}{dx}\int_a^x f(t)\,dt = ?$ (find derivative) | FTC Part 1: answer is just $f(x)$ |
| $\frac{d}{dx}\int_a^{g(x)} f(t)\,dt = ?$ (upper bound is a function) | FTC Part 1 + Chain Rule: answer is $f(g(x)) \cdot g'(x)$ |

**Step 3: Watch the upper bound.**

This is where Part 1 gets harder. If the upper bound is $x$, the answer is just $f(x)$. But if the upper bound is $x^2$, or $\sin(x)$, or any other function of $x$, you apply the chain rule. The AP exam tests this specific variation every year.

$$\frac{d}{dx}\int_a^{x^2} f(t)\,dt = f(x^2) \cdot 2x$$

The FTC chain rule extension is not a separate concept. It is Part 1 with the chain rule applied on top. Once you see it that way, it becomes automatic.

**The AROC vs. IROC connection.** FTC Part 2 is about accumulated change over an interval, which connects directly to average rate of change. FTC Part 1 produces an instantaneous rate, the derivative of the accumulation function at a specific point. These are not the same thing. If the exam asks for the average rate of change of $F(x) = \int_a^x f(t)\,dt$ over an interval, that is $\frac{F(b)-F(a)}{b-a}$. If it asks for the instantaneous rate at $x = c$, that is $F'(c) = f(c)$ by Part 1. Different question, different answer, different theorem.

---

## Worked Example 1: FTC Part 2, Evaluating a Definite Integral {#example-1}

This is the version you already use. But I want you to work through it explicitly labeling each step, because on FRQ Part C, the AP exam expects you to justify your work by name.

**Problem:** Evaluate $\displaystyle\int_1^4 (3x^2 - 2x + 5)\,dx$.

**Step 1: Identify the theorem.**

We are evaluating a definite integral to get a number. This is FTC Part 2.

$$\int_a^b f(x)\,dx = F(b) - F(a)$$

**Step 2: Find the antiderivative.**

$$F(x) = x^3 - x^2 + 5x$$

Check each term: antiderivative of $3x^2$ is $x^3$. Antiderivative of $-2x$ is $-x^2$. Antiderivative of $5$ is $5x$. No $+C$ needed for definite integrals since it cancels.

**Step 3: Evaluate at the bounds.**

$$F(4) = (4)^3 - (4)^2 + 5(4) = 64 - 16 + 20 = 68$$

$$F(1) = (1)^3 - (1)^2 + 5(1) = 1 - 1 + 5 = 5$$

**Step 4: Subtract.**

$$\int_1^4 (3x^2 - 2x + 5)\,dx = F(4) - F(1) = 68 - 5 = 63$$

$$\boxed{63}$$

**Here is exactly how the AP exam scores this type of problem:**

- Correct antiderivative with all three terms (no $+C$ required for definite integrals, but you must not write one inconsistently)
- Correct evaluation of $F(b)$ and $F(a)$ separately. The AP exam gives credit for $F(4)$ and $F(1)$ computed correctly even if you make an arithmetic error on the subtraction.
- Correct subtraction $F(b) - F(a)$ in the right order. Writing $F(a) - F(b)$ is wrong and scores zero for that step.
- On an FRQ, writing "by the Fundamental Theorem of Calculus, Part 2" before the antiderivative step earns the justification point. Skipping that line costs you the point even if your math is perfectly correct.

---

## Grab the Free AP Calculus Review Sheet {#mid-cta}

If integration is shaky, the FTC is going to feel harder than it needs to be. I put together a free AP Calculus review sheet that covers exactly what needs to be solid before Unit 6 clicks. Zero fluff.

[Free AP Calculus Review Sheet](https://www.aceapcalculus.com/ap-calculus-review-sheet/)

*(Parents: this is a great tool to identify the exact gaps before your student hits the tougher integration units.)*

---

## Worked Example 2: FTC Part 1 with Chain Rule (The MCQ Type That Trips Everyone) {#example-2}

This is the problem type that cost Max and two full groups of my students FRQ points. The AP exam gives you a function defined as an integral and asks for its derivative. If you have never drilled this form specifically, you will freeze.

Here is the version that shows up most often: the upper bound is a function of $x$, not just $x$ itself. That is where the chain rule enters.

**Problem 1 (basic):** Let $G(x) = \displaystyle\int_2^x (t^3 + \cos t)\,dt$. Find $G'(x)$.

**Solution:** Upper bound is $x$. Straight FTC Part 1. No chain rule needed.

$$G'(x) = x^3 + \cos x$$

Done. Whatever was under the integral sign, written in terms of $x$ instead of $t$. That is the whole result.

**Problem 2 (chain rule version):** Let $H(x) = \displaystyle\int_0^{x^2} \sqrt{1 + t^3}\,dt$. Find $H'(x)$.

**Solution:**

Step 1: The upper bound is $x^2$, not $x$. This triggers the chain rule.

Step 2: Let $u = x^2$. Then $H(x) = \int_0^u \sqrt{1+t^3}\,dt$, and by FTC Part 1:

$$\frac{dH}{du} = \sqrt{1+u^3}$$

Step 3: Apply the chain rule. $\frac{dH}{dx} = \frac{dH}{du} \cdot \frac{du}{dx} = \sqrt{1+u^3} \cdot 2x$

Step 4: Substitute $u = x^2$ back:

$$H'(x) = \sqrt{1+(x^2)^3} \cdot 2x = 2x\sqrt{1+x^6}$$

$$\boxed{H'(x) = 2x\sqrt{1+x^6}}$$

**Problem 3 (AP exam style):** Let $F(x) = \displaystyle\int_x^5 e^{t^2}\,dt$. Find $F'(x)$.

This one has a twist: the variable is in the lower bound, not the upper bound.

**Solution:** Flip the bounds and flip the sign.

$$F(x) = -\int_5^x e^{t^2}\,dt$$

Now apply FTC Part 1:

$$F'(x) = -e^{x^2}$$

$$\boxed{F'(x) = -e^{x^2}}$$

**Here is exactly what the AP exam is checking on this problem type:**

- Recognizing that a function defined as an integral with a variable upper bound calls for FTC Part 1
- Applying the chain rule when the upper bound is a composite function like $x^2$, $\sin x$, or $3x$
- Handling a variable in the lower bound by flipping and negating
- Writing the answer in terms of $x$, not $t$. The $t$ is the dummy integration variable. It disappears in the result. If your answer still has $t$ in it, something went wrong.
- On MCQ, this entire problem should take under 90 seconds. The pattern recognition is the skill.

[DESMOS EMBED:
Functions: y=\int_0^x (t^2+1) dt = x^3/3 + x (navy #1a3a6b), point at (2, 14/3) labeled "G'(2) = f(2) = 5" (gold #e8a020)
Window: x[-1,4] y[-1,12]
Lock viewport: yes
Notes: Show the accumulation function G(x) = x^3/3 + x and highlight that G'(x) equals the original integrand f(x) = x^2 + 1 evaluated at x]

---

## The 3 Mistakes That Cost My Students Points {#mistakes}

**Mistake 1: Treating both parts as the same thing and picking one randomly**

Why it happens: Students see "Fundamental Theorem of Calculus" written on an exam and know they are supposed to use it, but they have never cleanly separated the two parts in their head. Both feel vague. They apply whichever formula feels closer.

How to fix it: Use the one-question triage I gave you above. Before you write anything, ask: "Am I finding the value of a definite integral, or am I differentiating a function that is defined as an integral?" That single question routes you to the right part every time. Two separate skills. Two separate operations.

Consequence: On FRQ Part C in 2025, students who could not name which theorem they were applying lost the justification point even when their arithmetic was correct. The AP exam does not give credit for the right answer with no reasoning. Missing that point is the difference between a 4 and a 5 for students in the 60-67 composite range.

**Mistake 2: Forgetting the chain rule when the upper bound is a function**

Why it happens: The basic version, $\frac{d}{dx}\int_a^x f(t)\,dt = f(x)$, is clean and memorable. So when students see a more complex upper bound, they apply the same clean formula and stop. They get $f(x^2)$ instead of $f(x^2) \cdot 2x$.

How to fix it: Every time the upper bound is anything other than plain $x$, write out the chain rule step explicitly. $u = g(x)$, then $f(u) \cdot g'(x)$. Do not skip the multiplication step. It is invisible in the pattern and the AP exam knows it.

Consequence: This is an MCQ point that should take under 90 seconds. Missing it because you dropped the chain rule means you spent the time and still got it wrong. The wrong answer choice usually corresponds exactly to the result you get if you forget the $g'(x)$ factor.

**Mistake 3: Leaving the dummy variable in the answer**

Why it happens: The FTC Part 1 problems all use $t$ as the integration variable. After applying the theorem, students copy $f(t)$ into their answer instead of converting to $f(x)$.

How to fix it: Immediately after applying Part 1, replace every $t$ with $x$ (or with $g(x)$ if chain rule applies). The $t$ is a placeholder. It has no meaning outside the integral. If $t$ appears in your final answer, that is a red flag.

Consequence: On MCQ, writing $f(t)$ as your answer points you away from the correct answer choice. The choices are always in terms of $x$. If your result still has $t$ in it, you will second-guess yourself, waste time, and often switch to the wrong answer.

---

## Practice Problems {#practice}

Try these before checking the answers. For each one, identify which part of the FTC applies before you write a single symbol.

**Problem 1: Evaluation**

$$\int_0^3 (x^2 - 4x + 7)\,dx$$

**Problem 2: FTC Part 1 with Chain Rule**

Let $G(x) = \displaystyle\int_1^{x^3} \sin(t^2)\,dt$. Find $G'(x)$.

**Problem 3: Variable in Lower Bound**

Let $F(x) = \displaystyle\int_x^{10} (t^2 + 1)\,dt$. Find $F'(x)$.

**Answers:**

Problem 1:
$$F(x) = \frac{x^3}{3} - 2x^2 + 7x$$
$$F(3) = 9 - 18 + 21 = 12$$
$$F(0) = 0$$
$$\int_0^3(x^2-4x+7)\,dx = 12 - 0 = 12$$

Problem 2:
Upper bound is $x^3$, so chain rule applies. Let $u = x^3$.
$$G'(x) = \sin((x^3)^2) \cdot 3x^2 = 3x^2\sin(x^6)$$

Problem 3:
Variable is in the lower bound. Flip and negate.
$$F(x) = -\int_{10}^x(t^2+1)\,dt$$
$$F'(x) = -(x^2+1)$$

---

## FAQ {#faq}

**Q: What is the Fundamental Theorem of Calculus in AP Calculus, and how many parts are there?**

There are 2 parts. Part 1 says that if $F(x) = \int_a^x f(t)\,dt$, then $F'(x) = f(x)$. Part 2 (the Evaluation Theorem) says that $\int_a^b f(x)\,dx = F(b) - F(a)$ where $F$ is any antiderivative of $f$. Both parts are in scope for AP Calculus AB and BC. Part 2 shows up every time you compute a definite integral. Part 1 shows up in MCQ and FRQ as a standalone problem type. Know both and know which is which. The AP exam will not tell you which one to use.

**Q: When do I use FTC Part 1 vs. Part 2 on the AP exam?**

If the problem gives you a function defined as an integral and asks for its derivative, use Part 1. If it asks you to compute the value of a definite integral, use Part 2. The expression tells you which one: $\frac{d}{dx}[\text{integral}]$ is Part 1. $\int_a^b f(x)\,dx = $ a number is Part 2. The hardest MCQ variants will give you both in the same problem, asking you to first differentiate an accumulation function and then evaluate it at a specific point. Stay calm, do one step at a time.

**Q: How does the chain rule apply to FTC Part 1?**

When the upper bound of the integral is a function of $x$ (like $x^2$, $\sin x$, or $3x + 1$), you apply the chain rule on top of Part 1. The formula becomes: $\frac{d}{dx}\int_a^{g(x)} f(t)\,dt = f(g(x)) \cdot g'(x)$. Memorize that template. The AP exam tests this version specifically, and the wrong answer choices are designed to catch students who apply Part 1 without the chain rule factor. This is one of the most learnable 1-point MCQ gains on the entire exam. If you can recognize the pattern and apply it in under 90 seconds, it is an automatic point.

**Q: Do I need to know the proof of the FTC for AP Calculus?**

No. The AP exam does not ask you to prove either part. It asks you to apply them, identify them by name in justifications, and recognize when a problem is calling for each one. What you do need to know cold: the statement of both parts, the chain rule extension of Part 1, and the justification language for FRQ ("by the Fundamental Theorem of Calculus, Part 2"). Proofs are for your teacher to know. AP points come from application.

---

## Save This For Exam Day {#quick-reference}

**FTC Part 2: Evaluation Theorem**
$$\int_a^b f(x)\,dx = F(b) - F(a)$$
Use when: evaluating a definite integral to get a number.

**FTC Part 1: Derivative of an Integral (basic)**
$$\frac{d}{dx}\int_a^x f(t)\,dt = f(x)$$
Use when: differentiating an accumulation function with upper bound $x$.

**FTC Part 1: Chain Rule Extension**
$$\frac{d}{dx}\int_a^{g(x)} f(t)\,dt = f(g(x)) \cdot g'(x)$$
Use when: upper bound is any function of $x$, not just plain $x$.

**Lower bound has the variable?**
$$\frac{d}{dx}\int_x^b f(t)\,dt = -f(x)$$
Flip the bounds, flip the sign, then apply Part 1.

**FRQ justification language (required for the justification point):**
"By the Fundamental Theorem of Calculus, Part 2..."
"By the Fundamental Theorem of Calculus, Part 1..."

**The dummy variable rule:** $t$ in the integrand becomes $x$ (or $g(x)$) in the result. If $t$ is still in your answer, you have not finished.

<!-- SCREENSHOT-ABLE ONE-LINER -->
Every time you evaluate a definite integral, you are using the Fundamental Theorem of Calculus Part 2.
<!-- END ONE-LINER -->

---

## Related Posts {#related}

If this clicked, these posts connect directly to the FTC:

- [What Is a Derivative in AP Calculus?](https://enginearu.com/ap-calculus-prep/what-is-a-derivative-ap-calculus/) The limit definitions that underpin everything FTC Part 1 produces.
- [Integration and Accumulation of Change: Unit 6 Intro](/ap-calculus-prep/integration-intro/) Where the definite integral is defined and why the FTC works. [DRAFT, no live URL]
- [U-Substitution in AP Calculus](/ap-calculus-prep/u-substitution/) The technique you need to evaluate the antiderivatives FTC Part 2 depends on. [DRAFT, no live URL]

---

## Stop Guessing and Start Drilling {#end-cta}

My students who blank on FTC Part 1 during the exam have usually seen it before. They just never drilled it until recognition was automatic. Part 2 shows up in almost every FRQ that involves integration. Part 1 with the chain rule is a regular MCQ point. Together they account for more AP points than almost any other single concept in Unit 6.

If FTC Part 1 with the chain rule feels shaky right now, that shakiness will show up on exam day. The fix is not re-reading notes. It is drilling the specific pattern until recognition is automatic.

[Free AP Calculus Review Sheet](https://enginearu.com/the-ultimate-ap-calculus-review-sheet/)

*(Parents: if your student is heading into the AP exam and integration feels uncertain, this is the exact topic to address first. The FTC is not optional content.)*

---

**[SEASONAL CTA: Active through September 15, 2026]**

If you want your student to walk into AP Calculus already ahead on integration and the FTC, my summer program covers both parts with real exam-style problems, small groups, and a structured plan. Spots fill fast.

[Free Pre-Assessment](https://www.aceapcalculus.com/summer-diagnostic-page)

---

## SEO Metadata

SEO Title: Fundamental Theorem of Calculus: FTC Parts 1 and 2
Meta Description: The FTC has 2 parts and the AP exam tests both. Learn which one you already use, which one you blank on, and the chain rule extension that shows up every year.
Slug: fundamental-theorem-of-calculus-ap-calculus
Primary Keyword: fundamental theorem of calculus AP calculus
Focus Keyphrase: fundamental theorem of calculus AP calculus
Secondary Keywords: FTC part 1 AP calculus, FTC part 2 calculus, derivative of an integral FTC, when to use FTC, AP calculus fundamental theorem problems, FTC chain rule, definite integral evaluation theorem
Alt Text Suggestions:
- "Graph showing accumulation function G(x) equals integral from 0 to x of f(t) dt with G prime of x equals f of x labeled, demonstrating FTC Part 1 in AP Calculus"
- "Side-by-side comparison of FTC Part 1 derivative of an integral and FTC Part 2 evaluation theorem for AP Calculus exam"
Schema Type: Educational Article
SERP_TARGET_WORD_COUNT: ~3,800 words (avg of OpenStax ~4,750 and Paul's Notes ~2,500 for FTC content; third source unavailable)
COVERAGE_GAPS_ADDRESSED: naming convention confusion between textbooks (some flip Part 1 and Part 2), historical context reference, real-world applications connection (motion/displacement), Mean Value Theorem for Integrals link mentioned, FRQ justification language required for scoring

---

## Zach's Flow Checklist

[ ] Math accuracy check:
1. FTC Part 2 formula: $\int_a^b f(x)\,dx = F(b)-F(a)$ [confirmed]
2. FTC Part 1 formula: $\frac{d}{dx}\int_a^x f(t)\,dt = f(x)$ [confirmed]
3. FTC chain rule extension: $f(g(x)) \cdot g'(x)$ [confirmed]
4. Example 1: $F(4) = 64-16+20=68$, $F(1)=1-1+5=5$, $68-5=63$ [confirmed]
5. Problem 2 (G'(x)): upper bound $x^3$, answer $3x^2\sin(x^6)$ [confirmed]
6. Problem 3 (F'(x)): lower bound flip, answer $-(x^2+1)$ [confirmed]
7. Example 2a: $G'(x) = x^3 + \cos x$ [confirmed]
8. Example 2b: $H'(x) = 2x\sqrt{1+x^6}$, confirm $(x^2)^3 = x^6$ before publishing
9. Example 2c (lower bound): $F'(x) = -e^{x^2}$ [confirmed]

[ ] Personal moment: Max's May 5 quote "I can't tell you what it is, but I know that I use it all the time without recognizing it" INSERTED in Intro paragraph 2. Two separate groups missing FRQ Part C INSERTED in Intro paragraph 4 and Mistake 1 consequence line. Confirm specific exam reference (2025 FRQ) before publishing.

[ ] Voice check: Re-read "The dummy variable rule: $t$ in the integrand becomes $x$..." and confirm it sounds like coaching, not textbook. Re-read Mistake 2 "The wrong answer choice usually corresponds exactly to the result you get if you forget the $g'(x)$ factor" and confirm it is specific enough.

[ ] Desmos graph: Accumulation function G(x) = x^3/3 + x with point at (2, ~4.67) showing G'(2) = f(2) = 5. Window x[-1,4] y[-1,12]. Screenshot from HTML preview.

[ ] CTA confirmation: Mid-post (Free AP Calculus Review Sheet, enginearu.com/the-ultimate-ap-calculus-review-sheet/). End (Free AP Calculus Review Sheet). Seasonal Option E (summer diagnostic, aceapcalculus.com/summer-diagnostic-page) active through Sept 15, 2026.

[ ] Estimated read time: ~3,800 words / 200 = 19 minutes. Shown as 18 min read.

---

## SKILL DELTA

- New lesson learned: The "FTC Blind Spot" (students using Part 2 automatically without naming it, then blanking on Part 1) is a named feeling that opens this topic better than any definition. Naming student experiences before naming theorems = higher engagement.
- Forbidden pattern eliminated: No em-dashes used. AI-cliché openers were eliminated throughout. Section openings use student scenarios and analogies rather than definitions. Imperative or hype-register phrases were cut wherever they appeared.
- Analogy or voice move that worked: The thermostat analogy (rate at a moment vs. accumulated change over interval) as the frame for Part 1 vs. Part 2 before any formula is introduced. Carry forward for accumulation/FTC adjacent posts.
- MCQ/FRQ framing note: Post is classified MCQ. Worked Example 2 rubric opens with "Here is exactly what the AP exam is checking on this problem type." End-of-mistakes consequence lines reference specific point losses and exam score band impact (60-67 composite range). FRQ justification language included in the Quick Reference Box because FTC appears in FRQ context even though the post is primarily MCQ-focused. This dual framing is appropriate and intentional.
- post-08-integration-intro and post-10-u-substitution are drafts with no live URL yet. Linked as /ap-calculus-prep/integration-intro/ and /ap-calculus-prep/u-substitution/ respectively with [DRAFT, no live URL] note in this SKILL DELTA.
- PILLAR_SLUG is TBD. Auditor will skip check 21.
