<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/opiniones.html.twig */
class __TwigTemplate_7fb2af3dc164008fc92b8492ef291a2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/opiniones.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/opiniones.html.twig"));

        // line 1
        $context["opiniones"] = ((array_key_exists("opiniones", $context)) ? (_twig_default_filter((isset($context["opiniones"]) || array_key_exists("opiniones", $context) ? $context["opiniones"] : (function () { throw new RuntimeError('Variable "opiniones" does not exist.', 1, $this->source); })()), [])) : ([]));
        // line 2
        if (twig_test_empty((isset($context["opiniones"]) || array_key_exists("opiniones", $context) ? $context["opiniones"] : (function () { throw new RuntimeError('Variable "opiniones" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "    ";
            $context["opiniones"] = [0 => ["nombre" => "Usuario Demo 1", "tiempo" => "hace 2 días", "rating" => 5, "texto" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", "avatar" => "A"], 1 => ["nombre" => "Usuario Demo 2", "tiempo" => "hace 1 semana", "rating" => 5, "texto" => "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "avatar" => "B"], 2 => ["nombre" => "Usuario Demo 3", "tiempo" => "hace 2 semanas", "rating" => 5, "texto" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.", "avatar" => "C"], 3 => ["nombre" => "Usuario Demo 4", "tiempo" => "hace 3 semanas", "rating" => 5, "texto" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "avatar" => "D"], 4 => ["nombre" => "Usuario Demo 5", "tiempo" => "hace 1 mes", "rating" => 5, "texto" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.", "avatar" => "E"], 5 => ["nombre" => "Usuario Demo 6", "tiempo" => "hace 1 mes", "rating" => 5, "texto" => "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.", "avatar" => "F"]];
        }
        // line 48
        echo "
<div class=\"opiniones-slider\">
    <div class=\"containeropiniones\">
        <div class=\"slider-wrapper\">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opiniones"]) || array_key_exists("opiniones", $context) ? $context["opiniones"] : (function () { throw new RuntimeError('Variable "opiniones" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 53
            echo "                <div class=\"opinion\">
                    <div class=\"headeropinion d-flex full-height\">
                        <div class=\"opinion-avatar\">
                            <span>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "avatar", [], "any", false, false, false, 56), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"datosopinion\">
                            <h4 class=\"nombreopinion\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "nombre", [], "any", false, false, false, 59), "html", null, true);
            echo "</h4>
                            <p class=\"opinion-time\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "tiempo", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>
                            <p class=\"opinion-rating\">
                                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["opinion"], "rating", [], "any", false, false, false, 62)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 63
                echo "                                    ⭐
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                            </p>
                        </div>
                    </div>
                    <div class=\"opinion-content\">
                        <p class=\"opinion-text\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "texto", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </div>
    </div>
    <button class=\"slider-button prev\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 40 40\" width=\"40\" height=\"40\">
            <path d=\"M24.5,0.932L10,15.532L24.5,30.132L28.8,25.732L16.2,15.532L28.8,5.332Z\"></path>
        </svg>
    </button>
    <button class=\"slider-button next\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 40 40\" width=\"40\" height=\"40\">
            <path d=\"M15.5,0.932L30,15.532L15.5,30.132L11.2,25.732L23.8,15.532L11.2,5.332Z\"></path>
        </svg>
    </button>
</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    let currentIndex = 0;
    let intervalId;
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const originalItems = document.querySelectorAll('.opinion');
    const prevButton = document.querySelector('.slider-button.prev');
    const nextButton = document.querySelector('.slider-button.next');
    
    // Clonar todos los elementos originales
    originalItems.forEach(item => {
        const clone = item.cloneNode(true);
        sliderWrapper.appendChild(clone);
    });

    const totalItems = originalItems.length;

    function calculateSlideWidth() {
        // Calcular ancho dinámicamente, especialmente para móvil
        const firstItem = originalItems[0];
        const wrapperStyles = getComputedStyle(sliderWrapper);
        const gap = parseInt(wrapperStyles.gap || '0');
        return firstItem.offsetWidth + gap;
    }

    function updateSliderPosition(useTransition = true) {
        const slideWidth = calculateSlideWidth();
        
        if (!useTransition) {
            sliderWrapper.style.transition = 'none';
        } else {
            sliderWrapper.style.transition = 'transform 0.5s ease';
        }
        
        const offset = currentIndex * slideWidth;
        sliderWrapper.style.transform = `translateX(-\${offset}px)`;

        // Si llegamos al final del conjunto original
        if (currentIndex >= totalItems) {
            setTimeout(() => {
                // Resetear al inicio sin transición
                sliderWrapper.style.transition = 'none';
                currentIndex = 0;
                sliderWrapper.style.transform = `translateX(0)`;
                setTimeout(() => {
                    sliderWrapper.style.transition = 'transform 0.5s ease';
                }, 10);
            }, 500);
        }
    }

    function nextSlide() {
        currentIndex++;
        if (currentIndex > totalItems) {
            currentIndex = 0;
        }
        updateSliderPosition();
    }

    function prevSlide() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = totalItems - 1;
            sliderWrapper.style.transition = 'none';
            sliderWrapper.style.transform = `translateX(-\${currentIndex * calculateSlideWidth()}px)`;
            requestAnimationFrame(() => {
                sliderWrapper.style.transition = 'transform 0.5s ease';
                updateSliderPosition();
            });
        } else {
            updateSliderPosition();
        }
    }

    function startAutoSlide() {
        stopAutoSlide();
        intervalId = setInterval(nextSlide, 3000);
    }

    function stopAutoSlide() {
        if (intervalId) {
            clearInterval(intervalId);
        }
    }

    // Soporte táctil para móviles
    let startX = 0;
    let endX = 0;

    sliderWrapper.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        stopAutoSlide();
    });

    sliderWrapper.addEventListener('touchmove', (e) => {
        endX = e.touches[0].clientX;
    });

    sliderWrapper.addEventListener('touchend', () => {
        const diffX = startX - endX;
        if (Math.abs(diffX) > 50) { // Umbral de deslizamiento
            if (diffX > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
        startAutoSlide();
    });

    // Inicialización y eventos
    if (totalItems > 0) {
        // Posición inicial
        updateSliderPosition(false);
        
        // Auto-slide
        startAutoSlide();

        // Eventos de botones
        prevButton?.addEventListener('click', () => {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });

        nextButton?.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });

        // Pausar en hover
        sliderWrapper.addEventListener('mouseenter', stopAutoSlide);
        sliderWrapper.addEventListener('mouseleave', startAutoSlide);

        // Ajustar en resize
        window.addEventListener('resize', () => {
            updateSliderPosition(false);
        });
    }
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/opiniones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 73,  98 => 69,  92 => 65,  85 => 63,  81 => 62,  76 => 60,  72 => 59,  66 => 56,  61 => 53,  57 => 52,  51 => 48,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set opiniones = opiniones|default([]) %}
{% if opiniones is empty %}
    {% set opiniones = [
        {
            'nombre': 'Usuario Demo 1',
            'tiempo': 'hace 2 días',
            'rating': 5,
            'texto': 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'avatar': 'A'
        },
        {
            'nombre': 'Usuario Demo 2',
            'tiempo': 'hace 1 semana',
            'rating': 5,
            'texto': 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'avatar': 'B'
        },
        {
            'nombre': 'Usuario Demo 3',
            'tiempo': 'hace 2 semanas',
            'rating': 5,
            'texto': 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'avatar': 'C'
        },
        {
            'nombre': 'Usuario Demo 4',
            'tiempo': 'hace 3 semanas',
            'rating': 5,
            'texto': 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'avatar': 'D'
        },
        {
            'nombre': 'Usuario Demo 5',
            'tiempo': 'hace 1 mes',
            'rating': 5,
            'texto': 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
            'avatar': 'E'
        },
        {
            'nombre': 'Usuario Demo 6',
            'tiempo': 'hace 1 mes',
            'rating': 5,
            'texto': 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.',
            'avatar': 'F'
        }
    ] %}
{% endif %}

