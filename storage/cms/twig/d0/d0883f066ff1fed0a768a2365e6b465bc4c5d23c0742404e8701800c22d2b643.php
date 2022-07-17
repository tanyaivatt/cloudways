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

/* C:\OpenServer\domains\test/themes/salon_of_beauty/partials/header.htm */
class __TwigTemplate_d4621596dace311e76bfb67f16efdb896ff4cdd14778ee0bc29ac8920d180e8e extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"header\" >

    <a href=\"#\" class=\"logo\">  
        <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"\" style=\"width: 10rem;\"> 
    </a>

    <nav class=\"navbar\">
        <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Головна</a>
        <a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "#services\">Послуги</a>
        <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "#masters\">Майстри</a>
        <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "#review\">Відгуки</a>
    </nav>

    <div id=\"menu-btn\" class=\"fas fa-bars\"></div>

</header>


%put scripts%

<script>

// кнопка меню
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

                    // Get the element
                    let topBtn = document.querySelector(\".button1\");

                    // On Click, Scroll to the page's top, replace 'smooth' with 'auto' if you don't want smooth scrolling
                    topBtn.onclick = () => window.scrollTo({ top: 0, behavior: \"smooth\" });

                    // On scroll, Show/Hide the btn with animation
                    window.onscroll = () => window.scrollY > 500 ? topBtn.style.opacity = 1 : topBtn.style.opacity = 0
               
</script>

%endput%";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  55 => 9,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\" >

    <a href=\"#\" class=\"logo\">  
        <img src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"\" style=\"width: 10rem;\"> 
    </a>

    <nav class=\"navbar\">
        <a href=\"{{ 'home'|page }}\">Головна</a>
        <a href=\"{{ 'home'|page }}#services\">Послуги</a>
        <a href=\"{{ 'home'|page }}#masters\">Майстри</a>
        <a href=\"{{ 'home'|page }}#review\">Відгуки</a>
    </nav>

    <div id=\"menu-btn\" class=\"fas fa-bars\"></div>

</header>


%put scripts%

<script>

// кнопка меню
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

                    // Get the element
                    let topBtn = document.querySelector(\".button1\");

                    // On Click, Scroll to the page's top, replace 'smooth' with 'auto' if you don't want smooth scrolling
                    topBtn.onclick = () => window.scrollTo({ top: 0, behavior: \"smooth\" });

                    // On scroll, Show/Hide the btn with animation
                    window.onscroll = () => window.scrollY > 500 ? topBtn.style.opacity = 1 : topBtn.style.opacity = 0
               
</script>

%endput%", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 4, "page" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
