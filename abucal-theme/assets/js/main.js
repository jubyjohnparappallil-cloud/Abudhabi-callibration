(function () {
  'use strict';

  // Mobile nav toggle
  var toggle = document.getElementById('navToggle');
  var nav = document.getElementById('mainNav');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var isOpen = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    // Close menu when a link is clicked
    nav.addEventListener('click', function (e) {
      if (e.target.tagName === 'A') {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // Scroll reveal animation
  var reveals = document.querySelectorAll('.reveal');

  if (!('IntersectionObserver' in window)) {
    reveals.forEach(function (el) { el.classList.add('visible'); });
    return;
  }

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 }
  );

  reveals.forEach(function (el) { observer.observe(el); });

  // Hero image slider
  var slider = document.getElementById('heroSlider');
  if (slider) {
    var slides = slider.querySelectorAll('.slide');
    var dots = slider.querySelectorAll('.dot');
    var current = 0;
    var timer = null;
    var DELAY = 5000;

    function goTo(index) {
      current = (index + slides.length) % slides.length;
      slides.forEach(function (s, i) { s.classList.toggle('active', i === current); });
      dots.forEach(function (d, i) { d.classList.toggle('active', i === current); });
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    function start() { if (slides.length > 1) { timer = setInterval(next, DELAY); } }
    function stop() { if (timer) { clearInterval(timer); timer = null; } }
    function restart() { stop(); start(); }

    var nextBtn = document.getElementById('sliderNext');
    var prevBtn = document.getElementById('sliderPrev');
    if (nextBtn) nextBtn.addEventListener('click', function () { next(); restart(); });
    if (prevBtn) prevBtn.addEventListener('click', function () { prev(); restart(); });
    dots.forEach(function (d) {
      d.addEventListener('click', function () { goTo(parseInt(d.getAttribute('data-index'), 10)); restart(); });
    });

    // Pause on hover
    slider.addEventListener('mouseenter', stop);
    slider.addEventListener('mouseleave', start);

    start();
  }

  // Chat bot widget
  var chatbot = document.getElementById('chatbot');
  if (chatbot) {
    var toggle = document.getElementById('chatbotToggle');
    var body = document.getElementById('chatbotBody');
    var form = document.getElementById('chatbotForm');
    var input = document.getElementById('chatbotText');
    var quick = document.getElementById('chatbotQuick');
    var openBtn = document.getElementById('openChatBtn');

    function openChat() { chatbot.classList.add('open'); toggle.setAttribute('aria-label', 'Close chat'); input.focus(); }
    function toggleChat() { chatbot.classList.toggle('open'); }

    toggle.addEventListener('click', toggleChat);
    if (openBtn) openBtn.addEventListener('click', function (e) { e.preventDefault(); openChat(); });

    function addMsg(text, who) {
      var el = document.createElement('div');
      el.className = 'chat-msg ' + who;
      el.textContent = text;
      body.appendChild(el);
      body.scrollTop = body.scrollHeight;
    }

    var answers = {
      services: 'We offer electrical, temperature, pressure, dimensional, mass and flow & gas calibration. Which one do you need?',
      quote: 'Great! Please share your equipment details and we will send a quote. You can also call +971 50 123 4567 or use the enquiry form below.',
      contact: 'You can reach us at +971 50 123 4567 or info@abucal.ae. We are in Mussafah Industrial Area, Abu Dhabi. Open Mon–Sat, 08:30–18:00.',
      iso: 'Yes! AbuCal is ISO 9001:2015 certified, so every calibration meets strict international standards.'
    };

    function botReply(text) {
      var t = text.toLowerCase();
      var reply;
      if (/service|calibrat/.test(t)) reply = answers.services;
      else if (/quote|price|cost|charge/.test(t)) reply = answers.quote;
      else if (/contact|phone|email|call|address|location/.test(t)) reply = answers.contact;
      else if (/iso|certif|accredit/.test(t)) reply = answers.iso;
      else reply = 'Thanks for your message! One of our experts will get back to you. You can also call +971 50 123 4567 or email info@abucal.ae.';
      setTimeout(function () { addMsg(reply, 'bot'); }, 500);
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var val = input.value.trim();
      if (!val) return;
      addMsg(val, 'user');
      input.value = '';
      botReply(val);
    });

    quick.addEventListener('click', function (e) {
      if (e.target.tagName === 'BUTTON') {
        var key = e.target.getAttribute('data-q');
        addMsg(e.target.textContent, 'user');
        setTimeout(function () { addMsg(answers[key], 'bot'); }, 500);
      }
    });
  }

  // Overlay header: turn solid glass on scroll
  var overlayHeader = document.getElementById('siteHeader');
  if (overlayHeader && overlayHeader.classList.contains('site-header--overlay')) {
    var onScroll = function () {
      if (window.scrollY > 60) {
        overlayHeader.classList.add('is-scrolled');
        document.body.classList.add('scrolled-past');
      } else {
        overlayHeader.classList.remove('is-scrolled');
        document.body.classList.remove('scrolled-past');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // FAQ accordion
  var faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(function (item) {
    var btn = item.querySelector('.faq-q');
    if (!btn) return;
    btn.addEventListener('click', function () {
      var isOpen = item.classList.toggle('open');
      btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  });

  // Language switcher dropdown
  var langSwitch = document.getElementById('langSwitch');
  if (langSwitch) {
    var langBtn = langSwitch.querySelector('.lang-current');
    langBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      var isOpen = langSwitch.classList.toggle('open');
      langBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
    document.addEventListener('click', function () {
      langSwitch.classList.remove('open');
      langBtn.setAttribute('aria-expanded', 'false');
    });
  }
})();
