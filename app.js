// app.js – LAMP Stack on Azure
document.addEventListener('DOMContentLoaded', () => {
  // Animate info cards on load
  document.querySelectorAll('.info-card, .stack-card, .arch-node').forEach((el, i) => {
    el.style.opacity   = '0';
    el.style.transform = 'translateY(16px)';
    el.style.transition = `opacity 0.4s ease ${i * 0.06}s, transform 0.4s ease ${i * 0.06}s`;
    setTimeout(() => { el.style.opacity = '1'; el.style.transform = 'translateY(0)'; }, 50);
  });
  console.log('%c ⚡ LAMP on Azure – Container Running ', 'background:#0078d4;color:#fff;padding:4px 12px;border-radius:4px;font-weight:bold;');
});
