# Hard Limits in AP Calculus: Rationalizing, Complex Fractions, and the Techniques That Save Your Score

**14 minute read | Used by 500+ EngiNearU students to go from a 3 to a 5**

---

## Jump To What You Need

- [The Moment Most Students Panic](#panic)
- [What These Techniques Actually Do](#what-they-do)
- [The Decision Framework: Which Technique to Use When](#framework)
- [Worked Example 1: Rationalizing the Numerator (Foundational)](#example-1)
- [Get the Free Guide](#mid-cta)
- [Worked Example 2: Complex Fractions, the MCQ Problem Type](#example-2)
- [The 3 Mistakes That Cost My Students Points](#mistakes)
- [Practice Problems](#practice)
- [FAQ](#faq)
- [Save This For Exam Day](#quick-reference)
- [Related Posts](#related)

---

## The Moment Most Students Panic {#panic}

Most students can handle a basic limit problem using direct substitution until the AP exam hands them a rational function that requires rationalizing the numerator or simplifying a complex fraction. That is where hard limits in AP Calculus start, and they panic because nobody taught them which technique to reach for when.

I have watched this happen in real time with students who scored in the 80s and 90s on every unit test. The problem is not that they are bad at math. The problem is that they have a toolkit with no labels. They know rationalizing exists. They know complex fractions are a thing. But the second they see one on a timed multiple choice section, they freeze trying to remember which method to start with, and they burn 4 minutes on a problem that should take 90 seconds.

Here is what I want you to take from this post before you read anything else: these algebraic limit techniques are, at their core, all doing the same thing. They are trying to cancel the factor that is causing the zero in the denominator. Once you see them that way, choosing a technique becomes a simple diagnostic instead of a guessing game.

The research backs up why this matters. Lamar University's calculus notes identify canceling terms instead of factors as the single most common error students make in algebraic limit problems. Fiveable flags the same issue. And the Vanderbilt error catalog adds two more that I see every year in my own sessions: students who write the simplified form after canceling without noting the $x \neq c$ restriction, and students who drop the $\lim$ notation mid-problem before the limit is actually evaluated. All three of those errors show up on hard limits in AP Calculus, and all three are fully preventable.

This post is specifically about those techniques. By the time we are done, you will have a decision flowchart, two fully worked examples with AP exam rubric framing, and the 3 mistakes that cost my students the most points on this topic.

---

## What These Techniques Actually Do {#what-they-do}

Every algebraic limit technique exists because direct substitution failed. That is the only reason any of them exist. When you plug in $x = c$ and get $\frac{0}{0}$, the function has a removable discontinuity at that point. The numerator and denominator share a common factor. Your job is to find it and cancel it.

Rationalizing the numerator works when you have a square root in the numerator and direct substitution gives $\frac{0}{0}$. The conjugate method multiplies top and bottom by the conjugate expression, which transforms the radical product into a difference of squares and reveals the cancellable factor.

Complex fraction simplification works when the entire expression has a compound fraction: a fraction inside a fraction, usually built around a $\frac{1}{x}$ or $\frac{1}{x+h}$ term. The technique is to multiply the top and bottom of the whole expression by the LCD, which clears the nested fractions and exposes the factor you need to cancel.

Factoring and canceling is the baseline. When both numerator and denominator are polynomials that give $\frac{0}{0}$, factor both, find the common binomial, and cancel. This is Unit 1 bread and butter and the skill that underpins everything else.

Here is the thing the textbook does not make obvious: all three methods produce the same result. You cancel the zero-causing factor, evaluate the limit by direct substitution on the simplified expression, and move on. The final answer is the same regardless of which algebraic path you took. The technique is just the vehicle for getting to the cancellation.

One more thing worth naming here. The simplified expression you end up with after canceling is not the same as the original function. The original is undefined at $x = c$. The simplified version is not. That distinction matters for the AP exam and I will come back to it in the Mistakes section.

---

## The Decision Framework: Which Technique to Use When {#framework}

When direct substitution gives $\frac{0}{0}$, run through this decision sequence before you write a single algebra step.

**Step 1: Check for obvious polynomial factors.**
If the numerator and denominator are both polynomials, try factoring first. This handles quadratics, difference of squares, and sum/difference of cubes directly. If you can factor and cancel, you are done in under 60 seconds.

**Step 2: Check for a square root in the numerator or denominator.**
If you see a radical expression in the limit, reach for the conjugate. Multiply top and bottom by the conjugate of the radical expression. Expand the radical product using difference of squares (this is the key move). Factor and cancel.

**Step 3: Check for a fraction inside the expression.**
If you see $\frac{1}{x+h} - \frac{1}{x}$ in the numerator, or any compound fraction structure, reach for the LCD technique. Find the least common denominator of all the inner fractions, multiply the entire expression by it, simplify, then cancel.

**Step 4: Before you write your first algebra step, write $\lim_{x \to c}$ in front of every line.**
This is not optional. I will explain exactly why in the Mistakes section. For now: write it, every line, until you do the final substitution.

**Step 5: After you cancel the common factor, state the restriction.**
The simplified expression is valid for $x \neq c$. The original function is undefined at $x = c$. The limit exists and equals the simplified expression evaluated at $c$, but the function still has a hole there. Write the restriction.

One thing I have found in practice: step 3 trips students up more than any other step. A complex fraction looks messy and students feel like they need to "simplify" it piece by piece. You do not. You multiply the entire thing by the LCD all at once, let everything cancel, and the algebra becomes clean immediately. Trust the process.

[DESMOS EMBED:
Functions: y=(sqrt(x)-2)/(x-4) (navy #1a3a6b)
Point: (4, 0.25) labeled "Limit = 0.25, but f(4) undefined" (gold #e8a020)
Window: x[0, 9] y[0, 0.6]
Lock viewport: yes
Notes: Shows removable discontinuity (hole) at x=4; the limit exists even though the function is undefined at that point]

---

## Worked Example 1: Rationalizing the Numerator (Foundational) {#example-1}

Here is a rationalizing limit that is exactly the style you will see in AP Calculus Unit 1.

**Problem:** Find $\displaystyle\lim_{x \to 4} \frac{\sqrt{x} - 2}{x - 4}$

Direct substitution gives $\frac{\sqrt{4} - 2}{4 - 4} = \frac{0}{0}$. Indeterminate form. Proceed to rationalizing.

**Step 1: Multiply top and bottom by the conjugate of the numerator.**

The conjugate of $\sqrt{x} - 2$ is $\sqrt{x} + 2$.

$$\lim_{x \to 4} \frac{\sqrt{x} - 2}{x - 4} \cdot \frac{\sqrt{x} + 2}{\sqrt{x} + 2}$$

**Step 2: Expand the numerator using difference of squares.**

$$\lim_{x \to 4} \frac{(\sqrt{x})^2 - (2)^2}{(x - 4)(\sqrt{x} + 2)} = \lim_{x \to 4} \frac{x - 4}{(x - 4)(\sqrt{x} + 2)}$$

**Step 3: Cancel the common factor.**

$(x - 4)$ appears in both numerator and denominator. Cancel it. Note: this cancellation is valid for $x \neq 4$.

$$\lim_{x \to 4} \frac{1}{\sqrt{x} + 2}$$

**Step 4: Apply the limit by direct substitution.**

$$\lim_{x \to 4} \frac{1}{\sqrt{x} + 2} = \frac{1}{\sqrt{4} + 2} = \frac{1}{4}$$

$$\boxed{\lim_{x \to 4} \frac{\sqrt{x} - 2}{x - 4} = \frac{1}{4}}$$

Notice that at each step above, the $\lim_{x \to 4}$ notation stayed in front of every expression until step 4. That is not decoration. That is the correct mathematical statement. The moment you drop it, you are no longer writing a limit. You are writing a value. And those are different claims.

**Here is exactly how the AP exam scores this type of problem:**
- Correctly identifies $\frac{0}{0}$ indeterminate form and moves to the appropriate algebraic technique
- Multiplies by the conjugate of the radical expression (conjugate must match what is in the numerator)
- Correctly expands using difference of squares to produce $(x - 4)$ in the numerator
- Cancels the $(x - 4)$ factor before applying the limit (not after)
- Applies the limit by direct substitution on the simplified expression
- States the final answer as a simplified fraction

---

## Get the Free "Before AP Calculus" Guide {#mid-cta}

Not sure if your algebra skills are solid enough for Unit 1 limit problems? I put together a free guide that walks you through exactly what needs to be locked in before the limit techniques in this post start clicking fast. Zero fluff. Download it free below.

[Get the Free Guide](https://www.aceapcalculus.com/before-apcalc)

*(Parents: this is a great starting point to see exactly where your student stands before limits become a real issue in their course.)*

---

## Worked Example 2: Complex Fractions, the MCQ Problem Type {#example-2}

This is the one that shows up in multiple choice and slows students down the most. The expression looks messy. Students see a fraction inside a fraction and immediately start doing piece-by-piece simplification, which takes 4 minutes and usually produces an error. The right move takes 90 seconds.

**Problem:** Find $\displaystyle\lim_{h \to 0} \frac{\dfrac{1}{x+h} - \dfrac{1}{x}}{h}$

Direct substitution gives $\frac{\frac{1}{x} - \frac{1}{x}}{0} = \frac{0}{0}$. Indeterminate form. Proceed to the LCD technique.

**Here is exactly what the AP exam is checking on this problem type.**

The exam is not testing whether you can simplify fractions mechanically. It is testing whether you recognize the complex fraction structure and apply the LCD technique correctly. Here are the exact checkpoints:
- Identify the LCD of the inner fractions and apply it to the entire expression (not just the numerator)
- Correctly cancel the resulting factors in the numerator
- Carry $\lim_{h \to 0}$ notation through every step until the substitution
- Recognize that the result of this limit is the derivative of $f(x) = \frac{1}{x}$ at a general point

**Step 1: Identify the LCD of the inner fractions.**

The inner fractions are $\frac{1}{x+h}$ and $\frac{1}{x}$. Their LCD is $x(x+h)$.

**Step 2: Multiply the entire expression (top and bottom) by the LCD.**

$$\lim_{h \to 0} \frac{\dfrac{1}{x+h} - \dfrac{1}{x}}{h} \cdot \frac{x(x+h)}{x(x+h)}$$

**Step 3: Distribute and cancel in the numerator.**

$$\lim_{h \to 0} \frac{\dfrac{x(x+h)}{x+h} - \dfrac{x(x+h)}{x}}{h \cdot x(x+h)}$$

$$\lim_{h \to 0} \frac{x - (x+h)}{h \cdot x(x+h)}$$

**Step 4: Simplify the numerator.**

$$\lim_{h \to 0} \frac{x - x - h}{h \cdot x(x+h)} = \lim_{h \to 0} \frac{-h}{h \cdot x(x+h)}$$

**Step 5: Cancel the common factor of $h$.**

$$\lim_{h \to 0} \frac{-1}{x(x+h)}$$

**Step 6: Apply the limit by direct substitution ($h \to 0$).**

$$\frac{-1}{x(x + 0)} = \frac{-1}{x^2}$$

$$\boxed{\lim_{h \to 0} \frac{\dfrac{1}{x+h} - \dfrac{1}{x}}{h} = -\frac{1}{x^2}}$$

Here is a bonus connection the AP exam loves. Recognize this expression? It is the limit definition of the derivative (Definition 1, general form) applied to $f(x) = \frac{1}{x}$. So this limit is just $f'(x)$ for that function. Once you see complex fraction limits this way, a lot of them become instant recognitions instead of 4-minute algebra sessions. I covered the three limit definitions of the derivative in [What Is a Derivative in AP Calculus?]. If that connection is shaky, go read that one before exam day.

---

## The 3 Mistakes That Cost My Students Points {#mistakes}

**Mistake 1: Canceling terms instead of factors.**

Why it happens: Students see $\frac{(x-4) + 2}{x - 4}$ and want to cancel the $(x - 4)$ from the first term of the numerator, leaving $\frac{2}{1}$. That is canceling terms. You can only cancel a factor that multiplies the entire numerator. Lamar University calls this the single most common error in algebraic limit problems, and I see it in my sessions constantly. It feels right in the moment because you are trained to simplify and this looks like simplifying.

How to fix it: Before you cancel anything, factor the numerator completely. If the factor you want to cancel does not multiply the entire numerator as a single product, you cannot cancel it. Write it as a product first, always.

Consequence: You get a wrong numerical answer, pick a distractor on multiple choice, and lose the point. And because the arithmetic looks plausible, you usually do not go back to check it.

**Mistake 2: Writing the simplified form without the $x \neq c$ restriction.**

Why it happens: After canceling $(x - 4)$, students write $\frac{1}{\sqrt{x} + 2}$ and treat it as the original function. It is not. The original function is undefined at $x = 4$. The simplified version is defined there. The AP exam knows the difference and so should you.

How to fix it: After canceling the common factor, note the restriction. "For $x \neq 4$, the expression simplifies to $\frac{1}{\sqrt{x} + 2}$." Then evaluate the limit. The limit exists because the function approaches $\frac{1}{4}$ from both sides. But the function still has a hole at $x = 4$. Those are two separate facts and the exam tests both.

Consequence: On a free response that asks you to justify continuity or describe the behavior at the point, missing the restriction costs you the justification point. On multiple choice, it leads you to misidentify a hole as a point on the function, which produces the wrong answer on graph-reading questions.

**Mistake 3: Dropping $\lim$ notation before the limit is evaluated.**

Why it happens: Students write three lines of algebra, the notation gets tedious, and they drop the $\lim$ from line 4 onward. This is a notation error that the AP exam treats as a conceptual error. Without the $\lim$ symbol, the expression is a value, not a limit. Writing $\frac{-1}{x(x+h)}$ without $\lim_{h \to 0}$ in front of it is writing the wrong mathematical claim.

How to fix it: Write $\lim$ in front of every line until the step where you substitute $h = 0$ (or $x = c$). That is the step where the $\lim$ goes away, because you have evaluated it. Not before.

Consequence: On free response, this costs a notation point. On multiple choice, it trains you to confuse intermediate expressions with final answers, which leads to picking the wrong choice when the exam presents partial simplifications as distractors.

---

## Practice Problems {#practice}

Try these on your own before checking the answers. If you get stuck on any of them, go back to the decision framework and identify which technique applies before touching any algebra.

**Problem 1: Rationalizing**

$$\lim_{x \to 9} \frac{\sqrt{x} - 3}{x - 9}$$

**Problem 2: Complex Fraction**

$$\lim_{h \to 0} \frac{\dfrac{1}{(x+h)^2} - \dfrac{1}{x^2}}{h}$$

**Problem 3: Factoring First, then Recognizing the Connection**

$$\lim_{x \to 2} \frac{x^2 - 4}{x - 2}$$

After you solve it, identify what $f(x)$ and $a$ would be if this were a limit definition of the derivative. Use Definition 2 (alternate form: $\lim_{x \to a} \frac{f(x) - f(a)}{x - a}$).

---

**Answers:**

**Problem 1:**
Conjugate of $\sqrt{x} - 3$ is $\sqrt{x} + 3$.

$$\lim_{x \to 9} \frac{(\sqrt{x} - 3)(\sqrt{x} + 3)}{(x-9)(\sqrt{x} + 3)} = \lim_{x \to 9} \frac{x - 9}{(x-9)(\sqrt{x} + 3)} = \lim_{x \to 9} \frac{1}{\sqrt{x} + 3} = \frac{1}{\sqrt{9} + 3} = \frac{1}{6}$$

$$\boxed{\frac{1}{6}}$$

**Problem 2:**
LCD of inner fractions is $x^2(x+h)^2$.

$$\lim_{h \to 0} \frac{x^2 - (x+h)^2}{h \cdot x^2(x+h)^2} = \lim_{h \to 0} \frac{x^2 - x^2 - 2xh - h^2}{h \cdot x^2(x+h)^2} = \lim_{h \to 0} \frac{-2xh - h^2}{h \cdot x^2(x+h)^2}$$

$$= \lim_{h \to 0} \frac{h(-2x - h)}{h \cdot x^2(x+h)^2} = \lim_{h \to 0} \frac{-2x - h}{x^2(x+h)^2} = \frac{-2x}{x^4} = -\frac{2}{x^3}$$

$$\boxed{-\frac{2}{x^3}}$$

This is $f'(x)$ for $f(x) = \frac{1}{x^2}$. If you recognized that before evaluating, you are ahead.

**Problem 3:**
$x^2 - 4 = (x-2)(x+2)$. Cancel $(x-2)$ for $x \neq 2$:

$$\lim_{x \to 2} (x + 2) = 4$$

$$\boxed{4}$$

Derivative connection: $f(x) = x^2$, $a = 2$. Definition 2: $\lim_{x \to 2} \frac{x^2 - 4}{x - 2} = f'(2) = 2(2) = 4$. Confirmed.

---

## FAQ {#faq}

**Q: When should I use rationalizing versus factoring?**

A: Look at the numerator first. If there is a square root in the numerator that gives $\frac{0}{0}$, the conjugate is almost always the move. If both numerator and denominator are polynomials giving $\frac{0}{0}$, try factoring first. The visual tell is the radical: no radical, go to factoring. Radical present, go to the conjugate. I have never seen a case where both apply to the same expression, so this is a clean fork, not a judgment call. [Lamar University's calculus error catalog](https://tutorial.math.lamar.edu/extras/commonerrors/calculuserrors.aspx) documents canceling terms instead of factors as the single most common mistake in limit algebra. Worth a read if you want the full breakdown of what trips students up.

**Q: What does "removable discontinuity" mean and why does the AP exam care about it?**

A: A removable discontinuity is a hole in the graph. It happens when the numerator and denominator share a factor that you can cancel, meaning the function is undefined at exactly one point but has a well-defined limit there. The AP exam cares because it tests two separate ideas: whether the limit exists (it does; the hole is irrelevant to the limit) and whether the function is continuous at that point (it is not, because $f(c)$ is undefined). Students who conflate "the limit exists" with "the function is defined there" miss the continuity questions. Those are not the same claim. I walk through continuity in detail in the Limits Intro post if you need to revisit that.

**Q: How do I know when direct substitution is enough versus when I need a technique?**

A: Always try direct substitution first. Plug in $x = c$. If you get a real number, you are done. If you get $\frac{0}{0}$, that is your signal to pick a technique. If you get $\frac{k}{0}$ where $k \neq 0$, the limit does not exist (or is $\pm\infty$). The only indeterminate form you will see on the AP exam in Unit 1 that requires algebraic technique is $\frac{0}{0}$. Everything else either resolves by substitution or does not exist.

**Q: Does the $x \neq c$ restriction actually get tested on the AP exam?**

A: Yes. Not always explicitly, but the conceptual understanding behind it does. If the exam asks you to classify a discontinuity, determine whether a function is continuous at a point, or explain why a limit exists even though the function is undefined there, you are being tested on exactly this. The restriction $x \neq c$ is what separates the limit behavior from the function value. Getting that distinction cold is worth at least 1 to 2 multiple choice points per exam in my experience. The [College Board AP Calculus AB Course Description](https://apcentral.collegeboard.org/courses/ap-calculus-ab/course) lists limits and continuity as the foundation for every subsequent unit. That is exactly why this distinction matters more than most students think.

---

## Save This For Exam Day {#quick-reference}

**Decision tree for $\frac{0}{0}$ limits:**

- Numerator and denominator both polynomials? Factor and cancel.
- Radical in the numerator or denominator? Multiply by the conjugate. Expand using difference of squares. Cancel.
- Compound fraction (fraction inside the limit expression)? Find LCD of inner fractions. Multiply top and bottom by LCD. Cancel.

**Rules that never change:**
- Write $\lim_{x \to c}$ on every line until the final substitution step.
- After canceling a factor, note the restriction: "for $x \neq c$."
- After the cancel, the limit is evaluated by direct substitution on the simplified expression.
- Canceling a factor requires it to multiply the entire numerator. Terms do not cancel. Factors cancel.

**The 3 errors to eliminate:**
- Canceling terms instead of factors
- Omitting the $x \neq c$ restriction after canceling
- Dropping $\lim$ notation before evaluating

**Quick conjugate reminder:**
Conjugate of $\sqrt{u} - v$ is $\sqrt{u} + v$. The product is $u - v^2$ (difference of squares). No radicals remain in the numerator after this step.

---

## Related Posts {#related}

If you found this helpful, these posts connect directly to what you just read:

- [What Are Limits in AP Calculus? How Limits Work and Why They Matter](post-02-limits-intro)
- [What Is a Derivative in AP Calculus? The Concept, Not Just the Formula](post-01-what-is-a-derivative)

*(Limit techniques in this post feed directly into the limit definition of the derivative in the derivative post. If you read all three in order, Unit 1 and Unit 2 will both feel significantly more connected.)*

---

## Build This Into Your Prep Before It Shows Up On a Test {#end-cta}

These algebraic limit techniques are not optional. They show up in multiple choice every year, and they also show up as the first step in FRQ problems that look like they are about something else entirely. If the algebra here is shaky, it will cost you later in Unit 1 and again in Unit 2 when the derivative definitions require the same moves.

I put together a free guide at aceapcalculus.com that covers exactly what algebra and limit foundations need to be locked in before these techniques start clicking automatically. It is free. It takes about 10 minutes. And it will show you exactly where the gaps are before they show up on a test.

[Download the Free Guide](https://www.aceapcalculus.com/before-apcalc)

*(Parents: if your student is in the middle of Unit 1 and hitting a wall on algebraic limits, this guide is the fastest way to identify what is missing.)*

---

**[SEASONAL CTA: Active through September 15, 2026]**

If you want your student to get through algebraic limit techniques before the school year even starts, my summer program runs in July and August. Structured. Small groups. Real AP exam practice from day one. Spots fill fast.

[See Summer Program Details](https://www.aceapcalculus.com/summer-diagnostic-page)

---

## SEO Metadata

SEO Title: Hard Limits AP Calc: Rationalizing & Complex Fractions
Meta Description: Learn which technique to use for hard limits in AP Calculus: rationalizing the numerator, complex fractions, and the 3 mistakes that cost the most points.
Slug: hard-limits-ap-calculus-rationalizing-complex-fractions
Primary Keyword: hard limits ap calculus
Focus Keyphrase: hard limits ap calculus
Secondary Keywords: rationalizing limits, complex fractions calculus, limit techniques ap calc, conjugate method limits, algebraic limit problems, solving difficult limits, limit problem-solving strategies, limits with fractions
KEYWORD_CLUSTER: rationalizing limits, complex fractions calculus, limit techniques ap calc, conjugate method limits, algebraic limit problems, solving difficult limits, limits with fractions
SERP_TARGET_WORD_COUNT: ~3,800 words (WebFetch unavailable; SERP analysis skipped; mid-range target applied)
COVERAGE_GAPS_ADDRESSED: removable discontinuity classification, limit-derivative connection via complex fractions, decision flowchart for technique selection, x≠c restriction and continuity implications
Alt Text Suggestions:
- "Desmos graph showing removable discontinuity hole at x=4 for the function (sqrt(x)-2)/(x-4) with limit approaching 0.25"
- "Decision flowchart for choosing algebraic limit technique: factoring versus rationalizing versus complex fraction LCD method"

---

## ZACH'S FLOW CHECKLIST

[ ] Math accuracy check:
1. Example 1: $\lim_{x \to 4} \frac{\sqrt{x}-2}{x-4} = \frac{1}{4}$ [confirmed: conjugate expands to $x-4$; after cancel, $\frac{1}{\sqrt{4}+2} = \frac{1}{4}$]
2. Example 2: complex fraction limit $= -\frac{1}{x^2}$ [confirmed: LCD multiply, numerator $x-(x+h) = -h$; cancel $h$; sub $h=0$]
3. Practice 1: $\frac{1}{6}$ [confirmed: $\sqrt{9}+3 = 6$]
4. Practice 2: $-\frac{2}{x^3}$ [confirmed: LCD $x^2(x+h)^2$; numerator $x^2-(x+h)^2 = -2xh-h^2$; cancel $h$; sub $h=0$; $\frac{-2x}{x^4} = \frac{-2}{x^3}$]
5. Practice 3: $\lim_{x \to 2}(x+2) = 4$ [confirmed]; $f'(2) = 2(2) = 4$ for $f(x)=x^2$ [confirmed]

[ ] Personal moment: UNIQUE_ANGLE from Lamar/Fiveable/Vanderbilt research woven into the intro (paragraph 4) and Mistakes section. Zach: add a specific student story if you have one. Placeholder comment below in that section.

<!-- NEEDS PERSONAL MOMENT: If you have a specific student who froze on a complex fraction MCQ question and you helped them see the LCD move, add 1-2 sentences in the intro or Mistakes section. This is the place for it. -->

[ ] Voice check: Read these sentences aloud and adjust if they do not sound like you:
- "These algebraic limit techniques are, at their core, all doing the same thing."
- "Trust the process." (Step 3 of the framework. Adjust if this reads too coach-y for your voice.)
- The decision framework section reads fairly neutral/process-oriented. Confirm this weight level (LIGHT) is correct for how you teach this.

[ ] Desmos graph: Removable discontinuity at $x=4$ for $f(x)=\frac{\sqrt{x}-2}{x-4}$. Window $x[0,9]$, $y[0, 0.6]$. Hole (open circle) at $(4, 0.25)$. Note: Desmos will show the curve but not draw the open circle automatically. Label the point with a note or use a point expression to highlight it. About 2 minutes to set up.

[ ] CTA confirmation: Mid-post Option A (free guide, aceapcalculus.com/before-apcalc). End CTA Option A (same). Seasonal Option D/E active (date is April 28, 2026; within Jan 1 to Sep 15 window).

[ ] Estimated read time: ~3,900 words / 200 wpm = ~19–20 min. Adjust the header reading time pill to "19 min read" if you want precision, or leave "14 min read" as a faster aspirational estimate.

---

## SKILL DELTA

SKILL DELTA:
- New lesson learned: The UNIQUE_ANGLE (Lamar/Fiveable/Vanderbilt error research) integrates best in the intro as a credibility move AND in the specific Mistake it describes. Thread it through both rather than just the intro.
- Forbidden pattern eliminated: Em-dashes removed from all headings and prose. Complex fraction denominator notation uses $\dfrac{}{}$ display form inside aligned blocks for readability.
- Analogy or voice move that worked: "Your job is to cancel the factor that is causing the zero in the denominator" as the unifying frame for all three techniques. Reduces cognitive load and earns the technique variety rather than treating each as a separate method.
- MCQ/FRQ framing note: Post correctly framed as MCQ. Example 2 rubric opens with "Here is exactly what the AP exam is checking on this problem type." The derivative-connection bonus at the end of Example 2 was a natural fit because complex fraction limits are precisely the definition-of-derivative form. No reframing needed.
