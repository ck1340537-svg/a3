(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('nav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Quick-pickle brine calculator (fridge pickles)
  var r=document.getElementById('jar-ml'),style='classic';
  var STY={classic:{v:.5,s:1.5,g:1,h:'Classic: half vinegar, half water'},tangy:{v:.67,s:1.5,g:0,h:'Tangy: two parts vinegar to one part water, no sugar'},sweet:{v:.5,s:1.25,g:3,h:'Sweet: half vinegar, half water, with extra sugar'}};
  function r1(x){return Math.round(x*10)/10;}
  function calc(){if(!r)return;var ml=parseInt(r.value,10),cups=ml/240,s=STY[style];
    document.getElementById('jar-val').textContent=ml+' ml ('+r1(cups)+' cups)';
    document.getElementById('o-vin').textContent=Math.round(ml*s.v)+' ml';
    document.getElementById('o-wat').textContent=Math.round(ml*(1-s.v))+' ml';
    document.getElementById('o-salt').textContent=r1(cups*s.s)+' tsp';
    document.getElementById('o-sug').textContent=s.g?r1(cups*s.g)+' tsp':'none';
    document.getElementById('o-style').textContent=s.h;}
  document.querySelectorAll('[data-style]').forEach(function(btn){btn.addEventListener('click',function(){document.querySelectorAll('[data-style]').forEach(function(x){x.setAttribute('aria-pressed','false');});btn.setAttribute('aria-pressed','true');style=btn.dataset.style;calc();});});
  if(r){r.addEventListener('input',calc);calc();}
  // Flavour pairing finder
  var P={
    capers:[['Lemon','Parsley','Tomatoes','Olives','Fish','Potatoes'],'Rinse salt-packed capers well. Fry them in olive oil until they burst for a crunchy, salty topping.'],
    juniper:[['Cabbage','Apples','Bay leaf','Black pepper','Mushrooms','Root vegetables'],'Lightly crush juniper berries before using to release their piney, citrusy aroma. A few go a long way.'],
    dill:[['Cucumbers','Yogurt','Potatoes','Beets','Garlic','Eggs'],'Add fresh dill at the end of cooking; its delicate flavour fades with long heat.'],
    mustard:[['Cauliflower','Onions','Honey','Vinegar','Carrots','Lentils'],'Toast mustard seeds in a dry pan until they pop for a nutty flavour in pickles and dressings.'],
    lemon:[['Capers','Garlic','Herbs','Chickpeas','Asparagus','Olive oil'],'Use both zest and juice: zest brings fragrance, juice brings brightness.'],
    fennel:[['Oranges','Olives','Tomatoes','White beans','Potatoes','Parmesan'],'Fennel seeds and fresh bulb share an anise note that loves citrus and salty flavours.']
  };
  var out=document.getElementById('pair-out');
  document.querySelectorAll('[data-ing]').forEach(function(btn){btn.addEventListener('click',function(){
    document.querySelectorAll('[data-ing]').forEach(function(x){x.setAttribute('aria-pressed','false');});btn.setAttribute('aria-pressed','true');
    var p=P[btn.dataset.ing];out.querySelector('h3').textContent=btn.textContent+' goes well with';
    out.querySelector('.chips').innerHTML=p[0].map(function(x){return '<li>'+x+'</li>';}).join('');out.querySelector('p').textContent=p[1];});});
  // Cookie
  var k=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('cj_cookie');}catch(e){}
  if(k&&!v)k.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('cj_cookie',x.dataset.cookie);}catch(e){}k.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
