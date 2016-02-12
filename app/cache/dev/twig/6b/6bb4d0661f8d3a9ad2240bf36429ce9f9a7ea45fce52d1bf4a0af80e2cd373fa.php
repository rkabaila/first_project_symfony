<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0d682b03e5f1d9d0e81fa6f0d2ee5d4b517834686c1a2e4cf1f24faf064a42b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48de1f85ed30feaa04e562cb3cc47eb112174fcae08c44d97c4ef84432c61f32 = $this->env->getExtension("native_profiler");
        $__internal_48de1f85ed30feaa04e562cb3cc47eb112174fcae08c44d97c4ef84432c61f32->enter($__internal_48de1f85ed30feaa04e562cb3cc47eb112174fcae08c44d97c4ef84432c61f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_48de1f85ed30feaa04e562cb3cc47eb112174fcae08c44d97c4ef84432c61f32->leave($__internal_48de1f85ed30feaa04e562cb3cc47eb112174fcae08c44d97c4ef84432c61f32_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
