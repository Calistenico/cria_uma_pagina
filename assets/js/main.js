// assets/js/main.js

function initNavbar() {
  const navbar = document.querySelector('.navbar');
  const scrollPosition = window.scrollY;

  // Blur da navbar no scroll
  navbar.style.filter = 'blur(2px)';
  navbar.style.opacity = '0.5';

  // Hamburger toggle
  const hamburger = document.querySelector('.hamburger');
  hamburger.addEventListener('click', () => {
    navbar.classList.toggle('open');
  });

  // Adiciona classe 'active' ao navbar quando o usuário está na seção de planos
  const plansSection = document.querySelector('#plans');
  if (scrollPosition >= plansSection.offsetTop) {
    navbar.classList.add('active');
  } else {
    navbar.classList.remove('active');
  }
}

function initScrollReveal() {
  const reveals = document.querySelectorAll('.reveal');

  // Configuração do IntersectionObserver
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.5 });

  // Adiciona evento de intersect para cada elemento com classe 'reveal'
  reveals.forEach((reveal) => {
    observer.observe(reveal);
  });
}

function initCounters() {
  const counters = document.querySelectorAll('.counter');

  // Detecção de elementos com data-target="2847"
  const targetValues = [20, 55];

  counters.forEach((counter) => {
    if (counter.dataset.target === '2847') {
      let value = parseInt(counter.textContent);
      counter.textContent = `R$ ${value}`;

      function animateCounter() {
        if (value < targetValues[0]) {
          const easing = Math.pow(2, -20 * (value / targetValues[0]));
          counter.style.transform = `scale(${easing})`;
          value += 1;
          setTimeout(() => {
            animateCounter();
          }, 50);
        } else if (value < targetValues[1]) {
          const easing = Math.pow(2, -20 * ((targetValues[0] + value) / targetValues[1]));
          counter.style.transform = `scale(${easing})`;
          value += 1;
          setTimeout(() => {
            animateCounter();
          }, 50);
        } else {
          counter.style.transform = 'scale(1)';
        }
      }

      animateCounter();
    }
  });
}

function initFAQ() {
  const faqItems = document.querySelectorAll('.faq-item');

  // Adiciona evento de clique para cada elemento com classe 'faq-item'
  faqItems.forEach((item) => {
    item.addEventListener('click', () => {
      if (item.classList.contains('open')) {
        item.classList.remove('open');
      } else {
        item.classList.add('open');
      }
    });
  });

  // Adiciona transição max-height suave
  faqItems.forEach((item) => {
    const maxHeight = parseInt(item.style.maxHeight);
    item.addEventListener('click', () => {
      if (item.classList.contains('open')) {
        item.style.maxHeight = '0px';
        setTimeout(() => {
          item.style.maxHeight = `${maxHeight}px`;
        }, 200);
      } else {
        item.style.maxHeight = `${maxHeight}px`;
      }
    });
  });
}

function initSmoothScroll() {
  const links = document.querySelectorAll('a[href^="#"]');

  // Adiciona evento de clique para cada link com classe 'link'
  links.forEach((link) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const href = link.getAttribute('href');
      window.scrollTo({ top: parseInt(href.replace('#', '')), behavior: 'smooth' });
    });
  });
}

function initWhatsApp() {
  const whatsappButton = document.querySelector('.whatsapp-button');

  // Formatação do link do botão flutuante
  const whatsappLink = `https://wa.me/+55${window.location.search.split('=')[1]}`;
  whatsappButton.setAttribute('href', whatsappLink);
}

function initTabs() {
  const tabs = document.querySelectorAll('.tab');

  // Adiciona evento de clique para cada elemento com classe 'tab'
  tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
      tabs.forEach((t) => t.classList.remove('active'));
      tab.classList.add('active');
    });
  });

  // Adiciona transição suave
  tabs.forEach((tab) => {
    const activeTab = document.querySelector('.tab.active');
    if (tab === activeTab) {
      tab.style.transition = 'all 0.3s ease';
    } else {
      tab.style.transition = '';
    }
  });
}

function initSlider() {
  const slider = document.querySelector('.slider');

  // Adiciona evento de clique para cada elemento com classe 'slide'
  const slides = slider.querySelectorAll('.slide');
  slides.forEach((slide) => {
    slide.addEventListener('click', () => {
      slides.forEach((s) => s.classList.remove('active'));
      slide.classList.add('active');
    });
  });

  // Adiciona transição suave
  slides.forEach((slide) => {
    const activeSlide = document.querySelector('.slide.active');
    if (slide === activeSlide) {
      slide.style.transition = 'all 0.3s ease';
    } else {
      slide.style.transition = '';
    }
  });
}

function initFormValidation() {
  const forms = document.querySelectorAll('form');

  // Adiciona evento de submit para cada form com classe 'form'
  forms.forEach((form) => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const inputs = form.querySelectorAll('input');
      let isValid = true;
      inputs.forEach((input) => {
        if (!input.value.trim()) {
          input.classList.add('error');
          isValid = false;
        } else {
          input.classList.remove('error');
        }
      });
      if (isValid) {
        // Envio do formulário
        const formData = new FormData(form);
        fetch('/enviar-formulario', { method: 'POST', body: formData })
          .then((response) => response.json())
          .then((data) => console.log(data))
          .catch((error) => console.error(error));
      }
    });
  });

  // Adiciona transição suave
  forms.forEach((form) => {
    const activeForm = document.querySelector('form.active');
    if (form === activeForm) {
      form.style.transition = 'all 0.3s ease';
    } else {
      form.style.transition = '';
    }
  });
}

function initDebounceScroll() {
  let timeoutId;

  window.addEventListener('scroll', () => {
    clearTimeout(timeoutId);
    timeoutId = setTimeout(() => {
      // Execução da função com o valor atual de scroll
      const scrollPosition = window.scrollY;
      // Adiciona classe 'active' ao navbar quando o usuário está na seção de planos
      const plansSection = document.querySelector('#plans');
      if (scrollPosition >= plansSection.offsetTop) {
        document.querySelector('.navbar').classList.add('active');
      } else {
        document.querySelector('.navbar').classList.remove('active');
      }
    }, 500);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  initNavbar();
  initScrollReveal();
  initCounters();
  initFAQ();
  initSmoothScroll();
  initWhatsApp();
  // initTabs();
  // initSlider();
  initFormValidation();
  initDebounceScroll();

  console.log('Código executado com sucesso!');
});