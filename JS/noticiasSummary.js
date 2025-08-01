  document.querySelectorAll('.animated-details').forEach((details) => {
    const summary = details.querySelector('summary');
    const content = details.querySelector('.contenido');

    summary.addEventListener('click', (e) => {
      e.preventDefault(); 

      const isOpen = details.hasAttribute('open');

      if (!isOpen) {
        details.setAttribute('open', true); 

        const height = content.scrollHeight + 'px';
        content.style.height = height;
        content.style.opacity = 1;

        setTimeout(() => {
          content.style.height = 'auto';
        }, 400);
      } else {

        content.style.height = content.scrollHeight + 'px'; 
        
        requestAnimationFrame(() => {
          content.style.height = '0px';
          content.style.opacity = 0;
        });

        setTimeout(() => {
          details.removeAttribute('open');
        }, 400); 
      }
    });
  });