<div class=\"opiniones-slider\">
    <div class=\"containeropiniones\">
        <div class=\"slider-wrapper\">
            {% for opinion in opiniones %}
                <div class=\"opinion\">
                    <div class=\"headeropinion d-flex full-height\">
                        <div class=\"opinion-avatar\">
                            <span>{{ opinion.avatar }}</span>
                        </div>
                        <div class=\"datosopinion\">
                            <h4 class=\"nombreopinion\">{{ opinion.nombre }}</h4>
                            <p class=\"opinion-time\">{{ opinion.tiempo }}</p>
                            <p class=\"opinion-rating\">
                                {% for i in 1..opinion.rating %}
                                    ⭐
                                {% endfor %}
                            </p>
                        </div>
                    </div>
                    <div class=\"opinion-content\">
                        <p class=\"opinion-text\">{{ opinion.texto }}</p>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
    <button class=\"slider-button prev\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 40 40\" width=\"40\" height=\"40\">
            <path d=\"M24.5,0.932L10,15.532L24.5,30.132L28.8,25.732L16.2,15.532L28.8,5.332Z\"></path>
        </svg>
    </button>
    <button class=\"slider-button next\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 40 40\" width=\"40\" height=\"40\">
            <path d=\"M15.5,0.932L30,15.532L15.5,30.132L11.2,25.732L23.8,15.532L11.2,5.332Z\"></path>
        </svg>
    </button>
