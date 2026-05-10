# Continuity vs. Differentiability in AP Calculus 2026: The Unit 2 Distinction That Costs Easy MCQ Points

**13 minute read | Used by 500+ EngiNearU students to go from a 3 to a 5**

---

## Jump To What You Need

- [The Mistake I See Every Spring](#mistake)
- [What Continuity vs. Differentiability Actually Means](#what-it-means)
- [The Decision Framework - Is This Function Differentiable Here?](#framework)
- [Worked Example 1 - Corner at a Piecewise Function (Foundational)](#example-1)
- [Grab the Free Guide](#mid-cta)
- [Worked Example 2 - The MCQ Type That Shows Up Every Year](#example-2)
- [The 3 Mistakes That Cost My Students Points](#mistakes)
- [Practice Problems](#practice)
- [FAQ](#faq)
- [Save This For Exam Day](#quick-reference)
- [Related Posts](#related)

---

## The Mistake I See Every Spring {#mistake}

Here is the mistake I see come up in my sessions more than any other on this topic. A student looks at $f(x) = |x|$ and tells me the function is not differentiable. That is wrong. $f(x) = |x|$ is differentiable everywhere except at $x = 0$. The non-differentiability lives at one specific point, not along the whole function. The corner at zero does not affect the arms of the V-shape at all. They are perfectly smooth. The derivative only breaks at the exact spot where the slope flips from $-1$ to $+1$. Students hear "corners are not differentiable" and apply that label to the entire function. The AP exam always asks about a specific point. Non-differentiability is a point-level property, not a function-level one. That distinction is what costs points.

Every spring I watch students who can compute a derivative in their sleep miss 3 to 4 multiple choice points because they cannot tell me whether a corner is differentiable. And the AP exam puts that exact question on every form. The continuity vs differentiability AP exam question is not a hard one. It is a recognition question. And it is one of the most missed easy points in Unit 2.

Here is what the question looks like. The exam shows you a graph or a piecewise function. There is a corner, or a cusp, or a vertical tangent. They ask: is the function continuous at $x = a$? Is it differentiable at $x = a$? Pick the correct combination.

Most of my students freeze. Not because the math is hard. Because nobody made them say the rule out loud. The rule is short. Differentiability implies continuity. Continuity does not imply differentiability. That is the entire foundation of this question type.

In my opinion, this is the second most forgotten distinction in Unit 2, right behind the 3 limit definitions of the derivative. And the cost is exactly the same: 3 to 4 multiple choice points per exam, every spring, gone. If your student can take a derivative but cannot tell you whether $f(x) = |x|$ is differentiable at zero, they are leaving points on the table that should be automatic.

Here is the part that frustrates me most as a coach. The students who miss this question are not weak students. They are usually the ones who can crank through chain rule, quotient rule, and implicit differentiation without breaking a sweat. They are the kids who get the hard stuff right. And then they walk into a Unit 2 MCQ on differentiability at a corner and pick the wrong letter because nobody made them slow down on the recognition step. The mechanics are easy. The recognition is what they skipped.

I have watched students lose the same 4 points on the May exam 3 years in a row on the same question type. Different graphs, different functions, same trap. The exam writers know this is a weak spot and they keep testing it. If you are going to give back any easy points on the AP exam, do not let it be on a question that comes down to one rule and 4 categories.

This post fixes that. By the end you will know the 4 ways differentiability can fail at a point, you will recognize each one in under 30 seconds on a graph, and you will stop missing the easy MCQ points that come with this topic. I am also going to show you exactly how the AP exam phrases this question, because the wording is consistent year over year, and once you see the pattern you stop second-guessing.

---

## What Continuity vs. Differentiability Actually Means {#what-it-means}

Textbooks open this section with a definition. I think that is exactly the wrong way to teach it. Here is what I do with my students instead.

Picture a road. Continuity is whether you can drive the road without lifting off into the air. No holes, no jumps, no missing pieces. The road is one connected stretch of pavement. That is all continuity is.

Differentiability is a stricter requirement. It asks: can you drive the road smoothly? No corners that snap your steering wheel. No cliffs that send you straight up. The road has to be connected and smooth. Pavement plus no sharp turns.

That is why differentiability implies continuity. If the road is smooth, it is automatically connected. You cannot have a smooth road with a hole in it. But the reverse is not true. A road can be perfectly connected and still have a sharp corner that throws your car. Continuous, not differentiable.

You would think a continuous function would always be differentiable. It is not. That is the entire trick the AP exam runs on this topic.

Now the formal definitions, because you do need them.

A function $f(x)$ is **continuous at $x = a$** when three things hold: $f(a)$ exists, $\lim_{x \to a} f(x)$ exists, and those two values are equal. That is the 3-part continuity test from your textbook. Real numbers, no holes, limit matches the function value.

A function $f(x)$ is **differentiable at $x = a$** when the limit definition of the derivative exists at that point:

$$f'(a) = \lim_{h \to 0} \frac{f(a + h) - f(a)}{h}$$

Existence here means the limit returns one finite real number. Not infinity. Not undefined. Not "depends which side you came from." One number.

The relationship is directional and tested directly on the AP exam every year. Differentiable implies continuous. Continuous does NOT imply differentiable. Memorize that arrow direction. The exam writes MCQ traps based on students who reverse it.

One more thing on the formal definition. The phrase "the derivative exists" is not casual. It has a specific mathematical meaning that comes straight from the limit definition. The two-sided limit of $\frac{f(a+h) - f(a)}{h}$ as $h$ approaches zero must exist as a single finite real number. Same number from the left, same number from the right, no infinity, no oscillation. If you took the limit definition seriously in Unit 1, this section is just an application of what you already know. The continuity rules ap calc students need are the same 3-part test from limits, but applied to the derivative. The differentiability ap calculus rules are stricter because they ask the limit of a quotient to exist, not just the limit of the function.

Here is the move I want my students to internalize. Before you compute anything, ask which side of the implication you are on. If the question gives you a function and asks "is it differentiable here," you are checking the stronger condition. If the question gives you a function and asks "is it continuous here," you are checking the weaker condition. The stronger condition implies the weaker. The weaker does not imply the stronger. Reading the question this way takes half a second and it stops the most common mistake before it starts.

---

## The Decision Framework - Is This Function Differentiable Here? {#framework}

When the AP exam asks you whether a function is differentiable at $x = a$, you are running a 4-question check. Run them in this order. Do not skip.

**Step 1 - Is $f(x)$ continuous at $x = a$?**

Run the 3-part continuity test. Does $f(a)$ exist? Does the limit exist? Do they match? If any of those fails, the function is not continuous, which means it cannot be differentiable. Stop here. Pick the "neither continuous nor differentiable" answer.

**Step 2 - Is there a corner at $x = a$?**

A corner shows up where the left-hand and right-hand slopes are different finite numbers. Think $f(x) = |x|$ at zero. The slope coming in from the left is $-1$. The slope going out to the right is $+1$. Both finite. Both real. They do not match. That is a corner. The function is continuous there but not differentiable.

**Step 3 - Is there a cusp at $x = a$?**

A cusp is the dramatic version of a corner. The slope on one side heads to $+\infty$ and the slope on the other side heads to $-\infty$. Think $f(x) = x^{2/3}$ at zero. The function passes through, but the slopes do not agree because they are both unbounded in opposite directions. Continuous, not differentiable.

**Step 4 - Is there a vertical tangent at $x = a$?**

A vertical tangent shows up where both one-sided slopes head to the same infinity. Think $f(x) = \sqrt[3]{x}$ at zero. The function is continuous and the tangent line exists, but it is vertical. A vertical line has undefined slope. The derivative does not return a real number, so the function is not differentiable there.

If all 4 checks pass, the function is differentiable at that point. The derivative exists and equals one specific real number that matches both the average rate of change and the instantaneous rate of change as $h$ shrinks to zero. The AROC and IROC line up. That is what a smooth point looks like.

Here is the recap. Differentiability fails when continuity fails, or when there is a corner, a cusp, or a vertical tangent. Four failure modes. Memorize all 4 and you will never miss this MCQ type again.

Coaching note on the order. I tell my students to run continuity first because it is the cheapest check. The 3-part test takes 20 seconds and it kills the question dead if it fails. Most of my students want to jump straight to derivatives because that is the skill they practiced. That is exactly backwards. The cheap check goes first. The expensive check goes second. If you spend 2 minutes computing one-sided derivatives on a function that fails continuity, you wasted 2 minutes you needed elsewhere on the exam.

The corner cusp vertical tangent ap calculus distinction is the second-most-tested piece of this topic. The exam writers love to put a cusp on the answer choices next to a vertical tangent because they look almost identical on a graph. The only way to tell them apart with certainty is the sign of the one-sided slopes. Same sign on both sides means same infinity, which means vertical tangent. Opposite signs means opposite infinities, which means cusp. If the algebra is what tells you, then the algebra is what you trust on the exam. Not your eyes.

[DESMOS EMBED:
Functions: y=|x| (navy #1a3a6b), y=x^(2/3) (gold #e8a020), y=x^(1/3) (red #c0392b)
Point: (0,0) labeled "All three are continuous, none are differentiable" (gold)
Window: x[-3,3] y[-2,3]
Lock viewport: yes
Notes: shows corner (|x|), cusp (x^(2/3)), vertical tangent (x^(1/3)) all stacked at origin]

---

## Worked Example 1 - Corner at a Piecewise Function (Foundational) {#example-1}

**Problem:** Let $f(x) = \begin{cases} x^2 & \text{if } x \leq 1 \\ 2x - 1 & \text{if } x > 1 \end{cases}$. Determine whether $f(x)$ is continuous at $x = 1$ and whether $f(x)$ is differentiable at $x = 1$.

**Step 1 - Check continuity at $x = 1$**

Run the 3-part test.

$f(1)$ exists from the top piece: $f(1) = 1^2 = 1$.

Left-hand limit: $\lim_{x \to 1^-} x^2 = 1$.

Right-hand limit: $\lim_{x \to 1^+} (2x - 1) = 2(1) - 1 = 1$.

All three values agree. $f(x)$ is continuous at $x = 1$.

**Step 2 - Check the left-hand derivative at $x = 1$**

$$\lim_{x \to 1^-} \frac{d}{dx}[x^2] = 2x \bigg|_{x=1} = 2$$

The slope coming in from the left is $2$.

**Step 3 - Check the right-hand derivative at $x = 1$**

$$\lim_{x \to 1^+} \frac{d}{dx}[2x - 1] = 2$$

The slope going out to the right is $2$.

**Step 4 - Compare the one-sided derivatives**

Both one-sided slopes equal $2$. They match. The function is differentiable at $x = 1$ and $f'(1) = 2$.

$$\boxed{f(x) \text{ is continuous and differentiable at } x = 1}$$

**Here is exactly how the AP exam scores this type of problem:**
- State the 3-part continuity test results explicitly. Skipping the verification costs the continuity point.
- Compute the left-hand derivative using the correct piece of the function.
- Compute the right-hand derivative using the correct piece of the function.
- Compare the two slopes and state the conclusion in a complete sentence.
- If the slopes match, give the value of $f'(1)$. If they do not, state the function is continuous but not differentiable.

This problem worked out clean. The slopes matched. The next example shows the version where they do not match, which is what the AP exam loves to test.

A note on what could have gone wrong here. If the right-hand piece had been $3x - 2$ instead of $2x - 1$, the function would still be continuous at $x = 1$ because $f(1) = 1$ from both sides. But the right-hand derivative would be $3$, not $2$. The slopes would not match. The function would be continuous but not differentiable. Same continuity result, completely different differentiability result. That is the whole game with piecewise functions on the AP exam. The continuity check and the derivative check are independent. Passing one does not guarantee passing the other. Run both.

I tell my students this is the moment you write the implication arrow on your scratch paper if you have not already. Differentiable implies continuous. The opposite is what the exam tests. If your function passes continuity and fails the derivative match, the answer is "continuous but not differentiable." If it fails continuity, you do not even need the derivative check. The arrow tells you which direction to read the result.

---

## Grab the Free "Before AP Calculus" Guide {#mid-cta}

Not sure what your student needs locked in before Unit 2 actually clicks? I put together a free guide that walks through exactly what concepts need to be solid before differentiability starts making sense. Zero fluff. Download it free below.

[Get the Free Guide](https://www.aceapcalculus.com/before-apcalc)

*(Parents: this is a great starting point to see where your student stands before the school year gets moving.)*

---

## Worked Example 2 - The MCQ Type That Shows Up Every Year {#example-2}

This is the problem type I just warned you about. The AP exam hands you a piecewise function or a graph and asks you to identify which of the 4 failure modes is happening. If you know the framework, this takes under 60 seconds. If you do not, you will burn 3 minutes second-guessing and probably pick the wrong combination.

**Problem:** For each function below, classify the behavior at the given point as: (A) continuous and differentiable, (B) continuous but not differentiable, or (C) neither continuous nor differentiable. If the answer is (B), identify the failure mode (corner, cusp, or vertical tangent).

**Part (a):** $f(x) = |x - 3|$ at $x = 3$.

**Solution - Part (a):**

Continuity check: $f(3) = 0$, $\lim_{x \to 3} |x - 3| = 0$. Continuous.

Left-hand derivative: $\lim_{x \to 3^-} \frac{d}{dx}[-(x-3)] = -1$.

Right-hand derivative: $\lim_{x \to 3^+} \frac{d}{dx}[(x-3)] = +1$.

The slopes are different finite numbers. That is the signature of a corner.

$$\boxed{(B) \text{ continuous but not differentiable - corner}}$$

**Part (b):** $f(x) = x^{2/3}$ at $x = 0$.

**Solution - Part (b):**

Continuity check: $f(0) = 0$ and $\lim_{x \to 0} x^{2/3} = 0$. Continuous.

Derivative: $f'(x) = \frac{2}{3} x^{-1/3} = \frac{2}{3 \sqrt[3]{x}}$.

As $x \to 0^-$, the cube root of a negative number is negative, so $f'(x) \to -\infty$.
As $x \to 0^+$, the cube root of a positive number is positive, so $f'(x) \to +\infty$.

The slopes head to opposite infinities. That is the signature of a cusp.

$$\boxed{(B) \text{ continuous but not differentiable - cusp}}$$

**Part (c):** $f(x) = \sqrt[3]{x}$ at $x = 0$.

**Solution - Part (c):**

Continuity check: $f(0) = 0$ and $\lim_{x \to 0} \sqrt[3]{x} = 0$. Continuous.

Derivative: $f'(x) = \frac{1}{3} x^{-2/3} = \frac{1}{3 x^{2/3}}$.

As $x \to 0$ from either side, $x^{2/3}$ heads to $0^+$, so $f'(x) \to +\infty$ on both sides.

Both slopes head to the same infinity. That is the signature of a vertical tangent.

$$\boxed{(B) \text{ continuous but not differentiable - vertical tangent}}$$

**Part (d):** $f(x) = \begin{cases} x + 2 & \text{if } x < 0 \\ x^2 & \text{if } x \geq 0 \end{cases}$ at $x = 0$.

**Solution - Part (d):**

Left-hand limit: $\lim_{x \to 0^-} (x + 2) = 2$.
Right-hand limit: $\lim_{x \to 0^+} x^2 = 0$.

The two-sided limit does not exist because the one-sided limits disagree. The function is not continuous at $x = 0$. Continuity fails, so differentiability fails automatically.

$$\boxed{(C) \text{ neither continuous nor differentiable - jump discontinuity}}$$

**Here is exactly what the AP exam is checking on this problem type:**
- Run the 3-part continuity test before anything else. If continuity fails, differentiability fails automatically.
- For continuous functions, compute both one-sided derivatives. Compare the slopes.
- Match the slope behavior to the correct failure mode: different finite slopes equals corner, opposite infinities equals cusp, same infinity equals vertical tangent.
- State the answer in the format the question asks for. If the question wants A/B/C, give the letter. If it wants the failure mode, name it specifically.
- Do not assume "it looks smooth on the graph" means differentiable. The exam tests cusps that are easy to miss visually.

A coaching point on Part (b) and Part (c) above. Most students cannot tell $x^{2/3}$ from $\sqrt[3]{x}$ at a glance because both curves go vertical at zero. They both have fractional exponents. They both pass through the origin. The difference is in the second derivative behavior on each side, which shows up directly in the sign of $f'(x)$ as you approach zero. Cusp curves bend back on themselves. Vertical tangent curves just go straight up. Once you compute the derivative and read the sign, the algebra cuts through the visual ambiguity in 30 seconds.

A coaching point on Part (d). The students who miss this part usually compute the derivative of each piece, find that $f'(0)$ from the left is $1$ and $f'(0)$ from the right is $0$, and conclude "continuous but not differentiable" because the slopes do not match. That is wrong because the function is not continuous in the first place. The 3-part continuity test fails at $x = 0$ because the left-hand limit and right-hand limit disagree. If continuity fails, there is no point computing derivatives. The answer is (C), neither. If you skip the continuity check on a piecewise function with a jump, you will get this letter wrong every time. That is exactly the trap the exam sets.

---

## The 3 Mistakes That Cost My Students Points {#mistakes}

**Mistake 1: Reversing the implication arrow**

Why it happens: My students hear "differentiability and continuity are connected" and assume the connection runs both ways. It does not. Differentiability implies continuity. The reverse is false. I get why this slips. The phrase "connected" sounds bidirectional, and most students do not pause on the directionality of the theorem.

How to fix it: When you see this question on the exam, write the arrow on your scratch paper before you answer. Differentiable $\Rightarrow$ Continuous. Not the other way. That single arrow is worth 1 to 2 multiple choice points per exam.

A related scope error lives in this same category. Students learn that corners, cusps, and vertical tangents are not differentiable, and then overgeneralize. They look at $f(x) = |x|$ and write "this function is not differentiable." That is imprecise and costs FRQ justification points. The correct statement is "this function is not differentiable at $x = 0$." The function is differentiable at every other point. Non-differentiability is a point-level property. The exam always names a specific $x$-value. Match that precision in your answer or the grader has no choice but to mark you wrong.

**Mistake 2: Confusing a cusp with a vertical tangent**

Why it happens: Both look like the function is going vertical at the point. My students see $x^{2/3}$ and $\sqrt[3]{x}$ and think they are the same case. They are not. The difference is whether the slopes on the two sides head the same direction or opposite directions.

How to fix it: Compute the derivative and check the sign of the limit on each side. Same infinity on both sides equals vertical tangent. Opposite infinities equals cusp. If you cannot tell from the graph, the algebra is the tiebreaker. Missing this distinction is a 1-point hit on free response and a guaranteed wrong MCQ choice.

**Mistake 3: Skipping the continuity check before the derivative check**

Why it happens: My students jump straight to computing one-sided derivatives because that is the harder skill, so they assume it is the one being tested. They forget that if continuity fails, differentiability fails automatically and you never need the derivatives.

How to fix it: Always run the 3-part continuity test first. It takes 20 seconds. If it fails, you are done. You saved yourself 2 minutes of derivative computation and you got the question right. Skipping this step is how students get the wrong letter on a question they actually understood.

---

## Practice Problems {#practice}

Try these on your own before checking the answers. If you get stuck, go back to the framework section and run the 4-step check in order.

**Problem 1 - Single-Step Recognition**

Is $f(x) = |x + 5|$ differentiable at $x = -5$? If not, name the failure mode.

**Problem 2 - Multi-Step**

Let $f(x) = \begin{cases} 3x + 1 & \text{if } x \leq 2 \\ x^2 + 3 & \text{if } x > 2 \end{cases}$.

(a) Is $f(x)$ continuous at $x = 2$?
(b) If yes, is $f(x)$ differentiable at $x = 2$?
(c) State your conclusion in a complete sentence.

**Problem 3 - Conceptual (Write Out Your Reasoning)**

Given the function $f(x) = x^{4/3}$ at $x = 0$:

(a) Is $f(x)$ continuous at $x = 0$?
(b) Is $f(x)$ differentiable at $x = 0$? Justify by computing the relevant one-sided limits of $f'(x)$.
(c) Explain why this function does NOT have a cusp or vertical tangent at $x = 0$.

*What a full-credit justification for Part (c) looks like: "Although $f(x) = x^{4/3}$ involves a fractional exponent like the cusp and vertical tangent examples, the derivative $f'(x) = \frac{4}{3} x^{1/3}$ approaches $0$ as $x \to 0$ from either side. The one-sided slopes agree at a finite value of $0$, so the function is differentiable at $x = 0$ with $f'(0) = 0$. There is no cusp or vertical tangent because neither one-sided slope heads to infinity."*

**Answers:**

Problem 1: Not differentiable. Continuous but with a corner. Left slope $= -1$, right slope $= +1$.

Problem 2:
(a) Yes. $f(2) = 3(2) + 1 = 7$, $\lim_{x \to 2^-} (3x+1) = 7$, $\lim_{x \to 2^+} (x^2+3) = 7$. All three match.
(b) Left derivative at $x = 2$: $3$. Right derivative at $x = 2$: $2x \big|_{x=2} = 4$. The slopes do not match.
(c) $f(x)$ is continuous at $x = 2$ but not differentiable. The function has a corner at $x = 2$.

Problem 3:
(a) Yes. $f(0) = 0$ and $\lim_{x \to 0} x^{4/3} = 0$.
(b) $f'(x) = \frac{4}{3} x^{1/3}$. As $x \to 0$ from either side, $f'(x) \to 0$. Both one-sided slopes equal $0$, so $f(x)$ is differentiable at $x = 0$ with $f'(0) = 0$.
(c) See full-credit justification above.

---

## FAQ {#faq}

**Q: What is the relationship between continuity and differentiability AP exam questions test?**

A: Differentiability implies continuity. Continuity does not imply differentiability. That arrow runs one direction only. Every continuity vs differentiability AP exam question is built on a student getting that arrow wrong or missing one of the 4 failure modes (discontinuity, corner, cusp, vertical tangent). When you see the question, write the arrow on your scratch paper first. That one move is worth automatic MCQ points.

**Q: When is a function differentiable at a point?**

A: A function is differentiable at $x = a$ when 4 things are true. The function is continuous at $x = a$. There is no corner (the one-sided slopes match as finite numbers). There is no cusp (the one-sided slopes do not head to opposite infinities). There is no vertical tangent (the one-sided slopes do not head to the same infinity). If all 4 hold, $f'(a)$ exists as a single finite real number. If you can recite those 4 conditions out loud without notes, you are ready for this MCQ type. The [College Board AP Calculus course description](https://apcentral.collegeboard.org/courses/ap-calculus-ab/course) lists this connection explicitly in Unit 2.

**Q: Can a function be continuous but not differentiable?**

A: Yes. The classic example is $f(x) = |x|$ at $x = 0$. The function is continuous everywhere. The graph passes through the origin without lifting. But the slope coming in from the left is $-1$ and the slope going out to the right is $+1$. The two-sided derivative does not exist at zero. Continuous but not differentiable. This is exactly the case the AP exam tests every year, and missing it costs students 1 to 2 multiple choice points per exam. For more on the math, see the [Khan Academy lesson on differentiability at a point](https://www.khanacademy.org/math/ap-calculus-ab/ab-differentiation-1-new/ab-2-4/v/differentiability-at-a-point-graphical).

**Q: What is the difference between a corner, a cusp, and a vertical tangent?**

A: All three are continuous-but-not-differentiable cases, but they show up differently in the algebra. A corner has different finite slopes on each side, like $|x|$ at zero. A cusp has slopes heading to opposite infinities, like $x^{2/3}$ at zero. A vertical tangent has slopes heading to the same infinity on both sides, like $\sqrt[3]{x}$ at zero. The AP exam tests all 3 and the only way to tell them apart is to compute the derivative and check the limits. If you can identify which case you are looking at in under 30 seconds, you have this topic locked.

**Q: How does the AP exam phrase ap calc unit 2 continuity questions?**

A: The standard wording is "at $x = a$, the function $f$ is" followed by 4 or 5 multiple choice options that pair continuity and differentiability outcomes. Common options are "continuous and differentiable," "continuous but not differentiable," "differentiable but not continuous" (always wrong, the implication arrow rules it out), and "neither continuous nor differentiable." The exam writers love including the impossible option because students who do not know the implication arrow direction will sometimes pick it. If you see "differentiable but not continuous" on an MCQ answer list, cross it off immediately. It cannot happen by theorem. That is one option eliminated before you do any work, which is a 25 percent boost to your odds on a 4-option question.

---

## Save This For Exam Day {#quick-reference}

**The Implication Arrow (memorize the direction):**

Differentiable $\Rightarrow$ Continuous

Continuous $\not\Rightarrow$ Differentiable

**The 4 Ways Differentiability Fails at $x = a$:**

1. **Discontinuity** - $f(a)$ is undefined, or $\lim_{x \to a} f(x)$ does not exist, or they disagree.
2. **Corner** - One-sided slopes are different finite numbers. Example: $|x|$ at $0$.
3. **Cusp** - One-sided slopes head to opposite infinities. Example: $x^{2/3}$ at $0$.
4. **Vertical tangent** - One-sided slopes head to the same infinity. Example: $\sqrt[3]{x}$ at $0$.

**Always remember:**
- Run the 3-part continuity test first. If continuity fails, you are done.
- Compute both one-sided derivatives before concluding the function is differentiable.
- "Looks smooth" is not a proof. The algebra is.

**Never do this:**
- Reverse the implication arrow and assume continuity guarantees differentiability.

---

## Related Posts {#related}

If you found this helpful, these posts cover concepts that connect directly to continuity and differentiability:

- [What Is a Derivative in AP Calculus 2026? (The Concept, Not Just the Formula)](https://www.enginearu.com/ap-calculus-prep/what-is-a-derivative-ap-calculus/)
- [What Are Limits in AP Calculus? How to Solve Them Without a Calculator](https://www.aceapcalculus.com/blog/limits-intro)
- [Limits Part 2 - Techniques for Indeterminate Forms](https://www.aceapcalculus.com/blog/limits-part-2-techniques)

---

## Get the Free Guide - Then Come Back Ready {#end-cta}

Continuity and differentiability is a foundation topic. Every Unit 3, 4, and 5 problem assumes you can tell whether a function is differentiable before you do anything else with it. Lock this in now, because if this is shaky, everything after it gets harder than it needs to be.

I put together a free guide at EngiNearU that walks your student through exactly what needs to be solid before Unit 2 clicks. It is free. It takes about 10 minutes to read. And it will show you exactly where the gaps are before they show up on a test or quiz.

[Download the Free Guide](https://www.aceapcalculus.com/before-apcalc)

*(Parents: this is a great resource to send your student right now if they are in the middle of the course and feeling lost.)*

---

**[SEASONAL CTA - Active through September 15, 2026]**

If you want your student to walk into AP Calculus next year already ahead of the class, my summer program runs in July and August. Small groups. Real FRQ practice. Structured plan. Proven results. Spots fill fast.

[See Summer Program Details and Reserve a Spot](https://www.aceapcalculus.com/summer-diagnostic-page)

*(Parents: if your student struggled with Unit 2 this year, the summer program is built to fix exactly that gap before next school year.)*

---

## SEO Metadata

SEO Title: Continuity vs. Differentiability AP Exam (2026 Guide)
Meta Description: Master continuity vs differentiability AP exam questions. Learn the 4 failure modes (discontinuity, corner, cusp, vertical tangent) and worked MCQ examples.
Slug: continuity-vs-differentiability-ap-exam
Primary Keyword: continuity vs differentiability AP exam
Focus Keyphrase: continuity vs differentiability AP exam
Alt Text Suggestions:
- Graph of absolute value of x showing corner at origin in AP Calculus continuity vs differentiability
- Cusp graph of x to the two-thirds power showing one-sided slopes heading to opposite infinities
- Vertical tangent on cube root of x showing AP Calculus differentiability failure mode
KEYWORD_CLUSTER: differentiability ap calculus, continuous but not differentiable, when is a function differentiable, ap calc unit 2 continuity, corner cusp vertical tangent ap calculus, continuity rules ap calc, differentiability implies continuity
SERP_TARGET_WORD_COUNT: ~3,500 words (averaged across Wikipedia "Differentiable function" ~3,750 and Math Is Fun "Differentiable" ~850; floor of 3,000 applied)
COVERAGE_GAPS_ADDRESSED: explicit 4-failure-mode taxonomy (discontinuity, corner, cusp, vertical tangent), implication arrow theorem statement (differentiable implies continuous, not converse), one-sided derivative algebra demonstrated for each failure mode, worked MCQ recognition under 60 seconds framing.
Schema Type: Educational Article

---

## Zach's Flow Checklist

[ ] Math accuracy check:
1. Continuity 3-part test for $f(x) = x^2 / 2x-1$ piecewise at $x=1$ - confirmed (all three values equal 1)
2. Left/right derivatives at $x=1$ both equal 2 - confirmed
3. $|x-3|$ at $x=3$: left slope $-1$, right slope $+1$ - confirmed
4. $x^{2/3}$ derivative $= \frac{2}{3 \sqrt[3]{x}}$, opposite infinities - confirmed
5. $\sqrt[3]{x}$ derivative $= \frac{1}{3 x^{2/3}}$, same infinity - confirmed
6. Piecewise jump in Part (d): left limit $2$, right limit $0$, discontinuous - confirmed
7. Practice 2: left slope $3$, right slope $4$, corner - confirmed
8. Practice 3: $f'(x) = \frac{4}{3} x^{1/3}$ approaches $0$ from both sides, differentiable - confirmed

[ ] Personal moment: Unique angle injected in intro (point-vs-function scope error using |x| example) and in Mistake 1 extension (scope error on FRQ justifications). Zach to confirm voice before publishing.

[ ] Voice check: Read aloud - "Differentiability is a stricter requirement. It asks: can you drive the road smoothly? No corners that snap your steering wheel. No cliffs that send you straight up." Adjust if it does not sound like you.

[ ] Desmos graph: Three curves stacked at origin showing corner, cusp, vertical tangent. Window x[-3,3] y[-2,3]. Lock viewport. Point label at origin reading "All three are continuous, none are differentiable."

[ ] CTA confirmation: Mid-post Option A (free guide). End Option A (free guide). Seasonal Option D (summer program) active through Sept 15, 2026 - DATE 2026-04-29 falls in window.

[ ] Read time: 13 minutes. Word count target ~3,500.

Draft complete. Awaiting Zach's Flow review and unique angle insertion before publishing.

---

## SKILL DELTA

```
SKILL DELTA:
- New lesson learned: 4-failure-mode taxonomy (discontinuity, corner, cusp, vertical tangent) gives students a clean recognition checklist for the most-tested MCQ type in Unit 2. Naming the failure mode is what closes the points gap, not just identifying that the function "is not differentiable."
- Forbidden pattern eliminated: zero em-dashes, zero forbidden phrases, no section opens with a definition.
- Analogy or voice move that worked: "Picture a road. Continuity is whether you can drive it without lifting off into the air. Differentiability is whether you can drive it smoothly." Carry forward - the two-tier road analogy maps cleanly onto the directional implication arrow.
- MCQ/FRQ framing note: post is correctly framed as MCQ recognition. Worked Example 2 rubric opens with the MCQ phrasing per Section 4. Foundational Example 1 uses the FRQ scoring phrasing as required.
```
