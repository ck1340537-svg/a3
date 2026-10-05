<?php
// Caper Juniper — homepage
$m = (int) date('n');
$season = in_array($m, [12, 1, 2]) ? 'Winter' : (in_array($m, [3, 4, 5]) ? 'Spring' : (in_array($m, [6, 7, 8]) ? 'Summer' : 'Autumn'));
$msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'post_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['website'])) { $ok = true; $msg = 'Thank you!'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $ok = true; $msg = 'Welcome to The Pantry Post! Your first issue arrives at the start of next month.';
    } else { $msg = 'Please enter a valid email address.'; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Caper Juniper | Quick Pickles, Capers, Juniper &amp; Spice Pantry Guide</title>
<meta name="description" content="A home cook's guide to briny and aromatic flavours: a quick-pickle brine calculator, seasonal pickling, flavour pairings, spice essentials and easy caper recipes.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.caperjuniper.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Caper Juniper">
<meta property="og:title" content="Caper Juniper | Quick Pickles, Capers, Juniper &amp; Spice Pantry Guide"><meta property="og:description" content="A home cook's guide to briny and aromatic flavours: a quick-pickle brine calculator, seasonal pickling, flavour pairings, spice essentials and easy caper recipes.">
<meta property="og:url" content="https://www.caperjuniper.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1786046873392-fac519ea6fa7?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#2F3B57">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 38 46'%3E%3Crect x='7' y='1' width='24' height='7' rx='2' fill='%232F3B57'/%3E%3Crect x='1' y='10' width='36' height='35' rx='5' fill='%23F7F5F0' stroke='%232F3B57' stroke-width='2'/%3E%3Ccircle cx='14' cy='27' r='4' fill='%236B7340'/%3E%3Ccircle cx='24' cy='24' r='4' fill='%23B23A6E'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;600;700&family=Zilla+Slab:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Caper Juniper", "url": "https://www.caperjuniper.com/", "email": "hello@caperjuniper.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "Recipe", "name": "Quick-Pickled Red Onions", "image": "https://images.unsplash.com/photo-1742845794669-3ff1b66b8483?auto=format&fit=crop&w=1200&q=75", "author": {"@type": "Organization", "name": "Caper Juniper"}, "recipeYield": "1 jar (about 2 cups)", "prepTime": "PT10M", "totalTime": "PT40M", "recipeCategory": "Condiment", "recipeIngredient": ["2 medium red onions, thinly sliced", "1/2 cup apple cider vinegar", "1/2 cup water", "1 1/2 tsp fine salt", "1 tbsp sugar", "1/2 tsp black peppercorns", "4 juniper berries, lightly crushed", "1 bay leaf"], "recipeInstructions": [{"@type": "HowToStep", "text": "Pack the sliced onions into a clean jar."}, {"@type": "HowToStep", "text": "Heat the vinegar, water, salt and sugar until dissolved."}, {"@type": "HowToStep", "text": "Add the spices and pour the warm brine over the onions."}, {"@type": "HowToStep", "text": "Cool, cover and refrigerate. Ready in 30 minutes; best within two weeks."}]}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What exactly are capers?", "acceptedAnswer": {"@type": "Answer", "text": "Capers are the unopened flower buds of the caper bush, Capparis spinosa, which grows wild around the Mediterranean. They are cured in brine, vinegar or salt, which develops their tangy, savoury flavour. Caperberries are the plant’s larger fruit, which forms after the flower blooms."}}, {"@type": "Question", "name": "Are juniper berries really berries?", "acceptedAnswer": {"@type": "Answer", "text": "Not quite. They are the small, fleshy seed cones of the juniper shrub, which look and behave like berries. In cooking they bring a piney, peppery, slightly citrus flavour, especially to cabbage, mushrooms and marinades. Use them sparingly."}}, {"@type": "Question", "name": "How long do quick fridge pickles keep?", "acceptedAnswer": {"@type": "Answer", "text": "Quick pickles made with a vinegar brine and stored in the refrigerator are usually best eaten within two to three weeks. Always keep them chilled, use clean utensils, and discard anything that smells off, looks cloudy or slimy, or shows mould."}}, {"@type": "Question", "name": "Can I store quick pickles in the cupboard?", "acceptedAnswer": {"@type": "Answer", "text": "No. Quick pickles are not processed for shelf storage. To make shelf-stable pickles you need tested recipes and proper canning methods from a reliable food-safety source."}}, {"@type": "Question", "name": "Salt-packed or brined capers: which is better?", "acceptedAnswer": {"@type": "Answer", "text": "Salt-packed capers keep more of their floral flavour and firm texture, but need rinsing or soaking before use. Brined capers are convenient and ready to use straight from the jar. Both are good; it is a matter of taste."}}, {"@type": "Question", "name": "Do you sell pickles or spices?", "acceptedAnswer": {"@type": "Answer", "text": "No. Caper Juniper is an independent food information website. We do not sell products and we are not affiliated with any brand."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="hdr">
  <div class="wrap">
    <a class="logo" href="index.php" aria-label="Caper Juniper home"><svg viewBox="0 0 38 46" aria-hidden="true"><rect x="7" y="1" width="24" height="7" rx="2" fill="#2F3B57"/><path d="M5 10 h28 a4 4 0 0 1 4 4 v26 a5 5 0 0 1 -5 5 h-26 a5 5 0 0 1 -5 -5 v-26 a4 4 0 0 1 4 -4z" fill="#F7F5F0" stroke="#2F3B57" stroke-width="2"/><circle cx="14" cy="27" r="3.4" fill="#6B7340"/><circle cx="22" cy="32" r="3" fill="#6B7340"/><circle cx="24" cy="22" r="3.4" fill="#2F3B57"/><circle cx="15" cy="36" r="2.6" fill="#B23A6E"/></svg><span>Caper Juniper<small>The flavour pantry</small></span></a>
    <span class="season-chip"><?php echo $season; ?> pickling season</span>
    <nav aria-label="Main navigation"><ul class="nav" id="nav"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="pickling-guide.html">Pickling Guide</a></li><li><a href="spice-pantry.html">Spice Pantry</a></li><li><a href="about.html">About</a></li><li><a href="contact.html">Contact</a></li></ul></nav>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="nav"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">
<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <span class="lbl b">The flavour pantry &middot; <?php echo $season; ?></span>
      <h1>Small jars, <span>big flavour</span>.</h1>
      <p class="lead">Caper Juniper is a home cook&#8217;s guide to the briny, tangy and aromatic: quick pickles, capers, juniper and the spices that make everyday meals taste brighter. Practical, tested and easy to start today.</p>
      <div class="ctas"><a class="btn" href="#brine">Try the brine calculator</a><a class="btn btn--o" href="pickling-guide.html">Read the pickling guide</a></div>
    </div>
    <div class="jars">
      <div class="jar"><div class="glass"><img src="https://images.unsplash.com/photo-1627861446476-42fd9925e151?auto=format&fit=crop&w=500&q=75" alt="garlic and green vegetables in a clear glass jar" width="500" height="700" fetchpriority="high"></div><span class="tag">Garlic &amp; greens</span></div>
      <div class="jar"><div class="glass"><img src="https://images.unsplash.com/photo-1786046873392-fac519ea6fa7?auto=format&fit=crop&w=500&q=75" alt="two jars of vibrant pink pickled red onions" width="500" height="833" fetchpriority="high"></div><span class="tag">Red onions</span></div>
      <div class="jar"><div class="glass"><img src="https://images.unsplash.com/photo-1781681308520-2c906154f5f8?auto=format&fit=crop&w=500&q=75" alt="three jars of preserved fruit with handwritten labels" width="500" height="633"></div><span class="tag">Fruit preserves</span></div>
    </div>
  </div>
</section>

<section class="meet" aria-labelledby="mt-t">
  <div class="wrap">
    <div class="head"><div><span class="lbl">Meet the namesakes</span><h2 id="mt-t">Two tiny ingredients worth knowing</h2></div><p>Capers and juniper are small, but they punch far above their size. A spoonful or a pinch can transform a sauce, a salad or a pot of cabbage.</p></div>
    <div class="meet-grid">
      <article class="mcard"><div class="pic"><img src="https://images.unsplash.com/photo-1625009431843-18569fd7331b?auto=format&fit=crop&w=600&q=75" alt="small green capers in a clear glass bowl" width="600" height="600" loading="lazy"></div><div class="in"><h3>Capers</h3><p>The unopened flower buds of a Mediterranean shrub, cured to bring out a salty, lemony tang.</p><dl><dt>Flavour</dt><dd>Briny, floral, sharp</dd><dt>Sizes</dt><dd>Nonpareil (smallest) to larger buds</dd><dt>Try with</dt><dd>Lemon, tomatoes, potatoes, fish</dd></dl></div></article>
      <article class="mcard j"><div class="pic"><img src="https://images.unsplash.com/photo-1717527301724-7f72986ca267?auto=format&fit=crop&w=600&q=75" alt="close-up of a juniper branch with dusky blue berries" width="600" height="600" loading="lazy"></div><div class="in"><h3>Juniper</h3><p>Small, dusky blue seed cones from an evergreen shrub, used as a spice in northern European cooking.</p><dl><dt>Flavour</dt><dd>Piney, peppery, citrusy</dd><dt>Use</dt><dd>Crushed, a few at a time</dd><dt>Try with</dt><dd>Cabbage, apples, mushrooms, brines</dd></dl></div></article>
    </div>
  </div>
</section>

<section class="calc" id="brine" aria-labelledby="br-t">
  <div class="wrap">
    <div class="calc-box">
      <div class="in">
        <span class="lbl w">Interactive tool</span>
        <h2 id="br-t">Quick-pickle brine calculator</h2>
        <p>Set the volume of liquid your jar needs and choose a style. We will work out the vinegar, water, salt and sugar for a refrigerator pickle.</p>
        <label for="jar-ml">Liquid needed: <span class="val" id="jar-val">480 ml (2 cups)</span></label>
        <input type="range" id="jar-ml" min="240" max="1440" step="120" value="480">
        <label>Brine style</label>
        <div class="seg" role="group" aria-label="Brine style"><button type="button" data-style="classic" aria-pressed="true">Classic</button><button type="button" data-style="tangy" aria-pressed="false">Tangy</button><button type="button" data-style="sweet" aria-pressed="false">Sweet</button></div>
      </div>
      <div class="recipe-card" aria-live="polite">
        <h3>Your brine</h3>
        <p class="muted" id="o-style">Classic: half vinegar, half water</p>
        <ul>
          <li><span>Vinegar (5% acidity)</span><b id="o-vin">240 ml</b></li>
          <li><span>Water</span><b id="o-wat">240 ml</b></li>
          <li><span>Fine salt</span><b id="o-salt">3 tsp</b></li>
          <li><span>Sugar (optional)</span><b id="o-sug">2 tsp</b></li>
        </ul>
        <p class="note">Warm everything until the salt dissolves, pour over your vegetables and refrigerate. Fridge pickles only; not for shelf storage.</p>
      </div>
    </div>
  </div>
</section>

<section class="seasons" aria-labelledby="se-t">
  <div class="wrap">
    <div class="head"><div><span class="lbl b">Through the year</span><h2 id="se-t">What to pickle each season</h2></div><p>The best pickles start with produce at its peak. The current season is highlighted automatically.</p></div>
    <div class="s-grid"><article class="s-card<?php echo $season === 'Spring' ? ' now' : ''; ?>"><?php if ($season === 'Spring') echo '<span class="now-tag">In season now</span>'; ?><div class="pic"><img src="https://images.unsplash.com/photo-1607409396704-a6c7dbcb5de5?auto=format&fit=crop&w=600&q=75" alt="fresh dill plant on a white background" width="600" height="450" loading="lazy"></div><div class="t"><h3>Spring</h3><ul><li>Radishes &amp; spring onions</li><li>Asparagus spears</li><li>Young carrots</li><li>Fresh dill for brines</li></ul></div></article><article class="s-card<?php echo $season === 'Summer' ? ' now' : ''; ?>"><?php if ($season === 'Summer') echo '<span class="now-tag">In season now</span>'; ?><div class="pic"><img src="https://images.unsplash.com/photo-1449300079323-02e209d9d3a6?auto=format&fit=crop&w=600&q=75" alt="pile of fresh green cucumbers" width="600" height="450" loading="lazy"></div><div class="t"><h3>Summer</h3><ul><li>Cucumbers (the classic)</li><li>Green beans</li><li>Zucchini ribbons</li><li>Cherry tomatoes</li></ul></div></article><article class="s-card<?php echo $season === 'Autumn' ? ' now' : ''; ?>"><?php if ($season === 'Autumn') echo '<span class="now-tag">In season now</span>'; ?><div class="pic"><img src="https://images.unsplash.com/photo-1664791461482-79f5deee490f?auto=format&fit=crop&w=600&q=75" alt="assortment of autumn vegetables and fruits" width="600" height="450" loading="lazy"></div><div class="t"><h3>Autumn</h3><ul><li>Beets</li><li>Cauliflower florets</li><li>Red cabbage</li><li>Pears &amp; apples for chutney</li></ul></div></article><article class="s-card<?php echo $season === 'Winter' ? ' now' : ''; ?>"><?php if ($season === 'Winter') echo '<span class="now-tag">In season now</span>'; ?><div class="pic"><img src="https://images.unsplash.com/photo-1693212454137-0d2909d79b27?auto=format&fit=crop&w=600&q=75" alt="three jars filled with preserved foods" width="600" height="450" loading="lazy"></div><div class="t"><h3>Winter</h3><ul><li>Fermented cabbage (sauerkraut)</li><li>Red onions</li><li>Carrots &amp; daikon</li><li>Citrus peel</li></ul></div></article></div>
  </div>
</section>

<section class="pair" id="pairings" aria-labelledby="pa-t">
  <div class="wrap pair-box">
    <div>
      <span class="lbl">Flavour pairings</span>
      <h2 id="pa-t">What goes with what?</h2>
      <p class="muted">Pick a pantry ingredient to see classic partners and a quick tip for using it.</p>
      <div class="ing-btns" role="group" aria-label="Ingredients"><button type="button" data-ing="capers" aria-pressed="true">Capers</button><button type="button" data-ing="juniper" aria-pressed="false">Juniper</button><button type="button" data-ing="dill" aria-pressed="false">Dill</button><button type="button" data-ing="mustard" aria-pressed="false">Mustard seed</button><button type="button" data-ing="lemon" aria-pressed="false">Lemon</button><button type="button" data-ing="fennel" aria-pressed="false">Fennel</button></div>
    </div>
    <div class="pair-out" id="pair-out" aria-live="polite">
      <h3>Capers goes well with</h3>
      <ul class="chips"><li>Lemon</li><li>Parsley</li><li>Tomatoes</li><li>Olives</li><li>Fish</li><li>Potatoes</li></ul>
      <p>Rinse salt-packed capers well. Fry them in olive oil until they burst for a crunchy, salty topping.</p>
    </div>
  </div>
</section>

<section class="shelf" aria-labelledby="sh-t">
  <div class="wrap shelf-grid">
    <div class="pics">
      <div class="pic"><img src="https://images.unsplash.com/photo-1591272216626-b09e38519371?auto=format&fit=crop&w=700&q=75" alt="assorted spices in clear glass containers" width="700" height="525" loading="lazy"></div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1701188542905-01e99a1b8177?auto=format&fit=crop&w=700&q=75" alt="glass jar filled with small dark seeds" width="700" height="525" loading="lazy"></div>
    </div>
    <div>
      <span class="lbl">The spice shelf</span>
      <h2 id="sh-t">Eight spices for pickles and beyond</h2>
      <p class="muted">You don&#8217;t need a huge collection. These eight whole spices cover most brines, marinades and everyday cooking. Buy whole, store airtight away from light, and grind as you need.</p>
      <div class="spices"><div class="spice"><i style="background:#2F3B57"></i><div><h3>Juniper berries</h3><p>Piney and resinous. Crush lightly; lovely with cabbage, apples and root vegetables.</p></div></div><div class="spice"><i style="background:#C9A23B"></i><div><h3>Mustard seeds</h3><p>Pop in hot oil or add whole to brines for gentle heat and texture.</p></div></div><div class="spice"><i style="background:#3A3A3A"></i><div><h3>Black peppercorns</h3><p>The everyday essential. Grind fresh for the brightest flavour.</p></div></div><div class="spice"><i style="background:#8A9A4A"></i><div><h3>Dill seed</h3><p>Warm and slightly bitter; the signature flavour of many cucumber pickles.</p></div></div><div class="spice"><i style="background:#B8783B"></i><div><h3>Coriander seed</h3><p>Citrusy and floral. Toast before grinding to deepen the aroma.</p></div></div><div class="spice"><i style="background:#6B4F2A"></i><div><h3>Bay leaves</h3><p>A quiet backbone for brines, soups and stews. Remove before serving.</p></div></div><div class="spice"><i style="background:#C64A3A"></i><div><h3>Chilli flakes</h3><p>Add a pinch to any pickle jar for a little warmth.</p></div></div><div class="spice"><i style="background:#A6B57A"></i><div><h3>Fennel seed</h3><p>Sweet anise notes that pair well with citrus and tomatoes.</p></div></div></div>
      <p style="margin-top:22px"><a class="btn btn--b" href="spice-pantry.html">Explore the spice pantry</a></p>
    </div>
  </div>
</section>

<section class="recipes" aria-labelledby="rc-t">
  <div class="wrap">
    <span class="lbl b">Start here</span>
    <h2 id="rc-t">Two recipes to make this week</h2>
    <article class="rec">
      <div class="pic"><img src="https://images.unsplash.com/photo-1742845794669-3ff1b66b8483?auto=format&fit=crop&w=800&q=75" alt="finely chopped red onions on a board" width="800" height="700" loading="lazy"></div>
      <div class="in">
        <h3>Quick-pickled red onions with juniper</h3>
        <ul class="meta"><li>1 jar</li><li>10 min + 30 min rest</li><li>Fridge pickle</li></ul>
        <div class="cols">
          <div><h4>Ingredients</h4><ul><li>2 medium red onions, thinly sliced</li><li>&frac12; cup apple cider vinegar</li><li>&frac12; cup water</li><li>1&frac12; tsp fine salt</li><li>1 tbsp sugar</li><li>&frac12; tsp black peppercorns</li><li>4 juniper berries, lightly crushed</li><li>1 bay leaf</li></ul></div>
          <div><h4>Method</h4><ol><li>Pack the onion slices into a clean jar.</li><li>Warm the vinegar, water, salt and sugar until dissolved.</li><li>Add the spices to the jar and pour over the warm brine.</li><li>Cool, cover and refrigerate. Ready in 30 minutes; best eaten within two weeks. Lovely on tacos, salads and grain bowls.</li></ol></div>
        </div>
      </div>
    </article>
    <article class="rec">
      <div class="pic"><img src="https://images.unsplash.com/photo-1604543631489-4c03c8cc6ded?auto=format&fit=crop&w=800&q=75" alt="fresh green herbs on a wooden chopping board" width="800" height="700" loading="lazy"></div>
      <div class="in">
        <h3>Caper &amp; herb salsa verde</h3>
        <ul class="meta"><li>Serves 4</li><li>10 min</li><li>No cooking</li></ul>
        <div class="cols">
          <div><h4>Ingredients</h4><ul><li>1 large bunch flat-leaf parsley</li><li>A handful of basil or mint</li><li>2 tbsp capers, rinsed</li><li>1 small garlic clove</li><li>1 tsp Dijon mustard</li><li>1 tbsp red or white vinegar, or lemon juice</li><li>&frac12; cup olive oil</li></ul></div>
          <div><h4>Method</h4><ol><li>Finely chop the herbs, capers and garlic together on a board.</li><li>Scrape into a bowl and stir in the mustard and vinegar.</li><li>Gradually stir in the olive oil until loose and glossy.</li><li>Season with pepper; capers are salty, so taste before adding salt. Spoon over roasted vegetables, potatoes or eggs.</li></ol></div>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="safety" aria-labelledby="sf-t">
  <div class="wrap safe-grid">
    <div>
      <span class="lbl">Keep it safe</span>
      <h2 id="sf-t">Fridge pickles vs. canned preserves</h2>
      <p class="muted">Both are delicious, but they follow different rules. Knowing the difference keeps your pantry safe.</p>
      <div class="vs">
        <div><h3>Quick fridge pickles</h3><ul><li>Vinegar brine, no processing</li><li>Always kept refrigerated</li><li>Best within 2&ndash;3 weeks</li><li>Easy and flexible</li></ul></div>
        <div><h3>Canned preserves</h3><ul><li>Tested recipes only</li><li>Processed in a water bath or pressure canner</li><li>Shelf-stable when done correctly</li><li>Follow official food-safety guidance</li></ul></div>
      </div>
      <p style="margin-top:20px;font-size:.92rem" class="muted">Use clean jars and utensils, use vinegar with at least 5% acidity, and never taste anything that smells off, bubbles unexpectedly or shows mould.</p>
    </div>
    <div class="pic"><img src="https://images.unsplash.com/photo-1640348784724-93f7b14d8047?auto=format&fit=crop&w=800&q=75" alt="wooden shelf filled with jars of preserved food" width="800" height="680" loading="lazy"></div>
  </div>
</section>

<section class="gal" aria-label="Pantry gallery">
  <div class="wrap">
    <span class="lbl b">From the pantry</span>
    <div class="gal-grid">
      <figure><img src="https://images.unsplash.com/photo-1760368104798-63e896bdca09?auto=format&fit=crop&w=500&q=75" alt="assortment of colourful pickled vegetables in containers" width="500" height="667" loading="lazy"><figcaption>Rainbow pickles</figcaption></figure>
      <figure><img src="https://images.unsplash.com/photo-1773306255915-921ea95858aa?auto=format&fit=crop&w=500&q=75" alt="platter of pickles and olives" width="500" height="667" loading="lazy"><figcaption>Pickle platter</figcaption></figure>
      <figure><img src="https://images.unsplash.com/photo-1706378398576-57a21244ef7a?auto=format&fit=crop&w=500&q=75" alt="three bowls filled with olives on a table" width="500" height="667" loading="lazy"><figcaption>Olives three ways</figcaption></figure>
      <figure><img src="https://images.unsplash.com/photo-1617854307432-13950e24ba07?auto=format&fit=crop&w=500&q=75" alt="clear glass jar with a cloth cover on a wooden table" width="500" height="667" loading="lazy"><figcaption>Ready to fill</figcaption></figure>
    </div>
  </div>
</section>

<section class="faq" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="lbl">Questions</span><h2 id="fq-t">Pantry questions, answered</h2><p class="muted">Still curious? Write to us any time.</p><a class="btn btn--o" href="contact.html">Ask a question</a><div class="pic"><img src="https://images.unsplash.com/photo-1591291294701-4f651ddd3556?auto=format&fit=crop&w=800&q=75" alt="sliced lemon beside a knife on a wooden chopping board" width="800" height="600" loading="lazy"></div></div>
    <div><details open><summary>What exactly are capers?</summary><p>Capers are the unopened flower buds of the caper bush, Capparis spinosa, which grows wild around the Mediterranean. They are cured in brine, vinegar or salt, which develops their tangy, savoury flavour. Caperberries are the plant&#8217;s larger fruit, which forms after the flower blooms.</p></details><details><summary>Are juniper berries really berries?</summary><p>Not quite. They are the small, fleshy seed cones of the juniper shrub, which look and behave like berries. In cooking they bring a piney, peppery, slightly citrus flavour, especially to cabbage, mushrooms and marinades. Use them sparingly.</p></details><details><summary>How long do quick fridge pickles keep?</summary><p>Quick pickles made with a vinegar brine and stored in the refrigerator are usually best eaten within two to three weeks. Always keep them chilled, use clean utensils, and discard anything that smells off, looks cloudy or slimy, or shows mould.</p></details><details><summary>Can I store quick pickles in the cupboard?</summary><p>No. Quick pickles are not processed for shelf storage. To make shelf-stable pickles you need tested recipes and proper canning methods from a reliable food-safety source.</p></details><details><summary>Salt-packed or brined capers: which is better?</summary><p>Salt-packed capers keep more of their floral flavour and firm texture, but need rinsing or soaking before use. Brined capers are convenient and ready to use straight from the jar. Both are good; it is a matter of taste.</p></details><details><summary>Do you sell pickles or spices?</summary><p>No. Caper Juniper is an independent food information website. We do not sell products and we are not affiliated with any brand.</p></details></div>
  </div>
</section>

<section class="post" id="pantry-post" aria-labelledby="pp-t">
  <div class="wrap">
    <div class="post-box">
      <div class="in">
        <span class="lbl w">Monthly newsletter</span>
        <h2 id="pp-t">The Pantry Post</h2>
        <p>One email a month with a seasonal pickle, a spice to explore and a simple recipe that uses them both. Free, and easy to unsubscribe.</p>
        <?php if ($msg): ?><p class="<?php echo $ok ? 'ok' : 'err'; ?>" role="status"><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
        <form method="post" action="index.php#pantry-post">
          <label for="pe" class="skip">Email address</label>
          <input type="email" id="pe" name="post_email" placeholder="you@example.com" required autocomplete="email">
          <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
          <button class="btn" type="submit">Subscribe</button>
        </form>
        <p class="small">Read our <a href="privacy-policy.html">Privacy Policy</a>.</p>
      </div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1653611540493-b3a896319fbf?auto=format&fit=crop&w=800&q=75" alt="wooden table topped with bowls of shared food" width="800" height="600" loading="lazy"></div>
    </div>
  </div>
</section>
</main>
<footer class="ftr">
  <div class="wrap">
    <div class="ftr-grid">
      <div><a class="logo" href="index.php"><svg viewBox="0 0 38 46" aria-hidden="true"><rect x="7" y="1" width="24" height="7" rx="2" fill="#2F3B57"/><path d="M5 10 h28 a4 4 0 0 1 4 4 v26 a5 5 0 0 1 -5 5 h-26 a5 5 0 0 1 -5 -5 v-26 a4 4 0 0 1 4 -4z" fill="#F7F5F0" stroke="#2F3B57" stroke-width="2"/><circle cx="14" cy="27" r="3.4" fill="#6B7340"/><circle cx="22" cy="32" r="3" fill="#6B7340"/><circle cx="24" cy="22" r="3.4" fill="#2F3B57"/><circle cx="15" cy="36" r="2.6" fill="#B23A6E"/></svg><span>Caper Juniper<small>The flavour pantry</small></span></a><p>A home cook&#8217;s guide to briny, spiced and preserved flavours: quick pickles, capers, juniper and the pantry staples that turn simple food into something special.</p></div>
      <div><h4>Explore</h4><a href="pickling-guide.html">Pickling Guide</a><a href="spice-pantry.html">Spice Pantry</a><a href="index.php#brine">Brine Calculator</a><a href="index.php#pairings">Flavour Pairings</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Contact</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@caperjuniper.com">hello@caperjuniper.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Caper Juniper. All rights reserved.</span><span>Photography from Unsplash under the Unsplash License.</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, if you agree, analytics cookies to see which guides help most. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