</div>

<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    let currentIndex = 0;
    let intervalId;
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const originalItems = document.querySelectorAll('.opinion');
    const prevButton = document.querySelector('.slider-button.prev');
    const nextButton = document.querySelector('.slider-button.next');
    
    // Clonar todos los elementos originales
    originalItems.forEach(item => {
        const clone = item.cloneNode(true);
        sliderWrapper.appendChild(clone);
    });

    const totalItems = originalItems.length;

    function calculateSlideWidth() {
        // Calcular ancho dinámicamente, especialmente para móvil
        const firstItem = originalItems[0];
        const wrapperStyles = getComputedStyle(sliderWrapper);
        const gap = parseInt(wrapperStyles.gap || '0');
        return firstItem.offsetWidth + gap;
    }

    function updateSliderPosition(useTransition = true) {
        const slideWidth = calculateSlideWidth();
        
        if (!useTransition) {
            sliderWrapper.style.transition = 'none';
        } else {
            sliderWrapper.style.transition = 'transform 0.5s ease';
        }
        
        const offset = currentIndex * slideWidth;
        sliderWrapper.style.transform = `translateX(-\${offset}px)`;

        // Si llegamos al final del conjunto original
        if (currentIndex >= totalItems) {
            setTimeout(() => {
                // Resetear al inicio sin transición
                sliderWrapper.style.transition = 'none';
                currentIndex = 0;
                sliderWrapper.style.transform = `translateX(0)`;
                setTimeout(() => {
                    sliderWrapper.style.transition = 'transform 0.5s ease';
                }, 10);
            }, 500);
        }
    }

    function nextSlide() {
        currentIndex++;
        if (currentIndex > totalItems) {
            currentIndex = 0;
        }
        updateSliderPosition();
    }

    function prevSlide() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = totalItems - 1;
            sliderWrapper.style.transition = 'none';
            sliderWrapper.style.transform = `translateX(-\${currentIndex * calculateSlideWidth()}px)`;
            requestAnimationFrame(() => {
                sliderWrapper.style.transition = 'transform 0.5s ease';
                updateSliderPosition();
            });
        } else {
            updateSliderPosition();
        }
    }

    function startAutoSlide() {
        stopAutoSlide();
        intervalId = setInterval(nextSlide, 3000);
    }

    function stopAutoSlide() {
        if (intervalId) {
            clearInterval(intervalId);
        }
    }

    // Soporte táctil para móviles
    let startX = 0;
    let endX = 0;

    sliderWrapper.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        stopAutoSlide();
    });

    sliderWrapper.addEventListener('touchmove', (e) => {
        endX = e.touches[0].clientX;
    });

    sliderWrapper.addEventListener('touchend', () => {
        const diffX = startX - endX;
        if (Math.abs(diffX) > 50) { // Umbral de deslizamiento
            if (diffX > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
        startAutoSlide();
    });

    // Inicialización y eventos
    if (totalItems > 0) {
        // Posición inicial
        updateSliderPosition(false);
        
        // Auto-slide
        startAutoSlide();

        // Eventos de botones
        prevButton?.addEventListener('click', () => {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });

        nextButton?.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });

        // Pausar en hover
        sliderWrapper.addEventListener('mouseenter', stopAutoSlide);
        sliderWrapper.addEventListener('mouseleave', startAutoSlide);

        // Ajustar en resize
        window.addEventListener('resize', () => {
            updateSliderPosition(false);
        });
    }
});
</script>", "main/opiniones.html.twig", "C:\\xampp\\htdocs\\v3\\templates\\main\\opiniones.html.twig");
    }
}
