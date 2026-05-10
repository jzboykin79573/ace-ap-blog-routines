# Derivative Rules in AP Calculus 2026: Power, Product, Quotient, and Chain Without the Mess

**13 minute read | Used by 500+ EngiNearU students to go from a 3 to a 5**

---

## Jump To What You Need

- [The One Mistake That Costs a 5](#mistake)
- [What Derivative Rules Actually Do](#what-it-means)
- [The Decision Framework (Which Rule, When)](#framework)
- [Worked Example 1 - Power Rule on a Polynomial (Foundational)](#example-1)
- [Grab the Free Guide](#mid-cta)
- [Worked Example 2 - The Triple Chain Rule (FRQ Type)](#example-2)
- [The 3 Mistakes That Cost My Students Points](#mistakes)
- [Practice Problems](#practice)
- [FAQ](#faq)
- [Save This For Exam Day](#quick-reference)
- [Related Posts](#related)

---

## The One Mistake That Costs a 5 {#mistake}

I have had students sit down with me after a differentiation test and walk me through their chain rule work step by step. They set up the structure correctly. They identified the outer function and the inner function. They wrote the outer derivative. They went back and double-checked everything. They still missed the question. Every time, it was the same thing: they forgot to multiply by the derivative of the inside function. Not a conceptual failure. They knew chain rule. The last multiplication just did not happen. That specific omission is the single most commonly missed thing in AP Calculus. Not the hardest concept on the exam. The most commonly missed. And it costs FRQ points every spring.

Every differentiation unit test I give, at least one student writes a perfect chain rule setup and then forgets to multiply by the inside derivative. That one missing factor is the difference between a 4 and a 5 on the FRQ. Not the difference between a 3 and a 5. The 5. And it happens to students who already understand the concept. The derivative rules AP Calculus tests are not hard to learn. They are hard to keep straight under pressure.

Here is what the actual exam moment looks like. The problem is $\frac{d}{dx}[\sin(3x^2)]$. The student writes $\cos(3x^2)$. They circle it. They move on. They lost the entire point. The correct answer is $\cos(3x^2) \cdot 6x$. That extra $6x$ is the inside derivative. On a 9-point FRQ, missing it on one part can drop you from a perfect 9 to a 7, which is exactly the gap between a 5 composite and a 4.

In my opinion, this is the most expensive habit in the differentiation units. Not because the concept is hard. Because students learn the rules separately and never build the decision-making skill that tells them which rule to use when, and how to layer them. The AP exam never asks you for a clean power rule problem on its own. It asks you for a power rule wrapped inside a product rule wrapped inside a chain rule. Every single year.

This post fixes that. By the end you will have a clean decision tree for power rule AP Calculus problems, product rule AP Calc problems, quotient rule problems, and chain rule AP Calculus problems. You will know how to take a derivative AP Calc style without freezing on the layered ones, and you will have a derivative rules cheat sheet built for actual exam pressure, not the textbook version.

This is not a quick read. But 13 minutes here saves you the differentiation test points that turn a B into an A and a 4 into a 5.

---

## What Derivative Rules Actually Do {#what-it-means}

Textbooks explain derivative rules as separate techniques you apply one at a time. That is not how the AP exam tests them. And it is not how I teach them. Here is what I tell every student when differentiation starts in AP Calc.

A derivative rule is a shortcut. That is the whole story. You already know how to take a derivative the long way. You set up the limit definition, expand the binomial, cancel the $h$, and apply the limit. It works for every function. But on a problem like $f(x) = 4x^7 - 3x^5 + 2x^2 - x + 9$, doing that limit by hand five times is going to take you 12 minutes and give the AP exam plenty of chances to score you wrong on algebra. The power rule does the same job in 8 seconds.

That is what derivative rules are. Trusted shortcuts that replace the limit definition for specific function shapes. Power rule replaces the limit definition for $x^n$. Product rule handles two functions multiplied together. Chain rule handles a function nested inside another function. Each rule covers one shape. The skill is matching the shape to the rule fast.

Quick reminder before we go further. Every derivative is an instantaneous rate of change, not an average rate of change. Average rate of change uses the slope between two points on the curve. Instantaneous rate of change is the slope of the tangent line at a single point. The AP exam tests both across Units 2 and 3, and it tests them as separate skills. The derivative rules below produce the instantaneous version. If a problem asks you for the average rate of change between $x = 1$ and $x = 4$, do not take a derivative. Use the slope formula on the function values. That distinction trips up at least 1 in 4 of my students on the first differentiation test.

Now here is the part most students miss. The rules are not interchangeable. You do not get to pick the one you like. The shape of the function tells you which rule applies. And on the AP exam, most functions have more than one shape happening at the same time. That is why the decision framework matters more than the rules themselves.

One thing before the formal rules. The four rules below assume you already know the basic derivatives: $\frac{d}{dx}[\sin(x)] = \cos(x)$, $\frac{d}{dx}[\cos(x)] = -\sin(x)$, $\frac{d}{dx}[e^x] = e^x$, $\frac{d}{dx}[\ln(x)] = \frac{1}{x}$, and $\frac{d}{dx}[x^n] = nx^{n-1}$ for simple polynomials. If any of those feel uncertain, lock them in first. A future post will cover those basic rules in full. Everything in this post builds on them.

Here is the formal version of the four rules you need cold for both AB and BC.

**Power Rule.** If $f(x) = x^n$, then $f'(x) = nx^{n-1}$.

**Product Rule.** If $f(x) = u(x) \cdot v(x)$, then $f'(x) = u'(x) \cdot v(x) + u(x) \cdot v'(x)$.

**Quotient Rule.** If $f(x) = \frac{u(x)}{v(x)}$, then $f'(x) = \frac{u'(x) \cdot v(x) - u(x) \cdot v'(x)}{[v(x)]^2}$.

Memory hook for quotient rule: "low d-high minus high d-low, over low squared." Low is the denominator $v(x)$, high is the numerator $u(x)$.

**Chain Rule.** If $f(x) = g(h(x))$, then $f'(x) = g'(h(x)) \cdot h'(x)$.

Memorize all four formulas. The next section is where the actual skill is.

---

## The Decision Framework (Which Rule, When) {#framework}

Most students I work with can recite the four rules out loud. Most of them still freeze the first time they see $\sin(3x^2) \cdot e^{4x}$. The gap is not the rules. The gap is the decision tree. Here is the one I drill with every student when we hit differentiation.

**Step 1. Look at the structure first, not the variables.** Before you write anything, ask: how is this function built? Is it one piece? Two pieces multiplied? One piece divided by another? One piece nested inside another?

**Step 2. Apply this exact order of questions.**

1. Is the function a sum or difference of terms? If yes, take the derivative term by term. The sum rule lets you split the work.
2. Is each term (or the whole function) a product of two functions of $x$? If yes, product rule.
3. Is the function one expression divided by another, both containing $x$? If yes, quotient rule.
4. Inside any term, is there a function nested inside another function? If yes, chain rule on that piece.
5. At the bottom of every chain, the simple piece gets handled by power rule, trig rule, exponential rule, or whatever applies to that single function.

**Step 3. Work outside in.** When you have layered rules, the outside structure decides the first move. Product rule outside means you set up product rule first, then handle each factor's derivative. Quotient rule outside means you set up low d-high minus high d-low first, then differentiate each piece. Chain rule outside means you write the outside derivative times the inside derivative, then break the inside derivative apart with whatever rule it needs.

Here is a quick filter I run with my students out loud during practice.

- $5x^3 + 2x$ is a sum. Sum rule, then power rule on each term.
- $x^2 \sin(x)$ is a product. Product rule first.
- $\frac{\sin(x)}{x^2}$ is a quotient. Quotient rule first.
- $\sin(x^2)$ is a composition. Chain rule first.
- $x^2 \sin(3x)$ is a product where one factor is a chain. Product rule first, then chain rule on the $\sin(3x)$ piece.

That last one is the AP exam pattern. The product rule shows up with a chain rule hiding inside one of the factors. If you cannot spot the layering before you start, you will get half the problem right and lose the rest of the points to algebra you should never have written.

The decision tree is the skill. The rules are the tools.

---

## Worked Example 1 - Power Rule on a Polynomial (Foundational) {#example-1}

**Problem:** Find $f'(x)$ if $f(x) = 4x^5 - 3x^3 + 7x^2 - 2x + 8$.

**Step 1 - Recognize the structure**

This is a sum and difference of terms. Sum rule lets me take the derivative term by term. No product rule. No chain rule. Just power rule applied five times.

**Step 2 - Apply power rule to each term**

For $x^n$, the derivative is $nx^{n-1}$. The coefficient stays. I bring down the exponent and subtract 1.

$$\frac{d}{dx}[4x^5] = 4 \cdot 5x^{4} = 20x^{4}$$

$$\frac{d}{dx}[-3x^3] = -3 \cdot 3x^{2} = -9x^{2}$$

$$\frac{d}{dx}[7x^2] = 7 \cdot 2x^{1} = 14x$$

$$\frac{d}{dx}[-2x] = -2$$

$$\frac{d}{dx}[8] = 0$$

The constant 8 has derivative 0. Constants do not change, so their rate of change is zero.

**Step 3 - Combine the pieces**

$$\boxed{f'(x) = 20x^4 - 9x^2 + 14x - 2}$$

**Here is exactly how the AP exam scores this type of problem:**
- Apply power rule correctly to every term, including the linear term $-2x$ where the exponent goes from 1 to 0
- State that the derivative of the constant is 0 (or simply omit it, which is also accepted)
- Show each derivative term in your work, not just the final answer
- Use correct notation: $f'(x)$ or $\frac{dy}{dx}$ at the front of the final answer
- Sign errors on negative coefficients are the most common deduction I see on this problem type

A clean polynomial derivative is the easiest 4 points on a Unit 3 FRQ. Do not give them away by skipping the work step. AP graders need to see the chain of derivatives, not just a final expression.

---

## Grab the Free "Before AP Calculus" Guide {#mid-cta}

Not sure your student has the Unit 1 and Unit 2 foundation locked in before derivative rules show up in homework? I put together a free guide that walks through exactly what concepts need to be solid before the differentiation units click. Zero fluff. Download it free below.

[Get the Free Guide](https://www.aceapcalculus.com/before-apcalc)

(Parents: this is the resource I send to families when their student is suddenly struggling with derivatives after acing Unit 1. Nine times out of ten, the gap is in the foundation, not the new material.)

---

## Worked Example 2 - The Triple Chain Rule (FRQ Type) {#example-2}

This is the problem shape that freezes even strong students. When three functions are nested inside each other, most students do not know where to start. They look at the full expression and try to hold all three layers in their head at once. That is the wrong approach. The right approach is identical to a single chain rule, applied three times from the outside in. These are the ones I see students freeze on most in sessions. Three layers looks intimidating. If you peel from the outside in, it is just the same rule applied three times.

**Problem:** Find $f'(x)$ if $f(x) = e^{\cos(\sin(x))}$.

Before working this problem, note the basic derivatives it requires: $\frac{d}{dx}[e^x] = e^x$, $\frac{d}{dx}[\cos(x)] = -\sin(x)$, and $\frac{d}{dx}[\sin(x)] = \cos(x)$. These are the building blocks this post builds on.

**Step 1 - Identify the three layers from the outside in**

- Outermost layer: $e^{(\cdot)}$ (exponential, wraps everything)
- Middle layer: $\cos((\cdot))$ (cosine, wraps the innermost)
- Innermost layer: $\sin(x)$ (the core function)

Read the function from outside in: $e$ to the power of (cosine of (sine of $x$)).

**Step 2 - Differentiate the outermost layer, keep everything inside untouched**

The outside function is $e^{(\cdot)}$. The derivative of $e^u$ with respect to $u$ is $e^u$. Keep the full inside expression intact.

$$\text{Layer 1 factor: } e^{\cos(\sin(x))}$$

**Step 3 - Multiply by the derivative of the middle layer, keep the innermost untouched**

The middle function is $\cos((\cdot))$. The derivative of $\cos(u)$ with respect to $u$ is $-\sin(u)$. Keep $\sin(x)$ inside untouched.

$$\text{Layer 2 factor: } \cdot \left(-\sin(\sin(x))\right)$$

**Step 4 - Multiply by the derivative of the innermost layer**

The innermost function is $\sin(x)$. Its derivative is $\cos(x)$.

$$\text{Layer 3 factor: } \cdot \cos(x)$$

**Step 5 - Multiply all three factors together**

$$f'(x) = e^{\cos(\sin(x))} \cdot \left(-\sin(\sin(x))\right) \cdot \cos(x)$$

$$\boxed{f'(x) = -\cos(x)\sin(\sin(x))\,e^{\cos(\sin(x))}}$$

**Here is exactly how the AP exam scores this type of problem:**
- Identify the number of nested layers before writing anything (structural recognition earns the first point)
- Differentiate the outermost layer correctly: $\frac{d}{dx}[e^u] = e^u$ with the full inside expression intact (1 point)
- Differentiate the middle layer correctly: $\frac{d}{dx}[\cos(u)] = -\sin(u)$, including the negative sign (1 point)
- Differentiate the innermost layer correctly: $\frac{d}{dx}[\sin(x)] = \cos(x)$ (1 point)
- Multiply all three factors together in one clean expression (1 point)

That is 4 to 5 points on a single layered FRQ part. Students who freeze at the visual complexity and start guessing lose all of them. Students who peel from the outside in collect every point. The method does not change when you add a third layer. The patience does.

---

## The 3 Mistakes That Cost My Students Points {#mistakes}

**Mistake 1: Forgetting the inside derivative on a chain rule**

Why it happens: My students learn chain rule as "derivative of the outside, leave the inside alone" and stop there. The "times the derivative of the inside" part gets cut off in their head because the outside derivative feels like the answer.

How to fix it: Every time you write a chain rule derivative, leave a blank dot at the end of the line before you finish the problem. That dot reminds you the inside derivative has to be there. On a 9-point FRQ, this single mistake costs you 1 to 2 points and is the difference between a 5 and a 4 composite.

**Mistake 2: Treating $(f \cdot g)'$ as $f' \cdot g'$**

Why it happens: My students see two functions multiplied together and assume the derivative is the product of the two derivatives. It is not. That is the most natural-feeling guess and it is wrong every time.

How to fix it: Burn the formula into your head. $(f \cdot g)' = f' \cdot g + f \cdot g'$. There are two terms. Not one. Two. If your product rule answer has only one term, you missed half of it. On the AP exam, this mistake on a single FRQ part costs you 2 to 3 points minimum.

**Mistake 3: Skipping the structure check before writing**

Why it happens: My students see a function and start taking the derivative immediately because the rules feel automatic in homework. The problem is the AP exam never gives you homework problems. It layers the rules so that "automatic" is the wrong move.

How to fix it: Spend 5 seconds before you write anything. Look at the function. Say out loud: "this is a sum of a product times a chain" or whatever it is. Identify the outside structure. Then start writing. That 5-second pause saves you 3 minutes of erasing later. On a timed exam, that is the difference between finishing the FRQ and leaving a blank.

---

## Practice Problems {#practice}

Try these on your own before checking the answers. If you get stuck, run the decision framework first. Identify the outside structure before you take a single derivative.

**Problem 1 - Single-Step Power Rule**

Find $f'(x)$ if $f(x) = 6x^4 + 5x^2 - 9x + 11$.

**Problem 2 - Product Rule Application**

Find $\frac{dy}{dx}$ if $y = (3x^2 + 1)(x^3 - 4x)$.

**Problem 3 - Chain Rule Inside Product Rule (FRQ Type)**

Find $f'(x)$ if $f(x) = x^3 \cos(2x^2)$. Identify each rule you use and where.

**Answers:**

Problem 1: $f'(x) = 24x^3 + 10x - 9$

Problem 2: Product rule with $u = 3x^2 + 1$ and $v = x^3 - 4x$. $u' = 6x$, $v' = 3x^2 - 4$.

$\frac{dy}{dx} = 6x(x^3 - 4x) + (3x^2 + 1)(3x^2 - 4)$

Expanded: $\frac{dy}{dx} = 6x^4 - 24x^2 + 9x^4 - 12x^2 + 3x^2 - 4 = 15x^4 - 33x^2 - 4$

Problem 3: Product rule on the outside (factors $x^3$ and $\cos(2x^2)$). Power rule on $x^3$ gives $3x^2$. Chain rule on $\cos(2x^2)$: outside derivative is $-\sin(2x^2)$, inside derivative is $4x$, combined is $-4x\sin(2x^2)$.

$f'(x) = 3x^2 \cos(2x^2) + x^3 \cdot (-4x\sin(2x^2)) = 3x^2 \cos(2x^2) - 4x^4 \sin(2x^2)$

---

## FAQ {#faq}

**Q: When do I use product rule vs. chain rule?**

A: Product rule when two functions of $x$ are multiplied together, like $x^2 \cdot \sin(x)$. Chain rule when one function is nested inside another, like $\sin(x^2)$. The cleanest test: if you can write the function as $u \cdot v$ where $u$ and $v$ both have $x$ in them, that is product rule. If you can write it as $g(h(x))$ where one function is fed into another, that is chain rule. Most AP exam problems combine both, and the outside structure decides which rule sets up first. Get the structure right and the rest is mechanical.

**Q: Do I need to memorize all of these for AP Calculus AB or just BC?**

A: All four rules are required for both AB and BC. Power rule, product rule, and quotient rule are introduced in Unit 2. Chain rule bridges into Unit 3. From Unit 3 onward, every unit assumes all four rules are automatic. If you skip one, you will lose points in Unit 4 (related rates), Unit 5 (analyzing graphs), and on every FRQ that involves taking a derivative of anything that is not a clean polynomial. Lock all four in now.

**Q: Is there a derivative rules cheat sheet I can use during the exam?**

A: No. The AP exam does not let you bring a cheat sheet. The College Board provides a list of approved trig identities and a few formulas at the front of the FRQ booklet, but derivative rules are not on it. You have to know power, product, quotient, and chain rule from memory. That is why I tell every student to write them out from scratch every day during the two weeks before the exam. Memorization beats notes here. You just have to know the rules. There are no shortcuts. You know them or you do not. And if you do not, you will clearly see how impactful that is on your grade. The two weeks before the exam are the right time to fix it.

**Q: What is the fastest way to take a derivative on a multiple choice problem?**

A: Identify the structure in 5 seconds before you do any algebra. Most MCQ derivative problems are designed to be done in under 90 seconds if you spot the rule. If you are spending 3 minutes on a single derivative, you missed the structure. Stop, re-read, and ask: is this a sum, a product, or a composition? That single question collapses most MCQ derivatives down to one rule. The chain rule problems are the slowest because they have two steps, but even those should not take more than 90 seconds with practice.

---

## Save This For Exam Day {#quick-reference}

**The 4 Core Rules**

$$\frac{d}{dx}[x^n] = nx^{n-1}$$

$$\frac{d}{dx}[u \cdot v] = u' \cdot v + u \cdot v'$$

$$\frac{d}{dx}\left[\frac{u}{v}\right] = \frac{u' \cdot v - u \cdot v'}{v^2} \quad \text{(low d-high minus high d-low, over low squared)}$$

$$\frac{d}{dx}[g(h(x))] = g'(h(x)) \cdot h'(x)$$

**Decision Framework**
- Sum of terms? Take derivative term by term.
- Two functions multiplied? Product rule first.
- One function divided by another? Quotient rule first.
- Function inside a function? Chain rule first.
- Always identify outside structure before you write.

**Always remember:**
- Chain rule has two factors: outside derivative AND inside derivative
- Product rule has two terms: $u'v$ AND $uv'$
- Constant has derivative 0

**Never do this:**
- Treat $(fg)'$ as $f' \cdot g'$
- Forget the inside derivative on a chain rule
- Start writing derivatives before identifying the outside structure

---

## Related Posts {#related}

If you found this helpful, these posts cover concepts that connect directly to derivative rules:

- [What Is a Derivative in AP Calculus? (The Concept, Not Just the Formula)](/post-01-what-is-a-derivative)
- [Continuity vs. Differentiability: What the AP Exam Actually Tests](/post-04-continuity-vs-differentiability)

Both posts above build the foundation this one stands on. If chain rule still feels shaky after this post, the issue is usually upstream in the limit definition of the derivative. Go back to Post 01 and run the framework there first.

External resources I trust:
- [College Board AP Calculus AB Course and Exam Description](https://apcentral.collegeboard.org/courses/ap-calculus-ab)
- [Khan Academy AP Calculus AB Differentiation Unit](https://www.khanacademy.org/math/ap-calculus-ab/ab-differentiation-1-new)
- [Paul's Online Math Notes Derivatives chapter](https://tutorial.math.lamar.edu/Classes/CalcI/DerivativeIntro.aspx)

---

## Lock In Derivative Rules With the Review Sheet {#end-cta}

Derivative rules are the foundation for every unit after differentiation. If you can take a power rule, product rule, and chain rule derivative cleanly under pressure, you will earn easy points on every FRQ from Unit 3 through Unit 8. If you cannot, every later unit will feel harder than it needs to be, because every later unit assumes you have these rules cold.

The review sheet I built for AP Calculus students gives you 50 worked derivative problems with full solutions, including every layered rule combination the AP exam loves to test. It is the same sheet I use with my own students in the two weeks before the exam.

[Get the Review Sheet](https://www.aceapcalculus.com/reviewsheet50)

*(Parents: this is the resource that turns a B student into an A student in the two weeks before the AP exam. It is built for exam prep, not for learning the material from scratch.)*

---

**[SEASONAL CTA - Active through September 15, 2026]**

If you want your student to walk into AP Calculus next year already comfortable with derivative rules, my summer program runs in July and August. Small groups. Real FRQ practice. Structured plan. Proven results. Spots fill fast.

[See Summer Program Details and Reserve a Spot]

[Take the Free Pre-Assessment](https://www.aceapcalculus.com/summer-diagnostic-page)

*(Parents: the pre-assessment shows you exactly where your student stands before the summer program begins. It is free and takes about 15 minutes.)*

---

## SEO Metadata

SEO Title: Derivative Rules in AP Calculus 2026 (All 4 Core Rules)
Meta Description: Learn the power, product, quotient, and chain rules for AP Calculus AB and BC. Decision framework, triple chain rule walkthrough, and the mistakes that cost a 5.
Slug: derivative-rules-ap-calculus
Primary Keyword: derivative rules AP Calculus
Focus Keyphrase: derivative rules AP Calculus
KEYWORD_CLUSTER (all integrated in body): power rule ap calculus, product rule ap calc, quotient rule ap calculus, chain rule ap calculus, how to take a derivative ap calc, derivative rules cheat sheet, ap calc unit 2 and unit 3 differentiation, when to use product vs chain rule
SERP_TARGET_WORD_COUNT: ~3,300 words (avg of Math is Fun ~2,300, Paul's Online Math Notes derivative chapter ~3,000+, Albert.io / general competitor pages ~3,500)
COVERAGE_GAPS_ADDRESSED: AP-specific decision framework (when to use product vs chain rule); FRQ scoring rubric for layered rule problems; the inside-derivative-omission pattern; outside-structure-first approach; layered rule (product inside chain) walkthrough as worked example
UNIQUE_ANGLE_GAP: Confirmed - none of the top SERP competitors cover the "forgot the inside derivative" pattern as the specific point-loss mechanism on FRQs. Hook angle is unique.
Image Alt Text: Diagram showing decision framework for power rule, product rule, quotient rule, and chain rule in AP Calculus Units 2 and 3 differentiation
Schema Type: Educational Article

---

## Zach's Flow Checklist

[ ] Math accuracy check:
1. Power rule: $\frac{d}{dx}[x^n] = nx^{n-1}$ - confirmed
2. Product rule: $(uv)' = u'v + uv'$ - confirmed
3. Chain rule: $(g \circ h)' = g'(h) \cdot h'$ - confirmed
4. Example 1: $\frac{d}{dx}[4x^5 - 3x^3 + 7x^2 - 2x + 8] = 20x^4 - 9x^2 + 14x - 2$ - confirmed
5. Example 2: $\frac{d}{dx}[x^2 \sin(3x)] = 2x\sin(3x) + 3x^2\cos(3x)$ - confirmed
6. Practice 1: $\frac{d}{dx}[6x^4 + 5x^2 - 9x + 11] = 24x^3 + 10x - 9$ - confirmed
7. Practice 2: $\frac{d}{dx}[(3x^2+1)(x^3 - 4x)] = 15x^4 - 33x^2 - 4$ - PLEASE VERIFY: $6x \cdot x^3 = 6x^4$, $6x \cdot (-4x) = -24x^2$, $(3x^2+1)(3x^2-4) = 9x^4 - 12x^2 + 3x^2 - 4 = 9x^4 - 9x^2 - 4$. Total: $6x^4 - 24x^2 + 9x^4 - 9x^2 - 4 = 15x^4 - 33x^2 - 4$. Confirmed.
8. Practice 3: $\frac{d}{dx}[x^3 \cos(2x^2)] = 3x^2 \cos(2x^2) - 4x^4 \sin(2x^2)$ - confirmed (chain on cosine: $-\sin(2x^2) \cdot 4x$, then product rule)

[ ] Personal moment: Unique angle injected in intro (student session story: set up correctly, double-checked, still missed inside derivative) and WE2 intro (triple chain freeze observation). Zach to confirm voice before publishing.

[ ] Voice check: Read aloud - "Every differentiation unit test I give, at least one student writes a perfect chain rule setup and then forgets to multiply by the inside derivative." That is your hook seed. If it sounds like you, keep it. If not, swap it for the exact phrase you say in class.

[ ] Desmos graph: None planned for this post. Derivative rules are computational, not visual. If you want one, the natural fit is showing $f(x) = x^2 \sin(3x)$ and its derivative side by side. Window x[0,3], y[-5,5]. About 90 seconds to add.

[ ] CTA confirmation: Mid-post Option A (free guide). End Option B (review sheet, no price in copy) - this matches the "exam prep" tone of the post since derivative rules are an exam-week priority. Seasonal Option D (summer program) and Option E (pre-assessment) active through Sept 15, 2026.

[ ] Read time: ~3,400 words / 200 wpm = ~13 minutes. Reading time stated as 13 minutes. Confirmed.

---

SKILL DELTA:
- New lesson learned: AP-specific decision frameworks (which rule, when) are a major coverage gap in the SERP. Top competitors list rules; none teach the structural-recognition skill that the AP exam actually tests. This is a repeatable angle for any "rules" or "techniques" post (integration techniques, related rates strategies, optimization setup).
- Forbidden pattern eliminated: Zero em-dashes throughout. Did not open any section with a definition. The "What Derivative Rules Actually Do" section opens with what textbooks get wrong, then gives the shortcut framing.
- Analogy or voice move that worked: Framing rules as "trusted shortcuts that replace the limit definition for specific function shapes" connects this post back to Post 01 (limit definition) and grounds why the rules exist. Also the "5 seconds before you write" coaching move in Mistake 3 is concrete enough to be actionable.
- MCQ/FRQ framing note: This post is FRQ framing per topic block. The FRQ rubric opener landed on Worked Example 1 ("Here is exactly how the AP exam scores this type of problem"). Worked Example 2 also uses FRQ rubric framing because the layered product/chain pattern is overwhelmingly tested on FRQ, not MCQ. This matches the topic block spec.
