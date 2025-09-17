// Sistema de partículas para fondo animado
class ParticleSystem {
  constructor(options = {}) {
    this.canvas = null;
    this.ctx = null;
    this.particles = [];
    this.numParticles = options.numParticles || 80;
    this.animationId = null;
    
    this.colorMode = options.colorMode || 'theme-adaptive';
    this.colors = options.colors || this.getThemeColors();
    
    this.init();
    
    this.watchThemeChanges();
  }

  getThemeColors() {
    const rootStyles = getComputedStyle(document.documentElement);
    const particleColor = rootStyles.getPropertyValue('--particle-color').trim();
    
    if (particleColor) {
      return [particleColor];
    }
    

    const bgColor = rootStyles.getPropertyValue('--background').trim();
    const isDark = bgColor === '#121212' || document.documentElement.hasAttribute('data-theme');
    
    return isDark 
      ? ['rgba(255, 255, 255, 0.6)', 'rgba(255, 255, 255, 0.4)', 'rgba(255, 255, 255, 0.8)']
      : ['rgba(0, 0, 0, 0.6)', 'rgba(0, 0, 0, 0.4)', 'rgba(0, 0, 0, 0.8)'];
  }

  watchThemeChanges() {
    const observer = new MutationObserver(() => {
      this.updateThemeColors();
    });
    
    observer.observe(document.documentElement, {
      attributes: true,
      attributeFilter: ['data-theme']
    });
  }
  

  updateThemeColors() {
    this.colors = this.getThemeColors();

    this.particles.forEach(particle => {
      if (this.colorMode === 'theme-adaptive') {
        particle.updateColor(this.colors);
      }
    });
  }

  init() {

    this.canvas = document.createElement('canvas');
    this.canvas.id = 'particles';
    this.ctx = this.canvas.getContext('2d');
    
    const container = document.getElementById('particles-container');
    if (container) {
      container.appendChild(this.canvas);
    } else {
      document.body.insertBefore(this.canvas, document.body.firstChild);
    }
    
    // Configurar tamaño inicial
    this.resizeCanvas();
    
    // Crear partículas
    this.createParticles();
    
    // Iniciar animación
    this.animate();
    
    window.addEventListener('resize', () => this.resizeCanvas());
  }

  resizeCanvas() {
    this.canvas.width = window.innerWidth;
    this.canvas.height = window.innerHeight;
  }

  createParticles() {
    this.particles = [];
    for (let i = 0; i < this.numParticles; i++) {
      this.particles.push(new Particle(this.canvas, this.colorMode, this.colors));
    }
  }

  animate() {
    this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
    
    this.particles.forEach(particle => {
      particle.update();
      particle.draw(this.ctx);
    });
    
    this.animationId = requestAnimationFrame(() => this.animate());
  }

  stop() {
    if (this.animationId) {
      cancelAnimationFrame(this.animationId);
    }
  }
}

class Particle {
  constructor(canvas, colorMode, colors) {
    this.canvas = canvas;
    this.colorMode = colorMode;
    this.colors = colors;
    this.reset();
  }

  reset() {
    this.x = Math.random() * this.canvas.width;
    this.y = Math.random() * this.canvas.height;
    this.size = Math.random() * 3 + 1;
    this.speedX = (Math.random() - 0.5) * 1.5;
    this.speedY = (Math.random() - 0.5) * 1.5;
    this.opacity = Math.random() * 0.5 + 0.3;
    
    this.updateColor(this.colors);
  }
  
  updateColor(colors) {
    // Asignar color según el modo
    if (this.colorMode === 'random' || this.colorMode === 'theme-adaptive') {
      this.color = colors[Math.floor(Math.random() * colors.length)];
    } else {
      this.color = colors[0]; 
    }
  }

  update() {
    this.x += this.speedX;
    this.y += this.speedY;
    
    //Rebotar en los bordes
    if (this.x < 0 || this.x > this.canvas.width) {
      this.speedX *= -1;
    }
    if (this.y < 0 || this.y > this.canvas.height) {
      this.speedY *= -1;
    }
    
    //Para que no escapen del canvas
    this.x = Math.max(0, Math.min(this.canvas.width, this.x));
    this.y = Math.max(0, Math.min(this.canvas.height, this.y));
  }

  draw(ctx) {
    ctx.save();
    ctx.globalAlpha = this.opacity;
    ctx.fillStyle = this.color;
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    ctx.fill();
    ctx.restore();
  }
}

document.addEventListener('DOMContentLoaded', function() {
    //Este es delay
  setTimeout(() => {
    window.particleSystem = new ParticleSystem({
      colorMode: 'theme-adaptive',
      numParticles: 60 //Cantidad de partículas
    });
  }, 100);
});     